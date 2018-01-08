<?php

class M_unit extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function get_entire_data($id_prodi)
        {
                //$query = $this->db->get('borang');
                //return $query->result();
				return $this->db->select("*")
              ->from('borang')
              ->where('id_prodi', $id_prodi)
              ->order_by('id', 'DESC')
              ->get()
              ->result();
        }

        public function get_all_data()
        {
        return $this->db->select("*")
              ->from('borang')
              ->order_by('id', 'DESC')
              ->get()
              ->result();
        }

        public function insert_isian311admisi()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir311'),
                        'kolom1' => $this->input->post('kolom1_311'),
                        'kolom2' => $this->input->post('kolom2_311'),
                        'kolom3' => $this->input->post('kolom3_311'),
                        'kolom4' => $this->input->post('kolom4_311'),
                        'kolom5' => $this->input->post('kolom5_311'),
                        'kolom6' => 'needed',
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir311'),
                        'kolom1' => $this->input->post('kolom1_311'),
                        'kolom2' => $this->input->post('kolom2_311'),
                        'kolom3' => $this->input->post('kolom3_311'),
                        'kolom4' => $this->input->post('kolom4_311'),
                        'kolom5' => $this->input->post('kolom5_311'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir311'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_isian311kemahasiswaan()
        {
                $data = array(
                        'id_butir' => $this->input->post('id_butir311'),
                        'kolom1' => 'needed',
                        'kolom6' => $this->input->post('kolom6_311'),
                        'kolom7' => $this->input->post('kolom7_311'),
                        'kolom8' => $this->input->post('kolom8_311'),
                        'kolom9' => $this->input->post('kolom9_311'),
                        'kolom10' => $this->input->post('kolom10_311'),
                        'kolom11' => $this->input->post('kolom11_311'),
                        'kolom12' => $this->input->post('kolom12_311'),
                        'kolom13' => $this->input->post('kolom13_311'),
                        'kolom14' => $this->input->post('kolom14_311'),
                        'kolom15' => $this->input->post('kolom15_311'),
                        'version_no' => "1",
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );

                // $this->db->insert('isian_1kolom', $data);
                $this->db->insert('isian_16kolom', $data);

                $data = array(
                        'id_kolom' => $this->input->post('id_butir311'),
                        'kolom6' => $this->input->post('kolom6_311'),
                        'kolom7' => $this->input->post('kolom7_311'),
                        'kolom8' => $this->input->post('kolom8_311'),
                        'kolom9' => $this->input->post('kolom9_311'),
                        'kolom10' => $this->input->post('kolom10_311'),
                        'kolom11' => $this->input->post('kolom11_311'),
                        'kolom12' => $this->input->post('kolom12_311'),
                        'kolom13' => $this->input->post('kolom13_311'),
                        'kolom14' => $this->input->post('kolom14_311'),
                        'kolom15' => $this->input->post('kolom15_311'),
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
                        'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir311'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function updateisian311admisi()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom1' => $this->input->post('kolom1_311'),
                        'kolom2' => $this->input->post('kolom2_311'),
                        'kolom3' => $this->input->post('kolom3_311'),
                        'kolom4' => $this->input->post('kolom4_311'),
                        'kolom5' => $this->input->post('kolom5_311'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id311')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir311'),
                        'kolom1' => $this->input->post('kolom1_311'),
                        'kolom2' => $this->input->post('kolom2_311'),
                        'kolom3' => $this->input->post('kolom3_311'),
                        'kolom4' => $this->input->post('kolom4_311'),
                        'kolom5' => $this->input->post('kolom5_311'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir311'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function updateisian311kemahasiswaan()
        {
            $last_version = $this->input->post('version_no');
            $new_version = $last_version + 1;
                 $data = array(
                        'kolom6' => $this->input->post('kolom6_311'),
                        'kolom7' => $this->input->post('kolom7_311'),
                        'kolom8' => $this->input->post('kolom8_311'),
                        'kolom9' => $this->input->post('kolom9_311'),
                        'kolom10' => $this->input->post('kolom10_311'),
                        'kolom11' => $this->input->post('kolom11_311'),
                        'kolom12' => $this->input->post('kolom12_311'),
                        'kolom13' => $this->input->post('kolom13_311'),
                        'kolom14' => $this->input->post('kolom14_311'),
                        'kolom15' => $this->input->post('kolom15_311'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->update('isian_2kolom', $data, array('id' => $this->input->post('id')));
                 $this->db->update('isian_16kolom', $data, array('id' => $this->input->post('id311')));

                 $data = array(
                        'id_kolom' => $this->input->post('id_butir311'),
                        'kolom6' => $this->input->post('kolom6_311'),
                        'kolom7' => $this->input->post('kolom7_311'),
                        'kolom8' => $this->input->post('kolom8_311'),
                        'kolom9' => $this->input->post('kolom9_311'),
                        'kolom10' => $this->input->post('kolom10_311'),
                        'kolom11' => $this->input->post('kolom11_311'),
                        'kolom12' => $this->input->post('kolom12_311'),
                        'kolom13' => $this->input->post('kolom13_311'),
                        'kolom14' => $this->input->post('kolom14_311'),
                        'kolom15' => $this->input->post('kolom15_311'),
                        'version_no' => $new_version,
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                // $this->db->insert('isian_2kolom_version', $data);
                 $this->db->insert('isian_16kolom_version', $data);
                 $this->db->query('ALTER TABLE isian_16kolom AUTO_INCREMENT 1');
                $this->db->query('ALTER TABLE isian_16kolom_version AUTO_INCREMENT 1');

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Isian Tabel dari butir : ".$this->input->post('id_butir311'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_entry()
        {
                $data = array(
                        'id_prodi' => $this->input->post('id_prodi'),
                        'jenis' => $this->input->post('jenis'),
                        'fakpro' => $this->input->post('fakpro'),
                        'tahun' => $this->input->post('tahun'),
                        'buku'  => $this->input->post('buku'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('borang', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambah buku borang dengan jenis : ". $this->input->post('jenis')." tahun - ". $this->input->post('tahun')." fakultas/prodi : ". $this->input->post('fakpro')." buku : ". $this->input->post('buku'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function insert_default_borang_prodi($idprodi,$prodi){
          $jenisborang = str_replace('%20', ' ', $prodi);
          $jenisnya = stripos($jenisborang, 'Fakultas');
          if ($jenisnya !== FALSE) {
            $jen = '3B';
          }else{
            $jen = '3A';
          }
          $data = array(
                      array(
                        'id_prodi' => $idprodi,
                        'jenis' => 'Borang '.$jen,
                        'fakpro' => $jenisborang,
                        'tahun' => date('Y'),
                        'buku'  => 'Borang',
                        'created_at'=> date('Y-m-d H:i:s')
                      ), 
                      array(
                        'id_prodi' => $idprodi,
                        'jenis' => 'Excel '.$jen,
                        'fakpro' => $jenisborang,
                        'tahun' => date('Y'),
                        'buku'  => 'Borang',
                        'created_at'=> date('Y-m-d H:i:s')
                      ), 
                      array(
                        'id_prodi' => $idprodi,
                        'jenis' => 'Evaluasi Diri '.$jen,
                        'fakpro' => $jenisborang,
                        'tahun' => date('Y'),
                        'buku'  => 'Borang',
                        'created_at'=> date('Y-m-d H:i:s')
                      ), 
                      array(
                        'id_prodi' => $idprodi,
                        'jenis' => 'Lampiran '.$jen,
                        'fakpro' => $jenisborang,
                        'tahun' => date('Y'),
                        'buku'  => 'Borang',
                        'created_at'=> date('Y-m-d H:i:s')
                      )
          );
          $this->db->insert_batch('borang', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambah buku 4 buku borang 3A baru",
                        'created_at'=> date('Y-m-d H:i:s')
                );
                $this->db->insert('log', $data);
        }

        public function update_entry()
        {
                $data = array(
                        'id_prodi' => $this->input->post('id_prodi'),
                        'jenis'  => $this->input->post('jenis'),
                        'fakpro' => $this->input->post('fakpro'),
                        'tahun'  => $this->input->post('tahun'),
                        'buku'   => $this->input->post('buku'),
                        'updated_at'=> date('Y-m-d H:i:s')
                );
				$this->db->update('borang', $data, array('id' => $_POST['idBorang']));

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah buku dengan id : ".$_POST['idBorang']." menjadi : Jenis : ". $this->input->post('jenis')." tahun - ". $this->input->post('tahun')." fakultas/prodi : ". $this->input->post('fakpro')." buku : ". $this->input->post('buku'),
                        'created_at'=> date('Y-m-d H:i:s')
                );
                $this->db->insert('log', $data);

        }

        public function find($column,$id){
              $query = $this->db->get_where('borang', array($column => $id));
              return $query->result_array();
        }

        public function getidfakultas($id){
            return $this->db->select("fakultas.id, fakultas.nama")
              ->from('fakultas')
              ->join('prodi','prodi.id_fakultas=fakultas.id')
              ->where('prodi.id', $id)
              ->get()
              ->result_array();
        }

        public function delete($column,$id){
            $data = array(
                       'user'=> $_SESSION['name'],
                       'action' => "Menghapus buku dengan id:".$id,
                       'created_at'=> date('Y-m-d H:i:s')
            );

            $this->db->insert('log', $data);

            $this->db->delete('borang', array($column => $id));
            $this->db->query('ALTER TABLE borang AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE Lampiran AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE dokumenpendukung AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE nilaif1 AUTO_INCREMENT 1');
            $this->db->query('ALTER TABLE butir AUTO_INCREMENT 1');
            return $this->db->affected_rows();



        }

}
?>
