<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('pembeli/template/v_header');
        $this->load->view('pembeli/v_home');
    }
    }

?>