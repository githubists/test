<?php



//オリジナルとコンテントの内容が違ったらどうなるのか
//オーディオの長さが違ったらどうなるのか
//地図上の住所と緯度経度と名前に一貫性がなかったらどうなるのか

//Composerでインストールしたライブラリを一括読み込み
require_once __DIR__ . '/vendor/autoload.php';



$events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);

//状態の設定
$string = file_get_contents("active.txt");
if($string == 'active'){
    $active = true;
}else{
    $active = false;
}


$openKey = ['でてこいやー', '出てこいやー'];
$menuKey = ['どーこだ', 'どーこだ？'];
$closeKey= ['おわりだよ', '終わりだよ'];
date_default_timezone_set('Asia/Tokyo');


foreach($events as $event){
    $profile = $bot->getProfile($event->getUserId())->getJSONDecodedBody();
    if($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage){
        if($active){
            //$closeKeyの要素と同じ場合はclose
            if(in_array($event->getText(), $closeKey)){
                close($bot, $event, $profile);
                $active = false;
                continue;
            }
            //$menuKeyの要素と同じ場合はopenMenu
            if(in_array($event->getText(), $menuKey)){
                openMenu($bot, $event);
                $active = true;
                continue;
            }
            //言葉を探して返答
           reply($bot, $event, $profile);
        }else{
            //$openKeyの要素と同じ場合はopen
            if(in_array($event->getText(), $openKey))
                open($bot, $event, $profile);
        }
    }
}
  
    


function close($bot, $event, $profile){
    replyMultiMessage($bot, $event->getReplyToken(),
        new \LINE\LINEBot\MessageBuilder\StickerMessageBuilder(1, 403),
 //       new \LINE\LINEBot\MessageBuilder\ImageMessageBuilder(
 //           'https://' . $_SERVER['HTTP_HOST'] . '/imgs/MajiroOriginal.jpg',
//            'https://' . $_SERVER['HTTP_HOST'] . '/imgs/MajiroPreview.jpg'),
        new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(
            "-----------------------------------\n" .
            date('c') . " Aristotle: stopped by " . $profile['displayName'] .
            "\n-----------------------------------"
            )
        );
    $a = fopen("active.txt", "w");
    @fwrite($a, "inactive");
    fclose($a);
}

function open($bot, $event, $profile){
    replyMultiMessage($bot, $event->getReplyToken(),
        
        new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(
            "-----------------------------------\n" .
            date('c') . " Aristotle: started by " . $profile['displayName'] . "\n" . 
            date('c') . " Aristotle: successfully launched!!!\n" .
            "-----------------------------------"
            ),
        new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('うるせぇなほんとにもぉ'),
        menuBuilder()
        );
    $a = fopen("active.txt", "w");
    @fwrite($a, "active");
    fclose($a);
}

function reply($bot, $event, $profile){
    if($event->getText() == '世界で最もえらいアリストテレス先生、私は誰ですかぁ〜？'){
            replyTextMessage($bot, $event->getReplyToken(), 'ミンタだよ');
            return;
    }
    if($event->getText() == 'こんにちは、ぼくドラえもん'){
        replyTextMessage($bot, $event->getReplyToken(), 'うーそーだーろ？');
        return;
    }
    if($event->getText() == '話変わるけど、いきものがかりのボーカルの子って可愛いんですかね〜？'){
        replyTextMessage($bot, $event->getReplyToken(), 'なつかしいなおい');
        return;
    }
    if($event->getText() == 'ばかでぇ〜す'){
        replyTextMessage($bot, $event->getReplyToken(), 'へーそうなんだ。それはよかったね。');
        return;
    }
    if($event->getText() == "本校は，小学校における教育の基礎の上に，心身の発達に応じて義務教育と" . 
        "しての普通教育を行うとともに，筑波大学附属駒場高等学校と一体となって，" . 
        "筑波大学における生徒の教育に関する研究に協力し，かつ，筑波大学の計画に 従い，学生の教育実習の実施にあたる使命を持っています"){
        replyTextMessage($bot, $event->getReplyToken(), 'あたまおかしいんちゃう？');
        return;
    }
    if($event->getText() == "あそぶ"){
        replyTextMessage($bot, $event->getReplyToken(), "いいよ");
        return;
    }
    
    
    
    
}

