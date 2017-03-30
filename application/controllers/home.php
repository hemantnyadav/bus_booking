<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('home_model');
		
		$data['fromStations'] = $this->home_model->getFromStations();
	
		$this->load->view('header');
		$this->load->view('home_view',$data);
		$this->load->view('footer');
	}
	public function populateToStations()
	{
		$this->load->model("home_model");
		$fromStation = $_POST['fromStation'];
		
		$data["toStations"] = $this->home_model->getToStations($fromStation);
	
		echo json_encode($data["toStations"]);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */