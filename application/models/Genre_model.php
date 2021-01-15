<?php

class Genre_model extends CI_Model {

    public function getAllGenre()
    {
        $query = $this->db->get('GENRE');
        return $query->result_array();
    }

    public function createGenre()
    {
        $nama = $this->input->post('nama');
        $status = $this->input->post('status');

        $data = array(
            'NAMA_GENRE' => $nama,
            'IS_ACTIVE' => $status
        );

        $this->db->insert('GENRE', $data);
    }

    public function hapusGenre($id)
    {
        $this->db->where('ID_GENRE', $id);
        $this->db->delete('GENRE');
    }
}