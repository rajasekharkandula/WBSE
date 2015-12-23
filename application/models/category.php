<?php
class Category extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function insert_data()
	{
		$cname=$_POST['cname'];
		$cdesc=$_POST['cdesc'];
		$selectstatus=$_POST['selectstatus'];
		if($this->db->query("INSERT INTO category(categoryName,categoryDesc,status)
                       VALUES
                       ('$cname','$cdesc','$selectstatus')"))
			return true;
		else
			return false;
	}
	function get_data()
	{
		$query=$this->db->query("Select * from category")->result_array();
		return $query;
	}
	function cat_name()
	{
		$query=$this->db->query("Select categoryName from category")->result_array();
		return $query;
	}
}
?>