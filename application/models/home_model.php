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
		return $toStations;
	}
	public function getBusNo($busType)
	{
		$sql = "select bus_number from himmat.bus_service where bus_type = '".trim($busType)."'";
		$busNo = $this->db->query($sql);
		return $busNo->result_array();
	}
	public function	getBusRoute($busType)
	{
		$sql = "select * from routes where route_name in (select bus_route_name from himmat.bus_service where bus_type = '".trim($busType)."')";
		$routeDetails = $this->db->query($sql);
		return $routeDetails->result_array();
	}
	public function addBooking($data = array())
	{
		$bus_number = $data['busNo'];
		$bus_number = $bus_number[0]['bus_number'];
		
		$ticketNumber = $data['ticketNumbers'];
		$ticketNumber = implode(",",$ticketNumber);
		
		$busRoute = $data['busRoute'];
		$busRoute = $busRoute[0]['route_station'];
		
		$sql = "insert into booking (booking_from,booking_to,booking_bus_no,booking_seats,booking_date,booking_route,booking_passanger,booking_passanger_contact,booking_passanger_email,booking_status)
values(
'".$data['fromStationVal']."', 
'".$data['toStationVal']."',
'".$bus_number."',
'".$ticketNumber."',
'".$data['dateVal']."',
'".$busRoute."',
'".$data['pName']."',
'".$data['pContact']."',
'".$data['pEmail']."',
'blocked')";

	//$query		= $this->db->query($sql);
	if($this->db->query($sql))
	return "Success";
	else
	return "Failed. Please try again!";
	
	}
}
