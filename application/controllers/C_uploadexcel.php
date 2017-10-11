<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_uploadexcel extends CI_Controller {

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

	public $nama_tabel = 'uploadisian';

	 public function __construct(){
	     parent::__construct();
	     $this->load->library('session');
	     $this->load->library("PHPExcel");
		 $this->load->model("M_uploadexcel");
    }


	public function index($success="")
	{
		if(isset($_SESSION['logged_in']))
		{
			$this->load->model('M_borang');
			$this->load->model('M_uploadexcel');
			$this->load->library('form_validation');

			$id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
    		$this->load->view('template/header',$data);
			$data['buku']=$this->M_borang->find('id',$id);
			$data['butir']=$this->M_uploadexcel->find('id_borang',$id);
			$data['dataisian']=$this->M_uploadexcel->finduploadisi('id_butir',$id);

			// formnya
			$data['judul_besar'] = 'PHPExcel';
			$data['judul_kecil'] = 'Import';
			$data['output'] = "<h4>Sebelum mengupload, pastikan file anda berformat <strong>.xls/.xlsx</strong></h4>";
			$data['output'] .= form_open_multipart('C_uploadexcel/do_upload');
			$form = array(
						'name'        => 'userfile',
						'style'       => 'position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity:0;background-color:transparent;color:transparent;',
						'onchange'	=> "$('#upload-file-info').html($(this).val());"
					);
			$data['output'] .= "<div style='position:relative;'>";
			$data['output'] .= "<a class='btn btn-primary' href='javascript:;'>";
			$data['output'] .= "Browse… ".form_upload($form);
			$data['output'] .= "</a>";
			$data['output'] .= "&nbsp;";
			$data['output'] .= "<span class='label label-info' id='upload-file-info'></span>";
			$data['output'] .= "</div>";
			$data['output'] .= "<br>";
			$data['output'] .= form_submit('name', 'Go !', 'class = "btn btn-default"');
			$data['output'] .= form_close();
			if ($success) {
				$data['pesan'] = '<div class="alert alert-success alert-dismissible">';
				$data['pesan'] .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
				$data['pesan'] .= '<h4><i class="icon fa fa-check"></i> Alert!</h4>';
				$data['pesan'] .= 'Success alert preview. This alert is dismissable.';
				$data['pesan'] .= '</div>';
			}
			// tutup form
			$this->load->view('uploadexcel',$data, FALSE);
		}else{
			redirect('Home/pages');
			//echo $_SESSION['logged_in']." asdfasdf";
		}


	}

	public function find(){
		$id=$_POST['id'];
		$this->load->model('M_uploadexcel');
		$data=$this->M_uploadexcel->find('id',$id);
		echo json_encode($data);
	}

	public function import($success=""){
		$data['judul_besar'] = 'PHPExcel';
		$data['judul_kecil'] = 'Import';
		$data['output'] = "<h4>Sebelum mengupload, pastikan file anda berformat <strong>.xls/.xlsx</strong></h4>";
		$data['output'] .= form_open_multipart('C_uploadexcel/do_upload');
		$form = array(
					'name'        => 'userfile',
					'style'       => 'position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity:0;background-color:transparent;color:transparent;',
					'onchange'	=> "$('#upload-file-info').html($(this).val());"
				);
		$data['output'] .= "<div style='position:relative;'>";
		$data['output'] .= "<a class='btn btn-primary' href='javascript:;'>";
		$data['output'] .= "Browse… ".form_upload($form);
		$data['output'] .= "</a>";
		$data['output'] .= "&nbsp;";
		$data['output'] .= "<span class='label label-info' id='upload-file-info'></span>";
		$data['output'] .= "</div>";
		$data['output'] .= "<br>";
		$data['output'] .= form_submit('name', 'Go !', 'class = "btn btn-default"');
		$data['output'] .= form_close();
		if ($success) {
			$data['pesan'] = '<div class="alert alert-success alert-dismissible">';
			$data['pesan'] .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
			$data['pesan'] .= '<h4><i class="icon fa fa-check"></i> Alert!</h4>';
			$data['pesan'] .= 'Success alert preview. This alert is dismissable.';
			$data['pesan'] .= '</div>';
		}

		$this->load->view('welcome_message', $data, FALSE);
	}

	public function do_upload(){
		$config['upload_path'] = './dataexcel/uploads/';
        $config['allowed_types'] = 'xlsx|xls';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $filename = $upload_data['file_name'];
            $this->M_uploadexcel->upload_data($filename);
            unlink('./dataexcel/uploads/'.$filename);
            redirect('uploadexcel/3','refresh');
		}
	}

	public function export(){ 
            //membuat objek
            $objPHPExcel = new PHPExcel();
            $data = $this->db->get($this->nama_tabel);

            // Nama Field Baris Pertama
        	$fields = $data->list_fields();
        	$col = 0;
	        foreach ($fields as $field)
	        {
	            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
	            $col++;
	        }
	 
	        // Mengambil Data
	        $row = 2;
	        foreach($data->result() as $data)
	        {
	            $col = 0;
	            foreach ($fields as $field)
	            {
	                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
	                $col++;
	            }
	 
	            $row++;
	        }
	        $objPHPExcel->setActiveSheetIndex(0);

            //Set Title
            $objPHPExcel->getActiveSheet()->setTitle('Data Absen');
 
            //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
 
            //Header
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

            //Nama File
            header('Content-Disposition: attachment;filename="absen.xlsx"');

            //Download
            $objWriter->save("php://output");
 
        }

    public function viewbookexcel(){
		$this->load->model('M_borang');
		$this->load->model('M_butir');
		$this->load->model('M_uploadexcel');
		$this->load->library('form_validation');

		$id_butir=$this->uri->segment(2, 0);
		$id=$this->uri->segment(2, 0);
		$data['active_menu']='borang';
		$this->load->view('template/header',$data);
		$data['butir']=$this->M_butir->find('id',$id);
		$data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
		// $data['isian']=$this->M_uploadexcel->find('id_butir',$id);
		// $data['dataisian']=$this->M_uploadexcel->finduploadisi('id_butir',$id);
	 //    $data['dataisianversion']=$this->M_uploadexcel->finduploadisiversion('id_kolom',$id);
	 //    $data['datadokumen']=$this->M_uploadexcel->finduploaddokumen('id_butir',$id);
	 //    $data['datadokumenversion']=$this->M_uploadexcel->finduploaddokumenversion('id_dokumen',$id);
	    $data['getalldata']=$this->M_uploadexcel->findallisian();
	    $data['getallbutir']=$this->M_uploadexcel->findallbutir();
		$this->load->view('template/header',$data);
		$this->load->view('viewbookexcel',$data);
	}

	// QUERY DELETE ISIAN
	public function destroybuku($id,$borang){
	$this->load->model('M_uploadexcel');
    $result=$this->M_uploadexcel->deletedokall('version_no',$id);
		if($result > 0){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
        // redirect('butir/'.$idbut);
        redirect('viewbookexcel/'.$borang);
	}
// TUTUP QUERY DELETE ISIAN
}
