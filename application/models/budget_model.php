<?php
class Budget_model extends CI_Model
{

	public function __construct()
	{
		$this->userID = $this->session->userdata('userID');
	}

	function createBudget()
	{
		echo $budgetDate = date('Y-m-d',strtotime($this->input->post('year').'-'.$this->input->post('month').'-01'));
		exit();
		if($this->input->post('budgetID'))
		{
			$this->db->query("update tbl_budget set taskID='".$this->input->post('taskID')."',
			budgetDate='".$budgetDate."',
			budget='".$this->input->post('budget')."',
			status='".$this->input->post('status')."',
			modifiedDate = NOW(),
			createdBy = '".$this->userID."'
			where budgetID='".$this->input->post('budgetID')."'");
			return TRUE;
		}
		else
		{
			$this->db->query("INSERT INTO tbl_budget(budgetID,taskID,budgetDate,budget,status,createdDate,modifiedDate,createdBy)
            VALUES(UUID(),'".$this->input->post('taskID')."','".$budgetDate."','".$this->input->post('budget')."','".$this->input->post('status')."',NOW(),NOW(),'".$this->userID."')");
			return TRUE;
		}
		return FALSE;
	}
	function getBudgetsById($id='')
	{
		return $this->db->query("SELECT b.budgetID,b.budget,b.budgetDate,t.taskName,t.wbse,c.categoryName,c.categoryID,t.taskID from tbl_budget b inner join tbl_tasks t on t.taskID=b.taskID inner join tbl_categories c on c.categoryID=t.categoryID where budgetID='".$id."'")->row();
	}
	
	function getBudgets()
	{
		return $this->db->query("SELECT budgetID,taskID, budget, budgetDate, createdDate, modifiedDate, createdBy, status FROM tbl_budget;")->result(); 
	}
}
?>