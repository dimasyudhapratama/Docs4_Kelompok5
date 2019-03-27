<?php
defined("BASEPATH") OR die("No Direct Access Allowed");

class M_user extends CI_Model{
    public function getUser(){
        return $this->db->get('user');
    }
    public function inputUser($data){
        $this->db->insert('user',$data);
    }
    public function get1User($where){
        return $this->db->get_where('user',$where);
    }
    public function updateDataUser($where,$data){
        $this->db->where($where);
        $this->db->update('user',$data);
    }
    public function deleteUser($where){
        $this->db->where($where);
        $this->db->delete('user');
    }
}