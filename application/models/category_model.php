<?php
class Category_model extends CI_Model
{

	public function __construct()
	{
		$this->userID = $this->session->userdata('userID');
	}

	function createCategory()
	{
		if($this->input->post('categoryID')){
			$this->db->query("update tbl_categories set categoryName='".$this->input->post('categoryName')."',
			categoryDesc='".$this->input->post('categoryDesc')."',
			modifiedDate=NOW(),
			createdBy = '".$this->userID."',
			status='".$this->input->post('categoryStatus')."'
			where categoryID='".$this->input->post('categoryID')."'");
			return TRUE;
		}else{
			
			$this->db->query("INSERT INTO tbl_categories(categoryID,categoryName,categoryDesc,createdDate,modifiedDate,createdBy,status)
            VALUES(UUID(),'".$this->input->post('categoryName')."','".$this->input->post('categoryDesc')."',NOW(),NOW(),'".$this->userID."','".$this->input->post('categoryStatus')."')");
			return TRUE;
		}
		return FALSE;
	}
	function getCategories()
	{
		return $this->db->query("SELECT categoryID, categoryName, categoryDesc, createdDate, modifiedDate, createdBy, status FROM tbl_categories")->result();
	}
	function getCategoriesById($id)
	{
		return $this->db->query("SELECT categoryID, categoryName, categoryDesc, createdDate, modifiedDate, createdBy, status FROM tbl_categories WHERE categoryID='$id'")->row();
	}
}
?>