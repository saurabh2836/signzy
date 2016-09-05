<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Script
 *
 * @author saurabh
 */
class Script extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
    
       $name = $this->home_model->getnames();
       
       $first_names =$name['firstname'];
       $last_names =$name['lastname'];
       
       $first = explode(',', $first_names);
       $last = explode(',', $last_names);
     
       foreach ($first as $key => $value) {
           $insert_batch[$key] = array(
               'first'=>isset($first[$key]) ? strtolower($first[$key]) :"",
               'last'=>isset($last[$key]) ? strtolower($last[$key]):""
           );
       }
       
       $this->db->insert_batch('real_names',$insert_batch);
    }
}
