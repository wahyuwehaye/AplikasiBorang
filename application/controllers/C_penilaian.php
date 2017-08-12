<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_penilaian extends CI_Controller {

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
	$this->load->library('session');
	//print_r($this->session);die();
			if(isset($_SESSION['logged_in']))
		{
			$this->load->model('M_penilaian');
			// $this->load->library('form_validation');
            $data['active_menu']='penilaian';
    		$this->load->view('template/header',$data);
			$data['borang']=$this->M_penilaian->get_entire_data();
    		$this->load->view('penilaian',$data);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}


	}

	public function formnilai(){
		$this->load->model('M_borang');
		$this->load->model('M_butir');
		$this->load->model('M_uploadisi');
		$this->load->library('form_validation');

		$id=$this->uri->segment(2, 0);
		$data['active_menu']='penilaian';
		$this->load->view('template/header',$data);
		$data['buku']=$this->M_borang->find('id',$id);
		$data['butir']=$this->M_butir->find('id_borang',$id);
		$data['isian']=$this->M_uploadisi->find('id_butir',$id);
		$data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
	    $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
	    $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
	    $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
	    $data['getalldata']=$this->M_uploadisi->findallisian();
		$this->load->view('template/header',$data);
		$this->load->view('formnilai',$data);
	}

	public function store(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_penilaian');

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
        	$this->M_penilaian->insert_entry();
        	redirect('/borang');
            echo json_encode(array("status" => TRUE));
        // }

	}

	public function destroy($id){
		// $id=$_POST['id'];
		$this->load->model('M_penilaian');
		$result=$this->M_penilaian->delete('id',$id);
		if($result > 0){
			echo json_encode('success');

		}else{
			echo json_encode('failed');
		}
        redirect('/borang');
	}



	public function update(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_penilaian');

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
        	$this->M_penilaian->update_entry();
        	redirect('/borang');
        // }
	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_penilaian');
		$data=$this->M_penilaian->find('id',$id);
		echo json_encode($data);
	}

	public function cekjumlah11a($isi1,$isi2,$isi3,$isi4){

        $totalnya = (($isi1+$isi2+$isi3+$isi4)/4);

        echo '<input type="text" name="11askor" id="11askor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ",", ".").'">
        ';
    }

    public function cekjumlah11b($isi1,$isi2){

        $totalnya = (($isi1+$isi2)/2);

        echo '<input type="text" name="11bskor" id="11bskor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ",", ".").'">
        ';
    }

    public function cekjumlah12($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="12skor" id="12skor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ",", ".").'">
        ';
    }
}
