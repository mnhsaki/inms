<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {


	public function add_new_Brand()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/brand/add_new_Brand','',true);
		$this->load->view('main_layout',$data);
	}
	public function list_of_cBrand()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/brand/list_of_cBrand','',true);
		$this->load->view('main_layout',$data);
	}
}
