<?php

class M_isian3bd3 extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();                
        }

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

// QUERY INSERT ISIAN
        public function insert_isian111()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir111'),
                        'kolom1' => $this->input->post('kolom1_111'),
                        'kolom2' => $this->input->post('kolom2_111'),
                        'kolom3' => $this->input->post('kolom3_111'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir111'),
                        'kolom1' => $this->input->post('kolom1_111'),
                        'kolom2' => $this->input->post('kolom2_111'),
                        'kolom3' => $this->input->post('kolom3_111'),
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

        public function insert_isian112()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir112'),
                        'kolom1' => $this->input->post('kolom1_112'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir112'),
                        'kolom1' => $this->input->post('kolom1_112'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir112'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian12()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

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

        public function insert_isian21()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
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

        public function insert_isian23()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'kolom2' => $this->input->post('kolom2_23'),
                        'kolom3' => $this->input->post('kolom3_23'),
                        'kolom4' => $this->input->post('kolom4_23'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'kolom2' => $this->input->post('kolom2_23'),
                        'kolom3' => $this->input->post('kolom3_23'),
                        'kolom4' => $this->input->post('kolom4_23'),
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

        public function insert_isian22()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
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

        public function insert_isian24()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

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

        public function insert_isian25()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
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

        public function insert_isian311()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir311'),
                        'kolom1' => $this->input->post('kolom1_311'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir311'),
                        'kolom1' => $this->input->post('kolom1_311'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir311'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian312()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir312'),
                        'kolom1' => $this->input->post('kolom1_312'),
                        'kolom2' => $this->input->post('kolom2_312'),
                        'kolom3' => $this->input->post('kolom3_312'),
                        'kolom4' => $this->input->post('kolom4_312'),
                        'kolom5' => $this->input->post('kolom5_312'),
                        'kolom6' => $this->input->post('kolom6_312'),
                        'kolom7' => $this->input->post('kolom7_312'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir312'),
                        'kolom1' => $this->input->post('kolom1_312'),
                        'kolom2' => $this->input->post('kolom2_312'),
                        'kolom3' => $this->input->post('kolom3_312'),
                        'kolom4' => $this->input->post('kolom4_312'),
                        'kolom5' => $this->input->post('kolom5_312'),
                        'kolom6' => $this->input->post('kolom6_312'),
                        'kolom7' => $this->input->post('kolom7_312'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir312'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian313()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir313'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir313'),
                        'kolom1' => $this->input->post('kolom1_313'),
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

        public function insert_isian321()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir321'),
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
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

        public function insert_isian322()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir322'),
                        'kolom1' => $this->input->post('kolom1_322'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir322'),
                        'kolom1' => $this->input->post('kolom1_322'),
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

        public function insert_isian411()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir411'),
                        'kolom1' => $this->input->post('kolom1_411'),
                        'kolom2' => $this->input->post('kolom2_411'),
                        'kolom3' => $this->input->post('kolom3_411'),
                        'kolom4' => $this->input->post('kolom4_411'),
                        'kolom5' => $this->input->post('kolom5_411'),
                        'kolom6' => $this->input->post('kolom6_411'),
                        'kolom7' => $this->input->post('kolom7_411'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir411'),
                        'kolom1' => $this->input->post('kolom1_411'),
                        'kolom2' => $this->input->post('kolom2_411'),
                        'kolom3' => $this->input->post('kolom3_411'),
                        'kolom4' => $this->input->post('kolom4_411'),
                        'kolom5' => $this->input->post('kolom5_411'),
                        'kolom6' => $this->input->post('kolom6_411'),
                        'kolom7' => $this->input->post('kolom7_411'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir411'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian412()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir412'),
                        'kolom1' => $this->input->post('kolom1_412'),
                        'kolom2' => $this->input->post('kolom2_412'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir412'),
                        'kolom1' => $this->input->post('kolom1_412'),
                        'kolom2' => $this->input->post('kolom2_412'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir412'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian413()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir413'),
                        'kolom1' => $this->input->post('kolom1_413'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir413'),
                        'kolom1' => $this->input->post('kolom1_413'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir413'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian42()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir42'),
                        'kolom1' => $this->input->post('kolom1_42'),
                        'kolom2' => $this->input->post('kolom2_42'),
                        'kolom3' => $this->input->post('kolom3_42'),
                        'kolom4' => $this->input->post('kolom4_42'),
                        'kolom5' => $this->input->post('kolom5_42'),
                        'kolom6' => $this->input->post('kolom6_42'),
                        'kolom7' => $this->input->post('kolom7_42'),
                        'kolom8' => $this->input->post('kolom8_42'),
                        'kolom9' => $this->input->post('kolom9_42'),
                        'kolom10' => $this->input->post('kolom10_42'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir42'),
                        'kolom1' => $this->input->post('kolom1_42'),
                        'kolom2' => $this->input->post('kolom2_42'),
                        'kolom3' => $this->input->post('kolom3_42'),
                        'kolom4' => $this->input->post('kolom4_42'),
                        'kolom5' => $this->input->post('kolom5_42'),
                        'kolom6' => $this->input->post('kolom6_42'),
                        'kolom7' => $this->input->post('kolom7_42'),
                        'kolom8' => $this->input->post('kolom8_42'),
                        'kolom9' => $this->input->post('kolom9_42'),
                        'kolom10' => $this->input->post('kolom10_42'),
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

        public function insert_isian51()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir51'),
                        'kolom1' => $this->input->post('kolom1_51'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir51'),
                        'kolom1' => $this->input->post('kolom1_51'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir51'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian52()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir52'),
                        'kolom1' => $this->input->post('kolom1_52'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir52'),
                        'kolom1' => $this->input->post('kolom1_52'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir52'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian53()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir53'),
                        'kolom1' => $this->input->post('kolom1_53'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir53'),
                        'kolom1' => $this->input->post('kolom1_53'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir53'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian612()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir612'),
                        'kolom1' => $this->input->post('kolom1_612'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir612'),
                        'kolom1' => $this->input->post('kolom1_612'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir612'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian621()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir621'),
                        'kolom1' => $this->input->post('kolom1_621'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir621'),
                        'kolom1' => $this->input->post('kolom1_621'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir621'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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

        public function insert_isian631()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir631'),
                        'kolom1' => $this->input->post('kolom1_631'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir631'),
                        'kolom1' => $this->input->post('kolom1_631'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir631'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian632()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir632'),
                        'kolom1' => $this->input->post('kolom1_632'),
                        'kolom2' => $this->input->post('kolom2_632'),
                        'kolom3' => $this->input->post('kolom3_632'),
                        'kolom4' => $this->input->post('kolom4_632'),
                        'kolom5' => $this->input->post('kolom5_632'),
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

        public function insert_isian641()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir641'),
                        'kolom1' => $this->input->post('kolom1_641'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir641'),
                        'kolom1' => $this->input->post('kolom1_641'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir641'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian642()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir642'),
                        'kolom1' => $this->input->post('kolom1_642'),
                        'kolom2' => $this->input->post('kolom2_642'),
                        'kolom3' => $this->input->post('kolom3_642'),
                        'kolom4' => $this->input->post('kolom4_642'),
                        'kolom5' => $this->input->post('kolom5_642'),
                        'kolom6' => $this->input->post('kolom6_642'),
                        'kolom7' => $this->input->post('kolom7_642'),
                        'kolom8' => $this->input->post('kolom8_642'),
                        'kolom9' => $this->input->post('kolom9_642'),
                        'kolom10' => $this->input->post('kolom10_642'),
                        'kolom11' => $this->input->post('kolom11_642'),
                        'kolom12' => $this->input->post('kolom12_642'),
                        'kolom13' => $this->input->post('kolom13_642'),
                        'kolom14' => $this->input->post('kolom14_642'),
                        'kolom15' => $this->input->post('kolom15_642'),
                        'kolom16' => $this->input->post('kolom16_642'),
                        'kolom17' => $this->input->post('kolom17_642'),
                        'kolom18' => $this->input->post('kolom18_642'),
                        'kolom19' => $this->input->post('kolom19_642'),
                        'kolom20' => $this->input->post('kolom20_642'),
                        'kolom21' => $this->input->post('kolom21_642'),
                        'kolom22' => $this->input->post('kolom22_642'),
                        'kolom23' => $this->input->post('kolom23_642'),
                        'kolom24' => $this->input->post('kolom24_642'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir642'),
                        'kolom1' => $this->input->post('kolom1_642'),
                        'kolom2' => $this->input->post('kolom2_642'),
                        'kolom3' => $this->input->post('kolom3_642'),
                        'kolom4' => $this->input->post('kolom4_642'),
                        'kolom5' => $this->input->post('kolom5_642'),
                        'kolom6' => $this->input->post('kolom6_642'),
                        'kolom7' => $this->input->post('kolom7_642'),
                        'kolom8' => $this->input->post('kolom8_642'),
                        'kolom9' => $this->input->post('kolom9_642'),
                        'kolom10' => $this->input->post('kolom10_642'),
                        'kolom11' => $this->input->post('kolom11_642'),
                        'kolom12' => $this->input->post('kolom12_642'),
                        'kolom13' => $this->input->post('kolom13_642'),
                        'kolom14' => $this->input->post('kolom14_642'),
                        'kolom15' => $this->input->post('kolom15_642'),
                        'kolom16' => $this->input->post('kolom16_642'),
                        'kolom17' => $this->input->post('kolom17_642'),
                        'kolom18' => $this->input->post('kolom18_642'),
                        'kolom19' => $this->input->post('kolom19_642'),
                        'kolom20' => $this->input->post('kolom20_642'),
                        'kolom21' => $this->input->post('kolom21_642'),
                        'kolom22' => $this->input->post('kolom22_642'),
                        'kolom23' => $this->input->post('kolom23_642'),
                        'kolom24' => $this->input->post('kolom24_642'),
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

        public function insert_isian643()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir643'),
                        'kolom1' => $this->input->post('kolom1_643'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir643'),
                        'kolom1' => $this->input->post('kolom1_643'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir643'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian644()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir644'),
                        'kolom1' => $this->input->post('kolom1_644'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir644'),
                        'kolom1' => $this->input->post('kolom1_644'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir644'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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

// QUERY UPDATE ISIAN
        public function update_isian111()
        {
            $last_version = $this->input->post('version_no111');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir111'),
                        'kolom1' => $this->input->post('kolom1_111'),
                        'kolom2' => $this->input->post('kolom2_111'),
                        'kolom3' => $this->input->post('kolom3_111'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id111')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir111'),
                        'kolom1' => $this->input->post('kolom1_111'),
                        'kolom2' => $this->input->post('kolom2_111'),
                        'kolom3' => $this->input->post('kolom3_111'),
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

        public function update_isian112()
        {
            $last_version = $this->input->post('version_no112');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir112'),
                        'kolom1' => $this->input->post('kolom1_112'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id112')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir112'),
                        'kolom1' => $this->input->post('kolom1_112'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at112')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir112'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id12')));

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

        public function update_isian21()
        {
            $last_version = $this->input->post('version_no21');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id21')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
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

        public function update_isian23()
        {
            $last_version = $this->input->post('version_no23');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'kolom2' => $this->input->post('kolom2_23'),
                        'kolom3' => $this->input->post('kolom3_23'),
                        'kolom4' => $this->input->post('kolom4_23'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id23')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'kolom2' => $this->input->post('kolom2_23'),
                        'kolom3' => $this->input->post('kolom3_23'),
                        'kolom4' => $this->input->post('kolom4_23'),
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

        public function update_isian22()
        {
            $last_version = $this->input->post('version_no22');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id22')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at22')),
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
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id24')));

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

        public function update_isian25()
        {
            $last_version = $this->input->post('version_no25');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_25'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id25')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir25'),
                        'kolom1' => $this->input->post('kolom1_25'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at25')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir25'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian311()
        {
            $last_version = $this->input->post('version_no311');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir311'),
                        'kolom1' => $this->input->post('kolom1_311'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                    );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id311')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir311'),
                        'kolom1' => $this->input->post('kolom1_311'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at311')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                    );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('311id_butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                    );

                $this->db->insert('log', $data);
        }

        public function update_isian312()
        {
            $last_version = $this->input->post('version_no312');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_312'),
                        'kolom2' => $this->input->post('kolom2_312'),
                        'kolom3' => $this->input->post('kolom3_312'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id312')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir312tabel'),
                        'kolom1' => $this->input->post('kolom1_312'),
                        'kolom2' => $this->input->post('kolom2_312'),
                        'kolom3' => $this->input->post('kolom3_312'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir312tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian313()
        {
            $last_version = $this->input->post('version_no313');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_313'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id313')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir313'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at313')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir313'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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

        public function update_isian321()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_321'),
                        'kolom2' => $this->input->post('kolom2_321'),
                        'kolom3' => $this->input->post('kolom3_321'),
                        'kolom4' => $this->input->post('kolom4_321'),
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

        public function update_isian322()
        {
            $last_version = $this->input->post('version_no322');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir322'),
                        'kolom1' => $this->input->post('kolom1_322'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id322')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir322'),
                        'kolom1' => $this->input->post('kolom1_322'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at322')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir322'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian411()
        {
            $last_version = $this->input->post('version_no411');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_411'),
                        'kolom2' => $this->input->post('kolom2_411'),
                        'kolom3' => $this->input->post('kolom3_411'),
                        'kolom4' => $this->input->post('kolom4_411'),
                        'kolom5' => $this->input->post('kolom5_411'),
                        'kolom6' => $this->input->post('kolom6_411'),
                        'kolom7' => $this->input->post('kolom7_411'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id411')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir411tabel'),
                        'kolom1' => $this->input->post('kolom1_411'),
                        'kolom2' => $this->input->post('kolom2_411'),
                        'kolom3' => $this->input->post('kolom3_411'),
                        'kolom4' => $this->input->post('kolom4_411'),
                        'kolom5' => $this->input->post('kolom5_411'),
                        'kolom6' => $this->input->post('kolom6_411'),
                        'kolom7' => $this->input->post('kolom7_411'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir411tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian412()
        {
            $last_version = $this->input->post('version_no412');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_412'),
                        'kolom2' => $this->input->post('kolom2_412'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id412')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir412tabel'),
                        'kolom1' => $this->input->post('kolom1_412'),
                        'kolom2' => $this->input->post('kolom2_412'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir412tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian413()
        {
            $last_version = $this->input->post('version_no413');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir413'),
                        'kolom1' => $this->input->post('kolom1_413'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id413')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir413'),
                        'kolom1' => $this->input->post('kolom1_413'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at413')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir413'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian42()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_42'),
                        'kolom2' => $this->input->post('kolom2_42'),
                        'kolom3' => $this->input->post('kolom3_42'),
                        'kolom4' => $this->input->post('kolom4_42'),
                        'kolom5' => $this->input->post('kolom5_42'),
                        'kolom6' => $this->input->post('kolom6_42'),
                        'kolom7' => $this->input->post('kolom7_42'),
                        'kolom8' => $this->input->post('kolom8_42'),
                        'kolom9' => $this->input->post('kolom9_42'),
                        'kolom10' => $this->input->post('kolom10_42'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id42')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir42tabel'),
                        'kolom1' => $this->input->post('kolom1_42'),
                        'kolom2' => $this->input->post('kolom2_42'),
                        'kolom3' => $this->input->post('kolom3_42'),
                        'kolom4' => $this->input->post('kolom4_42'),
                        'kolom5' => $this->input->post('kolom5_42'),
                        'kolom6' => $this->input->post('kolom6_42'),
                        'kolom7' => $this->input->post('kolom7_42'),
                        'kolom8' => $this->input->post('kolom8_42'),
                        'kolom9' => $this->input->post('kolom9_42'),
                        'kolom10' => $this->input->post('kolom10_42'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir42tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian51()
        {
            $last_version = $this->input->post('version_no51');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir51'),
                        'kolom1' => $this->input->post('kolom1_51'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id51')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir51'),
                        'kolom1' => $this->input->post('kolom1_51'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at51')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir51'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian52()
        {
            $last_version = $this->input->post('version_no52');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir52'),
                        'kolom1' => $this->input->post('kolom1_52'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id52')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir52'),
                        'kolom1' => $this->input->post('kolom1_52'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at52')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir52'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian53()
        {
            $last_version = $this->input->post('version_no53');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir53'),
                        'kolom1' => $this->input->post('kolom1_53'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id53')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir53'),
                        'kolom1' => $this->input->post('kolom1_53'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at53')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir53'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian612()
        {
            $last_version = $this->input->post('version_no612');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_612'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id612')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir612'),
                        'kolom1' => $this->input->post('kolom1_612'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at612')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir612'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian621()
        {
            $last_version = $this->input->post('version_no621');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir621'),
                        'kolom1' => $this->input->post('kolom1_621'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id621')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir621'),
                        'kolom1' => $this->input->post('kolom1_621'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at621')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir621'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian622()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian631()
        {
            $last_version = $this->input->post('version_no631');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir631'),
                        'kolom1' => $this->input->post('kolom1_631'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id631')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir631'),
                        'kolom1' => $this->input->post('kolom1_631'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at631')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir631'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian632()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_632'),
                        'kolom2' => $this->input->post('kolom2_632'),
                        'kolom3' => $this->input->post('kolom3_632'),
                        'kolom4' => $this->input->post('kolom4_632'),
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

        public function update_isian633()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian641()
        {
            $last_version = $this->input->post('version_no641');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_641'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id641')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir641'),
                        'kolom1' => $this->input->post('kolom1_641'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at641')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir641'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian642()
        {
            $last_version = $this->input->post('version_no642');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_642'),
                        'kolom2' => $this->input->post('kolom2_642'),
                        'kolom3' => $this->input->post('kolom3_642'),
                        'kolom4' => $this->input->post('kolom4_642'),
                        'kolom5' => $this->input->post('kolom5_642'),
                        'kolom6' => $this->input->post('kolom6_642'),
                        'kolom7' => $this->input->post('kolom7_642'),
                        'kolom8' => $this->input->post('kolom8_642'),
                        'kolom9' => $this->input->post('kolom9_642'),
                        'kolom10' => $this->input->post('kolom10_642'),
                        'kolom11' => $this->input->post('kolom11_642'),
                        'kolom12' => $this->input->post('kolom12_642'),
                        'kolom13' => $this->input->post('kolom13_642'),
                        'kolom14' => $this->input->post('kolom14_642'),
                        'kolom15' => $this->input->post('kolom15_642'),
                        'kolom16' => $this->input->post('kolom16_642'),
                        'kolom17' => $this->input->post('kolom17_642'),
                        'kolom18' => $this->input->post('kolom18_642'),
                        'kolom19' => $this->input->post('kolom19_642'),
                        'kolom20' => $this->input->post('kolom20_642'),
                        'kolom21' => $this->input->post('kolom21_642'),
                        'kolom22' => $this->input->post('kolom22_642'),
                        'kolom23' => $this->input->post('kolom23_642'),
                        'kolom24' => $this->input->post('kolom24_642'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id642')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir642tabel'),
                        'kolom1' => $this->input->post('kolom1_642'),
                        'kolom2' => $this->input->post('kolom2_642'),
                        'kolom3' => $this->input->post('kolom3_642'),
                        'kolom4' => $this->input->post('kolom4_642'),
                        'kolom5' => $this->input->post('kolom5_642'),
                        'kolom6' => $this->input->post('kolom6_642'),
                        'kolom7' => $this->input->post('kolom7_642'),
                        'kolom8' => $this->input->post('kolom8_642'),
                        'kolom9' => $this->input->post('kolom9_642'),
                        'kolom10' => $this->input->post('kolom10_642'),
                        'kolom11' => $this->input->post('kolom11_642'),
                        'kolom12' => $this->input->post('kolom12_642'),
                        'kolom13' => $this->input->post('kolom13_642'),
                        'kolom14' => $this->input->post('kolom14_642'),
                        'kolom15' => $this->input->post('kolom15_642'),
                        'kolom16' => $this->input->post('kolom16_642'),
                        'kolom17' => $this->input->post('kolom17_642'),
                        'kolom18' => $this->input->post('kolom18_642'),
                        'kolom19' => $this->input->post('kolom19_642'),
                        'kolom20' => $this->input->post('kolom20_642'),
                        'kolom21' => $this->input->post('kolom21_642'),
                        'kolom22' => $this->input->post('kolom22_642'),
                        'kolom23' => $this->input->post('kolom23_642'),
                        'kolom24' => $this->input->post('kolom24_642'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir642tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian643()
        {
            $last_version = $this->input->post('version_no643');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir643'),
                        'kolom1' => $this->input->post('kolom1_643'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id643')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir643'),
                        'kolom1' => $this->input->post('kolom1_643'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at643')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir643'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian644()
        {
            $last_version = $this->input->post('version_no644');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir644'),
                        'kolom1' => $this->input->post('kolom1_644'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id644')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir644'),
                        'kolom1' => $this->input->post('kolom1_644'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at644')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir644'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian711()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_711'),
                        'kolom2' => $this->input->post('kolom2_711'),
                        'kolom3' => $this->input->post('kolom3_711'),
                        'kolom4' => $this->input->post('kolom4_711'),
                        'kolom5' => $this->input->post('kolom5_711'),
                        'kolom6' => $this->input->post('kolom6_711'),
                        'kolom7' => $this->input->post('kolom7_711'),
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

        public function update_isian712()
        {
            $last_version = $this->input->post('version_no712');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir712'),
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id712')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir712'),
                        'kolom1' => $this->input->post('kolom1_712'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at712')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir712'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian721()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_721'),
                        'kolom2' => $this->input->post('kolom2_721'),
                        'kolom3' => $this->input->post('kolom3_721'),
                        'kolom4' => $this->input->post('kolom4_721'),
                        'kolom5' => $this->input->post('kolom5_721'),
                        'kolom6' => $this->input->post('kolom6_721'),
                        'kolom7' => $this->input->post('kolom7_721'),
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

        public function update_isian722()
        {
            $last_version = $this->input->post('version_no722');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir722'),
                        'kolom1' => $this->input->post('kolom1_722'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id722')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir722'),
                        'kolom1' => $this->input->post('kolom1_722'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at722')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir722'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian731()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian732()
        {
            $last_version = $this->input->post('version_no');
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

        public function findisian1kolomversion($column,$id){
              // $query = $this->db->get_where('isian_1kolom_version', array($column => $id));
            $query = $this->db->get_where('isian_16kolom_version', array($column => $id));
              return $query->result_array();
        }

        public function findisian311kolom($column,$id){
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

        public function findisian312kolom($column,$id){
                $this->db->select('*');
                $this->db->where($column,$id);
                $this->db->order_by("id","desc");
                $this->db->limit(4);
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

        public function findUpdateTbl($column,$id){
            return $this->db->select("*")
              ->from('isian_16kolom')
              ->where($column, $id)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();
        }

        public function findNilai($column,$id){
            return $this->db->select("*")
              ->from('hitungf3')
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

        public function findButirnyasama($column2,$id_borang,$column3,$butir){
            return $this->db->select("*")
              ->from('butir')
              ->where($column2, $id_borang)
              ->where($column3, $butir)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();
        }
// TUTUP QUERY FIND ISIAN

// QUERY DELETE ISIAN

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
