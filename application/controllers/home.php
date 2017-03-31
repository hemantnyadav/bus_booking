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
	public function getListOfBus()
	{
		if(isset($_POST['fromStation']) && $_POST['fromStation']!="From" && (!isset($_POST['toStation']) || $_POST['toStation']=="To"))
		{
			$this->load->model('home_model');
			$fromStation = $_POST['fromStation'];
			$data["fromStationSelected"] = $fromStation;
			
			$data['fromStations'] = $this->home_model->getFromStations();
			$data["toStations"] = $this->home_model->getToStations($fromStation);
			
			$this->load->view('header');
			$this->load->view('home_view',$data);
			$this->load->view('footer');			
			
		}else
		{
		
		$data['fromStationVal']  = $_POST['fromStation'];
		$data['toStationVal'] 	 = $_POST['toStation'];
		$data['dateVal'] 		 = $_POST['date'];
		
		$this->load->view('header');
		$this->load->view('bus_list_view',$_POST);
		$this->load->view('footer');			
		}
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */