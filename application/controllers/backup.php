<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_uploadisi extends CI_Controller {

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
       $this->load->database();
       $this->load->helper(array('url','file'));
    }


	public function index()
	{
		if(isset($_SESSION['logged_in']))
		{
			$this->load->model('M_borang');
			$this->load->model('M_butir');
			$this->load->model('M_uploadisi');
			$this->load->library('form_validation');

			$id=$this->uri->segment(2, 0);
			$data['active_menu']='borang';
			$this->load->view('template/header',$data);
			$data['butir']=$this->M_butir->find('id',$id);
			$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			$data['isian']=$this->M_uploadisi->find('id_butir',$id);
      if (($id = 10) || ($id = 11) || ($id = 12) || ($id = 13)) {
        $id = 10;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 19) || ($id = 20) || ($id = 21)) {
        $id = 19;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 29) || ($id = 30) || ($id = 31) || ($id = 32)) {
        $id = 29;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 38) || ($id = 39)) {
        $id = 38;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 45) || ($id = 46) || ($id = 47)) {
        $id = 45;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 49) || ($id = 50)) {
        $id = 49;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 51) || ($id = 52) || ($id = 53)) {
        $id = 51;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 56) || ($id = 57)) {
        $id = 56;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 58) || ($id = 59)) {
        $id = 58;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 61) || ($id = 62) || ($id = 63)) {
        $id = 61;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 65) || ($id = 66) || ($id = 67) || ($id = 68)) {
        $id = 65;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }else if (($id = 83) || ($id = 84) || ($id = 85) || ($id = 86) || ($id = 87)) {
        $id = 83;
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      } else{
        $data['dataisian']=$this->M_uploadisi->finduploadisi('id_butir',$id);
        $data['dataisianversion']=$this->M_uploadisi->finduploadisiversion('id_kolom',$id);
        $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
        $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
      }
			$data1['isian']=$this->M_uploadisi->ambildata();
			$data1['isian']=$this->M_uploadisi->get_entire_data1($id);
			$this->load->view('uploadisi',$data);
			//$this->load->view('isian2',$data1);
			// $this->load->view('footer');
		}else{
			redirect('Home/pages');
		}


	}

	public function viewbookbutir(){
		$this->load->model('M_borang');
		$this->load->model('M_butir');
		$this->load->model('M_uploadisi');
		$this->load->library('form_validation');

		$id=$this->uri->segment(2, 0);
		$data['active_menu']='borang';
		$this->load->view('template/header',$data);
		$data['butir']=$this->M_butir->find('id',$id);
		$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
		$data['isian']=$this->M_uploadisi->find('id_butir',$id);
		// if ($id==1) {
			$data['dataisian1']=$this->M_uploadisi->findisian4kolom('id_butir',1);
			$data['dataisianversion1']=$this->M_uploadisi->findisian4kolomversion('id_kolom',1);
		// }elseif ($id==2) {
			$data['dataisian2']=$this->M_uploadisi->findisian1kolom('id_butir',2);
			$data['dataisianversion2']=$this->M_uploadisi->findisian1kolomversion('id_kolom',2);
		// }elseif ($id==3) {
			$data['dataisian3']=$this->M_uploadisi->findisian1kolom('id_butir',3);
			$data['dataisianversion3']=$this->M_uploadisi->findisian1kolomversion('id_kolom',3);
		// }
		$data['dataisian4']=$this->M_uploadisi->findisian1kolom('id_butir',4);
		$data['dataisianversion4']=$this->M_uploadisi->findisian1kolomversion('id_kolom',4);
		$data['dataisian5']=$this->M_uploadisi->findisian1kolom('id_butir',5);
		$data['dataisianversion5']=$this->M_uploadisi->findisian1kolomversion('id_kolom',5);
		$data['dataisian6']=$this->M_uploadisi->findisian1kolom('id_butir',6);
		$data['dataisianversion6']=$this->M_uploadisi->findisian1kolomversion('id_kolom',6);
		$data['dataisian7']=$this->M_uploadisi->findisian1kolom('id_butir',7);
		$data['dataisianversion7']=$this->M_uploadisi->findisian1kolomversion('id_kolom',7);
		$data['dataisian8']=$this->M_uploadisi->findisian12kolom('id_butir',8);
		$data['dataisianversion8']=$this->M_uploadisi->findisian12kolomversion('id_kolom',8);
		$data['dataisian9']=$this->M_uploadisi->findisian5kolom('id_butir',9);
		$data['dataisianversion9']=$this->M_uploadisi->findisian5kolomversion('id_kolom',9);
		$data['dataisian10']=$this->M_uploadisi->findisian5kolom('id_butir',10);
		$data['dataisianversion10']=$this->M_uploadisi->findisian5kolomversion('id_kolom',10);
		$data['dataisian15']=$this->M_uploadisi->findisian4kolom('id_butir',15);
		$data['dataisianversion15']=$this->M_uploadisi->findisian4kolomversion('id_kolom',15);
		$data['dataisian24']=$this->M_uploadisi->findisian1kolom('id_butir',24);
		$data['dataisianversion24']=$this->M_uploadisi->findisian1kolomversion('id_kolom',24);
		$data['dataisian25']=$this->M_uploadisi->findisian1kolom('id_butir',25);
		$data['dataisianversion25']=$this->M_uploadisi->findisian1kolomversion('id_kolom',25);
		$data['dataisian26']=$this->M_uploadisi->findisian1kolom('id_butir',26);
		$data['dataisianversion26']=$this->M_uploadisi->findisian1kolomversion('id_kolom',26);
		$data['dataisian27']=$this->M_uploadisi->findisian1kolom('id_butir',27);
		$data['dataisianversion27']=$this->M_uploadisi->findisian1kolomversion('id_kolom',27);
		$data['dataisian28']=$this->M_uploadisi->findisian1kolom('id_butir',28);
		$data['dataisianversion28']=$this->M_uploadisi->findisian1kolomversion('id_kolom',28);
		$this->load->view('template/header',$data);
		$this->load->view('viewbookbutir');
	}

// QUERY INSERT ISIAN
	public function ngisi11(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir11'];
       	// $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir11'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir11'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir11'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
       	$_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir11']);
	}

	public function ngisi11b(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir11b'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir11b'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir11b'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir11b'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir11b']);
	}

	public function ngisi12(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir12'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir12'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir12'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir12'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir12']);
	}

	public function ngisi21(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir21'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir21'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir21'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir21'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir21']);
	}

	public function ngisi22(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir22'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir22'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir22'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir22'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir22']);
	}

	public function ngisi23(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir23'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir23'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir23'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir23'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir23']);
	}

	public function ngisi24(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir24'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir24'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir24'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir24'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir24']);
	}

	public function ngisi25(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir25'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir25'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir25'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir25'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir25']);
	}

	public function ngisi26(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir26'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir26'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir26'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir26'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir26']);
	}

	public function ngisi311(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir311'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir311'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir311'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir311'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir311']);
	}

  public function ngisi312(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir312'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir312'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir312'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir312'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir312']);
  }

	public function ngisi313(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir313'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir313'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir313'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir313'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir313']);
	}

  public function ngisi314(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir314'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir314'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir314'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir314'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir314']);
  }

  public function ngisi32(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir32'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir32'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir32'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir32'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir32']);
  }

  public function ngisi331(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir331'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir331'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir331'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir331'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir331']);
  }

  public function ngisi332(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir332'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir332'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir332'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir332'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir332']);
  }

  public function ngisi333(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir333'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir333'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir333'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir333'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir333']);
  }

	public function ngisi341(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir341'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir341'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir341'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir341'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir341']);
	}

	public function ngisi342(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir342'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir342'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir342'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir342'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir342']);
	}

	public function ngisi41(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir41'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir41'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir41'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir41'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir41']);
	}

	public function ngisi421(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir421'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir421'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir421'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir421'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir421']);
	}

	public function ngisi422(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir422'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir422'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir422'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir422'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir422']);
	}

  public function ngisi431(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir431'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir431'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir431'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir431'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir431']);
  }

  public function ngisi432(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir432'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir432'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir432'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir432'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir432']);
  }

  public function ngisi433(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir433'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir433'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir433'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir433'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir433']);
  }

  public function ngisi434(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir434'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir434'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir434'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir434'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir434']);
  }

  public function ngisi435(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir435'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir435'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir435'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir435'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir435']);
  }

  public function ngisi441(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir441'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir441'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir441'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir441'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir441']);
  }

  public function ngisi442(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir442'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir442'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir442'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir442'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir442']);
  }

  public function ngisi451(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir451'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir451'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir451'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir451'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir451']);
  }

  public function ngisi452(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir452'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir452'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir452'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir452'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir452']);
  }

  public function ngisi453(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir453'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir453'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir453'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir453'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir453']);
  }

  public function ngisi454(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir454'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir454'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir454'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir454'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir454']);
  }

  public function ngisi455(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir455'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir455'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir455'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir455'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir455']);
  }

  public function ngisi461(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir461'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir461'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir461'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir461'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir461']);
  }

  public function ngisi462(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir462'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir462'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir462'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir462'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir462']);
  }

  public function ngisi511(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir511'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir511'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir511'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir511'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir511']);
  }

  public function ngisi512(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir512'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir512'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir512'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir512'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir512']);
  }

  public function ngisi513(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir513'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir513'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir513'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir513'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir513']);
  }

  public function ngisi514(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir514'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir514'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir514'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir514'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir514']);
  }

  public function ngisi52(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir52'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir52'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir52'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir52'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir52']);
  }

  public function ngisi531(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir531'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir531'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir531'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir531'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir531']);
  }

  public function ngisi532(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir532'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir532'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir532'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir532'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir532']);
  }

  public function ngisi541(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir541'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir541'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir541'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir541'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir541']);
  }

  public function ngisi542(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir542'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir542'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir542'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir542'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir542']);
  }

  public function ngisi551(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir551'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir551'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir551'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir551'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir551']);
  }

  public function ngisi552(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir552'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir552'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir552'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir552'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir552']);
  }

  public function ngisi56(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir56'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir56'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir56'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir56'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir56']);
  }

  public function ngisi571(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir571'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir571'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir571'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir571'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir571']);
  }

  public function ngisi572(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir572'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir572'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir572'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir572'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir572']);
  }

  public function ngisi573(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir573'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir573'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir573'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir573'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir573']);
  }

  public function ngisi574(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir574'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir574'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir574'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir574'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir574']);
  }

  public function ngisi575(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir575'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir575'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir575'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir575'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir575']);
  }

  public function ngisi61(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir61'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir61'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir61'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir61'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir61']);
  }

  public function ngisi621(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir621'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir621'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir621'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir621'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir621']);
  }

  public function ngisi622(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir622'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir622'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir622'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir622'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir622']);
  }

  public function ngisi623(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir623'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir623'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir623'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir623'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir623']);
  }

  public function ngisi631(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir631'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir631'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir631'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir631'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir631']);
  }

  public function ngisi632(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir632'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir632'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir632'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir632'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir632']);
  }

  public function ngisi633(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir633'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir633'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir633'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir633'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir633']);
  }

  public function ngisi641(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir641'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir641'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir641'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir641'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir641']);
  }

  public function ngisi642(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir642'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir642'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir642'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir642'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir642']);
  }

  public function ngisi643(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir643'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir643'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir643'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir643'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir643']);
  }

  public function ngisi651(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir651'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir651'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir651'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir651'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir651']);
  }

  public function ngisi652(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir652'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir652'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir652'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir652'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir652']);
  }

  public function ngisi711(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir711'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir711'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir711'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir711'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir711']);
  }

  public function ngisi712(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir712'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir712'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir712'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir712'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir712']);
  }

  public function ngisi713(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir713'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir713'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir713'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir713'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir713']);
  }

  public function ngisi714(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir714'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir714'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir714'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir714'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir714']);
  }

  public function ngisi721(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir721'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir721'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir721'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir721'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir721']);
  }

  public function ngisi722(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir722'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir722'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir722'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir722'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir722']);
  }

  public function ngisi731(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir731'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir731'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir731'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir731'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir731']);
  }

  public function ngisi732(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir732'];
        // $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir732'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir732'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir732'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir732']);
  }

	public function ngisi2kolom(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir'];
       	$this->M_uploadisi->insert_isian2kolom();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir']);
	}

	
// TUTUP QUERY INSERT ISIAN

// QUERY INSERT DOKUMEN

  public function dokumen11(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir11'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir11'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir11'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir11'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir11']);
  }

  public function dokumen11b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir11b'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir11b'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir11b'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir11b'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir11b']);
  }

  public function dokumen12(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir12'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir12'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir12'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir12'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir12']);
  }

  public function dokumen21(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir21'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir21'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir21'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir21'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir21']);
  }

  public function dokumen22(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir22'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir22'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir22'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir22'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir22']);
  }

  public function dokumen23(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir23'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir23'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir23'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir23'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir23']);
  }

  public function dokumen24(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir24'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir24'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir24'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir24'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir24']);
  }

  public function dokumen25(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir25'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir25'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir25'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir25'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir25']);
  }

  public function dokumen26(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir26'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir26'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir26'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir26'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir26']);
  }

  public function dokumen311(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir311'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir311'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir311'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir311'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir311']);
  }

  public function dokumen312(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir312'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir312'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir312'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir312'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir312']);
  }

  public function dokumen313(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir313'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir313'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir313'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir313'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir313']);
  }

  public function dokumen314(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir314'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir314'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir314'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir314'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir314']);
  }

  public function dokumen32(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir32'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir32'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir32'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir32'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir32']);
  }

  public function dokumen331(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir331'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir331'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir331'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir331'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir331']);
  }

  public function dokumen332(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir332'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir332'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir332'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir332'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir332']);
  }

  public function dokumen333(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir333'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir333'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir333'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir333'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir333']);
  }

  public function dokumen341(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir341'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir341'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir341'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir341'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir341']);
  }

  public function dokumen342(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir342'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir342'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir342'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir342'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir342']);
  }

  public function dokumen41(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir41'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir41'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir41'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir41'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir41']);
  }

  public function dokumen421(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir421'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir421'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir421'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir421'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir421']);
  }

  public function dokumen422(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir422'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir422'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir422'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir422'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir422']);
  }

  public function dokumen431(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir431'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir431'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir431'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir431'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir431']);
  }

  public function dokumen432(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir432'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir432'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir432'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir432'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir432']);
  }

  public function dokumen433(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir433'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir433'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir433'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir433'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir433']);
  }

  public function dokumen434(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir434'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir434'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir434'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir434'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir434']);
  }

  public function dokumen435(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir435'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir435'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir435'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir435'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir435']);
  }

  public function dokumen441(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir441'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir441'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir441'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir441'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir441']);
  }

  public function dokumen442(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir442'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir442'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir442'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir442'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir442']);
  }

  public function dokumen451(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir451'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir451'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir451'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir451'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir451']);
  }

  public function dokumen452(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir452'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir452'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir452'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir452'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir452']);
  }

  public function dokumen453(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir453'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir453'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir453'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir453'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir453']);
  }

  public function dokumen454(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir454'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir454'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir454'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir454'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir454']);
  }

  public function dokumen455(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir455'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir455'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir455'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir455'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir455']);
  }

  public function dokumen461(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir461'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir461'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir461'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir461'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir461']);
  }

  public function dokumen462(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir462'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir462'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir462'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir462'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir462']);
  }

  public function dokumen511(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir511'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir511'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir511'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir511'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir511']);
  }

  public function dokumen512(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir512'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir512'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir512'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir512'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir512']);
  }

  public function dokumen513(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir513'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir513'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir513'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir513'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir513']);
  }

  public function dokumen514(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir514'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir514'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir514'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir514'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir514']);
  }

  public function dokumen52(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir52'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir52'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir52'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir52'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir52']);
  }

  public function dokumen531(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir531'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir531'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir531'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir531'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir531']);
  }

  public function dokumen532(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir532'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir532'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir532'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir532'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir532']);
  }

  public function dokumen541(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir541'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir541'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir541'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir541'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir541']);
  }

  public function dokumen542(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir542'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir542'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir542'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir542'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir542']);
  }

  public function dokumen551(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir551'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir551'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir551'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir551'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir551']);
  }

  public function dokumen552(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir552'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir552'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir552'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir552'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir552']);
  }

  public function dokumen56(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir56'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir56'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir56'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir56'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir56']);
  }

  public function dokumen571(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir571'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir571'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir571'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir571'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir571']);
  }

  public function dokumen572(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir572'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir572'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir572'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir572'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir572']);
  }

  public function dokumen573(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir573'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir573'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir573'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir573'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir573']);
  }

  public function dokumen574(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir574'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir574'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir574'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir574'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir574']);
  }

  public function dokumen575(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir575'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir575'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir575'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir575'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir575']);
  }

  public function dokumen61(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir61'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir61'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir61'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir61'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir61']);
  }

  public function dokumen621(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir621'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir621'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir621'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir621'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir621']);
  }

  public function dokumen622(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir622'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir622'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir622'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir622'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir622']);
  }

  public function dokumen623(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir623'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir623'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir623'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir623'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir623']);
  }

  public function dokumen631(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir631'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir631'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir631'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir631'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir631']);
  }

  public function dokumen632(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir632'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir632'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir632'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir632'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir632']);
  }

  public function dokumen633(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir633'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir633'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir633'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir633'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir633']);
  }

  public function dokumen641(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir641'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir641'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir641'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir641'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir641']);
  }

  public function dokumen642(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir642'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir642'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir642'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir642'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir642']);
  }

  public function dokumen643(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir643'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir643'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir643'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir643'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir643']);
  }

  public function dokumen651(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir651'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir651'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir651'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir651'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir651']);
  }

  public function dokumen652(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir652'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir652'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir652'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir652'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir652']);
  }

  public function dokumen711(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir711'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir711'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir711'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir711'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir711']);
  }

  public function dokumen712(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir712'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir712'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir712'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir712'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir712']);
  }

  public function dokumen713(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir713'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir713'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir713'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir713'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir713']);
  }

  public function dokumen714(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir714'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir714'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir714'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir714'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir714']);
  }

  public function dokumen721(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir721'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir721'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir721'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir721'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir721']);
  }

  public function dokumen722(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir722'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir722'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir722'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir722'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir722']);
  }

  public function dokumen731(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir731'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir731'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir731'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir731'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir731']);
  }

  public function dokumen732(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir732'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir732'),
            'nama' => $this->input->post('nama'),
            'filename' => $this->upload->data('file_name'),
            'ket' => $this->input->post('ket'),
            'pemilik' => $this->input->post('pemilik'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('dokumen', $data);

          // membuat versi dokumen
          $data1 = array(
            'id_dokumen' => $this->input->post('id_butir732'),
            'nama' => $this->input->post('nama'),
            'version_no' => "1",
            'filename' => $this->upload->data('file_name'),
            'pemilik' => $this->input->post('pemilik'),
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by'=> $_SESSION['name'],
            );
          $this->db->insert('document_version', $data1);

          // membuat history dari dokumen
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir732'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir732']);
  }

