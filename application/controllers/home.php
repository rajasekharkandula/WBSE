<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('index',$data);
	}
	public function categories()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('categories',$data);
	}
	public function category_create()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('category_create',$data);
	}
	public function tasks()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('tasks',$data);
	}
	public function task_create()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('task_create',$data);
	}
	public function budget()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('budget',$data);
	}
	public function budgetcost()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('budgetcost',$data);
	}
	public function summaryreport()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('summaryreport',$data);
	}
	public function expenditure()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('expenditure',$data);
	}
	public function expenditureentry()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('expenditureentry',$data);
	}
	public function recoveryentry()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('recoveryentry',$data);
	}
	public function recoveryreport()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('recoveryreport',$data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/home.php */