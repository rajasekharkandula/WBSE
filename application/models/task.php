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
	
	public function getUserDetails(){
		$this->load->library('session');
		$userID=$this->session->userdata('userID');
		//var_dump($userID);exit();
		$data=$this->db->query("select userName,profilePic from tbl_users where userID='".$userID."'")->row();
		mysqli_next_result($this->db->conn_id);
		return $data;
	}
	public function getRoles(){
		$data=$this->db->query("select * from tbl_userrole")->result();
		return $data;
	}
	public function getRole($uRoleID){
		$data=$this->db->query("select * from tbl_userrole where uRoleID='".$uRoleID."'")->result();
		return $data;
	}
	public function deleteRoles(){
		$roleID=$this->input->post('roleID');
		$data=$this->db->query("update tbl_userrole set roleStatus='S' where uRoleID='".$roleID."'");
		return $data;
	}
	public function InsUpdRoles(){
		$roleTitle=$this->input->post('roleTitle');
		$roleID=$this->input->post('roleID');
		$roleDescription=$this->input->post('roleDescription');
		$roleStatus=$this->input->post('roleStatus');
		$data=$this->db->query("CALL usp_InsUpdRoles('".$roleID."','".$roleTitle."','".$roleDescription."','".$roleStatus."',@vresult, @vEtID)");
		mysqli_next_result($this->db->conn_id);
		return $data->result_array();
	}
}
?>