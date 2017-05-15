<?php

class M_butir extends CI_Model {

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

        public function insert_entry()
        {
                $data = array(
                        'butir' => $this->input->post('butir'),
                        'bakumutu' => $this->input->post('bakumutu'),
                        // 'penjelasan' => $this->input->post('penjelasan'),
                        'keterangan' => $this->input->post('keterangan'),
                        'id_borang' => $this->input->post('id_borang'),
                        'created_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('butir', $data);
                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Butir  ".$this->input->post('butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }

        public function update_entry()
        {
                $data = array(
                        'butir' => $this->input->post('butir'),
                        'bakumutu' => $this->input->post('bakumutu'),
                        // 'penjelasan' => $this->input->post('penjelasan'),
                        'keterangan' => $this->input->post('keterangan'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->update('butir', $data, array('id' => $_POST['idButir']));

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Butir : ".$this->input->post('butir')." dengan ID : ".$this->input->post('idButir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );
                $this->db->insert('log', $data);
        }

        public function find($column,$id){
            return $this->db->select("*")
              ->from('butir')
              ->where($column, $id)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();

        }

        public function delete($column,$id){

            $this->db->delete('butir', array($column => $id));
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Butir dengan ID ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();




        }

}
?>
