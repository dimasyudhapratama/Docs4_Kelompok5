<?php
defined("BASEPATH") or die("No Direct Access Allowed");

Class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_user');
        $this->load->library('form_validation');
    }
    function index(){
        $data['title'] = "Data User";
        $data['path'] = "user/data-user";
        $data['user'] = $this->M_user->getUser()->result();
        $this->load->view('admin/overviews',$data);
    }
    function add(){
        $data['title'] = 'Tambah User';
        $data['path'] = 'user/tambah-user';
        $this->load->view('admin/overviews',$data);
    }
    function input_act(){
        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|max_length[50]'
            ),
            array(
                'field' => 'level',
                'label' => 'level',
                'rules' => 'required|max_length[1]|integer'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required',
            ),
            array(
                'field' => 'repassword',
                'label' => 'Re-Password',
                'rules' => 'required',
            ),
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run()==TRUE){
            if($this->input->post('password')==$this->input->post('repassword')){
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
                    'level' => $this->input->post('level')
                );
                $this->M_user->inputUser($data);
            }
        }
        redirect('user');
    }
    function edit($id){
        $data['title'] = "Edit User";
        $data['path'] = "user/edit-user";
        $data['id_user'] = $id;
        $where = array(
            'id_user' => $data['id_user']
        );
        $data['user'] = $this->M_user->get1User($where)->result();
        $this->load->view('admin/overviews',$data);
    }
    function editPw($id){
        $data['title'] = "Edit User";
        $data['path'] = "user/edit-pw-user";
        $data['id_user'] = $id;
        $where = array(
            'id_user' => $data['id_user']
        );
        $data['user'] = $this->M_user->get1User($where)->result();
        $this->load->view('admin/overviews',$data);
    }
    function update(){
        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|max_length[50]'
            ),
            array(
                'field' => 'level',
                'label' => 'level',
                'rules' => 'required|max_length[1]|integer'
            )
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run()==TRUE){
            $where = array(
                'id_user' => $this->input->post('id')
            );
            $data = array(
                'username' => $this->input->post('username'),
                'level' => $this->input->post('level')
            );
            $this->M_user->updateDataUser($where,$data);
            redirect('user');
        }
    }
    function updatePw(){

    }
    function delete($id){
        $where = array(
            'id_user' => $id
        );
        $this->M_user->deleteUser($where);
        redirect('user');

    }
}