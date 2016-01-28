<?php
class Task_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function createTask()
	{
		if($this->input->post('tid'))
		{
			$this->db->query("update task set taskName='".$this->input->post('tname')."',
			categoryID='".$this->input->post('selectcat')."',
			taskDesc='".$this->input->post('tdesc')."',
			defBudget='".$this->input->post('tbudget')."',
			wbse='".$this->input->post('wbse')."',
			status='".$this->input->post('tstatus')."',
			expiryDate='".$this->input->post('texpdate')."' 
			where taskID='".$this->input->post('tid')."'");
			return true;
		}
		else
		{
			$this->db->query("INSERT INTO task(taskName,categoryID,taskDesc,defBudget,wbse,status,expiryDate)
                       VALUES('".$this->input->post('tname')."','".$this->input->post('selectcat')."','".$this->input->post('tdesc')."','".$this->input->post('tbudget')."','".$this->input->post('wbse')."','".$this->input->post('tstatus')."','".$this->input->post('texpdate')."')");
			return true;
		}
		exit();

	}
	function getTasks()
	{
		$query=$this->db->query("Select t.taskID,t.taskName,t.wbse,t.taskDesc,t.defBudget,t.status,t.expiryDate,c.categoryName from task t inner join category c on c.categoryID=t.categoryID")->result_array();
		return $query;
	}
	function getTasksByTaskId($id='')
	{
		$query=$this->db->query("Select * from task where taskID='".$id."'")->result_array();
		return $query;
	}
	function getCategories()
	{
		$query=$this->db->query("Select * from category")->result_array();
		return $query;
	}
	function getTasksByCategoryId($id='')
	{
		$query=$this->db->query("Select * from task where categoryID='".$id."'")->result_array();
		return $query;
	}
}
?>