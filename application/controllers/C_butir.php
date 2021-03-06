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
		 $this->load->model('M_borang');
		 $this->load->model('M_butir');
	     $this->load->model('M_prodi');
		 $this->load->model('M_fakultas');
		 $this->load->model('M_borang');
    }


	public function index()
	{
		if(isset($_SESSION['logged_in']))
		{
			$this->load->library('form_validation');

			$id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
    		$this->load->view('template/header',$data);
			$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_butir->find('id_borang',$id);
			$data['getdata']=$this->M_butir->join3tabel($id);
			$this->load->view('butir',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}
	}

	public function butir_buku()
	{
		if(isset($_SESSION['logged_in']))
		{
			$this->load->library('form_validation');

			$id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
    		$this->load->view('template/header',$data);
			$data['buku']=$this->M_borang->find_buku('id',$id);
			$data['butir']=$this->M_butir->find_buku('id_borang',$id);
			$data['getdata']=$this->M_butir->join3tabel($id);
			$this->load->view('butirbuku',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}
	}

	public function lampiran(){
		if(isset($_SESSION['logged_in']))
		{
			$this->load->library('form_validation');

			$id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
    		$this->load->view('template/header',$data);
			$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_butir->find('id_borang',$id);
			$data['lampiran']=$this->M_butir->findlampiran('id_borang',$id);
			$data['getdata']=$this->M_butir->join3tabel($id);
			$this->load->view('lampiran',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}
	}

	public function resume(){
		if(isset($_SESSION['logged_in']))
		{
			$id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
    		$this->load->view('template/header',$data);
			$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_butir->findresume('id_borang',$id);
			$data['getdata']=$this->M_butir->join3tabel($id);
			$this->load->view('resume',$data);
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
        	redirect('butirbuku/'.$_POST['id_borang']);
        	/*
        	$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_butir->find('id_borang',$id);
            $this->load->view('header');
			$this->load->view('content-butir',$data);
			$this->load->view('footer');
			*/
        // }

	}

	public function store_buku(){
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
        	$this->M_butir->insert_entry_buku();
        	redirect('butirbuku/'.$_POST['id_borang']);
        	/*
        	$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_butir->find('id_borang',$id);
            $this->load->view('header');
			$this->load->view('content-butir',$data);
			$this->load->view('footer');
			*/
        // }

	}

	public function buatbutir3AS1($id,$borang){
		$this->M_butir->buatbutir3AS1($id);
		redirect('butirbuku/'.$borang);
	}

	public function buatbutir3BS1($id,$borang){
		$this->M_butir->buatbutir3BS1($id);
		redirect('butirbuku/'.$borang);
	}
	public function buatbutir3BD3($id,$borang){
		$this->M_butir->buatbutir3BD3($id);
		redirect('butirbuku/'.$borang);
	}
	public function buatbutir3AD3($id,$borang){
		$this->M_butir->buatbutir3AD3($id);
		redirect('butirbuku/'.$borang);
	}

	public function buatlampiran3AS1($id,$borang){
		$this->M_butir->buatlampiran3AS1($id);
		redirect('lampiran/'.$borang);
	}

	public function buatlampiran3BS1($id,$borang){
		$this->M_butir->buatlampiran3BS1($id);
		redirect('lampiran/'.$borang);
	}
	public function buatlampiran3BD3($id,$borang){
		$this->M_butir->buatlampiran3BD3($id);
		redirect('lampiran/'.$borang);
	}
	public function buatlampiran3AD3($id,$borang){
		$this->M_butir->buatlampiran3AD3($id);
		redirect('lampiran/'.$borang);
	}

	// buku
	public function buatbutir3AS1_buku($id,$borang){
		$this->M_butir->buatbutir3AS1_buku($id);
		redirect('butirbuku/'.$borang);
	}

	public function buatbutir3BS1_buku($id,$borang){
		$this->M_butir->buatbutir3BS1_buku($id);
		redirect('butirbuku/'.$borang);
	}
	public function buatbutir3BD3_buku($id,$borang){
		$this->M_butir->buatbutir3BD3_buku($id);
		redirect('butirbuku/'.$borang);
	}
	public function buatbutir3AD3_buku($id,$borang){
		$this->M_butir->buatbutir3AD3_buku($id);
		redirect('butirbuku/'.$borang);
	}

	public function buatlampiran3AS1_buku($id,$borang){
		$this->M_butir->buatlampiran3AS1_buku($id);
		redirect('lampiran/'.$borang);
	}

	public function buatlampiran3BS1_buku($id,$borang){
		$this->M_butir->buatlampiran3BS1_buku($id);
		redirect('lampiran/'.$borang);
	}
	public function buatlampiran3BD3_buku($id,$borang){
		$this->M_butir->buatlampiran3BD3_buku($id);
		redirect('lampiran/'.$borang);
	}
	public function buatlampiran3AD3_buku($id,$borang){
		$this->M_butir->buatlampiran3AD3_buku($id);
		redirect('lampiran/'.$borang);
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
        // redirect('butirbuku/'.$idbut);
        redirect('butirbuku/'.$borang);
	}

	public function destroyallbutir($id,$borang){
		$this->load->model('M_butir');
		$result=$this->M_butir->deleteallbutir('id_borang',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        redirect('butirbuku/'.$borang);
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
			// $url="/butirbuku/".$id;
			// redirect($url);
			redirect('butirbuku/'.$_POST['id_borang']);
        // }

	}

	// buku
	public function destroy_buku($id,$borang){
		// $id=$_POST['id'];
        // $idbut=3;
		$this->load->model('M_butir');
		$result=$this->M_butir->delete_buku('id',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butirbuku/'.$idbut);
        redirect('butirbuku/'.$borang);
	}

	public function destroyallbutir_buku($id,$borang){
		$this->load->model('M_butir');
		$result=$this->M_butir->deleteallbutir_buku('id_borang',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        redirect('butirbuku/'.$borang);
	}

	public function update_buku(){
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
        	$this->M_butir->update_entry_buku();
			// $id=$_POST['id_borang'];
			// $url="/butirbuku/".$id;
			// redirect($url);
			redirect('butirbuku/'.$_POST['id_borang']);
        // }

	}

	public function update_butir_buku_penjelasan3ad3(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$id=$_POST['id_butir'];
        $this->M_butir->update_butir_buku_penjelasan();
		redirect('isian_buku3ad3/'.$_POST['id_butir']);
	}

	public function update_butir_buku_penjelasan(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$id=$_POST['id_butir'];
        $this->M_butir->update_butir_buku_penjelasan();
		redirect('isian_buku/'.$_POST['id_butir']);
	}

	public function update_butir_buku_penjelasan3as2(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$id=$_POST['id_butir'];
        $this->M_butir->update_butir_buku_penjelasan();
		redirect('isian_buku3as2/'.$_POST['id_butir']);
	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_butir');
		$data=$this->M_butir->find('id',$id);
		echo json_encode($data);
	}

	public function find_buku(){
		$id=$_POST['id'];
		$this->load->model('M_butir');
		$data=$this->M_butir->find_buku('id',$id);
		echo json_encode($data);
	}
}
