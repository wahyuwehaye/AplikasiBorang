<?php

class M_isian3as2 extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();                
        }

        // QUERY JOIN 3 TABEL YANG BERFUNGSI UNTUK MENAMPILKAN NAMA PADA HEADER TAMPILAN ISIAN PADA FORMAT EXCEL PENILAIAN
        public function join3tabel($id){
            return $this->db->select("fakultas.id as idfakultas, fakultas.nama as namafakultas, prodi.id as idprodi, prodi.id_fakultas as idfakpro, prodi.nama as namaprodi, borang.id as idborang")
              ->from('fakultas')
              ->join('prodi','prodi.id_fakultas=fakultas.id')
              ->join('borang','borang.id_prodi=prodi.id')
              ->join('butir','butir.id_borang=borang.id')
              ->where('butir.id', $id)
              ->get()
              ->result_array();
        }

        // QUERY JOIN 3 TABEL YANG BERFUNGSI UNTUK MENAMPILKAN NAMA PADA HEADER TAMPILAN ISIAN PADA FORMAT BUKU BORANG WORD
        public function join3tabel_buku($id){
            return $this->db->select("fakultas.id as idfakultas, fakultas.nama as namafakultas, prodi.id as idprodi, prodi.id_fakultas as idfakpro, prodi.nama as namaprodi, borang.id as idborang")
              ->from('fakultas')
              ->join('prodi','prodi.id_fakultas=fakultas.id')
              ->join('borang','borang.id_prodi=prodi.id')
              ->join('butir_buku','butir_buku.id_borang=borang.id')
              ->where('butir_buku.id', $id)
              ->get()
              ->result_array();
        }

