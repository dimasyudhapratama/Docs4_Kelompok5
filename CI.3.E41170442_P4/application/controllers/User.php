<?php
defined("BASEPATH") OR exit("No Direct Access Allowed");
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
Class User extends REST_Controller{
    function __construct($config = 'rest'){
        parent::__construct($config);
    }
    function index_get(){
        $id = $this->get('id');
        if($id==''){
            $user = $this->db->get('user')->result();
        }else{
            $where = array('id' => $id);
            $user = $this->db->get_where('user',$where)->result();
        }
        $this->response($user,200);
    }
    function index_post(){
        $data = array(
            'name' => $this->post('name')
        );
        $insert = $this->db->insert('user',$data);
        if($insert){
            $this->response($data,200);
        }else{
            $failed = array(
                'status' => 'fail',502
            );
            $this->response($failed);
        }
    }
    function index_put($id){
        $where = array(
            'id' => $id
        );
        $data = array( 'name' => $this->put('name'));
        
        $this->db->where($where);
        if($this->db->update('user',$data)){
            $this->response($data,200);
        }else{
            $failed = array(
                'status' => 'fail',502
            );
        }
    }
    function index_delete($id){
        $where = array('id' => $id);
        $this->db->where($where);
        if($this->db->delete('user')){
            $success = array(
                'status' => 'Delete Success'
            );
            $this->response($success,201);
        }else{
            $failed = array(
                'status' => 'Delete failed'
            );
            $this->response($failed,502);
        }
    }
}