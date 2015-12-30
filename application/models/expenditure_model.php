<?php
class Expenditure_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function createExpenditureList()
	{
		if($this->input->post('eid'))
		{
			$this->db->query("update expenditurelist set taskID='".$this->input->post('selecttask')."',
			expenditureCost='".$this->input->post('ecost')."',
			expDate='".$this->input->post('expdate')."',
			employeeID='".$this->input->post('empid')."',
			reason='".$this->input->post('reason')."' 
			where expenditureID='".$this->input->post('eid')."'");
			return true;
		}
		else
		{
			$groupID = $this->input->post('gid');
			if(!$this->input->post('gid')){
				$groupID = $this->db->query("SELECT UUID() as uuid")->row()->uuid;
				$this->db->query("INSERT INTO expenditure(groupID, status, managerID, totalAmt, createdBy, dateTime) VALUES ('".$groupID."','Submitted','','".$this->input->post('ecost')."','',NOW())");
			}
			$this->db->query("INSERT INTO expenditurelist(groupID,taskID,expenditureCost,expDate,employeeID,reason)
                       VALUES('".$groupID."','".$this->input->post('selecttask')."','".$this->input->post('ecost')."','".$this->input->post('expdate')."','".$this->input->post('empid')."','".$this->input->post('reason')."')");
				   return $groupID;
			
		}

	}
	function getExpenditureListByGroupId($groupID="")
	{
		$query=$this->db->query("Select e.expenditureID,e.expenditureCost,e.expDate,t.taskName,t.wbse,c.categoryName,c.categoryID,e.employeeID,e.employeeName,e.reason from expenditurelist e inner join task t on t.taskID=e.taskID inner join category c on c.categoryID=t.categoryID WHERE e.groupID = '$groupID'")->result_array();
		return $query;
	}
	function getExpenditures()
	{
		$query=$this->db->query("Select * from expenditure")->result_array();
		return $query;
	}

	function getExpenditureListById($id='')
	{
		$query=$this->db->query("Select * from expenditurelist where expenditureID='".$id."'")->result_array();
		return $query;
	}

	
}
?>