<?php
/*
Class Login
Created by Reza Nur Rochmat
Code Igniter 3.1.6

*/

class Login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('admin/login/header');
		$this->load->view('admin/login/content_login');
		$this->load->view('admin/login/footer');

	}
}