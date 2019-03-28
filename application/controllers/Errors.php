<?php
class Errors extends CI_Controller {
  function __construct(){
		parent::__construct();
	}
  function error_404() {
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
