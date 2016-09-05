<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author saurabh
 */
class Home_model extends CI_Model {
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getnames(){
        
       $data =$this->db->get('names')->row_array();
        
       return $data;
    }
    
    public function GetResult($name ='') {
        $sql = "Select * from real_names where first LIKE '%".$name."%' and last LIKE '%".$name."%' ";
        $data = $this->db->query($sql)->result_array();
       return $data;
    }
}