// QUERY INSERT ISIAN

        // 

        // INSERT ISIAN BUKU SESUAI DENGAN FORMAT BUKU BORANG WORD 3A 3B

        // 

        // 1
        public function insert_isian111_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir111'),
                        'kolom1' => $this->input->post('kolom1_111'),
                        'kolom2' => $this->input->post('kolom2_111'),
                        'kolom3' => $this->input->post('kolom3_111'),
                        'kolom4' => $this->input->post('kolom4_111'),
                        'kolom5' => $this->input->post('kolom5_111'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir111'),
                        'kolom1' => $this->input->post('kolom1_111'),
                        'kolom2' => $this->input->post('kolom2_111'),
                        'kolom3' => $this->input->post('kolom3_111'),
                        'kolom4' => $this->input->post('kolom4_111'),
                        'kolom5' => $this->input->post('kolom5_111'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir111'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 2
        public function insert_isian12_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir12'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 7
        public function insert_isian21_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'kolom2' => $this->input->post('kolom2_21'),
                        'kolom3' => $this->input->post('kolom3_21'),
                        'kolom4' => $this->input->post('kolom4_21'),
                        'kolom5' => $this->input->post('kolom5_21'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'kolom2' => $this->input->post('kolom2_21'),
                        'kolom3' => $this->input->post('kolom3_21'),
                        'kolom4' => $this->input->post('kolom4_21'),
                        'kolom5' => $this->input->post('kolom5_21'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir21'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 8
        public function insert_isian22_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'kolom2' => $this->input->post('kolom2_22'),
                        'kolom3' => $this->input->post('kolom3_22'),
                        'kolom4' => $this->input->post('kolom4_22'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'kolom2' => $this->input->post('kolom2_22'),
                        'kolom3' => $this->input->post('kolom3_22'),
                        'kolom4' => $this->input->post('kolom4_22'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir22'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 9
        public function insert_isian23_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir23'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 10
        public function insert_isian24_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir24'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 11
        public function insert_isian25_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'kolom2' => $this->input->post('kolom2_25'),
                        'kolom3' => $this->input->post('kolom3_25'),
                        'kolom4' => $this->input->post('kolom4_25'),
                        'kolom5' => $this->input->post('kolom5_25'),
                        'kolom6' => $this->input->post('kolom6_25'),
                        'kolom7' => $this->input->post('kolom7_25'),
                        'kolom8' => $this->input->post('kolom8_25'),
                        'kolom9' => $this->input->post('kolom9_25'),
                        'kolom10' => $this->input->post('kolom10_25'),
                        'kolom11' => $this->input->post('kolom11_25'),
                        'kolom12' => $this->input->post('kolom12_25'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'kolom2' => $this->input->post('kolom2_25'),
                        'kolom3' => $this->input->post('kolom3_25'),
                        'kolom4' => $this->input->post('kolom4_25'),
                        'kolom5' => $this->input->post('kolom5_25'),
                        'kolom6' => $this->input->post('kolom6_25'),
                        'kolom7' => $this->input->post('kolom7_25'),
                        'kolom8' => $this->input->post('kolom8_25'),
                        'kolom9' => $this->input->post('kolom9_25'),
                        'kolom10' => $this->input->post('kolom10_25'),
                        'kolom11' => $this->input->post('kolom11_25'),
                        'kolom12' => $this->input->post('kolom12_25'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir25'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 12
        public function insert_isian26_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir26'),
                        'kolom1' => $this->input->post('kolom1_26'),
                        'kolom2' => $this->input->post('kolom2_26'),
                        'kolom3' => $this->input->post('kolom3_26'),
                        'kolom4' => $this->input->post('kolom4_26'),
                        'kolom5' => $this->input->post('kolom5_26'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir26'),
                        'kolom1' => $this->input->post('kolom1_26'),
                        'kolom2' => $this->input->post('kolom2_26'),
                        'kolom3' => $this->input->post('kolom3_26'),
                        'kolom4' => $this->input->post('kolom4_26'),
                        'kolom5' => $this->input->post('kolom5_26'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir26'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 12
        public function insert_isian31_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir31'),
                        'kolom1' => $this->input->post('kolom1_31'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir31'),
                        'kolom1' => $this->input->post('kolom1_31'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir31'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 13
        public function insert_isian321_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir321'),
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
                        'kolom5' => $this->input->post('kolom5_321'),
                        'kolom6' => $this->input->post('kolom6_321'),
                        'kolom7' => $this->input->post('kolom7_321'),
                        'kolom8' => $this->input->post('kolom8_321'),
                        'kolom9' => $this->input->post('kolom9_321'),
                        'kolom10' => $this->input->post('kolom10_321'),
                        'kolom11' => $this->input->post('kolom11_321'),
                        'kolom12' => $this->input->post('kolom12_321'),
                        'kolom13' => $this->input->post('kolom13_321'),
                        'kolom14' => $this->input->post('kolom14_321'),
                        'kolom15' => $this->input->post('kolom15_321'),
                        'kolom16' => $this->input->post('kolom16_321'),
                        'kolom17' => $this->input->post('kolom17_321'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir321'),
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
                        'kolom5' => $this->input->post('kolom5_321'),
                        'kolom6' => $this->input->post('kolom6_321'),
                        'kolom7' => $this->input->post('kolom7_321'),
                        'kolom8' => $this->input->post('kolom8_321'),
                        'kolom9' => $this->input->post('kolom9_321'),
                        'kolom10' => $this->input->post('kolom10_321'),
                        'kolom11' => $this->input->post('kolom11_321'),
                        'kolom12' => $this->input->post('kolom12_321'),
                        'kolom13' => $this->input->post('kolom13_321'),
                        'kolom14' => $this->input->post('kolom14_321'),
                        'kolom15' => $this->input->post('kolom15_321'),
                        'kolom16' => $this->input->post('kolom16_321'),
                        'kolom17' => $this->input->post('kolom17_321'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir321'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 14
        public function insert_isian322_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir322'),
                        'kolom1' => $this->input->post('kolom1_322'),
                        'kolom2' => $this->input->post('kolom2_322'),
                        'kolom3' => $this->input->post('kolom3_322'),
                        'kolom4' => $this->input->post('kolom4_322'),
                        'kolom5' => $this->input->post('kolom5_322'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir322'),
                        'kolom1' => $this->input->post('kolom1_322'),
                        'kolom2' => $this->input->post('kolom2_322'),
                        'kolom3' => $this->input->post('kolom3_322'),
                        'kolom4' => $this->input->post('kolom4_322'),
                        'kolom5' => $this->input->post('kolom5_322'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir322'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 15
        public function insert_isian313_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir313'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'kolom4' => $this->input->post('kolom4_313'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir313'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'kolom4' => $this->input->post('kolom4_313'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir313'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 16
        public function insert_isian323_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir323'),
                        'kolom1' => $this->input->post('kolom1_323'),
                        'kolom2' => $this->input->post('kolom2_323'),
                        'kolom3' => $this->input->post('kolom3_323'),
                        'kolom4' => $this->input->post('kolom4_323'),
                        'kolom5' => $this->input->post('kolom5_323'),
                        'kolom6' => $this->input->post('kolom6_323'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir323'),
                        'kolom1' => $this->input->post('kolom1_323'),
                        'kolom2' => $this->input->post('kolom2_323'),
                        'kolom3' => $this->input->post('kolom3_323'),
                        'kolom4' => $this->input->post('kolom4_323'),
                        'kolom5' => $this->input->post('kolom5_323'),
                        'kolom6' => $this->input->post('kolom6_323'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir323'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 20
        public function insert_isian331_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir331'),
                        'kolom1' => $this->input->post('kolom1_331'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir331'),
                        'kolom1' => $this->input->post('kolom1_331'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir331'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 21 22
        public function insert_isian332_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir332'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'kolom2' => $this->input->post('kolom2_332'),
                        'kolom3' => $this->input->post('kolom3_332'),
                        'kolom4' => $this->input->post('kolom4_332'),
                        'kolom5' => $this->input->post('kolom5_332'),
                        'kolom6' => $this->input->post('kolom6_332'),
                        'kolom7' => $this->input->post('kolom7_332'),
                        'kolom8' => $this->input->post('kolom8_332'),
                        'kolom9' => $this->input->post('kolom9_332'),
                        'kolom10' => $this->input->post('kolom10_332'),
                        'kolom11' => $this->input->post('kolom11_332'),
                        'kolom12' => $this->input->post('kolom12_332'),
                        'kolom13' => $this->input->post('kolom13_332'),
                        'kolom14' => $this->input->post('kolom14_332'),
                        'kolom15' => $this->input->post('kolom15_332'),
                        'kolom16' => $this->input->post('kolom16_332'),
                        'kolom17' => $this->input->post('kolom17_332'),
                        'kolom18' => $this->input->post('kolom18_332'),
                        'kolom19' => $this->input->post('kolom19_332'),
                        'kolom20' => $this->input->post('kolom20_332'),
                        'kolom21' => $this->input->post('kolom21_332'),
                        'kolom22' => $this->input->post('kolom22_332'),
                        'kolom23' => $this->input->post('kolom23_332'),
                        'kolom24' => $this->input->post('kolom24_332'),
                        'kolom25' => $this->input->post('kolom25_332'),
                        'kolom26' => $this->input->post('kolom26_332'),
                        'kolom27' => $this->input->post('kolom27_332'),
                        'kolom28' => $this->input->post('kolom28_332'),
                        'kolom29' => $this->input->post('kolom29_332'),
                        'kolom30' => $this->input->post('kolom30_332'),
                        'kolom31' => $this->input->post('kolom31_332'),
                        'kolom32' => $this->input->post('kolom32_332'),
                        'kolom33' => $this->input->post('kolom33_332'),
                        'kolom34' => $this->input->post('kolom34_332'),
                        'kolom35' => $this->input->post('kolom35_332'),
                        'kolom36' => $this->input->post('kolom36_332'),
                        'kolom37' => $this->input->post('kolom37_332'),
                        'kolom38' => $this->input->post('kolom38_332'),
                        'kolom39' => $this->input->post('kolom39_332'),
                        'kolom40' => $this->input->post('kolom40_332'),
                        'kolom41' => $this->input->post('kolom41_332'),
                        'kolom42' => $this->input->post('kolom42_332'),
                        'kolom43' => $this->input->post('kolom43_332'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir332'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'kolom2' => $this->input->post('kolom2_332'),
                        'kolom3' => $this->input->post('kolom3_332'),
                        'kolom4' => $this->input->post('kolom4_332'),
                        'kolom5' => $this->input->post('kolom5_332'),
                        'kolom6' => $this->input->post('kolom6_332'),
                        'kolom7' => $this->input->post('kolom7_332'),
                        'kolom8' => $this->input->post('kolom8_332'),
                        'kolom9' => $this->input->post('kolom9_332'),
                        'kolom10' => $this->input->post('kolom10_332'),
                        'kolom11' => $this->input->post('kolom11_332'),
                        'kolom12' => $this->input->post('kolom12_332'),
                        'kolom13' => $this->input->post('kolom13_332'),
                        'kolom14' => $this->input->post('kolom14_332'),
                        'kolom15' => $this->input->post('kolom15_332'),
                        'kolom16' => $this->input->post('kolom16_332'),
                        'kolom17' => $this->input->post('kolom17_332'),
                        'kolom18' => $this->input->post('kolom18_332'),
                        'kolom19' => $this->input->post('kolom19_332'),
                        'kolom20' => $this->input->post('kolom20_332'),
                        'kolom21' => $this->input->post('kolom21_332'),
                        'kolom22' => $this->input->post('kolom22_332'),
                        'kolom23' => $this->input->post('kolom23_332'),
                        'kolom24' => $this->input->post('kolom24_332'),
                        'kolom25' => $this->input->post('kolom25_332'),
                        'kolom26' => $this->input->post('kolom26_332'),
                        'kolom27' => $this->input->post('kolom27_332'),
                        'kolom28' => $this->input->post('kolom28_332'),
                        'kolom29' => $this->input->post('kolom29_332'),
                        'kolom30' => $this->input->post('kolom30_332'),
                        'kolom31' => $this->input->post('kolom31_332'),
                        'kolom32' => $this->input->post('kolom32_332'),
                        'kolom33' => $this->input->post('kolom33_332'),
                        'kolom34' => $this->input->post('kolom34_332'),
                        'kolom35' => $this->input->post('kolom35_332'),
                        'kolom36' => $this->input->post('kolom36_332'),
                        'kolom37' => $this->input->post('kolom37_332'),
                        'kolom38' => $this->input->post('kolom38_332'),
                        'kolom39' => $this->input->post('kolom39_332'),
                        'kolom40' => $this->input->post('kolom40_332'),
                        'kolom41' => $this->input->post('kolom41_332'),
                        'kolom42' => $this->input->post('kolom42_332'),
                        'kolom43' => $this->input->post('kolom43_332'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir332'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 25
        public function insert_isian341_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'kolom2' => $this->input->post('kolom2_341'),
                        'kolom3' => $this->input->post('kolom3_341'),
                        'kolom4' => $this->input->post('kolom4_341'),
                        'kolom5' => $this->input->post('kolom5_341'),
                        'kolom6' => $this->input->post('kolom6_341'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'kolom2' => $this->input->post('kolom2_341'),
                        'kolom3' => $this->input->post('kolom3_341'),
                        'kolom4' => $this->input->post('kolom4_341'),
                        'kolom5' => $this->input->post('kolom5_341'),
                        'kolom6' => $this->input->post('kolom6_341'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir341'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 27
        public function insert_isian41_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'kolom2' => $this->input->post('kolom2_41'),
                        'kolom3' => $this->input->post('kolom3_41'),
                        'kolom4' => $this->input->post('kolom4_41'),
                        'kolom5' => $this->input->post('kolom5_41'),
                        'kolom6' => $this->input->post('kolom6_41'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'kolom2' => $this->input->post('kolom2_41'),
                        'kolom3' => $this->input->post('kolom3_41'),
                        'kolom4' => $this->input->post('kolom4_41'),
                        'kolom5' => $this->input->post('kolom5_41'),
                        'kolom6' => $this->input->post('kolom6_41'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir41'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian42_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir42'),
                        'kolom1' => $this->input->post('kolom1_42'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir42'),
                        'kolom1' => $this->input->post('kolom1_42'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir42'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 30 31 32 33
        public function insert_isian431_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir431'),
                        'kolom1' => $this->input->post('kolom1_431'),
                        'kolom2' => $this->input->post('kolom2_431'),
                        'kolom3' => $this->input->post('kolom3_431'),
                        'kolom4' => $this->input->post('kolom4_431'),
                        'kolom5' => $this->input->post('kolom5_431'),
                        'kolom6' => $this->input->post('kolom6_431'),
                        'kolom7' => $this->input->post('kolom7_431'),
                        'kolom8' => $this->input->post('kolom8_431'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir431'),
                        'kolom1' => $this->input->post('kolom1_431'),
                        'kolom2' => $this->input->post('kolom2_431'),
                        'kolom3' => $this->input->post('kolom3_431'),
                        'kolom4' => $this->input->post('kolom4_431'),
                        'kolom5' => $this->input->post('kolom5_431'),
                        'kolom6' => $this->input->post('kolom6_431'),
                        'kolom7' => $this->input->post('kolom7_431'),
                        'kolom8' => $this->input->post('kolom8_431'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir431'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 34
        public function insert_isian432_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir432'),
                        'kolom1' => $this->input->post('kolom1_432'),
                        'kolom2' => $this->input->post('kolom2_432'),
                        'kolom3' => $this->input->post('kolom3_432'),
                        'kolom4' => $this->input->post('kolom4_432'),
                        'kolom5' => $this->input->post('kolom5_432'),
                        'kolom6' => $this->input->post('kolom6_432'),
                        'kolom7' => $this->input->post('kolom7_432'),
                        'kolom8' => $this->input->post('kolom8_432'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir432'),
                        'kolom1' => $this->input->post('kolom1_432'),
                        'kolom2' => $this->input->post('kolom2_432'),
                        'kolom3' => $this->input->post('kolom3_432'),
                        'kolom4' => $this->input->post('kolom4_432'),
                        'kolom5' => $this->input->post('kolom5_432'),
                        'kolom6' => $this->input->post('kolom6_432'),
                        'kolom7' => $this->input->post('kolom7_432'),
                        'kolom8' => $this->input->post('kolom8_432'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir432'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 35
        public function insert_isian433_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir433'),
                        'kolom1' => $this->input->post('kolom1_433'),
                        'kolom2' => $this->input->post('kolom2_433'),
                        'kolom3' => $this->input->post('kolom3_433'),
                        'kolom4' => $this->input->post('kolom4_433'),
                        'kolom5' => $this->input->post('kolom5_433'),
                        'kolom6' => $this->input->post('kolom6_433'),
                        'kolom7' => $this->input->post('kolom7_433'),
                        'kolom8' => $this->input->post('kolom8_433'),
                        'kolom9' => $this->input->post('kolom9_433'),
                        'kolom10' => $this->input->post('kolom10_433'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir433'),
                        'kolom1' => $this->input->post('kolom1_433'),
                        'kolom2' => $this->input->post('kolom2_433'),
                        'kolom3' => $this->input->post('kolom3_433'),
                        'kolom4' => $this->input->post('kolom4_433'),
                        'kolom5' => $this->input->post('kolom5_433'),
                        'kolom6' => $this->input->post('kolom6_433'),
                        'kolom7' => $this->input->post('kolom7_433'),
                        'kolom8' => $this->input->post('kolom8_433'),
                        'kolom9' => $this->input->post('kolom9_433'),
                        'kolom10' => $this->input->post('kolom10_433'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir433'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 36 (434 & 435)
        public function insert_isian434_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('434id_butir'),
                        'kolom1' => $this->input->post('kolom1_434'),
                        'kolom2' => $this->input->post('kolom2_434'),
                        'kolom3' => $this->input->post('kolom3_434'),
                        'kolom4' => $this->input->post('kolom4_434'),
                        'kolom5' => $this->input->post('kolom5_434'),
                        'kolom6' => $this->input->post('kolom6_434'),
                        'kolom7' => $this->input->post('kolom7_434'),
                        'kolom8' => $this->input->post('kolom8_434'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('434id_butir'),
                        'kolom1' => $this->input->post('kolom1_434'),
                        'kolom2' => $this->input->post('kolom2_434'),
                        'kolom3' => $this->input->post('kolom3_434'),
                        'kolom4' => $this->input->post('kolom4_434'),
                        'kolom5' => $this->input->post('kolom5_434'),
                        'kolom6' => $this->input->post('kolom6_434'),
                        'kolom7' => $this->input->post('kolom7_434'),
                        'kolom8' => $this->input->post('kolom8_434'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('434id_butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 37 (434 & 435)
        public function insert_isian435_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('435id_butir'),
                        'kolom1' => $this->input->post('kolom1_435'),
                        'kolom2' => $this->input->post('kolom2_435'),
                        'kolom3' => $this->input->post('kolom3_435'),
                        'kolom4' => $this->input->post('kolom4_435'),
                        'kolom5' => $this->input->post('kolom5_435'),
                        'kolom6' => $this->input->post('kolom6_435'),
                        'kolom7' => $this->input->post('kolom7_435'),
                        'kolom8' => $this->input->post('kolom8_435'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('435id_butir'),
                        'kolom1' => $this->input->post('kolom1_435'),
                        'kolom2' => $this->input->post('kolom2_435'),
                        'kolom3' => $this->input->post('kolom3_435'),
                        'kolom4' => $this->input->post('kolom4_435'),
                        'kolom5' => $this->input->post('kolom5_435'),
                        'kolom6' => $this->input->post('kolom6_435'),
                        'kolom7' => $this->input->post('kolom7_435'),
                        'kolom8' => $this->input->post('kolom8_435'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('435id_butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 38
        public function insert_isian44_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir44'),
                        'kolom1' => $this->input->post('kolom1_44'),
                        'kolom2' => $this->input->post('kolom2_44'),
                        'kolom3' => $this->input->post('kolom3_44'),
                        'kolom4' => $this->input->post('kolom4_44'),
                        'kolom5' => $this->input->post('kolom5_44'),
                        'kolom6' => $this->input->post('kolom6_44'),
                        'kolom7' => $this->input->post('kolom7_44'),
                        'kolom8' => $this->input->post('kolom8_44'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir44'),
                        'kolom1' => $this->input->post('kolom1_44'),
                        'kolom2' => $this->input->post('kolom2_44'),
                        'kolom3' => $this->input->post('kolom3_44'),
                        'kolom4' => $this->input->post('kolom4_44'),
                        'kolom5' => $this->input->post('kolom5_44'),
                        'kolom6' => $this->input->post('kolom6_44'),
                        'kolom7' => $this->input->post('kolom7_44'),
                        'kolom8' => $this->input->post('kolom8_44'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir44'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 42
        public function insert_isian451_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir451'),
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
                        'kolom4' => $this->input->post('kolom4_451'),
                        'kolom5' => $this->input->post('kolom5_451'),
                        'kolom6' => $this->input->post('kolom6_451'),
                        'kolom7' => $this->input->post('kolom7_451'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir451'),
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
                        'kolom4' => $this->input->post('kolom4_451'),
                        'kolom5' => $this->input->post('kolom5_451'),
                        'kolom6' => $this->input->post('kolom6_451'),
                        'kolom7' => $this->input->post('kolom7_451'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir451'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian452_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir452'),
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'kolom4' => $this->input->post('kolom4_452'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir452'),
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'kolom4' => $this->input->post('kolom4_452'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir452'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 43
        public function insert_isian453_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir453'),
                        'kolom1' => $this->input->post('kolom1_453'),
                        'kolom2' => $this->input->post('kolom2_453'),
                        'kolom3' => $this->input->post('kolom3_453'),
                        'kolom4' => $this->input->post('kolom4_453'),
                        'kolom5' => $this->input->post('kolom5_453'),
                        'kolom6' => $this->input->post('kolom6_453'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir453'),
                        'kolom1' => $this->input->post('kolom1_453'),
                        'kolom2' => $this->input->post('kolom2_453'),
                        'kolom3' => $this->input->post('kolom3_453'),
                        'kolom4' => $this->input->post('kolom4_453'),
                        'kolom5' => $this->input->post('kolom5_453'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir453'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function insert_isian4541_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir4541'),
                        'kolom1' => $this->input->post('kolom1_4541'),
                        'kolom2' => $this->input->post('kolom2_4541'),
                        'kolom3' => $this->input->post('kolom3_4541'),
                        'kolom4' => $this->input->post('kolom4_4541'),
                        'kolom5' => $this->input->post('kolom5_4541'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir4541'),
                        'kolom1' => $this->input->post('kolom1_4541'),
                        'kolom2' => $this->input->post('kolom2_4541'),
                        'kolom3' => $this->input->post('kolom3_4541'),
                        'kolom4' => $this->input->post('kolom4_4541'),
                        'kolom5' => $this->input->post('kolom5_4541'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir4541'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function insert_isian4542_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir4542'),
                        'kolom1' => $this->input->post('kolom1_4542'),
                        'kolom2' => $this->input->post('kolom2_4542'),
                        'kolom3' => $this->input->post('kolom3_4542'),
                        'kolom4' => $this->input->post('kolom4_4542'),
                        'kolom5' => $this->input->post('kolom5_4542'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir4542'),
                        'kolom1' => $this->input->post('kolom1_4542'),
                        'kolom2' => $this->input->post('kolom2_4542'),
                        'kolom3' => $this->input->post('kolom3_4542'),
                        'kolom4' => $this->input->post('kolom4_4542'),
                        'kolom5' => $this->input->post('kolom5_4542'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir4542'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function insert_isian4543_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir4543'),
                        'kolom1' => $this->input->post('kolom1_4543'),
                        'kolom2' => $this->input->post('kolom2_4543'),
                        'kolom3' => $this->input->post('kolom3_4543'),
                        'kolom4' => $this->input->post('kolom4_4543'),
                        'kolom5' => $this->input->post('kolom5_4543'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir4543'),
                        'kolom1' => $this->input->post('kolom1_4543'),
                        'kolom2' => $this->input->post('kolom2_4543'),
                        'kolom3' => $this->input->post('kolom3_4543'),
                        'kolom4' => $this->input->post('kolom4_4543'),
                        'kolom5' => $this->input->post('kolom5_4543'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir4543'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 45
        public function insert_isian455_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir455'),
                        'kolom1' => $this->input->post('kolom1_455'),
                        'kolom2' => $this->input->post('kolom2_455'),
                        'kolom3' => $this->input->post('kolom3_455'),
                        'kolom4' => $this->input->post('kolom4_455'),
                        'kolom5' => $this->input->post('kolom5_455'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir455'),
                        'kolom1' => $this->input->post('kolom1_455'),
                        'kolom2' => $this->input->post('kolom2_455'),
                        'kolom3' => $this->input->post('kolom3_455'),
                        'kolom4' => $this->input->post('kolom4_455'),
                        'kolom5' => $this->input->post('kolom5_455'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir455'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 46 47 48
        public function insert_isian461_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir461'),
                        'kolom1' => $this->input->post('kolom1_461'),
                        'kolom2' => $this->input->post('kolom2_461'),
                        'kolom3' => $this->input->post('kolom3_461'),
                        'kolom4' => $this->input->post('kolom4_461'),
                        'kolom5' => $this->input->post('kolom5_461'),
                        'kolom6' => $this->input->post('kolom6_461'),
                        'kolom7' => $this->input->post('kolom7_461'),
                        'kolom8' => $this->input->post('kolom8_461'),
                        'kolom9' => $this->input->post('kolom9_461'),
                        'kolom10' => $this->input->post('kolom10_461'),
                        // 'kolom11' => $this->input->post('kolom11_461'),
                        // 'kolom12' => $this->input->post('kolom12_461'),
                        // 'kolom13' => $this->input->post('kolom13_461'),
                        // 'kolom14' => $this->input->post('kolom14_461'),
                        // 'kolom15' => $this->input->post('kolom15_461'),
                        // 'kolom16' => $this->input->post('kolom16_461'),
                        // 'kolom17' => $this->input->post('kolom17_461'),
                        // 'kolom18' => $this->input->post('kolom18_461'),
                        // 'kolom19' => $this->input->post('kolom19_461'),
                        // 'kolom20' => $this->input->post('kolom20_461'),
                        // 'kolom21' => $this->input->post('kolom21_461'),
                        // 'kolom22' => $this->input->post('kolom22_461'),
                        // 'kolom23' => $this->input->post('kolom23_461'),
                        // 'kolom24' => $this->input->post('kolom24_461'),
                        // 'kolom25' => $this->input->post('kolom25_461'),
                        // 'kolom26' => $this->input->post('kolom26_461'),
                        // 'kolom27' => $this->input->post('kolom27_461'),
                        // 'kolom28' => $this->input->post('kolom28_461'),
                        // 'kolom29' => $this->input->post('kolom29_461'),
                        // 'kolom30' => $this->input->post('kolom30_461'),
                        // 'kolom31' => $this->input->post('kolom31_461'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir461'),
                        'kolom1' => $this->input->post('kolom1_461'),
                        'kolom2' => $this->input->post('kolom2_461'),
                        'kolom3' => $this->input->post('kolom3_461'),
                        'kolom4' => $this->input->post('kolom4_461'),
                        'kolom5' => $this->input->post('kolom5_461'),
                        'kolom6' => $this->input->post('kolom6_461'),
                        'kolom7' => $this->input->post('kolom7_461'),
                        'kolom8' => $this->input->post('kolom8_461'),
                        'kolom9' => $this->input->post('kolom9_461'),
                        'kolom10' => $this->input->post('kolom10_461'),
                        // 'kolom11' => $this->input->post('kolom11_461'),
                        // 'kolom12' => $this->input->post('kolom12_461'),
                        // 'kolom13' => $this->input->post('kolom13_461'),
                        // 'kolom14' => $this->input->post('kolom14_461'),
                        // 'kolom15' => $this->input->post('kolom15_461'),
                        // 'kolom16' => $this->input->post('kolom16_461'),
                        // 'kolom17' => $this->input->post('kolom17_461'),
                        // 'kolom18' => $this->input->post('kolom18_461'),
                        // 'kolom19' => $this->input->post('kolom19_461'),
                        // 'kolom20' => $this->input->post('kolom20_461'),
                        // 'kolom21' => $this->input->post('kolom21_461'),
                        // 'kolom22' => $this->input->post('kolom22_461'),
                        // 'kolom23' => $this->input->post('kolom23_461'),
                        // 'kolom24' => $this->input->post('kolom24_461'),
                        // 'kolom25' => $this->input->post('kolom25_461'),
                        // 'kolom26' => $this->input->post('kolom26_461'),
                        // 'kolom27' => $this->input->post('kolom27_461'),
                        // 'kolom28' => $this->input->post('kolom28_461'),
                        // 'kolom29' => $this->input->post('kolom29_461'),
                        // 'kolom30' => $this->input->post('kolom30_461'),
                        // 'kolom31' => $this->input->post('kolom31_461'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir461'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian462_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir462'),
                        'kolom1' => $this->input->post('kolom1_462'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir462'),
                        'kolom1' => $this->input->post('kolom1_462'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir462'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian511_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir511'),
                        'kolom1' => $this->input->post('kolom1_511'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir511'),
                        'kolom1' => $this->input->post('kolom1_511'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir511'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian5121_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir5121'),
                        'kolom1' => $this->input->post('kolom1_5121'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir5121'),
                        'kolom1' => $this->input->post('kolom1_5121'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir5121'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function insert_isian5122_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir5122'),
                        'kolom1' => $this->input->post('kolom1_5122'),
                        'kolom2' => $this->input->post('kolom2_5122'),
                        'kolom3' => $this->input->post('kolom3_5122'),
                        'kolom4' => $this->input->post('kolom4_5122'),
                        'kolom5' => $this->input->post('kolom5_5122'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir5122'),
                        'kolom1' => $this->input->post('kolom1_5122'),
                        'kolom2' => $this->input->post('kolom2_5122'),
                        'kolom3' => $this->input->post('kolom3_5122'),
                        'kolom4' => $this->input->post('kolom4_5122'),
                        'kolom5' => $this->input->post('kolom5_5122'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir5122'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian513_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir513'),
                        'kolom1' => $this->input->post('kolom1_513'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir513'),
                        'kolom1' => $this->input->post('kolom1_513'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir513'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian521_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir521'),
                        'kolom1' => $this->input->post('kolom1_521'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir521'),
                        'kolom1' => $this->input->post('kolom1_521'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir521'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian522_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir522'),
                        'kolom1' => $this->input->post('kolom1_522'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir522'),
                        'kolom1' => $this->input->post('kolom1_522'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir522'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian523_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir523'),
                        'kolom1' => $this->input->post('kolom1_523'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir523'),
                        'kolom1' => $this->input->post('kolom1_523'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir523'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian524_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir524'),
                        'kolom1' => $this->input->post('kolom1_524'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir524'),
                        'kolom1' => $this->input->post('kolom1_524'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir524'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian525_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir525'),
                        'kolom1' => $this->input->post('kolom1_525'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir525'),
                        'kolom1' => $this->input->post('kolom1_525'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir525'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian526_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir526'),
                        'kolom1' => $this->input->post('kolom1_526'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir526'),
                        'kolom1' => $this->input->post('kolom1_526'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir526'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian527_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir527'),
                        'kolom1' => $this->input->post('kolom1_527'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir527'),
                        'kolom1' => $this->input->post('kolom1_527'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir527'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian531_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir531'),
                        'kolom1' => $this->input->post('kolom1_531'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir531'),
                        'kolom1' => $this->input->post('kolom1_531'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir531'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian532_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir532'),
                        'kolom1' => $this->input->post('kolom1_532'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir532'),
                        'kolom1' => $this->input->post('kolom1_532'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir532'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian541_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir541'),
                        'kolom1' => $this->input->post('kolom1_541'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir541'),
                        'kolom1' => $this->input->post('kolom1_541'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir541'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function insert_isian542_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir542'),
                        'kolom1' => $this->input->post('kolom1_542'),
                        'kolom2' => $this->input->post('kolom2_542'),
                        'kolom3' => $this->input->post('kolom3_542'),
                        'kolom4' => $this->input->post('kolom4_542'),
                        'kolom5' => $this->input->post('kolom5_542'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir542'),
                        'kolom1' => $this->input->post('kolom1_542'),
                        'kolom2' => $this->input->post('kolom2_542'),
                        'kolom3' => $this->input->post('kolom3_542'),
                        'kolom4' => $this->input->post('kolom4_542'),
                        'kolom5' => $this->input->post('kolom5_542'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir542'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian543_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir543'),
                        'kolom1' => $this->input->post('kolom1_543'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir543'),
                        'kolom1' => $this->input->post('kolom1_543'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir543'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian551_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir551'),
                        'kolom1' => $this->input->post('kolom1_551'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir551'),
                        'kolom1' => $this->input->post('kolom1_551'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir551'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian552_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir552'),
                        'kolom1' => $this->input->post('kolom1_552'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir552'),
                        'kolom1' => $this->input->post('kolom1_552'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir552'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian553_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir553'),
                        'kolom1' => $this->input->post('kolom1_553'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir553'),
                        'kolom1' => $this->input->post('kolom1_553'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir553'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian554_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir554'),
                        'kolom1' => $this->input->post('kolom1_554'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir554'),
                        'kolom1' => $this->input->post('kolom1_554'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir554'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian561_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir561'),
                        'kolom1' => $this->input->post('kolom1_561'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir561'),
                        'kolom1' => $this->input->post('kolom1_561'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir561'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian562_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir562'),
                        'kolom1' => $this->input->post('kolom1_562'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir562'),
                        'kolom1' => $this->input->post('kolom1_562'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir562'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian563_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir563'),
                        'kolom1' => $this->input->post('kolom1_563'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir563'),
                        'kolom1' => $this->input->post('kolom1_563'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir563'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian564_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir564'),
                        'kolom1' => $this->input->post('kolom1_564'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir564'),
                        'kolom1' => $this->input->post('kolom1_564'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir564'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian61_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir61'),
                        'kolom1' => $this->input->post('kolom1_61'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir61'),
                        'kolom1' => $this->input->post('kolom1_61'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir61'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
        // 79
        public function insert_isian622_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir622'),
                        'kolom1' => $this->input->post('kolom1_622'),
                        'kolom2' => $this->input->post('kolom2_622'),
                        'kolom3' => $this->input->post('kolom3_622'),
                        'kolom4' => $this->input->post('kolom4_622'),
                        'kolom5' => $this->input->post('kolom5_622'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir622'),
                        'kolom1' => $this->input->post('kolom1_622'),
                        'kolom2' => $this->input->post('kolom2_622'),
                        'kolom3' => $this->input->post('kolom3_622'),
                        'kolom4' => $this->input->post('kolom4_622'),
                        'kolom5' => $this->input->post('kolom5_622'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir622'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 80
        public function insert_isian623_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir623'),
                        'kolom1' => $this->input->post('kolom1_623'),
                        'kolom2' => $this->input->post('kolom2_623'),
                        'kolom3' => $this->input->post('kolom3_623'),
                        'kolom4' => $this->input->post('kolom4_623'),
                        'kolom5' => $this->input->post('kolom5_623'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir623'),
                        'kolom1' => $this->input->post('kolom1_623'),
                        'kolom2' => $this->input->post('kolom2_623'),
                        'kolom3' => $this->input->post('kolom3_623'),
                        'kolom4' => $this->input->post('kolom4_623'),
                        'kolom5' => $this->input->post('kolom5_623'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir623'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 80
        public function insert_isian624_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir624'),
                        'kolom1' => $this->input->post('kolom1_624'),
                        'kolom2' => $this->input->post('kolom2_624'),
                        'kolom3' => $this->input->post('kolom3_624'),
                        'kolom4' => $this->input->post('kolom4_624'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir624'),
                        'kolom1' => $this->input->post('kolom1_624'),
                        'kolom2' => $this->input->post('kolom2_624'),
                        'kolom3' => $this->input->post('kolom3_624'),
                        'kolom4' => $this->input->post('kolom4_624'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir624'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian632_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir632'),
                        'kolom1' => $this->input->post('kolom1_632'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir632'),
                        'kolom1' => $this->input->post('kolom1_632'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir632'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian651_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir651'),
                        'kolom1' => $this->input->post('kolom1_651'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir651'),
                        'kolom1' => $this->input->post('kolom1_651'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir651'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
        // 93
        public function insert_isian711_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir711'),
                        'kolom1' => $this->input->post('kolom1_711'),
                        'kolom2' => $this->input->post('kolom2_711'),
                        'kolom3' => $this->input->post('kolom3_711'),
                        'kolom4' => $this->input->post('kolom4_711'),
                        'kolom5' => $this->input->post('kolom5_711'),
                        'kolom6' => $this->input->post('kolom6_711'),
                        'kolom7' => $this->input->post('kolom7_711'),
                        'kolom8' => $this->input->post('kolom8_711'),
                        'kolom9' => $this->input->post('kolom9_711'),
                        'kolom10' => $this->input->post('kolom10_711'),
                        'kolom11' => $this->input->post('kolom11_711'),
                        'kolom12' => $this->input->post('kolom12_711'),
                        'kolom13' => $this->input->post('kolom13_711'),
                        'kolom14' => $this->input->post('kolom14_711'),
                        'kolom15' => $this->input->post('kolom15_711'),
                        'kolom16' => $this->input->post('kolom16_711'),
                        'kolom17' => $this->input->post('kolom17_711'),
                        'kolom18' => $this->input->post('kolom18_711'),
                        'kolom19' => $this->input->post('kolom19_711'),
                        'kolom20' => $this->input->post('kolom20_711'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir711'),
                        'kolom1' => $this->input->post('kolom1_711'),
                        'kolom2' => $this->input->post('kolom2_711'),
                        'kolom3' => $this->input->post('kolom3_711'),
                        'kolom4' => $this->input->post('kolom4_711'),
                        'kolom5' => $this->input->post('kolom5_711'),
                        'kolom6' => $this->input->post('kolom6_711'),
                        'kolom7' => $this->input->post('kolom7_711'),
                        'kolom8' => $this->input->post('kolom8_711'),
                        'kolom9' => $this->input->post('kolom9_711'),
                        'kolom10' => $this->input->post('kolom10_711'),
                        'kolom11' => $this->input->post('kolom11_711'),
                        'kolom12' => $this->input->post('kolom12_711'),
                        'kolom13' => $this->input->post('kolom13_711'),
                        'kolom14' => $this->input->post('kolom14_711'),
                        'kolom15' => $this->input->post('kolom15_711'),
                        'kolom16' => $this->input->post('kolom16_711'),
                        'kolom17' => $this->input->post('kolom17_711'),
                        'kolom18' => $this->input->post('kolom18_711'),
                        'kolom19' => $this->input->post('kolom19_711'),
                        'kolom20' => $this->input->post('kolom20_711'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir711'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian712_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir712'),
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir712'),
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir712'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian713_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir713'),
                        'kolom1' => $this->input->post('kolom1_713'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir713'),
                        'kolom1' => $this->input->post('kolom1_713'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir713'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
        // 93
        public function insert_isian714_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir714'),
                        'kolom1' => $this->input->post('kolom1_714'),
                        'kolom2' => $this->input->post('kolom2_714'),
                        'kolom3' => $this->input->post('kolom3_714'),
                        'kolom4' => $this->input->post('kolom4_714'),
                        'kolom5' => $this->input->post('kolom5_714'),
                        'kolom6' => $this->input->post('kolom6_714'),
                        'kolom7' => $this->input->post('kolom7_714'),
                        'kolom8' => $this->input->post('kolom8_714'),
                        'kolom9' => $this->input->post('kolom9_714'),
                        'kolom10' => $this->input->post('kolom10_714'),
                        'kolom11' => $this->input->post('kolom11_714'),
                        'kolom12' => $this->input->post('kolom12_714'),
                        'kolom13' => $this->input->post('kolom13_714'),
                        'kolom14' => $this->input->post('kolom14_714'),
                        'kolom15' => $this->input->post('kolom15_714'),
                        'kolom16' => $this->input->post('kolom16_714'),
                        'kolom17' => $this->input->post('kolom17_714'),
                        'kolom18' => $this->input->post('kolom18_714'),
                        'kolom19' => $this->input->post('kolom19_714'),
                        'kolom20' => $this->input->post('kolom20_714'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir714'),
                        'kolom1' => $this->input->post('kolom1_714'),
                        'kolom2' => $this->input->post('kolom2_714'),
                        'kolom3' => $this->input->post('kolom3_714'),
                        'kolom4' => $this->input->post('kolom4_714'),
                        'kolom5' => $this->input->post('kolom5_714'),
                        'kolom6' => $this->input->post('kolom6_714'),
                        'kolom7' => $this->input->post('kolom7_714'),
                        'kolom8' => $this->input->post('kolom8_714'),
                        'kolom9' => $this->input->post('kolom9_714'),
                        'kolom10' => $this->input->post('kolom10_714'),
                        'kolom11' => $this->input->post('kolom11_714'),
                        'kolom12' => $this->input->post('kolom12_714'),
                        'kolom13' => $this->input->post('kolom13_714'),
                        'kolom14' => $this->input->post('kolom14_714'),
                        'kolom15' => $this->input->post('kolom15_714'),
                        'kolom16' => $this->input->post('kolom16_714'),
                        'kolom17' => $this->input->post('kolom17_714'),
                        'kolom18' => $this->input->post('kolom18_714'),
                        'kolom19' => $this->input->post('kolom19_714'),
                        'kolom20' => $this->input->post('kolom20_714'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir714'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
        // 95
        public function insert_isian715_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir715'),
                        'kolom1' => $this->input->post('kolom1_715'),
                        'kolom2' => $this->input->post('kolom2_715'),
                        'kolom3' => $this->input->post('kolom3_715'),
                        'kolom4' => $this->input->post('kolom4_715'),
                        'kolom5' => $this->input->post('kolom5_715'),
                        'kolom6' => $this->input->post('kolom6_715'),
                        'kolom7' => $this->input->post('kolom7_715'),
                        'kolom8' => $this->input->post('kolom8_715'),
                        'kolom9' => $this->input->post('kolom9_715'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir715'),
                        'kolom1' => $this->input->post('kolom1_715'),
                        'kolom2' => $this->input->post('kolom2_715'),
                        'kolom3' => $this->input->post('kolom3_715'),
                        'kolom4' => $this->input->post('kolom4_715'),
                        'kolom5' => $this->input->post('kolom5_715'),
                        'kolom6' => $this->input->post('kolom6_715'),
                        'kolom7' => $this->input->post('kolom7_715'),
                        'kolom8' => $this->input->post('kolom8_715'),
                        'kolom9' => $this->input->post('kolom9_715'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir715'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
        // 96
        public function insert_isian717_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir717'),
                        'kolom1' => $this->input->post('kolom1_717'),
                        'kolom2' => $this->input->post('kolom2_717'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir717'),
                        'kolom1' => $this->input->post('kolom1_717'),
                        'kolom2' => $this->input->post('kolom2_717'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir717'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 97
        public function insert_isian721_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir721'),
                        'kolom1' => $this->input->post('kolom1_721'),
                        'kolom2' => $this->input->post('kolom2_721'),
                        'kolom3' => $this->input->post('kolom3_721'),
                        'kolom4' => $this->input->post('kolom4_721'),
                        'kolom5' => $this->input->post('kolom5_721'),
                        'kolom6' => $this->input->post('kolom6_721'),
                        'kolom7' => $this->input->post('kolom7_721'),
                        'kolom8' => $this->input->post('kolom8_721'),
                        'kolom9' => $this->input->post('kolom9_721'),
                        'kolom10' => $this->input->post('kolom10_721'),
                        'kolom11' => $this->input->post('kolom11_721'),
                        'kolom12' => $this->input->post('kolom12_721'),
                        'kolom13' => $this->input->post('kolom13_721'),
                        'kolom14' => $this->input->post('kolom14_721'),
                        'kolom15' => $this->input->post('kolom15_721'),
                        'kolom16' => $this->input->post('kolom16_721'),
                        'kolom17' => $this->input->post('kolom17_721'),
                        'kolom18' => $this->input->post('kolom18_721'),
                        'kolom19' => $this->input->post('kolom19_721'),
                        'kolom20' => $this->input->post('kolom20_721'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir721'),
                        'kolom1' => $this->input->post('kolom1_721'),
                        'kolom2' => $this->input->post('kolom2_721'),
                        'kolom3' => $this->input->post('kolom3_721'),
                        'kolom4' => $this->input->post('kolom4_721'),
                        'kolom5' => $this->input->post('kolom5_721'),
                        'kolom6' => $this->input->post('kolom6_721'),
                        'kolom7' => $this->input->post('kolom7_721'),
                        'kolom8' => $this->input->post('kolom8_721'),
                        'kolom9' => $this->input->post('kolom9_721'),
                        'kolom10' => $this->input->post('kolom10_721'),
                        'kolom11' => $this->input->post('kolom11_721'),
                        'kolom12' => $this->input->post('kolom12_721'),
                        'kolom13' => $this->input->post('kolom13_721'),
                        'kolom14' => $this->input->post('kolom14_721'),
                        'kolom15' => $this->input->post('kolom15_721'),
                        'kolom16' => $this->input->post('kolom16_721'),
                        'kolom17' => $this->input->post('kolom17_721'),
                        'kolom18' => $this->input->post('kolom18_721'),
                        'kolom19' => $this->input->post('kolom19_721'),
                        'kolom20' => $this->input->post('kolom20_721'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir721'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
        // 99
        public function insert_isian731_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir731'),
                        'kolom1' => $this->input->post('kolom1_731'),
                        'kolom2' => $this->input->post('kolom2_731'),
                        'kolom3' => $this->input->post('kolom3_731'),
                        'kolom4' => $this->input->post('kolom4_731'),
                        'kolom5' => $this->input->post('kolom5_731'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir731'),
                        'kolom1' => $this->input->post('kolom1_731'),
                        'kolom2' => $this->input->post('kolom2_731'),
                        'kolom3' => $this->input->post('kolom3_731'),
                        'kolom4' => $this->input->post('kolom4_731'),
                        'kolom5' => $this->input->post('kolom5_731'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir731'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 100
        public function insert_isian732_buku()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir732'),
                        'kolom1' => $this->input->post('kolom1_732'),
                        'kolom2' => $this->input->post('kolom2_732'),
                        'kolom3' => $this->input->post('kolom3_732'),
                        'kolom4' => $this->input->post('kolom4_732'),
                        'kolom5' => $this->input->post('kolom5_732'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom_buku', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir732'),
                        'kolom1' => $this->input->post('kolom1_732'),
                        'kolom2' => $this->input->post('kolom2_732'),
                        'kolom3' => $this->input->post('kolom3_732'),
                        'kolom4' => $this->input->post('kolom4_732'),
                        'kolom5' => $this->input->post('kolom5_732'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir732'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        


        // 
        // INSERT ISIAN BUKU SESUAI DENGA FORMAT BUTIR BORANG PENILAIAN EXCEL 3A 3B
        // 

        // 1
        public function insert_isian11()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir11'),
                        'kolom1' => $this->input->post('kolom1_11'),
                        'kolom2' => $this->input->post('kolom2_11'),
                        'kolom3' => $this->input->post('kolom3_11'),
                        'kolom4' => $this->input->post('kolom4_11'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_4kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir11'),
                        'kolom1' => $this->input->post('kolom1_11'),
                        'kolom2' => $this->input->post('kolom2_11'),
                        'kolom3' => $this->input->post('kolom3_11'),
                        'kolom4' => $this->input->post('kolom4_11'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_4kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir11'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 2
        public function insert_isian11b()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir11b'),
                        'kolom1' => $this->input->post('kolom1_11b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir11b'),
                        'kolom1' => $this->input->post('kolom1_11b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir11b'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 3
        public function insert_isian12()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir12'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 4
        public function insert_isian21()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'kolom2' => $this->input->post('kolom2_21'),
                        'kolom3' => $this->input->post('kolom3_21'),
                        'kolom4' => $this->input->post('kolom4_21'),
                        'kolom5' => $this->input->post('kolom5_21'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'kolom2' => $this->input->post('kolom2_21'),
                        'kolom3' => $this->input->post('kolom3_21'),
                        'kolom4' => $this->input->post('kolom4_21'),
                        'kolom5' => $this->input->post('kolom5_21'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir21'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 5
        public function insert_isian22()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'kolom2' => $this->input->post('kolom2_22'),
                        'kolom3' => $this->input->post('kolom3_22'),
                        'kolom4' => $this->input->post('kolom4_22'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'kolom2' => $this->input->post('kolom2_22'),
                        'kolom3' => $this->input->post('kolom3_22'),
                        'kolom4' => $this->input->post('kolom4_22'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir22'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 6
        public function insert_isian23()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir23'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 7
        public function insert_isian24()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir24'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 8
        public function insert_isian25()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'kolom2' => $this->input->post('kolom2_25'),
                        'kolom3' => $this->input->post('kolom3_25'),
                        'kolom4' => $this->input->post('kolom4_25'),
                        'kolom5' => $this->input->post('kolom5_25'),
                        'kolom6' => $this->input->post('kolom6_25'),
                        'kolom7' => $this->input->post('kolom7_25'),
                        'kolom8' => $this->input->post('kolom8_25'),
                        'kolom9' => $this->input->post('kolom9_25'),
                        'kolom10' => $this->input->post('kolom10_25'),
                        'kolom11' => $this->input->post('kolom11_25'),
                        'kolom12' => $this->input->post('kolom12_25'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_4kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'kolom2' => $this->input->post('kolom2_25'),
                        'kolom3' => $this->input->post('kolom3_25'),
                        'kolom4' => $this->input->post('kolom4_25'),
                        'kolom5' => $this->input->post('kolom5_25'),
                        'kolom6' => $this->input->post('kolom6_25'),
                        'kolom7' => $this->input->post('kolom7_25'),
                        'kolom8' => $this->input->post('kolom8_25'),
                        'kolom9' => $this->input->post('kolom9_25'),
                        'kolom10' => $this->input->post('kolom10_25'),
                        'kolom11' => $this->input->post('kolom11_25'),
                        'kolom12' => $this->input->post('kolom12_25'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_4kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir25'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 9
        public function insert_isian26()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir26'),
                        'kolom1' => $this->input->post('kolom1_26'),
                        'kolom2' => $this->input->post('kolom2_26'),
                        'kolom3' => $this->input->post('kolom3_26'),
                        'kolom4' => $this->input->post('kolom4_26'),
                        'kolom5' => $this->input->post('kolom5_26'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_4kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir26'),
                        'kolom1' => $this->input->post('kolom1_26'),
                        'kolom2' => $this->input->post('kolom2_26'),
                        'kolom3' => $this->input->post('kolom3_26'),
                        'kolom4' => $this->input->post('kolom4_26'),
                        'kolom5' => $this->input->post('kolom5_26'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_4kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir26'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 10 11 12 13
        public function insert_isian321()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir321'),
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
                        'kolom5' => $this->input->post('kolom5_321'),
                        'kolom6' => $this->input->post('kolom6_321'),
                        'kolom7' => $this->input->post('kolom7_321'),
                        'kolom8' => $this->input->post('kolom8_321'),
                        'kolom9' => $this->input->post('kolom9_321'),
                        'kolom10' => $this->input->post('kolom10_321'),
                        'kolom11' => $this->input->post('kolom11_321'),
                        'kolom12' => $this->input->post('kolom12_321'),
                        'kolom13' => $this->input->post('kolom13_321'),
                        'kolom14' => $this->input->post('kolom14_321'),
                        'kolom15' => $this->input->post('kolom15_321'),
                        'kolom16' => $this->input->post('kolom16_321'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir321'),
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
                        'kolom5' => $this->input->post('kolom5_321'),
                        'kolom6' => $this->input->post('kolom6_321'),
                        'kolom7' => $this->input->post('kolom7_321'),
                        'kolom8' => $this->input->post('kolom8_321'),
                        'kolom9' => $this->input->post('kolom9_321'),
                        'kolom10' => $this->input->post('kolom10_321'),
                        'kolom11' => $this->input->post('kolom11_321'),
                        'kolom12' => $this->input->post('kolom12_321'),
                        'kolom13' => $this->input->post('kolom13_321'),
                        'kolom14' => $this->input->post('kolom14_321'),
                        'kolom15' => $this->input->post('kolom15_321'),
                        'kolom16' => $this->input->post('kolom16_321'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir321'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 14
        public function insert_isian322()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir322'),
                        'kolom1' => $this->input->post('kolom1_322'),
                        'kolom2' => $this->input->post('kolom2_322'),
                        'kolom3' => $this->input->post('kolom3_322'),
                        'kolom4' => $this->input->post('kolom4_322'),
                        'kolom5' => $this->input->post('kolom5_322'),
                        'kolom6' => $this->input->post('kolom6_322'),
                        'kolom7' => $this->input->post('kolom7_322'),
                        'kolom8' => $this->input->post('kolom8_322'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir322'),
                        'kolom1' => $this->input->post('kolom1_322'),
                        'kolom2' => $this->input->post('kolom2_322'),
                        'kolom3' => $this->input->post('kolom3_322'),
                        'kolom4' => $this->input->post('kolom4_322'),
                        'kolom5' => $this->input->post('kolom5_322'),
                        'kolom6' => $this->input->post('kolom6_322'),
                        'kolom7' => $this->input->post('kolom7_322'),
                        'kolom8' => $this->input->post('kolom8_322'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir322'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 15
        public function insert_isian313()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir313'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'kolom4' => $this->input->post('kolom4_313'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir313'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'kolom4' => $this->input->post('kolom4_313'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir313'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 16 17
        public function insert_isian323()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir323'),
                        'kolom1' => $this->input->post('kolom1_323'),
                        'kolom2' => $this->input->post('kolom2_323'),
                        'kolom3' => $this->input->post('kolom3_323'),
                        'kolom4' => $this->input->post('kolom4_323'),
                        'kolom5' => $this->input->post('kolom5_323'),
                        'kolom6' => $this->input->post('kolom6_323'),
                        'kolom7' => $this->input->post('kolom7_323'),
                        'kolom8' => $this->input->post('kolom8_323'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir323'),
                        'kolom1' => $this->input->post('kolom1_323'),
                        'kolom2' => $this->input->post('kolom2_323'),
                        'kolom3' => $this->input->post('kolom3_323'),
                        'kolom4' => $this->input->post('kolom4_323'),
                        'kolom5' => $this->input->post('kolom5_323'),
                        'kolom6' => $this->input->post('kolom6_323'),
                        'kolom7' => $this->input->post('kolom7_323'),
                        'kolom8' => $this->input->post('kolom8_323'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir323'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 18 19
        public function insert_isian32()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir32'),
                        'kolom1' => $this->input->post('kolom1_32'),
                        'kolom2' => $this->input->post('kolom2_32'),
                        'kolom3' => $this->input->post('kolom3_32'),
                        'kolom4' => $this->input->post('kolom4_32'),
                        'kolom5' => $this->input->post('kolom5_32'),
                        'kolom6' => $this->input->post('kolom6_32'),
                        'kolom7' => $this->input->post('kolom7_32'),
                        'kolom8' => $this->input->post('kolom8_32'),
                        'kolom9' => $this->input->post('kolom9_32'),
                        'kolom10' => $this->input->post('kolom10_32'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir32'),
                        'kolom1' => $this->input->post('kolom1_32'),
                        'kolom2' => $this->input->post('kolom2_32'),
                        'kolom3' => $this->input->post('kolom3_32'),
                        'kolom4' => $this->input->post('kolom4_32'),
                        'kolom5' => $this->input->post('kolom5_32'),
                        'kolom6' => $this->input->post('kolom6_32'),
                        'kolom7' => $this->input->post('kolom7_32'),
                        'kolom8' => $this->input->post('kolom8_32'),
                        'kolom9' => $this->input->post('kolom9_32'),
                        'kolom10' => $this->input->post('kolom10_32'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir32'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 20
        public function insert_isian331()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir331'),
                        'kolom1' => $this->input->post('kolom1_331'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir331'),
                        'kolom1' => $this->input->post('kolom1_331'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir331'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 21 22
        public function insert_isian332a()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir332'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'kolom2' => $this->input->post('kolom2_332'),
                        'kolom3' => $this->input->post('kolom3_332'),
                        'kolom4' => $this->input->post('kolom4_332'),
                        'kolom5' => $this->input->post('kolom5_332'),
                        'kolom6' => $this->input->post('kolom6_332'),
                        'kolom7' => $this->input->post('kolom7_332'),
                        'kolom8' => $this->input->post('kolom8_332'),
                        'kolom9' => $this->input->post('kolom9_332'),
                        'kolom10' => $this->input->post('kolom10_332'),
                        'kolom11' => $this->input->post('kolom11_332'),
                        'kolom12' => $this->input->post('kolom12_332'),
                        'kolom13' => $this->input->post('kolom13_332'),
                        'kolom14' => $this->input->post('kolom14_332'),
                        'kolom15' => $this->input->post('kolom15_332'),
                        'kolom16' => $this->input->post('kolom16_332'),
                        'kolom17' => $this->input->post('kolom17_332'),
                        'kolom18' => $this->input->post('kolom18_332'),
                        'kolom19' => $this->input->post('kolom19_332'),
                        'kolom20' => $this->input->post('kolom20_332'),
                        'kolom21' => $this->input->post('kolom21_332'),
                        'kolom22' => $this->input->post('kolom22_332'),
                        'kolom23' => $this->input->post('kolom23_332'),
                        'kolom24' => $this->input->post('kolom24_332'),
                        'kolom25' => $this->input->post('kolom25_332'),
                        'kolom26' => $this->input->post('kolom26_332'),
                        'kolom27' => $this->input->post('kolom27_332'),
                        'kolom28' => $this->input->post('kolom28_332'),
                        'kolom29' => $this->input->post('kolom29_332'),
                        'kolom30' => $this->input->post('kolom30_332'),
                        'kolom31' => $this->input->post('kolom31_332'),
                        'kolom32' => $this->input->post('kolom32_332'),
                        'kolom33' => $this->input->post('kolom33_332'),
                        'kolom34' => $this->input->post('kolom34_332'),
                        'kolom35' => $this->input->post('kolom35_332'),
                        'kolom36' => $this->input->post('kolom36_332'),
                        'kolom37' => $this->input->post('kolom37_332'),
                        'kolom38' => $this->input->post('kolom38_332'),
                        'kolom39' => $this->input->post('kolom39_332'),
                        'kolom40' => $this->input->post('kolom40_332'),
                        'kolom41' => $this->input->post('kolom41_332'),
                        'kolom42' => $this->input->post('kolom42_332'),
                        'kolom43' => $this->input->post('kolom43_332'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir332'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'kolom2' => $this->input->post('kolom2_332'),
                        'kolom3' => $this->input->post('kolom3_332'),
                        'kolom4' => $this->input->post('kolom4_332'),
                        'kolom5' => $this->input->post('kolom5_332'),
                        'kolom6' => $this->input->post('kolom6_332'),
                        'kolom7' => $this->input->post('kolom7_332'),
                        'kolom8' => $this->input->post('kolom8_332'),
                        'kolom9' => $this->input->post('kolom9_332'),
                        'kolom10' => $this->input->post('kolom10_332'),
                        'kolom11' => $this->input->post('kolom11_332'),
                        'kolom12' => $this->input->post('kolom12_332'),
                        'kolom13' => $this->input->post('kolom13_332'),
                        'kolom14' => $this->input->post('kolom14_332'),
                        'kolom15' => $this->input->post('kolom15_332'),
                        'kolom16' => $this->input->post('kolom16_332'),
                        'kolom17' => $this->input->post('kolom17_332'),
                        'kolom18' => $this->input->post('kolom18_332'),
                        'kolom19' => $this->input->post('kolom19_332'),
                        'kolom20' => $this->input->post('kolom20_332'),
                        'kolom21' => $this->input->post('kolom21_332'),
                        'kolom22' => $this->input->post('kolom22_332'),
                        'kolom23' => $this->input->post('kolom23_332'),
                        'kolom24' => $this->input->post('kolom24_332'),
                        'kolom25' => $this->input->post('kolom25_332'),
                        'kolom26' => $this->input->post('kolom26_332'),
                        'kolom27' => $this->input->post('kolom27_332'),
                        'kolom28' => $this->input->post('kolom28_332'),
                        'kolom29' => $this->input->post('kolom29_332'),
                        'kolom30' => $this->input->post('kolom30_332'),
                        'kolom31' => $this->input->post('kolom31_332'),
                        'kolom32' => $this->input->post('kolom32_332'),
                        'kolom33' => $this->input->post('kolom33_332'),
                        'kolom34' => $this->input->post('kolom34_332'),
                        'kolom35' => $this->input->post('kolom35_332'),
                        'kolom36' => $this->input->post('kolom36_332'),
                        'kolom37' => $this->input->post('kolom37_332'),
                        'kolom38' => $this->input->post('kolom38_332'),
                        'kolom39' => $this->input->post('kolom39_332'),
                        'kolom40' => $this->input->post('kolom40_332'),
                        'kolom41' => $this->input->post('kolom41_332'),
                        'kolom42' => $this->input->post('kolom42_332'),
                        'kolom43' => $this->input->post('kolom43_332'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir332'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 23
        public function insert_isian332()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir332'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir332'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir332'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 24
        public function insert_isian333()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir333'),
                        'kolom1' => $this->input->post('kolom1_333'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir333'),
                        'kolom1' => $this->input->post('kolom1_333'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir333'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 25
        public function insert_isian341()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'kolom2' => $this->input->post('kolom2_341'),
                        'kolom3' => $this->input->post('kolom3_341'),
                        'kolom4' => $this->input->post('kolom4_341'),
                        'kolom5' => $this->input->post('kolom5_341'),
                        'kolom6' => $this->input->post('kolom6_341'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'kolom2' => $this->input->post('kolom2_341'),
                        'kolom3' => $this->input->post('kolom3_341'),
                        'kolom4' => $this->input->post('kolom4_341'),
                        'kolom5' => $this->input->post('kolom5_341'),
                        'kolom6' => $this->input->post('kolom6_341'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir341'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 26
        public function insert_isian342()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir342'),
                        'kolom1' => $this->input->post('kolom1_342'),
                        'kolom2' => $this->input->post('kolom2_342'),
                        'kolom3' => $this->input->post('kolom3_342'),
                        'kolom4' => $this->input->post('kolom4_342'),
                        'kolom5' => $this->input->post('kolom5_342'),
                        'kolom6' => $this->input->post('kolom6_342'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir342'),
                        'kolom1' => $this->input->post('kolom1_342'),
                        'kolom2' => $this->input->post('kolom2_342'),
                        'kolom3' => $this->input->post('kolom3_342'),
                        'kolom4' => $this->input->post('kolom4_342'),
                        'kolom5' => $this->input->post('kolom5_342'),
                        'kolom6' => $this->input->post('kolom6_342'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir342'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 27
        public function insert_isian41()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'kolom2' => $this->input->post('kolom2_41'),
                        'kolom3' => $this->input->post('kolom3_41'),
                        'kolom4' => $this->input->post('kolom4_41'),
                        'kolom5' => $this->input->post('kolom5_41'),
                        'kolom6' => $this->input->post('kolom6_41'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'kolom2' => $this->input->post('kolom2_41'),
                        'kolom3' => $this->input->post('kolom3_41'),
                        'kolom4' => $this->input->post('kolom4_41'),
                        'kolom5' => $this->input->post('kolom5_41'),
                        'kolom6' => $this->input->post('kolom6_41'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir41'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28 29
        public function insert_isian421()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir421'),
                        'kolom1' => $this->input->post('kolom1_421'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir421'),
                        'kolom1' => $this->input->post('kolom1_421'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir421'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 30 31 32 33
        public function insert_isian431()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir431'),
                        'kolom1' => $this->input->post('kolom1_431'),
                        'kolom2' => $this->input->post('kolom2_431'),
                        'kolom3' => $this->input->post('kolom3_431'),
                        'kolom4' => $this->input->post('kolom4_431'),
                        'kolom5' => $this->input->post('kolom5_431'),
                        'kolom6' => $this->input->post('kolom6_431'),
                        'kolom7' => $this->input->post('kolom7_431'),
                        'kolom8' => $this->input->post('kolom8_431'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir431'),
                        'kolom1' => $this->input->post('kolom1_431'),
                        'kolom2' => $this->input->post('kolom2_431'),
                        'kolom3' => $this->input->post('kolom3_431'),
                        'kolom4' => $this->input->post('kolom4_431'),
                        'kolom5' => $this->input->post('kolom5_431'),
                        'kolom6' => $this->input->post('kolom6_431'),
                        'kolom7' => $this->input->post('kolom7_431'),
                        'kolom8' => $this->input->post('kolom8_431'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir431'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 34
        public function insert_isian432()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir432'),
                        'kolom1' => $this->input->post('kolom1_432'),
                        'kolom2' => $this->input->post('kolom2_432'),
                        'kolom3' => $this->input->post('kolom3_432'),
                        'kolom4' => $this->input->post('kolom4_432'),
                        'kolom5' => $this->input->post('kolom5_432'),
                        'kolom6' => $this->input->post('kolom6_432'),
                        'kolom7' => $this->input->post('kolom7_432'),
                        'kolom8' => $this->input->post('kolom8_432'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir432'),
                        'kolom1' => $this->input->post('kolom1_432'),
                        'kolom2' => $this->input->post('kolom2_432'),
                        'kolom3' => $this->input->post('kolom3_432'),
                        'kolom4' => $this->input->post('kolom4_432'),
                        'kolom5' => $this->input->post('kolom5_432'),
                        'kolom6' => $this->input->post('kolom6_432'),
                        'kolom7' => $this->input->post('kolom7_432'),
                        'kolom8' => $this->input->post('kolom8_432'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir432'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 35
        public function insert_isian433()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir433'),
                        'kolom1' => $this->input->post('kolom1_433'),
                        'kolom2' => $this->input->post('kolom2_433'),
                        'kolom3' => $this->input->post('kolom3_433'),
                        'kolom4' => $this->input->post('kolom4_433'),
                        'kolom5' => $this->input->post('kolom5_433'),
                        'kolom6' => $this->input->post('kolom6_433'),
                        'kolom7' => $this->input->post('kolom7_433'),
                        'kolom8' => $this->input->post('kolom8_433'),
                        'kolom9' => $this->input->post('kolom9_433'),
                        'kolom10' => $this->input->post('kolom10_433'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir433'),
                        'kolom1' => $this->input->post('kolom1_433'),
                        'kolom2' => $this->input->post('kolom2_433'),
                        'kolom3' => $this->input->post('kolom3_433'),
                        'kolom4' => $this->input->post('kolom4_433'),
                        'kolom5' => $this->input->post('kolom5_433'),
                        'kolom6' => $this->input->post('kolom6_433'),
                        'kolom7' => $this->input->post('kolom7_433'),
                        'kolom8' => $this->input->post('kolom8_433'),
                        'kolom9' => $this->input->post('kolom9_433'),
                        'kolom10' => $this->input->post('kolom10_433'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir433'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 36 (434 & 435)
        public function insert_isian434()
        {
                $data = array(
                        'id_butir' => $this->input->post('434id_butir'),
                        'kolom1' => $this->input->post('kolom1_434'),
                        'kolom2' => $this->input->post('kolom2_434'),
                        'kolom3' => $this->input->post('kolom3_434'),
                        'kolom4' => $this->input->post('kolom4_434'),
                        'kolom5' => $this->input->post('kolom5_434'),
                        'kolom6' => $this->input->post('kolom6_434'),
                        'kolom7' => $this->input->post('kolom7_434'),
                        'kolom8' => $this->input->post('kolom8_434'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('434id_butir'),
                        'kolom1' => $this->input->post('kolom1_434'),
                        'kolom2' => $this->input->post('kolom2_434'),
                        'kolom3' => $this->input->post('kolom3_434'),
                        'kolom4' => $this->input->post('kolom4_434'),
                        'kolom5' => $this->input->post('kolom5_434'),
                        'kolom6' => $this->input->post('kolom6_434'),
                        'kolom7' => $this->input->post('kolom7_434'),
                        'kolom8' => $this->input->post('kolom8_434'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('434id_butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 37 (434 & 435)
        public function insert_isian435()
        {
                $data = array(
                        'id_butir' => $this->input->post('435id_butir'),
                        'kolom1' => $this->input->post('kolom1_435'),
                        'kolom2' => $this->input->post('kolom2_435'),
                        'kolom3' => $this->input->post('kolom3_435'),
                        'kolom4' => $this->input->post('kolom4_435'),
                        'kolom5' => $this->input->post('kolom5_435'),
                        'kolom6' => $this->input->post('kolom6_435'),
                        'kolom7' => $this->input->post('kolom7_435'),
                        'kolom8' => $this->input->post('kolom8_435'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('435id_butir'),
                        'kolom1' => $this->input->post('kolom1_435'),
                        'kolom2' => $this->input->post('kolom2_435'),
                        'kolom3' => $this->input->post('kolom3_435'),
                        'kolom4' => $this->input->post('kolom4_435'),
                        'kolom5' => $this->input->post('kolom5_435'),
                        'kolom6' => $this->input->post('kolom6_435'),
                        'kolom7' => $this->input->post('kolom7_435'),
                        'kolom8' => $this->input->post('kolom8_435'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('435id_butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 38
        public function insert_isian44()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir44'),
                        'kolom1' => $this->input->post('kolom1_44'),
                        'kolom2' => $this->input->post('kolom2_44'),
                        'kolom3' => $this->input->post('kolom3_44'),
                        'kolom4' => $this->input->post('kolom4_44'),
                        'kolom5' => $this->input->post('kolom5_44'),
                        'kolom6' => $this->input->post('kolom6_44'),
                        'kolom7' => $this->input->post('kolom7_44'),
                        'kolom8' => $this->input->post('kolom8_44'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir44'),
                        'kolom1' => $this->input->post('kolom1_44'),
                        'kolom2' => $this->input->post('kolom2_44'),
                        'kolom3' => $this->input->post('kolom3_44'),
                        'kolom4' => $this->input->post('kolom4_44'),
                        'kolom5' => $this->input->post('kolom5_44'),
                        'kolom6' => $this->input->post('kolom6_44'),
                        'kolom7' => $this->input->post('kolom7_44'),
                        'kolom8' => $this->input->post('kolom8_44'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir44'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 39 40
        public function insert_isian442()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir442'),
                        'kolom1' => $this->input->post('kolom1_442'),
                        'kolom2' => $this->input->post('kolom2_442'),
                        'kolom3' => $this->input->post('kolom3_442'),
                        'kolom4' => $this->input->post('kolom4_442'),
                        'kolom5' => $this->input->post('kolom5_442'),
                        'kolom6' => $this->input->post('kolom6_442'),
                        'kolom7' => $this->input->post('kolom7_442'),
                        'kolom8' => $this->input->post('kolom8_442'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir442'),
                        'kolom1' => $this->input->post('kolom1_442'),
                        'kolom2' => $this->input->post('kolom2_442'),
                        'kolom3' => $this->input->post('kolom3_442'),
                        'kolom4' => $this->input->post('kolom4_442'),
                        'kolom5' => $this->input->post('kolom5_442'),
                        'kolom6' => $this->input->post('kolom6_442'),
                        'kolom7' => $this->input->post('kolom7_442'),
                        'kolom8' => $this->input->post('kolom8_442'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir442'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 41
        public function insert_isian452()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir452'),
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'kolom4' => $this->input->post('kolom4_452'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir452'),
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'kolom4' => $this->input->post('kolom4_452'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir452'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 42
        public function insert_isian451()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir451'),
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
                        'kolom4' => $this->input->post('kolom4_451'),
                        'kolom5' => $this->input->post('kolom5_451'),
                        'kolom6' => $this->input->post('kolom6_451'),
                        'kolom7' => $this->input->post('kolom7_451'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir451'),
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
                        'kolom4' => $this->input->post('kolom4_451'),
                        'kolom5' => $this->input->post('kolom5_451'),
                        'kolom6' => $this->input->post('kolom6_451'),
                        'kolom7' => $this->input->post('kolom7_451'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir451'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 43
        public function insert_isian453()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir453'),
                        'kolom1' => $this->input->post('kolom1_453'),
                        'kolom2' => $this->input->post('kolom2_453'),
                        'kolom3' => $this->input->post('kolom3_453'),
                        'kolom4' => $this->input->post('kolom4_453'),
                        'kolom5' => $this->input->post('kolom5_453'),
                        'kolom6' => $this->input->post('kolom6_453'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir453'),
                        'kolom1' => $this->input->post('kolom1_453'),
                        'kolom2' => $this->input->post('kolom2_453'),
                        'kolom3' => $this->input->post('kolom3_453'),
                        'kolom4' => $this->input->post('kolom4_453'),
                        'kolom5' => $this->input->post('kolom5_453'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir453'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function insert_isian454()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir454'),
                        'kolom1' => $this->input->post('kolom1_454'),
                        'kolom2' => $this->input->post('kolom2_454'),
                        'kolom3' => $this->input->post('kolom3_454'),
                        'kolom4' => $this->input->post('kolom4_454'),
                        'kolom5' => $this->input->post('kolom5_454'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir454'),
                        'kolom1' => $this->input->post('kolom1_454'),
                        'kolom2' => $this->input->post('kolom2_454'),
                        'kolom3' => $this->input->post('kolom3_454'),
                        'kolom4' => $this->input->post('kolom4_454'),
                        'kolom5' => $this->input->post('kolom5_454'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir454'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 45
        public function insert_isian455()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir455'),
                        'kolom1' => $this->input->post('kolom1_455'),
                        'kolom2' => $this->input->post('kolom2_455'),
                        'kolom3' => $this->input->post('kolom3_455'),
                        'kolom4' => $this->input->post('kolom4_455'),
                        'kolom5' => $this->input->post('kolom5_455'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir455'),
                        'kolom1' => $this->input->post('kolom1_455'),
                        'kolom2' => $this->input->post('kolom2_455'),
                        'kolom3' => $this->input->post('kolom3_455'),
                        'kolom4' => $this->input->post('kolom4_455'),
                        'kolom5' => $this->input->post('kolom5_455'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir455'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 46 47 48
        public function insert_isian461()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir461'),
                        'kolom1' => $this->input->post('kolom1_461'),
                        'kolom2' => $this->input->post('kolom2_461'),
                        'kolom3' => $this->input->post('kolom3_461'),
                        'kolom4' => $this->input->post('kolom4_461'),
                        'kolom5' => $this->input->post('kolom5_461'),
                        'kolom6' => $this->input->post('kolom6_461'),
                        'kolom7' => $this->input->post('kolom7_461'),
                        'kolom8' => $this->input->post('kolom8_461'),
                        'kolom9' => $this->input->post('kolom9_461'),
                        'kolom10' => $this->input->post('kolom10_461'),
                        // 'kolom11' => $this->input->post('kolom11_461'),
                        // 'kolom12' => $this->input->post('kolom12_461'),
                        // 'kolom13' => $this->input->post('kolom13_461'),
                        // 'kolom14' => $this->input->post('kolom14_461'),
                        // 'kolom15' => $this->input->post('kolom15_461'),
                        // 'kolom16' => $this->input->post('kolom16_461'),
                        // 'kolom17' => $this->input->post('kolom17_461'),
                        // 'kolom18' => $this->input->post('kolom18_461'),
                        // 'kolom19' => $this->input->post('kolom19_461'),
                        // 'kolom20' => $this->input->post('kolom20_461'),
                        // 'kolom21' => $this->input->post('kolom21_461'),
                        // 'kolom22' => $this->input->post('kolom22_461'),
                        // 'kolom23' => $this->input->post('kolom23_461'),
                        // 'kolom24' => $this->input->post('kolom24_461'),
                        // 'kolom25' => $this->input->post('kolom25_461'),
                        // 'kolom26' => $this->input->post('kolom26_461'),
                        // 'kolom27' => $this->input->post('kolom27_461'),
                        // 'kolom28' => $this->input->post('kolom28_461'),
                        // 'kolom29' => $this->input->post('kolom29_461'),
                        // 'kolom30' => $this->input->post('kolom30_461'),
                        // 'kolom31' => $this->input->post('kolom31_461'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir461'),
                        'kolom1' => $this->input->post('kolom1_461'),
                        'kolom2' => $this->input->post('kolom2_461'),
                        'kolom3' => $this->input->post('kolom3_461'),
                        'kolom4' => $this->input->post('kolom4_461'),
                        'kolom5' => $this->input->post('kolom5_461'),
                        'kolom6' => $this->input->post('kolom6_461'),
                        'kolom7' => $this->input->post('kolom7_461'),
                        'kolom8' => $this->input->post('kolom8_461'),
                        'kolom9' => $this->input->post('kolom9_461'),
                        'kolom10' => $this->input->post('kolom10_461'),
                        // 'kolom11' => $this->input->post('kolom11_461'),
                        // 'kolom12' => $this->input->post('kolom12_461'),
                        // 'kolom13' => $this->input->post('kolom13_461'),
                        // 'kolom14' => $this->input->post('kolom14_461'),
                        // 'kolom15' => $this->input->post('kolom15_461'),
                        // 'kolom16' => $this->input->post('kolom16_461'),
                        // 'kolom17' => $this->input->post('kolom17_461'),
                        // 'kolom18' => $this->input->post('kolom18_461'),
                        // 'kolom19' => $this->input->post('kolom19_461'),
                        // 'kolom20' => $this->input->post('kolom20_461'),
                        // 'kolom21' => $this->input->post('kolom21_461'),
                        // 'kolom22' => $this->input->post('kolom22_461'),
                        // 'kolom23' => $this->input->post('kolom23_461'),
                        // 'kolom24' => $this->input->post('kolom24_461'),
                        // 'kolom25' => $this->input->post('kolom25_461'),
                        // 'kolom26' => $this->input->post('kolom26_461'),
                        // 'kolom27' => $this->input->post('kolom27_461'),
                        // 'kolom28' => $this->input->post('kolom28_461'),
                        // 'kolom29' => $this->input->post('kolom29_461'),
                        // 'kolom30' => $this->input->post('kolom30_461'),
                        // 'kolom31' => $this->input->post('kolom31_461'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir461'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 49
        public function insert_isian462()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir462'),
                        'kolom1' => $this->input->post('kolom1_462'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir462'),
                        'kolom1' => $this->input->post('kolom1_462'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir462'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 50 51
        public function insert_isian511()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir511'),
                        'kolom1' => $this->input->post('kolom1_511'),
                        'kolom2' => $this->input->post('kolom2_511'),
                        'kolom3' => $this->input->post('kolom3_511'),
                        'kolom4' => $this->input->post('kolom4_511'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir511'),
                        'kolom1' => $this->input->post('kolom1_511'),
                        'kolom2' => $this->input->post('kolom2_511'),
                        'kolom3' => $this->input->post('kolom3_511'),
                        'kolom4' => $this->input->post('kolom4_511'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir511'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 52
        public function insert_isian512a()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir512a'),
                        'kolom1' => $this->input->post('kolom1_512a'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir512a'),
                        'kolom1' => $this->input->post('kolom1_512a'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir512a'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 53
        public function insert_isian512b()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir512b'),
                        'kolom1' => $this->input->post('kolom1_512b'),
                        'kolom2' => $this->input->post('kolom2_512b'),
                        'kolom3' => $this->input->post('kolom3_512b'),
                        'kolom4' => $this->input->post('kolom4_512b'),
                        'kolom5' => $this->input->post('kolom5_512b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir512b'),
                        'kolom1' => $this->input->post('kolom1_512b'),
                        'kolom2' => $this->input->post('kolom2_512b'),
                        'kolom3' => $this->input->post('kolom3_512b'),
                        'kolom4' => $this->input->post('kolom4_512b'),
                        'kolom5' => $this->input->post('kolom5_512b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir512b'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 54
        public function insert_isian512c()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir512c'),
                        'kolom1' => $this->input->post('kolom1_512c'),
                        'kolom2' => $this->input->post('kolom2_512c'),
                        'kolom3' => $this->input->post('kolom3_512c'),
                        'kolom4' => $this->input->post('kolom4_512c'),
                        'kolom5' => $this->input->post('kolom5_512c'),
                        'kolom6' => $this->input->post('kolom6_512c'),
                        'kolom7' => $this->input->post('kolom7_512c'),
                        'kolom8' => $this->input->post('kolom8_512c'),
                        'kolom9' => $this->input->post('kolom9_512c'),
                        'kolom10' => $this->input->post('kolom10_512c'),
                        'kolom11' => $this->input->post('kolom11_512c'),
                        'kolom12' => $this->input->post('kolom12_512c'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir512c'),
                        'kolom1' => $this->input->post('kolom1_512c'),
                        'kolom2' => $this->input->post('kolom2_512c'),
                        'kolom3' => $this->input->post('kolom3_512c'),
                        'kolom4' => $this->input->post('kolom4_512c'),
                        'kolom5' => $this->input->post('kolom5_512c'),
                        'kolom6' => $this->input->post('kolom6_512c'),
                        'kolom7' => $this->input->post('kolom7_512c'),
                        'kolom8' => $this->input->post('kolom8_512c'),
                        'kolom9' => $this->input->post('kolom9_512c'),
                        'kolom10' => $this->input->post('kolom10_512c'),
                        'kolom11' => $this->input->post('kolom11_512c'),
                        'kolom12' => $this->input->post('kolom12_512c'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir512c'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 55
        public function insert_isian513()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir513'),
                        'kolom1' => $this->input->post('kolom1_513'),
                        'kolom2' => $this->input->post('kolom2_513'),
                        'kolom3' => $this->input->post('kolom3_513'),
                        'kolom4' => $this->input->post('kolom4_513'),
                        'kolom5' => $this->input->post('kolom5_513'),
                        'kolom6' => $this->input->post('kolom6_513'),
                        'kolom7' => $this->input->post('kolom7_513'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir513'),
                        'kolom1' => $this->input->post('kolom1_513'),
                        'kolom2' => $this->input->post('kolom2_513'),
                        'kolom3' => $this->input->post('kolom3_513'),
                        'kolom4' => $this->input->post('kolom4_513'),
                        'kolom5' => $this->input->post('kolom5_513'),
                        'kolom6' => $this->input->post('kolom6_513'),
                        'kolom7' => $this->input->post('kolom7_513'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir513'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 56
        public function insert_isian514()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir514'),
                        'kolom1' => $this->input->post('kolom1_514'),
                        'kolom2' => $this->input->post('kolom2_514'),
                        'kolom3' => $this->input->post('kolom3_514'),
                        'kolom4' => $this->input->post('kolom4_514'),
                        'kolom5' => $this->input->post('kolom5_514'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir514'),
                        'kolom1' => $this->input->post('kolom1_514'),
                        'kolom2' => $this->input->post('kolom2_514'),
                        'kolom3' => $this->input->post('kolom3_514'),
                        'kolom4' => $this->input->post('kolom4_514'),
                        'kolom5' => $this->input->post('kolom5_514'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir514'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 57
        public function insert_isian52a()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir52a'),
                        'kolom1' => $this->input->post('kolom1_52a'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir52a'),
                        'kolom1' => $this->input->post('kolom1_52a'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir52a'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 58
        public function insert_isian52b()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir52b'),
                        'kolom1' => $this->input->post('kolom1_52b'),
                        'kolom2' => $this->input->post('kolom2_52b'),
                        'kolom3' => $this->input->post('kolom3_52b'),
                        'kolom4' => $this->input->post('kolom4_52b'),
                        'kolom5' => $this->input->post('kolom5_52b'),
                        'kolom6' => $this->input->post('kolom6_52b'),
                        'kolom7' => $this->input->post('kolom7_52b'),
                        'kolom8' => $this->input->post('kolom8_52b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir52b'),
                        'kolom1' => $this->input->post('kolom1_52b'),
                        'kolom2' => $this->input->post('kolom2_52b'),
                        'kolom3' => $this->input->post('kolom3_52b'),
                        'kolom4' => $this->input->post('kolom4_52b'),
                        'kolom5' => $this->input->post('kolom5_52b'),
                        'kolom6' => $this->input->post('kolom6_52b'),
                        'kolom7' => $this->input->post('kolom7_52b'),
                        'kolom8' => $this->input->post('kolom8_52b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir52b'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 59 60
        public function insert_isian531()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir531'),
                        'kolom1' => $this->input->post('kolom1_531'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir531'),
                        'kolom1' => $this->input->post('kolom1_531'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir531'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 61
        public function insert_isian532()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir532'),
                        'kolom1' => $this->input->post('kolom1_532'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir532'),
                        'kolom1' => $this->input->post('kolom1_532'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir532'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 62 63 64
        public function insert_isian541()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir541'),
                        'kolom1' => $this->input->post('kolom1_541'),
                        'kolom2' => $this->input->post('kolom2_541'),
                        'kolom3' => $this->input->post('kolom3_541'),
                        'kolom4' => $this->input->post('kolom4_541'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir541'),
                        'kolom1' => $this->input->post('kolom1_541'),
                        'kolom2' => $this->input->post('kolom2_541'),
                        'kolom3' => $this->input->post('kolom3_541'),
                        'kolom4' => $this->input->post('kolom4_541'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir541'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 65
        public function insert_isian542()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir542'),
                        'kolom1' => $this->input->post('kolom1_542'),
                        'kolom2' => $this->input->post('kolom2_542'),
                        'kolom3' => $this->input->post('kolom3_542'),
                        'kolom4' => $this->input->post('kolom4_542'),
                        'kolom5' => $this->input->post('kolom5_542'),
                        'kolom6' => $this->input->post('kolom6_542'),
                        'kolom7' => $this->input->post('kolom7_542'),
                        'kolom8' => $this->input->post('kolom8_542'),
                        'kolom9' => $this->input->post('kolom9_542'),
                        'kolom10' => $this->input->post('kolom10_542'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir542'),
                        'kolom1' => $this->input->post('kolom1_542'),
                        'kolom2' => $this->input->post('kolom2_542'),
                        'kolom3' => $this->input->post('kolom3_542'),
                        'kolom4' => $this->input->post('kolom4_542'),
                        'kolom5' => $this->input->post('kolom5_542'),
                        'kolom6' => $this->input->post('kolom6_542'),
                        'kolom7' => $this->input->post('kolom7_542'),
                        'kolom8' => $this->input->post('kolom8_542'),
                        'kolom9' => $this->input->post('kolom9_542'),
                        'kolom10' => $this->input->post('kolom10_542'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir542'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 66
        public function insert_isian551a()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir551a'),
                        'kolom1' => $this->input->post('kolom1_551a'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir551a'),
                        'kolom1' => $this->input->post('kolom1_551a'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir551a'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 67
        public function insert_isian551b()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir551b'),
                        'kolom1' => $this->input->post('kolom1_551b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir551b'),
                        'kolom1' => $this->input->post('kolom1_551b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir551b'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 68
        public function insert_isian551c()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir551c'),
                        'kolom1' => $this->input->post('kolom1_551c'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir551c'),
                        'kolom1' => $this->input->post('kolom1_551c'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir551c'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 69
        public function insert_isian551d()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir551d'),
                        'kolom1' => $this->input->post('kolom1_551d'),
                        'kolom2' => $this->input->post('kolom2_551d'),
                        'kolom3' => $this->input->post('kolom3_551d'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir551d'),
                        'kolom1' => $this->input->post('kolom1_551d'),
                        'kolom2' => $this->input->post('kolom2_551d'),
                        'kolom3' => $this->input->post('kolom3_551d'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir551d'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 70
        public function insert_isian552()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir552'),
                        'kolom1' => $this->input->post('kolom1_552'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir552'),
                        'kolom1' => $this->input->post('kolom1_552'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir552'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 71
        public function insert_isian56()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir56'),
                        'kolom1' => $this->input->post('kolom1_56'),
                        'kolom2' => $this->input->post('kolom2_56'),
                        'kolom3' => $this->input->post('kolom3_56'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir56'),
                        'kolom1' => $this->input->post('kolom1_56'),
                        'kolom2' => $this->input->post('kolom2_56'),
                        'kolom3' => $this->input->post('kolom3_56'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir56'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 72
        public function insert_isian571()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir571'),
                        'kolom1' => $this->input->post('kolom1_571'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir571'),
                        'kolom1' => $this->input->post('kolom1_571'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir571'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 73
        public function insert_isian572()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir572'),
                        'kolom1' => $this->input->post('kolom1_572'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir572'),
                        'kolom1' => $this->input->post('kolom1_572'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir572'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 74
        public function insert_isian573()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir573'),
                        'kolom1' => $this->input->post('kolom1_573'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir573'),
                        'kolom1' => $this->input->post('kolom1_573'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir573'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 75
        public function insert_isian574()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir574'),
                        'kolom1' => $this->input->post('kolom1_574'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir574'),
                        'kolom1' => $this->input->post('kolom1_574'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir574'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 76
        public function insert_isian575()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir575'),
                        'kolom1' => $this->input->post('kolom1_575'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir575'),
                        'kolom1' => $this->input->post('kolom1_575'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir575'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 77
        public function insert_isian61()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir61'),
                        'kolom1' => $this->input->post('kolom1_61'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir61'),
                        'kolom1' => $this->input->post('kolom1_61'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir61'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 78
        public function insert_isian621()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir621'),
                        'kolom1' => $this->input->post('kolom1_621'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir621'),
                        'kolom1' => $this->input->post('kolom1_621'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir621'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 79
        public function insert_isian622()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir622'),
                        'kolom1' => $this->input->post('kolom1_622'),
                        'kolom2' => $this->input->post('kolom2_622'),
                        'kolom3' => $this->input->post('kolom3_622'),
                        'kolom4' => $this->input->post('kolom4_622'),
                        'kolom5' => $this->input->post('kolom5_622'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir622'),
                        'kolom1' => $this->input->post('kolom1_622'),
                        'kolom2' => $this->input->post('kolom2_622'),
                        'kolom3' => $this->input->post('kolom3_622'),
                        'kolom4' => $this->input->post('kolom4_622'),
                        'kolom5' => $this->input->post('kolom5_622'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir622'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 80
        public function insert_isian623()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir623'),
                        'kolom1' => $this->input->post('kolom1_623'),
                        'kolom2' => $this->input->post('kolom2_623'),
                        'kolom3' => $this->input->post('kolom3_623'),
                        'kolom4' => $this->input->post('kolom4_623'),
                        'kolom5' => $this->input->post('kolom5_623'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir623'),
                        'kolom1' => $this->input->post('kolom1_623'),
                        'kolom2' => $this->input->post('kolom2_623'),
                        'kolom3' => $this->input->post('kolom3_623'),
                        'kolom4' => $this->input->post('kolom4_623'),
                        'kolom5' => $this->input->post('kolom5_623'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir623'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 81
        public function insert_isian631()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir631'),
                        'kolom1' => $this->input->post('kolom1_631'),
                        'kolom2' => $this->input->post('kolom2_631'),
                        'kolom3' => $this->input->post('kolom3_631'),
                        'kolom4' => $this->input->post('kolom4_631'),
                        'kolom5' => $this->input->post('kolom5_631'),
                        'kolom6' => $this->input->post('kolom6_631'),
                        'kolom7' => $this->input->post('kolom7_631'),
                        'kolom8' => $this->input->post('kolom8_631'),
                        'kolom9' => $this->input->post('kolom9_631'),
                        'kolom10' => $this->input->post('kolom10_631'),
                        'kolom11' => $this->input->post('kolom11_631'),
                        'kolom12' => $this->input->post('kolom12_631'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir631'),
                        'kolom1' => $this->input->post('kolom1_631'),
                        'kolom2' => $this->input->post('kolom2_631'),
                        'kolom3' => $this->input->post('kolom3_631'),
                        'kolom4' => $this->input->post('kolom4_631'),
                        'kolom5' => $this->input->post('kolom5_631'),
                        'kolom6' => $this->input->post('kolom6_631'),
                        'kolom7' => $this->input->post('kolom7_631'),
                        'kolom8' => $this->input->post('kolom8_631'),
                        'kolom9' => $this->input->post('kolom9_631'),
                        'kolom10' => $this->input->post('kolom10_631'),
                        'kolom11' => $this->input->post('kolom11_631'),
                        'kolom12' => $this->input->post('kolom12_631'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir631'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 82
        public function insert_isian632()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir632'),
                        'kolom1' => $this->input->post('kolom1_632'),
                        'kolom2' => $this->input->post('kolom2_632'),
                        'kolom3' => $this->input->post('kolom3_632'),
                        'kolom4' => $this->input->post('kolom4_632'),
                        'kolom5' => $this->input->post('kolom5_632'),
                        'kolom6' => $this->input->post('kolom6_632'),
                        'kolom7' => $this->input->post('kolom7_632'),
                        'kolom8' => $this->input->post('kolom8_632'),
                        'kolom9' => $this->input->post('kolom9_632'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir632'),
                        'kolom1' => $this->input->post('kolom1_632'),
                        'kolom2' => $this->input->post('kolom2_632'),
                        'kolom3' => $this->input->post('kolom3_632'),
                        'kolom4' => $this->input->post('kolom4_632'),
                        'kolom5' => $this->input->post('kolom5_632'),
                        'kolom6' => $this->input->post('kolom6_632'),
                        'kolom7' => $this->input->post('kolom7_632'),
                        'kolom8' => $this->input->post('kolom8_632'),
                        'kolom9' => $this->input->post('kolom9_632'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir632'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 83
        public function insert_isian633()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir633'),
                        'kolom1' => $this->input->post('kolom1_633'),
                        'kolom2' => $this->input->post('kolom2_633'),
                        'kolom3' => $this->input->post('kolom3_633'),
                        'kolom4' => $this->input->post('kolom4_633'),
                        'kolom5' => $this->input->post('kolom5_633'),
                        'kolom6' => $this->input->post('kolom6_633'),
                        'kolom7' => $this->input->post('kolom7_633'),
                        'kolom8' => $this->input->post('kolom8_633'),
                        'kolom9' => $this->input->post('kolom9_633'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir633'),
                        'kolom1' => $this->input->post('kolom1_633'),
                        'kolom2' => $this->input->post('kolom2_633'),
                        'kolom3' => $this->input->post('kolom3_633'),
                        'kolom4' => $this->input->post('kolom4_633'),
                        'kolom5' => $this->input->post('kolom5_633'),
                        'kolom6' => $this->input->post('kolom6_633'),
                        'kolom7' => $this->input->post('kolom7_633'),
                        'kolom8' => $this->input->post('kolom8_633'),
                        'kolom9' => $this->input->post('kolom9_633'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir633'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 84 85
        public function insert_isian641a()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir641a'),
                        'kolom1' => $this->input->post('kolom1_641a'),
                        'kolom2' => $this->input->post('kolom2_641a'),
                        'kolom3' => $this->input->post('kolom3_641a'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir641a'),
                        'kolom1' => $this->input->post('kolom1_641a'),
                        'kolom2' => $this->input->post('kolom2_641a'),
                        'kolom3' => $this->input->post('kolom3_641a'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir641a'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 86 87 88
        public function insert_isian641c()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir641c'),
                        'kolom1' => $this->input->post('kolom1_641c'),
                        'kolom2' => $this->input->post('kolom2_641c'),
                        'kolom3' => $this->input->post('kolom3_641c'),
                        'kolom4' => $this->input->post('kolom4_641c'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir641c'),
                        'kolom1' => $this->input->post('kolom1_641c'),
                        'kolom2' => $this->input->post('kolom2_641c'),
                        'kolom3' => $this->input->post('kolom3_641c'),
                        'kolom4' => $this->input->post('kolom4_641c'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir641c'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 89
        public function insert_isian642()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir642'),
                        'kolom1' => $this->input->post('kolom1_642'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir642'),
                        'kolom1' => $this->input->post('kolom1_642'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir642'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 90
        public function insert_isian643()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir643'),
                        'kolom1' => $this->input->post('kolom1_643'),
                        'kolom2' => $this->input->post('kolom2_643'),
                        'kolom3' => $this->input->post('kolom3_643'),
                        'kolom4' => $this->input->post('kolom4_643'),
                        'kolom5' => $this->input->post('kolom5_643'),
                        'kolom6' => $this->input->post('kolom6_643'),
                        'kolom7' => $this->input->post('kolom7_643'),
                        'kolom8' => $this->input->post('kolom8_643'),
                        'kolom9' => $this->input->post('kolom9_643'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir643'),
                        'kolom1' => $this->input->post('kolom1_643'),
                        'kolom2' => $this->input->post('kolom2_643'),
                        'kolom3' => $this->input->post('kolom3_643'),
                        'kolom4' => $this->input->post('kolom4_643'),
                        'kolom5' => $this->input->post('kolom5_643'),
                        'kolom6' => $this->input->post('kolom6_643'),
                        'kolom7' => $this->input->post('kolom7_643'),
                        'kolom8' => $this->input->post('kolom8_643'),
                        'kolom9' => $this->input->post('kolom9_643'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir643'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 91
        public function insert_isian651()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir651'),
                        'kolom1' => $this->input->post('kolom1_651'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir651'),
                        'kolom1' => $this->input->post('kolom1_651'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir651'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 92
        public function insert_isian652()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir652'),
                        'kolom1' => $this->input->post('kolom1_652'),
                        'kolom2' => $this->input->post('kolom2_652'),
                        'kolom3' => $this->input->post('kolom3_652'),
                        'kolom4' => $this->input->post('kolom4_652'),
                        'kolom5' => $this->input->post('kolom5_652'),
                        'kolom6' => $this->input->post('kolom6_652'),
                        'kolom7' => $this->input->post('kolom7_652'),
                        'kolom8' => $this->input->post('kolom8_652'),
                        'kolom9' => $this->input->post('kolom9_652'),
                        'kolom10' => $this->input->post('kolom10_652'),
                        'kolom11' => $this->input->post('kolom11_652'),
                        'kolom12' => $this->input->post('kolom12_652'),
                        'kolom13' => $this->input->post('kolom13_652'),
                        'kolom14' => $this->input->post('kolom14_652'),
                        'kolom15' => $this->input->post('kolom15_652'),
                        'kolom16' => $this->input->post('kolom16_652'),
                        'kolom17' => $this->input->post('kolom17_652'),
                        'kolom18' => $this->input->post('kolom18_652'),
                        'kolom19' => $this->input->post('kolom19_652'),
                        'kolom20' => $this->input->post('kolom20_652'),
                        'kolom21' => $this->input->post('kolom21_652'),
                        'kolom22' => $this->input->post('kolom22_652'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir652'),
                        'kolom1' => $this->input->post('kolom1_652'),
                        'kolom2' => $this->input->post('kolom2_652'),
                        'kolom3' => $this->input->post('kolom3_652'),
                        'kolom4' => $this->input->post('kolom4_652'),
                        'kolom5' => $this->input->post('kolom5_652'),
                        'kolom6' => $this->input->post('kolom6_652'),
                        'kolom7' => $this->input->post('kolom7_652'),
                        'kolom8' => $this->input->post('kolom8_652'),
                        'kolom9' => $this->input->post('kolom9_652'),
                        'kolom10' => $this->input->post('kolom10_652'),
                        'kolom11' => $this->input->post('kolom11_652'),
                        'kolom12' => $this->input->post('kolom12_652'),
                        'kolom13' => $this->input->post('kolom13_652'),
                        'kolom14' => $this->input->post('kolom14_652'),
                        'kolom15' => $this->input->post('kolom15_652'),
                        'kolom16' => $this->input->post('kolom16_652'),
                        'kolom17' => $this->input->post('kolom17_652'),
                        'kolom18' => $this->input->post('kolom18_652'),
                        'kolom19' => $this->input->post('kolom19_652'),
                        'kolom20' => $this->input->post('kolom20_652'),
                        'kolom21' => $this->input->post('kolom21_652'),
                        'kolom22' => $this->input->post('kolom22_652'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir652'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 93
        public function insert_isian711()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir711'),
                        'kolom1' => $this->input->post('kolom1_711'),
                        'kolom2' => $this->input->post('kolom2_711'),
                        'kolom3' => $this->input->post('kolom3_711'),
                        'kolom4' => $this->input->post('kolom4_711'),
                        'kolom5' => $this->input->post('kolom5_711'),
                        'kolom6' => $this->input->post('kolom6_711'),
                        'kolom7' => $this->input->post('kolom7_711'),
                        'kolom8' => $this->input->post('kolom8_711'),
                        'kolom9' => $this->input->post('kolom9_711'),
                        'kolom10' => $this->input->post('kolom10_711'),
                        'kolom11' => $this->input->post('kolom11_711'),
                        'kolom12' => $this->input->post('kolom12_711'),
                        'kolom13' => $this->input->post('kolom13_711'),
                        'kolom14' => $this->input->post('kolom14_711'),
                        'kolom15' => $this->input->post('kolom15_711'),
                        'kolom16' => $this->input->post('kolom16_711'),
                        'kolom17' => $this->input->post('kolom17_711'),
                        'kolom18' => $this->input->post('kolom18_711'),
                        'kolom19' => $this->input->post('kolom19_711'),
                        'kolom20' => $this->input->post('kolom20_711'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir711'),
                        'kolom1' => $this->input->post('kolom1_711'),
                        'kolom2' => $this->input->post('kolom2_711'),
                        'kolom3' => $this->input->post('kolom3_711'),
                        'kolom4' => $this->input->post('kolom4_711'),
                        'kolom5' => $this->input->post('kolom5_711'),
                        'kolom6' => $this->input->post('kolom6_711'),
                        'kolom7' => $this->input->post('kolom7_711'),
                        'kolom8' => $this->input->post('kolom8_711'),
                        'kolom9' => $this->input->post('kolom9_711'),
                        'kolom10' => $this->input->post('kolom10_711'),
                        'kolom11' => $this->input->post('kolom11_711'),
                        'kolom12' => $this->input->post('kolom12_711'),
                        'kolom13' => $this->input->post('kolom13_711'),
                        'kolom14' => $this->input->post('kolom14_711'),
                        'kolom15' => $this->input->post('kolom15_711'),
                        'kolom16' => $this->input->post('kolom16_711'),
                        'kolom17' => $this->input->post('kolom17_711'),
                        'kolom18' => $this->input->post('kolom18_711'),
                        'kolom19' => $this->input->post('kolom19_711'),
                        'kolom20' => $this->input->post('kolom20_711'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir711'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 94
        public function insert_isian712()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir712'),
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir712'),
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir712'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 95
        public function insert_isian713()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir713'),
                        'kolom1' => $this->input->post('kolom1_713'),
                        'kolom2' => $this->input->post('kolom2_713'),
                        'kolom3' => $this->input->post('kolom3_713'),
                        'kolom4' => $this->input->post('kolom4_713'),
                        'kolom5' => $this->input->post('kolom5_713'),
                        'kolom6' => $this->input->post('kolom6_713'),
                        'kolom7' => $this->input->post('kolom7_713'),
                        'kolom8' => $this->input->post('kolom8_713'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir713'),
                        'kolom1' => $this->input->post('kolom1_713'),
                        'kolom2' => $this->input->post('kolom2_713'),
                        'kolom3' => $this->input->post('kolom3_713'),
                        'kolom4' => $this->input->post('kolom4_713'),
                        'kolom5' => $this->input->post('kolom5_713'),
                        'kolom6' => $this->input->post('kolom6_713'),
                        'kolom7' => $this->input->post('kolom7_713'),
                        'kolom8' => $this->input->post('kolom8_713'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir713'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 96
        public function insert_isian714()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir714'),
                        'kolom1' => $this->input->post('kolom1_714'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir714'),
                        'kolom1' => $this->input->post('kolom1_714'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir714'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 97
        public function insert_isian721()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir721'),
                        'kolom1' => $this->input->post('kolom1_721'),
                        'kolom2' => $this->input->post('kolom2_721'),
                        'kolom3' => $this->input->post('kolom3_721'),
                        'kolom4' => $this->input->post('kolom4_721'),
                        'kolom5' => $this->input->post('kolom5_721'),
                        'kolom6' => $this->input->post('kolom6_721'),
                        'kolom7' => $this->input->post('kolom7_721'),
                        'kolom8' => $this->input->post('kolom8_721'),
                        'kolom9' => $this->input->post('kolom9_721'),
                        'kolom10' => $this->input->post('kolom10_721'),
                        'kolom11' => $this->input->post('kolom11_721'),
                        'kolom12' => $this->input->post('kolom12_721'),
                        'kolom13' => $this->input->post('kolom13_721'),
                        'kolom14' => $this->input->post('kolom14_721'),
                        'kolom15' => $this->input->post('kolom15_721'),
                        'kolom16' => $this->input->post('kolom16_721'),
                        'kolom17' => $this->input->post('kolom17_721'),
                        'kolom18' => $this->input->post('kolom18_721'),
                        'kolom19' => $this->input->post('kolom19_721'),
                        'kolom20' => $this->input->post('kolom20_721'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir721'),
                        'kolom1' => $this->input->post('kolom1_721'),
                        'kolom2' => $this->input->post('kolom2_721'),
                        'kolom3' => $this->input->post('kolom3_721'),
                        'kolom4' => $this->input->post('kolom4_721'),
                        'kolom5' => $this->input->post('kolom5_721'),
                        'kolom6' => $this->input->post('kolom6_721'),
                        'kolom7' => $this->input->post('kolom7_721'),
                        'kolom8' => $this->input->post('kolom8_721'),
                        'kolom9' => $this->input->post('kolom9_721'),
                        'kolom10' => $this->input->post('kolom10_721'),
                        'kolom11' => $this->input->post('kolom11_721'),
                        'kolom12' => $this->input->post('kolom12_721'),
                        'kolom13' => $this->input->post('kolom13_721'),
                        'kolom14' => $this->input->post('kolom14_721'),
                        'kolom15' => $this->input->post('kolom15_721'),
                        'kolom16' => $this->input->post('kolom16_721'),
                        'kolom17' => $this->input->post('kolom17_721'),
                        'kolom18' => $this->input->post('kolom18_721'),
                        'kolom19' => $this->input->post('kolom19_721'),
                        'kolom20' => $this->input->post('kolom20_721'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir721'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 98
        public function insert_isian722()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir722'),
                        'kolom1' => $this->input->post('kolom1_722'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir722'),
                        'kolom1' => $this->input->post('kolom1_722'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir722'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 99
        public function insert_isian731()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir731'),
                        'kolom1' => $this->input->post('kolom1_731'),
                        'kolom2' => $this->input->post('kolom2_731'),
                        'kolom3' => $this->input->post('kolom3_731'),
                        'kolom4' => $this->input->post('kolom4_731'),
                        'kolom5' => $this->input->post('kolom5_731'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir731'),
                        'kolom1' => $this->input->post('kolom1_731'),
                        'kolom2' => $this->input->post('kolom2_731'),
                        'kolom3' => $this->input->post('kolom3_731'),
                        'kolom4' => $this->input->post('kolom4_731'),
                        'kolom5' => $this->input->post('kolom5_731'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir731'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 100
        public function insert_isian732()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir732'),
                        'kolom1' => $this->input->post('kolom1_732'),
                        'kolom2' => $this->input->post('kolom2_732'),
                        'kolom3' => $this->input->post('kolom3_732'),
                        'kolom4' => $this->input->post('kolom4_732'),
                        'kolom5' => $this->input->post('kolom5_732'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir732'),
                        'kolom1' => $this->input->post('kolom1_732'),
                        'kolom2' => $this->input->post('kolom2_732'),
                        'kolom3' => $this->input->post('kolom3_732'),
                        'kolom4' => $this->input->post('kolom4_732'),
                        'kolom5' => $this->input->post('kolom5_732'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir732'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian2kolom()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir'),
                        'kolom1' => $this->input->post('kolom11'),
                        'kolom2' => $this->input->post('kolom12'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_2kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir'),
                        'kolom1' => $this->input->post('kolom11'),
                        'kolom2' => $this->input->post('kolom12'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                $this->db->insert('isian_16kolom_version', $data);
                // $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
// TUTUP QUERY INSERT ISIAN 

// QUERY UPDATE ISIAN - BUKA QUERY

        // 

        // UPDATE ISIAN BUTIR BORANG SESUAI DENGAN FORMAT BUKU BORANG WORD 3A 3B

        // 

        // 1
        public function update_isian111_buku()
        {
            $last_version = $this->input->post('version_no111');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir111'),
                        'kolom1' => $this->input->post('kolom1_111'),
                        'kolom2' => $this->input->post('kolom2_111'),
                        'kolom3' => $this->input->post('kolom3_111'),
                        'kolom4' => $this->input->post('kolom4_111'),
                        'kolom5' => $this->input->post('kolom5_111'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id111')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir111'),
                        'kolom1' => $this->input->post('kolom1_111'),
                        'kolom2' => $this->input->post('kolom2_111'),
                        'kolom3' => $this->input->post('kolom3_111'),
                        'kolom4' => $this->input->post('kolom4_111'),
                        'kolom5' => $this->input->post('kolom5_111'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at111')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir111'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 6
        public function update_isian12_buku()
        {
            $last_version = $this->input->post('version_no12');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id12')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at12')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir12'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 7
        public function update_isian21_buku()
        {
            $last_version = $this->input->post('version_no21');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'kolom2' => $this->input->post('kolom2_21'),
                        'kolom3' => $this->input->post('kolom3_21'),
                        'kolom4' => $this->input->post('kolom4_21'),
                        'kolom5' => $this->input->post('kolom5_21'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id21')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'kolom2' => $this->input->post('kolom2_21'),
                        'kolom3' => $this->input->post('kolom3_21'),
                        'kolom4' => $this->input->post('kolom4_21'),
                        'kolom5' => $this->input->post('kolom5_21'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at21')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir21'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 8
        public function update_isian22_buku()
        {
            $last_version = $this->input->post('version_no22');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'kolom2' => $this->input->post('kolom2_22'),
                        'kolom3' => $this->input->post('kolom3_22'),
                        'kolom4' => $this->input->post('kolom4_22'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id22')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'kolom2' => $this->input->post('kolom2_22'),
                        'kolom3' => $this->input->post('kolom3_22'),
                        'kolom4' => $this->input->post('kolom4_22'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at22')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir22'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 9
        public function update_isian23_buku()
        {
            $last_version = $this->input->post('version_no23');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id23')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at23')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir23'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 10
        public function update_isian24_buku()
        {
            $last_version = $this->input->post('version_no24');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id24')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at24')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir24'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 11
        public function update_isian25_buku()
        {
            $last_version = $this->input->post('version_no25');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'kolom2' => $this->input->post('kolom2_25'),
                        'kolom3' => $this->input->post('kolom3_25'),
                        'kolom4' => $this->input->post('kolom4_25'),
                        'kolom5' => $this->input->post('kolom5_25'),
                        'kolom6' => $this->input->post('kolom6_25'),
                        'kolom7' => $this->input->post('kolom7_25'),
                        'kolom8' => $this->input->post('kolom8_25'),
                        'kolom9' => $this->input->post('kolom9_25'),
                        'kolom10' => $this->input->post('kolom10_25'),
                        'kolom11' => $this->input->post('kolom11_25'),
                        'kolom12' => $this->input->post('kolom12_25'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id25')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'kolom2' => $this->input->post('kolom2_25'),
                        'kolom3' => $this->input->post('kolom3_25'),
                        'kolom4' => $this->input->post('kolom4_25'),
                        'kolom5' => $this->input->post('kolom5_25'),
                        'kolom6' => $this->input->post('kolom6_25'),
                        'kolom7' => $this->input->post('kolom7_25'),
                        'kolom8' => $this->input->post('kolom8_25'),
                        'kolom9' => $this->input->post('kolom9_25'),
                        'kolom10' => $this->input->post('kolom10_25'),
                        'kolom11' => $this->input->post('kolom11_25'),
                        'kolom12' => $this->input->post('kolom12_25'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at25')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir25'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 12
        public function update_isian26_buku()
        {
            $last_version = $this->input->post('version_no26');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir26'),
                        'kolom1' => $this->input->post('kolom1_26'),
                        'kolom2' => $this->input->post('kolom2_26'),
                        'kolom3' => $this->input->post('kolom3_26'),
                        'kolom4' => $this->input->post('kolom4_26'),
                        'kolom5' => $this->input->post('kolom5_26'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id26')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir26'),
                        'kolom1' => $this->input->post('kolom1_26'),
                        'kolom2' => $this->input->post('kolom2_26'),
                        'kolom3' => $this->input->post('kolom3_26'),
                        'kolom4' => $this->input->post('kolom4_26'),
                        'kolom5' => $this->input->post('kolom5_26'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at26')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir26'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 12
        public function update_isian31_buku()
        {
            $last_version = $this->input->post('version_no31');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir31'),
                        'kolom1' => $this->input->post('kolom1_31'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id31')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir31'),
                        'kolom1' => $this->input->post('kolom1_31'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at31')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir31'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }


        // 13
        public function updatetabel321_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
                        'kolom5' => $this->input->post('kolom5_321'),
                        'kolom6' => $this->input->post('kolom6_321'),
                        'kolom7' => $this->input->post('kolom7_321'),
                        'kolom8' => $this->input->post('kolom8_321'),
                        'kolom9' => $this->input->post('kolom9_321'),
                        'kolom10' => $this->input->post('kolom10_321'),
                        'kolom11' => $this->input->post('kolom11_321'),
                        'kolom12' => $this->input->post('kolom12_321'),
                        'kolom13' => $this->input->post('kolom13_321'),
                        'kolom14' => $this->input->post('kolom14_321'),
                        'kolom15' => $this->input->post('kolom15_321'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id321')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir321tabel'),
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
                        'kolom5' => $this->input->post('kolom5_321'),
                        'kolom6' => $this->input->post('kolom6_321'),
                        'kolom7' => $this->input->post('kolom7_321'),
                        'kolom8' => $this->input->post('kolom8_321'),
                        'kolom9' => $this->input->post('kolom9_321'),
                        'kolom10' => $this->input->post('kolom10_321'),
                        'kolom11' => $this->input->post('kolom11_321'),
                        'kolom12' => $this->input->post('kolom12_321'),
                        'kolom13' => $this->input->post('kolom13_321'),
                        'kolom14' => $this->input->post('kolom14_321'),
                        'kolom15' => $this->input->post('kolom15_321'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir321tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 14
        public function update_isian322_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_322'),
                        'kolom2' => $this->input->post('kolom2_322'),
                        'kolom3' => $this->input->post('kolom3_322'),
                        'kolom4' => $this->input->post('kolom4_322'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id322')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir322tabel'),
                        'kolom1' => $this->input->post('kolom1_322'),
                        'kolom2' => $this->input->post('kolom2_322'),
                        'kolom3' => $this->input->post('kolom3_322'),
                        'kolom4' => $this->input->post('kolom4_322'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir322tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 15
        public function update_isian313_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id313')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir313tabel'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir313tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 16
        public function update_isian323_buku()
        {
            $last_version = $this->input->post('version_no323');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir323'),
                        'kolom1' => $this->input->post('kolom1_323'),
                        'kolom2' => $this->input->post('kolom2_323'),
                        'kolom3' => $this->input->post('kolom3_323'),
                        'kolom4' => $this->input->post('kolom4_323'),
                        'kolom5' => $this->input->post('kolom5_323'),
                        'kolom6' => $this->input->post('kolom6_323'),
                        'kolom7' => $this->input->post('kolom7_323'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id323')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir323'),
                        'kolom1' => $this->input->post('kolom1_323'),
                        'kolom2' => $this->input->post('kolom2_323'),
                        'kolom3' => $this->input->post('kolom3_323'),
                        'kolom4' => $this->input->post('kolom4_323'),
                        'kolom5' => $this->input->post('kolom5_323'),
                        'kolom6' => $this->input->post('kolom6_323'),
                        'kolom7' => $this->input->post('kolom7_323'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at323')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir323'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 20
        public function update_isian331_buku()
        {
            $last_version = $this->input->post('version_no331');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir331'),
                        'kolom1' => $this->input->post('kolom1_331'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id331')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir331'),
                        'kolom1' => $this->input->post('kolom1_331'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at331')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir331'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 21 22
        public function update_isian332_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_332'),
                        'kolom2' => $this->input->post('kolom2_332'),
                        'kolom3' => $this->input->post('kolom3_332'),
                        'kolom4' => $this->input->post('kolom4_332'),
                        'kolom5' => $this->input->post('kolom5_332'),
                        'kolom6' => $this->input->post('kolom6_332'),
                        'kolom7' => $this->input->post('kolom7_332'),
                        'kolom8' => $this->input->post('kolom8_332'),
                        'kolom9' => $this->input->post('kolom9_332'),
                        'kolom10' => $this->input->post('kolom10_332'),
                        'kolom11' => $this->input->post('kolom11_332'),
                        'kolom12' => $this->input->post('kolom12_332'),
                        'kolom13' => $this->input->post('kolom13_332'),
                        'kolom14' => $this->input->post('kolom14_332'),
                        'kolom15' => $this->input->post('kolom15_332'),
                        'kolom16' => $this->input->post('kolom16_332'),
                        'kolom17' => $this->input->post('kolom17_332'),
                        'kolom18' => $this->input->post('kolom18_332'),
                        'kolom19' => $this->input->post('kolom19_332'),
                        'kolom20' => $this->input->post('kolom20_332'),
                        'kolom21' => $this->input->post('kolom21_332'),
                        'kolom22' => $this->input->post('kolom22_332'),
                        'kolom23' => $this->input->post('kolom23_332'),
                        'kolom24' => $this->input->post('kolom24_332'),
                        'kolom25' => $this->input->post('kolom25_332'),
                        'kolom26' => $this->input->post('kolom26_332'),
                        'kolom27' => $this->input->post('kolom27_332'),
                        'kolom28' => $this->input->post('kolom28_332'),
                        'kolom29' => $this->input->post('kolom29_332'),
                        'kolom30' => $this->input->post('kolom30_332'),
                        'kolom31' => $this->input->post('kolom31_332'),
                        'kolom32' => $this->input->post('kolom32_332'),
                        'kolom33' => $this->input->post('kolom33_332'),
                        'kolom34' => $this->input->post('kolom34_332'),
                        'kolom35' => $this->input->post('kolom35_332'),
                        'kolom36' => $this->input->post('kolom36_332'),
                        'kolom37' => $this->input->post('kolom37_332'),
                        'kolom38' => $this->input->post('kolom38_332'),
                        'kolom39' => $this->input->post('kolom39_332'),
                        'kolom40' => $this->input->post('kolom40_332'),
                        'kolom41' => $this->input->post('kolom41_332'),
                        'kolom42' => $this->input->post('kolom42_332'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id332')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir332tabel'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'kolom2' => $this->input->post('kolom2_332'),
                        'kolom3' => $this->input->post('kolom3_332'),
                        'kolom4' => $this->input->post('kolom4_332'),
                        'kolom5' => $this->input->post('kolom5_332'),
                        'kolom6' => $this->input->post('kolom6_332'),
                        'kolom7' => $this->input->post('kolom7_332'),
                        'kolom8' => $this->input->post('kolom8_332'),
                        'kolom9' => $this->input->post('kolom9_332'),
                        'kolom10' => $this->input->post('kolom10_332'),
                        'kolom11' => $this->input->post('kolom11_332'),
                        'kolom12' => $this->input->post('kolom12_332'),
                        'kolom13' => $this->input->post('kolom13_332'),
                        'kolom14' => $this->input->post('kolom14_332'),
                        'kolom15' => $this->input->post('kolom15_332'),
                        'kolom16' => $this->input->post('kolom16_332'),
                        'kolom17' => $this->input->post('kolom17_332'),
                        'kolom18' => $this->input->post('kolom18_332'),
                        'kolom19' => $this->input->post('kolom19_332'),
                        'kolom20' => $this->input->post('kolom20_332'),
                        'kolom21' => $this->input->post('kolom21_332'),
                        'kolom22' => $this->input->post('kolom22_332'),
                        'kolom23' => $this->input->post('kolom23_332'),
                        'kolom24' => $this->input->post('kolom24_332'),
                        'kolom25' => $this->input->post('kolom25_332'),
                        'kolom26' => $this->input->post('kolom26_332'),
                        'kolom27' => $this->input->post('kolom27_332'),
                        'kolom28' => $this->input->post('kolom28_332'),
                        'kolom29' => $this->input->post('kolom29_332'),
                        'kolom30' => $this->input->post('kolom30_332'),
                        'kolom31' => $this->input->post('kolom31_332'),
                        'kolom32' => $this->input->post('kolom32_332'),
                        'kolom33' => $this->input->post('kolom33_332'),
                        'kolom34' => $this->input->post('kolom34_332'),
                        'kolom35' => $this->input->post('kolom35_332'),
                        'kolom36' => $this->input->post('kolom36_332'),
                        'kolom37' => $this->input->post('kolom37_332'),
                        'kolom38' => $this->input->post('kolom38_332'),
                        'kolom39' => $this->input->post('kolom39_332'),
                        'kolom40' => $this->input->post('kolom40_332'),
                        'kolom41' => $this->input->post('kolom41_332'),
                        'kolom42' => $this->input->post('kolom42_332'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir332tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 25
        public function update_isian341_buku()
        {
            $last_version = $this->input->post('version_no341');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'kolom2' => $this->input->post('kolom2_341'),
                        'kolom3' => $this->input->post('kolom3_341'),
                        'kolom4' => $this->input->post('kolom4_341'),
                        'kolom5' => $this->input->post('kolom5_341'),
                        'kolom6' => $this->input->post('kolom6_341'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id341')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'kolom2' => $this->input->post('kolom2_341'),
                        'kolom3' => $this->input->post('kolom3_341'),
                        'kolom4' => $this->input->post('kolom4_341'),
                        'kolom5' => $this->input->post('kolom5_341'),
                        'kolom6' => $this->input->post('kolom6_341'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at341')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir341'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 27
        public function update_isian41_buku()
        {
            $last_version = $this->input->post('version_no41');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'kolom2' => $this->input->post('kolom2_41'),
                        'kolom3' => $this->input->post('kolom3_41'),
                        'kolom4' => $this->input->post('kolom4_41'),
                        'kolom5' => $this->input->post('kolom5_41'),
                        'kolom6' => $this->input->post('kolom6_41'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id41')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'kolom2' => $this->input->post('kolom2_41'),
                        'kolom3' => $this->input->post('kolom3_41'),
                        'kolom4' => $this->input->post('kolom4_41'),
                        'kolom5' => $this->input->post('kolom5_41'),
                        'kolom6' => $this->input->post('kolom6_41'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at41')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir41'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian42_buku()
        {
            $last_version = $this->input->post('version_no42');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir42'),
                        'kolom1' => $this->input->post('kolom1_42'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id42')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir42'),
                        'kolom1' => $this->input->post('kolom1_42'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at42')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir42'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 30 31 31 33
        public function update_isian431_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_431'),
                        'kolom2' => $this->input->post('kolom2_431'),
                        'kolom3' => $this->input->post('kolom3_431'),
                        'kolom4' => $this->input->post('kolom4_431'),
                        'kolom5' => $this->input->post('kolom5_431'),
                        'kolom6' => $this->input->post('kolom6_431'),
                        'kolom7' => $this->input->post('kolom7_431'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id431')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir431tabel'),
                        'kolom1' => $this->input->post('kolom1_431'),
                        'kolom2' => $this->input->post('kolom2_431'),
                        'kolom3' => $this->input->post('kolom3_431'),
                        'kolom4' => $this->input->post('kolom4_431'),
                        'kolom5' => $this->input->post('kolom5_431'),
                        'kolom6' => $this->input->post('kolom6_431'),
                        'kolom7' => $this->input->post('kolom7_431'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir431tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 34
        public function update_isian432_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_432'),
                        'kolom2' => $this->input->post('kolom2_432'),
                        'kolom3' => $this->input->post('kolom3_432'),
                        'kolom4' => $this->input->post('kolom4_432'),
                        'kolom5' => $this->input->post('kolom5_432'),
                        'kolom6' => $this->input->post('kolom6_432'),
                        'kolom7' => $this->input->post('kolom7_432'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id432')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir432tabel'),
                        'kolom1' => $this->input->post('kolom1_432'),
                        'kolom2' => $this->input->post('kolom2_432'),
                        'kolom3' => $this->input->post('kolom3_432'),
                        'kolom4' => $this->input->post('kolom4_432'),
                        'kolom5' => $this->input->post('kolom5_432'),
                        'kolom6' => $this->input->post('kolom6_432'),
                        'kolom7' => $this->input->post('kolom7_432'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir432tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 35
        public function update_isian433_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_433'),
                        'kolom2' => $this->input->post('kolom2_433'),
                        'kolom3' => $this->input->post('kolom3_433'),
                        'kolom4' => $this->input->post('kolom4_433'),
                        'kolom5' => $this->input->post('kolom5_433'),
                        'kolom6' => $this->input->post('kolom6_433'),
                        'kolom7' => $this->input->post('kolom7_433'),
                        'kolom8' => $this->input->post('kolom8_433'),
                        'kolom9' => $this->input->post('kolom9_433'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id433')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir433tabel'),
                        'kolom1' => $this->input->post('kolom1_433'),
                        'kolom2' => $this->input->post('kolom2_433'),
                        'kolom3' => $this->input->post('kolom3_433'),
                        'kolom4' => $this->input->post('kolom4_433'),
                        'kolom5' => $this->input->post('kolom5_433'),
                        'kolom6' => $this->input->post('kolom6_433'),
                        'kolom7' => $this->input->post('kolom7_433'),
                        'kolom8' => $this->input->post('kolom8_433'),
                        'kolom9' => $this->input->post('kolom9_433'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir433tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 36 (434 & 435)
        public function update_isian434_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_434'),
                        'kolom2' => $this->input->post('kolom2_434'),
                        'kolom3' => $this->input->post('kolom3_434'),
                        'kolom4' => $this->input->post('kolom4_434'),
                        'kolom5' => $this->input->post('kolom5_434'),
                        'kolom6' => $this->input->post('kolom6_434'),
                        'kolom7' => $this->input->post('kolom7_434'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id434')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir434tabel'),
                        'kolom1' => $this->input->post('kolom1_434'),
                        'kolom2' => $this->input->post('kolom2_434'),
                        'kolom3' => $this->input->post('kolom3_434'),
                        'kolom4' => $this->input->post('kolom4_434'),
                        'kolom5' => $this->input->post('kolom5_434'),
                        'kolom6' => $this->input->post('kolom6_434'),
                        'kolom7' => $this->input->post('kolom7_434'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir434tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 37 (434 & 435)
        public function update_isian435_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_435'),
                        'kolom2' => $this->input->post('kolom2_435'),
                        'kolom3' => $this->input->post('kolom3_435'),
                        'kolom4' => $this->input->post('kolom4_435'),
                        'kolom5' => $this->input->post('kolom5_435'),
                        'kolom6' => $this->input->post('kolom6_435'),
                        'kolom7' => $this->input->post('kolom7_435'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id435')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir435tabel'),
                        'kolom1' => $this->input->post('kolom1_435'),
                        'kolom2' => $this->input->post('kolom2_435'),
                        'kolom3' => $this->input->post('kolom3_435'),
                        'kolom4' => $this->input->post('kolom4_435'),
                        'kolom5' => $this->input->post('kolom5_435'),
                        'kolom6' => $this->input->post('kolom6_435'),
                        'kolom7' => $this->input->post('kolom7_435'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir435tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 38
        public function update_isian44_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_44'),
                        'kolom2' => $this->input->post('kolom2_44'),
                        'kolom3' => $this->input->post('kolom3_44'),
                        'kolom4' => $this->input->post('kolom4_44'),
                        'kolom5' => $this->input->post('kolom5_44'),
                        'kolom6' => $this->input->post('kolom6_44'),
                        'kolom7' => $this->input->post('kolom7_44'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id44')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir44tabel'),
                        'kolom1' => $this->input->post('kolom1_44'),
                        'kolom2' => $this->input->post('kolom2_44'),
                        'kolom3' => $this->input->post('kolom3_44'),
                        'kolom4' => $this->input->post('kolom4_44'),
                        'kolom5' => $this->input->post('kolom5_44'),
                        'kolom6' => $this->input->post('kolom6_44'),
                        'kolom7' => $this->input->post('kolom7_44'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir44tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 39 40
        public function update_isian442_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_442'),
                        'kolom2' => $this->input->post('kolom2_442'),
                        'kolom3' => $this->input->post('kolom3_442'),
                        'kolom4' => $this->input->post('kolom4_442'),
                        'kolom5' => $this->input->post('kolom5_442'),
                        'kolom6' => $this->input->post('kolom6_442'),
                        'kolom7' => $this->input->post('kolom7_442'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id442')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir442tabel'),
                        'kolom1' => $this->input->post('kolom1_442'),
                        'kolom2' => $this->input->post('kolom2_442'),
                        'kolom3' => $this->input->post('kolom3_442'),
                        'kolom4' => $this->input->post('kolom4_442'),
                        'kolom5' => $this->input->post('kolom5_442'),
                        'kolom6' => $this->input->post('kolom6_442'),
                        'kolom7' => $this->input->post('kolom7_442'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir442tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 41
        public function update_isian452_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id452')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir452tabel'),
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir452tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 42
        public function update_isian451_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
                        'kolom4' => $this->input->post('kolom4_451'),
                        'kolom5' => $this->input->post('kolom5_451'),
                        'kolom6' => $this->input->post('kolom6_451'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id451')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir451tabel'),
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
                        'kolom4' => $this->input->post('kolom4_451'),
                        'kolom5' => $this->input->post('kolom5_451'),
                        'kolom6' => $this->input->post('kolom6_451'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir451tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 43
        public function update_isian453_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_453'),
                        'kolom2' => $this->input->post('kolom2_453'),
                        'kolom3' => $this->input->post('kolom3_453'),
                        'kolom4' => $this->input->post('kolom4_453'),
                        'kolom5' => $this->input->post('kolom5_453'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id453')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir453tabel'),
                        'kolom1' => $this->input->post('kolom1_453'),
                        'kolom2' => $this->input->post('kolom2_453'),
                        'kolom3' => $this->input->post('kolom3_453'),
                        'kolom4' => $this->input->post('kolom4_453'),
                        'kolom5' => $this->input->post('kolom5_453'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir453tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function update_isian4541_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_4541'),
                        'kolom2' => $this->input->post('kolom2_4541'),
                        'kolom3' => $this->input->post('kolom3_4541'),
                        'kolom4' => $this->input->post('kolom4_4541'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id4541')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir4541tabel'),
                        'kolom1' => $this->input->post('kolom1_4541'),
                        'kolom2' => $this->input->post('kolom2_4541'),
                        'kolom3' => $this->input->post('kolom3_4541'),
                        'kolom4' => $this->input->post('kolom4_4541'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir4541tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function update_isian4542_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_4542'),
                        'kolom2' => $this->input->post('kolom2_4542'),
                        'kolom3' => $this->input->post('kolom3_4542'),
                        'kolom4' => $this->input->post('kolom4_4542'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id4542')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir4542tabel'),
                        'kolom1' => $this->input->post('kolom1_4542'),
                        'kolom2' => $this->input->post('kolom2_4542'),
                        'kolom3' => $this->input->post('kolom3_4542'),
                        'kolom4' => $this->input->post('kolom4_4542'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir4542tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function update_isian4543_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_4543'),
                        'kolom2' => $this->input->post('kolom2_4543'),
                        'kolom3' => $this->input->post('kolom3_4543'),
                        'kolom4' => $this->input->post('kolom4_4543'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id4543')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir4543tabel'),
                        'kolom1' => $this->input->post('kolom1_4543'),
                        'kolom2' => $this->input->post('kolom2_4543'),
                        'kolom3' => $this->input->post('kolom3_4543'),
                        'kolom4' => $this->input->post('kolom4_4543'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir4543tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 45
        public function update_isian455_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_455'),
                        'kolom2' => $this->input->post('kolom2_455'),
                        'kolom3' => $this->input->post('kolom3_455'),
                        'kolom4' => $this->input->post('kolom4_455'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id455')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir455tabel'),
                        'kolom1' => $this->input->post('kolom1_455'),
                        'kolom2' => $this->input->post('kolom2_455'),
                        'kolom3' => $this->input->post('kolom3_455'),
                        'kolom4' => $this->input->post('kolom4_455'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir455tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 46 47 48
        public function update_isian461_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_461'),
                        'kolom2' => $this->input->post('kolom2_461'),
                        'kolom3' => $this->input->post('kolom3_461'),
                        'kolom4' => $this->input->post('kolom4_461'),
                        'kolom5' => $this->input->post('kolom5_461'),
                        'kolom6' => $this->input->post('kolom6_461'),
                        'kolom7' => $this->input->post('kolom7_461'),
                        'kolom8' => $this->input->post('kolom8_461'),
                        'kolom9' => $this->input->post('kolom9_461'),
                        'kolom10' => $this->input->post('kolom10_461'),
                        // 'kolom11' => $this->input->post('kolom11_461'),
                        // 'kolom12' => $this->input->post('kolom12_461'),
                        // 'kolom13' => $this->input->post('kolom13_461'),
                        // 'kolom14' => $this->input->post('kolom14_461'),
                        // 'kolom15' => $this->input->post('kolom15_461'),
                        // 'kolom16' => $this->input->post('kolom16_461'),
                        // 'kolom17' => $this->input->post('kolom17_461'),
                        // 'kolom18' => $this->input->post('kolom18_461'),
                        // 'kolom19' => $this->input->post('kolom19_461'),
                        // 'kolom20' => $this->input->post('kolom20_461'),
                        // 'kolom21' => $this->input->post('kolom21_461'),
                        // 'kolom22' => $this->input->post('kolom22_461'),
                        // 'kolom23' => $this->input->post('kolom23_461'),
                        // 'kolom24' => $this->input->post('kolom24_461'),
                        // 'kolom25' => $this->input->post('kolom25_461'),
                        // 'kolom26' => $this->input->post('kolom26_461'),
                        // 'kolom27' => $this->input->post('kolom27_461'),
                        // 'kolom28' => $this->input->post('kolom28_461'),
                        // 'kolom29' => $this->input->post('kolom29_461'),
                        // 'kolom30' => $this->input->post('kolom30_461'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id461')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir461tabel'),
                        'kolom1' => $this->input->post('kolom1_461'),
                        'kolom2' => $this->input->post('kolom2_461'),
                        'kolom3' => $this->input->post('kolom3_461'),
                        'kolom4' => $this->input->post('kolom4_461'),
                        'kolom5' => $this->input->post('kolom5_461'),
                        'kolom6' => $this->input->post('kolom6_461'),
                        'kolom7' => $this->input->post('kolom7_461'),
                        'kolom8' => $this->input->post('kolom8_461'),
                        'kolom9' => $this->input->post('kolom9_461'),
                        'kolom10' => $this->input->post('kolom10_461'),
                        // 'kolom11' => $this->input->post('kolom11_461'),
                        // 'kolom12' => $this->input->post('kolom12_461'),
                        // 'kolom13' => $this->input->post('kolom13_461'),
                        // 'kolom14' => $this->input->post('kolom14_461'),
                        // 'kolom15' => $this->input->post('kolom15_461'),
                        // 'kolom16' => $this->input->post('kolom16_461'),
                        // 'kolom17' => $this->input->post('kolom17_461'),
                        // 'kolom18' => $this->input->post('kolom18_461'),
                        // 'kolom19' => $this->input->post('kolom19_461'),
                        // 'kolom20' => $this->input->post('kolom20_461'),
                        // 'kolom21' => $this->input->post('kolom21_461'),
                        // 'kolom22' => $this->input->post('kolom22_461'),
                        // 'kolom23' => $this->input->post('kolom23_461'),
                        // 'kolom24' => $this->input->post('kolom24_461'),
                        // 'kolom25' => $this->input->post('kolom25_461'),
                        // 'kolom26' => $this->input->post('kolom26_461'),
                        // 'kolom27' => $this->input->post('kolom27_461'),
                        // 'kolom28' => $this->input->post('kolom28_461'),
                        // 'kolom29' => $this->input->post('kolom29_461'),
                        // 'kolom30' => $this->input->post('kolom30_461'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir461tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian462_buku()
        {
            $last_version = $this->input->post('version_no462');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir462'),
                        'kolom1' => $this->input->post('kolom1_462'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id462')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir462'),
                        'kolom1' => $this->input->post('kolom1_462'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at462')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir462'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian511_buku()
        {
            $last_version = $this->input->post('version_no511');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir511'),
                        'kolom1' => $this->input->post('kolom1_511'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id511')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir511'),
                        'kolom1' => $this->input->post('kolom1_511'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at511')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir511'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian5121_buku()
        {
            $last_version = $this->input->post('version_no5121');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir5121'),
                        'kolom1' => $this->input->post('kolom1_5121'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id5121')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir5121'),
                        'kolom1' => $this->input->post('kolom1_5121'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at5121')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir5121'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function update_isian5122_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_5122'),
                        'kolom2' => $this->input->post('kolom2_5122'),
                        'kolom3' => $this->input->post('kolom3_5122'),
                        'kolom4' => $this->input->post('kolom4_5122'),
                        'kolom5' => $this->input->post('kolom5_5122'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id5122')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir5122tabel'),
                        'kolom1' => $this->input->post('kolom1_5122'),
                        'kolom2' => $this->input->post('kolom2_5122'),
                        'kolom3' => $this->input->post('kolom3_5122'),
                        'kolom4' => $this->input->post('kolom4_5122'),
                        'kolom5' => $this->input->post('kolom5_5122'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir5122tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian513_buku()
        {
            $last_version = $this->input->post('version_no513');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir513'),
                        'kolom1' => $this->input->post('kolom1_513'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id513')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir513'),
                        'kolom1' => $this->input->post('kolom1_513'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at513')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir513'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian521_buku()
        {
            $last_version = $this->input->post('version_no521');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir521'),
                        'kolom1' => $this->input->post('kolom1_521'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id521')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir521'),
                        'kolom1' => $this->input->post('kolom1_521'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at521')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir521'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian522_buku()
        {
            $last_version = $this->input->post('version_no522');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir522'),
                        'kolom1' => $this->input->post('kolom1_522'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id522')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir522'),
                        'kolom1' => $this->input->post('kolom1_522'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at522')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir522'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian523_buku()
        {
            $last_version = $this->input->post('version_no523');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir523'),
                        'kolom1' => $this->input->post('kolom1_523'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id523')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir523'),
                        'kolom1' => $this->input->post('kolom1_523'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at523')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir523'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian524_buku()
        {
            $last_version = $this->input->post('version_no524');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir524'),
                        'kolom1' => $this->input->post('kolom1_524'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id524')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir524'),
                        'kolom1' => $this->input->post('kolom1_524'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at524')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir524'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian525_buku()
        {
            $last_version = $this->input->post('version_no525');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir525'),
                        'kolom1' => $this->input->post('kolom1_525'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id525')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir525'),
                        'kolom1' => $this->input->post('kolom1_525'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at525')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir525'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian526_buku()
        {
            $last_version = $this->input->post('version_no526');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir526'),
                        'kolom1' => $this->input->post('kolom1_526'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id526')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir526'),
                        'kolom1' => $this->input->post('kolom1_526'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at526')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir526'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian527_buku()
        {
            $last_version = $this->input->post('version_no527');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir527'),
                        'kolom1' => $this->input->post('kolom1_527'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id527')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir527'),
                        'kolom1' => $this->input->post('kolom1_527'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at527')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir527'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian531_buku()
        {
            $last_version = $this->input->post('version_no531');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir531'),
                        'kolom1' => $this->input->post('kolom1_531'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id531')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir531'),
                        'kolom1' => $this->input->post('kolom1_531'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at531')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir531'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian532_buku()
        {
            $last_version = $this->input->post('version_no532');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir532'),
                        'kolom1' => $this->input->post('kolom1_532'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id532')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir532'),
                        'kolom1' => $this->input->post('kolom1_532'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at532')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir532'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian541_buku()
        {
            $last_version = $this->input->post('version_no541');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir541'),
                        'kolom1' => $this->input->post('kolom1_541'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id541')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir541'),
                        'kolom1' => $this->input->post('kolom1_541'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at541')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir541'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function update_isian542_buku()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_542'),
                        'kolom2' => $this->input->post('kolom2_542'),
                        'kolom3' => $this->input->post('kolom3_542'),
                        'kolom4' => $this->input->post('kolom4_542'),
                        'kolom5' => $this->input->post('kolom5_542'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id542')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir542tabel'),
                        'kolom1' => $this->input->post('kolom1_542'),
                        'kolom2' => $this->input->post('kolom2_542'),
                        'kolom3' => $this->input->post('kolom3_542'),
                        'kolom4' => $this->input->post('kolom4_542'),
                        'kolom5' => $this->input->post('kolom5_542'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir542tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian543_buku()
        {
            $last_version = $this->input->post('version_no543');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir543'),
                        'kolom1' => $this->input->post('kolom1_543'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id543')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir543'),
                        'kolom1' => $this->input->post('kolom1_543'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at543')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir543'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian551_buku()
        {
            $last_version = $this->input->post('version_no551');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir551'),
                        'kolom1' => $this->input->post('kolom1_551'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id551')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir551'),
                        'kolom1' => $this->input->post('kolom1_551'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at551')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir551'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian552_buku()
        {
            $last_version = $this->input->post('version_no552');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir552'),
                        'kolom1' => $this->input->post('kolom1_552'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id552')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir552'),
                        'kolom1' => $this->input->post('kolom1_552'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at552')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir552'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian553_buku()
        {
            $last_version = $this->input->post('version_no553');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir553'),
                        'kolom1' => $this->input->post('kolom1_553'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id553')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir553'),
                        'kolom1' => $this->input->post('kolom1_553'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at553')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir553'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian554_buku()
        {
            $last_version = $this->input->post('version_no554');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir554'),
                        'kolom1' => $this->input->post('kolom1_554'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id554')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir554'),
                        'kolom1' => $this->input->post('kolom1_554'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at554')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir554'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian561_buku()
        {
            $last_version = $this->input->post('version_no561');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir561'),
                        'kolom1' => $this->input->post('kolom1_561'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id561')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir561'),
                        'kolom1' => $this->input->post('kolom1_561'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at561')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir561'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian562_buku()
        {
            $last_version = $this->input->post('version_no562');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir562'),
                        'kolom1' => $this->input->post('kolom1_562'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id562')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir562'),
                        'kolom1' => $this->input->post('kolom1_562'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at562')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir562'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian563_buku()
        {
            $last_version = $this->input->post('version_no563');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir563'),
                        'kolom1' => $this->input->post('kolom1_563'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id563')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir563'),
                        'kolom1' => $this->input->post('kolom1_563'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at563')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir563'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian564_buku()
        {
            $last_version = $this->input->post('version_no564');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir564'),
                        'kolom1' => $this->input->post('kolom1_564'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id564')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir564'),
                        'kolom1' => $this->input->post('kolom1_564'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at564')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir564'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian61_buku()
        {
            $last_version = $this->input->post('version_no61');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir61'),
                        'kolom1' => $this->input->post('kolom1_61'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id61')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir61'),
                        'kolom1' => $this->input->post('kolom1_61'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at61')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir61'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
// 79
        public function update_isian622_buku()
        {
            $last_version = $this->input->post('version_no622');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_622'),
                        'kolom2' => $this->input->post('kolom2_622'),
                        'kolom3' => $this->input->post('kolom3_622'),
                        'kolom4' => $this->input->post('kolom4_622'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id622')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir622tabel'),
                        'kolom1' => $this->input->post('kolom1_622'),
                        'kolom2' => $this->input->post('kolom2_622'),
                        'kolom3' => $this->input->post('kolom3_622'),
                        'kolom4' => $this->input->post('kolom4_622'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir622tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 80
        public function update_isian623_buku()
        {
            $last_version = $this->input->post('version_no623');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_623'),
                        'kolom2' => $this->input->post('kolom2_623'),
                        'kolom3' => $this->input->post('kolom3_623'),
                        'kolom4' => $this->input->post('kolom4_623'),
                        'kolom5' => $this->input->post('kolom5_623'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id623')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir623tabel'),
                        'kolom1' => $this->input->post('kolom1_623'),
                        'kolom2' => $this->input->post('kolom2_623'),
                        'kolom3' => $this->input->post('kolom3_623'),
                        'kolom4' => $this->input->post('kolom4_623'),
                        'kolom5' => $this->input->post('kolom5_623'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir623tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 80
        public function update_isian624_buku()
        {
            $last_version = $this->input->post('version_no624');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_624'),
                        'kolom2' => $this->input->post('kolom2_624'),
                        'kolom3' => $this->input->post('kolom3_624'),
                        'kolom4' => $this->input->post('kolom4_624'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id624')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir624tabel'),
                        'kolom1' => $this->input->post('kolom1_624'),
                        'kolom2' => $this->input->post('kolom2_624'),
                        'kolom3' => $this->input->post('kolom3_624'),
                        'kolom4' => $this->input->post('kolom4_624'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir624tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian632_buku()
        {
            $last_version = $this->input->post('version_no632');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir632'),
                        'kolom1' => $this->input->post('kolom1_632'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id632')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir632'),
                        'kolom1' => $this->input->post('kolom1_632'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at632')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir632'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian651_buku()
        {
            $last_version = $this->input->post('version_no651');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir651'),
                        'kolom1' => $this->input->post('kolom1_651'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id651')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir651'),
                        'kolom1' => $this->input->post('kolom1_651'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at651')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir651'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
// 93
        public function update_isian711_buku()
        {
            $last_version = $this->input->post('version_no711');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_711'),
                        'kolom2' => $this->input->post('kolom2_711'),
                        'kolom3' => $this->input->post('kolom3_711'),
                        'kolom4' => $this->input->post('kolom4_711'),
                        'kolom5' => $this->input->post('kolom5_711'),
                        'kolom6' => $this->input->post('kolom6_711'),
                        'kolom7' => $this->input->post('kolom7_711'),
                        'kolom8' => $this->input->post('kolom8_711'),
                        'kolom9' => $this->input->post('kolom9_711'),
                        'kolom10' => $this->input->post('kolom10_711'),
                        'kolom11' => $this->input->post('kolom11_711'),
                        'kolom12' => $this->input->post('kolom12_711'),
                        'kolom13' => $this->input->post('kolom13_711'),
                        'kolom14' => $this->input->post('kolom14_711'),
                        'kolom15' => $this->input->post('kolom15_711'),
                        'kolom16' => $this->input->post('kolom16_711'),
                        'kolom17' => $this->input->post('kolom17_711'),
                        'kolom18' => $this->input->post('kolom18_711'),
                        'kolom19' => $this->input->post('kolom19_711'),
                        'kolom20' => $this->input->post('kolom20_711'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id711')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir711tabel'),
                        'kolom1' => $this->input->post('kolom1_711'),
                        'kolom2' => $this->input->post('kolom2_711'),
                        'kolom3' => $this->input->post('kolom3_711'),
                        'kolom4' => $this->input->post('kolom4_711'),
                        'kolom5' => $this->input->post('kolom5_711'),
                        'kolom6' => $this->input->post('kolom6_711'),
                        'kolom7' => $this->input->post('kolom7_711'),
                        'kolom8' => $this->input->post('kolom8_711'),
                        'kolom9' => $this->input->post('kolom9_711'),
                        'kolom10' => $this->input->post('kolom10_711'),
                        'kolom11' => $this->input->post('kolom11_711'),
                        'kolom12' => $this->input->post('kolom12_711'),
                        'kolom13' => $this->input->post('kolom13_711'),
                        'kolom14' => $this->input->post('kolom14_711'),
                        'kolom15' => $this->input->post('kolom15_711'),
                        'kolom16' => $this->input->post('kolom16_711'),
                        'kolom17' => $this->input->post('kolom17_711'),
                        'kolom18' => $this->input->post('kolom18_711'),
                        'kolom19' => $this->input->post('kolom19_711'),
                        'kolom20' => $this->input->post('kolom20_711'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir711tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian712_buku()
        {
            $last_version = $this->input->post('version_no712');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir712'),
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id712')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir712'),
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at712')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir712'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian713_buku()
        {
            $last_version = $this->input->post('version_no713');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir713'),
                        'kolom1' => $this->input->post('kolom1_713'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id713')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir713'),
                        'kolom1' => $this->input->post('kolom1_713'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at713')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir713'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
// 93
        public function update_isian714_buku()
        {
            $last_version = $this->input->post('version_no714');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_714'),
                        'kolom2' => $this->input->post('kolom2_714'),
                        'kolom3' => $this->input->post('kolom3_714'),
                        'kolom4' => $this->input->post('kolom4_714'),
                        'kolom5' => $this->input->post('kolom5_714'),
                        'kolom6' => $this->input->post('kolom6_714'),
                        'kolom7' => $this->input->post('kolom7_714'),
                        'kolom8' => $this->input->post('kolom8_714'),
                        'kolom9' => $this->input->post('kolom9_714'),
                        'kolom10' => $this->input->post('kolom10_714'),
                        'kolom11' => $this->input->post('kolom11_714'),
                        'kolom12' => $this->input->post('kolom12_714'),
                        'kolom13' => $this->input->post('kolom13_714'),
                        'kolom14' => $this->input->post('kolom14_714'),
                        'kolom15' => $this->input->post('kolom15_714'),
                        'kolom16' => $this->input->post('kolom16_714'),
                        'kolom17' => $this->input->post('kolom17_714'),
                        'kolom18' => $this->input->post('kolom18_714'),
                        'kolom19' => $this->input->post('kolom19_714'),
                        'kolom20' => $this->input->post('kolom20_714'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id714')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir714tabel'),
                        'kolom1' => $this->input->post('kolom1_714'),
                        'kolom2' => $this->input->post('kolom2_714'),
                        'kolom3' => $this->input->post('kolom3_714'),
                        'kolom4' => $this->input->post('kolom4_714'),
                        'kolom5' => $this->input->post('kolom5_714'),
                        'kolom6' => $this->input->post('kolom6_714'),
                        'kolom7' => $this->input->post('kolom7_714'),
                        'kolom8' => $this->input->post('kolom8_714'),
                        'kolom9' => $this->input->post('kolom9_714'),
                        'kolom10' => $this->input->post('kolom10_714'),
                        'kolom11' => $this->input->post('kolom11_714'),
                        'kolom12' => $this->input->post('kolom12_714'),
                        'kolom13' => $this->input->post('kolom13_714'),
                        'kolom14' => $this->input->post('kolom14_714'),
                        'kolom15' => $this->input->post('kolom15_714'),
                        'kolom16' => $this->input->post('kolom16_714'),
                        'kolom17' => $this->input->post('kolom17_714'),
                        'kolom18' => $this->input->post('kolom18_714'),
                        'kolom19' => $this->input->post('kolom19_714'),
                        'kolom20' => $this->input->post('kolom20_714'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir714tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
// 95
        public function update_isian715_buku()
        {
            $last_version = $this->input->post('version_no715');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_715'),
                        'kolom2' => $this->input->post('kolom2_715'),
                        'kolom3' => $this->input->post('kolom3_715'),
                        'kolom4' => $this->input->post('kolom4_715'),
                        'kolom5' => $this->input->post('kolom5_715'),
                        'kolom6' => $this->input->post('kolom6_715'),
                        'kolom7' => $this->input->post('kolom7_715'),
                        'kolom8' => $this->input->post('kolom8_715'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id715')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir715tabel'),
                        'kolom1' => $this->input->post('kolom1_715'),
                        'kolom2' => $this->input->post('kolom2_715'),
                        'kolom3' => $this->input->post('kolom3_715'),
                        'kolom4' => $this->input->post('kolom4_715'),
                        'kolom5' => $this->input->post('kolom5_715'),
                        'kolom6' => $this->input->post('kolom6_715'),
                        'kolom7' => $this->input->post('kolom7_715'),
                        'kolom8' => $this->input->post('kolom8_715'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir715tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 96
        public function update_isian717_buku()
        {
            $last_version = $this->input->post('version_no717');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_717'),
                        'kolom2' => $this->input->post('kolom2_717'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id717')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir717tabel'),
                        'kolom1' => $this->input->post('kolom1_717'),
                        'kolom2' => $this->input->post('kolom2_717'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir717tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 97
        public function update_isian721_buku()
        {
            $last_version = $this->input->post('version_no721');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_721'),
                        'kolom2' => $this->input->post('kolom2_721'),
                        'kolom3' => $this->input->post('kolom3_721'),
                        'kolom4' => $this->input->post('kolom4_721'),
                        'kolom5' => $this->input->post('kolom5_721'),
                        'kolom6' => $this->input->post('kolom6_721'),
                        'kolom7' => $this->input->post('kolom7_721'),
                        'kolom8' => $this->input->post('kolom8_721'),
                        'kolom9' => $this->input->post('kolom9_721'),
                        'kolom10' => $this->input->post('kolom10_721'),
                        'kolom11' => $this->input->post('kolom11_721'),
                        'kolom12' => $this->input->post('kolom12_721'),
                        'kolom13' => $this->input->post('kolom13_721'),
                        'kolom14' => $this->input->post('kolom14_721'),
                        'kolom15' => $this->input->post('kolom15_721'),
                        'kolom16' => $this->input->post('kolom16_721'),
                        'kolom17' => $this->input->post('kolom17_721'),
                        'kolom18' => $this->input->post('kolom18_721'),
                        'kolom19' => $this->input->post('kolom19_721'),
                        'kolom20' => $this->input->post('kolom20_721'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id721')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir721tabel'),
                        'kolom1' => $this->input->post('kolom1_721'),
                        'kolom2' => $this->input->post('kolom2_721'),
                        'kolom3' => $this->input->post('kolom3_721'),
                        'kolom4' => $this->input->post('kolom4_721'),
                        'kolom5' => $this->input->post('kolom5_721'),
                        'kolom6' => $this->input->post('kolom6_721'),
                        'kolom7' => $this->input->post('kolom7_721'),
                        'kolom8' => $this->input->post('kolom8_721'),
                        'kolom9' => $this->input->post('kolom9_721'),
                        'kolom10' => $this->input->post('kolom10_721'),
                        'kolom11' => $this->input->post('kolom11_721'),
                        'kolom12' => $this->input->post('kolom12_721'),
                        'kolom13' => $this->input->post('kolom13_721'),
                        'kolom14' => $this->input->post('kolom14_721'),
                        'kolom15' => $this->input->post('kolom15_721'),
                        'kolom16' => $this->input->post('kolom16_721'),
                        'kolom17' => $this->input->post('kolom17_721'),
                        'kolom18' => $this->input->post('kolom18_721'),
                        'kolom19' => $this->input->post('kolom19_721'),
                        'kolom20' => $this->input->post('kolom20_721'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir721tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }
// 99
        public function update_isian731_buku()
        {
            $last_version = $this->input->post('version_no731');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_731'),
                        'kolom2' => $this->input->post('kolom2_731'),
                        'kolom3' => $this->input->post('kolom3_731'),
                        'kolom4' => $this->input->post('kolom4_731'),
                        'kolom5' => $this->input->post('kolom5_731'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id731')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir731tabel'),
                        'kolom1' => $this->input->post('kolom1_731'),
                        'kolom2' => $this->input->post('kolom2_731'),
                        'kolom3' => $this->input->post('kolom3_731'),
                        'kolom4' => $this->input->post('kolom4_731'),
                        'kolom5' => $this->input->post('kolom5_731'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir731tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 100
        public function update_isian732_buku()
        {
            $last_version = $this->input->post('version_no732');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_732'),
                        'kolom2' => $this->input->post('kolom2_732'),
                        'kolom3' => $this->input->post('kolom3_732'),
                        'kolom4' => $this->input->post('kolom4_732'),
                        'kolom5' => $this->input->post('kolom5_732'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom_buku', $data, array('id' => $this->input->post('id732')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir732tabel'),
                        'kolom1' => $this->input->post('kolom1_732'),
                        'kolom2' => $this->input->post('kolom2_732'),
                        'kolom3' => $this->input->post('kolom3_732'),
                        'kolom4' => $this->input->post('kolom4_732'),
                        'kolom5' => $this->input->post('kolom5_732'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir732tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }



        // 

        // UPDATE ISIAN BUTIR BORANG SESUAI DENGAN FORMAT PENILAIAN EXCEL BORANG 3A 3B

        // 

        // 1
        public function update_isian11()
        {
            $last_version = $this->input->post('version_no11');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir11'),
                        'kolom1' => $this->input->post('kolom1_11'),
                        'kolom2' => $this->input->post('kolom2_11'),
                        'kolom3' => $this->input->post('kolom3_11'),
                        'kolom4' => $this->input->post('kolom4_11'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_4kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id11')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir11'),
                        'kolom1' => $this->input->post('kolom1_11'),
                        'kolom2' => $this->input->post('kolom2_11'),
                        'kolom3' => $this->input->post('kolom3_11'),
                        'kolom4' => $this->input->post('kolom4_11'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at11')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_4kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir11'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 2
        public function update_isian11b()
        {
            $last_version = $this->input->post('version_no11b');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir11b'),
                        'kolom1' => $this->input->post('kolom1_11b'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id11b')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir11b'),
                        'kolom1' => $this->input->post('kolom1_11b'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at11b')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir11b'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 3
        public function update_isian12()
        {
            $last_version = $this->input->post('version_no12');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id12')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at12')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir12'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 4
        public function update_isian21()
        {
            $last_version = $this->input->post('version_no21');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'kolom2' => $this->input->post('kolom2_21'),
                        'kolom3' => $this->input->post('kolom3_21'),
                        'kolom4' => $this->input->post('kolom4_21'),
                        'kolom5' => $this->input->post('kolom5_21'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id21')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'kolom2' => $this->input->post('kolom2_21'),
                        'kolom3' => $this->input->post('kolom3_21'),
                        'kolom4' => $this->input->post('kolom4_21'),
                        'kolom5' => $this->input->post('kolom5_21'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at21')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir21'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 5
        public function update_isian22()
        {
            $last_version = $this->input->post('version_no22');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'kolom2' => $this->input->post('kolom2_22'),
                        'kolom3' => $this->input->post('kolom3_22'),
                        'kolom4' => $this->input->post('kolom4_22'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id22')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'kolom2' => $this->input->post('kolom2_22'),
                        'kolom3' => $this->input->post('kolom3_22'),
                        'kolom4' => $this->input->post('kolom4_22'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at22')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir22'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 6
        public function update_isian23()
        {
            $last_version = $this->input->post('version_no23');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id23')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at23')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir23'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 7
        public function update_isian24()
        {
            $last_version = $this->input->post('version_no24');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id24')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at24')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir24'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 8
        public function update_isian25()
        {
            $last_version = $this->input->post('version_no25');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'kolom2' => $this->input->post('kolom2_25'),
                        'kolom3' => $this->input->post('kolom3_25'),
                        'kolom4' => $this->input->post('kolom4_25'),
                        'kolom5' => $this->input->post('kolom5_25'),
                        'kolom6' => $this->input->post('kolom6_25'),
                        'kolom7' => $this->input->post('kolom7_25'),
                        'kolom8' => $this->input->post('kolom8_25'),
                        'kolom9' => $this->input->post('kolom9_25'),
                        'kolom10' => $this->input->post('kolom10_25'),
                        'kolom11' => $this->input->post('kolom11_25'),
                        'kolom12' => $this->input->post('kolom12_25'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_4kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id25')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'kolom2' => $this->input->post('kolom2_25'),
                        'kolom3' => $this->input->post('kolom3_25'),
                        'kolom4' => $this->input->post('kolom4_25'),
                        'kolom5' => $this->input->post('kolom5_25'),
                        'kolom6' => $this->input->post('kolom6_25'),
                        'kolom7' => $this->input->post('kolom7_25'),
                        'kolom8' => $this->input->post('kolom8_25'),
                        'kolom9' => $this->input->post('kolom9_25'),
                        'kolom10' => $this->input->post('kolom10_25'),
                        'kolom11' => $this->input->post('kolom11_25'),
                        'kolom12' => $this->input->post('kolom12_25'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at25')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_4kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir25'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 9
        public function update_isian26()
        {
            $last_version = $this->input->post('version_no26');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir26'),
                        'kolom1' => $this->input->post('kolom1_26'),
                        'kolom2' => $this->input->post('kolom2_26'),
                        'kolom3' => $this->input->post('kolom3_26'),
                        'kolom4' => $this->input->post('kolom4_26'),
                        'kolom5' => $this->input->post('kolom5_26'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_4kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id26')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir26'),
                        'kolom1' => $this->input->post('kolom1_26'),
                        'kolom2' => $this->input->post('kolom2_26'),
                        'kolom3' => $this->input->post('kolom3_26'),
                        'kolom4' => $this->input->post('kolom4_26'),
                        'kolom5' => $this->input->post('kolom5_26'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at26')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_4kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir26'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // public function update_isian321()
        // {
        //     $last_version = $this->input->post('version_no321');
        //     $new_version = $last_version + 1;
        //          $data = array(
        //                 'id_butir' => $this->input->post('id_butir321'),
        //                 'kolom1' => $this->input->post('kolom1_321'),
        //                 'version_no' => $new_version,
        //                 'updated_at'=> date('Y-m-d H:i:s'),
        //         );
        //         // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
        //          $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id321')));

        //          $data = array(
        //                 'id_kolom' => $this->input->post('id_butir321'),
        //                 'kolom1' => $this->input->post('kolom1_321'),
        //                 'version_no' => $new_version,
        //                 'created_at'=> date($this->input->post('created_at321')),
        //                 'updated_at'=> date('Y-m-d H:i:s'),
        //         );
        //         // $this->db->insert('isian_1kolom_version', $data);
        //          $this->db->insert('isian_16kolom_version', $data);
        //         $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
        //         $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

        //         $data = array(
        //                 'user'=> $_SESSION['name'],
        //                 'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir321'),
        //                 'created_at'=> date('Y-m-d H:i:s')
        //         );

        //         $this->db->insert('log', $data);
        // }


        // 10 11 12 13
        public function updatetabel321()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
                        'kolom5' => $this->input->post('kolom5_321'),
                        'kolom6' => $this->input->post('kolom6_321'),
                        'kolom7' => $this->input->post('kolom7_321'),
                        'kolom8' => $this->input->post('kolom8_321'),
                        'kolom9' => $this->input->post('kolom9_321'),
                        'kolom10' => $this->input->post('kolom10_321'),
                        'kolom11' => $this->input->post('kolom11_321'),
                        'kolom12' => $this->input->post('kolom12_321'),
                        'kolom13' => $this->input->post('kolom13_321'),
                        'kolom14' => $this->input->post('kolom14_321'),
                        'kolom15' => $this->input->post('kolom15_321'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id321')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir321tabel'),
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
                        'kolom5' => $this->input->post('kolom5_321'),
                        'kolom6' => $this->input->post('kolom6_321'),
                        'kolom7' => $this->input->post('kolom7_321'),
                        'kolom8' => $this->input->post('kolom8_321'),
                        'kolom9' => $this->input->post('kolom9_321'),
                        'kolom10' => $this->input->post('kolom10_321'),
                        'kolom11' => $this->input->post('kolom11_321'),
                        'kolom12' => $this->input->post('kolom12_321'),
                        'kolom13' => $this->input->post('kolom13_321'),
                        'kolom14' => $this->input->post('kolom14_321'),
                        'kolom15' => $this->input->post('kolom15_321'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir321tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 14
        public function update_isian322()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_322'),
                        'kolom2' => $this->input->post('kolom2_322'),
                        'kolom3' => $this->input->post('kolom3_322'),
                        'kolom4' => $this->input->post('kolom4_322'),
                        'kolom5' => $this->input->post('kolom5_322'),
                        'kolom6' => $this->input->post('kolom6_322'),
                        'kolom7' => $this->input->post('kolom7_322'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id322')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir322tabel'),
                        'kolom1' => $this->input->post('kolom1_322'),
                        'kolom2' => $this->input->post('kolom2_322'),
                        'kolom3' => $this->input->post('kolom3_322'),
                        'kolom4' => $this->input->post('kolom4_322'),
                        'kolom5' => $this->input->post('kolom5_322'),
                        'kolom6' => $this->input->post('kolom6_322'),
                        'kolom7' => $this->input->post('kolom7_322'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir322tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 15
        public function update_isian313()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id313')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir313tabel'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir313tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 16 17
        public function update_isian323()
        {
            $last_version = $this->input->post('version_no323');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir323'),
                        'kolom1' => $this->input->post('kolom1_323'),
                        'kolom2' => $this->input->post('kolom2_323'),
                        'kolom3' => $this->input->post('kolom3_323'),
                        'kolom4' => $this->input->post('kolom4_323'),
                        'kolom5' => $this->input->post('kolom5_323'),
                        'kolom6' => $this->input->post('kolom6_323'),
                        'kolom7' => $this->input->post('kolom7_323'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id323')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir323'),
                        'kolom1' => $this->input->post('kolom1_323'),
                        'kolom2' => $this->input->post('kolom2_323'),
                        'kolom3' => $this->input->post('kolom3_323'),
                        'kolom4' => $this->input->post('kolom4_323'),
                        'kolom5' => $this->input->post('kolom5_323'),
                        'kolom6' => $this->input->post('kolom6_323'),
                        'kolom7' => $this->input->post('kolom7_323'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at323')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir323'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 18 19
        public function update_isian32()
        {
            $last_version = $this->input->post('version_no32');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir32'),
                        'kolom1' => $this->input->post('kolom1_32'),
                        'kolom2' => $this->input->post('kolom2_32'),
                        'kolom3' => $this->input->post('kolom3_32'),
                        'kolom4' => $this->input->post('kolom4_32'),
                        'kolom5' => $this->input->post('kolom5_32'),
                        'kolom6' => $this->input->post('kolom6_32'),
                        'kolom7' => $this->input->post('kolom7_32'),
                        'kolom8' => $this->input->post('kolom8_32'),
                        'kolom9' => $this->input->post('kolom9_32'),
                        'kolom10' => $this->input->post('kolom10_32'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id32')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir32'),
                        'kolom1' => $this->input->post('kolom1_32'),
                        'kolom2' => $this->input->post('kolom2_32'),
                        'kolom3' => $this->input->post('kolom3_32'),
                        'kolom4' => $this->input->post('kolom4_32'),
                        'kolom5' => $this->input->post('kolom5_32'),
                        'kolom6' => $this->input->post('kolom6_32'),
                        'kolom7' => $this->input->post('kolom7_32'),
                        'kolom8' => $this->input->post('kolom8_32'),
                        'kolom9' => $this->input->post('kolom9_32'),
                        'kolom10' => $this->input->post('kolom10_32'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at32')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir32'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 20
        public function update_isian331()
        {
            $last_version = $this->input->post('version_no331');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir331'),
                        'kolom1' => $this->input->post('kolom1_331'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id331')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir331'),
                        'kolom1' => $this->input->post('kolom1_331'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at331')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir331'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 21 22
        public function update_isian332a()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_332'),
                        'kolom2' => $this->input->post('kolom2_332'),
                        'kolom3' => $this->input->post('kolom3_332'),
                        'kolom4' => $this->input->post('kolom4_332'),
                        'kolom5' => $this->input->post('kolom5_332'),
                        'kolom6' => $this->input->post('kolom6_332'),
                        'kolom7' => $this->input->post('kolom7_332'),
                        'kolom8' => $this->input->post('kolom8_332'),
                        'kolom9' => $this->input->post('kolom9_332'),
                        'kolom10' => $this->input->post('kolom10_332'),
                        'kolom11' => $this->input->post('kolom11_332'),
                        'kolom12' => $this->input->post('kolom12_332'),
                        'kolom13' => $this->input->post('kolom13_332'),
                        'kolom14' => $this->input->post('kolom14_332'),
                        'kolom15' => $this->input->post('kolom15_332'),
                        'kolom16' => $this->input->post('kolom16_332'),
                        'kolom17' => $this->input->post('kolom17_332'),
                        'kolom18' => $this->input->post('kolom18_332'),
                        'kolom19' => $this->input->post('kolom19_332'),
                        'kolom20' => $this->input->post('kolom20_332'),
                        'kolom21' => $this->input->post('kolom21_332'),
                        'kolom22' => $this->input->post('kolom22_332'),
                        'kolom23' => $this->input->post('kolom23_332'),
                        'kolom24' => $this->input->post('kolom24_332'),
                        'kolom25' => $this->input->post('kolom25_332'),
                        'kolom26' => $this->input->post('kolom26_332'),
                        'kolom27' => $this->input->post('kolom27_332'),
                        'kolom28' => $this->input->post('kolom28_332'),
                        'kolom29' => $this->input->post('kolom29_332'),
                        'kolom30' => $this->input->post('kolom30_332'),
                        'kolom31' => $this->input->post('kolom31_332'),
                        'kolom32' => $this->input->post('kolom32_332'),
                        'kolom33' => $this->input->post('kolom33_332'),
                        'kolom34' => $this->input->post('kolom34_332'),
                        'kolom35' => $this->input->post('kolom35_332'),
                        'kolom36' => $this->input->post('kolom36_332'),
                        'kolom37' => $this->input->post('kolom37_332'),
                        'kolom38' => $this->input->post('kolom38_332'),
                        'kolom39' => $this->input->post('kolom39_332'),
                        'kolom40' => $this->input->post('kolom40_332'),
                        'kolom41' => $this->input->post('kolom41_332'),
                        'kolom42' => $this->input->post('kolom42_332'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id332')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir332tabel'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'kolom2' => $this->input->post('kolom2_332'),
                        'kolom3' => $this->input->post('kolom3_332'),
                        'kolom4' => $this->input->post('kolom4_332'),
                        'kolom5' => $this->input->post('kolom5_332'),
                        'kolom6' => $this->input->post('kolom6_332'),
                        'kolom7' => $this->input->post('kolom7_332'),
                        'kolom8' => $this->input->post('kolom8_332'),
                        'kolom9' => $this->input->post('kolom9_332'),
                        'kolom10' => $this->input->post('kolom10_332'),
                        'kolom11' => $this->input->post('kolom11_332'),
                        'kolom12' => $this->input->post('kolom12_332'),
                        'kolom13' => $this->input->post('kolom13_332'),
                        'kolom14' => $this->input->post('kolom14_332'),
                        'kolom15' => $this->input->post('kolom15_332'),
                        'kolom16' => $this->input->post('kolom16_332'),
                        'kolom17' => $this->input->post('kolom17_332'),
                        'kolom18' => $this->input->post('kolom18_332'),
                        'kolom19' => $this->input->post('kolom19_332'),
                        'kolom20' => $this->input->post('kolom20_332'),
                        'kolom21' => $this->input->post('kolom21_332'),
                        'kolom22' => $this->input->post('kolom22_332'),
                        'kolom23' => $this->input->post('kolom23_332'),
                        'kolom24' => $this->input->post('kolom24_332'),
                        'kolom25' => $this->input->post('kolom25_332'),
                        'kolom26' => $this->input->post('kolom26_332'),
                        'kolom27' => $this->input->post('kolom27_332'),
                        'kolom28' => $this->input->post('kolom28_332'),
                        'kolom29' => $this->input->post('kolom29_332'),
                        'kolom30' => $this->input->post('kolom30_332'),
                        'kolom31' => $this->input->post('kolom31_332'),
                        'kolom32' => $this->input->post('kolom32_332'),
                        'kolom33' => $this->input->post('kolom33_332'),
                        'kolom34' => $this->input->post('kolom34_332'),
                        'kolom35' => $this->input->post('kolom35_332'),
                        'kolom36' => $this->input->post('kolom36_332'),
                        'kolom37' => $this->input->post('kolom37_332'),
                        'kolom38' => $this->input->post('kolom38_332'),
                        'kolom39' => $this->input->post('kolom39_332'),
                        'kolom40' => $this->input->post('kolom40_332'),
                        'kolom41' => $this->input->post('kolom41_332'),
                        'kolom42' => $this->input->post('kolom42_332'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir332tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 23
        public function update_isian332()
        {
            $last_version = $this->input->post('version_no332');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir332'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id332')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir332'),
                        'kolom1' => $this->input->post('kolom1_332'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at332')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir332'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 24
        public function update_isian333()
        {
            $last_version = $this->input->post('version_no333');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir333'),
                        'kolom1' => $this->input->post('kolom1_333'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id333')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir333'),
                        'kolom1' => $this->input->post('kolom1_333'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at333')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir333'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 25
        public function update_isian341()
        {
            $last_version = $this->input->post('version_no341');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'kolom2' => $this->input->post('kolom2_341'),
                        'kolom3' => $this->input->post('kolom3_341'),
                        'kolom4' => $this->input->post('kolom4_341'),
                        'kolom5' => $this->input->post('kolom5_341'),
                        'kolom6' => $this->input->post('kolom6_341'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id341')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'kolom2' => $this->input->post('kolom2_341'),
                        'kolom3' => $this->input->post('kolom3_341'),
                        'kolom4' => $this->input->post('kolom4_341'),
                        'kolom5' => $this->input->post('kolom5_341'),
                        'kolom6' => $this->input->post('kolom6_341'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at341')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir341'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 26
        public function update_isian342()
        {
            $last_version = $this->input->post('version_no342');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir342'),
                        'kolom1' => $this->input->post('kolom1_342'),
                        'kolom2' => $this->input->post('kolom2_342'),
                        'kolom3' => $this->input->post('kolom3_342'),
                        'kolom4' => $this->input->post('kolom4_342'),
                        'kolom5' => $this->input->post('kolom5_342'),
                        'kolom6' => $this->input->post('kolom6_342'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id342')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir342'),
                        'kolom1' => $this->input->post('kolom1_342'),
                        'kolom2' => $this->input->post('kolom2_342'),
                        'kolom3' => $this->input->post('kolom3_342'),
                        'kolom4' => $this->input->post('kolom4_342'),
                        'kolom5' => $this->input->post('kolom5_342'),
                        'kolom6' => $this->input->post('kolom6_342'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at342')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir342'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 27
        public function update_isian41()
        {
            $last_version = $this->input->post('version_no41');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'kolom2' => $this->input->post('kolom2_41'),
                        'kolom3' => $this->input->post('kolom3_41'),
                        'kolom4' => $this->input->post('kolom4_41'),
                        'kolom5' => $this->input->post('kolom5_41'),
                        'kolom6' => $this->input->post('kolom6_41'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id41')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'kolom2' => $this->input->post('kolom2_41'),
                        'kolom3' => $this->input->post('kolom3_41'),
                        'kolom4' => $this->input->post('kolom4_41'),
                        'kolom5' => $this->input->post('kolom5_41'),
                        'kolom6' => $this->input->post('kolom6_41'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at41')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir41'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 28
        public function update_isian421()
        {
            $last_version = $this->input->post('version_no421');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir421'),
                        'kolom1' => $this->input->post('kolom1_421'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id421')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir421'),
                        'kolom1' => $this->input->post('kolom1_421'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at421')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir421'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 29
        public function update_isian422()
        {
            $last_version = $this->input->post('version_no422');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir422'),
                        'kolom1' => $this->input->post('kolom1_422'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id422')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir422'),
                        'kolom1' => $this->input->post('kolom1_422'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at422')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir422'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 30 31 31 33
        public function update_isian431()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_431'),
                        'kolom2' => $this->input->post('kolom2_431'),
                        'kolom3' => $this->input->post('kolom3_431'),
                        'kolom4' => $this->input->post('kolom4_431'),
                        'kolom5' => $this->input->post('kolom5_431'),
                        'kolom6' => $this->input->post('kolom6_431'),
                        'kolom7' => $this->input->post('kolom7_431'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id431')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir431tabel'),
                        'kolom1' => $this->input->post('kolom1_431'),
                        'kolom2' => $this->input->post('kolom2_431'),
                        'kolom3' => $this->input->post('kolom3_431'),
                        'kolom4' => $this->input->post('kolom4_431'),
                        'kolom5' => $this->input->post('kolom5_431'),
                        'kolom6' => $this->input->post('kolom6_431'),
                        'kolom7' => $this->input->post('kolom7_431'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir431tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 34
        public function update_isian432()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_432'),
                        'kolom2' => $this->input->post('kolom2_432'),
                        'kolom3' => $this->input->post('kolom3_432'),
                        'kolom4' => $this->input->post('kolom4_432'),
                        'kolom5' => $this->input->post('kolom5_432'),
                        'kolom6' => $this->input->post('kolom6_432'),
                        'kolom7' => $this->input->post('kolom7_432'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id432')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir432tabel'),
                        'kolom1' => $this->input->post('kolom1_432'),
                        'kolom2' => $this->input->post('kolom2_432'),
                        'kolom3' => $this->input->post('kolom3_432'),
                        'kolom4' => $this->input->post('kolom4_432'),
                        'kolom5' => $this->input->post('kolom5_432'),
                        'kolom6' => $this->input->post('kolom6_432'),
                        'kolom7' => $this->input->post('kolom7_432'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir432tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 35
        public function update_isian433()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_433'),
                        'kolom2' => $this->input->post('kolom2_433'),
                        'kolom3' => $this->input->post('kolom3_433'),
                        'kolom4' => $this->input->post('kolom4_433'),
                        'kolom5' => $this->input->post('kolom5_433'),
                        'kolom6' => $this->input->post('kolom6_433'),
                        'kolom7' => $this->input->post('kolom7_433'),
                        'kolom8' => $this->input->post('kolom8_433'),
                        'kolom9' => $this->input->post('kolom9_433'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id433')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir433tabel'),
                        'kolom1' => $this->input->post('kolom1_433'),
                        'kolom2' => $this->input->post('kolom2_433'),
                        'kolom3' => $this->input->post('kolom3_433'),
                        'kolom4' => $this->input->post('kolom4_433'),
                        'kolom5' => $this->input->post('kolom5_433'),
                        'kolom6' => $this->input->post('kolom6_433'),
                        'kolom7' => $this->input->post('kolom7_433'),
                        'kolom8' => $this->input->post('kolom8_433'),
                        'kolom9' => $this->input->post('kolom9_433'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir433tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 36 (434 & 435)
        public function update_isian434()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_434'),
                        'kolom2' => $this->input->post('kolom2_434'),
                        'kolom3' => $this->input->post('kolom3_434'),
                        'kolom4' => $this->input->post('kolom4_434'),
                        'kolom5' => $this->input->post('kolom5_434'),
                        'kolom6' => $this->input->post('kolom6_434'),
                        'kolom7' => $this->input->post('kolom7_434'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id434')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir434tabel'),
                        'kolom1' => $this->input->post('kolom1_434'),
                        'kolom2' => $this->input->post('kolom2_434'),
                        'kolom3' => $this->input->post('kolom3_434'),
                        'kolom4' => $this->input->post('kolom4_434'),
                        'kolom5' => $this->input->post('kolom5_434'),
                        'kolom6' => $this->input->post('kolom6_434'),
                        'kolom7' => $this->input->post('kolom7_434'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir434tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 37 (434 & 435)
        public function update_isian435()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_435'),
                        'kolom2' => $this->input->post('kolom2_435'),
                        'kolom3' => $this->input->post('kolom3_435'),
                        'kolom4' => $this->input->post('kolom4_435'),
                        'kolom5' => $this->input->post('kolom5_435'),
                        'kolom6' => $this->input->post('kolom6_435'),
                        'kolom7' => $this->input->post('kolom7_435'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id435')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir435tabel'),
                        'kolom1' => $this->input->post('kolom1_435'),
                        'kolom2' => $this->input->post('kolom2_435'),
                        'kolom3' => $this->input->post('kolom3_435'),
                        'kolom4' => $this->input->post('kolom4_435'),
                        'kolom5' => $this->input->post('kolom5_435'),
                        'kolom6' => $this->input->post('kolom6_435'),
                        'kolom7' => $this->input->post('kolom7_435'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir435tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 38
        public function update_isian44()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_44'),
                        'kolom2' => $this->input->post('kolom2_44'),
                        'kolom3' => $this->input->post('kolom3_44'),
                        'kolom4' => $this->input->post('kolom4_44'),
                        'kolom5' => $this->input->post('kolom5_44'),
                        'kolom6' => $this->input->post('kolom6_44'),
                        'kolom7' => $this->input->post('kolom7_44'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id44')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir44tabel'),
                        'kolom1' => $this->input->post('kolom1_44'),
                        'kolom2' => $this->input->post('kolom2_44'),
                        'kolom3' => $this->input->post('kolom3_44'),
                        'kolom4' => $this->input->post('kolom4_44'),
                        'kolom5' => $this->input->post('kolom5_44'),
                        'kolom6' => $this->input->post('kolom6_44'),
                        'kolom7' => $this->input->post('kolom7_44'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir44tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 39 40
        public function update_isian442()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_442'),
                        'kolom2' => $this->input->post('kolom2_442'),
                        'kolom3' => $this->input->post('kolom3_442'),
                        'kolom4' => $this->input->post('kolom4_442'),
                        'kolom5' => $this->input->post('kolom5_442'),
                        'kolom6' => $this->input->post('kolom6_442'),
                        'kolom7' => $this->input->post('kolom7_442'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id442')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir442tabel'),
                        'kolom1' => $this->input->post('kolom1_442'),
                        'kolom2' => $this->input->post('kolom2_442'),
                        'kolom3' => $this->input->post('kolom3_442'),
                        'kolom4' => $this->input->post('kolom4_442'),
                        'kolom5' => $this->input->post('kolom5_442'),
                        'kolom6' => $this->input->post('kolom6_442'),
                        'kolom7' => $this->input->post('kolom7_442'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir442tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 41
        public function update_isian452()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id452')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir452tabel'),
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir452tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 42
        public function update_isian451()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
                        'kolom4' => $this->input->post('kolom4_451'),
                        'kolom5' => $this->input->post('kolom5_451'),
                        'kolom6' => $this->input->post('kolom6_451'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id451')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir451tabel'),
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
                        'kolom4' => $this->input->post('kolom4_451'),
                        'kolom5' => $this->input->post('kolom5_451'),
                        'kolom6' => $this->input->post('kolom6_451'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir451tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 43
        public function update_isian453()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_453'),
                        'kolom2' => $this->input->post('kolom2_453'),
                        'kolom3' => $this->input->post('kolom3_453'),
                        'kolom4' => $this->input->post('kolom4_453'),
                        'kolom5' => $this->input->post('kolom5_453'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id453')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir453tabel'),
                        'kolom1' => $this->input->post('kolom1_453'),
                        'kolom2' => $this->input->post('kolom2_453'),
                        'kolom3' => $this->input->post('kolom3_453'),
                        'kolom4' => $this->input->post('kolom4_453'),
                        'kolom5' => $this->input->post('kolom5_453'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir453tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 44
        public function update_isian454()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_454'),
                        'kolom2' => $this->input->post('kolom2_454'),
                        'kolom3' => $this->input->post('kolom3_454'),
                        'kolom4' => $this->input->post('kolom4_454'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id454')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir454tabel'),
                        'kolom1' => $this->input->post('kolom1_454'),
                        'kolom2' => $this->input->post('kolom2_454'),
                        'kolom3' => $this->input->post('kolom3_454'),
                        'kolom4' => $this->input->post('kolom4_454'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir454tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 45
        public function update_isian455()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_455'),
                        'kolom2' => $this->input->post('kolom2_455'),
                        'kolom3' => $this->input->post('kolom3_455'),
                        'kolom4' => $this->input->post('kolom4_455'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id455')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir455tabel'),
                        'kolom1' => $this->input->post('kolom1_455'),
                        'kolom2' => $this->input->post('kolom2_455'),
                        'kolom3' => $this->input->post('kolom3_455'),
                        'kolom4' => $this->input->post('kolom4_455'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir455tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 46 47 48
        public function update_isian461()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_461'),
                        'kolom2' => $this->input->post('kolom2_461'),
                        'kolom3' => $this->input->post('kolom3_461'),
                        'kolom4' => $this->input->post('kolom4_461'),
                        'kolom5' => $this->input->post('kolom5_461'),
                        'kolom6' => $this->input->post('kolom6_461'),
                        'kolom7' => $this->input->post('kolom7_461'),
                        'kolom8' => $this->input->post('kolom8_461'),
                        'kolom9' => $this->input->post('kolom9_461'),
                        'kolom10' => $this->input->post('kolom10_461'),
                        // 'kolom11' => $this->input->post('kolom11_461'),
                        // 'kolom12' => $this->input->post('kolom12_461'),
                        // 'kolom13' => $this->input->post('kolom13_461'),
                        // 'kolom14' => $this->input->post('kolom14_461'),
                        // 'kolom15' => $this->input->post('kolom15_461'),
                        // 'kolom16' => $this->input->post('kolom16_461'),
                        // 'kolom17' => $this->input->post('kolom17_461'),
                        // 'kolom18' => $this->input->post('kolom18_461'),
                        // 'kolom19' => $this->input->post('kolom19_461'),
                        // 'kolom20' => $this->input->post('kolom20_461'),
                        // 'kolom21' => $this->input->post('kolom21_461'),
                        // 'kolom22' => $this->input->post('kolom22_461'),
                        // 'kolom23' => $this->input->post('kolom23_461'),
                        // 'kolom24' => $this->input->post('kolom24_461'),
                        // 'kolom25' => $this->input->post('kolom25_461'),
                        // 'kolom26' => $this->input->post('kolom26_461'),
                        // 'kolom27' => $this->input->post('kolom27_461'),
                        // 'kolom28' => $this->input->post('kolom28_461'),
                        // 'kolom29' => $this->input->post('kolom29_461'),
                        // 'kolom30' => $this->input->post('kolom30_461'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id461')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir461tabel'),
                        'kolom1' => $this->input->post('kolom1_461'),
                        'kolom2' => $this->input->post('kolom2_461'),
                        'kolom3' => $this->input->post('kolom3_461'),
                        'kolom4' => $this->input->post('kolom4_461'),
                        'kolom5' => $this->input->post('kolom5_461'),
                        'kolom6' => $this->input->post('kolom6_461'),
                        'kolom7' => $this->input->post('kolom7_461'),
                        'kolom8' => $this->input->post('kolom8_461'),
                        'kolom9' => $this->input->post('kolom9_461'),
                        'kolom10' => $this->input->post('kolom10_461'),
                        // 'kolom11' => $this->input->post('kolom11_461'),
                        // 'kolom12' => $this->input->post('kolom12_461'),
                        // 'kolom13' => $this->input->post('kolom13_461'),
                        // 'kolom14' => $this->input->post('kolom14_461'),
                        // 'kolom15' => $this->input->post('kolom15_461'),
                        // 'kolom16' => $this->input->post('kolom16_461'),
                        // 'kolom17' => $this->input->post('kolom17_461'),
                        // 'kolom18' => $this->input->post('kolom18_461'),
                        // 'kolom19' => $this->input->post('kolom19_461'),
                        // 'kolom20' => $this->input->post('kolom20_461'),
                        // 'kolom21' => $this->input->post('kolom21_461'),
                        // 'kolom22' => $this->input->post('kolom22_461'),
                        // 'kolom23' => $this->input->post('kolom23_461'),
                        // 'kolom24' => $this->input->post('kolom24_461'),
                        // 'kolom25' => $this->input->post('kolom25_461'),
                        // 'kolom26' => $this->input->post('kolom26_461'),
                        // 'kolom27' => $this->input->post('kolom27_461'),
                        // 'kolom28' => $this->input->post('kolom28_461'),
                        // 'kolom29' => $this->input->post('kolom29_461'),
                        // 'kolom30' => $this->input->post('kolom30_461'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir461tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 49
        public function update_isian462()
        {
            $last_version = $this->input->post('version_no462');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir462'),
                        'kolom1' => $this->input->post('kolom1_462'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id462')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir462'),
                        'kolom1' => $this->input->post('kolom1_462'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at462')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir462'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 50 51
        public function update_isian511()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_511'),
                        'kolom2' => $this->input->post('kolom2_511'),
                        'kolom3' => $this->input->post('kolom3_511'),
                        'kolom4' => $this->input->post('kolom4_511'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id511')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir511'),
                        'kolom1' => $this->input->post('kolom1_511'),
                        'kolom2' => $this->input->post('kolom2_511'),
                        'kolom3' => $this->input->post('kolom3_511'),
                        'kolom4' => $this->input->post('kolom4_511'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir511'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 52
        public function update_isian512a()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_512a'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id512a')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir512atabel'),
                        'kolom1' => $this->input->post('kolom1_512a'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir512atabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 53
        public function update_isian512b()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom2' => $this->input->post('kolom1_512b'),
                        'kolom3' => $this->input->post('kolom2_512b'),
                        'kolom4' => $this->input->post('kolom3_512b'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id512b')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir512btabel'),
                        'kolom2' => $this->input->post('kolom1_512b'),
                        'kolom3' => $this->input->post('kolom2_512b'),
                        'kolom4' => $this->input->post('kolom3_512b'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir512btabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 54
        public function update_isian512c()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_512c'),
                        'kolom2' => $this->input->post('kolom2_512c'),
                        'kolom3' => $this->input->post('kolom3_512c'),
                        'kolom4' => $this->input->post('kolom4_512c'),
                        'kolom5' => $this->input->post('kolom5_512c'),
                        'kolom6' => $this->input->post('kolom6_512c'),
                        'kolom7' => $this->input->post('kolom7_512c'),
                        'kolom8' => $this->input->post('kolom8_512c'),
                        'kolom9' => $this->input->post('kolom9_512c'),
                        'kolom10' => $this->input->post('kolom10_512c'),
                        'kolom11' => $this->input->post('kolom11_512c'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id512c')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir512ctabel'),
                        'kolom1' => $this->input->post('kolom1_512c'),
                        'kolom2' => $this->input->post('kolom2_512c'),
                        'kolom3' => $this->input->post('kolom3_512c'),
                        'kolom4' => $this->input->post('kolom4_512c'),
                        'kolom5' => $this->input->post('kolom5_512c'),
                        'kolom6' => $this->input->post('kolom6_512c'),
                        'kolom7' => $this->input->post('kolom7_512c'),
                        'kolom8' => $this->input->post('kolom8_512c'),
                        'kolom9' => $this->input->post('kolom9_512c'),
                        'kolom10' => $this->input->post('kolom10_512c'),
                        'kolom11' => $this->input->post('kolom11_512c'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir512ctabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 55
        public function update_isian513()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_513'),
                        'kolom2' => $this->input->post('kolom2_513'),
                        'kolom3' => $this->input->post('kolom3_513'),
                        'kolom4' => $this->input->post('kolom4_513'),
                        'kolom5' => $this->input->post('kolom5_513'),
                        'kolom6' => $this->input->post('kolom6_513'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id513')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir513tabel'),
                        'kolom1' => $this->input->post('kolom1_513'),
                        'kolom2' => $this->input->post('kolom2_513'),
                        'kolom3' => $this->input->post('kolom3_513'),
                        'kolom4' => $this->input->post('kolom4_513'),
                        'kolom5' => $this->input->post('kolom5_513'),
                        'kolom6' => $this->input->post('kolom6_513'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir513tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 56
        public function update_isian514()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_514'),
                        'kolom2' => $this->input->post('kolom2_514'),
                        'kolom3' => $this->input->post('kolom3_514'),
                        'kolom4' => $this->input->post('kolom4_514'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id514')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir514tabel'),
                        'kolom1' => $this->input->post('kolom1_514'),
                        'kolom2' => $this->input->post('kolom2_514'),
                        'kolom3' => $this->input->post('kolom3_514'),
                        'kolom4' => $this->input->post('kolom4_514'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir514tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 57
        public function update_isian52a()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_52a'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id52a')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir52atabel'),
                        'kolom1' => $this->input->post('kolom1_52a'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir52atabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 58
        public function update_isian52b()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_52b'),
                        'kolom2' => $this->input->post('kolom2_52b'),
                        'kolom3' => $this->input->post('kolom3_52b'),
                        'kolom4' => $this->input->post('kolom4_52b'),
                        'kolom5' => $this->input->post('kolom5_52b'),
                        'kolom6' => $this->input->post('kolom6_52b'),
                        'kolom7' => $this->input->post('kolom7_52b'),
                        'kolom8' => $this->input->post('kolom8_52b'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id52b')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir52btabel'),
                        'kolom1' => $this->input->post('kolom1_52b'),
                        'kolom2' => $this->input->post('kolom2_52b'),
                        'kolom3' => $this->input->post('kolom3_52b'),
                        'kolom4' => $this->input->post('kolom4_52b'),
                        'kolom5' => $this->input->post('kolom5_52b'),
                        'kolom6' => $this->input->post('kolom6_52b'),
                        'kolom7' => $this->input->post('kolom7_52b'),
                        'kolom8' => $this->input->post('kolom8_52b'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir52btabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 59 60
        public function update_isian531()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_531'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id531')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir531tabel'),
                        'kolom1' => $this->input->post('kolom1_531'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir531tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 61
        public function update_isian532()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_532'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id532')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir532tabel'),
                        'kolom1' => $this->input->post('kolom1_532'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir532tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 62 63 64
        public function update_isian541()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_541'),
                        'kolom2' => $this->input->post('kolom2_541'),
                        'kolom3' => $this->input->post('kolom3_541'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id541')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir541tabel'),
                        'kolom1' => $this->input->post('kolom1_541'),
                        'kolom2' => $this->input->post('kolom2_541'),
                        'kolom3' => $this->input->post('kolom3_541'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir541tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 65
        public function update_isian542()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_542'),
                        'kolom2' => $this->input->post('kolom2_542'),
                        'kolom3' => $this->input->post('kolom3_542'),
                        'kolom4' => $this->input->post('kolom4_542'),
                        'kolom5' => $this->input->post('kolom5_542'),
                        'kolom6' => $this->input->post('kolom6_542'),
                        'kolom7' => $this->input->post('kolom7_542'),
                        'kolom8' => $this->input->post('kolom8_542'),
                        'kolom9' => $this->input->post('kolom9_542'),
                        'kolom10' => $this->input->post('kolom10_542'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id542')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir542tabel'),
                        'kolom1' => $this->input->post('kolom1_542'),
                        'kolom2' => $this->input->post('kolom2_542'),
                        'kolom3' => $this->input->post('kolom3_542'),
                        'kolom4' => $this->input->post('kolom4_542'),
                        'kolom5' => $this->input->post('kolom5_542'),
                        'kolom6' => $this->input->post('kolom6_542'),
                        'kolom7' => $this->input->post('kolom7_542'),
                        'kolom8' => $this->input->post('kolom8_542'),
                        'kolom9' => $this->input->post('kolom9_542'),
                        'kolom10' => $this->input->post('kolom10_542'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir542tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 66
        public function update_isian551a()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_551a'),
                        'kolom2' => $this->input->post('kolom2_551a'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id551a')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir551atabel'),
                        'kolom1' => $this->input->post('kolom1_551a'),
                        'kolom2' => $this->input->post('kolom2_551a'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir551atabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 67
        public function update_isian551b()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_551b'),
                        'kolom2' => $this->input->post('kolom2_551b'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id551b')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir551btabel'),
                        'kolom1' => $this->input->post('kolom1_551b'),
                        'kolom2' => $this->input->post('kolom2_551b'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir551btabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 68
        public function update_isian551c()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_551c'),
                        'kolom2' => $this->input->post('kolom2_551c'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id551c')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir551ctabel'),
                        'kolom1' => $this->input->post('kolom1_551c'),
                        'kolom2' => $this->input->post('kolom2_551c'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir551ctabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 69
        public function update_isian551d()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_551d'),
                        'kolom2' => $this->input->post('kolom2_551d'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id551d')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir551dtabel'),
                        'kolom1' => $this->input->post('kolom1_551d'),
                        'kolom2' => $this->input->post('kolom2_551d'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir551dtabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 70
        public function update_isian552()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_552'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id552')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir552tabel'),
                        'kolom1' => $this->input->post('kolom1_552'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir552tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 71
        public function update_isian56()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_56'),
                        'kolom2' => $this->input->post('kolom2_56'),
                        'kolom3' => $this->input->post('kolom3_56'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id56')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir56tabel'),
                        'kolom1' => $this->input->post('kolom1_56'),
                        'kolom2' => $this->input->post('kolom2_56'),
                        'kolom3' => $this->input->post('kolom3_56'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir56tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 72
        public function update_isian571()
        {
            $last_version = $this->input->post('version_no571');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_571'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id571')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir571'),
                        'kolom1' => $this->input->post('kolom1_571'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir571'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 73
        public function update_isian572()
        {
            $last_version = $this->input->post('version_no572');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_572'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id572')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir572'),
                        'kolom1' => $this->input->post('kolom1_572'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir572'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 74
        public function update_isian573()
        {
            $last_version = $this->input->post('version_no573');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_573'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id573')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir573'),
                        'kolom1' => $this->input->post('kolom1_573'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir573'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 75
        public function update_isian574()
        {
            $last_version = $this->input->post('version_no574');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_574'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id574')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir574'),
                        'kolom1' => $this->input->post('kolom1_574'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir574'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 76
        public function update_isian575()
        {
            $last_version = $this->input->post('version_no575');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_575'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id575')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir575'),
                        'kolom1' => $this->input->post('kolom1_575'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir575'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 77
        public function update_isian61()
        {
            $last_version = $this->input->post('version_no61');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_61'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id61')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir61'),
                        'kolom1' => $this->input->post('kolom1_61'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir61'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 78
        public function update_isian621()
        {
            $last_version = $this->input->post('version_no621');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_621'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id621')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir621'),
                        'kolom1' => $this->input->post('kolom1_621'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir621'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 79
        public function update_isian622()
        {
            $last_version = $this->input->post('version_no622');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_622'),
                        'kolom2' => $this->input->post('kolom2_622'),
                        'kolom3' => $this->input->post('kolom3_622'),
                        'kolom4' => $this->input->post('kolom4_622'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id622')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir622tabel'),
                        'kolom1' => $this->input->post('kolom1_622'),
                        'kolom2' => $this->input->post('kolom2_622'),
                        'kolom3' => $this->input->post('kolom3_622'),
                        'kolom4' => $this->input->post('kolom4_622'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir622tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 80
        public function update_isian623()
        {
            $last_version = $this->input->post('version_no623');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_623'),
                        'kolom2' => $this->input->post('kolom2_623'),
                        'kolom3' => $this->input->post('kolom3_623'),
                        'kolom4' => $this->input->post('kolom4_623'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id623')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir623tabel'),
                        'kolom1' => $this->input->post('kolom1_623'),
                        'kolom2' => $this->input->post('kolom2_623'),
                        'kolom3' => $this->input->post('kolom3_623'),
                        'kolom4' => $this->input->post('kolom4_623'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir623tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 81
        public function update_isian631()
        {
            $last_version = $this->input->post('version_no631');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_631'),
                        'kolom2' => $this->input->post('kolom2_631'),
                        'kolom3' => $this->input->post('kolom3_631'),
                        'kolom4' => $this->input->post('kolom4_631'),
                        'kolom5' => $this->input->post('kolom5_631'),
                        'kolom6' => $this->input->post('kolom6_631'),
                        'kolom7' => $this->input->post('kolom7_631'),
                        'kolom8' => $this->input->post('kolom8_631'),
                        'kolom9' => $this->input->post('kolom9_631'),
                        'kolom10' => $this->input->post('kolom10_631'),
                        'kolom11' => $this->input->post('kolom11_631'),
                        'kolom12' => $this->input->post('kolom12_631'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id631')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir631tabel'),
                        'kolom1' => $this->input->post('kolom1_631'),
                        'kolom2' => $this->input->post('kolom2_631'),
                        'kolom3' => $this->input->post('kolom3_631'),
                        'kolom4' => $this->input->post('kolom4_631'),
                        'kolom5' => $this->input->post('kolom5_631'),
                        'kolom6' => $this->input->post('kolom6_631'),
                        'kolom7' => $this->input->post('kolom7_631'),
                        'kolom8' => $this->input->post('kolom8_631'),
                        'kolom9' => $this->input->post('kolom9_631'),
                        'kolom10' => $this->input->post('kolom10_631'),
                        'kolom11' => $this->input->post('kolom11_631'),
                        'kolom12' => $this->input->post('kolom12_631'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir631tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 82
        public function update_isian632()
        {
            $last_version = $this->input->post('version_no632');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_632'),
                        'kolom2' => $this->input->post('kolom2_632'),
                        'kolom3' => $this->input->post('kolom3_632'),
                        'kolom4' => $this->input->post('kolom4_632'),
                        'kolom5' => $this->input->post('kolom5_632'),
                        'kolom6' => $this->input->post('kolom6_632'),
                        'kolom7' => $this->input->post('kolom7_632'),
                        'kolom8' => $this->input->post('kolom8_632'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id632')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir632tabel'),
                        'kolom1' => $this->input->post('kolom1_632'),
                        'kolom2' => $this->input->post('kolom2_632'),
                        'kolom3' => $this->input->post('kolom3_632'),
                        'kolom4' => $this->input->post('kolom4_632'),
                        'kolom5' => $this->input->post('kolom5_632'),
                        'kolom6' => $this->input->post('kolom6_632'),
                        'kolom7' => $this->input->post('kolom7_632'),
                        'kolom8' => $this->input->post('kolom8_632'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir632tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 83
        public function update_isian633()
        {
            $last_version = $this->input->post('version_no633');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_633'),
                        'kolom2' => $this->input->post('kolom2_633'),
                        'kolom3' => $this->input->post('kolom3_633'),
                        'kolom4' => $this->input->post('kolom4_633'),
                        'kolom5' => $this->input->post('kolom5_633'),
                        'kolom6' => $this->input->post('kolom6_633'),
                        'kolom7' => $this->input->post('kolom7_633'),
                        'kolom8' => $this->input->post('kolom8_633'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id633')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir633tabel'),
                        'kolom1' => $this->input->post('kolom1_633'),
                        'kolom2' => $this->input->post('kolom2_633'),
                        'kolom3' => $this->input->post('kolom3_633'),
                        'kolom4' => $this->input->post('kolom4_633'),
                        'kolom5' => $this->input->post('kolom5_633'),
                        'kolom6' => $this->input->post('kolom6_633'),
                        'kolom7' => $this->input->post('kolom7_633'),
                        'kolom8' => $this->input->post('kolom8_633'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir633tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 84 85
        public function update_isian641a()
        {
            $last_version = $this->input->post('version_no641a');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_641a'),
                        'kolom2' => $this->input->post('kolom2_641a'),
                        'kolom3' => $this->input->post('kolom3_641a'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id641a')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir641atabel'),
                        'kolom1' => $this->input->post('kolom1_641a'),
                        'kolom2' => $this->input->post('kolom2_641a'),
                        'kolom3' => $this->input->post('kolom3_641a'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir641atabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 86 87 88
        public function update_isian641c()
        {
            $last_version = $this->input->post('version_no641c');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_641c'),
                        'kolom2' => $this->input->post('kolom2_641c'),
                        'kolom3' => $this->input->post('kolom3_641c'),
                        'kolom4' => $this->input->post('kolom4_641c'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id641c')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir641ctabel'),
                        'kolom1' => $this->input->post('kolom1_641c'),
                        'kolom2' => $this->input->post('kolom2_641c'),
                        'kolom3' => $this->input->post('kolom3_641c'),
                        'kolom4' => $this->input->post('kolom4_641c'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir641ctabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 89
        public function update_isian642()
        {
            $last_version = $this->input->post('version_no642');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_642'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id642')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir642'),
                        'kolom1' => $this->input->post('kolom1_642'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir642'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 90
        public function update_isian643()
        {
            $last_version = $this->input->post('version_no643');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_643'),
                        'kolom2' => $this->input->post('kolom2_643'),
                        'kolom3' => $this->input->post('kolom3_643'),
                        'kolom4' => $this->input->post('kolom4_643'),
                        'kolom5' => $this->input->post('kolom5_643'),
                        'kolom6' => $this->input->post('kolom6_643'),
                        'kolom7' => $this->input->post('kolom7_643'),
                        'kolom8' => $this->input->post('kolom8_643'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id643')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir643tabel'),
                        'kolom1' => $this->input->post('kolom1_643'),
                        'kolom2' => $this->input->post('kolom2_643'),
                        'kolom3' => $this->input->post('kolom3_643'),
                        'kolom4' => $this->input->post('kolom4_643'),
                        'kolom5' => $this->input->post('kolom5_643'),
                        'kolom6' => $this->input->post('kolom6_643'),
                        'kolom7' => $this->input->post('kolom7_643'),
                        'kolom8' => $this->input->post('kolom8_643'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir643tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 91
        public function update_isian651()
        {
            $last_version = $this->input->post('version_no651');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_651'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id651')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir651'),
                        'kolom1' => $this->input->post('kolom1_651'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir651'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 92
        public function update_isian652()
        {
            $last_version = $this->input->post('version_no652');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_652'),
                        'kolom2' => $this->input->post('kolom2_652'),
                        'kolom3' => $this->input->post('kolom3_652'),
                        'kolom4' => $this->input->post('kolom4_652'),
                        'kolom5' => $this->input->post('kolom5_652'),
                        'kolom6' => $this->input->post('kolom6_652'),
                        'kolom7' => $this->input->post('kolom7_652'),
                        'kolom8' => $this->input->post('kolom8_652'),
                        'kolom9' => $this->input->post('kolom9_652'),
                        'kolom10' => $this->input->post('kolom10_652'),
                        'kolom11' => $this->input->post('kolom11_652'),
                        'kolom12' => $this->input->post('kolom12_652'),
                        'kolom13' => $this->input->post('kolom13_652'),
                        'kolom14' => $this->input->post('kolom14_652'),
                        'kolom15' => $this->input->post('kolom15_652'),
                        'kolom16' => $this->input->post('kolom16_652'),
                        'kolom17' => $this->input->post('kolom17_652'),
                        'kolom18' => $this->input->post('kolom18_652'),
                        'kolom19' => $this->input->post('kolom19_652'),
                        'kolom20' => $this->input->post('kolom20_652'),
                        'kolom21' => $this->input->post('kolom21_652'),
                        'kolom22' => $this->input->post('kolom22_652'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id652')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir652tabel'),
                        'kolom1' => $this->input->post('kolom1_652'),
                        'kolom2' => $this->input->post('kolom2_652'),
                        'kolom3' => $this->input->post('kolom3_652'),
                        'kolom4' => $this->input->post('kolom4_652'),
                        'kolom5' => $this->input->post('kolom5_652'),
                        'kolom6' => $this->input->post('kolom6_652'),
                        'kolom7' => $this->input->post('kolom7_652'),
                        'kolom8' => $this->input->post('kolom8_652'),
                        'kolom9' => $this->input->post('kolom9_652'),
                        'kolom10' => $this->input->post('kolom10_652'),
                        'kolom11' => $this->input->post('kolom11_652'),
                        'kolom12' => $this->input->post('kolom12_652'),
                        'kolom13' => $this->input->post('kolom13_652'),
                        'kolom14' => $this->input->post('kolom14_652'),
                        'kolom15' => $this->input->post('kolom15_652'),
                        'kolom16' => $this->input->post('kolom16_652'),
                        'kolom17' => $this->input->post('kolom17_652'),
                        'kolom18' => $this->input->post('kolom18_652'),
                        'kolom19' => $this->input->post('kolom19_652'),
                        'kolom20' => $this->input->post('kolom20_652'),
                        'kolom21' => $this->input->post('kolom21_652'),
                        'kolom22' => $this->input->post('kolom22_652'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir652tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 93
        public function update_isian711()
        {
            $last_version = $this->input->post('version_no711');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_711'),
                        'kolom2' => $this->input->post('kolom2_711'),
                        'kolom3' => $this->input->post('kolom3_711'),
                        'kolom4' => $this->input->post('kolom4_711'),
                        'kolom5' => $this->input->post('kolom5_711'),
                        'kolom6' => $this->input->post('kolom6_711'),
                        'kolom7' => $this->input->post('kolom7_711'),
                        'kolom8' => $this->input->post('kolom8_711'),
                        'kolom9' => $this->input->post('kolom9_711'),
                        'kolom10' => $this->input->post('kolom10_711'),
                        'kolom11' => $this->input->post('kolom11_711'),
                        'kolom12' => $this->input->post('kolom12_711'),
                        'kolom13' => $this->input->post('kolom13_711'),
                        'kolom14' => $this->input->post('kolom14_711'),
                        'kolom15' => $this->input->post('kolom15_711'),
                        'kolom16' => $this->input->post('kolom16_711'),
                        'kolom17' => $this->input->post('kolom17_711'),
                        'kolom18' => $this->input->post('kolom18_711'),
                        'kolom19' => $this->input->post('kolom19_711'),
                        'kolom20' => $this->input->post('kolom20_711'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id711')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir711tabel'),
                        'kolom1' => $this->input->post('kolom1_711'),
                        'kolom2' => $this->input->post('kolom2_711'),
                        'kolom3' => $this->input->post('kolom3_711'),
                        'kolom4' => $this->input->post('kolom4_711'),
                        'kolom5' => $this->input->post('kolom5_711'),
                        'kolom6' => $this->input->post('kolom6_711'),
                        'kolom7' => $this->input->post('kolom7_711'),
                        'kolom8' => $this->input->post('kolom8_711'),
                        'kolom9' => $this->input->post('kolom9_711'),
                        'kolom10' => $this->input->post('kolom10_711'),
                        'kolom11' => $this->input->post('kolom11_711'),
                        'kolom12' => $this->input->post('kolom12_711'),
                        'kolom13' => $this->input->post('kolom13_711'),
                        'kolom14' => $this->input->post('kolom14_711'),
                        'kolom15' => $this->input->post('kolom15_711'),
                        'kolom16' => $this->input->post('kolom16_711'),
                        'kolom17' => $this->input->post('kolom17_711'),
                        'kolom18' => $this->input->post('kolom18_711'),
                        'kolom19' => $this->input->post('kolom19_711'),
                        'kolom20' => $this->input->post('kolom20_711'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir711tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 94
        public function update_isian712()
        {
            $last_version = $this->input->post('version_no712');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id712')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir712tabel'),
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir712tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 95
        public function update_isian713()
        {
            $last_version = $this->input->post('version_no713');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_713'),
                        'kolom2' => $this->input->post('kolom2_713'),
                        'kolom3' => $this->input->post('kolom3_713'),
                        'kolom4' => $this->input->post('kolom4_713'),
                        'kolom5' => $this->input->post('kolom5_713'),
                        'kolom6' => $this->input->post('kolom6_713'),
                        'kolom7' => $this->input->post('kolom7_713'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id713')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir713tabel'),
                        'kolom1' => $this->input->post('kolom1_713'),
                        'kolom2' => $this->input->post('kolom2_713'),
                        'kolom3' => $this->input->post('kolom3_713'),
                        'kolom4' => $this->input->post('kolom4_713'),
                        'kolom5' => $this->input->post('kolom5_713'),
                        'kolom6' => $this->input->post('kolom6_713'),
                        'kolom7' => $this->input->post('kolom7_713'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir713tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 96
        public function update_isian714()
        {
            $last_version = $this->input->post('version_no714');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_714'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id714')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir714tabel'),
                        'kolom1' => $this->input->post('kolom1_714'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir714tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 97
        public function update_isian721()
        {
            $last_version = $this->input->post('version_no721');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_721'),
                        'kolom2' => $this->input->post('kolom2_721'),
                        'kolom3' => $this->input->post('kolom3_721'),
                        'kolom4' => $this->input->post('kolom4_721'),
                        'kolom5' => $this->input->post('kolom5_721'),
                        'kolom6' => $this->input->post('kolom6_721'),
                        'kolom7' => $this->input->post('kolom7_721'),
                        'kolom8' => $this->input->post('kolom8_721'),
                        'kolom9' => $this->input->post('kolom9_721'),
                        'kolom10' => $this->input->post('kolom10_721'),
                        'kolom11' => $this->input->post('kolom11_721'),
                        'kolom12' => $this->input->post('kolom12_721'),
                        'kolom13' => $this->input->post('kolom13_721'),
                        'kolom14' => $this->input->post('kolom14_721'),
                        'kolom15' => $this->input->post('kolom15_721'),
                        'kolom16' => $this->input->post('kolom16_721'),
                        'kolom17' => $this->input->post('kolom17_721'),
                        'kolom18' => $this->input->post('kolom18_721'),
                        'kolom19' => $this->input->post('kolom19_721'),
                        'kolom20' => $this->input->post('kolom20_721'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id721')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir721tabel'),
                        'kolom1' => $this->input->post('kolom1_721'),
                        'kolom2' => $this->input->post('kolom2_721'),
                        'kolom3' => $this->input->post('kolom3_721'),
                        'kolom4' => $this->input->post('kolom4_721'),
                        'kolom5' => $this->input->post('kolom5_721'),
                        'kolom6' => $this->input->post('kolom6_721'),
                        'kolom7' => $this->input->post('kolom7_721'),
                        'kolom8' => $this->input->post('kolom8_721'),
                        'kolom9' => $this->input->post('kolom9_721'),
                        'kolom10' => $this->input->post('kolom10_721'),
                        'kolom11' => $this->input->post('kolom11_721'),
                        'kolom12' => $this->input->post('kolom12_721'),
                        'kolom13' => $this->input->post('kolom13_721'),
                        'kolom14' => $this->input->post('kolom14_721'),
                        'kolom15' => $this->input->post('kolom15_721'),
                        'kolom16' => $this->input->post('kolom16_721'),
                        'kolom17' => $this->input->post('kolom17_721'),
                        'kolom18' => $this->input->post('kolom18_721'),
                        'kolom19' => $this->input->post('kolom19_721'),
                        'kolom20' => $this->input->post('kolom20_721'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir721tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 98
        public function update_isian722()
        {
            $last_version = $this->input->post('version_no722');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_722'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id722')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir722tabel'),
                        'kolom1' => $this->input->post('kolom1_722'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir722tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 99
        public function update_isian731()
        {
            $last_version = $this->input->post('version_no731');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_731'),
                        'kolom2' => $this->input->post('kolom2_731'),
                        'kolom3' => $this->input->post('kolom3_731'),
                        'kolom4' => $this->input->post('kolom4_731'),
                        'kolom5' => $this->input->post('kolom5_731'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id731')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir731tabel'),
                        'kolom1' => $this->input->post('kolom1_731'),
                        'kolom2' => $this->input->post('kolom2_731'),
                        'kolom3' => $this->input->post('kolom3_731'),
                        'kolom4' => $this->input->post('kolom4_731'),
                        'kolom5' => $this->input->post('kolom5_731'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir731tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        // 100
        public function update_isian732()
        {
            $last_version = $this->input->post('version_no732');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_732'),
                        'kolom2' => $this->input->post('kolom2_732'),
                        'kolom3' => $this->input->post('kolom3_732'),
                        'kolom4' => $this->input->post('kolom4_732'),
                        'kolom5' => $this->input->post('kolom5_732'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id732')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir732tabel'),
                        'kolom1' => $this->input->post('kolom1_732'),
                        'kolom2' => $this->input->post('kolom2_732'),
                        'kolom3' => $this->input->post('kolom3_732'),
                        'kolom4' => $this->input->post('kolom4_732'),
                        'kolom5' => $this->input->post('kolom5_732'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir732tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian2kolom()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir'),
                        'kolom1' => $this->input->post('kolom11'),
                        'kolom2' => $this->input->post('kolom12'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir'),
                        'kolom1' => $this->input->post('kolom11'),
                        'kolom2' => $this->input->post('kolom12'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        

        
// TUTUP QUERY UPDATE ISIAN

// QUERY FIND ISIAN
        public function findallisian(){
            $query = $this->db->get('isian_16kolom');
            return $query->result();
        }

        public function findisian1kolom($column,$id){
              // $query = $this->db->get_where('isian_1kolom', array($column => $id));
            $query = $this->db->get_where('isian_16kolom', array($column => $id));
              return $query->result_array();
        }

        public function findisian1kolom_buku($column,$id){
              // $query = $this->db->get_where('isian_1kolom', array($column => $id));
            $query = $this->db->get_where('isian_16kolom_buku', array($column => $id));
              return $query->result_array();
        }

        public function findisian1kolomversion($column,$id){
              // $query = $this->db->get_where('isian_1kolom_version', array($column => $id));
            $query = $this->db->get_where('isian_16kolom_version', array($column => $id));
              return $query->result_array();
        }

        public function findisian321kolom($column,$id){
              // $query = $this->db->get_where('isian_1kolom', array($column => $id));
            // $query = $this->db->get_where('isian_16kolom', array($column => $id));
            //   return $query->result_array();
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","desc");
                $this->db->limit(5);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian321kolom_buku($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","desc");
                $this->db->limit(5);
                $this->db->from('isian_16kolom_buku');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian323kolom($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","desc");
                $this->db->limit(7);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian323kolom_buku($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","desc");
                $this->db->limit(7);
                $this->db->from('isian_16kolom_buku');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian323kolom1brs($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","asc");
                $this->db->limit(1);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian323kolom2brs($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","asc");
                $this->db->limit(2);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian323kolom3brs($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","desc");
                $this->db->limit(3);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian323kolom4brs($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","asc");
                $this->db->limit(4);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian323kolom5brs($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","asc");
                $this->db->limit(5);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian323kolom6brs($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","asc");
                $this->db->limit(6);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian323kolom7brs($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","asc");
                $this->db->limit(7);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        public function findisian331kolom($column,$id){
              // $query = $this->db->get_where('isian_1kolom', array($column => $id));
            // $query = $this->db->get_where('isian_16kolom', array($column => $id));
            //   return $query->result_array();
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","desc");
                $this->db->limit(1);
                $this->db->from('isian_16kolom');
                $query=$this->db->get();
                return $query->result_array();
        }

        // FORMAT BUKU BORANG SESUAI EXCEL
        public function findUpdateTbl($column,$id){
            return $this->db->select("*")
              ->from('isian_16kolom')
              ->where($column, $id)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();
        }

        // FORMAT BUKU BORANG SESUAI BUKU
        public function findUpdateTbl_buku($column,$id){
            return $this->db->select("*")
              ->from('isian_16kolom_buku')
              ->where($column, $id)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();
        }

        public function findNilai($column,$id){
            return $this->db->select("*")
              ->from('hitungf1')
              ->where($column, $id)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();
        }

        public function findButirnya($column1,$id,$column2,$id_borang){
            return $this->db->select("butir")
              ->from('butir')
              ->where($column1, $id)
              ->where($column2, $id_borang)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();
        }

        public function findButirnya_buku($column1,$id,$column2,$id_borang){
            return $this->db->select("butir")
              ->from('butir_buku')
              ->where($column1, $id)
              ->where($column2, $id_borang)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();
        }

        public function findButirnyasama($column2,$id_borang,$column3,$butir){
            return $this->db->select("*")
              ->from('butir')
              ->where($column2, $id_borang)
              ->where($column3, $butir)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();
        }

        public function findButirnyasama_buku($column2,$id_borang,$column3,$butir){
            return $this->db->select("*")
              ->from('butir_buku')
              ->where($column2, $id_borang)
              ->where($column3, $butir)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();
        }
// TUTUP QUERY FIND ISIAN

// QUERY DELETE ISIAN

        // FORMAT EXCEL BORANG PENILAIAN
        public function deleteisian1kolom($column,$id){

            // $this->db->delete('isian_1kolom', array($column => $id));
            // $this->db->query('ALTER TABLE isian_1kolom AUTO_INCREMENT 0');
            // $this->db->query('ALTER TABLE isian_1kolom_version AUTO_INCREMENT 0');
            $this->db->delete('isian_16kolom', array($column => $id));
            $this->db->delete('isian_16kolom_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        // FORMAT BUKU BORANG WORD
        public function deleteisian1kolom_buku($column,$id){
            $this->db->delete('isian_16kolom_buku', array($column => $id));
            $this->db->delete('isian_16kolom_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        public function deleteisian2kolom($column,$id){

            // $this->db->delete('isian_2kolom', array($column => $id));
            // $this->db->query('ALTER TABLE isian_2kolom AUTO_INCREMENT 0');
            // $this->db->query('ALTER TABLE isian_2kolom_version AUTO_INCREMENT 0');
            $this->db->delete('isian_16kolom', array($column => $id));
            $this->db->delete('isian_16kolom_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        // FORMAT BORANG EXCEL
        public function deleteisian4kolom($column,$id){

            // $this->db->delete('isian_4kolom', array($column => $id));
            // $this->db->query('ALTER TABLE isian_4kolom AUTO_INCREMENT 0');
            // $this->db->query('ALTER TABLE isian_4kolom_version AUTO_INCREMENT 0');
            $this->db->delete('isian_16kolom', array($column => $id));
            $this->db->delete('isian_16kolom_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        // FORMAT BUKU BORANG WORD
        public function deleteisian4kolom_buku($column,$id){
            $this->db->delete('isian_16kolom_buku', array($column => $id));
            $this->db->delete('isian_16kolom_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        public function deleteisian5kolom($column,$id){

            // $this->db->delete('isian_4kolom', array($column => $id));
            // $this->db->query('ALTER TABLE isian_4kolom AUTO_INCREMENT 0');
            // $this->db->query('ALTER TABLE isian_4kolom_version AUTO_INCREMENT 0');
            $this->db->delete('isian_16kolom', array($column => $id));
            $this->db->delete('isian_16kolom_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        public function deleteisian12kolom($column,$id){

            // $this->db->delete('isian_4kolom', array($column => $id));
            // $this->db->query('ALTER TABLE isian_4kolom AUTO_INCREMENT 0');
            // $this->db->query('ALTER TABLE isian_4kolom_version AUTO_INCREMENT 0');
            $this->db->delete('isian_16kolom', array($column => $id));
            $this->db->delete('isian_16kolom_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        public function deleteisian4kolomsatupersatu($column,$id){

            // $this->db->delete('isian_4kolom', array($column => $id));
            // $this->db->query('ALTER TABLE isian_4kolom AUTO_INCREMENT 0');
            // $this->db->query('ALTER TABLE isian_4kolom_version AUTO_INCREMENT 0');
            $this->db->delete('isian_16kolom', array($column => $id));
            $this->db->delete('isian_16kolom_version', array('id' => $id));
            $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        // FORMAT BUKU BORANG EXCEL
        public function deletabelbutir($column,$id){
            $this->db->delete('isian_16kolom', array($column => $id));
            // $this->db->delete('isian_16kolom_version', array('id' => $id));
            $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian Butir dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        // FORMAT BUKU BORANG WORD
        public function deletabelbutir_buku($column,$id){
            $this->db->delete('isian_16kolom_buku', array($column => $id));
            // $this->db->delete('isian_16kolom_version', array('id' => $id));
            $this->db->query('ALTER TABLE isian_16kolom_buku AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian Butir dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }
// TUTUP QUERY DELETE ISIAN

        // dibawah itu kode lama ya gaes

        public function get_entire_data1($id)
        {
                $id=$this->uri->segment(2, 0);
                //$this->db>where('flag',$flag);
                $query = $this->db->get_where('dokumen',array('id_butir'=>$id));
                //$query = $this->db->get('dokumen');
                //$query = 'select * from dokumen where flag="view"';
                return $query->result_array();
        }

        public function ambilExcel($id)
        {
                $id=$this->uri->segment(2, 0);
                //$id=22;
                //$query = $this->db->get_where('dokumen',array('id_butir'=>'22'));
                //$query=$this->db->query("select a.butir, a.bakumutu, a.penjelasan, b.nama,a.id, b.status,b.created_at from butir a, dokumen b where b.id_butir='".$id."'");
                $query=$this->db->query("select a.butir, a.bakumutu, a.penjelasan, b.nama,a.id, b.status,b.created_at from butir a, dokumen b where a.butir like '".$id."%' and a.id_borang='1'");
                return $query->result_array();
        }

        public function get_entire_data()
        {
                $query1 = $this->db->get('dokumen');
                return $query1->result();
        }

        public function insert_entry($filename)
        {

                $data = array(
                        'id_butir'=> $this->input->post('id_butir'),
                        'nama' => $this->input->post('nama'),
                        'pemilik' => $this->input->post('pemilik'),
                        'hardcopy' => $this->input->post('hardcopy'),
                        'filename' => $filename,
                        'priority'  => $this->input->post('prioritas'),
                        'ket'  => $this->input->post('keterangan'),
                        'jum'  => $this->input->post('jum'),
                        'status'  => 'not-ok',
                        //'progress'=> $this->input->post('progress'),
                        'created_at'=> date('Y-m-d H:i:s'),
                        'flag'  => $this->input->post('flag')
                );

                $this->db->insert('dokumen', $data);

        }

        public function update_entry()
        {
                 $data = array(
                        'nama' => $this->input->post('nama'),
                        'filename'=>$this->input->post('fileExisting'),
                        'pemilik' => $this->input->post('pemilik'),
                        'hardcopy' => $this->input->post('hardcopy'),
                        'priority'  => $this->input->post('prioritas'),
                        'ket'  => $this->input->post('keterangan'),
                        'jum'  => $this->input->post('jum'),
                        'status'  => $this->input->post('status'),
                        'progress'=> $this->input->post('progress'),
                        'created_at'=> date('Y-m-d H:i:s'),
                        'flag'  => $this->input->post('flag')
                );

                $this->db->update('dokumen', $data, array('id' => $this->input->post('id_dokumen')));

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah detail dokumen ".$this->input->post('nama'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_column($data,$id){
                 $this->db->update('dokumen', $data, array('id' => $id));
        }

        public function update_column1($data,$id){
                 $this->db->update('dokumen', $data, array('id' => $id));
        }

        public function find($column,$id){
              $query = $this->db->get_where('dokumen', array($column => $id));
              return $query->result_array();
        }

        public function listpendukung($column,$id){
              $query = $this->db->get_where('data_dok_pendukung', array($column => $id));
              return $query->result_array();
        }

        public function pendukung($column,$id){
              $query = $this->db->get_where('dokumenpendukung', array($column => $id));
              return $query->result_array();
        }

        public function find1($column,$id){
              $query1 = $this->db->get_where('dokumen', array($column => $id));
              return $query1->result_array1();
        }

        public function findForUpdate($id){
            $queryVersion=$this->db->query("select * from documentversion where id_dokumen=".$id);
            if($queryVersion->num_rows()>0){
                $query = $this->db->query('select a.id as id_dokumen,b.id as id_version,a.nama,a.status,a.ket,a.pemilik,a.hardcopy,a.filename,a.jum,a.priority,a.status,a.flag,b.file_path from dokumen a, documentversion b where a.id='.$id.' and b.id_dokumen='.$id.' and b.current="yes"');
                return $query->result_array();
            }else{
                $query = $this->db->query('select id as id_dokumen,status,ket,jum,pemilik,nama,filename,priority,hardcopy,flag from dokumen where id='.$id);
                return $query->result_array();
            }
        }

        public function findForUpdate1($id){
            $queryVersion1=$this->db->query("select * from documentversion where id_dokumen=".$id);
            if($queryVersion1->num_rows()>0){
                $query1 = $this->db->query('select a.id as id_dokumen,b.id as id_version,a.nama,a.status,a.ket,a.pemilik,a.hardcopy,a.filename,a.jum,a.priority,a.status,a.flag,b.file_path from dokumen a, documentversion b where a.id='.$id.' and b.id_dokumen='.$id.' and b.current="yes"');
                return $query1->result_array1();
            }else{
                $query1 = $this->db->query('select id as id_dokumen,status,ket,jum,pemilik,nama,filename,priority,hardcopy,flag from dokumen where id='.$id);
                return $query1->result_array1();
            }
        }

        public function global_query($string){
             $query = $this->db->query($string);
             return $query->result_array();
        }

        public function global_query1($string){
             $query1 = $this->db->query($string);
             return $query1->result_array1();
        }

        public function delete($column,$id){
            $this->db->delete('dokumen', array($column => $id));

            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menghapus dokumen dengan ID".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        public function delete1($column,$id){
            $this->db->delete('dokumen', array($column => $id));

            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menghapus dokumen dengan ID".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        function ambildata(){
            $ambildata = $this->db->get('dokumen');
            if($ambildata->num_rows()>0){
                foreach ($ambildata->result() as $data1){
                    $hasilID[] = $data1;
                }
                return $hasilID;
            }
        }

        function remove_checked_id(){
            $action = $this->input->post('action');
            if($action == "delete"){
                $delete = $this->input->post('msg');
                for ($i=0; $i<count($delete); $i++){
                    $this->db->where('id', $delete[$i]);
                    $this->db->delete('dokumen');
                }
            }
        }

        function delete_checked($checked_messages){
            $checked_messages = array();
            foreach ($checked_messages as $msg_id):

                  $this->db->select('id');
                  $this->db->from('dokumen');
                  $this->db->where('id', $msg_id);
                  $this->db->limit(1);
                  $query = $this->db->get();

                  if ($query->num_rows() > 0) //if message exists
                  {
                    $this->db->where('id', $msg_id);
                    $this->db->where('recipient', $this->users->get_user_id()); //verify if recipient id is equal to logged in user id
                    $this->db->delete('dokumen');

                  }
                  else
                  {
                        return FALSE;
                  }

            endforeach;
        }

        public function get_dokumen_by_pemilik($pemilik){
              $queryVersion=$this->db->query("select * from dokumen where pemilik='".$pemilik."'");
              return $queryVersion->result_array();
        }

        public function get_dokumen_by_pemilik1($pemilik){
              $queryVersion1=$this->db->query("select * from dokumen where flag='view' and pemilik='".$pemilik."'");
              return $queryVersion1->result_array1();
        }

        public function get_dokumen_detail_standar($pemilik){

            $query=$this->db->query("select a.butir, b.nama,a.id, b.status,b.created_at from butir a, dokumen b where a.id=b.id_butir and b.pemilik='".$pemilik."'");
            return $query->result_array();
        }

         public function get_dokumen_detail_standar1($pemilik){

            $query1=$this->db->query("select a.butir, b.nama,a.id, b.status,b.created_at, b.flag from butir a, dokumen b where b.flag='view' and a.id=b.id_butir and b.pemilik='".$pemilik."'");
            return $query1->result_array();
        }

}
?>
