<?php
Class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
    function index(){
        $data['title'] = 'Login';
        $this->load->view('login/v_login');
    }
    function login_act(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->M_login->cekLogin($where)->num_rows();
        if($cek==1){
            $data_session = array(
                'username' => $username,
                'login_status' => 1
            );
            $this->session->set_userdata($data_session);
            redirect('berita');
        }else{
            redirect('login');
        }
    }
}