<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalkulator extends CI_Controller {

    public function index()
    {
        if(($this->input->post('angka1')!=null) and ($this->input->post('angka2')!=null)){
            $angka1 =$this->input->post('angka1');
            $angka2 =$this->input->post('angka2');
            $hasil =$angka1 + $angka2;
        }
        else{
            $angka1 = 0;
            $angka2 = 0;
            $hasil = 0;
        }
        $data = array(
            'hasil' => $hasil,
            'angka1' => $angka1,
            'angka2' => $angka2,
            'title' => 'Codeigneter + AdminLTE',
            'isi'   => 'v_kalkulator'
        );
        $this->load->view('layout/v_wrapper',$data,false);
    }
}

