<?php
class Recovery extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function insert_data()
	{
		$cname=$_POST['cname'];
		$amt=$_POST['amt'];
		$rdate=$_POST['rdate'];
		$selectpay=$_POST['selectpay'];
		$realise=$_POST['realise'];
		if($this->db->query("INSERT INTO recovery(companyName,recoveryAmount,recoveryDate,modePayment,realise)
                       VALUES('$cname','$amt','$rdate','$selectpay','$realise')"))
			return true;
		else
			return false;
	}
	function get_data()
	{
		$query=$this->db->query("Select * from recovery")->result_array();
		return $query;
	}
}
?>