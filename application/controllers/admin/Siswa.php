<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		$level = $this->session->userdata('level');
		if($this->session->userdata('status') != "logged"){
			redirect('Login');
		}
		

		$this->load->model('M_siswa');
	}

	public function index(){
		$siswa= $this->M_siswa->viewData_siswa();

		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'admin/menejemen_siswa',
								'navbar'				=> 'admin/template/navbar',
								'siswa'					=> $siswa,
								);

		$this->load->view('index-dashboard',$data);
	}

	function tambah(){
		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/tambah_siswa',
					'navbar'			=> 'admin/template/navbar',
		);

		$this->load->view('index-dashboard',$data);	
	}

	function tambah_siswa(){
		$data=array
		(	
			'id_siswa' => $this->input->post('nisn'),
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('namasiswa'),
			'jk' => $this->input->post('jksiswa'),
			'tempat_lahir' => $this->input->post('tempatlahir'),
			'ttl' => $this->input->post('ttlsiswa'),
			'alamat_ortu' => $this->input->post('alamatortu'),
		);
		$this->M_siswa->tambah_siswa($data);

		$ketr = array(
		'id_siswa' => $this->input->post('nisn'),			
		'th_masuk' => $this->input->post('thmasuk'),
		'asal_sekolah' => $this->input->post('asalsekolah'),
		'kabupaten' => $this->input->post('kabupaten'),
		'kelas' => $this->input->post('kelas'),
		'kelas_masuk' => $this->input->post('kelasmasuk')
		);
		$this->M_siswa->tambah_ketr($ketr);

			$data2=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaayah'),
				'pekerjaan' => $this->input->post('pekerjaanayah'),
				'keterangan' => $this->input->post('ketrayah'),
				'penghasilan' => $this->input->post('penghasilanayah'),
			);
			$this->M_siswa->tambah_ayah($data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'keterangan' => $this->input->post('ketribu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
			);
			$this->M_siswa->tambah_ibu($data3);
		redirect('admin/Siswa');
	}

	function edit_siswa($id){
		$siswa= $this->M_siswa->edit_siswa($id);
		$ayah= $this->M_siswa->edit_ayah($id);
		$ibu= $this->M_siswa->edit_ibu($id);
		$ketr= $this->M_siswa->edit_ketr($id);
		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/edit_siswa',
					'navbar'			=> 'admin/template/navbar',
					'siswa'				=> $siswa,
					'ayah'				=> $ayah,
					'ibu'				=> $ibu,
					'ketr'				=> $ketr,
		);

		$this->load->view('index-dashboard',$data);
	}

	function detail_siswa($id){
		$siswa= $this->M_siswa->edit_siswa($id);
		$ayah= $this->M_siswa->edit_ayah($id);
		$ibu= $this->M_siswa->edit_ibu($id);
		$ketr= $this->M_siswa->edit_ketr($id);
		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/detail_siswa',
					'navbar'			=> 'admin/template/navbar',
					'siswa'				=> $siswa,
					'ayah'				=> $ayah,
					'ibu'				=> $ibu,
					'ketr'				=> $ketr,
		);

		$this->load->view('index-dashboard',$data);
	}

	function update_siswa($id){
		$data=array
		(	
			'id_siswa' => $this->input->post('nisn'),
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('namasiswa'),
			'jk' => $this->input->post('jksiswa'),
			'tempat_lahir' => $this->input->post('tempatlahir'),
			'ttl' => $this->input->post('ttlsiswa'),
			'alamat_ortu' => $this->input->post('alamatortu'),
		);
		$this->M_siswa->update_siswa($id,$data);

		$ketr = array(
			'id_siswa' => $this->input->post('nisn'),			
			'th_masuk' => $this->input->post('thmasuk'),
			'asal_sekolah' => $this->input->post('asalsekolah'),
			'kabupaten' => $this->input->post('kabupaten'),
			'kelas_masuk' => $this->input->post('kelasmasuk'),
			'kelas' => $this->input->post('kelas')
			);
			$this->M_siswa->update_ketr($id,$ketr);

			$data2=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaayah'),
				'pekerjaan' => $this->input->post('pekerjaanayah'),
				'keterangan' => $this->input->post('ketrayah'),
				'penghasilan' => $this->input->post('penghasilanayah'),
			);
			$this->M_siswa->update_ayah($id,$data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),				
				'keterangan' => $this->input->post('ketribu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
			);
			$this->M_siswa->update_ibu($id,$data3);
		redirect('admin/Siswa');
	}

	function hapus_siswa($id){
		$this->M_siswa->hapus_siswa($id);
		redirect('admin/Siswa');
	}


	function print(){
		$siswa= $this->M_siswa->viewData_siswa();

		$data=array(			'siswa'					=> $siswa,
								);

		$this->load->view('admin/print',$data);
	}

	function print_detail($id){
		$siswa= $this->M_siswa->edit_siswa($id);
		$ayah= $this->M_siswa->edit_ayah($id);
		$ibu= $this->M_siswa->edit_ibu($id);
		$ketr= $this->M_siswa->edit_ketr($id);
		$data=array('siswa'				=> $siswa,
					'ayah'				=> $ayah,
					'ibu'				=> $ibu,
					'ketr'				=> $ketr,
		);

		$this->load->view('admin/print_detail',$data);
	}

	
}