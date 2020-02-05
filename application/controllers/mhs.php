<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mhs extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('admin');
		if(!$this->session->userdata('npm')){
			redirect('login');
		}
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function drop()
	{
		$data['title'] = "Dasboard";
		$this->load->view('drop' ,$data);
	}

	
	public function index()
	{
		$data['user'] = $this->db->get_where('user',['npm'=>$this->session->userdata('npm')])->row_array();
		$data['title'] = "Dasboard";
		$this->load->view('mhs/head' ,$data);
		$this->load->view('mhs/nav');
		$this->load->view('mhs/user');
		$this->load->view('footadm');
		// echo 'selamt datang'.$data['user']['nama'];
    }
    public function login()
	{
		$data['title'] = "Dasboard";
		$this->load->view('head' ,$data);
		$this->load->view('loginmhs');
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
		$data['title'] = "Dasboard";
		$this->load->view('headadm' ,$data);
		$this->load->view('daftar');
		$this->load->view('footadm');
	}
	public function tambahdata(){
		$data['title'] = "TAMBAH DATA | Sekolah Tinggi Teknologi Bandung";
		$this->load->view('headadm' ,$data);
		$this->load->view('modul/tambahdata');
		$this->load->view('footadm');
	}

	function aksi_tambah_data(){
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$semester = $this->input->post('semester');

		$data = array(
			'str_nama' => $nama,
			'int_npm' => $npm, 
			'int_semester' => $semester
			);

		$this->Modeladmin->tambah_data($data,'data_mahasiswa');
		redirect('Myadmin/tambahdata');
	}
}
