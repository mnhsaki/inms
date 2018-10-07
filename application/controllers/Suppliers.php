
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {


	public function add_new_suppliers()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/suppliers/add_new_suppliers','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_suppliers()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/suppliers/list_of_suppliers','',true);
        $this->load->view('main_layout',$data);
	}
	public function suppliers_payment()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/suppliers/suppliers_payment','',true);
        $this->load->view('main_layout',$data);
	}
	public function payment_report()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/suppliers/payment_report','',true);
        $this->load->view('main_layout',$data);
	}


}
