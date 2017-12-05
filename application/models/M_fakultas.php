<?php

class M_fakultas extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function get_entire_data()
        {
                //$query = $this->db->get('fakultas');
                //return $query->result();
				return $this->db->select("*")
              ->from('fakultas')
              ->order_by('id', 'DESC')
              ->get()
              ->result();
        }

        public function insert_entry()
        {
                $data = array(
                        'nama' => $this->input->post('nama'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('fakultas', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambah Fakultas dengan Nama : ". $this->input->post('nama'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_entry()
        {
                $data = array(
                        'nama'  => $this->input->post('nama'),
                        'updated_at'=> date('Y-m-d H:i:s')
                );
				$this->db->update('fakultas', $data, array('id' => $_POST['idfakultas']));

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Nama Fakultas dengan id : ".$_POST['idfakultas']." menjadi : ". $this->input->post('nama'),
                        'created_at'=> date('Y-m-d H:i:s')
                );
                $this->db->insert('log', $data);

        }

        public function find($column,$id){
              $query = $this->db->get_where('fakultas', array($column => $id));
              return $query->result_array();
        }

        public function delete($column,$id){
            $data = array(
                       'user'=> $_SESSION['name'],
                       'action' => "Menghapus Nama Fakultas dengan id:".$id,
                       'created_at'=> date('Y-m-d H:i:s')
            );

            $this->db->insert('log', $data);

            $this->db->delete('fakultas', array($column => $id));
            $this->db->query('ALTER TABLE fakultas AUTO_INCREMENT 1');
            return $this->db->affected_rows();


        }

}
?>
