<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_fakultas extends CI_Controller {

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
		 $this->load->model('M_fakultas');
    }


	public function index()
	{
	$this->load->library('session');
			if(isset($_SESSION['logged_in']))
		{
            $data['active_menu']='borang';
    		$this->load->view('template/header',$data);
			$data['fakultas']=$this->M_fakultas->get_entire_data();
    		$this->load->view('fakultas',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}


	}

	public function store(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_fakultas');
        $this->M_fakultas->insert_entry();
        redirect('/fakultas');
        echo json_encode(array("status" => TRUE));

	}

	public function destroy($id){
		// $id=$_POST['id'];
		$this->load->model('M_fakultas');
		$result=$this->M_fakultas->delete('id',$id);
		if($result > 0){
			echo json_encode('success');

		}else{
			echo json_encode('failed');
		}
        redirect('/fakultas');
	}



	public function update(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_fakultas');
        $this->M_fakultas->update_entry();
        redirect('/fakultas');
	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_fakultas');
		$data=$this->M_fakultas->find('id',$id);
		echo json_encode($data);
	}
}
