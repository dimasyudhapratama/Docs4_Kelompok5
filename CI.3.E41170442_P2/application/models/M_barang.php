<?php
defined("BASEPATH") OR die("No Direct Access Allowed");

Class M_Barang extends CI_model{
    private $table = 'barang';
    function getBarang(){
        return $this->db->get('barang');
    }
    function get1Barang($id){
        $where = array(
            'kodeBarang' => $id
        );
        return $this->db->get_where($table,$where);
    }
}