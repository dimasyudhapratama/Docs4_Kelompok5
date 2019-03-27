<?php

defined("BASEPATH") OR die("No Direct Access Allowed");
class M_Login extends CI_Model{
    function cekLogin($where){
        return $this->db->get_where('user',$where);
    }
}