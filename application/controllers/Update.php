<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

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
		$this->load->model('crud');
	}
	public function index()
	{
		redirect(base_url());
	}
	public function profil($value='')
	{
		$f_name = $this->input->post('f_name');
		$l_name = $this->input->post('l_name');
		$p_number = $this->input->post('p_number');

		$data = array(
			'NAMA' => $f_name.' '.$l_name,
			'PHONE_NUMBER' => $p_number,
			'STATUS' => 2
		 );
		$this->crud->update('USER','USERNAME',$_SESSION['username'],$data);
		redirect('login');
	}
}
