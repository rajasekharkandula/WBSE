<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('category');
		$this->load->model('task');
		$this->load->model('recovery');
		$this->load->model('expenditure');
		$this->load->model('home_model');
	}

	public function index()
	{
		$this->load->library('session');
		$data['header'] = $this->load->view('header','',true);
		if(!$this->session->userdata('login')){
				redirect('home/login_form');
			}
		
		
		$this->load->view('index',$data);
	}
	public function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		//$this->facebook->destroySession();
		//session_destroy();
		//echo 'ok'; exit();
		redirect('home/login_form');
	}
	public function categories()
	{
		$data['header'] = $this->load->view('header','',true);
		//$value=$this->category->insert_data();
		$data['values']=$this->category->get_data();
		$this->load->view('categories',$data);
	}
	public function category_create()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('category_create',$data);
	}
	public function category()
	{
		$data['header'] = $this->load->view('header','',true);
		$value=$this->category->insert_data();
		$data['values']=$this->category->get_data();
		$this->load->view('categories',$data);
	}
	public function home_cat(){
		$data['header'] = $this->load->view('header','',true);
		$data['values']=$this->category->get_data();
		$this->load->view('categories',$data);
	}
	public function tasks()
	{
		$data['header'] = $this->load->view('header','',true);
		//$value=$this->task->insert_data();
		$data['values']=$this->task->get_data();
		$this->load->view('tasks',$data);
	}
	public function task_create()
	{
		$data['header'] = $this->load->view('header','',true);
		$data['values']=$this->category->cat_name();
		$this->load->view('task_create',$data);
	}
	public function task()
	{
		$data['header'] = $this->load->view('header','',true);
		$value=$this->task->insert_data();
		$data['values']=$this->task->get_data();
		$this->load->view('tasks',$data);
	}
	public function budget()
	{
		$data['header'] = $this->load->view('header','',true);
		$data['values']=$this->budget->cat_name();
		$data['values']=$this->budget->task_name();
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
		$value=$this->expenditure->insert_data();
		$data['values']=$this->expenditure->get_data();
		$this->load->view('expenditure',$data);
	}
	public function expenditureentry()
	{
		$data['header'] = $this->load->view('header','',true);
		//$value=$this->expenditure->insert_data();
		$data['values']=$this->expenditure->get_data();
		$this->load->view('expenditure',$data);
	}
	public function expenditure_create()
	{
		$data['header'] = $this->load->view('header','',true);
		$data['values']=$this->expenditure->cat_name();
		$data['values1']=$this->expenditure->task_name();
		$this->load->view('expenditureentry',$data);
	}
	public function recovery_create()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('recoveryentry',$data);
	}
	public function recoveryentry()
	{
		$data['header'] = $this->load->view('header','',true);
		$value=$this->recovery->insert_data();
		$data['values']=$this->recovery->get_data();
		$this->load->view('recoveryreport',$data);
	}
	public function recoveryreport()
	{
		$data['header'] = $this->load->view('header','',true);
		//$value=$this->recovery->insert_data();
		$data['values']=$this->recovery->get_data();
		$this->load->view('recoveryreport',$data);
	}
	public function login_form()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->library('session');
		//exit();
		if($this->session->userdata('login')){
				redirect('home',refresh);
			}
		else
		$this->load->view('login',$data);
	}
	public function login_function(){
		$retval = $this->task->login_form($this->input->post('username'),$this->input->post('password'));
		$ret_array['status'] = $retval;
		
		//var_dump($retval);exit;
		echo json_encode($ret_array);
	}
	public function registered($id='')
	{
		$data['details']=$this->home_model->get_details($id);
		var_dump($data['details']);exit();
		$this->load->view("homepage",$data);
	}
	public function registration()
	{
		$retval=$this->home_model->reg();
		$ret_array['status'] = $retval;
		echo json_encode($ret_array);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/home.php */