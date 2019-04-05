<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_model extends CI_Model {
public function __construct()
    {
        parent::__construct();
    }
	public function getDataUser($username){
		return $data = $this->db->select("*")
		->from("tbl_user")
		->where("tbl_user.username=",$username)
		->get();
	}
	public function getDataMhs($username){
		return $data = $this->db->select("*")
		->from("tbl_mhs")
		->where("tbl_mhs.username=",$username)
		->get();
	}
	public function daftar($tablename,$data){
		$res=$this->db->insert($tablename,$data);
		return $res;
	}
	public function getDataStaff($username){
		return $data = $this->db->select("*")
		->from("tbl_staff")
		->where("tbl_staff.username=",$username)
		->get();
	}
	public function getPendaftar(){
		return $data = $this->db->select("nama,nim,prodi")
		->from("tbl_daftarMhsKP")
		->get();
	}
	public function getValidasiPendaftar($nim){
		return $data = $this->db->select("*")
		->from("tbl_daftarMhsKP")
		->where("tbl_daftarMhsKP.nim=",$nim)
		->get();
	}
	public function getDataPendaftar($nim){
		return $data = $this->db->select("*")
		->from("tbl_mhs")
		->where("tbl_mhs.nim",$nim)
		->get();
	}
	
	public function getDataDosen($username){
		return $data = $this->db->select("*")
		->from("tbl_dosen")
		->where("tbl_dosen.username=",$username)
		->get();
	}
	public function getListBimbingan($id){
		 return $data = $this->db->select("nama,nim,prodi")
		->from("tbl_mhs")
		->where("tbl_mhs.id_dosenpembimbing=".$id)
		->get();
	}
	public function UpdateBimbingan($tablename,$data,$nim){
		$this->db->where('nim', $nim);
		$res=$this->db->update($tablename, $data);
		return $res;
	}
	public function ValidasiDosen($nim){
		$data = array('validasi_dosen' =>'sudah');
		$this->db->where('nim', $nim);
		$res=$this->db->update('tbl_daftarMhsKP', $data);
		return $res;
	}
}