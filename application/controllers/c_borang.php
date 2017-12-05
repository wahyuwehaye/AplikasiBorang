<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_borang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct(){
	     parent::__construct();
	     $this->load->library('session');
	     $this->load->model('M_prodi');
		 $this->load->model('M_fakultas');
		 $this->load->model('M_borang');
    }


	public function index()
	{
	$this->load->library('session');
	//print_r($this->session);die();
			if(isset($_SESSION['logged_in']))
		{
			$id=$this->uri->segment(2, 0);
			// $this->load->library('form_validation');
            $data['active_menu']='borang';
    		$this->load->view('template/header',$data);
    		$data['prodi']=$this->M_prodi->find('id',$id);
    		$data['fakultas']=$this->M_borang->getidfakultas($id);
			$data['borang']=$this->M_borang->get_entire_data($id);
    		$this->load->view('borang',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}


	}

	public function store(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_borang');

       	//form validation
		// $this->form_validation->set_rules('tahun', 'Tahun', 'required|integer');
		//$this->form_validation->set_rules('buku', 'Buku', 'required');
		// $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		// $this->form_validation->set_message('required', 'Field {field} wajib diisi.');
        // this->form_validation->run() == FALSE)
        // {
        // 	$data['buku']=$this->buku_model->get_entire_data();
        //     $this->load->view('header');
		// 	$this->load->view('content-buku',$data);
		// 	$this->load->view('footer');
        // }
        // else
        // {
        	$this->M_borang->insert_entry();
        	redirect('borang/'.$_POST['id_prodi']);
            echo json_encode(array("status" => TRUE));
        // }

	}

	public function destroy($id,$redirect){
		// $id=$_POST['id'];
		$this->load->model('M_borang');
		$result=$this->M_borang->delete('id',$id);
		if($result > 0){
			echo json_encode('success');

		}else{
			echo json_encode('failed');
		}
        redirect('borang/'.$redirect);
	}



	public function update(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_borang');

       	//form validation
		// $this->form_validation->set_rules('tahun', 'Tahun', 'required|integer');
		// //$this->form_validation->set_rules('buku', 'Buku', 'required');
		// $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		// $this->form_validation->set_message('required', 'Field {field} wajib diisi.');
        // this->form_validation->run() == FALSE)
        // {
        // 	$data['buku']=$this->buku_model->get_entire_data();
        //     $this->load->view('header');
		// 	$this->load->view('content-buku',$data);
		// 	$this->load->view('footer');
        // }
        // else
        // {
        	$this->M_borang->update_entry();
        	redirect('borang/'.$_POST['id_prodi']);
        // }
	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_borang');
		$data=$this->M_borang->find('id',$id);
		echo json_encode($data);
	}
}
