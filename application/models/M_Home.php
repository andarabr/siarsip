<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_Home extends CI_Model
{

    function __construct() 
    { 
        parent::__construct(); 
    } 
    //get fruts data 
    public function getGraph() 
    { 
        $query = $this->db->query("SELECT th_masuk, COUNT(*) as id from tb_ketr GROUP BY th_masuk");
        return $query->result();
    }

        public function getGraph2() 
    { 
        $query = $this->db->query("SELECT jk, COUNT(*) as id FROM tb_siswa GROUP BY jk");
        return $query->result();
    }
    
    public function getYear(){
        // $this->db->select('year');
        // $this->db->group_by('year');
        // $query = $this->db->get('earnings');
        $query = $this->db->query("SELECT DISTINCT th_masuk FROM tb_ketr ORDER BY th_masuk ASC");
        return $query->result();
    }

    public function thmsk(){
        $query = $this->db->query("SELECT th_masuk, COUNT(*) as jml FROM tb_ketr GROUP BY th_masuk");
        return $query->result_array();
    }

    function tahun_siswa($id){
		$query = $this->db->query("SELECT tb_siswa.*, tb_ketr.* FROM tb_siswa INNER JOIN tb_ketr ON tb_siswa.id_siswa = tb_ketr.id_siswa where th_masuk='$id'");
    	return $query->result_array();
	}

    public function getYear2(){
        // $this->db->select('year');
        // $this->db->group_by('year');
        // $query = $this->db->get('earnings');
        $query = $this->db->query("SELECT th_masuk FROM tb_ketr ORDER BY th_masuk ASC");
        return $query->num_rows();
    }

    public function getEarning($year){
    	// $this->db->select("total");
    	// $this->db->order_by("STR_TO_DATE(month, '%m')");
    	// $query = $this->db->get_where("earnings", array("year" => $year));
    	$query = $this->db->query("SELECT * FROM tb_ketr WHERE th_masuk = '$year'");
    	return $query->num_rows();
    }

    public function struktur(){
        // $this->db->select('year');
        // $this->db->group_by('year');
        // $query = $this->db->get('earnings');
        $query = $this->db->query("SELECT * FROM tb_struktur");
        return $query->result_array();
    }


    function update_struktur($id,$data){
		$this->db->where('id', $id);
		return $this->db->update("tb_struktur",$data);
	}
}