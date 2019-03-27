<?php
Class M_produk extends CI_Model{
    function getProduk(){
        $this->db->get('produk');
    }
    function getWhereProduk($id){
        
        // $this->db->get_where('produk',$id);
    }
}