<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
            $data['main']   = 'home';
            $this->load->view('layout', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */