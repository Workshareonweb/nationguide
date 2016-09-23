<?php

class Profiles extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function pagedefault() {
		//echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
		//echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
		//$this->view->usermemberafterlogin = $this->model->usermemberafterlogin();
        $this->view->maxlicencedcode = $this->model->maxlicencedcode();
        $this->view->licencedcode = $this->model->licencedcode();
		$this->view->Selectedlg = $this->model->Selectedlg();
		$this->view->nationalitylist = $this->model->nationalitylist();
		$this->view->provinceslist = $this->model->provinceslist();
		$this->view->locationlist = $this->model->locationlist();
		$this->view->guidetypelist = $this->model->guidetypelist();
		$this->view->render('profiles/index');
	}
	
	public function logout()
	{
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
	public function addEditguide()
	{
		$this->model->addEditguide();
		//var_dump($_POST);
	}
	public function dept()
	{
		$this->view->ListDepartment = $this->model->ListDepartment();
		$this->view->render('information/dept');
	}
	public function addDept()
	{
		$this->model->addDept();
	}
    public function deptEdition($id)
    {        
        $this->view->depttoedit = $this->model->depttoedit($id);
        $this->view->ListDepartment = $this->model->ListDepartment();
        $this->view->render('information/deptEdition');
    }
}