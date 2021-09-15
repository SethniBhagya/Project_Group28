<?php
class user_model extends Model{

    function __construct(){
        parent::__construct();
    }
    function getData(){
        return $this->db->runQuery("SELECT * from user");

    }

    function selectData($userName){
        return $this->db->runQuery("SELECT * from user WHERE NIC= '$userName'");
    }
}