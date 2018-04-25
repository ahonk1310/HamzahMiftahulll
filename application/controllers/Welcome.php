<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mbiodata');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menukiri');
		$this->load->view('pages/table');
		$this->load->view('templates/footer');
	}

	public function tambah () {
		$this->load->view('templates/header');
		$this->load->view('pages/tambah');
		$this->load->view('pages/tampil');
	}
}
