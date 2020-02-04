<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tugas extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
 
 public function tugas(){
 $this->load->view('tugaskuliah');
 }
 public function home(){
 $this->load->view('home');
 }
 
}