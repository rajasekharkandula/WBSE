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
		$selecttask=$_POST['selecttask'];
		$selectmonth=$_POST['selectmonth'];
		$budget=$_POST['budget'];
		$status=$_POST['status'];
		if($this->db->query("INSERT INTO task(taskName,categoryName,taskDesc,defBudget,status)
                       VALUES('$tname','$selectcat','$tdesc','$tbudget','$tstatus')"))
			return true;
		else
			return false;
	}
	function get_data()
	{
		$query=$this->db->query("Select * from budget")->result_array();
		return $query;
	}
	function cat_name()
	{
		$query=$this->db->query("Select categoryName from budget")->result_array();
		return $query;
	}
	function task_name()
	{
		$query=$this->db->query("Select taskName from budget")->result_array();
		return $query;
	}
}
?>