<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Codeigniter + AdminLTE',
            'isi'   => 'v_profil'
        );
        $this->load->view('layout/v_wrapper',$data,false);
    }
}

