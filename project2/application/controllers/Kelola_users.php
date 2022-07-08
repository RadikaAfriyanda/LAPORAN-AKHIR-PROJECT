<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_users extends CI_Controller {
    public function index()
    {
		$this->load->model('kelola_user_model', 'users');
		$list_user = $this->users->getAll();

		$data['list_user'] = $list_user;

		$this->load->view('layout/header');
		$this->load->view('admin/kelola_user', $data);
		$this->load->view('layout/footer');
    }

	public function edit()
	{
		$_id = $this->input->get('id');
        $this->load->model("kelola_user_model", "users");
        $useredit = $this->users->findById($_id);

        $data['useredit'] = $useredit;
        $this->load->view('layout/header');
        $this->load->view('admin/user_update', $data);
        $this->load->view('layout/footer');
	}

	public function save()
    {
        $this->load->model("kelola_user_model", "users");

        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_created_at = $this->input->post('created_at');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');
		$_useredit = $this->input->post('useredit');

        $data_user[] = $_username;
        $data_user[] = $_password;
        $data_user[] = $_email;
        $data_user[] = $_created_at;
        $data_user[] = $_last_login;
        $data_user[] = $_status;
        $data_user[] = $_role;

        if(isset($_useredit)){
            // update data lama
            $data_user[] = $_useredit;
            $this->user->update($data_user);
        }else{  //save data baru
            $this->kecamatan->save($data_user);
        }

        redirect(base_url().'index.php/kelola_users/', 'refresh');
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('kelola_user_model', 'users');
        $this->user->delete($_id);

        redirect(base_url().'index.php/kelola_users/', 'refresh');
	}
}