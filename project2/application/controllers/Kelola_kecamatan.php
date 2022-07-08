<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_kecamatan extends CI_Controller {
    public function index()
    {
		$this->load->model('kelola_kecamatan_model', 'kecamatan');
		$list_kecamatan = $this->kecamatan->getAll();

		$data['list_kecamatan'] = $list_kecamatan;

		$this->load->view('layout/header');
		$this->load->view('admin/kelola_kecamatan', $data);
		$this->load->view('layout/footer');
    }

	public function edit()
	{
        $_id = $this->input->get('id');
		$this->load->model('kelola_kecamatan_model', 'kecamatan');
		$kecamatan_edit = $this->kecamatan->findById($_id);
		
		$data['judul']= "Form Update Kecamatan";
		$data['kecamatan']= $kecamatan_edit;
		$this->load->view('layout/header');
		$this->load->view('admin/kecamatan_update', $data);
		$this->load->view('layout/footer');
	}

	public function save()
    {
        $this->load->model("kelola_kecamatan_model", "kecamatan");

        $_namaedit = $this->input->post('namaedit');

        $data_kecamatan[] = $_nama;
   

        if(isset($_kecamatanedit)){
            // update data lama
            $data_kecamatan[] = $_kecamatanedit;
            $this->kecamatan->update($data_kecamatan);
        }else{  //save data baru
            $this->kecamatan->save($data_kecamatan);
        }

        redirect(base_url().'index.php/kelola_kecamatan/', 'refresh');
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('kelola_kecamatan_model', 'kecamatan');
        $this->kecamatan->delete($_id);

        redirect(base_url().'index.php/kelola_kecamatan/', 'refresh');

	}

	public function form()
	{
		$this->load->view('layout/header');
		$this->load->view('admin/form_kecamatan');
		$this->load->view('layout/footer');
	}
}