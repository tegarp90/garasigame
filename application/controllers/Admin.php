<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Genre_model');
    }

    public function index()
    {
        $data['title'] = "Halaman Admin";

        $this->load->view('admintemplate/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admintemplate/footer');
    }

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
        sleep(2); redirect('admin/indexGenre');
    }

    public function hapusGenre()
    {   
        $id = $this->input->post('id');
        $this->Genre_model->hapusGenre($id);
        redirect('admin/indexGenre');
    }

}