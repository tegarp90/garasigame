<?php

class Crud extends CI_Model {

    public function create()
    {
        # code...
    }
    public function cekid($table,$column,$id)
    {
        $this->db->where($column,$id);
        $query = $this->db->get($table);
        if ($query->num_rows() >0) {
            return true;
        }else{
            return false;
        }
    }
    public function cekpass($table,$column,$id,$pass)
    {
        $this->db->where($column,$id);
        $query = $this->db->get($table)->row()->PASSWORD;

        if (password_verify($pass, $query)) {
            return true;
        }else{
            return false;
        }

    }
    public function update($table,$column,$id,$data)
    {
        $this->db->where($column,$id);
        $this->db->update($table,$data);
    }
    public function insert($table,$data)
    {
        $this->db->insert($table,$data);
    }
    public function delete($table,$data)
    {
        $this->db->delete($table,$data);
    }
    public function get_where($table,$where)
    {
        return $this->db->get_where($table,$where);
    }
}