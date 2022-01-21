<?php defined('BASEPATH') OR exit('No direct script access allowed');

class berita_model extends CI_Model
{
    private $_table = "berita";

    public $id;
    public $id_jenis_berita;
    public $judul;
    public $berita;

    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],
            
            ['field' => 'id_jenis_berita',
            'label' => 'id_jenis_berita',
            'rules' => 'numeric'],
            
            ['field' => 'berita',
            'label' => 'Berita',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_jenis_berita = $post["id_jenis_berita"];
        $this->judul = $post["judul"];
        $this->berita = $post["berita"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->id_jenis_berita = $post["id_jenis_berita"];
        $this->judul = $post["judul"];
        $this->berita = $post["berita"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}