// TUTUP QUERY DOKUMEN

	public function findisian(){
		$id=$_POST['id'];
		$this->load->model('M_uploadisi');
		$data=$this->M_uploadisi->finduploadisi('id',$id);
		echo json_encode($data);
	}

// QUERY UPDATE ISIAN
	public function updateisian11(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir11'];
       	$this->M_uploadisi->update_isian11();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir11']);
	}

	public function updateisian11b(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir11b'];
       	$this->M_uploadisi->update_isian11b();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir11b']);
	}

	public function updateisian12(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir12'];
       	$this->M_uploadisi->update_isian12();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir12']);
	}

	public function updateisian21(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir21'];
       	$this->M_uploadisi->update_isian21();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir21']);
	}

	public function updateisian22(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir22'];
       	$this->M_uploadisi->update_isian22();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir22']);
	}

	public function updateisian23(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir23'];
       	$this->M_uploadisi->update_isian23();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir23']);
	}

	public function updateisian24(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir24'];
       	$this->M_uploadisi->update_isian24();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir24']);
	}

	public function updateisian25(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir25'];
       	$this->M_uploadisi->update_isian25();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir25']);
	}

	public function updateisian26(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir26'];
       	$this->M_uploadisi->update_isian26();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir26']);
	}

	public function updateisian311(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir311'];
       	$this->M_uploadisi->update_isian311();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir311']);
	}

	public function updateisian313(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir313'];
       	$this->M_uploadisi->update_isian313();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir313']);
	}

	public function updateisian341(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir341'];
       	$this->M_uploadisi->update_isian341();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir341']);
	}

	public function updateisian342(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir342'];
       	$this->M_uploadisi->update_isian342();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir342']);
	}

	public function updateisian41(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir41'];
       	$this->M_uploadisi->update_isian41();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir41']);
	}

	public function updateisian421(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir421'];
       	$this->M_uploadisi->update_isian421();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir421']);
	}

	public function updateisian422(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir422'];
       	$this->M_uploadisi->update_isian422();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir422']);
	}

	public function updateisian2kolom(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir'];
       	$this->M_uploadisi->update_isian2kolom();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir']);
	}

	
// TUTUP QUERY UPDATE ISIAN

// QUERY DELETE ISIAN
	public function destroyuploadisi($id,$borang){
		// $id=$_POST['id'];
        // $idbut=3;
		$this->load->model('M_uploadisi');
    $this->load->model('M_dokumen');
    //delete file isian
    $uploadisi = $this->M_uploadisi->get_by_id_hapus($id);
    if(file_exists('uploads/isian/'.$uploadisi->isian) && $uploadisi->isian)
      unlink('uploads/isian/'.$uploadisi->isian);
		$result=$this->M_uploadisi->deleteuploadisian('id_butir',$id);
    // delete file dokumen
    $uploaddokumen = $this->M_dokumen->get_by_id_hapus($id);
      if(file_exists('uploads/dokumen/'.$uploaddokumen->filename) && $uploaddokumen->filename)
        unlink('uploads/dokumen/'.$uploaddokumen->filename);
    $result=$this->M_dokumen->deletedokall('id_butir',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butir/'.$idbut);
        redirect('uploadisi/'.$borang);
	}
// TUTUP QUERY DELETE ISIAN

  private function _do_upload()
  {
    $config['upload_path']          = 'uploads/isian/';
    $config['allowed_types']        = 'pdf';
    $config['max_size']             = 0; //set max size allowed in Kilobyte
    $config['max_width']            = 0; // set max width image allowed
    $config['max_height']           = 0; // set max height allowed
    // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
    $config['file_name']      = ($_FILES['filename']['name']);

    $this->load->library('upload', $config);

    if(!$this->upload->do_upload('isian')) //upload and validate
    {
      $data['inputerror'][] = 'isian';
      $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
      $data['status'] = FALSE;
      echo json_encode($data);
      exit();
    }
    return $this->upload->data('file_name');
  }

}
