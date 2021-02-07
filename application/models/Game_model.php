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


    public function getAllGameForDropDown()
    {
        $query = $this->db->get('GAME');
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
        $row = $this->db->where('ID_GAME',$id)->get('GAME')->row();
        unlink('./assets/img/game/'.$row->IMAGE_GAME);
        $this->db->where('ID_GAME', $id);
        $this->db->delete('GAME');
        return true;
    }

    public function ubahGame($id, $data)
    {
        $this->db->from('GAME');
        $this->db->where('ID_GAME', $id);
        $this->db->update('GAME', $data);
        return true;
    }

    public function ubahGambarGame($id, $data)
    {
        
        $this->db->from('GAME');
        $this->db->where('ID_GAME', $id);
        
        $this->db->update('GAME', $data);
        return true;
    }
}