<?php
class Budget_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function createBudget()
	{
		if($this->input->post('bid'))
		{
			$this->db->query("update budget set taskID='".$this->input->post('selecttask')."',
			budgetDate='".$this->input->post('selectmonth')."',
			budget='".$this->input->post('budget')."',
			status='".$this->input->post('status')."'
			where budgetID='".$this->input->post('bid')."'");
			return true;
		}
		else
		{
			if($this->db->query("INSERT INTO budget(taskID,budgetDate,budget,status)
                       VALUES('".$this->input->post('selecttask')."','".$this->input->post('selectmonth')."','".$this->input->post('budget')."','".$this->input->post('status')."')"));
			return true;
		}
		exit();

	}
	function getBudgetsById($id='')
	{
		$query=$this->db->query("Select b.budgetID,b.budget,b.budgetDate,t.taskName,t.wbse,c.categoryName,c.categoryID,t.taskID from budget b inner join task t on t.taskID=b.taskID inner join category c on c.categoryID=t.categoryID where budgetID='".$id."'")->result_array();
		//var_dump($query);exit();
		return $query;
	}
	function getCategories()
	{
		return $this->db->query("Select * from category")->result();
		
	}
	function getTasks()
	{
		return $this->db->query("Select * from task")->result();
	}
	function getBudgets()
	{
		return $this->db->query("Select * from budget")->result();
	}
	function getTasksAsArray()
	{
		return $this->db->query("Select * from task")->result_array();
	}
	function getCategoriesAsArray()
	{
		return $this->db->query("Select * from category")->result_array();
		
	}
	function getBudgetAsArray()
	{
		return $this->db->query("Select * from budget")->result_array();
	}
}
?>