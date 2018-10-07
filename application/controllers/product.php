
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


	public function add_new_product()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/product/add_new_product','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_product()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/product/list_of_product','',true);
        $this->load->view('main_layout',$data);
	}
	public function print_barcode_label()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/product/print_barcode_label','',true);
        $this->load->view('main_layout',$data);
	}

}
