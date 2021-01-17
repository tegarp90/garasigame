<?php

class Crud extends CI_Model {

    public function create()
    {
        # code...
    }
    function cekid($table,$column,$id)
    {
        $this->db->where($column,$id);
        $query = $this->db->get($table);
        if ($query->num_rows() >0) {
            return true;
        }else{
            return false;
        }
    }
    function update($table,$column,$id,$data)
    {
        $this->db->where($column,$id);
        $this->db->update($table,$data);
    }
    function insert($table,$data)
    {
        $this->db->insert($table,$data);
    }
}