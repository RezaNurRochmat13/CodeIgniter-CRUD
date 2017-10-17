<?php

/*
Class Home
Created by Reza Nur Rochmat
Code Igniter 3.1.6

*/

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('include/header');
		$this->load->view('admin/home/content_home');
		$this->load->view('include/footer');
	}
}