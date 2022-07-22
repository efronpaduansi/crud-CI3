<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Data');
    }

    function index(){
        $data['pegawai'] = $this->Data->get_data()->result();
        $this->load->view('header');
        $this->load->view('pegawai/index', $data);
    }
    public function create(){
        $this->load->view('header');
        $this->load->view('pegawai/create');
        
    }
    public function store(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );
        //kirimkan data ke model Data di function input_data berupa variavel $data ke tabel pegawai
        $this->Data->input_data($data, 'pegawai');
        redirect('crud/index');
    }

    public function delete($id){
        $where = array('id' => $id);
        $this->Data->delete_data($where, 'pegawai');
        redirect('crud/index');
    }

    public function edit($id){
        $where = array('id' => $id);
        $data['pegawai'] = $this->Data->edit_data($where, 'pegawai')->result();
        $this->load->view('pegawai/edit', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );
        $where = array(
            'id' => $id
        );
        $this->Data->update_data($where, $data, 'pegawai');
        redirect('crud/index');

    }

}