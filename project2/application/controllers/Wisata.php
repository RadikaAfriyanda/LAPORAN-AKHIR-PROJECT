<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wisata extends CI_Controller {
    public function index(){
        // akses model wisata
        $this->load->model('wisata_model');
        $wisata = $this->wisata_model->getAll();
        $data['wisata'] = $wisata;
        // render data dan kirim data ke dalam view
        $this->load->view('layout/footer.php');
        $this->load->view('home/index.php', $data);
        $this->load->view('layout/header.php');
    }
}
?>