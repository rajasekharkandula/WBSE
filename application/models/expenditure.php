<?php
class Expenditure extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function insert_data()
	{
		$selectcat=$_POST['selectcat'];
		$selecttask=$_POST['selecttask'];
		$ecost=$_POST['ecost'];
		$expdate=$_POST['expdate'];
		$empid=$_POST['empid'];
		$reason=$_POST['reason'];
		if($this->db->query("INSERT INTO expenditure(categoryName,taskName,expenditureCost,employeeID,reason)
                       VALUES('$selectcat','$selecttask','$ecost','$empid','$reason')"))
			return true;
		else
			return false;
	}
	function get_data()
	{
		$query=$this->db->query("Select * from expenditure")->result_array();
		return $query;
	}
	function cat_name()
	{
		$query=$this->db->query("Select categoryName from category")->result_array();
		return $query;
	}
	function task_name()
	{
		$query=$this->db->query("Select taskName from task")->result_array();
		return $query;
	}
	
}
?>