<?php

class M_isian3bs1 extends CI_Model {

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

                // $this->db->insert('isian_1kolom', $data);
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

        public function insert_isian251()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir251'),
                        'kolom1' => $this->input->post('kolom1_251'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir251'),
                        'kolom1' => $this->input->post('kolom1_251'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir251'),
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

        public function insert_isian314()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir314'),
                        'kolom1' => $this->input->post('kolom1_314'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir314'),
                        'kolom1' => $this->input->post('kolom1_314'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir314'),
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

        public function insert_isian331a()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir331a'),
                        'kolom1' => $this->input->post('kolom1_331a'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir331a'),
                        'kolom1' => $this->input->post('kolom1_331a'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir331a'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian331b()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir331b'),
                        'kolom1' => $this->input->post('kolom1_331b'),
                        'kolom2' => $this->input->post('kolom2_331b'),
                        'kolom3' => $this->input->post('kolom3_331b'),
                        'kolom4' => $this->input->post('kolom4_331b'),
                        'kolom5' => $this->input->post('kolom5_331b'),
                        'kolom6' => $this->input->post('kolom6_331b'),
                        'kolom7' => $this->input->post('kolom7_331b'),
                        'kolom8' => $this->input->post('kolom8_331b'),
                        'kolom9' => $this->input->post('kolom9_331b'),
                        'kolom10' => $this->input->post('kolom10_331b'),
                        'kolom11' => $this->input->post('kolom11_331b'),
                        'kolom12' => $this->input->post('kolom12_331b'),
                        'kolom13' => $this->input->post('kolom13_331b'),
                        'kolom14' => $this->input->post('kolom14_331b'),
                        'kolom15' => $this->input->post('kolom15_331b'),
                        'kolom16' => $this->input->post('kolom16_331b'),
                        'kolom17' => $this->input->post('kolom17_331b'),
                        'kolom18' => $this->input->post('kolom18_331b'),
                        'kolom19' => $this->input->post('kolom19_331b'),
                        'kolom20' => $this->input->post('kolom20_331b'),
                        'kolom21' => $this->input->post('kolom21_331b'),
                        'kolom22' => $this->input->post('kolom22_331b'),
                        'kolom23' => $this->input->post('kolom23_331b'),
                        'kolom24' => $this->input->post('kolom24_331b'),
                        'kolom25' => $this->input->post('kolom25_331b'),
                        'kolom26' => $this->input->post('kolom26_331b'),
                        'kolom27' => $this->input->post('kolom27_331b'),
                        'kolom28' => $this->input->post('kolom28_331b'),
                        'kolom29' => $this->input->post('kolom29_331b'),
                        'kolom30' => $this->input->post('kolom30_331b'),
                        'kolom31' => $this->input->post('kolom31_331b'),
                        'kolom32' => $this->input->post('kolom32_331b'),
                        'kolom33' => $this->input->post('kolom33_331b'),
                        'kolom34' => $this->input->post('kolom34_331b'),
                        'kolom35' => $this->input->post('kolom35_331b'),
                        'kolom36' => $this->input->post('kolom36_331b'),
                        'kolom37' => $this->input->post('kolom37_331b'),
                        'kolom38' => $this->input->post('kolom38_331b'),
                        'kolom39' => $this->input->post('kolom39_331b'),
                        'kolom40' => $this->input->post('kolom40_331b'),
                        'kolom41' => $this->input->post('kolom41_331b'),
                        'kolom42' => $this->input->post('kolom42_331b'),
                        'kolom43' => $this->input->post('kolom43_331b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir331b'),
                        'kolom1' => $this->input->post('kolom1_331b'),
                        'kolom2' => $this->input->post('kolom2_331b'),
                        'kolom3' => $this->input->post('kolom3_331b'),
                        'kolom4' => $this->input->post('kolom4_331b'),
                        'kolom5' => $this->input->post('kolom5_331b'),
                        'kolom6' => $this->input->post('kolom6_331b'),
                        'kolom7' => $this->input->post('kolom7_331b'),
                        'kolom8' => $this->input->post('kolom8_331b'),
                        'kolom9' => $this->input->post('kolom9_331b'),
                        'kolom10' => $this->input->post('kolom10_331b'),
                        'kolom11' => $this->input->post('kolom11_331b'),
                        'kolom12' => $this->input->post('kolom12_331b'),
                        'kolom13' => $this->input->post('kolom13_331b'),
                        'kolom14' => $this->input->post('kolom14_331b'),
                        'kolom15' => $this->input->post('kolom15_331b'),
                        'kolom16' => $this->input->post('kolom16_331b'),
                        'kolom17' => $this->input->post('kolom17_331b'),
                        'kolom18' => $this->input->post('kolom18_331b'),
                        'kolom19' => $this->input->post('kolom19_331b'),
                        'kolom20' => $this->input->post('kolom20_331b'),
                        'kolom21' => $this->input->post('kolom21_331b'),
                        'kolom22' => $this->input->post('kolom22_331b'),
                        'kolom23' => $this->input->post('kolom23_331b'),
                        'kolom24' => $this->input->post('kolom24_331b'),
                        'kolom25' => $this->input->post('kolom25_331b'),
                        'kolom26' => $this->input->post('kolom26_331b'),
                        'kolom27' => $this->input->post('kolom27_331b'),
                        'kolom28' => $this->input->post('kolom28_331b'),
                        'kolom29' => $this->input->post('kolom29_331b'),
                        'kolom30' => $this->input->post('kolom30_331b'),
                        'kolom31' => $this->input->post('kolom31_331b'),
                        'kolom32' => $this->input->post('kolom32_331b'),
                        'kolom33' => $this->input->post('kolom33_331b'),
                        'kolom34' => $this->input->post('kolom34_331b'),
                        'kolom35' => $this->input->post('kolom35_331b'),
                        'kolom36' => $this->input->post('kolom36_331b'),
                        'kolom37' => $this->input->post('kolom37_331b'),
                        'kolom38' => $this->input->post('kolom38_331b'),
                        'kolom39' => $this->input->post('kolom39_331b'),
                        'kolom40' => $this->input->post('kolom40_331b'),
                        'kolom41' => $this->input->post('kolom41_331b'),
                        'kolom42' => $this->input->post('kolom42_331b'),
                        'kolom43' => $this->input->post('kolom43_331b'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir331b'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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

        public function insert_isian434()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir434'),
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
                        'id_kolom' => $this->input->post('id_butir434'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir434'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian435()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir435'),
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
                        'id_kolom' => $this->input->post('id_butir435'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir435'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian441()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir441'),
                        'kolom1' => $this->input->post('kolom1_441'),
                        'kolom2' => $this->input->post('kolom2_441'),
                        'kolom3' => $this->input->post('kolom3_441'),
                        'kolom4' => $this->input->post('kolom4_441'),
                        'kolom5' => $this->input->post('kolom5_441'),
                        'kolom6' => $this->input->post('kolom6_441'),
                        'kolom7' => $this->input->post('kolom7_441'),
                        'kolom8' => $this->input->post('kolom8_441'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir441'),
                        'kolom1' => $this->input->post('kolom1_441'),
                        'kolom2' => $this->input->post('kolom2_441'),
                        'kolom3' => $this->input->post('kolom3_441'),
                        'kolom4' => $this->input->post('kolom4_441'),
                        'kolom5' => $this->input->post('kolom5_441'),
                        'kolom6' => $this->input->post('kolom6_441'),
                        'kolom7' => $this->input->post('kolom7_441'),
                        'kolom8' => $this->input->post('kolom8_441'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir441'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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

        public function insert_isian451()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir451'),
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
                        'kolom4' => $this->input->post('kolom4_451'),
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

        public function insert_isian452()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir452'),
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'kolom4' => $this->input->post('kolom4_452'),
                        'kolom5' => $this->input->post('kolom5_452'),
                        'kolom6' => $this->input->post('kolom6_452'),
                        'kolom7' => $this->input->post('kolom7_452'),
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
                        'kolom5' => $this->input->post('kolom5_452'),
                        'kolom6' => $this->input->post('kolom6_452'),
                        'kolom7' => $this->input->post('kolom7_452'),
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

        public function update_isian251()
        {
            $last_version = $this->input->post('version_no251');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir251'),
                        'kolom1' => $this->input->post('kolom1_251'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id251')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir251'),
                        'kolom1' => $this->input->post('kolom1_251'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at251')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                 $this->db->insert('isian_16kolom_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir251'),
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
                        'kolom4' => $this->input->post('kolom4_312'),
                        'kolom5' => $this->input->post('kolom5_312'),
                        'kolom6' => $this->input->post('kolom6_312'),
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
                        'kolom4' => $this->input->post('kolom4_312'),
                        'kolom5' => $this->input->post('kolom5_312'),
                        'kolom6' => $this->input->post('kolom6_312'),
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

        public function update_isian314()
        {
            $last_version = $this->input->post('version_no314');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir314'),
                        'kolom1' => $this->input->post('kolom1_314'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id314')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir314'),
                        'kolom1' => $this->input->post('kolom1_314'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at314')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir314'),
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

        public function update_isian331a()
        {
            $last_version = $this->input->post('version_no331a');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir331a'),
                        'kolom1' => $this->input->post('kolom1_331a'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id331a')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir331a'),
                        'kolom1' => $this->input->post('kolom1_331a'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at331a')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir331a'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian331b()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_331b'),
                        'kolom2' => $this->input->post('kolom2_331b'),
                        'kolom3' => $this->input->post('kolom3_331b'),
                        'kolom4' => $this->input->post('kolom4_331b'),
                        'kolom5' => $this->input->post('kolom5_331b'),
                        'kolom6' => $this->input->post('kolom6_331b'),
                        'kolom7' => $this->input->post('kolom7_331b'),
                        'kolom8' => $this->input->post('kolom8_331b'),
                        'kolom9' => $this->input->post('kolom9_331b'),
                        'kolom10' => $this->input->post('kolom10_331b'),
                        'kolom11' => $this->input->post('kolom11_331b'),
                        'kolom12' => $this->input->post('kolom12_331b'),
                        'kolom13' => $this->input->post('kolom13_331b'),
                        'kolom14' => $this->input->post('kolom14_331b'),
                        'kolom15' => $this->input->post('kolom15_331b'),
                        'kolom16' => $this->input->post('kolom16_331b'),
                        'kolom17' => $this->input->post('kolom17_331b'),
                        'kolom18' => $this->input->post('kolom18_331b'),
                        'kolom19' => $this->input->post('kolom19_331b'),
                        'kolom20' => $this->input->post('kolom20_331b'),
                        'kolom21' => $this->input->post('kolom21_331b'),
                        'kolom22' => $this->input->post('kolom22_331b'),
                        'kolom23' => $this->input->post('kolom23_331b'),
                        'kolom24' => $this->input->post('kolom24_331b'),
                        'kolom25' => $this->input->post('kolom25_331b'),
                        'kolom26' => $this->input->post('kolom26_331b'),
                        'kolom27' => $this->input->post('kolom27_331b'),
                        'kolom28' => $this->input->post('kolom28_331b'),
                        'kolom29' => $this->input->post('kolom29_331b'),
                        'kolom30' => $this->input->post('kolom30_331b'),
                        'kolom31' => $this->input->post('kolom31_331b'),
                        'kolom32' => $this->input->post('kolom32_331b'),
                        'kolom33' => $this->input->post('kolom33_331b'),
                        'kolom34' => $this->input->post('kolom34_331b'),
                        'kolom35' => $this->input->post('kolom35_331b'),
                        'kolom36' => $this->input->post('kolom36_331b'),
                        'kolom37' => $this->input->post('kolom37_331b'),
                        'kolom38' => $this->input->post('kolom38_331b'),
                        'kolom39' => $this->input->post('kolom39_331b'),
                        'kolom40' => $this->input->post('kolom40_331b'),
                        'kolom41' => $this->input->post('kolom41_331b'),
                        'kolom42' => $this->input->post('kolom42_331b'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id331b')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir331btabel'),
                        'kolom1' => $this->input->post('kolom1_331b'),
                        'kolom2' => $this->input->post('kolom2_331b'),
                        'kolom3' => $this->input->post('kolom3_331b'),
                        'kolom4' => $this->input->post('kolom4_331b'),
                        'kolom5' => $this->input->post('kolom5_331b'),
                        'kolom6' => $this->input->post('kolom6_331b'),
                        'kolom7' => $this->input->post('kolom7_331b'),
                        'kolom8' => $this->input->post('kolom8_331b'),
                        'kolom9' => $this->input->post('kolom9_331b'),
                        'kolom10' => $this->input->post('kolom10_331b'),
                        'kolom11' => $this->input->post('kolom11_331b'),
                        'kolom12' => $this->input->post('kolom12_331b'),
                        'kolom13' => $this->input->post('kolom13_331b'),
                        'kolom14' => $this->input->post('kolom14_331b'),
                        'kolom15' => $this->input->post('kolom15_331b'),
                        'kolom16' => $this->input->post('kolom16_331b'),
                        'kolom17' => $this->input->post('kolom17_331b'),
                        'kolom18' => $this->input->post('kolom18_331b'),
                        'kolom19' => $this->input->post('kolom19_331b'),
                        'kolom20' => $this->input->post('kolom20_331b'),
                        'kolom21' => $this->input->post('kolom21_331b'),
                        'kolom22' => $this->input->post('kolom22_331b'),
                        'kolom23' => $this->input->post('kolom23_331b'),
                        'kolom24' => $this->input->post('kolom24_331b'),
                        'kolom25' => $this->input->post('kolom25_331b'),
                        'kolom26' => $this->input->post('kolom26_331b'),
                        'kolom27' => $this->input->post('kolom27_331b'),
                        'kolom28' => $this->input->post('kolom28_331b'),
                        'kolom29' => $this->input->post('kolom29_331b'),
                        'kolom30' => $this->input->post('kolom30_331b'),
                        'kolom31' => $this->input->post('kolom31_331b'),
                        'kolom32' => $this->input->post('kolom32_331b'),
                        'kolom33' => $this->input->post('kolom33_331b'),
                        'kolom34' => $this->input->post('kolom34_331b'),
                        'kolom35' => $this->input->post('kolom35_331b'),
                        'kolom36' => $this->input->post('kolom36_331b'),
                        'kolom37' => $this->input->post('kolom37_331b'),
                        'kolom38' => $this->input->post('kolom38_331b'),
                        'kolom39' => $this->input->post('kolom39_331b'),
                        'kolom40' => $this->input->post('kolom40_331b'),
                        'kolom41' => $this->input->post('kolom41_331b'),
                        'kolom42' => $this->input->post('kolom42_331b'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir331btabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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

        public function update_isian441()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_441'),
                        'kolom2' => $this->input->post('kolom2_441'),
                        'kolom3' => $this->input->post('kolom3_441'),
                        'kolom4' => $this->input->post('kolom4_441'),
                        'kolom5' => $this->input->post('kolom5_441'),
                        'kolom6' => $this->input->post('kolom6_441'),
                        'kolom7' => $this->input->post('kolom7_441'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id441')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir441tabel'),
                        'kolom1' => $this->input->post('kolom1_441'),
                        'kolom2' => $this->input->post('kolom2_441'),
                        'kolom3' => $this->input->post('kolom3_441'),
                        'kolom4' => $this->input->post('kolom4_441'),
                        'kolom5' => $this->input->post('kolom5_441'),
                        'kolom6' => $this->input->post('kolom6_441'),
                        'kolom7' => $this->input->post('kolom7_441'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir441tabel'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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

        public function update_isian451()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_451'),
                        'kolom2' => $this->input->post('kolom2_451'),
                        'kolom3' => $this->input->post('kolom3_451'),
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

        public function update_isian452()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_452'),
                        'kolom2' => $this->input->post('kolom2_452'),
                        'kolom3' => $this->input->post('kolom3_452'),
                        'kolom4' => $this->input->post('kolom4_452'),
                        'kolom5' => $this->input->post('kolom5_452'),
                        'kolom6' => $this->input->post('kolom6_452'),
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
                        'kolom4' => $this->input->post('kolom4_452'),
                        'kolom5' => $this->input->post('kolom5_452'),
                        'kolom6' => $this->input->post('kolom6_452'),
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

        public function update_isian623()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian631()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian632()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian641a()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian641c()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian643()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian652()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian713()
        {
            $last_version = $this->input->post('version_no');
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

        public function update_isian714()
        {
            $last_version = $this->input->post('version_no');
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
						'flag'	=> $this->input->post('flag')
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
						'flag'	=> $this->input->post('flag')
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
