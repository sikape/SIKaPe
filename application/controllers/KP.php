<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KP extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('Pdf');
		
		$this->load->model('Site_model');
		
	}
	public function index()
	{	$data['nama']="Guest";
		$data['logged_in']=0;
		$this->session->set_userdata($data);
	
		$this->load->view('Template',$data);
	}

	public function dashboard(){
		$check = $this->session->userdata('logged_in');
		if($check==0){
			$data['nama']="Guest";
			$this->load->view('Template',$data);
		}
		else{
			$type = $this->session->userdata('type');
			if($type=="mhs"){
				$data['nama']=$this->session->userdata('nama');
				$this->load->view('Template',$data);
			}
			elseif($type=="staff"){
				$data['nama']=$this->session->userdata('nama');
				$this->load->view('Template',$data);
			}
			
		}
	}
	public function profile(){
		$check = $this->session->userdata('logged_in');
		if($check==1){
			if($this->session->userdata('type')=="mhs"){
				$data['nama']=$this->session->userdata('nama');
				$data['nim']=$this->session->userdata('nim');
				$data['prodi']=$this->session->userdata('prodi');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$data['kkn']=$this->session->userdata('kkn');
				$data['kp']=$this->session->userdata('kp');
				$this->beranda($data);

			}
			elseif($this->session->userdata('type')=="staff"){
				$data['nama']=$this->session->userdata('nama');
				$data['id']=$this->session->userdata('id');
				$data['jabatan']=$this->session->userdata('jabatan');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$this->load->view('staff/Staff_page',$data);

			}
			elseif($this->session->userdata('type')=="dosen"){
				$data['nama']=$this->session->userdata('nama');
				$data['id']=$this->session->userdata('id');
				$data['jabatan']=$this->session->userdata('jabatan');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$this->load->view('dosen/Dosen_page',$data);

			}
		}
		else if($check==0){
				$this->load->view('Login');
			}
	
	}
	
	public function daftar(){
		$check = $this->session->userdata('logged_in');
		if($check==1){
			if($this->session->userdata('type')=="mhs"){
				$data['foto']=$this->session->userdata('foto');
				$data['nama']=$this->session->userdata('nama');
				$data['nim']=$this->session->userdata('nim');
				$data['prodi']=$this->session->userdata('prodi');
				
				$data['kkn']=$this->session->userdata('kkn');
				$data['kp']=$this->session->userdata('kp');
				$data['res']=NULL;
				$data['error']=NULL;
				$data['msg']=NULL;
				$tmp=NULL;
				if($data['kkn']=="belum"){
					$this->load->view('mhs/Daftarerror',$data);
				}else{
					$this->load->view('mhs/DaftarKP',$data);
				}
			}
		}
		else if($check==0){
				$this->load->view('Login');
			}
	}
	public function page_login(){
		
		$check = $this->session->userdata('logged_in');
		if($check==1){
			if($this->session->userdata('type')=="mhs"){
				$data['nama']=$this->session->userdata('nama');
				$data['nim']=$this->session->userdata('nim');
				$data['prodi']=$this->session->userdata('prodi');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');

				$data['kkn']=$this->session->userdata('kkn');
				$data['kp']=$this->session->userdata('kp');
				$this->beranda($data);

			}
			elseif($this->session->userdata('type')=="staff"){
				$data['nama']=$this->session->userdata('nama');
				$data['id']=$this->session->userdata('id');
				$data['jabatan']=$this->session->userdata('jabatan');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$this->load->view('staff/Staff_page',$data);

			}
			elseif($this->session->userdata('type')=="dosen"){
				$data['nama']=$this->session->userdata('nama');
				$data['id']=$this->session->userdata('id');
				$data['jabatan']=$this->session->userdata('jabatan');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$this->load->view('dosen/Dosen_page',$data);

			}
		}
		else if($check==0){
				$this->load->view('Login');
			}
	}
	public function beranda($data){
		$this->load->view('mhs/Afterlogin',$data);
	}
	public function Login(){
		extract($_POST);
		$this->load->model('Site_model');
        $query = $this->Site_model->getDataUser($_POST['username'])->result_Array();
		if($query==NULL){
			
		}
		else{
			foreach ($query as $key => $value) {
				# code...
				$user_login=array(
					'username' =>$value['username'],
					'password' =>$value['password'],
					'type' =>$value['type'],
					'logged_in' =>1
					);
				$this->session->set_userdata($user_login);
			}
			if($user_login['username']!=$_POST['username']||$user_login['password']!=$_POST['password']){
				$this->load->view('Loginerror');
			}
			else{
				if($user_login['type']=="mhs"){
					$query2 = $this->Site_model->getDataMhs($user_login['username'])->result_array();
					foreach ($query2 as $key => $data) {
						# code...
						$mhs_login=array(
							'nim'=>$data['nim'],
							'prodi'=>$data['prodi'],
							'nama'=>$data['nama'],
							'jenis_kelamin'=>$data['jenis_kelamin'],
							'telp'=>$data['telp'],
							'alamat' =>$data['alamat'],
							'foto'=>$data['foto'],							
							'kkn'=>$data['kkn'],
							'kp'=>$data['kp']
							);
						$this->session->set_userdata($mhs_login);
					}
					$this->beranda($data);
				}
				elseif($user_login['type']=="staff"){
					$query2 = $this->Site_model->getDataStaff($user_login['username'])->result_array();
					foreach ($query2 as $key => $data) {
						# code...
						$staff_login=array(
							'id'=>$data['id'],
							'nama'=>$data['nama'],
							'jenis_kelamin'=>$data['jenis_kelamin'],
							'alamat' =>$data['alamat'],
							'foto' =>$data['foto'],
							'jabatan'=>$data['jabatan']
							);
						$this->session->set_userdata($staff_login);
					}
					$this->load->view('staff/Staff_page',$data);
				}
				elseif($user_login['type']=="dosen"){
					$query2 = $this->Site_model->getDataDosen($user_login['username'])->result_array();
					foreach ($query2 as $key => $data) {
						# code...
						$dosen_login=array(
							'id'=>$data['id'],
							'nama'=>$data['nama'],
							'jenis_kelamin'=>$data['jenis_kelamin'],
							'alamat' =>$data['alamat'],
							'foto' =>$data['foto'],
							'jabatan'=>$data['jabatan']
							);
						$this->session->set_userdata($dosen_login);
					}
					$this->load->view('dosen/Dosen_dashboard',$data);
				}
			}
		}
		
	}
	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}
	public function submit_daftar(){
		extract($_POST);
		$this->load->model('Site_model');
		$tbl='daftar_kp';
		$value=array(
			'nama_lengkap' => $_POST['Nama'],
			'nim' => $_POST['Nim'],
			'prodi' => $_POST['Prodi'],
			'alamat' => $_POST['Alamat_lengkap'],
			'no_hp' => $_POST['No_handphone'],
			'email' => $_POST['Email'],
			'nama_instansi' => $_POST['Nama_instansi'],
			'alamat_instansi' => $_POST['Alamat_instansi'],
			'telp_instansi' => $_POST['No_instansi'],
			'bidang' => $_POST['Bidang'],
			'posisi' => $_POST['Posisi'],
			'waktu' => $_POST['Waktu_pelaksanaan'],
			'transkrip' => $_POST['Transkrip']
			);
		$res=$this->Site_model->daftar($tbl,$value);
		if($res>=1){
			$data=array(
				'nama' => $this->session->userdata('nama'),
				
				'foto' => $this->session->userdata('foto'),
				'nim' => $this->session->userdata('nim'),
				'res' => $res
				);
			echo '<script>alert("Pendaftaran Berhasil");</script>';
			$this->load->view('mhs/DaftarKP',$data);
		}
		else{
			echo '<script>alert("Pendaftaran Gagal");</script>';
			$this->load->view('mhs/DaftarKP',$data);
		}
	}
	public function getValidasiPendaftar($nim){
		$this->load->model('Site_model');
		$query = $this->Site_model->getValidasiPendaftar($nim)->result_array();
		$data=array('data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'),'button1'=>NULL,
			'button' =>NULL, 'update' => NULL, 'update1' => NULL
			);
		$this->load->view('staff/Validasi_pendaftar',$data);
	}


		
        public function getListBimbingan(){
		 $this->load->model('Site_model');
		 $query = $this->Site_model->getListBimbingan($this->session->userdata('id'))->result_array();
		 $data=array('data'=>$query,'foto'=>$this->session->userdata('foto'),'nama'=>$this->session->userdata('nama'));
		 $this->load->view('dosen/List_bimbingan',$data);
	}
	public function getDataBimbingan($nim){
		$this->load->model('Site_model');
		$query = $this->Site_model->getDataPendaftar($nim)->result_array();
		$data=array('valid'=>NULL,'res'=>NULL,'button'=>0,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
	}
	public function ubahBimbingan($nim){
		$this->load->model('Site_model');
		$query = $this->Site_model->getDataPendaftar($nim)->result_array();
		$data=array('valid'=>NULL,'button'=>1,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
	}
	public function updateValidasiBimbingan($nim){
		extract($_POST);
		$this->load->model('Site_model');
		$data = array(
			'kp' => $_POST['kp'],
			'kkn' => $_POST['kkn'],
			
			);
		$mytable='tbl_mhs';
		$res = $this->Site_model->UpdateBimbingan($mytable,$data,$nim);
		$query = $this->Site_model->getDataPendaftar($nim)->result_array();
		$data=array('valid'=>NULL,'res'=>$res,'button'=>0,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
	}
	public function ValidasiBimbingan($nim){
		$this->load->model('Site_model');
		$res=$this->Site_model->ValidasiDosen($nim);
		$query = $this->Site_model->getDataPendaftar($nim)->result_array();
		if($res>=1){
		
		$data=array('valid'=>1,'res'=>NULL,'button'=>0,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
		}
		else{
		$data=array('valid'=>2,'res'=>NULL,'button'=>0,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
		}
	}
	public function cetakbukti_page($nim){

		$this->load->model('Site_model');
		$value1 = $this->session->userdata();

		if($value1['kp']=="belum"||$value1['kkn']=="belum"){
				$data['foto']=$this->session->userdata('foto');
				$data['nama']=$this->session->userdata('nama');
				$data['nim']=$this->session->userdata('nim');
				$data['prodi']=$this->session->userdata('prodi');
				
				$data['kkn']=$this->session->userdata('kkn');
				$data['kp']=$this->session->userdata('kp');
				$data['res']=NULL;
				$data['error']=NULL;
				$data['msg']=NULL;
				$tmp=NULL;
					$this->load->view('mhs/Daftarerror',$data);
				}
		else{
			$value2 = $this->Site_model->getValidasiPendaftar($nim)->result_array();
			$data = array('value1' => $value1,'value2'=>$value2 );
			$this->load->view('mhs/Cetak_bukti',$data);
			}
		
	}
	public function downloadbukti($nim){
		$this->load->library('pdf');
		$this->load->model('Site_model');
		$value1 = $this->session->userdata();
		$value2 = $this->Site_model->getValidasiPendaftar($nim)->result_array();
		$data = array('value1' => $value1,'value2'=>$value2 );
		$html=$this->load->view('mhs/Cetak_buktilaporan',$data,TRUE);
		$paper_size='A4';
		$orientation='portrait';
		
		$this->pdf->create($html,$nim);
	}
	public function pengumuman(){
		$this->load->view('Pengumuman');
	}
    
	public function wisudapertama_page(){
		$this->load->view('Wisuda_Pertama_ITERA');
	}
    public function persyaratan(){
        $this->load->view('persyaratan');
    }
      public function panduan(){
        $this->load->view('panduan');
    }

  
    public function cetakpdf($nim){
    	$this->load->library('pdf');
		$this->load->model('Site_model');
	  	$value1 = $this->session->userdata();
		$value2 = $this->Site_model->getDataPendaftaranKP($nim)->result_array();
		$data = array('value1' => $value1,'value2'=>$value2 );
	    $this->load->view('mhs/cetakpdf',$data,TRUE);
        }
    
}


