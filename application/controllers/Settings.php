
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {


	public function profile()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/Settings/profile','',true);
        $this->load->view('main_layout',$data);
	}


}