function openMenu($bot, $event){
    $response = $bot->replyMessage($event->getReplyToken(), menuBuilder());
    if(!$response->isSucceeded()){
        error_log('failed! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}



function replyTextMessage($bot, $replyToken, $text){
    $response = $bot->replyMessage($replyToken, new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text));
    if(!$response->isSucceeded()){
        error_log('failed! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}
/*
function replyImageMessage($bot, $replyToken, $originalImageUrl, $previewImageUrl){
    $response = $bot->replyMessage($replyToken, new \LINE\LINEBot\MessageBuilder\ImageMessageBuilder(
        $originalImageUrl, $previewImageUrl));
    if(!$response->isSucceeded()){
        error_log('failed! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}

function replyLocationMessage($bot, $replyToken, $title, $address, $lat, $lon){
    $response = $bot->replyMessage($replyToken, new\LINE\LINEBot\MessageBuilder\LocationMessageBuilder(
        $title, $address, $lat, $lon));
    if(!$response->isSucceeded){
        error_log('failed! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}

function replyStickerMessage($bot, $replyToken, $packageId, $stickerId){
    $response = $bot->replyMessage($replyToken, new \LINE\LINEBot\MessageBuilder\StickerMessageBuilder(
        $packageId, $stickerId));
    if(!$response->isSucceeded){
        error_log('failed! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}
*/
/*
function replyVideoMessage($bot, $replyToken, $originalContentUrl, $previewContentUrl){
    $response = $bot->replyMessage($replyToken, new \LINE\LINEBot\MessageBuilder\VideoMessageBuilder(
        $originalContentUrl, $previewContentUrl));
    if(!$response->isSucceeded){
        error_log('failed! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}
*/
/*
function replyAudioMessage($bot, $replyToken, $originalContentUrl, $audioLength){
    $response = $bot->replyMessage($replyToken, new \LINE\LINEBot\MessageBuilder\AudioMessageBuilder(
        $originalContentUrl, $audioLength));
    if(!$response->isSucceeded){
        error_log('failed! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}
*/
function replyMultiMessage($bot, $replyToken , ...$msgs){
    $builder = new \LINE\LINEBot\MessageBuilder\MultiMessageBuilder();
    foreach($msgs as $value){
        $builder->add($value);
    }
    $response = $bot->replyMessage($replyToken, $builder);
    if(!$response->isSucceeded()){
        error_log('fail! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}


function replyButtonsTemplate($bot, $replyToken, $alternativeText, $imageUrl, $title, $text, ...$actions){
    $actionArray = array();
    foreach($actions as $value){
        array_push($actionArray, $value);
    }
    $builder = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($alternativeText,
        new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(
            $title, $text, $imageUrl, $actionArray));
    
    $response = $bot->replyMessage($replyToken, $builder);
    if(!$response->isSucceeded()){
       error_log('fail! ' . $response->getHTTPStatus . ' ' . $response->getRawBody()); 
    }
        
}


//ヘルプのurlを入れなければ
function menuBuilder(){
    $trapArray = array(
        0 => '世界で最もえらいアリストテレス先生、私は誰ですかぁ〜？',
        1 =>'こんにちは、ぼくドラえもん',
        2 => '話変わるけど、いきものがかりのボーカルの子って可愛いんですかね〜？',
        3 => 'ばかでぇ〜す',
        4 => "本校は，小学校における教育の基礎の上に，心身の発達に応じて義務教育と" .
        "しての普通教育を行うとともに，筑波大学附属駒場高等学校と一体となって，" .
        "筑波大学における生徒の教育に関する研究に協力し，かつ，筑波大学の計画に 従い，学生の教育実習の実施にあたる使命を持っています"
    );
    $trapMessage = $trapArray[rand(0, count($trapArray))];
    $actionArray = [
        new LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder('あそぶ', 'あそぶ'),
        new LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder('罠にかかる', $trapMessage),
        new LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder('終了する', '終わりだよ'),
        new LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('ヘルプ', 'https://rijikaiai.herokuapp.com/Aristotle.html')
    ];
    $builder = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder(
        'Aristotle Menu', 
        new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(
            'アリストテレス',
            'な に が し た い ん で す か・・・？',
            'https://' . $_SERVER['HTTP_HOST'] . '/imgs/menu.jpg',
            $actionArray
            )
        );
    return $builder;
}




/*
function replyConfirmTemplate($bot, $replyToken, $alternativeText, $text, ...$actions){
    $actionArray = array();
    foreach($actions as $value){
        array_push($actionArray, $value);
    }
    $builder = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder(
        $alternativeText,
        new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder($text, $actionArray)
        );
    $response = $bot->replyMessage($replyToken, $builder);
    if(!$response->isSucceeded()){
        error_log('Failed! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}
*/
/*
function replyCarouselTemplate($bot, $replyToken, $alternativeText, $columnArray){
    $builder = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder(
        $alternativeText,
        new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columnArray)
        );
    $response = $bot->replyMessage($replyToken, $builder);
    if(!$response->isSucceeded){
        error_log('failde! ' . $response->getHTTPStatus . ' ' . $response->getRawBody());
    }
}
*/






?>






