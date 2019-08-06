<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		if($this->session->userdata('status') != "logged"){
			redirect('Login');
		}
		$this->load->model('M_Home');

	}

	public function index(){

		$th_masuk = $this->M_Home->getYear();
		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'admin/template/mainpage',
								'navbar'				=> 'admin/template/navbar',
								'th_masuk' => $th_masuk,
								
								);

		$this->load->view('index-dashboard',$data);
	}

	public function siswapertahun($id){
		$siswa= $this->M_Home->tahun_siswa($id);
		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/siswapertahun',
					'navbar'			=> 'admin/template/navbar',
					'siswa'				=> $siswa,
		);

		$this->load->view('index-dashboard',$data);
	}

	function getdata() 
        { 
        $data = $this->M_Home->getGraph(); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Jumlah Siswa", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->th_masuk", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->id, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 

  function getdata2() 
        { 
        $data = $this->M_Home->getGraph2(); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Jumlah Siswa", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->jk", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->id, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        }

	public function grafik(){
		$th_masuk = $this->M_Home->thmsk();

		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'admin/grafik_semua',
								'navbar'				=> 'admin/template/navbar',		
								'th_masuk' => $th_masuk,
						
								);

		$this->load->view('index-dashboard',$data);
	}

		public function grafik2(){

		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'admin/grafik_jk',
								'navbar'				=> 'admin/template/navbar',		
						
								);

		$this->load->view('index-dashboard',$data);
	}

	public function profil(){
		$struktur = $this->M_Home->struktur();
		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'admin/profil',
								'navbar'				=> 'admin/template/navbar',
								'struktur' => $struktur
								);

		$this->load->view('index-dashboard',$data);
	}

	function update_struktur($id){
		$data=array(			'kepsek'			=> $this->input->post('kepsek'),
								'wakil_kurikulum'			=> $this->input->post('wakil'),
								'bk'			=> $this->input->post('bk'),
								'staff'			=> $this->input->post('staff'),
								'guru_bidang'			=> $this->input->post('guru'),
								'pustakawan'			=> $this->input->post('pustakawan'),
								);

		$this->M_Home->update_struktur($id,$data);
		redirect('admin/dashboard/profil');
	}


	public function showchart()
	{
		$year1 = $this->input->post('yearOne');
		$year2 = $this->input->post('yearTwo');

		$earning1 = $this->M_Home->getEarning($year1);
		$earning2 = $this->M_Home->getEarning($year2);	

		//print_r($label);
		$Data['th_masuk'] = $this->M_Home->getYear();
		$Data['result1'] = json_encode($earning1);
		$Data['result2'] = json_encode($earning2);
		$Data['one'] = $year1;
		$Data['two'] = $year2;
		$Data['mainheader'] ='template/mainheader';
		$Data['mainpage'] = 'admin/template/chart';
		$Data['navbar'] = 'admin/template/navbar';

		$this->load->view('index-dashboard', $Data);
		//print_r($this->m_datachart->getMonth());
		// print_r($this->m_datachart->getEarning($year1));
		// echo " spasi ";
		//print_r($this->m_datachart->getEarning($year2));

	}

}