<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		$data['content'] = 'contents/v_landing_page';
		$this->load->view('tamplate/page',$data);
	}

	public function profil()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data['username'] = $username;
		$data['password'] = $password;
		$data['status'] = 'login';
		$data['content'] = 'contents/v_profil';
		$this->load->view('tamplate/page',$data);
	}
	public function turnamen()
	{
		$data['status'] = 'tak login';
		$data['content'] = 'contents/v_tournament';
		$this->load->view('tamplate/page',$data);
	}
	public function tes()
	{
		$this->load->view('welcome_message');
	}
}
