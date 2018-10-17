
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	//client div
	public function add_new_div()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/div/add_new_div','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_div()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/div/list_of_div','',true);
        $this->load->view('main_layout',$data);
	}

	//zone
	public function add_new_zone()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/zone/add_new_zone','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_zone()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/zone/list_of_zone','',true);
        $this->load->view('main_layout',$data);
	}
	//Area
	public function add_new_area()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/area/add_new_area','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_area()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/area/list_of_area','',true);
        $this->load->view('main_layout',$data);
	}

	//Sales Manager
	public function add_new_sales_manager()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/SalesManager/add_new_sales_manager','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_sales_manager()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/SalesManager/list_of_sales_manager','',true);
        $this->load->view('main_layout',$data);
	}
	//team leader
	public function add_new_team_leader()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/teamleader/add_new_team_leader','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_team_leader()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/teamleader/list_of_team_leader','',true);
        $this->load->view('main_layout',$data);
	}
	//team member
	public function add_new_team_member()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/TeamMember/add_new_team_member','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_team_member()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/TeamMember/list_of_team_member','',true);
        $this->load->view('main_layout',$data);
	}

	public function profile()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/profile/admin_profile','',true);
        $this->load->view('main_layout',$data);
	}


}
