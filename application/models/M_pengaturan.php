<?php

class M_pengaturan extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function get_entire_data()
        {
                //$query = $this->db->get('pengaturan');
                //return $query->result();
				return $this->db->select("*")
              ->from('pengaturan')
              ->order_by('id', 'DESC')
              ->get()
              ->result();
        }

        public function get_dokumenpendukung_data(){
            return $this->db->select("*")
              ->from('dokumenpendukungf1')
              ->order_by('id', 'DESC')
              ->get()
              ->result();
        }

        public function insert_entry()
        {
                $data = array(
                        'nama_fitur' => $this->input->post('nama_fitur'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('pengaturan', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambah pengaturan dengan Nama : ". $this->input->post('nama_fitur'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_entry()
        {
                $data = array(
                        'nama_fitur'  => $this->input->post('nama_fitur'),
                        'updated_at'=> date('Y-m-d H:i:s')
                );
				$this->db->update('pengaturan', $data, array('id' => $_POST['idpengaturan']));

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Nama pengaturan dengan id : ".$_POST['idpengaturan']." menjadi : ". $this->input->post('nama_fitur'),
                        'created_at'=> date('Y-m-d H:i:s')
                );
                $this->db->insert('log', $data);

        }

        public function find($column,$id){
              $query = $this->db->get_where('pengaturan', array($column => $id));
              return $query->result_array();
        }

        public function delete($column,$id){
            $data = array(
                       'user'=> $_SESSION['name'],
                       'action' => "Menghapus Nama pengaturan dengan id:".$id,
                       'created_at'=> date('Y-m-d H:i:s')
            );

            $this->db->insert('log', $data);

            $this->db->delete('pengaturan', array($column => $id));
            $this->db->query('ALTER TABLE pengaturan AUTO_INCREMENT 1');
            return $this->db->affected_rows();


        }

}
?>
