"use strict";

function feedToNewslist(data,state,feed){
  if(state=="success"){
    var feedXml = data
    var newsXMLs = $('entry',feedXml)
    var newsUl = $('ul#newslist')
    var newsArray = []
    var newsXML
    var news
    var dateString
    if(newsXMLs.length<1){
      return ;
    }
    newsXMLs.each(function(idx,newsXML){
      newsArray.push({
        title:$('title',newsXML).text(),
        href:$('link',newsXML).attr('href').replace("https://"+"utmed-mayfes.net",""),//document.domainに変換
        contents:$('summary',newsXML).text(),
        release:$('updated',newsXML).text()
      });
    })

    newsUl.text("")
    newsArray.sort(function(a,b){
    if(a.release>b.release) return -1;
    if(a.release < b.release) return 1;
    return 0;})
    for(var i=0;i<newsArray.length;i++){
      news=newsArray[i]
      dateString=news.release.split(/[-T:\.\+]/)
      newsUl.append('<li class="list-group-item"><a href="'+
        news.href+'"><article><p><small><i class="icon-calendar"></i><time datetime="'+
        news.release+'"> '+dateString[0]+'/'+dateString[1]+'/'+dateString[2]+
        '</time></small></p><h3 class="list-group-item-heading">'+
        news.title+'</h3><p class="list-group-item-text">'+
        news.contents+'</p></article></a></li>')
    }
   }
}

//Window Load
jQuery(window).load(function($) {

    /*Init Portfolio*/
    var container = jQuery("#work-grid");
    if (container.length > 0) {
        container.isotope({
            layoutMode: 'masonry',
            transitionDuration: '0.7s',
            columnWidth: 60
        });
    };

    //Filter Portfolio
    jQuery('a.filter').on('click', function() {
        var to_filter = jQuery(this).attr('data-filter');
        if (to_filter == 'all') {
            container.isotope({
                filter: '.mix'
            });
        } else {
            container.isotope({
                filter: '.' + to_filter
            });
        }
    });

    //Switch Classes portfolio
    jQuery('.filter').on('click', function() {
        jQuery('a.filter').removeClass('active');
        jQuery(this).addClass('active');
    });
    if(jQuery('ul#newslist').length>0){jQuery.get("/feed.xml",feedToNewslist)}//localで動かすときは../feed
});





//書き加え
function headerSticky(){
    var scrolledY = jQuery(window).scrollTop();
    var preheaderPosition = jQuery('.preheader').offset().top;
    //alert(scrolledY);
    if (scrolledY > preheaderPosition) {
        //alert(headerScroll)
        jQuery('.header').css('position', 'fixed');
        jQuery('.header').css('top', 0 + 'px');
        jQuery('.postheader').css('height', '100px');
    }else if (preheaderPosition > scrolledY){
        jQuery('.header').css('position', 'static');
        jQuery('.postheader').css('height', '0px');
    };
};

function changecolor(){
    var scrolled = jQuery(window).scrollTop();
    var pageheight = document.body.scrollHeight;

    var x = (scrolled)/pageheight;
    var r = Math.round(Math.max(255,122+255*x));
    var g = Math.round(122 - 122 * x);
    var b = Math.round(255 * x);
    document.body.style.backgroundColor='rgba(' + r + ',' + g + ',' + b + ',' + Math.min(0.1,7*x) + ')';

};


function changeBackground(){
    var scrolledY = jQuery(window).scrollTop();
    var landmarkPosition = jQuery('.scroll-landmark').offset().top;
    var windowHeight = jQuery(window).height();


    if(scrolledY > landmarkPosition) {
        var scroll = Math.min(1, 2*(scrolledY - landmarkPosition) / windowHeight);
        var x = 255 - Math.round(255 * scroll);
        document.body.style.backgroundColor = 'rgba(' + x + ',' + x + ',' + x + ',' + '1 )';
    };
};


function animateInView(){
    //class="inView-(アニメーションクラス)" を取得し、それぞれをアニメーション
    jQuery("[class*='inView']").each(animate);
}

function animate(){
    var animatedObject = $(this);
    var objectPosition = animatedObject.offset().top;
    var scrolled = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();

	//アニメーションの名前を取得
    var className = animatedObject.prop('className').match("inView-[a-zA-Z]+");
    var animationClass = String(className).slice(7);


	if (scrolled < objectPosition - 1.2 * windowHeight){
		//if(animatedObject.is(':animated')){
			//animatedObject.removeClass(animationClass + ' animated');
		//};
		//トリガーが引かれていない場合には非表示
		animatedObject.css("visibility", "hidden");
		//アニメーションのクラスを取り除く
        animatedObject.removeClass(animationClass + ' animated');
    };
    if (scrolled < objectPosition - 0.85*windowHeight ){
		//アニメーションのトリガーが引かれていない場合には非表示
		if(animatedObject.hasClass('animated') == false){
			animatedObject.css("visibility", "hidden");
		};
    };
    if (scrolled > objectPosition - 0.85*windowHeight ){
		//アニメートさせる
        animatedObject.addClass(animationClass + ' animated');
		//表示させる
		animatedObject.css("visibility", "visible");
    };
}


jQuery(window).on('scroll', function() {
    //ヘッダーを途中から固定
    headerSticky();
    //アニメーション
    animateInView();

    //使わなかったら後で消す
    //changeBackground();
    //changeclor();
});
