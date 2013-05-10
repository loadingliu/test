<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
    $data['title'] = 'welcome to weiget';

		$this->load->view('welcome', $data);
	}
}
