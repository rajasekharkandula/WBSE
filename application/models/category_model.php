<?php
class Category_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function createCategory()
	{
		if($this->input->post('cid')){
			$this->db->query("update category set categoryName='".$this->input->post('cname')."',
			categoryDesc='".$this->input->post('cdesc')."',
			createdDate='".$this->input->post('createddate')."',
			modifiedDate=now();
			status='".$this->input->post('selectstatus')."'
			where categoryID='".$this->input->post('cid')."'");
			return true;
		}else{
			
			$this->db->query("INSERT INTO category(categoryName,categoryDesc,createdDate,modifiedDate,status)
                       VALUES('".$this->input->post('cname')."','".$this->input->post('cdesc')."','".$this->input->post('createddate')."',now(),'".$this->input->post('selectstatus')."')");
			return true;
		}
		exit();
	}
	function getCategories()
	{
		$query=$this->db->query("Select * from category")->result_array();
		return $query;
	}
	function getCategoriesById($id='')
	{
		$query=$this->db->query("Select * from category where categoryID='".$id."'")->result_array();
		return $query;
	}
}
?>