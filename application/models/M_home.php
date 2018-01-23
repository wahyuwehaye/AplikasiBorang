<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{
    public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
            $this->load->database();
    }

    public function get_all_data(){
        return $this->db->select("*")
              ->from('users')
              ->order_by('id', 'DESC')
              ->get()
              ->result();
    }

    public function get_all_borang(){
        return $this->db->select("*")
              ->from('borang')
              ->order_by('id', 'DESC')
              ->get()
              ->result();
    }

    public function get_isian_data(){
        return $this->db->distinct("id_butir")
              ->from('isian_16kolom')
              ->order_by('id', 'DESC')
              ->group_by('id_butir')
              ->get()
              ->result();
    }

    public function getjumlahborang(){
            return $this->db->distinct("borang.id")
              ->from('borang')
              ->join('butir','butir.id_borang=borang.id')
              ->join('isian_16kolom','isian_16kolom.id_butir=butir.id')
              ->group_by('borang.id')
              ->get()
              ->result_array();
        }

    public function getdashboard(){
      // return $this->db->select('fakultas.nama AS namafakultas, prodi.nama AS namaprodi, borang.jenis AS jenisborang')
      return $this->db->select('*')
          ->from('fakultas')
          ->join('prodi','prodi.id_fakultas = fakultas.id')
          ->join('borang','borang.id_prodi = prodi.id')
          ->get()
          ->result_array();
    }

    public function join3tabel(){
            return $this->db->select("fakultas.id as idfakultas, fakultas.nama as namafakultas, prodi.id as idprodi, prodi.id_fakultas as idfakpro, prodi.nama as namaprodi, borang.id as idborang, borang.jenis as jenisborang")
              ->from('fakultas')
              ->join('prodi','prodi.id_fakultas=fakultas.id')
              ->join('borang','borang.id_prodi=prodi.id')
              ->get()
              ->result_array();
        }

    public function getData($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }

    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }

    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }

    public function tampil_dataAdmin(){
		return $this->db->get('admin');
	}

    public function tampil_dataAdmin1(){
		return $this->db->get_where('admin',array('username'=>($_SESSION['username'])));
	}

    public function get_history(){
        return $this->db->select("*")
      ->from('log')
      ->order_by('id', 'DESC')
      ->get()
      ->result();
    }

}
?>
