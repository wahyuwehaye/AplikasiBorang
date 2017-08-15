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

        echo '<input type="text" name="11askor" id="11askor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah11b($isi1,$isi2){

        $totalnya = (($isi1+$isi2)/2);

        echo '<input type="text" name="11bskor" id="11bskor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah12($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="12skor" id="12skor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah21($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="21skor" id="21skor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah22($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="22skor" id="22skor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah23($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="23skor" id="23skor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah24($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="24skor" id="24skor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah25($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="25skor" id="25skor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah26($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="26skor" id="26skor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function rasio311a($isi1,$isi2){

        $totalnya = (($isi1/$isi2));

        echo '<input type="text" name="311arasio" id="311arasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah311a($isi1,$isi2){

        $totalnya = (($isi1/$isi2));
        $nilainya = 0;
        if ($totalnya>=4) {
        	$nilainya = 4;
        }else {
        	$nilainya = ((3+$totalnya)/2);
        }

        echo '<input type="text" name="311anilai" id="311anilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($nilainya, 2, ".", ".").'">
        ';
    }

    public function info311a($isi1,$isi2){

        $totalnya = (($isi1/$isi2));
        $nilainya = 0;
        if ($totalnya>=4) {
        	$nilainya = 4;
        }else {
        	$nilainya = ((3+$totalnya)/2);
        }

        echo '<textarea rows="4" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize">Jumlah calon yang ikut seleksi = '.number_format($isi1, 0, ",", ".").', daya tampung PS = '.number_format($isi2, 0, ".", ".").', Rasio Calon Mahasiswa yang ikut seleksi terhadap daya tampung = '.number_format($totalnya, 2, ".", ".").'</textarea>
        ';
    }

    public function rasio311b($isi1,$isi2){

        $totalnya = (($isi1/$isi2));

        echo '<input type="text" name="311brasio" id="311brasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah311b($isi1,$isi2){

        $totalnya = (($isi1/$isi2));
        $nilainya = 0;
        if ($totalnya>=95) {
        	$nilainya = 4;
        }else {
        	$nilainya = ((40*$totalnya-10)/7);
        }

        echo '<input type="text" name="311bnilai" id="311bnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($nilainya, 2, ".", ".").'">
        ';
    }

    public function info311b($isi1,$isi2){

        $totalnya = (($isi1/$isi2));
        $nilainya = 0;
        if ($totalnya>=95) {
        	$nilainya = 4;
        }else {
        	$nilainya = ((40*$totalnya-10)/7);
        }

        echo '<textarea rows="4" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize">Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi = '.number_format($isi1, 0, ",", ".").' / '.number_format($isi2, 0, ",", ".").' = '.number_format($totalnya, 2, ".", ".").'</textarea>
        ';
    }

    public function rasio311c($isi1,$isi2){

        $totalnya = (($isi1/$isi2));

        echo '<input type="text" name="311crasio" id="311crasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah311c($isi1,$isi2){

        $totalnya = (($isi1/$isi2));
        $nilainya = 0;
        if ($totalnya>=1.25) {
        	$nilainya = 0;
        }else {
        	// $nilainya = ((5-4*$totalnya));
        	$nilainya = 4;
        }

        echo '<input type="text" name="311cnilai" id="311cnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($nilainya, 2, ".", ".").'">
        ';
    }

    public function info311c($isi1,$isi2){

        $totalnya = (($isi1/$isi2));
        $nilainya = 0;
        if ($totalnya>=1.25) {
        	$nilainya = 0;
        }else {
        	$nilainya = ((5-4*$totalnya));
        }

        echo '<textarea rows="4" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize">Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi = '.number_format($isi1, 0, ".", ".").' / '.number_format($isi2, 0, ".", ".").' = '.number_format($totalnya, 2, ".", ".").'</textarea>
        ';
    }

    public function cekjumlah311d($isi1,$isi2){

        $totalnya = (($isi1/$isi2));
        // $nilainya = 0;
        // if ($totalnya>=1.25) {
        // 	$nilainya = 0;
        // }else {
        	// $nilainya = ((5-4*$totalnya));
        	$nilainya = 4;
        // }

        echo '<input type="text" name="311dnilai" id="311dnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($nilainya, 2, ".", ".").'">
        ';
    }

    public function info311d($isi1,$isi2){

        $totalnya = (($isi1/$isi2));
        $nilainya = 0;
        // if ($totalnya>=1.25) {
        // 	$nilainya = 0;
        // }else {
        // 	$nilainya = ((5-4*$totalnya));
        // }

        echo '<textarea rows="4" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize">rata-rata IPK Makasiswa = '.number_format($isi1, 0, ".", ".").'</textarea>
        ';
    }

    public function cekjumlah312($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="312nilai" id="312nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah313($isi1){

        $totalnya = (($isi1));

        echo '<input type="text" name="313nilai" id="313nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function rasio314a($isi1,$isi2){

        $totalnya = (($isi2/$isi1)*100);

        echo '<input type="text" name="314arasio" id="314arasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah314a($isi1,$isi2){

        $totalnya = (($isi2/$isi1));
        $nilainya = 0;
        if ($totalnya>=50) {
            $nilainya = 4;
        }else {
            $nilainya = ((1+6*$totalnya));
        }

        echo '<input type="text" name="314anilai" id="314anilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($nilainya, 2, ".", ".").'">
        ';
    }

    public function info314a($isi1,$isi2){

        $totalnya = (($isi2/$isi1)*100);
        $nilainya = 0;
        if ($totalnya>=50) {
            $nilainya = 4;
        }else {
            $nilainya = ((1+6*$totalnya));
        }

        echo '<textarea rows="4" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize">Presentase kelulusan tepat waktu (KWT) = '.number_format($isi2, 0, ".", ".").' / '.number_format($isi1, 0, ".", ".").' = '.number_format($totalnya, 2, ".", ".").'</textarea>
        ';
    }

    public function rasio314b($isi1,$isi2,$isi3){

        $totalnya = ((($isi1-$isi2-$isi3)/$isi1)*100);

        echo '<input type="text" name="314brasio" id="314brasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($totalnya, 2, ".", ".").'">
        ';
    }

    public function cekjumlah314b($isi1,$isi2,$isi3){

        $totalnya = ((($isi1-$isi2-$isi3)/$isi1)*100);
        $nilainya = 0;
        if ($totalnya<=6) {
            $nilainya = 4;
        }else {
            $nilainya = ((180-400*$totalnya)/39);
        }

        echo '<input type="text" name="314bnilai" id="314bnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" disabled value="'.number_format($nilainya, 2, ".", ".").'">
        ';
    }

    public function info314b($isi1,$isi2,$isi3){

        $totalnya = ((($isi1-$isi2-$isi3)/$isi1)*100);
        $nilainya = 0;
        if ($totalnya<=6) {
            $nilainya = 4;
        }else {
            $nilainya = ((180-400*$totalnya)/39);
        }

        echo '<textarea rows="4" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize">Presentase mahasiswa yang DO atau mengundurkan diri = '.number_format($isi1, 0, ".", ".").' - '.number_format($isi2, 0, ".", ".").' - '.number_format($isi3, 0, ".", ".").' = '.number_format($totalnya, 2, ".", ".").'</textarea>
        ';
    }

    public function nilaiborang($nil1,$nil2,$nil3,$nil4,$nil5,$nil6,$nil7,$nil8,$nil9,$nil10,$nil11,$nil12,$nil13,$nil14,$nil15,$nil16,$nil17){

        $totalnya = $nil1+$nil2+$nil3+$nil4+$nil5+$nil6+$nil7+$nil8+$nil9+$nil10+$nil11+$nil12+$nil13+$nil14+$nil15+$nil16+$nil17;

        echo '<p>'.number_format($totalnya, 2, ".", ".").'</p>
        ';
    }
}