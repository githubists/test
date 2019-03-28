<?php
class Pages extends CI_Controller {
  function __construct(){
		parent::__construct();
	}
  public function view($page='gogatsusai_home') {
    if ( !file_exists(APPPATH.'views/pages/'.$page.'.php')) {
      $this->error_404();
    }
	  /*$this->output->cache(10000);*/
    $data['prefix']=$this->load->view('templates/prefix','',TRUE);
    $data['header']=$this->load->view('templates/header','',TRUE);
    $data['menu']=$this->load->view('templates/menu','',TRUE);
    $data['navbar']=$this->load->view('templates/navbar','',TRUE);
    $data['comingsoon']=$this->load->view('parts/comingsoon','',TRUE);
    $data['sponsors']=$this->load->view('parts/sponsors','',TRUE);
    $data['vote']=$this->load->view('parts/vote','',TRUE);
    $data['footer']=$this->load->view('templates/footer','',TRUE);
    $data['pageurl']=$page;
    $this->load->view('pages/'.$page, $data);
  }
  public function error_404() {
    $this->output->set_status_header('404');
    $data['prefix']=$this->load->view('templates/prefix','',TRUE);
    $data['header']=$this->load->view('templates/header','',TRUE);
    $data['menu']=$this->load->view('templates/menu','',TRUE);
    $data['navbar']=$this->load->view('templates/navbar','',TRUE);
    $data['footer']=$this->load->view('templates/footer','',TRUE);
    $this->load->view('errors/404',$data);
  }
}
?>
