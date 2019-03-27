<?php
defined("BASEPATH") or die("No Direct Access Allowed");

Class Berita extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_berita');
        $this->load->model('M_user');
    }
    function index(){
        $data['title'] = "Berita";
        $data['path'] = "berita/data-berita";
        $data['berita'] = $this->M_berita->getBerita()->result();
        $this->load->view('admin/overviews',$data);
    }
    function add(){
        $data['title'] = "Form Berita";
        $data['path'] = "berita/tambah-berita";
        $data['user_penulis'] = $this->M_user->getUser()->result();
        $this->load->view('admin/overviews',$data);
    }
    function add_act(){
        $config = array(
            array(
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required'
            ),
            array(
                'field' => 'konten',
                'label' => 'Konten',
                'rules' => 'required'
            ),
            array(
                'field' => 'penulis',
                'label' => 'Penulis',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run()==TRUE){
            $data = array(
                'judul_berita' => $this->input->post('judul'),
                'konten_berita' => $this->input->post('konten'),
                'id_user' => $this->input->post('penulis')
            );
            $this->M_berita->addBerita($data);
            redirect('berita');
        }
    }
    function show($id){
        $data['title'] = "Baca Berita";
        $data['path'] = "berita/show-berita";
        $where = array(
            'id_berita' => $id
        );
        $data['berita'] = $this->M_berita->get1Berita($where)->result();
        $this->load->view('admin/overviews',$data);
    }
    function edit($id){
        $data['title'] = 'Edit Berita';
        $data['path']  = 'berita/edit-berita';
        $where = array(
            'id_berita' => $id
        );
        $data['berita'] = $this->M_berita->get1Berita($where)->result();
        $data['user_penulis'] = $this->M_user->getUser()->result();
        $this->load->view('admin/overviews',$data);
    }
    function del($id){
        $where = array(
            'id_berita' => $id
        );
        $this->M_berita->deleteBerita($where);
    }
}