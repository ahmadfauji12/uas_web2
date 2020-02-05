<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('admin');

		if(!$this->session->userdata('npm')){
			redirect('login');
		}
	}
	public function index()
	{
		$data['title'] = "Dasboard";
		$this->load->view('header' ,$data);
		$this->load->view('awal/beranda');
		$this->load->view('footadm');
	}
	public function drop()
	{
		$data['title'] = "Dasboard";
		$this->load->view('drop' ,$data);
	}

	
	public function login()
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
	public function admin()
	{
		$data['title'] = "Dasboard";
		$this->load->view('headadm' ,$data);
		$this->load->view('nav');
		$this->load->view('dasboard');
		$this->load->view('footadm');
	}
	public function mahasiswa()
	{
		$data['title'] = "Dasboard";
		$data['user'] = $this->admin->tampil();
		$this->load->view('headadm' ,$data);
		$this->load->view('nav');
		$this->load->view('masasiswa');
		$this->load->view('footadm');
	}
	public function dosen()
	{
		$data['title'] = "Dasboard";
		$data['user'] = $this->admin->dosen();
		$this->load->view('headadm' ,$data);
		$this->load->view('nav');
		$this->load->view('dosen');
		$this->load->view('footadm');
	}
	public function inputmahs()
	{
		$data['title'] = "Dasboard";
		$this->load->view('headadm' ,$data);
		$this->load->view('nav');
		$this->load->view('inputMahasiswa');
		$this->load->view('footadm');
	}
	public function inputdosen()
	{
		$data['title'] = "Dasboard";
		$this->load->view('headadm' ,$data);
		$this->load->view('nav');
		$this->load->view('inputdosen');
		$this->load->view('footadm');
	}
	public function editmhs()
	{
		$data['title'] = "Dasboard";
		$this->load->view('headadm' ,$data);
		$this->load->view('nav');
		$this->load->view('editMahasiswa');
		$this->load->view('footadm');
	}
	public function editdosen()
	{
		$data['title'] = "Dasboard";
		$this->load->view('headadm' ,$data);
		$this->load->view('nav');
		$this->load->view('editdosen');
		$this->load->view('footadm');
	}
	public function event()
	{
		$data['title'] = "Dasboard";
		$this->load->view('headadm' ,$data);
		$this->load->view('nav');
		$this->load->view('event');
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
	public function hay()
	{
		$data['title'] = "Dasboard";
		$this->load->view('adm/head' ,$data);
		$this->load->view('adm/dasboard');
		$this->load->view('adm/foot');
    }
	public function tambahdata(){
		$data['title'] = "TAMBAH DATA | Sekolah Tinggi Teknologi Bandung";
		$this->load->view('headadm' ,$data);
		$this->load->view('modul/tambahdata');
		$this->load->view('footadm');
	}
	function m_tambahdata(){
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$studi = $this->input->post('program_studi');
		$email = $this->input->post('email');
		$nomor = $this->input->post('nomor');
		$alamat = $this->input->post('alamat');
		$tgl = $this->input->post('tgl_lahir');
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'program_studi'=> $studi,
			'email' => $email,
			'nomor' => $nomor,
			'alamat' => $alamat,
			'tgl_lahir' => $tgl);
		$this->session->set_flashdata('pesanTambahdata','data berhasil di tambah');	
		$this->admin->tambah('mahasiswa',$data);
		redirect('Myadmin/inputmahs');
	}
	function d_tambahdata(){
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama_dosen');
		$email = $this->input->post('email');
		$nomor = $this->input->post('nomor');
		$alamat = $this->input->post('alamat');
		$tgl = $this->input->post('tgl_lahir');
		$data = array(
			'nip' => $nip,
			'nama_dosen' => $nama,
			'email' => $email,
			'nomor' => $nomor,
			'alamat' => $alamat,
			'tgl_lahir' => $tgl);
		$this->session->set_flashdata('pesanTambahdata','data berhasil di tambah');	
		$this->admin->tambah('dosen',$data);
		redirect('Myadmin/inputdosen');
	}

	function m_edit(){
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$studi = $this->input->post('program_studi');
		$email = $this->input->post('email');
		$nomor = $this->input->post('nomor');
		$alamat = $this->input->post('alamat');
		$tgl = $this->input->post('tgl_lahir');
	 
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'program_studi'=> $studi,
			'email' => $email,
			'nomor' => $nomor,
			'alamat' => $alamat,
			'tgl_lahir' => $tgl);
	 
		$where = array(
			'id' => $id
		);
		$this->admin->update($where,$data,'mahasiswa');
		redirect('Myadmin/mahasiswa');
	}
	
	function editmahasiswa($id=null){
		if(is_null($id)){		
			$this->session->set_flashdata('message', 'You Lost!');
			redirect('Myadmin/mahasisa');
		}else{
			$data['title'] = "Edit Data | Sekolah Tinggi Teknologi Bandung";
			$where = array('id' => $id);			
			$data['user'] = $this->admin->edit($where,'mahasiswa')->result();
			$this->load->view('headadm' ,$data);
			$this->load->view('nav');
			$this->load->view('editMahasiswa',$data);
			$this->load->view('footadm');
		}
	}
	function hapusm($id){
		$where = array('id' => $id);
		$this->admin->hapus($where, 'mahasiswa');
		redirect('Myadmin/mahasiswa');
	}
}