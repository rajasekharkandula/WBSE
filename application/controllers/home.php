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

		$this->load->model('category_model');
		$this->load->model('task_model');
		$this->load->model('recovery_model');
		$this->load->model('expenditure_model');
		$this->load->model('budget_model');
 
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
		$data['categories']=$this->category_model->getCategories();
		$this->load->view('categories',$data);
	}
	public function category_create($id='')
	{
		$data['header'] = $this->load->view('header','',true);
		$data['categories']=$this->category_model->getCategoriesById($id);
		$this->load->view('category_create',$data);
	}
	function create_category()
	{
		$this->category_model->createCategory();
		redirect('home/categories');
	}
	public function home_cat(){
		$data['header'] = $this->load->view('header','',true);
		$data['categories']=$this->category_model->getCategories();
		$this->load->view('categories',$data);
	}
	public function tasks()
	{
		$data['header'] = $this->load->view('header','',true);
		$data['tasks']=$this->task_model->getTasks();

		$this->load->view('tasks',$data);
	}
	public function task_create($id='')
	{
		$data['header'] = $this->load->view('header','',true);
		$data['categories']=$this->category_model->getCategories();
		$data['task']=$this->task_model->getTasksByTaskId($id);
		$data['tasks']=$this->task_model->getTasks();
		//var_dump($data['values1']);exit();
		$this->load->view('task_create',$data);
	}
	public function create_task()
	{
		$this->task_model->createTask();
		redirect('home/tasks');
	}
	public function budget($id='')
	{
		$data['header'] = $this->load->view('header','',true);
		$data['categories']=$this->budget_model->getCategories();
		$data['tasks']=$this->budget_model->getTasks();
		$data['budgets']=$this->budget_model->getBudgets();
		$data['budget']=$this->budget_model->getBudgetsById($id);
		$data['budgetarray']=$this->budget_model->getBudgetAsArray();
		//var_dump($data['budget']);exit();
		$this->load->view('budget',$data);

	}
	public function create_budget()
	{
		$this->budget_model->createBudget();
		redirect('home/budget');
	}
	public function budget_create($id='')
	{
		$data['header'] = $this->load->view('header','',true);
		$data['categories']=$this->budget_model->getCategoriesAsArray();
		$data['tasks']=$this->budget_model->getTasksAsArray();
		$data['budget']=$this->budget_model->getBudgetsById($id);
		$this->load->view('budget_create',$data);
	}	
	public function summaryreport()
	{
		$data['header'] = $this->load->view('header','',true);
		$this->load->view('summaryreport',$data);
	}
	public function expenditure()
	{
		$data['header'] = $this->load->view('header','',true);
		$data['expgroup']=$this->expenditure_model->getExpenditures();
		$this->load->view('expenditure',$data);

	}
	public function create_expenditure()
	{
		$groupID=$this->expenditure_model->createExpenditureList();
		//var_dump($data['groupID']);exit();
		redirect('home/expenditure_create/'.$groupID);
	}
	public function expenditure_create($groupID='',$id='')
	{
		$data['header'] = $this->load->view('header','',true);
		$data['categories']=$this->category_model->getCategories();
		$data['tasks']=$this->budget_model->getTasksAsArray();
		$data['expenditures']=$this->expenditure_model->getExpenditureListById($id);
		$data['expendituregroup']=$this->expenditure_model->getExpenditureListByGroupId($groupID);
		$data['groupID'] = $groupID;
		$this->load->view('expenditure_create',$data);
	}
	public function recovery()
	{
		$data['header'] = $this->load->view('header','',true);
		$data['recoveries']=$this->recovery_model->getRecoveries();
		$this->load->view('recovery',$data);

	}
	public function create_recovery()
	{
		$this->recovery_model->createRecovery();
		redirect('home/recovery');
	}
	public function recovery_create($id='')
	{
		$data['header'] = $this->load->view('header','',true);
		$data['recovery']=$this->recovery_model->getRecoveriesById($id);
		$this->load->view('recovery_create',$data);
	}
	public function getTaskList()
	{
		echo json_encode($this->task_model->getTasksByCategoryId($this->input->post("option")));
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