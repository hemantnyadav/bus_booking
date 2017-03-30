<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function index()
	{
		$this->load->view('home');
	}
	public function getFromStations()
	{
		$sql = "select route_name from routes";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
