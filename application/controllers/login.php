<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

		$data['status'] = 'tak login';
		$data['content'] = 'contents/v_landing_page';
		$this->load->view('tamplate/page',$data);
	}

	function google_login()
	{
		include_once APPATH . "libraries/vendor/autoload.php";

		$google_client = new Google_Client();
		$google_client->setClientId('188463175625-67l3gjrgo442n7k793878bd85da1v5p5.apps.googleusercontent.com
');
		$google_client->setClientSecret('BNDS2tOVrTLMUw4SW66yC3yb');
		$google_client->setRedirectUrl('http://localhost/GarasiGames/login/google_login');
		$google_client->addScope('email');

		$google_client->addScope('profile');
		if (isset($_GET["code"])) {
			
		}
	}
}
