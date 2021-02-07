<?php

class News_model extends CI_Model
{

    public function getAllNews()
    {
        $this->db->from('NEWS');
        $this->db->order_by('CREATED_DATE', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getNewsById($id)
    {
        $this->db->from('NEWS');
        $this->db->where('ID_NEWS', $id);
        $this->db->order_by('CREATED_DATE', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function createNews($data)
    {
        $this->db->insert('NEWS', $data);
    }


    public function hapusNews($id)
    {
        $row = $this->db->where('ID_NEWS',$id)->get('NEWS')->row();
        unlink('./assets/img/news/'.$row->FOTO);
        $this->db->where('ID_NEWS', $id);
        $this->db->delete('NEWS');
        return true;
    }
}
