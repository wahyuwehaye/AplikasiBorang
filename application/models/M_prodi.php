<?php

class M_prodi extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function get_entire_data($id_fakultas)
        {
                //$query = $this->db->get('prodi');
                //return $query->result();
				return $this->db->select("*")
              ->from('prodi')
              ->where('id_fakultas', $id_fakultas)
              ->order_by('id', 'DESC')
              ->get()
              ->result();
        }

        public function insert_entry()
        {
                $data = array(
                        'id_fakultas' => $this->input->post('id_fakultas'),
                        'nama' => $this->input->post('nama'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('prodi', $data);

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambah Prodi dengan Nama : ". $this->input->post('nama'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_entry()
        {
                $data = array(
                        'id_fakultas' => $this->input->post('id_fakultas'),
                        'nama'  => $this->input->post('nama'),
                        'updated_at'=> date('Y-m-d H:i:s')
                );
				$this->db->update('prodi', $data, array('id' => $_POST['idprodi']));

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Nama Prodi dengan id : ".$_POST['idprodi']." menjadi : ". $this->input->post('nama'),
                        'created_at'=> date('Y-m-d H:i:s')
                );
                $this->db->insert('log', $data);

        }

        public function find($column,$id){
              $query = $this->db->get_where('prodi', array($column => $id));
              return $query->result_array();
        }

        public function delete($column,$id){
            $data = array(
                       'user'=> $_SESSION['name'],
                       'action' => "Menghapus Nama Prodi dengan id:".$id,
                       'created_at'=> date('Y-m-d H:i:s')
            );

            $this->db->insert('log', $data);

            $this->db->delete('prodi', array($column => $id));
            $this->db->query('ALTER TABLE prodi AUTO_INCREMENT 1');
            return $this->db->affected_rows();


        }

}
?>
