<?php
defined("BASEPATH") or die("No Direct Access Allowed");

Class M_berita extends CI_Model{
    function getBerita(){
        return $this->db->get('berita');
    }
    function addBerita($data){
        $this->db->insert('berita',$data);
    }
    function get1Berita($where){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('user','berita.id_user=user.id_user');
        $this->db->where($where);
        return $this->db->get();
    }
    function updateBerita($where,$data){
        $this->db->where($where);
        $this->db->update('berita',$data);
    }
    function deleteBerita($where){
        $this->db->where($where);
        $this->db->delete('berita');
    }
}