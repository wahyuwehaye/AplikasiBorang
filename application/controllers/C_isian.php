<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_isian extends CI_Controller {

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
			$this->load->model('M_isian');
			$this->load->library('form_validation');

			$id=$this->uri->segment(2, 0);
			$data['active_menu']='borang';
			$this->load->view('template/header',$data);
			$data['butir']=$this->M_butir->find('id',$id);
			$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			$data['isian']=$this->M_isian->find('id_butir',$id);
			if ($id==1) {
				$data['dataisian']=$this->M_isian->findisian4kolom('id_butir',$id);
				$data['dataisianversion']=$this->M_isian->findisian4kolomversion('id_kolom',$id);
			}elseif (($id==2) || ($id==3) || ($id==4) || ($id==5) || ($id==6) || ($id==7)){
				$data['dataisian']=$this->M_isian->findisian1kolom('id_butir',$id);
				$data['dataisianversion']=$this->M_isian->findisian1kolomversion('id_kolom',$id);
			}elseif ($id==8) {
				$data['dataisian']=$this->M_isian->findisian12kolom('id_butir',$id);
				$data['dataisianversion']=$this->M_isian->findisian12kolomversion('id_kolom',$id);
			}elseif ($id==9) {
				$data['dataisian']=$this->M_isian->findisian5kolom('id_butir',$id);
				$data['dataisianversion']=$this->M_isian->findisian5kolomversion('id_kolom',$id);
			}
			$data1['isian']=$this->M_isian->ambildata();
			$data1['isian']=$this->M_isian->get_entire_data1($id);
			$this->load->view('isian',$data);
			//$this->load->view('isian2',$data1);
			// $this->load->view('footer');
		}else{
			redirect('Home/pages');
		}


	}

	public function viewbookbutir(){
		$this->load->model('M_borang');
		$this->load->model('M_butir');
		$this->load->model('M_isian');
		$this->load->library('form_validation');

		$id=$this->uri->segment(2, 0);
		$data['active_menu']='borang';
		$this->load->view('template/header',$data);
		$data['butir']=$this->M_butir->find('id',$id);
		$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
		$data['isian']=$this->M_isian->find('id_butir',$id);
		// if ($id==1) {
			$data['dataisian1']=$this->M_isian->findisian4kolom('id_butir',1);
			$data['dataisianversion1']=$this->M_isian->findisian4kolomversion('id_kolom',1);
		// }elseif ($id==2) {
			$data['dataisian2']=$this->M_isian->findisian1kolom('id_butir',2);
			$data['dataisianversion2']=$this->M_isian->findisian1kolomversion('id_kolom',2);
		// }elseif ($id==3) {
			$data['dataisian3']=$this->M_isian->findisian1kolom('id_butir',3);
			$data['dataisianversion3']=$this->M_isian->findisian1kolomversion('id_kolom',3);
		// }
		$data['dataisian4']=$this->M_isian->findisian1kolom('id_butir',4);
		$data['dataisianversion4']=$this->M_isian->findisian1kolomversion('id_kolom',4);
		$data['dataisian5']=$this->M_isian->findisian1kolom('id_butir',5);
		$data['dataisianversion5']=$this->M_isian->findisian1kolomversion('id_kolom',5);
		$data['dataisian6']=$this->M_isian->findisian1kolom('id_butir',6);
		$data['dataisianversion6']=$this->M_isian->findisian1kolomversion('id_kolom',6);
		$data['dataisian7']=$this->M_isian->findisian1kolom('id_butir',7);
		$data['dataisianversion7']=$this->M_isian->findisian1kolomversion('id_kolom',7);
		$data['dataisian8']=$this->M_isian->findisian12kolom('id_butir',8);
		$data['dataisianversion8']=$this->M_isian->findisian12kolomversion('id_kolom',8);
		$data['dataisian9']=$this->M_isian->findisian5kolom('id_butir',9);
		$data['dataisianversion9']=$this->M_isian->findisian5kolomversion('id_kolom',9);
		$this->load->view('template/header',$data);
		$this->load->view('viewbookbutir');
	}

// QUERY INSERT ISIAN
	public function ngisi11(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir11'];
       	$this->M_isian->insert_isian11();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir11']);
	}

	public function ngisi11b(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir11b'];
       	$this->M_isian->insert_isian11b();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir11b']);
	}

	public function ngisi12(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir12'];
       	$this->M_isian->insert_isian12();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir12']);
	}

	public function ngisi21(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir21'];
       	$this->M_isian->insert_isian21();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir21']);
	}

	public function ngisi22(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir22'];
       	$this->M_isian->insert_isian22();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir22']);
	}

	public function ngisi23(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir23'];
       	$this->M_isian->insert_isian23();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir23']);
	}

	public function ngisi24(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir24'];
       	$this->M_isian->insert_isian24();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir24']);
	}

	public function ngisi25(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir25'];
       	$this->M_isian->insert_isian25();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir25']);
	}

	public function ngisi26(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir26'];
       	$this->M_isian->insert_isian26();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir26']);
	}

	public function ngisi2kolom(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir'];
       	$this->M_isian->insert_isian2kolom();
       	$_SESSION['suksesinput'] = '';
        redirect('isian/'.$_POST['id_butir']);
	}

	
// TUTUP QUERY INSERT ISIAN

	public function findisian(){
		$id=$_POST['id'];
		$this->load->model('M_isian');
		if ($id==1) {
			$data=$this->M_isian->findisian4kolom('id',$id);
		}elseif (($id==2) || ($id==3) || ($id==4) || ($id==5) || ($id==6) || ($id==7)) {
			$data=$this->M_isian->findisian1kolom('id',$id);
		}elseif ($id==8) {
			$data=$this->M_isian->findisian12kolom('id',$id);
		}elseif ($id==9) {
			$data=$this->M_isian->findisian5kolom('id',$id);
		}
		echo json_encode($data);
	}

// QUERY UPDATE ISIAN
	public function updateisian11(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir11'];
       	$this->M_isian->update_isian11();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir11']);
	}

	public function updateisian11b(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir11b'];
       	$this->M_isian->update_isian11b();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir11b']);
	}

	public function updateisian12(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir12'];
       	$this->M_isian->update_isian12();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir12']);
	}

	public function updateisian21(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir21'];
       	$this->M_isian->update_isian21();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir21']);
	}

	public function updateisian22(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir22'];
       	$this->M_isian->update_isian22();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir22']);
	}

	public function updateisian23(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir23'];
       	$this->M_isian->update_isian23();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir23']);
	}

	public function updateisian24(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir24'];
       	$this->M_isian->update_isian24();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir24']);
	}

	public function updateisian25(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir25'];
       	$this->M_isian->update_isian25();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir25']);
	}

	public function updateisian26(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir26'];
       	$this->M_isian->update_isian26();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir26']);
	}

	public function updateisian2kolom(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$this->load->model('M_borang');
       	$this->load->model('M_isian');
       	$id=$_POST['id_butir'];
       	$this->M_isian->update_isian2kolom();
       	$_SESSION['suksesupdate'] = '';
        redirect('isian/'.$_POST['id_butir']);
	}

	
// TUTUP QUERY UPDATE ISIAN

