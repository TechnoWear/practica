<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_inicio extends CI_Controller {

    public function index(){
        // Helpers
        $this->load->helper("url");
        $this->load->helper("form");

        $this->load->view("v_inicio");
    }

}