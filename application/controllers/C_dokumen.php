<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dokumen extends CI_Controller {

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
			$this->load->model('M_dokumen');
			$this->load->library('form_validation');

			$id=$this->uri->segment(2, 0);
			$data['active_menu']='borang';
			$this->load->view('template/header',$data);
			$data['butir']=$this->M_butir->find('id',$id);
			$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			$data['dokumen']=$this->M_dokumen->find('id_butir',$id);
			$data1['dokumen']=$this->M_dokumen->ambildata();
			$data1['dokumen']=$this->M_dokumen->get_entire_data1($id);
			$this->load->view('dokumen',$data);
			//$this->load->view('dokumen2',$data1);
			// $this->load->view('footer');
		}else{
			redirect('Home/pages');
		}


	}

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
		$this->load->model('M_dokumen');

		//delete files on server
		$dok=$this->M_dokumen->find('id',$id);
		$path = './public/upload/'.$dok[0]['filename'];
		//unlink($path);

		//delete data on database
		$result=$this->M_dokumen->delete('id',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}

	}

	public function destroydok($id,$butir){
		// $id=$_POST['id'];
        // $idbut=3;
		$this->load->model('M_dokumen');
		$uploadisi = $this->M_dokumen->get_by_id_hapus($id);
		for ($i=0; $i<count($uploadisi); $i++){
			if(file_exists('uploads/dokumen/'.$uploadisi->filename) && $uploadisi->filename)
      		unlink('uploads/dokumen/'.$uploadisi->filename);
		}
		$result=$this->M_dokumen->delete('id',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butir/'.$idbut);
        redirect('uploadisi/'.$butir);
	}

	function delete_multiple(){
		//$id=$_POST['id'];
		$this->load->model('M_dokumen');
		$this->M_dokumen->remove_checked_id();
		//$btr=$this->M_dokumen->find('id',$id);
		redirect(base_url().'index.php');
		//redirect('/dokumen/'.$this->input->post('id_butir'));
	}

	function remove_checked(){
		$id=$_POST['id'];
		$this->load->library('form_validation');
		$this->load->model('M_dokumen');

        //validation rules
        $this->form_validation->set_rules('msg[]', 'Private Message', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE)
        {
            $data['query'] = $this->M_dokumen->received_msg();
            $this->load->view('M_dokumen/inbox', $data);
        }
        else //success
        {
            $checked_messages = $this->input->post('msg'); //selected messages
            $this->M_dokumen->delete_checked($checked_messages);

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

	public function updatedok(){
		//load needed library,helper,model
       	$this->load->library('form_validation');
       	$this->load->model('M_dokumen');
       	$id=$_POST['id_butir'];
        $this->M_dokumen->update_entry();
		redirect('uploadisi/'.$_POST['id_butir']);
	}

	public function update(){
		$this->load->library('form_validation');
		$this->load->model('M_dokumen');
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
			$this->load->view('dokumen',$data);
			$this->load->view('footer');
        }
        else
        {
        	if (empty($_FILES['userfile']['name'])) {
        		$this->M_dokumen->insert_entry("","");
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
		                //$data['dokumen']=$this->M_dokumen->find('id_butir',$_POST['id_butir']);
		                //$data['error']=$error;
						//$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			            //$this->load->view('template/header');
						//$this->load->view('dokumen',$data);
						//$this->load->view('footer');
		        }
		        else
		        {
		                $upload_data =$this->upload->data();
		                $file_path=base_url()."public/upload/".$upload_data['file_name'];
		                $this->M_dokumen->insert_entry($file_path,$upload_data['file_name']);
		                redirect('/dokumen/'.$this->input->post('id_butir'));
		        }
			}

        }
	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_dokumen');
		$data=$this->M_dokumen->find('id',$id);
		echo json_encode($data);
	}

	public function findFlag(){
		$flag='view';
		$this->load->model('M_dokumen');
		$data=$this->M_dokumen->findFlag('flag',$flag);
		echo json_encode($data);
	}

	public function findForUpdate(){
		$id=$_POST['id'];
		$this->load->model('M_dokumen');

		$data=$this->M_dokumen->findForUpdate($id);
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
		$this->load->model('M_dokumen');
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
			$this->load->view('dokumen',$data);
			$this->load->view('footer');
        }
        else
        {
        	// jika validasi valid eriksa apakah user mengupload file softcopy atau tidak
        	if (empty($_FILES['userfile']['name'])) {
			//Jika TIDAK masukkan data dokumen tersebut ke dalam database
				$filename="";
				$filename=$this->input->post('fileExisting');
				//echo "filename: ".$filename;
				if(!empty($filename)){
					$file_path=base_url()."public/upload/".$filename;
					$this->M_dokumen->insert_entry($filename);
					$this->version_model->insert_entry($file_path);
					redirect('/dokumen/'.$this->input->post('id_butir'));

				}else{
					$this->M_dokumen->insert_entry("");
					redirect('/dokumen/'.$this->input->post('id_butir'));
				}
			}else{
			// jika IYA lakukan proses upload sebelum dimasukkan kedalam database
			// config library untuk file softcopy (direktori penyimpanan dokumen, jenis dokumen yang diperbolehkan, maximum size)
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
		                //$data['dokumen']=$this->M_dokumen->find('id_butir',$_POST['id_butir']);
		                //$data['error']=$error;
						//$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			            $this->load->view('template/header');
						$this->load->view('dokumen',$data);
						$this->load->view('footer');
		        }
		        else
		        {
		        	// jika proses upload berhasil
		                $upload_data =$this->upload->data();
		                $file_path=base_url()."public/upload/".$upload_data['file_name'];

		            // masukkan detail dokumen kedalam database
		                $this->M_dokumen->insert_entry($upload_data['file_name']);
		            // masukkan detail softcopy kedalam database
		                $this->version_model->insert_entry($file_path);
		                redirect('/dokumen/'.$this->input->post('id_butir'));
		        }
			}

        }
	}

	public function applyforall(){
		$butir=$this->uri->segment(3, 0);
		echo $butir;
		$this->load->model('M_dokumen');
		$this->load->model('version_model');
		$data=$this->M_dokumen->global_query('select id,filename from dokumen where id_butir=(SELECT id FROM `butir` where butir="'.$butir.'") and id not in (select id_dokumen from documentversion )');
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
		$this->load->model('M_dokumen');
		$this->load->model('M_borang');
		$this->load->model('M_butir');
		$this->load->model('version_model');

		// set aturan untuk form validation
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('prioritas', 'Prioritas', 'required');
		//$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_message('required', 'Field {field} wajib diisi.');

		$id=$_POST['id_dokumen'];
		//echo $id." id_dokumen<br>";
        $data['dokumen']=$this->M_dokumen->find('id',$id);
		//jalankan validasi form
		if ($this->form_validation->run() == FALSE)
        {
        	//jika validasi gagal alihkan kembali ke halaman terkait dan tampilkan pesan eror

			$data['butir']=$this->M_butir->find('id',$data['dokumen'][0]['id_butir']);
			$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
            $this->load->view('template/header');
			$this->load->view('dokumen',$data);
			$this->load->view('footer');
        }
        else
        {
        	// jika validasi valid memeriksa apakah user mengupload file softcopy atau tidak
        	if (empty($_FILES['userfile']['name'])) {
			//print_r("no file to upload");
			//Jika TIDAK masukkan data dokumen baru periksa apakah user memilih untuk menggunakan versi dokumen yang lama
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
					$this->M_dokumen->update_column($data,$id);
					redirect('/dokumen/'.$this->input->post('id_butir'));
				}else{
					echo "uploadedFIle empty";
					if($_POST['version']==""){
						$filename="";
						$filename=$this->input->post('fileExisting');
						if(!empty($filename)){
							//print_r("filename not empty");
							$file_path=base_url()."public/upload/".$filename;
							echo $this->input->post('fileExisting');
							$this->M_dokumen->update_entry();
							$this->version_model->insert_version($file_path);
							redirect('/dokumen/'.$this->input->post('id_butir'));
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
							$this->M_dokumen->update_column($data,$id);
							redirect('/dokumen/'.$this->input->post('id_butir'));
						}
						//jika tidak menggunakan teknik versioning, langsung update data dokumen terkait

					}else{
						$this->version_model->update_version();
					}
				}

        		//redirect('/dokumen/'. $data['dokumen'][0]['id_butir']);
			}else{
			// jika IYA lakukan proses upload sebelum dimasukkan kedalam database
			// config library untuk file softcopy (direktori penyimpanan dokumen, jenis dokumen yang diperbolehkan, maximum size)
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
		                //$data['dokumen']=$this->M_dokumen->find('id_butir',$_POST['id_butir']);
		                //$data['error']=$error;
						//$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
			            //$this->load->view('template/header');
						//$this->load->view('dokumen',$data);
						//$this->load->view('footer');
		        }
		        else
		        {
		        	// jika proses upload berhasil
		                $upload_data =$this->upload->data();
		                $file_path=base_url()."public/upload/".$upload_data['file_name'];
		                $file=array('filename'=> $upload_data['file_name']);
		                $this->M_dokumen->update_column($file,$_POST['id_dokumen']);
						$status=array('status'=> $_POST['status']);
						 $this->M_dokumen->update_column($status,$_POST['id_dokumen']);
		            // masukkan detail softcopy kedalam database
		                $this->version_model->insert_version($file_path);
		                redirect('/dokumen/'. $this->input->post('id_butir'));
		        }
			}

        }
	}
}