<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Genre_model');
        $this->load->model('Game_model');
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
        sleep(2); redirect('genre');
    }

    public function hapusGenre()
    {   
        $id = $this->input->post('id');
        $this->Genre_model->hapusGenre($id);
    }

    public function getUbah()
    {
        $id = $this->input->post('id');
        echo json_encode($this->Genre_model->getGenreById($id));
    }

    public function ubahGenre()
    {
        $id = $this->input->post('id');
        $data['genre'] = json_encode($this->Genre_model->ubahGenre($id));
        sleep(2); redirect('genre');
    }

// -------------------- END HALAMAN ADMIN GENRE --------------------



// -------------------- START HALAMAN ADMIN GAME --------------------

    public function indexGame()
    {
        $data['title'] = "Halaman Game";
        $data['game'] = $this->Game_model->getAllGame();
        $data['genre'] = $this->Genre_model->getAllGenre();
        
        // var_dump($this->db->last_query()); exit;
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
        if ($image == NULL){
        } else {
            $config['upload_path'] = './assets/img/game';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                print_r($this->upload->display_errors());
                var_dump($image);
                echo "Upload Gagal"; die;
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
        sleep(2); redirect('games');
    }

    public function hapusGame()
    {
        $id = $this->input->post('id');
        $this->Game_model->hapusGame($id);
        redirect('games');
    }

    public function getGameId()
    {
        $id = $this->input->post('id');
        echo json_encode($this->Game_model->getGameById($id));
    }


}