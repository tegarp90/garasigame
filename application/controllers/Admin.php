<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Genre_model');
        $this->load->model('Game_model');
        $this->load->model('Tournament_model');
        $this->load->model('News_model');
    }

    public function index()
    {
        $data['title'] = "Halaman Admin";

        $this->load->view('admintemplate/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admintemplate/footer');
    }

    // -------------------- START HALAMAN ADMIN GENRE --------------------

    public function indexGenre()
    {
        $data['title'] = "Halaman Genre";
        $data['genre'] = $this->Genre_model->getAllGenre();

        //nomor
        $data['numbering'] = 1;

        $this->load->view('admintemplate/header', $data);
        $this->load->view('admin/genre', $data);
        $this->load->view('admintemplate/footer');
    }

    public function tambahGenre()
    {
        $data['genre'] = $this->Genre_model->createGenre($_POST);
        sleep(2);
        redirect('genre_admin');
    }

    public function hapusGenre()
    {
        $id = $this->input->post('id');
        $this->Genre_model->hapusGenre($id);
    }

    public function getGenreId()
    {
        $id = $this->input->post('id');
        echo json_encode($this->Genre_model->getGenreById($id));
    }

    public function ubahGenre()
    {
        $id = $this->input->post('id');
        $data['genre'] = json_encode($this->Genre_model->ubahGenre($id));
        var_dump($this->db->last_query());
        exit;
        sleep(2);
        redirect('genre_admin');
    }

    // -------------------- END HALAMAN ADMIN GENRE --------------------



    // -------------------- START HALAMAN ADMIN GAME --------------------

    public function indexGame()
    {
        $data['title'] = "Halaman Game";
        $data['game'] = $this->Game_model->getAllGame();
        $data['genre'] = $this->Genre_model->getAllGenre();

        //nomor
        $data['numbering'] = 1;

        $this->load->view('admintemplate/header', $data);
        $this->load->view('admin/game', $data);
        $this->load->view('admintemplate/footer');
    }

    public function tambahGame()
    {
        $nama = $this->input->post('nama');
        $genre = $this->input->post('genre');
        $desc = $this->input->post('desc');
        $status = $this->input->post('status');
        $image = $_FILES['image'];
        if ($image == NULL) {
        } else {
            $config['upload_path'] = './assets/img/game';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                print_r($this->upload->display_errors());
                echo "Upload Gagal";
                die;
            } else {
                $image = $this->upload->data('file_name');
            }
        }
        $data = array(
            'NAMA_GAME' => $nama,
            'ID_GENRE' => $genre,
            'DESC_GAME' =>  $desc,
            'IS_ACTIVE' =>  $status,
            'IMAGE_GAME' => $image
        );
        $this->Game_model->createGame($data);
        sleep(2);
        redirect('games_admin');
    }

    public function hapusGame()
    {
        $id = $this->input->post('id');
        $this->Game_model->hapusGame($id);
        redirect('games_admin');
    }

    public function getGameId()
    {
        $id = $this->input->post('id');
        echo json_encode($this->Game_model->getGameById($id));
    }

    public function ubahGame()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $genre = $this->input->post('genre');
        $desc = $this->input->post('desc');
        $status = $this->input->post('status');
        $data = array(
            'NAMA_GAME' => $nama,
            'ID_GENRE' => $genre,
            'DESC_GAME' =>  $desc,
            'IS_ACTIVE' =>  $status
        );
        $data['game'] = json_encode($this->Game_model->ubahGame($id, $data));
        sleep(2);
        redirect('games_admin');
    }

    // public function ubahGambarGame()
    // {
    //     $id = $this->input->post('id');
    //     $image = $_FILES['image'];
    //     if ($image == NULL) {
    //     } else {
    //         $config['upload_path'] = './assets/img/game';
    //         $config['allowed_types'] = 'jpg|jpeg|png|gif';
    //         $config['encrypt_name'] = TRUE;

    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('image')) {
    //             print_r($this->upload->display_errors());
    //             echo "Upload Gagal";
    //             die;
    //         } else {
    //             $image = $this->upload->data('file_name');
    //         }
    //     }
    //     $data = array(
    //         'IMAGE_GAME' => $image
    //     );
    //     $this->Game_model->getGameById($id);
    //     json_encode($this->Game_model->ubahGambarGame($id, $data));
    // }

    // -------------------- END HALAMAN ADMIN GAME --------------------

    // -------------------- START HALAMAN ADMIN TOURNAMENT --------------------

    public function jenisTournament()
    {
        $data['title'] = "Jenis Tournament";
        $data['tournament'] = $this->Tournament_model->getAllJenisTournament();

        $this->load->view('admintemplate/header', $data);
        $this->load->view('admin/jenis_tournament', $data);
        $this->load->view('admintemplate/footer');
    }

    public function indexTournamentGG() 
    {
        $data['title'] = "Tournament Garasi Games";
        $data['tournament'] = $this->Tournament_model->getAllTournamentGG();
        $data['game'] = $this->Game_model->getAllGameForDropDown();

        //nomor
        $data['numbering'] = 1;

        $this->load->view('admintemplate/header', $data);
        $this->load->view('admin/tournament_gg', $data);
        $this->load->view('admintemplate/footer');
    }

    public function getTournamentId()
    {
        $id = $this->input->post('id');
        echo json_encode($this->Tournament_model->getTournamentById($id));
    }

    public function ubahTournament()
    {
        $id = $this->input->post('id');
        $game = $this->input->post('game');
        $namaTournament = $this->input->post('namaTournament');
        $tanggalTournament = $this->input->post('tanggalTournament');
        $maxPeserta = $this->input->post('maxPeserta');
        $biayaPendaftaran = $this->input->post('biayaPendaftaran');
        $status = $this->input->post('status');
        $data = array(
            'ID_GAME' => $game,
            'NAMA_TOURNAMENT' => $namaTournament,
            'TANGGAL_TOURNAMENT' => $tanggalTournament,
            'MAX_PESERTA' => $maxPeserta,
            'BIAYA_PENDAFTARAN' => $biayaPendaftaran,
            'STATUS' => $status
        );
        $data['tournament'] = json_encode($this->Tournament_model->ubahTournament($id, $data));
        sleep(2);
        redirect('admin_list_tournament_gg');
    }

    public function tambahTournamentGG()
    {
        $data['tournament'] = $this->Tournament_model->createTournamentGG($_POST);
        sleep(2);
        redirect('admin_list_tournament_gg');
    }

    public function hapusTournament()
    {
        $id = $this->input->post('id');
        $this->Tournament_model->hapusTournament($id);
        redirect('admin_list_tournament_gg');
    }

    // -------------------- END HALAMAN ADMIN TOURNAMENT --------------------


    // -------------------- START HALAMAN ADMIN NEWS --------------------

    public function indexNews()
    {
        $data['title'] = "News Garasi Games";
        $data['news'] = $this->News_model->getAllNews();
        //nomor
        $data['numbering'] = 1;

        $this->load->view('admintemplate/header', $data);
        $this->load->view('admin/news', $data);
        $this->load->view('admintemplate/footer');
    }

    public function getNewsId()
    {
        $id = $this->input->post('id');
        echo json_encode($this->News_model->getNewsById($id));
    }

    public function tambahNews()
    {
        $judulBerita = $this->input->post('judulBerita');
        $isi = $this->input->post('isi');
        $image = $_FILES['image'];
        $date = date("y-m-d");
        if ($image == NULL) {
        } else {
            $config['upload_path'] = './assets/img/news';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                print_r($this->upload->display_errors());
                echo "Upload Gagal";
                die;
            } else {
                $image = $this->upload->data('file_name');
            }
        }
        $data = array(
            'JUDUL' => $judulBerita,
            'ISI_NEWS' => $isi,
            'FOTO' => $image,
            'CREATED_DATE' => $date
        );
        $this->News_model->createNews($data);
        sleep(2);
        redirect('admin_news');
    }

    public function hapusNews()
    {
        $id = $this->input->post('id');
        $this->News_model->hapusNews($id);
        redirect('admin_news');
    }

}
