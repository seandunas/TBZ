<?php

class User_model extends CI_Model{

        public function get_items(){
            $q = $this->db->get('tbluserlist'); //SELECT * FROM tbluserlist
            return $q->result();
        }

        public function get_items2(){
            $q = $this->db->get('tblservicelist'); //SELECT * FROM tbluserlist
            return $q->result();
        }

        public function get_items_limit_offset_user($limit, $offset){
            $this->db->limit($limit,$offset);
            $q = $this->db->get('tbluserlist'); //SELECT * from tbluserlist LIMIT $offset. $limit
            return $q->result();
        }

        public function get_items2_limit_offset_service($limit, $offset){
            $this->db->limit($limit,$offset);
            $q = $this->db->get('tblservicelist'); //SELECT * from tblservicelist LIMIT $offset. $limit
            return $q->result();
        }

        // dynamic method to count number of rows - pagination
        public function getTotalRows_user(){
            $q = $this->db->get("tbluserlist"); //SELECT * from tbluserlist LIMIT $offset. $limit
            return $q->num_rows();
        }

        public function getTotalRows_service(){
            $q = $this->db->get("tblservicelist"); //SELECT * from tblservicelist LIMIT $offset. $limit
            return $q->num_rows();
        }
    
        public function getItemById($tableName, $colFilter, $param){
            $q = $this->db->get_where($tableName,[$colFilter => $param] );
            return $q->result();
        }

        public function getServiceQuantityByCategoryDog(){
            $q = $this->db->get_where("tblservicelist",array('service_category' => 'dog'));
            return $q->num_rows();
        }

        public function getServiceQuantityByCategoryCat(){
            $q = $this->db->get_where("tblservicelist",array('service_category' => 'cat'));
            return $q->num_rows();
        }

        public function getServiceQuantityByCategoryBoth(){
            $q = $this->db->get_where("tblservicelist",array('service_category' => 'both'));
            return $q->num_rows();
        }

        // public function getItemByUsername($tableName, $userFilter, $uname){
        //     $un = $this->db->get_where($tableName,[$userFilter => $uname] );
        //     return $un->result();
        // }

        public function insertItem($array){
            $this->db->insert('tblservicelist', $array);
        }

        public function getCurrentUser($username){
            $q = $this->db->get_where('tbluserlist', array('user_username' => $username));
            return $q->row();
        }

      

        public function updateUser($array, $id){
            $this->db->update('tbluserlist', $array, ['user_id'=>$id]);
        }

        public function updateService($array, $id){
            $this->db->update('tblservicelist', $array, ['service_id'=>$id]);
        }

        public function deleteUser($id){
            $this->db->delete('tbluserlist',['user_id'=>$id]);
        }

        public function deleteService($id){
            $this->db->delete('tblservicelist',['service_id'=>$id]);
        }

}