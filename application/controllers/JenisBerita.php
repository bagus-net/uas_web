<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class JenisBerita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jb_model");
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data["jenis_berita"] = $this->jb_model->getAll();
        $this->load->view("jenis_berita/list", $data);
    }

    public function add()
    {
        $jenis_berita = $this->jb_model;
        
        $validation = $this->form_validation;
        $validation->set_rules($jenis_berita->rules());
        // var_dump($validation->run()=="false");
        if ($validation->run()) {
            $jenis_berita->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('/jenisberita', 'refresh');
        }

        $this->load->view("jenis_berita/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('jenisberita');
       
        $jenis_berita = $this->jb_model;
        $validation = $this->form_validation;
        $validation->set_rules($jenis_berita->rules());

        if ($validation->run()) {
            $jenis_berita->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('/jenisberita', 'refresh');
        }

        $data["jenis_berita"] = $jenis_berita->getById($id);
        if (!$data["jenis_berita"]) show_404();
        
        $this->load->view("jenis_berita/editform", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->jb_model->delete($id)) {
            redirect(site_url('jenisberita'));
        }
    }
}