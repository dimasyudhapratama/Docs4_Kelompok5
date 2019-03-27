<?php
defined("BASEPATH") or die("No Direct Access Allowed");

Class Test extends CI_Controller{
    function index(){
        $data['a'] = "TEST";
        $this->load->view('test',$data);
    }
}
