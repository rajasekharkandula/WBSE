<?php
class Task_model extends CI_Model
{

	public function __construct()
	{
		$this->userID = $this->session->userdata('userID');
	}

	function createTask()
	{
		if($this->input->post('taskID'))
		{
			$this->db->query("update tbl_tasks set taskName='".$this->input->post('taskName')."',
			categoryID='".$this->input->post('categoryID')."',
			taskDesc='".$this->input->post('taskDesc')."',
			defBudget='".$this->input->post('defBudget')."',
			wbse='".$this->input->post('wbse')."',
			status='".$this->input->post('taskStatus')."',
			expiryDate='".$this->input->post('expiryDate')."' ,
			modifiedDate = NOW(),
			createdBy = '".$this->userID."'
			where taskID='".$this->input->post('taskID')."'");
			return true;
		}
		else
		{
			$this->db->query("INSERT INTO tbl_tasks(taskID,taskName,categoryID,taskDesc,defBudget,wbse,status,expiryDate,createdDate,modifiedDate,createdBy)
                       VALUES(UUID(),'".$this->input->post('taskName')."','".$this->input->post('categoryID')."','".$this->input->post('taskDesc')."','".$this->input->post('defBudget')."','".$this->input->post('wbse')."','".$this->input->post('taskStatus')."','".$this->input->post('expiryDate')."',NOW(),NOW(),'".$this->userID."')");
			return true;
		}
	}
	function getTasks()
	{
		return $this->db->query("SELECT t.taskID,t.taskName,t.wbse,t.taskDesc,t.defBudget,t.status,t.expiryDate,c.categoryName,c.categoryID from tbl_tasks t inner join tbl_categories c on c.categoryID=t.categoryID")->result();
	}
	function getTasksByTaskId($id)
	{
		return $this->db->query("SELECT taskID,taskName, categoryID, wbse, taskDesc, defBudget, expiryDate, createdDate, modifiedDate, createdBy, status FROM tbl_tasks where taskID='".$id."'")->row();
	}
	
}
?>