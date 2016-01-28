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
			if($this->db->query("INSERT INTO tbl_users(name,userName,password,emailID,DOB,gender,address)
			VALUES('".$name."','".$username."','".$password."','".$email."','".$date."','".$gender."','".$address."')")
			)
			return TRUE;
			return FALSE;
		}
	}
	public function get_details($id=''){
		$query=$this->db->query("select * from tbl_users where userID='".$id."'")->result_array();
		return $query;
	}
}
      