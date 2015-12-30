<?php
class Recovery_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function createRecovery()
	{
		if($this->input->post('rid'))
		{
			$this->db->query("update recovery set companyName='".$this->input->post('cname')."',
			recoveryAmount='".$this->input->post('amt')."',
			recoveryDate='".$this->input->post('rdate')."',
			modePayment='".$this->input->post('selectpay')."',
			realise='".$this->input->post('realise')."'
			where recoveryID='".$this->input->post('rid')."'");
			return true;
		}
		else
		{
			$this->db->query("INSERT INTO recovery(companyName,recoveryAmount,recoveryDate,modePayment,realise)
              VALUES('".$this->input->post('cname')."','".$this->input->post('amt')."','".$this->input->post('rdate')."','".$this->input->post('selectpay')."','".$this->input->post('realise')."')");
			  return true;
		}
		exit();

	}
	function getRecoveries()
	{
		$query=$this->db->query("Select * from recovery")->result_array();
		return $query;
	}
	function getRecoveriesById($id='')
	{
		$query=$this->db->query("Select * from recovery where recoveryID='".$id."'")->result_array();
		return $query;
	}
}
?>