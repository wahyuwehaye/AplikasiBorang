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
	public function isiannya(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_uploadisi');
       	$id=$_POST['id_butir'];
       	// $this->M_uploadisi->insert_isian11();
        $config['upload_path']   = FCPATH.'/uploads/isian/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);

        // input ke tabel uploadisian
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian', $data);

          // membuat versi isian
          $data1 = array(
            'id_kolom' => $this->input->post('id_butir'),
            'isian' => $this->upload->data('file_name'),
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
          $this->db->insert('uploadisian_version', $data1);

          // buat history
          $data2 = array(
                'user'=> $_SESSION['name'],
                'action' => "Menambahkan Isian pada butir ke : ".$this->input->post('id_butir'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // buat muncul notify dan redirect
       	$_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir']);
	}

	
// TUTUP QUERY INSERT ISIAN

// QUERY INSERT DOKUMEN

  public function dokumen(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $this->load->library('upload',$config);

        // input ke tabel dokumen
        if($this->upload->do_upload('file')){
          $data = array(
            'id_butir' => $this->input->post('id_butir'),
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
            'id_dokumen' => $this->input->post('id_butir'),
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
                'action' => "Menambahkan Dokumen pada butir ke : ".$this->input->post('id_butir'),
                'created_at'=> date('Y-m-d H:i:s')
          );

          $this->db->insert('log', $data2);
        }

        // membuat notify dan redirect
        $_SESSION['suksesinput'] = '';
        redirect('uploadisi/'.$_POST['id_butir']);
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

}
