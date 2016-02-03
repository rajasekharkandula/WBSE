<?php
/**
* Name:  home_model
*
* Author: Axinovate Technologies LLP.
*		  info@axinovate.com
*
* Created:  10 July 2015
*
*
*/
class home_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
    }
	function getHeader($param){
		$data = array();
		return $data;
	}
	function login($userName,$password)
	{
		$qry=$this->db->query("CALL usp_loginFunction('$userName','$password')");
		mysqli_next_result($this->db->conn_id);
		if($qry->row()){
			$row = $qry->row();
			$this->session->set_userdata('userID',$row->userID);
			$this->session->set_userdata('userName',$row->firstName.' '.$row->lastName);
			$this->session->set_userdata('profilePic',$row->profilePic);
			$this->session->set_userdata("login",TRUE);
			return TRUE;
		}
		else
			return FALSE;
		
	}
	public function reg(){
		$name=$this->input->post("name");
		$username=$this->input->post("username");
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$date=$this->input->post("date");
		$gender=$this->input->post("gender");
		$address=$this->input->post("address");
		$userID=$this->input->post("userID");
		//var_dump($name,$username,$email,$password,$date,$gender,$address);exit();
		if($userID!=''){
			if($query=$this->db->query("update tbl_users 
				set name='".$name."',userName='".$username."',password='".$password."',emailID='".$email."',DOB='".$date."',gender='".$gender."',address='".$address."' where userID='".$userID."'"))
			return TRUE;	
			return FALSE;
		}	
		else{
			if($this->db->query("INSERT INTO tbl_users(name,userName,password,emailID,DOB,gender,address,status)
			VALUES('".$name."','".$username."','".$password."','".$email."','".$date."','".$gender."','".$address."','P')")
			)
			return TRUE;
			return FALSE;
		}
	}
	public function get_details($id=''){
		$query=$this->db->query("select * from tbl_users where userID='".$id."'")->result_array();
		return $query;
	}
	public function getUsers(){
		$query=$this->db->query("select * from tbl_users where status='P'")->result_array();
		return $query;
	}
	public function getRoles(){
		$query=$this->db->query("select * from tbl_userrole")->result_array();
		return $query;
	}
	public function getUserRole($id){
		//$query=$this->db->query('select ur.uRoleID from tbl_userrolemapping urm inner join tbl_userrole ur on ur.uRoleID=urm.roleID where urm.userID="'.$id.'"')->result();
		$query=$this->db->query('select urm.roleID from tbl_userrolemapping urm where urm.userID="'.$id.'"')->result();
		$roles=array();$i=0;
		foreach($query as $role){
			$roles[$i]=$role->roleID;
			$i++;
		}//var_dump($roles);exit();
		
		return $roles;
	}
	public function getUserRoleName($id){
		$query=$this->db->query('select ur.roleName from tbl_userrolemapping urm inner join tbl_userrole ur on ur.uRoleID=urm.roleID where urm.userID="'.$id.'"')->result();
		$roles=array();$i=0;
		foreach($query as $role){
			$roles[$i]=$role->roleName;
			$i++;
		}//var_dump($roles);exit();
		
		return $roles;
	}
	public function delete_profile($id){
		$retvalue['status']='failed';
		if($this->db->query('update tbl_users set status="S" where userID="'.$id.'"')){
			$retvalue['status']='success';
			return $retvalue;
		}
		return $retvalue;
		
	}
	public function getHol(){
		$query=$this->db->query('select * from tbl_holidays')->result();
		return $query;
	}
	public function getAtt(){
		$query=$this->db->query('select * from tbl_attendance')->result();
		return $query;
	}
	public function insattndnce(){
		$retvalue['status']='failed';
		$userID=$this->session->userdata('userID');
		$title=$this->input->post('title');
		$date=date("Y-m-d H:i:s",strtotime($this->input->post('datetime')));
		//var_dump($date);
		$query=$this->db->query('call usp_insattn("'.$userID.'","'.$title.'","'.$date.'",@output3)')->result();
		mysqli_next_result($this->db->conn_id);
		$query1=$this->db->query('select @output3 as op')->result_array();
		//var_dump($query1);exit();
		if($query1[0]['op']=='Updated Successfully' || $query1[0]['op']=='Inserted Successfully'){
			$retvalue['status']='success';
			return $retvalue;
		}
		return $retvalue;
	}
	public function edit_user_data(){
		$result['status']='failed';
		$userID=$this->input->post('userID');
		$name=$this->input->post('name');
		$userName=$this->input->post('username');
		$emailID=$this->input->post('email');
		$status=$this->input->post('status');
		//var_dump($status);exit();
		$address=str_replace(' ', '&nbsp;',$this->input->post('address'));
		$role1=$this->input->post('role');
		$role=implode(",",$role1);
			$length=sizeof($role);
		//var_dump($userID,$name,$userName,$emailID,$address,$role);exit();
		$query=$this->db->query('call usp_edit_profile("'.$userID.'","'.$name.'","'.$userName.'","'.$emailID.'","'.$address.'","'.$role.'","'.$length.'","'.$status.'",@output)')->result();
		mysqli_next_result($this->db->conn_id);
		$query1=$this->db->query("select @output")->result_array();
		if($query1[0]['@output']=='Done Successfully')
		{
			$result['status']='success';
			return $result;
		}
		return $result;
	}
}
      