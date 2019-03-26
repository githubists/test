<?php
class Pages extends CI_Controller {
  public function view($page='gogatsusai_home') {
    if ( !file_exists(APPPATH.'views/pages/'.$page.'.php')) {
      show_404();
    }
    $data['title']='医へのいざない | 東京大学 第92回 五月祭 医学部企画';
    $this->load->view('pages/'.$page, $data);
  }
}
?>
