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
		$firstName=$this->input->post('firstName');
		$lastName=$this->input->post('lastName');
		$userName=$this->input->post('user');
		$password=$this->input->post('Password');
		$emailID=$this->input->post('email');
		$address=$this->input->post('address');
		$country=$this->input->post('country');
		$state=$this->input->post('state');
		$city=$this->input->post('city');
		$status=$this->input->post('status');
		$path='assets/img/avatars/'.$_FILES['file_source']['name'];		
		mkdir(base_url('assets/img/avatars'),0777);
		$image= move_uploaded_file($_FILES['file_source']['tmp_name'],$path);
		//var_dump($status);exit();
		//$address=str_replace(' ', '&nbsp;',$this->input->post('address'));
		$roles=array();
		for($i=0;$i<=20;$i++)
		{
			if($this->input->post('role'.$i))
				array_push($roles,$this->input->post('role'.$i));
		}
		//$role1=;
		$role=implode(",",$roles);
			$length=sizeof($role);
		//var_dump($role);exit();
		//var_dump($userID,$userName,$emailID,$address,$role);exit();
		$query=$this->db->query('call usp_edit_profile("'.$userID.'","'.$path.'","'.$firstName.'","'.$lastName.'","'.$userName.'","'.$password.'","'.$emailID.'","'.$address.'","'.$country.'","'.$state.'","'.$city.'","'.$role.'","'.$length.'","'.$status.'",@output)')->result();
		mysqli_next_result($this->db->conn_id);
		$query1=$this->db->query("select @output")->result_array();
		if($query1[0]['@output']=='Done Successfully')
		{
			$result['status']='success';
			return $result;
		}
		return $result;
	}
	public function getAllIds()
	{
		$userID=$this->session->userData('userID');
		//var_dump($userID);exit();
		$query=$this->db->query("select country,city,state from tbl_users where userID='".$userID."';")->row();
		return $query;
	}
	public function getCountryList()
	{
		$details=$this->input->post("CALL usp_getCountryStateCityDetails('C',null,null,null)");
		mysqli_next_result($this->db->conn_id);
		return $details->result_array();
	}
	public function getStateDetails()
	{
		$countryID=$this->input->post('countryID');
		$details=$this->db->query("CALL usp_getCountryStateCityDetails('S','".$countryID."',null,null)");
		mysqli_next_result($this->db->conn_id);
		return $details->result_array();
	}
	public function getCityDetails()
	{
		$stateID=$this->input->post('stateID');
		$details=$this->db->query("CALL usp_getCountryStateCityDetails('CI',null,'".$stateID."',null)");
		mysqli_next_result($this->db->conn_id);
		return $details->result_array();
	}
	public function getCountries()
	{
		$query=$this->db->query("select * from tbl_country")->result();
		return $query;
	}
	public function getStates()
	{
		$query=$this->db->query("select * from tbl_state")->result();
		return $query;
	}
	public function getCities()
	{
		$query=$this->db->query("select * from tbl_cities")->result();
		return $query;
	}
}
      