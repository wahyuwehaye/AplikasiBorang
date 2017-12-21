<?php

class M_uploadisi extends CI_Model {
        var $table = 'uploadisian';
        var $table1 = 'uploadisian_version';
        var $table2 = 'log';

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
                $this->load->database();
        }

        // Query baru buat upload

        public function count_all()
        {
                $this->db->from($this->table);
                return $this->db->count_all_results();
        }

        public function get_by_id($id)
        {
                $this->db->from($this->table);
                $this->db->where('id',$id);
                $query = $this->db->get();

                return $query->row();
        }

        public function get_by_id_hapus($id)
        {
                $this->db->from($this->table);
                $this->db->where('id_butir',$id);
                $query = $this->db->get();

                return $query->row();
        }

        public function save($data)
        {
                $this->db->insert($this->table, $data);
                return $this->db->insert_id();
        }

        public function save1($data1)
        {
                $this->db->insert($this->table1, $data1);
                return $this->db->insert_id();
        }

        public function save2($data2)
        {
                $this->db->insert($this->table2, $data2);
                return $this->db->insert_id();
        }

        public function update($where, $data)
        {
                $this->db->update($this->table, $data, $where);
                return $this->db->affected_rows();
        }

        public function delete_by_id($id)
        {
                $this->db->where('id', $id);
                $this->db->delete($this->table);
        }

        public function deleteuploadisi($id)
        {
                $this->db->where('id_butir', $id);
                $this->db->delete($this->table);
        }

        private function _do_upload()
          {
            $config['upload_path']          = 'uploads/isian/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 0; //set max size allowed in Kilobyte
            $config['max_width']            = 0; // set max width image allowed
            $config['max_height']           = 0; // set max height allowed
            // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
            $config['file_name']      = ($_FILES['filename']['name']);

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('isian')) //upload and validate
            {
              $data['inputerror'][] = 'isian';
              $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
              $data['status'] = FALSE;
              echo json_encode($data);
              exit();
            }
            return $this->upload->data('file_name');
          }

        // Tutup Query baru upload

