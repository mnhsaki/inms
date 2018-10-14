
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logistics extends CI_Controller {


	public function create_delivery_voucher()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/create_delivery_voucher','',true);
        $this->load->view('main_layout',$data);
	}
	public function today_delivery_list()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/today_delivery_list','',true);
        $this->load->view('main_layout',$data);
	}
	public function delivery_voucher_list()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/delivery_voucher_list','',true);
        $this->load->view('main_layout',$data);
	}
	public function today_receive_list()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/today_receive_list','',true);
        $this->load->view('main_layout',$data);
	}
	public function today_voucher_list()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/today_voucher_list','',true);
        $this->load->view('main_layout',$data);
	}

	//client div
	public function add_new_div()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/div/add_new_div','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_div()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/div/list_of_div','',true);
        $this->load->view('main_layout',$data);
	}

	//zone
	public function add_new_zone()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/zone/add_new_zone','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_zone()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/zone/list_of_zone','',true);
        $this->load->view('main_layout',$data);
	}
	//Area
	public function add_new_area()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/area/add_new_area','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_area()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/area/list_of_area','',true);
        $this->load->view('main_layout',$data);
	}

	//team leader
	public function add_new_team_leader()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/teamleader/add_new_team_leader','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_team_leader()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/teamleader/list_of_team_leader','',true);
        $this->load->view('main_layout',$data);
	}
	//team member
	public function add_new_team_member()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/TeamMember/add_new_team_member','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_team_member()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/logistes/TeamMember/list_of_team_member','',true);
        $this->load->view('main_layout',$data);
	}


}
