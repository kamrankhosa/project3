<?php
/**
 * 
 */
class Student extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function signup(){
		$this->load->view('student/form/form');
	}
	function dashboard(){
		$this->load->view('student/dashboard/dashboard');
	}
}





?>