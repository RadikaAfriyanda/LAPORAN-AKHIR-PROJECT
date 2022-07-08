<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { 
    
    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('home/index');
        
        // akses model detail 
        $this->load->model('detail_model', 'detail');
        $detail = $this->detail->getALL();
        $data1['detail'] = $detail;


        //akses model komentar
        $this->load->model('komentar_model', 'komentar');
        $komentar = $this->komentar->getALL();
        $data['komentar'] = $komentar;
        $id = $this->input->get('id');
        
        
        
        // render data dan kirim data ke dalam view
        $this->load->view('komentar/index', $data);
        $this->load->view('layouts/footer');
    }

    public function detail($id){
        // akses model detail
        $this->load->model('detail_model', 'detail');
        $detail = $this->detail->getById($id);
        $data['detail'] = $detail;

        // render data dan kirim data ke dalam view
        $this->load->view('home/detail', $data);
    }
}
?>