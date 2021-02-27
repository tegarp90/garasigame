<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

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
		$this->load->model('Game_model');
		$this->load->model('Tournament_model');
		$this->load->model('News_model');
	}
	public function index()
	{
		$data['title'] = 'Garasi Game';
		$data['content'] = 'contents/v_landing_page2';
		$this->load->view('tamplate/page', $data);
	}
	public function profil()
	{
		$data['title'] = 'Profil Garasi Game';
		$i = $this->input->get('user');
		$data = $this->crud->get_where('USER', ['USERNAME' => $i])->row_array();
		if ($data) {
			if ($data['STATUS'] == 1) {
				redirect('c_profil');
			} else {
				$data['numbering'] = 1;
				$sessionid = $_SESSION['username'];
				$data['title'] = 'Profil Garasi Game';
				$data['tournamentList'] = $this->Tournament_model->getAllTournamentForPeserta($sessionid);
				$data['content'] = 'contents/v_profil';
				$this->load->view('tamplate/page', $data);
			}
		} else {
			if ($_SESSION['web_sesi']) {
				redirect('profile?user=' . $_SESSION['username']);
				// var_dump($_SESSION['web_sesi']); exit;
			} else {
				redirect(base_url());
			}
		}
	}
	public function turnamen()
	{
		$data['title'] = 'Tournament Garasi Game';
		$data['turgg'] = $this->Tournament_model->getAllTournamentGGValid();
		$data['game'] = $this->Game_model->getAllGame();
		$data['status'] = 'tak login';
		$data['content'] = 'contents/v_tournament';

		$this->load->view('tamplate/page', $data);
	}

	public function daftar_turnamen()
	{
		if (isset($_SESSION['username'])) {
			$ID_TOURNAMENT = $this->input->get('ID_TOURNAMENT');
			$data['title'] = 'Daftar Tournament';
			$data['tournament'] = $this->Tournament_model->getTournamentById($ID_TOURNAMENT);
			$data['content'] = 'contents/v_daftar_tournament';

			$this->load->view('tamplate/page', $data);
		} else {
			echo '<script>alert("Login terlebih dahulu untuk mendaftar !")</script>';
			echo "<script>
                    var oldURL = document.referrer;
                    window.location.assign(oldURL);
                    </script>";
		}
	}

	public function create_daftar_turnamen()
	{
		$data['userTournament'] = $this->Tournament_model->createPesertaTournament($_POST);
        sleep(5);
        redirect('tournament');
	}

	public function news()
	{
		$data['title'] = 'News Garasi Game';
		$data['content'] = 'contents/v_news';
		$data['news'] = $this->News_model->getAllNews();

		$this->load->view('tamplate/page', $data);
	}
	public function news_detail()
	{
		$data['title'] = "News Detail";
		$id = $_GET['ID_NEWS'];
		$data['content'] = 'contents/v_news_detail';
		$data['news'] = $this->News_model->getNewsById($id);

		$this->load->view('tamplate/page', $data);
	}
	public function complete_p()
	{
		$i = $_SESSION['username'];
		$data = $this->crud->get_where('USER', ['USERNAME' => $i])->row_array();
		$this->load->view('tamplate/header');
		$this->load->view('contents/v_c_profil', $data);
		$this->load->view('tamplate/footer');
	}
}
