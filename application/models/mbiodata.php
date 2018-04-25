<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mbiodata extends CI_Model {
	function tampil($id=null){
		$this->db->select('*');
		$this->db->from('biodata');
		if($id!=null){
			$this->db->where('biodata.id_jurusan',$id);
		}
		$this->db->join('jurusan', 'biodata.id_jurusan = jurusan.id_jurusan');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	function jurusan(){
		$query = $this->db->get("jurusan");
		return $query->result();
	}
	
	function simpanbiodata($data){
		$query = $this->db->insert("biodata",$data);
		return $query;
	}
	
	function updatebiodata($data){
		$query = $this->db->update("biodata",$data);
		return $query;
	
	}
	
	function deletebiodata($id){
		$this->db->where('NPM',$id);
		$query = $this->db->delete('biodata');
		return $query;
	}
	
	function edit($id){
		$this->db->where('NPM',$id);
		$query = $this->db->get('biodata');
		return $query->row();
	}

	function register($data){
		$query = $this->db->insert("user",$data);
		return $query;
	}	
	
	function validasi($username,$password){
		$data = array(
			'username'=>$username,
			'password'=>$password
			);
		$query = $this->db->get_where("user",$data);
		return $query->row();
	}

	function auth(){
		if($this->session->login != true){
			echo "<script><alert('Anda harus login dahulu');location='".base_url('biodata/login')."'</script>";
		}
	}
}