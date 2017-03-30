<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('home_model');
		
		$data['fromStations'] = $this->home_model->getFromStations();
		
		
		$this->load->view('header' );
		$this->load->view('home_view');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */