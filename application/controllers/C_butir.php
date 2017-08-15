<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_butir extends CI_Controller {

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
    }


	public function index()
	{
		if(isset($_SESSION['logged_in']))
		{
			$this->load->model('M_borang');
			$this->load->model('M_butir');
			$this->load->library('form_validation');

			$id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
    		$this->load->view('template/header',$data);
			$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_butir->find('id_borang',$id);
			$this->load->view('butir',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}


	}

	public function store(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$id=$_POST['id_borang'];
       	//form validation
		// $this->form_validation->set_rules('butir', 'Butir', 'required');
		// $this->form_validation->set_rules('bakumutu', 'Baku Mutu', 'required');
		// $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		// $this->form_validation->set_message('required', 'Field {field} wajib diisi.');
        // this->form_validation->run() == FALSE)
        // {
        //
        // 	$data['buku']=$this->M_borang->find('id',$id);
		// 	$data['butir']=$this->M_butir->find('id_borang',$id);
        //     $this->load->view('header');
		// 	$this->load->view('content-butir',$data);
		// 	$this->load->view('footer');
        // }
        // else
        // {
        	$this->M_butir->insert_entry();
        	redirect('butir/'.$_POST['id_borang']);
        	/*
        	$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_butir->find('id_borang',$id);
            $this->load->view('header');
			$this->load->view('content-butir',$data);
			$this->load->view('footer');
			*/
        // }

	}

	public function destroy($id,$borang){
		// $id=$_POST['id'];
        // $idbut=3;
		$this->load->model('M_butir');
		$result=$this->M_butir->delete('id',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butir/'.$idbut);
        redirect('butir/'.$borang);
	}

	public function update(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$id=$_POST['id_borang'];
       	//form validation
		// $this->form_validation->set_rules('butir', 'Butir', 'required');
		// $this->form_validation->set_rules('bakumutu', 'Baku Mutu', 'required');
		// $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		// $this->form_validation->set_message('required', 'Field {field} wajib diisi.');
        // this->form_validation->run() == FALSE)
        // {
        //
        // 	$data['buku']=$this->M_borang->find('id',$id);
		// 	$data['butir']=$this->M_butir->find('id_borang',$id);
        //     $this->load->view('header');
		// 	$this->load->view('content-butir',$data);
		// 	$this->load->view('footer');
        // }
        // else
        // {
        	$this->M_butir->update_entry();
			// $id=$_POST['id_borang'];
			// $url="/butir/".$id;
			// redirect($url);
			redirect('butir/'.$_POST['id_borang']);
        // }

	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_butir');
		$data=$this->M_butir->find('id',$id);
		echo json_encode($data);
	}
}