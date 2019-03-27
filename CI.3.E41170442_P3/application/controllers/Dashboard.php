<?php
defined("BASEPATH") OR die("No Direct Access Allowed");

Class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();

    }
    public function index(){
        $data['title'] = "Dashboard";
        $data['path'] = "dashboard/dashboard";
        $this->load->view('admin/overviews',$data);
    }
    public function profile(){
        $this->load->view('dashboard/profile');
    }
    public function contact_us(){
        $this->load->view('dashboard/contact_us');
    }
    public function test(){
        $this->load->view('admin/overviews');
    }
}