<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biodata extends CI_Controller {

	function __Construct(){
		parent::__construct();
		$this->load->model('mbiodata');
	}
	
	public function index(){
		$data['biodata'] = $this->mbiodata->tampil();
		
		$this->load->view('templates/header');
		$this->load->view('templates/menukiri');
		$this->load->view('pages/tampil',$data);
		$this->load->view('templates/footer');
	}
	
	public function tampil($id){
		$data['biodata'] = $this->mbiodata->tampil($id);
		
		$this->load->view('templates/header');
		$this->load->view('templates/menukiri');
		$this->load->view('pages/tampil',$data);
		$this->load->view('templates/footer');
	}
	
	public function tambah(){
		$data['jurusan'] = $this->mbiodata->jurusan();
		
		$this->load->view('templates/header');
		$this->load->view('templates/menukiri');
		$this->load->view('pages/tambah',$data);
		$this->load->view('templates/footer');
	}
	
	public function simpan(){
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = true;
		
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar')){
			echo "<script>alert('File Harus Gambar');location='".base_url()."biodata/tambah'</script>";
		}else{
			$data = array(
						'NPM'=>$this->input->post('npm'),
						'Nama'=>$this->input->post('nama'),
						'Kelas'=>$this->input->post('kelas'),
						'id_jurusan'=>$this->input->post('id_jurusan'),
						'foto'=>$this->upload->data('file_name')
					);
			$this->mbiodata->simpanbiodata($data);
			echo "<script>alert('Simpan Berhasil');location='".base_url()."'</script>";
		}
	}
	
	public function delete($id){
		$this->mbiodata->auth();
		$this->mbiodata->deletebiodata($id);
		echo "<script>alert('Delete Berhasil');location='".base_url()."'</script>";		
	}
	
	public function edit($id){
		$this->mbiodata->auth();
		$data['biodata'] = $this->mbiodata->edit($id);
		$data['jurusan'] = $this->mbiodata->jurusan();
		
		$this->load->view('templates/header');
		$this->load->view('templates/menukiri');
		$this->load->view('pages/edit',$data);
		$this->load->view('templates/footer');
	}
	
		public function update(){		
		$data = array(
					'NPM'=>$this->input->post('NPM','NPM_awal'),
					'Nama'=>$this->input->post('nama'),
					'Kelas'=>$this->input->post('kelas'),
					'id_jurusan'=>$this->input->post('id_jurusan'),
				);
				$this->db->where('NPM', $this->input->post ('NPM_awal'));
		$this->mbiodata->updatebiodata($data);
		echo "<script>alert('Update Berhasil');location='".base_url()."'</script>";
	}

	public function register(){
		$this->load->view('templates/header');
		$this->load->view('templates/menukiri');
		$this->load->view('pages/register');
		$this->load->view('templates/footer');
}
	public function login(){
		$this->load->view('templates/header');
		$this->load->view('templates/menukiri');
		$this->load->view('pages/login');
		$this->load->view('templates/footer');
	}

	public function daftar(){		
		$data = array(
					'username'=>$this->input->post('username'),
					'password'=>md5($this->input->post('password')),
					'email'=>$this->input->post('email'),
				);
		$this->mbiodata->register($data);
		echo "<script>alert('Register Berhasil');location='".base_url()."'</script>";
	}

	public function validasi(){		
		$username =$this->input->post('username');
		$password =md5($this->input->post('password'));

		$sql = $this->mbiodata->validasi($username,$password);
		if(count($sql) == 1){
			$data = array(
				'login'=>true,
				'name'=>$sql->username,
				'id'=>$sql->id

			);

		$this->session->set_userdata($data);
		echo"<script>alert('Login Berhasil');location='".base_url()."'</script>";
	}else{
		$this->session->set_userdata($data);
		echo"<script>alert('Login Gagal');location='".base_url('biodata/login')."'</script>";
		
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		echo"<script>alert('Berhasil Logout');location='".base_url('biodata/login')."'</script>";
	}
}