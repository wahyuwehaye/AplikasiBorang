<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{
    public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
            $this->load->database();
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
