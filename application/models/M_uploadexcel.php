<?php

class M_uploadexcel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
                $this->load->helper('date');
        }

        public function get_entire_data()
        {
                //$query = $this->db->get('butir');

                return $this->db->select("*")
              ->from('butir')
              ->order_by('butir', 'ASC')
              ->get()
              ->result_array();
			  /*
			  $this->order_by('butir','ASC');
			  $query = $this->get('butir');
			  return $query->result_array();
			  */
        }

        public function find($column,$id){
            return $this->db->select("*")
              ->from('butir')
              ->where($column, $id)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();

        }

        public function upload_data($filename){
        ini_set('memory_limit', '-1');
        $inputFileName = './dataexcel/uploads/'.$filename;
        try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch(Exception $e) {
        die('Error loading file :' . $e->getMessage());
        }

        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $numRows = count($worksheet);

        for ($i=2; $i < ($numRows+1) ; $i++) { 
            // // Create at
            // $tgl_asli = str_replace('/', '-', $worksheet[$i]['E']);
            // $exp_tgl_asli = explode('-', $tgl_asli);
            // $exp_tahun = explode(' ', $exp_tgl_asli[2]);
            // $tgl_sql = $exp_tahun[0].'-'.$exp_tgl_asli[0].'-'.$exp_tgl_asli[1].' '.$exp_tahun[1];

            // // Update at
            // $tgl_asli1 = str_replace('/', '-', $worksheet[$i]['F']);
            // $exp_tgl_asli1 = explode('-', $tgl_asli1);
            // $exp_tahun1 = explode(' ', $exp_tgl_asli1[2]);
            // $tgl_sql1 = $exp_tahun1[0].'-'.$exp_tgl_asli1[0].'-'.$exp_tgl_asli1[1].' '.$exp_tahun1[1];

            $ins = array(
                    "id_butir"          => $worksheet[$i]["A"],
                    "isian"             => $worksheet[$i]["C"],
                    "version_no"        => $worksheet[$i]["D"],
                    // "created_at"        => $tgl_sql,
                    // "updated_at"        => $tgl_sql1
                    // "created_at"        => $worksheet[$i]["E"],
                    // "updated_at"        => $worksheet[$i]["F"]
                   );

            $this->db->insert('uploadisian', $ins);
        }
    }

    // QUERY FIND ISIAN
        public function findallisian(){
            $query = $this->db->get('uploadisian');
            return $query->result_array();
        }

        public function findallbutir(){
            $query = $this->db->get('butir');
            return $query->result_array();
        }

        public function findisian1kolom($column,$id){
              // $query = $this->db->get_where('isian_1kolom', array($column => $id));
            $query = $this->db->get_where('uploadisian', array($column => $id));
              return $query->result_array();
        }

        public function findisian1kolomversion($column,$id){
              // $query = $this->db->get_where('isian_1kolom_version', array($column => $id));
            $query = $this->db->get_where('uploadisian_version', array($column => $id));
              return $query->result_array();
        }

        public function findisian2kolom($column,$id){
              // $query = $this->db->get_where('isian_2kolom', array($column => $id));
            $query = $this->db->get_where('uploadisian', array($column => $id));
              return $query->result_array();
        }

        public function findisian2kolomversion($column,$id){
              // $query = $this->db->get_where('isian_2kolom_version', array($column => $id));
            $query = $this->db->get_where('uploadisian_version', array($column => $id));
              return $query->result_array();
        }

        public function findisian4kolom($column,$id){
              // $query = $this->db->get_where('isian_4kolom', array($column => $id));
            $query = $this->db->get_where('uploadisian', array($column => $id));
              return $query->result_array();
        }

        public function findisian4kolomversion($column,$id){
              // $query = $this->db->get_where('isian_4kolom_version', array($column => $id));
            $query = $this->db->get_where('uploadisian_version', array($column => $id));
              return $query->result_array();
        }

        public function findisian5kolom($column,$id){
              // $query = $this->db->get_where('isian_4kolom', array($column => $id));
            $query = $this->db->get_where('uploadisian', array($column => $id));
              return $query->result_array();
        }

        public function findisian5kolomversion($column,$id){
              // $query = $this->db->get_where('isian_4kolom_version', array($column => $id));
            $query = $this->db->get_where('uploadisian_version', array($column => $id));
              return $query->result_array();
        }

        public function findisian12kolom($column,$id){
              // $query = $this->db->get_where('isian_4kolom', array($column => $id));
            $query = $this->db->get_where('uploadisian', array($column => $id));
              return $query->result_array();
        }

        public function findisian12kolomversion($column,$id){
              // $query = $this->db->get_where('isian_4kolom_version', array($column => $id));
            $query = $this->db->get_where('uploadisian_version', array($column => $id));
              return $query->result_array();
        }

        public function finduploadisi($column,$id){
              // $query = $this->db->get_where('isian_1kolom', array($column => $id));
            $query = $this->db->get_where('uploadisian', array($column => $id));
              return $query->result_array();
        }

        public function finduploadisiversion($column,$id){
              // $query = $this->db->get_where('isian_1kolom_version', array($column => $id));
            $query = $this->db->get_where('uploadisian_version', array($column => $id));
              return $query->result_array();
        }

        public function finduploaddokumen($column,$id){
              // $query = $this->db->get_where('isian_1kolom', array($column => $id));
            $query = $this->db->get_where('dokumen', array($column => $id));
              return $query->result_array();
        }

        public function finduploaddokumenversion($column,$id){
              // $query = $this->db->get_where('isian_1kolom', array($column => $id));
            $query = $this->db->get_where('document_version', array($column => $id));
              return $query->result_array();
        }
// TUTUP QUERY FIND ISIAN

        public function deletedokall($column,$id){
            $this->db->delete('uploadisian', array($column => $id));
            $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 0');

            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menghapus uploadisian dengan ID Butir ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }
}
?>
