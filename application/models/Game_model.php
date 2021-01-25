<?php

class Game_model extends CI_Model {

    public function getAllGame()
    {
        $this->db->select('a.ID_GAME, a.NAMA_GAME, a.DESC_GAME, a.IMAGE_GAME, b.NAMA_GENRE, a.IS_ACTIVE')
                ->from('GAME as a')
                ->join('GENRE as b', 'b.ID_GENRE = a.ID_GENRE');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getGameById($id)
    {
        $this->db->select('a.ID_GAME, a.NAMA_GAME, a.DESC_GAME, a.IMAGE_GAME, b.NAMA_GENRE, a.IS_ACTIVE')
                ->from('GAME as a')
                ->where('a.ID_GAME', $id)
                ->join('GENRE as b', 'b.ID_GENRE = a.ID_GENRE');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function createGame($data)
    {
        $this->db->insert('GAME', $data);
    }

    public function hapusGame($id)
    {
        $this->db->where('ID_GAME', $id);
        $this->db->delete('GAME');
    }
}