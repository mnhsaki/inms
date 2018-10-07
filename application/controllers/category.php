<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


	public function add_new_category()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/category/add_new_category','',true);
		$this->load->view('main_layout',$data);
	}
	public function list_of_category()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/category/list_of_category','',true);
		$this->load->view('main_layout',$data);
	}
}
