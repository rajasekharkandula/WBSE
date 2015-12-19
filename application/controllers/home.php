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
	public function tasks()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('tasks',$data);
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
}

/* End of file Home.php */
/* Location: ./application/controllers/home.php */