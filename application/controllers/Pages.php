<?php
class Pages extends CI_Controller {
  public function view($page='gogatsusai_home') {
    if ( !file_exists(APPPATH.'views/pages/'.$page.'.php')) {
      show_404();
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
}
?>
