<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
    $data['title'] = '登录';

		$this->load->view('login', $data);
	}
}
