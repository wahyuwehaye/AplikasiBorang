<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_unit extends CI_Controller {

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
         $this->load->model('M_butir');
         $this->load->model('M_isian');
         $this->load->model('M_unit');
         $this->load->model('M_uploadisi');
         $this->load->model('M_dokumen');
         $this->load->model('M_penilaian');
    }


	public function index()
	{
	$this->load->library('session');
	//print_r($this->session);die();
			if(isset($_SESSION['logged_in']))
		{
			// $id=$this->uri->segment(2, 0);
			$id=2857;
			// $this->load->library('form_validation');
            $data['active_menu']='isiandata';
    		$this->load->view('template/header',$data);
    		$data['prodi']=$this->M_prodi->find('id',$id);
    		$data['fakultas']=$this->M_borang->getidfakultas($id);
    		$data['select_fakultas']=$this->M_borang->getfakultas();
			$data['borang']=$this->M_borang->get_entire_data($id);
			$this->load->view('template/header',$data);
			$data['butir']=$this->M_butir->find('id',$id);
			$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			$data['isian']=$this->M_isian->find('id_butir',$id);
            $data['getdata']=$this->M_isian->join3tabel($id);
			$id_but = $data['butir'][0]['id'];
            $id_bor = $data['butir'][0]['id_borang'];
            $cariidbutir['carbutr'] = $this->M_isian->findButirnyasama('id_borang',$id_bor,'butir','3.1.1.a');
            $idbutirnya = $cariidbutir['carbutr'][0]['id'];
            $data['dataisian']=$this->M_isian->findisian311kolom('id_butir',$idbutirnya);
            $data['dataisianversion']=$this->M_isian->findisian1kolomversion('id_kolom',$idbutirnya);
    		$this->load->view('unit',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}


	}

	public function editdata()
	{
	$this->load->library('session');
	//print_r($this->session);die();
			if(isset($_SESSION['logged_in']))
		{
			// $id=$this->uri->segment(2, 0);
			$id=2857;
			// $this->load->library('form_validation');
            $data['active_menu']='editdata';
    		$this->load->view('template/header',$data);
    		$data['prodi']=$this->M_prodi->find('id',$id);
    		$data['fakultas']=$this->M_borang->getidfakultas($id);
    		$data['select_fakultas']=$this->M_borang->getfakultas();
			$data['borang']=$this->M_borang->get_entire_data($id);
			$this->load->view('template/header',$data);
			$data['butir']=$this->M_butir->find('id',$id);
			$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			$data['isian']=$this->M_isian->find('id_butir',$id);
            $data['getdata']=$this->M_isian->join3tabel($id);
			$id_but = $data['butir'][0]['id'];
            $id_bor = $data['butir'][0]['id_borang'];
            $cariidbutir['carbutr'] = $this->M_isian->findButirnyasama('id_borang',$id_bor,'butir','3.1.1.a');
            $idbutirnya = $cariidbutir['carbutr'][0]['id'];
            $data['dataisian']=$this->M_isian->findisian311kolom('id_butir',$idbutirnya);
            $data['dataisianversion']=$this->M_isian->findisian1kolomversion('id_kolom',$idbutirnya);
    		$this->load->view('unitedit',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}


	}

	public function uploadunit()
	{
	$this->load->library('session');
			if(isset($_SESSION['logged_in']))
		{
            $data['active_menu']='upload';
    		$this->load->view('template/header',$data);
    		$this->load->view('uploadunit',$data);
		}else{
			redirect('Home/pages');
		}


	}

	public function ngisi311admisi(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_unit');
       	$id=$_POST['id_butir311'];
        $this->M_unit->insert_isian311admisi();
        $_SESSION['suksesinput'] = '';
        redirect('unit/');
	}

	public function ngisi311kemahasiswaan(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_unit');
       	$id=$_POST['id_butir311'];
        $this->M_unit->insert_isian311kemahasiswaan();
        $_SESSION['suksesinput'] = '';
        redirect('unit/');
	}

	public function updateisian311admisi(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_unit');
       	$id=$_POST['id_butir311'];
       	$this->M_unit->updateisian311admisi();
       	$_SESSION['suksesupdate'] = '';
        redirect('unit/');
	}

	public function updateisian311kemahasiswaan(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_unit');
       	$id=$_POST['id_butir311'];
       	$this->M_unit->updateisian311kemahasiswaan();
       	$_SESSION['suksesupdate'] = '';
        redirect('unit/');
	}

	public function store(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_borang');
        $this->M_borang->insert_entry();
        redirect('unit/'.$_POST['id_prodi']);
        echo json_encode(array("status" => TRUE));

	}

	public function buatjenisborang($id,$prodi){
		$this->M_borang->insert_default_borang_prodi($id,$prodi);
		redirect('unit/'.$id);
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
        redirect('unit/'.$redirect);
	}



	public function update(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_borang');
        $this->M_borang->update_entry();
        redirect('unit/'.$_POST['id_prodi']);
	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_borang');
		$data=$this->M_borang->find('id',$id);
		echo json_encode($data);
	}
}
