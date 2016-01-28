<?php
class Task extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function insert_data()
	{
		$selectcat=$_POST['selectcat'];
		$tname=$_POST['tname'];
		$wbse=$_POST['wbse'];
		$tdesc=$_POST['tdesc'];
		$tbudget=$_POST['tbudget'];
		$texpdate=$_POST['texpdate'];
		$tstatus=$_POST['tstatus'];
		if($this->db->query("INSERT INTO task(taskName,categoryName,taskDesc,defBudget,status)
                       VALUES('$tname','$selectcat','$tdesc','$tbudget','$tstatus')"))
			return true;
		else
			return false;
	}
	function get_data()
	{
		$query=$this->db->query("Select * from task")->result_array();
		return $query;
	}
	function cat_name()
	{
		$query=$this->db->query("Select categoryName from task")->result_array();
		return $query;
	}
	function login_form($userName,$password)
	{
		$this->load->library('session');
		$data=array();
		$data=$this->db->query("CALL usp_loginFunction('".$userName."','".$password."')");
		mysqli_next_result($this->db->conn_id);
		if($data->row()){
			$this->session->set_userdata("login",TRUE);
			$this->session->set_userdata("userID",$data);
		return TRUE;}
		else
			return FALSE;
	}
}
?>