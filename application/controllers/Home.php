<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct(){
	     parent::__construct();
	     $this->load->library('session');
	     $this->load->model('M_home');
	     $this->load->model('M_prodi');
		 $this->load->model('M_fakultas');
		 $this->load->model('M_borang');
		 $this->load->model('M_butir');
    }


	public function index()
	{
		$this->load->library('session');
		if(isset($_SESSION['logged_in']))
		{
			$data['active_menu']='home';
	        $this->load->view('template/header',$data);
    		$data['prodi']=$this->M_prodi->get_all_data();
    		$data['fakultas']=$this->M_fakultas->get_entire_data();
			$data['borang']=$this->M_borang->get_all_data();
			$data['butir']=$this->M_butir->get_entire_data();
			$data['users']=$this->M_home->get_all_data();
			$data['isian']=$this->M_home->get_isian_data();
			$data['jumlahisi']=$this->M_home->getjumlahborang();
			$data['dashboard']=$this->M_home->join3tabel();
			$this->load->view('index',$data);
	        $this->load->view('template/footer');
		}else{
			redirect('Home/login');
		}
	}

	public function forgetpass(){
		$this->load->view('forget-pass');
	}

	public function login(){
		$this->load->view('login');
	}

	public function register(){
		$this->load->view('register');
	}

	public function pages(){
		$this->load->view('pages');
	}

	public function changelogs(){
		$data['active_menu']='changelogs';
		$this->load->view('template/header',$data);
		$this->load->view('changelogs');
		$this->load->view('template/footer');
	}

	public function laporan(){
		$data['active_menu']='laporan';
		$this->load->view('template/header',$data);
		$this->load->view('laporan');
		// $this->load->view('template/footer');
	}

	// public function borang(){
	// 	$data['active_menu']='borang';
	// 	$this->load->view('template/header',$data);
	// 	$this->load->view('borang');
	// 	// $this->load->view('template/footer');
	// }

	public function histori(){
		$this->load->model('M_home');
		// $this->load->library('form_validation');
		$data['active_menu']='histori';
		$this->load->view('template/header',$data);
		$data['histori']=$this->M_home->get_history();
		$this->load->view('histori',$data);
	}

	public function penilaian(){
		$data['active_menu']='penilaian';
		$this->load->view('template/header',$data);
		$this->load->view('penilaian');
		$this->load->view('template/footer');
	}

	public function editor(){
		$data['active_menu']='home';
		$this->load->view('template/header',$data);
		$this->load->view('editor');
	    $this->load->view('template/footerEditor');
	}

	public function insert(){
	    $this->load->model('M_home');
	    $data = array(
			'name' => $this->input->post('nama'),
	        'username' => $this->input->post('username'),
	        'password' => md5($this->input->post("password")),
			'email' => $this->input->post('email'),
			'role' => $this->input->post('role'),
			'created_at'=> date('Y-m-d H:i:s')
	         );
	    $data = $this->M_home->Insert('users', $data);

		$data = array(
                        'user'=> $this->input->post('nama'),
                        'action' => "Berhasil menambah User Baru",
                        'created_at'=> date('Y-m-d H:i:s')
                );
		$data = $this->M_home->Insert('log', $data);
	    redirect('Home/login');
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	public function loginUsers(){
/*
        $login = $this->M_login->actLogin();
        if($login == true){
            $data = array(
              'id_admin' => $login->id_admin,
              'username' => $login->username,
              'password' => $login->password
            );
            $this->session->set_userdata($data);
            redirect('dashboard/index');
        }else{
            redirect('dashboard/login');
        }*/
		//redirect('dashboard/index');
        $this->load->library('session');
		$this->load->model('M_login');
				$data=$this->M_login->checkLoginUser();
				if($data>0){
					$sessionData=$this->M_login->findByDynamicColumnUser(array('username'=> $_POST['username'],'password'=> md5($_POST['password'])));

					$newdata = array(
						'username'  => $_POST['username'],
						'logged_in' => TRUE,
						'name'		=> $sessionData[0]['name'],
						'email'		=> $sessionData[0]['email'],
						'role'		=> $sessionData[0]['role'],
						'id_session'=> $sessionData[0]['id']
					);

					$this->session->set_userdata($newdata);
//					print_r($_SESSION);
					//echo $_SESSION['logged_in']." asdfasdf";
					//die();
					redirect('Home/index');
				}else{
					$_SESSION['error'] = '';
					redirect('Home/login');
				}
    }

	public function logOut() {
/*
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->sess_destroy();
        $this->load->view('main/index');
*/
		//redirect('main/index');
        $this->session->sess_destroy();
		redirect('Home/pages');
    }

	public function notLoggedIn(){
		$this->load->view('lockscreen');
	}
}
