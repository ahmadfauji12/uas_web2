<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('admin');
	}
	
	public function index()
	{
		$this->form_validation->set_rules('npm','Npm','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run() == false){

			$data['title'] = "login";
	
			$this->load->view('head' ,$data);
			$this->load->view('login');
			$this->load->view('footadm');
		}else{
			$this->_login();
		}
	}
	

private function _login()	
{

	$npm = $this->input->post('npm');
	$password = $this->input->post('password');	

	$user = $this->db->get_where('user',['npm' => $npm])->row_array();
	
	if($user){

		if($user['is_aktive'] == 1){
			if(password_verify($password,$user['password'])){

				$data =[
					'npm' => $user['npm'],
					'role_id'=> $user['role_id']

				];
				$this->session->set_userdata($data);
				if($user[role_id]==1){
					redirect('Myadmin/admin');
				}else{
					redirect('mhs');
				}
			}else{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> password salah</div>');
			}

		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> email belum aktif</div>');

		}


	}else{
		$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> npm belum terdaftar</div>');

	}
}

public function logout()
{

	$this->session->unset_userdata('npm');
	$this->session->unset_userdata('role_id');

	$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Anda telah keluar</div>');
redirect('Myadmin/login');

}
	public function daftar()
	{
		$this->form_validation->set_rules('npm','Npm', 'required|trim');
		$this->form_validation->set_rules('nama','Nama', 'required|trim');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[password2]',
		['matches' => 'password harus sama !',
		'min_length' =>'password terlalu pendek!']);
		$this->form_validation->set_rules('password2','Password', 'required|trim|matches[password]');
		if( $this->form_validation->run() == false) {

			$data['title'] = "Dasboard";
			$this->load->view('headadm' ,$data);
			$this->load->view('daftar');
			$this->load->view('footadm');
		}else{
			$data = [
			'npm' => htmlspecialchars( $this->input->post('npm',true)),
			'nama' => $this->input->post('nama',true), 
			'image' => 'default.jpg',
			'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'role_id'=> 2,
			'is_aktive' => 1,
			'date_created' => time()
		];
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> selamat! anda berhasil membuat akun. silahkan login</div>');
		$this->db->insert('user',$data);
		redirect('Myadmin/login');
		
			
		}
	}


}