// QUERY INSERT ISIAN
        public function insert_isian11()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir11'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                if(!empty($_FILES['isian']['name']))
                {
                        $upload = $this->_do_upload();
                        $data['isian'] = $upload;
                }
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir11'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                if(!empty($_FILES['isian']['name']))
                {
                        $upload = $this->_do_upload();
                        $data['isian'] = $upload;
                }
                $this->db->insert('uploadisian_version', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir11'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir11b'),
                        'kolom1' => $this->input->post('kolom1_11b'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir11b'),
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
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir21'),
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

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir22'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir23'),
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

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                $this->db->insert('uploadisian', $data);

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
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir25'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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
                $this->db->insert('uploadisian', $data);

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
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir26'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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

                // $this->db->insert('isian_4kolom', $data);
                $this->db->insert('uploadisian', $data);

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
                // $this->db->insert('isian_4kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir313'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian341()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir342'),
                        'kolom1' => $this->input->post('kolom1_342'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir421'),
                        'kolom1' => $this->input->post('kolom1_421'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir421'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian422()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir422'),
                        'kolom1' => $this->input->post('kolom1_422'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir422'),
                        'kolom1' => $this->input->post('kolom1_422'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir422'),
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
                $this->db->insert('uploadisian', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir'),
                        'kolom1' => $this->input->post('kolom11'),
                        'kolom2' => $this->input->post('kolom12'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                $this->db->insert('uploadisian_version', $data);
                // $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                // $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        
// TUTUP QUERY INSERT ISIAN 

// QUERY UPDATE ISIAN
        public function update_isian11()
        {
            $last_version = $this->input->post('version_no11');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir11'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_4kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id11')));

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
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir11'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id11b')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir11b'),
                        'kolom1' => $this->input->post('kolom1_11b'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at11b')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir11b'),
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
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id12')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir12'),
                        'kolom1' => $this->input->post('kolom1_12'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at12')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id21')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir21'),
                        'kolom1' => $this->input->post('kolom1_21'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at21')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir21'),
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
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id22')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir22'),
                        'kolom1' => $this->input->post('kolom1_22'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at22')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir22'),
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
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id23')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir23'),
                        'kolom1' => $this->input->post('kolom1_23'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at23')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id24')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir24'),
                        'kolom1' => $this->input->post('kolom1_24'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at24')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id25')));

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
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir25'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id26')));

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
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir26'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_isian313()
        {
            $last_version = $this->input->post('version_no11');
            $new_version = $last_version + 1;
                 $data = array(
                        'id_butir' => $this->input->post('id_butir313'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'kolom4' => $this->input->post('kolom4_313'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_4kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id313')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir313'),
                        'kolom1' => $this->input->post('kolom1_313'),
                        'kolom2' => $this->input->post('kolom2_313'),
                        'kolom3' => $this->input->post('kolom3_313'),
                        'kolom4' => $this->input->post('kolom4_313'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at313')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_4kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir313'),
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
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id341')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir341'),
                        'kolom1' => $this->input->post('kolom1_341'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at341')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id342')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir342'),
                        'kolom1' => $this->input->post('kolom1_342'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at342')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_1kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id41')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir41'),
                        'kolom1' => $this->input->post('kolom1_41'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at41')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id421')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir421'),
                        'kolom1' => $this->input->post('kolom1_421'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at421')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir421'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

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
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id422')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir422'),
                        'kolom1' => $this->input->post('kolom1_422'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at422')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_1kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian dari butir : ".$this->input->post('id_butir422'),
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
                 $this->db->update('uploadisian', $data, array('id' => $this->input->post('id')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir'),
                        'kolom1' => $this->input->post('kolom11'),
                        'kolom2' => $this->input->post('kolom12'),
                        'version_no' => $new_version,
                        'created_at'=> date($this->input->post('created_at')),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('uploadisian_version', $data);
                 $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');

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
            $query = $this->db->get('uploadisian');
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

        public function findbuktiupload($column,$id){
              // $query = $this->db->get_where('isian_1kolom', array($column => $id));
            $query = $this->db->get_where('dokumen', array($column => $id));
              return $query->result_array();
        }
// TUTUP QUERY FIND ISIAN

// QUERY DELETE ISIAN

        public function deleteisian1kolom($column,$id){

            // $this->db->delete('isian_1kolom', array($column => $id));
            // $this->db->query('ALTER TABLE isian_1kolom AUTO_INCREMENT 0');
            // $this->db->query('ALTER TABLE isian_1kolom_version AUTO_INCREMENT 0');
            $this->db->delete('uploadisian', array($column => $id));
            $this->db->delete('uploadisian_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');
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
            $this->db->delete('uploadisian', array($column => $id));
            $this->db->delete('uploadisian_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');
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
            $this->db->delete('uploadisian', array($column => $id));
            $this->db->delete('uploadisian_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');
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
            $this->db->delete('uploadisian', array($column => $id));
            $this->db->delete('uploadisian_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');
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
            $this->db->delete('uploadisian', array($column => $id));
            $this->db->delete('uploadisian_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');
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
            $this->db->delete('uploadisian', array($column => $id));
            $this->db->delete('uploadisian_version', array('id' => $id));
            $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 1');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        public function deleteuploadisian($column,$id){

            // $this->db->delete('isian_4kolom', array($column => $id));
            // $this->db->query('ALTER TABLE isian_4kolom AUTO_INCREMENT 0');
            // $this->db->query('ALTER TABLE isian_4kolom_version AUTO_INCREMENT 0');
            $this->db->delete('uploadisian', array($column => $id));
            $this->db->delete('uploadisian_version', array('id_kolom' => $id));
            $this->db->query('ALTER TABLE uploadisian AUTO_INCREMENT 0');
            $this->db->query('ALTER TABLE uploadisian_version AUTO_INCREMENT 0');
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Isian dengan id : ".$id,
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
