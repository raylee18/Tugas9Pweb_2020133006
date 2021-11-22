<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Study extends CI_Controller{
        function __construct(){
            parent::__construct();
        }

        public function index(){
            echo "Ini metode index pada controller Study | Cara membuat controller pada CodeIgniter";
        }

        public function halo(){
            $data['site_name'] = "Very_2020133006";
            $this->load->view('view_study',$data);
        }
    }