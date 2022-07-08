<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class komentar extends CI_Controller{ 
    public function index(){
        // akses model komentar
        $this->load->model('komentar_model', 'komentar');
        $komentar = $this->komentar->getALL();
        $data['komentar'] = $komentar;

        // render data dan kirim data ke dalam view
        $this->load->view('komentar/index', $data);
    }
    public function save(){
        
        // akses ke model komentar
        $this->load->model('komentar_model','komentar'); //1
        $user = $this->session->userdata('USER');

        $_isi = $this->input->post('isi');
        $data = json_decode(json_encode($user),true);
        $_wisata = $this->input->post('wisata');
        $_rating = $this->input->post('rating');
        
        $data_komentar['isi'] = $_isi; //2
        $data_komentar[''] = $data['id'];
        $data_komentar['wisata'] = $_wisata; 
        $data_komentar['rating'] = $_rating;
        
        $this->komentar->save($data_komentar);

        redirect(base_url().'index.php/home');
    }
} 
?>