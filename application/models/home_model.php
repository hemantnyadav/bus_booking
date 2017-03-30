<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function index()
	{
		$this->load->view('home');
	}
	public function getFromStations()
	{
		$sql = "select * from himmat.routes group by route_station order by route_station; ";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function getToStations($fromStation)
	{
		$sql = "select id,route_name from himmat.routes where route_station = '".trim($fromStation)."'order by id";
		$route_data = $this->db->query($sql);
		$toStations = array();
		
		foreach($route_data->result_array() as $row)
		{
			$sql 		= "select route_station from himmat.routes where route_name = '".$row['route_name']."' and id >".$row['id']." order by id";
			$query		= $this->db->query($sql);
			$toStations_merge = array_merge($toStations,$query->result_array());		
		}
		
		$toStations = array_map("unserialize", array_unique(array_map("serialize", $toStations_merge)));
		//$toStations=array_unique($toStations_merge);
		return $toStations;
	}
}
