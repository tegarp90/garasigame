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
		$this->load->model('crud');
	}
	public function index()
	{

		$data['content'] = 'contents/v_landing_page2';
		$this->load->view('tamplate/page',$data);
	}
	public function profil()
	{
		$i = $this->input->get('user');
		$data = $this->crud->get_where('user',['USERNAME' => $i])->row_array();
		if($data){
			if($data['STATUS'] != 1){
				redirect('c_profil');
			}else{			
				$data['content'] = 'contents/v_profil';
				$this->load->view('tamplate/page',$data);
			}
		}else{
			if ($_SESSION['web_sesi']) {
				redirect('profile?user='.$_SESSION['username']);
			}else{
				redirect(base_url());
			}
		}
		
	}
	public function turnamen()
	{
		$data['status'] = 'tak login';
		$data['content'] = 'contents/v_tournament';
		$this->load->view('tamplate/page',$data);
	}
	public function news()
	{
		$data['content'] = 'contents/v_news';
		$this->load->view('tamplate/page',$data);
	}
	public function complete_p()
	{
		$i = $_SESSION['username'];
		$data = $this->crud->get_where('user',['USERNAME' => $i])->row_array();
		$this->load->view('tamplate/header');
		$this->load->view('contents/v_c_profil',$data);
		$this->load->view('tamplate/footer');
	}
}
