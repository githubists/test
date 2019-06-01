<?php
class Pages extends CI_Controller {
  function __construct(){
		parent::__construct();
	}
  public function view($page='gogatsusai_home') {
    if ( !file_exists(APPPATH.'views/pages/'.$page.'.php')) {
      $this->error_404();
    }
    else{
	     /*$this->output->cache(10000);*/
      $this->load->view('pages/'.$page, $this->loadtemplates($page));
    }
  }
  public function contents($page) {
    if ( !file_exists(APPPATH.'views/pages/contents/'.$page.'.php')) {
      $this->error_404();
    }
    else{
       /*$this->output->cache(10000);*/
      $this->load->view('pages/contents/'.$page, $this->loadtemplates('contents/'.$page));
    }
  }
  public function error_404() {
    $this->output->set_status_header('404');
    $this->load->view('errors/404', $this->loadtemplates($page));
  }
  public function loadtemplates ($page){
    $data['prefix']=$this->load->view('templates/prefix','',TRUE);
    $data['header']=$this->load->view('templates/header','',TRUE);
    $data['menu']=$this->load->view('templates/menu','',TRUE);
    $data['navbar']=$this->load->view('templates/navbar','',TRUE);
    $data['comingsoon']=$this->load->view('parts/comingsoon','',TRUE);
    $data['sponsors']='';
    $data['vote']=$this->load->view('parts/vote','',TRUE);
    $data['footer']=$this->load->view('templates/footer','',TRUE);
    $data['pageurl']=$page;
    return($data);
  }
}
?>