// QUERY DELETE ISIAN
	public function destroyisian1kolom($id,$borang){
		// $id=$_POST['id'];
        // $idbut=3;
		$this->load->model('M_isian');
		$result=$this->M_isian->deleteisian1kolom('id_butir',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butir/'.$idbut);
        redirect('isian/'.$borang);
	}

	public function destroyisian2kolom($id,$borang){
		// $id=$_POST['id'];
        // $idbut=3;
		$this->load->model('M_isian');
		$result=$this->M_isian->deleteisian2kolom('id_butir',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butir/'.$idbut);
        redirect('isian/'.$borang);
	}

	public function destroyisian4kolom($id,$borang){
		// $id=$_POST['id'];
        // $idbut=3;
		$this->load->model('M_isian');
		$result=$this->M_isian->deleteisian4kolom('id_butir',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butir/'.$idbut);
        redirect('isian/'.$borang);
	}

	public function destroyisian12kolom($id,$borang){
		// $id=$_POST['id'];
        // $idbut=3;
		$this->load->model('M_isian');
		$result=$this->M_isian->deleteisian12kolom('id_butir',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butir/'.$idbut);
        redirect('isian/'.$borang);
	}

	public function destroyisian5kolom($id,$borang){
		// $id=$_POST['id'];
        // $idbut=3;
		$this->load->model('M_isian');
		$result=$this->M_isian->deleteisian5kolom('id_butir',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butir/'.$idbut);
        redirect('isian/'.$borang);
	}
// TUTUP QUERY DELETE ISIAN

	// dibawah itu kode lama ya

	public function store(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_butir');
       	$id=$_POST['id_butir'];
       	//form validation
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('prioritas', 'Prioritas', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_message('required', 'Field {field} wajib diisi.');
	 	if ($this->form_validation->run() == FALSE)
        {

        	$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_butir->find('id_borang',$id);
            $this->load->view('template/header');
			$this->load->view('content-butir',$data);
			$this->load->view('footer');
        }
        else
        {
        	$this->M_butir->insert_entry();
        	$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_butir->find('id_borang',$id);
            $this->load->view('template/header');
			$this->load->view('content-butir',$data);
			$this->load->view('footer');
        }

	}

	public function destroy(){
		$id=$_POST['id'];
		$this->load->model('M_isian');

		//delete files on server
		$dok=$this->M_isian->find('id',$id);
		$path = './public/upload/'.$dok[0]['filename'];
		//unlink($path);

		//delete data on database
		$result=$this->M_isian->delete('id',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}

	}

	function delete_multiple(){
		//$id=$_POST['id'];
		$this->load->model('M_isian');
		$this->M_isian->remove_checked_id();
		//$btr=$this->M_isian->find('id',$id);
		redirect(base_url().'index.php');
		//redirect('/isian/'.$this->input->post('id_butir'));
	}

	function remove_checked(){
		$id=$_POST['id'];
		$this->load->library('form_validation');
		$this->load->model('M_isian');

        //validation rules
        $this->form_validation->set_rules('msg[]', 'Private Message', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE)
        {
            $data['query'] = $this->M_isian->received_msg();
            $this->load->view('M_isian/inbox', $data);
        }
        else //success
        {
            $checked_messages = $this->input->post('msg'); //selected messages
            $this->M_isian->delete_checked($checked_messages);

            //redirect to inbox
        }

	}

	public function getFileList(){
		$dir="public/upload/";
		if ($handle = opendir($dir)) {
			while (false !== ($file = readdir($handle))) {
				echo $file."<br>";
			}
			closedir($handle);
		}
	}

	public function update(){
		$this->load->library('form_validation');
		$this->load->model('M_isian');
		$this->load->model('M_borang');
		$this->load->model('M_butir');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('prioritas', 'Prioritas', 'required');
		//$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_message('required', 'Field {field} wajib diisi.');

		if ($this->form_validation->run() == FALSE)
        {
        	$id=$_POST['id_butir'];
			$data['butir']=$this->M_butir->find('id',$id);
			$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
            $this->load->view('template/header');
			$this->load->view('isian',$data);
			$this->load->view('footer');
        }
        else
        {
        	if (empty($_FILES['userfile']['name'])) {
        		$this->M_isian->insert_entry("","");
			}else{
				$config['upload_path']          = 'public/upload/';
		        $config['allowed_types']        = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
		        $config['max_size']             = 2000000;

		        $this->load->library('upload', $config);

		        if ( ! $this->upload->do_upload('userfile'))
		        {
		                $error = array('error' => $this->upload->display_errors());
		                print_r($error);
		                //$data['butir']=$this->M_butir->find('id',$_POST['id_butir']);
		                //$data['isian']=$this->M_isian->find('id_butir',$_POST['id_butir']);
		                //$data['error']=$error;
						//$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			            //$this->load->view('template/header');
						//$this->load->view('isian',$data);
						//$this->load->view('footer');
		        }
		        else
		        {
		                $upload_data =$this->upload->data();
		                $file_path=base_url()."public/upload/".$upload_data['file_name'];
		                $this->M_isian->insert_entry($file_path,$upload_data['file_name']);
		                redirect('/isian/'.$this->input->post('id_butir'));
		        }
			}

        }
	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_isian');
		$data=$this->M_isian->find('id',$id);
		echo json_encode($data);
	}

	public function findFlag(){
		$flag='view';
		$this->load->model('M_isian');
		$data=$this->M_isian->findFlag('flag',$flag);
		echo json_encode($data);
	}

	public function findForUpdate(){
		$id=$_POST['id'];
		$this->load->model('M_isian');

		$data=$this->M_isian->findForUpdate($id);
		echo json_encode($data);
	}

	public function documentVersionList(){
		$id=$_POST['id'];
		$this->load->model('version_model');

		$data=$this->version_model->get_entire_data_by_id($id);
		echo json_encode($data);
	}

	public function upload(){
		// load semua library, model yang dibutuhkan
		$this->load->library('form_validation');
		$this->load->model('M_isian');
		$this->load->model('M_borang');
		$this->load->model('M_butir');
		$this->load->model('version_model');

		// set aturan untuk form validation
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('prioritas', 'Prioritas', 'required');
		//$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_message('required', 'Field {field} wajib diisi.');
		//jalankan validasi form
		if ($this->form_validation->run() == FALSE)
        {
        	//jika validasi gagal alihkan kembali ke halaman terkait dan tampilkan pesan eror
        	$id=$_POST['id_butir'];

			$data['butir']=$this->M_butir->find('id',$id);
			$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
            $this->load->view('template/header');
			$this->load->view('isian',$data);
			$this->load->view('footer');
        }
        else
        {
        	// jika validasi valid eriksa apakah user mengupload file softcopy atau tidak
        	if (empty($_FILES['userfile']['name'])) {
			//Jika TIDAK masukkan data isian tersebut ke dalam database
				$filename="";
				$filename=$this->input->post('fileExisting');
				//echo "filename: ".$filename;
				if(!empty($filename)){
					$file_path=base_url()."public/upload/".$filename;
					$this->M_isian->insert_entry($filename);
					$this->version_model->insert_entry($file_path);
					redirect('/isian/'.$this->input->post('id_butir'));

				}else{
					$this->M_isian->insert_entry("");
					redirect('/isian/'.$this->input->post('id_butir'));
				}
			}else{
			// jika IYA lakukan proses upload sebelum dimasukkan kedalam database
			// config library untuk file softcopy (direktori penyimpanan isian, jenis isian yang diperbolehkan, maximum size)
				$config['upload_path']          = 'public/upload/';
		        $config['allowed_types']        = 'docx|doc|pdf|rar|zip|7Z|7-Zip';
		        $config['max_size']             = 2000000;
		    // terapkan config tersebut kedalam library
		        $this->load->library('upload', $config);
		    // lakukan proses upload
		        if ( ! $this->upload->do_upload('userfile'))
		        {
		        	// jika proses upload gagal
		                $error = array('error' => $this->upload->display_errors());
		                print_r($error);
		                //$data['butir']=$this->M_butir->find('id',$_POST['id_butir']);
		                //$data['isian']=$this->M_isian->find('id_butir',$_POST['id_butir']);
		                //$data['error']=$error;
						//$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			            $this->load->view('template/header');
						$this->load->view('isian',$data);
						$this->load->view('footer');
		        }
		        else
		        {
		        	// jika proses upload berhasil
		                $upload_data =$this->upload->data();
		                $file_path=base_url()."public/upload/".$upload_data['file_name'];

		            // masukkan detail isian kedalam database
		                $this->M_isian->insert_entry($upload_data['file_name']);
		            // masukkan detail softcopy kedalam database
		                $this->version_model->insert_entry($file_path);
		                redirect('/isian/'.$this->input->post('id_butir'));
		        }
			}

        }
	}

	public function applyforall(){
		$butir=$this->uri->segment(3, 0);
		echo $butir;
		$this->load->model('M_isian');
		$this->load->model('version_model');
		$data=$this->M_isian->global_query('select id,filename from isian where id_butir=(SELECT id FROM `butir` where butir="'.$butir.'") and id not in (select id_isian from documentversion )');
		//print_r($data);
		$i=0;
		foreach($data as $dok){
			$file_path=base_url()."public/upload/".$dok['filename'];
			$this->version_model->insert_entry_with_dok_id($dok['id'],$file_path);
			$i++;
		}
		echo $i." rows	affected";


	}

	public function upload_update(){
		// load semua library, model yang dibutuhkan
		$this->load->library('form_validation');
		$this->load->model('M_isian');
		$this->load->model('M_borang');
		$this->load->model('M_butir');
		$this->load->model('version_model');

		// set aturan untuk form validation
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('prioritas', 'Prioritas', 'required');
		//$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_message('required', 'Field {field} wajib diisi.');

		$id=$_POST['id_isian'];
		//echo $id." id_isian<br>";
        $data['isian']=$this->M_isian->find('id',$id);
		//jalankan validasi form
		if ($this->form_validation->run() == FALSE)
        {
        	//jika validasi gagal alihkan kembali ke halaman terkait dan tampilkan pesan eror

			$data['butir']=$this->M_butir->find('id',$data['isian'][0]['id_butir']);
			$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
            $this->load->view('template/header');
			$this->load->view('isian',$data);
			$this->load->view('footer');
        }
        else
        {
        	// jika validasi valid memeriksa apakah user mengupload file softcopy atau tidak
        	if (empty($_FILES['userfile']['name'])) {
			//print_r("no file to upload");
			//Jika TIDAK masukkan data isian baru periksa apakah user memilih untuk menggunakan versi isian yang lama
				//echo $_POST['uploadedFIle'];
				if(!empty($_POST['uploadedFIle'])){
				//echo  "upload fiel not empty";
					$data = array(
                        'nama' => $this->input->post('nama'),
                        'pemilik' => $this->input->post('pemilik'),
                        'hardcopy' => $this->input->post('hardcopy'),
                        'priority'  => $this->input->post('prioritas'),
                        'ket'  => $this->input->post('keterangan'),
                        'jum'  => $this->input->post('jum'),
                        'status'  => $this->input->post('status'),
                        'progress'=> $this->input->post('progress'),
                        'created_at'=> date('Y-m-d H:i:s'),
						'flag'	=> $this->input->post('flag')
					);
					$this->M_isian->update_column($data,$id);
					redirect('/isian/'.$this->input->post('id_butir'));
				}else{
					echo "uploadedFIle empty";
					if($_POST['version']==""){
						$filename="";
						$filename=$this->input->post('fileExisting');
						if(!empty($filename)){
							//print_r("filename not empty");
							$file_path=base_url()."public/upload/".$filename;
							echo $this->input->post('fileExisting');
							$this->M_isian->update_entry();
							$this->version_model->insert_version($file_path);
							redirect('/isian/'.$this->input->post('id_butir'));
						}else{
							$data = array(
								'nama' => $this->input->post('nama'),
								'pemilik' => $this->input->post('pemilik'),
								'hardcopy' => $this->input->post('hardcopy'),
								'priority'  => $this->input->post('prioritas'),
								'ket'  => $this->input->post('keterangan'),
								'jum'  => $this->input->post('jum'),
								'status'  => $this->input->post('status'),
								'progress'=> $this->input->post('progress'),
								'created_at'=> date('Y-m-d H:i:s'),
								'flag'	=> $this->input->post('flag')
							);
							$this->M_isian->update_column($data,$id);
							redirect('/isian/'.$this->input->post('id_butir'));
						}
						//jika tidak menggunakan teknik versioning, langsung update data isian terkait

					}else{
						$this->version_model->update_version();
					}
				}

        		//redirect('/isian/'. $data['isian'][0]['id_butir']);
			}else{
			// jika IYA lakukan proses upload sebelum dimasukkan kedalam database
			// config library untuk file softcopy (direktori penyimpanan isian, jenis isian yang diperbolehkan, maximum size)
				$config['upload_path']          = 'public/upload/';
		        $config['allowed_types']        = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
		        $config['max_size']             = 2000000;
		    // terapkan config tersebut kedalam library
		        $this->load->library('upload', $config);
		    // lakukan proses upload
		        if ( ! $this->upload->do_upload('userfile'))
		        {
		        	// jika proses upload gagal
		                $error = array('error' => $this->upload->display_errors());
		                print_r($error);
		                //$data['butir']=$this->M_butir->find('id',$_POST['id_butir']);
		                //$data['isian']=$this->M_isian->find('id_butir',$_POST['id_butir']);
		                //$data['error']=$error;
						//$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			            //$this->load->view('template/header');
						//$this->load->view('isian',$data);
						//$this->load->view('footer');
		        }
		        else
		        {
		        	// jika proses upload berhasil
		                $upload_data =$this->upload->data();
		                $file_path=base_url()."public/upload/".$upload_data['file_name'];
		                $file=array('filename'=> $upload_data['file_name']);
		                $this->M_isian->update_column($file,$_POST['id_isian']);
						$status=array('status'=> $_POST['status']);
						 $this->M_isian->update_column($status,$_POST['id_isian']);
		            // masukkan detail softcopy kedalam database
		                $this->version_model->insert_version($file_path);
		                redirect('/isian/'. $this->input->post('id_butir'));
		        }
			}

        }
	}
}
