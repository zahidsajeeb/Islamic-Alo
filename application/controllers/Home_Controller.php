<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home_Controller
 *
 * @author LENOVO01
 */
class Home_Controller extends CI_Controller {
    
        public function __construct() {
        parent::__construct();
        
        $this->load->model('Home_Model');
        }
       


    public function index() {
        $this->load->model('Home_Model');
        $data['result'] = $this->Home_Model->home_latest_video();
        $data['result'] = $this->Home_Model->home_latest_audio();
        $this->load->view('index',$data);
    }

}
