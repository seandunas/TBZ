<?php

class Login_model extends CI_Model{

    public function authenticateCredentials($username, $password){
        $q = $this->db->get_where('tbluserlist',['user_username' => $username, 'user_password' => $password]);
        //SELECT * FROM acccount where account_username = $username AND account_password = $password

        //return $q->num_rows();  *for debugging
        
        return ($q->num_rows() > 0) ? $q->result() : FALSE;
        //if credentials exist (or is = 1) then show result
    }

    public function insertRegisterUser($array){
        $this->db->insert('tbluserlist', $array);
    }
}