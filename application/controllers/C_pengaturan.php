<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pengaturan extends CI_Controller {

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
		 $this->load->model('M_pengaturan');
    }


	public function index()
	{
	$this->load->library('session');
			if(isset($_SESSION['logged_in']))
		{
            $data['active_menu']='pengaturan';
    		$this->load->view('template/header',$data);
			$data['pengaturan']=$this->M_pengaturan->get_entire_data();
    		$this->load->view('pengaturan',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}


	}

	public function dokumenpendukung()
	{
	$this->load->library('session');
			if(isset($_SESSION['logged_in']))
		{
            $data['active_menu']='pengaturan';
    		$this->load->view('template/header',$data);
			$data['dokumenpendukung']=$this->M_pengaturan->get_dokumenpendukung_data();
    		$this->load->view('dokumenpendukung',$data);
		}else{
			redirect('Home/pages');
		}
	}

	public function store(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_pengaturan');
        $this->M_pengaturan->insert_entry();
        redirect('/pengaturan');
        echo json_encode(array("status" => TRUE));

	}

	public function destroy($id){
		// $id=$_POST['id'];
		$this->load->model('M_pengaturan');
		$result=$this->M_pengaturan->delete('id',$id);
		if($result > 0){
			echo json_encode('success');

		}else{
			($_SESSION['sukseshapus'] = '');
		}
        redirect('/pengaturan');
	}



	public function update(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_pengaturan');
        $this->M_pengaturan->update_entry();
        redirect('/pengaturan');
	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_pengaturan');
		$data=$this->M_pengaturan->find('id',$id);
		echo json_encode($data);
	}
}
