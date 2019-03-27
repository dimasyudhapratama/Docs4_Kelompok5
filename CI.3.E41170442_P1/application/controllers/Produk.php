<?php

defined("BASEPATH") OR exit("No Direct Access Script Allowed");

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

Class Produk extends REST_Controller{
    function __construct($config = 'rest'){
        parent::__construct($config);
        // $this->load->model('M_produk');
        // $this->load->database();
        
    }
    function index_get(){
        $id_produk = $this->get('id_produk');
        if($id_produk== ''){
            $produk = $this->db->get('produk')->result();
        }else{
            $where = array(
                'id_produk' => $id_produk
            );
            $produk = $this->db->get_where('produk',$where)->result();
        }
        $this->response($produk,200);
    }
    function index_post(){
        $data = array(
            'id_produk' => $this->post('id_produk'),
            'nm_produk' => $this->post('nm_produk')
        );
        $insert = $this->db->insert('produk',$data);
        if($insert){
            $this->response($data);
        }else{
            $failed = array(
                'status' => 'fail',502
            );
            $this->response($failed);
        }
    }
    function index_put(){
        $id_produk = $this->put('id_produk');
        $where = array(
            'id_produk' => $id_produk
        );
        $data = array(
            'nm_produk' => $this->put('nm_produk')
        );
        $this->db->where($where);
        if($this->db->update('produk',$data)){
            $this->response($data,200);
        }else{
            $failed = array(
                'status' => 'fail',502
            );
            $this->response($failed);
        }
    }
    function index_delete(){
        $id_produk = $this->delete('id_produk');
        $where = array(
            'id_produk' => $id_produk
        );
        $this->db->where($where);
        if($this->db->delete('produk')){
            $success = array(
                'status' => 'success'
            );
            $this->response($success,201);
        }else{
            $failed = array(
                'status' => 'failed'
            );
            $this->response($failed,502);
        }
    }
}