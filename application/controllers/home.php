<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('task');
		$this->load->model('home_model');
		$this->load->library('session');
		$this->load->model('category_model');
		$this->load->model('task_model');
		$this->load->model('recovery_model');
		$this->load->model('expenditure_model');
		$this->load->model('budget_model');
 
	}

	public function index()
	{

		if($this->session->userdata('login') == false)redirect('home/login',refresh);
		$header['page'] = 'HOME';
		$header['data'] = $this->home_model->getHeader($param="");
		$data['header'] = $this->load->view('header',$header,true);
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['details']=$this->task->getUserDetails();
		$this->load->view('index',$data);
	}
	public function calender(){
		$this->load->library('session');
		$data['signin'] = $this->session->userdata("userID");
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		//var_dump($this->session->userdata("userID"),$data['role']);exit();
		$data['details']=$this->task->getUserDetails();
		$data['header'] = $this->load->view('header',$data,true);
		$data['calendar']=$this->home_model->getHol();
		$data['attendance']=$this->home_model->getAtt();
		//var_dump($data['calendar']);exit();
		$this->load->view('calender',$data);
	}
	public function calenderAdmin(){
		$this->load->library('session');
		$data['signin'] = $this->session->userdata("userID");
		//var_dump($this->session->userdata("userID"),$data['role']);exit();
		$data['details']=$this->home_model->getUsers();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$data['calendar']=$this->home_model->getHol();
		$data['attendance']=$this->home_model->getAtt();
		//var_dump($data['details'],$data['attendance']);exit();
		$this->load->view('attendance_sheet',$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/login');
	}
	public function list_users()
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$data['users']=$this->home_model->getUsers();
		//var_dump($data['details']);exit();
		$this->load->view('list_users',$data);
	}
	public function edit_profile($id='')
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$data['user']=$this->home_model->get_details($id);
		$data['roles']=$this->home_model->getRoles();
		$data['userRole']=$this->home_model->getUserRole($id);
		//var_dump($data['user'],$data['userRole'],$data['roles']);exit();
		$this->load->view('edit_profile',$data);
	}
	public function delete_profile()
	{
		$id=$this->input->post('userID');
		echo json_encode($this->home_model->delete_profile($id));
	}
	public function edit_user_data(){
		echo json_encode($this->home_model->edit_user_data());
	}
	public function insattndnce(){
		echo json_encode($this->home_model->insattndnce());
	}
	public function categories()
	{

		if($this->session->userdata('login') == false)redirect('home/login',refresh);
		$header['page'] = 'CATEGORIES';
		$header['data'] = $this->home_model->getHeader($param="");
		$data['header'] = $this->load->view('header',$header,true);

		$data['categories']=$this->category_model->getCategories();
		$this->load->view('categories',$data);
	}
	public function category_create($id)
	{

		if($this->session->userdata('login') == false)redirect('home/login',refresh);
		$header['page'] = 'CATEGORIES';
		$header['data'] = $this->home_model->getHeader($param="");
		$data['header'] = $this->load->view('header',$header,true);

		$data['categories']=$this->category_model->getCategoriesById($id);
		if($data['categories'])
			$this->load->view('category_create',$data);
		else
			$this->load->view('errors/401');
	}
	function create_category()
	{
		$this->category_model->createCategory();
		redirect('home/categories');
	}
	public function home_cat(){
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$data['categories']=$this->category_model->getCategories();
		$this->load->view('categories',$data);
	}
	public function tasks()
	{

		if($this->session->userdata('login') == false)redirect('home/login',refresh);
		$header['page'] = 'TASKS';
		$header['data'] = $this->home_model->getHeader($param="");
		$data['header'] = $this->load->view('header',$header,true);

		$data['tasks']=$this->task_model->getTasks();
		$this->load->view('tasks',$data);
	}
	public function task_create($id="")
	{

		if($this->session->userdata('login') == false)redirect('home/login',refresh);
		$header['page'] = 'TASKS';
		$header['data'] = $this->home_model->getHeader($param="");
		$data['header'] = $this->load->view('header',$header,true);

		$data['categories']=$this->category_model->getCategories();
		$data['task']=$this->task_model->getTasksByTaskId($id);
		$data['tasks']=$this->task_model->getTasks();
		if($data['task'])
			$this->load->view('task_create',$data);
		else
			$this->load->view('errors/401');
	}
	public function create_task()
	{
		$this->task_model->createTask();
		redirect('home/tasks');
	}
	public function budget($id='')
	{

		if($this->session->userdata('login') == false)redirect('home/login',refresh);
		$header['page'] = 'BUDGET';
		$header['data'] = $this->home_model->getHeader($param="");
		$data['header'] = $this->load->view('header',$header,true);
		$data['categories']=$this->category_model->getCategories();
		$data['tasks']=$this->task_model->getTasks();

		$data['budgets']=$this->budget_model->getBudgets();
		$data['budget']=$this->budget_model->getBudgetsById($id);
		$data['budgetarray']=$this->budget_model->getBudgets();
		$this->load->view('budget',$data);

	}
	public function budget_create($id='')
	{
		if($this->session->userdata('login') == false)redirect('home/login',refresh);
		$header['page'] = 'BUDGET';
		$header['data'] = $this->home_model->getHeader($param="");
		$data['header'] = $this->load->view('header',$header,true);
		$data['categories']=$this->category_model->getCategories();
		$data['tasks']=$this->task_model->getTasks();
		$data['budget']=$this->budget_model->getBudgetsById($id);
		$this->load->view('budget_create',$data);
	}
	public function create_budget()
	{
		$this->budget_model->createBudget();
		redirect('home/budget');
	}

	/* public function budget_create($id='')
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$data['categories']=$this->budget_model->getCategoriesAsArray();
		$data['tasks']=$this->budget_model->getTasksAsArray();
		$data['budget']=$this->budget_model->getBudgetsById($id);
		$this->load->view('budget_create',$data);
	}	 */

	public function summaryreport()
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$this->load->view('summaryreport',$data);
	}
	public function expenditure()
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$data['expgroup']=$this->expenditure_model->getExpenditures();
		$this->load->view('expenditure',$data);

	}
	public function create_expenditure()
	{
		$groupID=$this->expenditure_model->createExpenditureList();
		redirect('home/expenditure_create/'.$groupID);
	}
	public function expenditure_create($groupID='',$id='')
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$data['categories']=$this->category_model->getCategories();
		$data['tasks']=$this->budget_model->getTasksAsArray();
		$data['expenditures']=$this->expenditure_model->getExpenditureListById($id);
		$data['expendituregroup']=$this->expenditure_model->getExpenditureListByGroupId($groupID);
		$data['groupID'] = $groupID;
		$this->load->view('expenditure_create',$data);
	}
	public function recovery()
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$data['recoveries']=$this->recovery_model->getRecoveries();
		$this->load->view('recovery',$data);
		

	}
	public function edit_roles($uRoleID='')
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['roles']=$this->task->getRole($uRoleID);
		$data['header'] = $this->load->view('header',$data,true);
		$this->load->view('edit_roles',$data);
		$data['roles']=$this->task->getRoles();
		$data['header'] = $this->load->view('header',$data,true);
		$this->load->view('roles',$data);
	}
	public function create_recovery()
	{
		$this->recovery_model->createRecovery();
		redirect('home/recovery');
	}
	public function recovery_create($id='')
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['header'] = $this->load->view('header',$data,true);
		$data['recovery']=$this->recovery_model->getRecoveriesById($id);
		$this->load->view('recovery_create',$data);
	}
	public function getTaskList()
	{
		echo json_encode($this->task_model->getTasksByCategoryId($this->input->post("option")));
	}
	public function InsUpdRoles()
	{
		echo json_encode($this->task->InsUpdRoles());
	}
	public function deleteRoles()
	{
		echo json_encode($this->task->deleteRoles());
	}
	public function login()
	{
		if($this->session->userdata('login'))redirect('home',refresh);
		$header['page'] = 'LOGIN';
		$data['header'] = $this->load->view('header',$header,true);
		$this->load->view('login',$data);
	}

	public function loginAuthentication(){
		echo json_encode($this->home_model->login($this->input->post('username'),$this->input->post('password')));
	}
	public function roles()
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['roles']=$this->task->getRoles();
		//var_dump($data['roles']);exit();
		$data['header'] = $this->load->view('header',$data,true);
		$this->load->view('roles',$data);
	}
	/* public function edit_roles($uRoleID='')
	{
		$data['signin'] = $this->session->userdata("userID");
		$data['details']=$this->task->getUserDetails();
		$data['role'] = $this->home_model->getUserRoleName($this->session->userdata("userID"));
		$data['roles']=$this->task->getRole($uRoleID);
		//var_dump($data['roles']);exit();
		$data['header'] = $this->load->view('header',$data,true);
		$this->load->view('edit_roles',$data);

	} */
	public function getUserDetails(){
		$data['details']=$this->task->login_form();
		$this->load->view('wbse',$data);
	}
	public function registered($id='')
	{
		$data['details']=$this->home_model->get_details($id);
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