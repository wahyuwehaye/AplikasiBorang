<?php

class M_borang extends CI_Model {

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
                        'action' => "Menambah buku dengan jenis : ". $this->input->post('jenis')." tahun - ". $this->input->post('tahun')." fakultas/prodi : ". $this->input->post('fakpro')." buku : ". $this->input->post('buku'),
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
            return $this->db->affected_rows();



        }

}
?>
