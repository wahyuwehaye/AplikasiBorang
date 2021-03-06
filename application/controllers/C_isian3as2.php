<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_isian3as2 extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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
        $this->load->model('M_isian3as2');
        $this->load->model('M_uploadisi');
        $this->load->model('M_dokumen');
        $this->load->model('M_penilaian');
        $this->load->library('form_validation');
    }

    // ISIAN FORMAT EXCEL PENILAIAN
    public function index()
    {
        if(isset($_SESSION['logged_in']))
        {

            $id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
            $this->load->view('template/header',$data);
            $data['butir']=$this->M_butir->find('id',$id);
            $data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
            $data['isian']=$this->M_isian3as2->find('id_butir',$id);
            $data['getdata']=$this->M_isian3as2->join3tabel($id);
            $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
            $id_but = $data['butir'][0]['id'];
            $id_bor = $data['butir'][0]['id_borang'];
            $caributir['carbut'] = $this->M_isian3as2->findButirnya('id',$id_but,'id_borang',$id_bor);
            $butirnya = $caributir['carbut'][0]['butir'];
            if (($butirnya=='1.1.a') || ($butirnya=='1.1.b') || ($butirnya=='1.2') || ($butirnya=='2.1') || ($butirnya=='2.2') || ($butirnya=='2.3') || ($butirnya=='2.4') || ($butirnya=='2.5') || ($butirnya=='2.6') || ($butirnya=='3.1.3') || ($butirnya=='3.2') || ($butirnya=='3.3.1.a') || ($butirnya=='3.3.2') || ($butirnya=='3.3.3') || ($butirnya=='3.4.1') || ($butirnya=='3.4.2') || ($butirnya=='4.1') || ($butirnya=='4.3.2') || ($butirnya=='4.3.3') || ($butirnya=='4.3.4') || ($butirnya=='4.3.5') || ($butirnya=='4.4.1') || ($butirnya=='4.5.1') || ($butirnya=='4.5.2') || ($butirnya=='4.5.3') || ($butirnya=='4.5.4') || ($butirnya=='4.5.5') || ($butirnya=='4.6.2') || ($butirnya=='5.3.2') || ($butirnya=='5.5.2') || ($butirnya=='5.7.1') || ($butirnya=='5.7.2') || ($butirnya=='5.7.3') || ($butirnya=='5.7.4') || ($butirnya=='5.7.5') || ($butirnya=='6.1') || ($butirnya=='6.4.2') || ($butirnya=='6.5.1')) {
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$id);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$id);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
             }else if (($butirnya=='3.1.1.a') || ($butirnya=='3.1.1.b') || ($butirnya=='3.1.1.c') || ($butirnya=='3.1.1.d')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $cariidbutir['carbutr'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','3.1.1.a');
                $idbutirnya = $cariidbutir['carbutr'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian321kolom('id_butir',$idbutirnya);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$idbutirnya);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$idbutirnya);
            } else if (($butirnya=='3.1.2')) {
                $data['dataisian']=$this->M_isian3as2->findisian321kolom('id_butir',$id);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$id);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
            }else if (($butirnya=='3.1.4.a') || ($butirnya=='3.1.4.b')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $cariidbutir['carbutr'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','3.1.4.a');
                $idbutirnya = $cariidbutir['carbutr'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian323kolom('id_butir',$idbutirnya);
                $data['dataisian1brs']=$this->M_isian3as2->findisian323kolom1brs('id_butir',$idbutirnya);
                $data['dataisian2brs']=$this->M_isian3as2->findisian323kolom2brs('id_butir',$idbutirnya);
                $data['dataisian3brs']=$this->M_isian3as2->findisian323kolom3brs('id_butir',$idbutirnya);
                $data['dataisian4brs']=$this->M_isian3as2->findisian323kolom4brs('id_butir',$idbutirnya);
                $data['dataisian5brs']=$this->M_isian3as2->findisian323kolom5brs('id_butir',$idbutirnya);
                $data['dataisian6brs']=$this->M_isian3as2->findisian323kolom6brs('id_butir',$idbutirnya);
                $data['dataisian7brs']=$this->M_isian3as2->findisian323kolom7brs('id_butir',$idbutirnya);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$idbutirnya);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$idbutirnya);
            }elseif (($butirnya=='3.2.1') || ($butirnya=='3.2.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir332['caribut332'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','3.2.1');
                $butirnya332 = $caributir332['caribut332'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya332);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya332);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya332);
            }elseif (($butirnya=='3.3.1.b') || ($butirnya=='3.3.1.c')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir332['caribut332'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','3.3.1.b');
                $butirnya332 = $caributir332['caribut332'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian331kolom('id_butir',$butirnya332);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya332);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya332);
            }elseif (($butirnya=='4.2.1') || ($butirnya=='4.2.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir332['caribut332'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','4.2.1');
                $butirnya332 = $caributir332['caribut332'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian331kolom('id_butir',$butirnya332);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya332);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya332);
            }elseif (($butirnya=='4.3.1.a') || ($butirnya=='4.3.1.b') || ($butirnya=='4.3.1.c') || ($butirnya=='4.3.1.d')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','4.3.1.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='4.4.2.a') || ($butirnya=='4.4.2.b')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','4.4.2.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='5.1.1.a') || ($butirnya=='5.1.1.b')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','5.1.1.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='5.1.2.a') || ($butirnya=='5.1.2.b')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','5.1.2.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='4.6.1.a') || ($butirnya=='4.6.1.b') || ($butirnya=='4.6.1.c')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','4.6.1.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='5.3.1.a') || ($butirnya=='5.3.1.b')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','5.3.1.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='5.4.1.a')|| ($butirnya=='5.4.1.b')|| ($butirnya=='5.4.1.c')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','5.4.1.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='5.4.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','5.4.2');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian331kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='6.3.1')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','6.3.1');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian331kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='6.4.1.a') || ($butirnya=='6.4.1.b')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','6.4.1.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='6.4.1.c') || ($butirnya=='6.4.1.d') || ($butirnya=='6.4.1.e')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','6.4.1.c');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='6.5.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','6.5.2');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian331kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='7.1.1')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','7.1.1');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian331kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='7.2.1')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3as2->findButirnyasama('id_borang',$id_bor,'butir','7.2.1');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian331kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$butirnya431);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            } else{
                $data['dataisian']=$this->M_isian3as2->findisian1kolom('id_butir',$id);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$id);
                // $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
            }
            
            
            $data1['isian']=$this->M_isian3as2->ambildata();
            $data1['isian']=$this->M_isian3as2->get_entire_data1($id);
            $this->load->view('isian',$data);
            //$this->load->view('isian2',$data1);
            // $this->load->view('footer');
        }else{
            redirect('Home/pages');
        }

    }

    // ISIAN FORMAT BUKU BORANG 3A 3B
    public function isian_buku()
    {
        if(isset($_SESSION['logged_in']))
        {

            $id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
            $this->load->view('template/header',$data);
            $data['butir']=$this->M_butir->find_buku('id',$id);
            $data['buku']=$this->M_borang->find_buku('id',$data['butir'][0]['id_borang']);
            $data['isian']=$this->M_isian3as2->find('id_butir',$id);
            $data['getdata']=$this->M_isian3as2->join3tabel_buku($id);
            $id_but = $data['butir'][0]['id'];
            $id_bor = $data['butir'][0]['id_borang'];
            $caributir['carbut'] = $this->M_isian3as2->findButirnya_buku('id',$id_but,'id_borang',$id_bor);
            $butirnya = $caributir['carbut'][0]['butir'];
            if ($butirnya=='3.2.1') {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $cariidbutir['carbutr'] = $this->M_isian3as2->findButirnyasama_buku('id_borang',$id_bor,'butir','3.2.1');
                $idbutirnya = $cariidbutir['carbutr'][0]['id'];
                $data['dataisian']=$this->M_isian3as2->findisian321kolom_buku('id_butir',$idbutirnya);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$idbutirnya);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$idbutirnya);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
            }else{

                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['dataisian']=$this->M_isian3as2->findisian1kolom_buku('id_butir',$id);
                $data['dataisianversion']=$this->M_isian3as2->findisian1kolomversion('id_kolom',$id);
            }
            $this->load->view('isian_buku3as2',$data);
            //$this->load->view('isian2',$data1);
            // $this->load->view('footer');
        }else{
            redirect('Home/pages');
        }


    }

    // VIEW BUKU YANG SUDAH JADI DAN SUDAH TERISI
    public function viewbookbutir(){
        $this->load->model('M_borang');
        $this->load->model('M_butir');
        $this->load->model('M_isian3as2');
        $this->load->library('form_validation');

        $id=$this->uri->segment(2, 0);
        $data['active_menu']='borang';
        $this->load->view('template/header',$data);
        $data['butir']=$this->M_butir->find('id',$id);
        $data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
        $data['isian']=$this->M_isian3as2->find('id_butir',$id);
        $data['dataisian1']=$this->M_isian3as2->findisian1kolom('id_butir',1);
        $data['dataisianversion1']=$this->M_isian3as2->findisian1kolomversion('id_kolom',1);
        $data['dataisian2']=$this->M_isian3as2->findisian1kolom('id_butir',2);
        $data['dataisianversion2']=$this->M_isian3as2->findisian1kolomversion('id_kolom',2);
        $data['dataisian3']=$this->M_isian3as2->findisian1kolom('id_butir',3);
        $data['dataisianversion3']=$this->M_isian3as2->findisian1kolomversion('id_kolom',3);
        $data['dataisian4']=$this->M_isian3as2->findisian1kolom('id_butir',4);
        $data['dataisianversion4']=$this->M_isian3as2->findisian1kolomversion('id_kolom',4);
        $data['dataisian5']=$this->M_isian3as2->findisian1kolom('id_butir',5);
        $data['dataisianversion5']=$this->M_isian3as2->findisian1kolomversion('id_kolom',5);
        $data['dataisian6']=$this->M_isian3as2->findisian1kolom('id_butir',6);
        $data['dataisianversion6']=$this->M_isian3as2->findisian1kolomversion('id_kolom',6);
        $data['dataisian7']=$this->M_isian3as2->findisian1kolom('id_butir',7);
        $data['dataisianversion7']=$this->M_isian3as2->findisian1kolomversion('id_kolom',7);
        $data['dataisian8']=$this->M_isian3as2->findisian1kolom('id_butir',8);
        $data['dataisianversion8']=$this->M_isian3as2->findisian1kolomversion('id_kolom',8);
        $data['dataisian9']=$this->M_isian3as2->findisian1kolom('id_butir',9);
        $data['dataisianversion9']=$this->M_isian3as2->findisian1kolomversion('id_kolom',9);
        $data['dataisian10']=$this->M_isian3as2->findisian321kolom('id_butir',10);
        $data['dataisianversion10']=$this->M_isian3as2->findisian1kolomversion('id_kolom',10);
        $data['dataisian11']=$this->M_isian3as2->findisian321kolom('id_butir',11);
        $data['dataisianversion11']=$this->M_isian3as2->findisian1kolomversion('id_kolom',11);
        $data['dataisian12']=$this->M_isian3as2->findisian321kolom('id_butir',12);
        $data['dataisianversion12']=$this->M_isian3as2->findisian1kolomversion('id_kolom',12);
        $data['dataisian13']=$this->M_isian3as2->findisian321kolom('id_butir',13);
        $data['dataisianversion13']=$this->M_isian3as2->findisian1kolomversion('id_kolom',13);
        $data['dataisian14']=$this->M_isian3as2->findisian321kolom('id_butir',14);
        $data['dataisianversion14']=$this->M_isian3as2->findisian1kolomversion('id_kolom',14);
        $data['dataisian15']=$this->M_isian3as2->findisian1kolom('id_butir',15);
        $data['dataisianversion15']=$this->M_isian3as2->findisian1kolomversion('id_kolom',15);
        $data['dataisian16']=$this->M_isian3as2->findisian1kolom('id_butir',16);
        $data['dataisianversion16']=$this->M_isian3as2->findisian1kolomversion('id_kolom',16);
        $data['dataisian17']=$this->M_isian3as2->findisian1kolom('id_butir',17);
        $data['dataisianversion17']=$this->M_isian3as2->findisian1kolomversion('id_kolom',17);
        $data['dataisian18']=$this->M_isian3as2->findisian1kolom('id_butir',18);
        $data['dataisianversion18']=$this->M_isian3as2->findisian1kolomversion('id_kolom',18);
        $data['dataisian19']=$this->M_isian3as2->findisian1kolom('id_butir',19);
        $data['dataisianversion19']=$this->M_isian3as2->findisian1kolomversion('id_kolom',19);
        $data['dataisian20']=$this->M_isian3as2->findisian1kolom('id_butir',20);
        $data['dataisianversion20']=$this->M_isian3as2->findisian1kolomversion('id_kolom',20);
        $data['dataisian21']=$this->M_isian3as2->findisian1kolom('id_butir',21);
        $data['dataisianversion21']=$this->M_isian3as2->findisian1kolomversion('id_kolom',21);
        $data['dataisian22']=$this->M_isian3as2->findisian1kolom('id_butir',22);
        $data['dataisianversion22']=$this->M_isian3as2->findisian1kolomversion('id_kolom',22);
        $data['dataisian23']=$this->M_isian3as2->findisian1kolom('id_butir',23);
        $data['dataisianversion23']=$this->M_isian3as2->findisian1kolomversion('id_kolom',23);
        $data['dataisian24']=$this->M_isian3as2->findisian1kolom('id_butir',24);
        $data['dataisianversion24']=$this->M_isian3as2->findisian1kolomversion('id_kolom',24);
        $data['dataisian25']=$this->M_isian3as2->findisian1kolom('id_butir',25);
        $data['dataisianversion25']=$this->M_isian3as2->findisian1kolomversion('id_kolom',25);
        $data['dataisian26']=$this->M_isian3as2->findisian1kolom('id_butir',26);
        $data['dataisianversion26']=$this->M_isian3as2->findisian1kolomversion('id_kolom',26);
        $data['dataisian27']=$this->M_isian3as2->findisian1kolom('id_butir',27);
        $data['dataisianversion27']=$this->M_isian3as2->findisian1kolomversion('id_kolom',27);
        $data['dataisian28']=$this->M_isian3as2->findisian1kolom('id_butir',28);
        $data['dataisianversion28']=$this->M_isian3as2->findisian1kolomversion('id_kolom',28);
        $this->load->view('template/header',$data);
        $this->load->view('viewbookbutir');
    }

    // FORMAT BUKU BORANG YANG SUDAH JADI
  public function bukuborang(){
    $this->load->model('M_borang');
    $this->load->model('M_butir');
    $this->load->model('M_isian3as2');
    $this->load->library('form_validation');

    $id=$this->uri->segment(2, 0);
    $data['active_menu']='penilaian';
    $this->load->view('template/header',$data);
    $data['butir']=$this->M_butir->find('id',$id);
    $data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
    $data['isian']=$this->M_isian3as2->find('id_butir',$id);
    // if ($id==1) {
      $data['dataisian1']=$this->M_isian3as2->findisian1kolom('id_butir',1);
      $data['dataisianversion1']=$this->M_isian3as2->findisian4kolomversion('id_kolom',1);
    // }elseif ($id==2) {
      $data['dataisian2']=$this->M_isian3as2->findisian1kolom('id_butir',2);
      $data['dataisianversion2']=$this->M_isian3as2->findisian1kolomversion('id_kolom',2);
    // }elseif ($id==3) {
      $data['dataisian3']=$this->M_isian3as2->findisian1kolom('id_butir',3);
      $data['dataisianversion3']=$this->M_isian3as2->findisian1kolomversion('id_kolom',3);
    // }
    $data['dataisian4']=$this->M_isian3as2->findisian1kolom('id_butir',4);
    $data['dataisianversion4']=$this->M_isian3as2->findisian1kolomversion('id_kolom',4);
    $data['dataisian5']=$this->M_isian3as2->findisian1kolom('id_butir',5);
    $data['dataisianversion5']=$this->M_isian3as2->findisian1kolomversion('id_kolom',5);
    $data['dataisian6']=$this->M_isian3as2->findisian1kolom('id_butir',6);
    $data['dataisianversion6']=$this->M_isian3as2->findisian1kolomversion('id_kolom',6);
    $data['dataisian7']=$this->M_isian3as2->findisian1kolom('id_butir',7);
    $data['dataisianversion7']=$this->M_isian3as2->findisian1kolomversion('id_kolom',7);
    $data['dataisian8']=$this->M_isian3as2->findisian12kolom('id_butir',8);
    $data['dataisianversion8']=$this->M_isian3as2->findisian12kolomversion('id_kolom',8);
    $data['dataisian9']=$this->M_isian3as2->findisian5kolom('id_butir',9);
    $data['dataisianversion9']=$this->M_isian3as2->findisian5kolomversion('id_kolom',9);
    $data['dataisian10']=$this->M_isian3as2->findisian1kolom('id_butir',10);
    $data['dataisianversion10']=$this->M_isian3as2->findisian1kolomversion('id_kolom',10);
    $data['dataisian11']=$this->M_isian3as2->findisian1kolom('id_butir',11);
    $data['dataisianversion11']=$this->M_isian3as2->findisian1kolomversion('id_kolom',11);
    $data['dataisian12']=$this->M_isian3as2->findisian1kolom('id_butir',12);
    $data['dataisianversion12']=$this->M_isian3as2->findisian1kolomversion('id_kolom',12);
    $data['dataisian13']=$this->M_isian3as2->findisian1kolom('id_butir',13);
    $data['dataisianversion13']=$this->M_isian3as2->findisian1kolomversion('id_kolom',13);
    $data['dataisian14']=$this->M_isian3as2->findisian1kolom('id_butir',14);
    $data['dataisianversion14']=$this->M_isian3as2->findisian1kolomversion('id_kolom',14);
    $data['dataisian15']=$this->M_isian3as2->findisian1kolom('id_butir',15);
    $data['dataisianversion15']=$this->M_isian3as2->findisian1kolomversion('id_kolom',15);
    $data['dataisian16']=$this->M_isian3as2->findisian1kolom('id_butir',16);
    $data['dataisianversion16']=$this->M_isian3as2->findisian1kolomversion('id_kolom',16);
    $data['dataisian17']=$this->M_isian3as2->findisian1kolom('id_butir',17);
    $data['dataisianversion17']=$this->M_isian3as2->findisian1kolomversion('id_kolom',17);
    $data['dataisian18']=$this->M_isian3as2->findisian1kolom('id_butir',18);
    $data['dataisianversion18']=$this->M_isian3as2->findisian1kolomversion('id_kolom',18);
    $data['dataisian19']=$this->M_isian3as2->findisian1kolom('id_butir',19);
    $data['dataisianversion19']=$this->M_isian3as2->findisian1kolomversion('id_kolom',19);
    $data['dataisian20']=$this->M_isian3as2->findisian1kolom('id_butir',20);
    $data['dataisianversion20']=$this->M_isian3as2->findisian1kolomversion('id_kolom',20);
    $data['dataisian21']=$this->M_isian3as2->findisian1kolom('id_butir',21);
    $data['dataisianversion21']=$this->M_isian3as2->findisian1kolomversion('id_kolom',21);
    $data['dataisian22']=$this->M_isian3as2->findisian1kolom('id_butir',22);
    $data['dataisianversion22']=$this->M_isian3as2->findisian1kolomversion('id_kolom',22);
    $data['dataisian23']=$this->M_isian3as2->findisian1kolom('id_butir',23);
    $data['dataisianversion23']=$this->M_isian3as2->findisian1kolomversion('id_kolom',23);
    $data['dataisian24']=$this->M_isian3as2->findisian1kolom('id_butir',24);
    $data['dataisianversion24']=$this->M_isian3as2->findisian1kolomversion('id_kolom',24);
    $data['dataisian25']=$this->M_isian3as2->findisian1kolom('id_butir',25);
    $data['dataisianversion25']=$this->M_isian3as2->findisian1kolomversion('id_kolom',25);
    $data['dataisian26']=$this->M_isian3as2->findisian1kolom('id_butir',26);
    $data['dataisianversion26']=$this->M_isian3as2->findisian1kolomversion('id_kolom',26);
    $data['dataisian27']=$this->M_isian3as2->findisian1kolom('id_butir',27);
    $data['dataisianversion27']=$this->M_isian3as2->findisian1kolomversion('id_kolom',27);
    $data['dataisian28']=$this->M_isian3as2->findisian1kolom('id_butir',28);
    $data['dataisianversion28']=$this->M_isian3as2->findisian1kolomversion('id_kolom',28);
    $this->load->view('template/header',$data);
    $this->load->view('viewbookbutir');
  }

  // DOKUMEN PENDUKUNG TERKAIT UNTUK UPLOAD SESUAI FORMAT EXCEL PENILAIAN
    public function uploadbukti(){
        if(isset($_SESSION['logged_in']))
        {
            $id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
            $this->load->view('template/header',$data);
            $data['butir']=$this->M_butir->find('id',$id);
            $data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
            $data['isian']=$this->M_isian3as2->find('id_butir',$id);
            $data['getdata']=$this->M_isian3as2->join3tabel($id);
            $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
            $this->load->view('uploadbukti',$data);
        }else{
            redirect('Home/pages');
        }
    }

// FORMAT UPLOAD PENDUKUNG UNTUK BUKU BORANG SESUAI BUKU BORANG WORD 3A 3B
    public function uploadbukti_pend(){
        if(isset($_SESSION['logged_in']))
        {
            $id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
            $this->load->view('template/header',$data);
            $data['butir']=$this->M_butir->find_buku('id',$id);
            $data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
            $data['isian']=$this->M_isian3as2->find('id_butir',$id);
            $data['getdata']=$this->M_isian3as2->join3tabel_buku($id);
            $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
            $this->load->view('uploadbukti_pend',$data);
        }else{
            redirect('Home/pages');
        }
    }

// LIST KUMPULAN DOKUMEN PENDUKUNG SESUAI DENGAN BUTIR PADA FORMAT BUKU BORANG WORD 3A 3B
    public function listpendukung(){
        if(isset($_SESSION['logged_in']))
        {
            $id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
            $this->load->view('template/header',$data);
            $data['butir']=$this->M_butir->find('id',$id);
            $data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
            $data['isian']=$this->M_isian3as2->find('id_butir',$id);
            $data['listpendukung']=$this->M_isian3as2->listpendukung('id_pendukung',$id);
            $data['pendukung']=$this->M_isian3as2->pendukung('id',$id);
            $data['getdata']=$this->M_isian3as2->join3tabel($id);
            $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
            $this->load->view('list_dok_pend',$data);
        }else{
            redirect('Home/pages');
        }
    }


// QUERY INSERT ISIAN

    // INSERT ISIAN BUKU SESUAI DENGAN FORMAT BUKU BORANG WORD 3A 3B

    // 1
    public function ngisi111_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir111'];
        $this->M_isian3as2->insert_isian111_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir111']);
    }

    // 2
    public function ngisi12_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir12'];
        $this->M_isian3as2->insert_isian12_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir12']);
    }

    // 3
    public function ngisi21_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir21'];
        $this->M_isian3as2->insert_isian21_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir21']);
    }

    // 4
    public function ngisi22_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir22'];
        $this->M_isian3as2->insert_isian22_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir22']);
    }

    // 5
    public function ngisi23_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir23'];
        $this->M_isian3as2->insert_isian23_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir23']);
    }

    // 6
    public function ngisi24_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir24'];
        $this->M_isian3as2->insert_isian24_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir24']);
    }

    // 7
    public function ngisi25_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir25'];
        $this->M_isian3as2->insert_isian25_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir25']);
    }

    // 8
    public function ngisi26_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir26'];
        $this->M_isian3as2->insert_isian26_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir26']);
    }

    // 9
    public function ngisi31_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir31'];
        $this->M_isian3as2->insert_isian31_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir31']);
    }

    // 10
    // TANPA ARRAY
    public function ngisi321_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['idTS'];
        $pilihts = $_POST['pilihts'];
        if ($pilihts=='inputts') {
            $this->M_isian3as2->insert_isian321_buku();
        }else{
            $this->M_isian3as2->deleteisian1kolom_buku('id',$id);
            $this->M_isian3as2->insert_isian321_buku();
        }
        
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir321']);
    }

    // PAKE ARRAY
    public function ngisi321_buku_array()
    {
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_321'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir321'][$key],
            'kolom1' => $post['kolom1_321'][$key],
            'kolom2' => $post['kolom2_321'][$key],
            'kolom3' => $post['kolom3_321'][$key],
            'kolom4' => $post['kolom4_321'][$key],
            'kolom5' => $post['kolom5_321'][$key],
            'kolom6' => $post['kolom6_321'][$key],
            'kolom7' => $post['kolom7_321'][$key],
            'kolom8' => $post['kolom8_321'][$key],
            'kolom9' => $post['kolom9_321'][$key],
            'kolom10' => $post['kolom10_321'][$key],
            'kolom11' => $post['kolom11_321'][$key],
            'kolom12' => $post['kolom12_321'][$key],
            'kolom13' => $post['kolom13_321'][$key],
            'kolom14' => $post['kolom14_321'][$key],
            'kolom15' => $post['kolom15_321'][$key],
            'kolom16' => $post['kolom16_321'][$key],
            'kolom17' => $post['kolom17_321'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['321id_butir'][0]);
    }

    // 8
    public function ngisi322_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir322'];
        $this->M_isian3as2->insert_isian322_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir322']);
    }

    // 15
    // TANPA ARRAY
    public function ngisi313_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir313'];
        $this->M_isian3as2->insert_isian313_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir313']);
    }

    // PAKE ARRAY
    public function ngisi313_buku_array(){
        //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';
        $id=$_POST['idTS'];
        $pilihts = $_POST['pilihts'];

        foreach($post['kolom1_313'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir313'][$key],
            'kolom1' => $post['kolom1_313'][$key],
            'kolom2' => $post['kolom2_313'][$key],
            'kolom3' => $post['kolom3_313'][$key],
            'kolom4' => $post['kolom4_313'][$key],
            'kolom5' => $post['kolom5_313'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='inputts') || ($pilihts=='replacets')) {
            $this->M_isian3as2->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }

        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir313'][0]);
    }

    // 16
    // TANPA ARRAY
    public function ngisi323_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir323'];
        $this->M_isian3as2->insert_isian323_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir323']);
    }

    // PAKE ARRAY
    public function ngisi323_buku_array(){
        //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_323'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir323'][$key],
            'kolom1' => $post['kolom1_323'][$key],
            'kolom2' => $post['kolom2_323'][$key],
            'kolom3' => $post['kolom3_323'][$key],
            'kolom4' => $post['kolom4_323'][$key],
            'kolom5' => $post['kolom5_323'][$key],
            'kolom6' => $post['kolom6_323'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir323'][0]);
    }

    // 20
    public function ngisi331_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir331'];
        $this->M_isian3as2->insert_isian331_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir331']);
    }

    // 21 22
    public function ngisi332_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['332id_butir'];
        $this->M_isian3as2->insert_isian332_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['332id_butir']);
    }

    // 25
    public function ngisi341_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir341'];
        $this->M_isian3as2->insert_isian341_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir341']);
    }

    // 27
    public function ngisi41_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir41'];
        $this->M_isian3as2->insert_isian41_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir41']);
    }

    // 28
    public function ngisi42_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir42'];
        $this->M_isian3as2->insert_isian42_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir42']);
    }

    // 30 31 32 33
    // TANPA ARRAY
    public function ngisi431_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['431id_butir'];
        $this->M_isian3as2->insert_isian431_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['431id_butir']);
    }

    // PAKE ARRAY
    public function ngisi431_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_431'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir431'][$key],
            'kolom1' => $post['kolom1_431'][$key],
            'kolom2' => $post['kolom2_431'][$key],
            'kolom3' => $post['kolom3_431'][$key],
            'kolom4' => $post['kolom4_431'][$key],
            'kolom5' => $post['kolom5_431'][$key],
            'kolom6' => $post['kolom6_431'][$key],
            'kolom7' => $post['kolom7_431'][$key],
            'kolom8' => $post['kolom8_431'][$key],
            'kolom9' => $post['kolom9_431'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir431'][0]);
    }

    // 34
    // TANPA ARRAY
    public function ngisi432_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['432id_butir'];
        $this->M_isian3as2->insert_isian432_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['432id_butir']);
    }

    // PAKE ARRAY
    public function ngisi432_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_432'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir432'][$key],
            'kolom1' => $post['kolom1_432'][$key],
            'kolom2' => $post['kolom2_432'][$key],
            'kolom3' => $post['kolom3_432'][$key],
            'kolom4' => $post['kolom4_432'][$key],
            'kolom5' => $post['kolom5_432'][$key],
            'kolom6' => $post['kolom6_432'][$key],
            'kolom7' => $post['kolom7_432'][$key],
            'kolom8' => $post['kolom8_432'][$key],
            'kolom9' => $post['kolom9_432'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir432'][0]);
    }

    // 35
    // TANPA ARRAY
    public function ngisi433_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir433'];
        $this->M_isian3as2->insert_isian433_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir433']);
    }

    // PAKE ARRAY
    public function ngisi433_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_433'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir433'][$key],
            'kolom1' => $post['kolom1_433'][$key],
            'kolom2' => $post['kolom2_433'][$key],
            'kolom3' => $post['kolom3_433'][$key],
            'kolom4' => $post['kolom4_433'][$key],
            'kolom5' => $post['kolom5_433'][$key],
            'kolom6' => $post['kolom6_433'][$key],
            'kolom7' => $post['kolom7_433'][$key],
            'kolom8' => $post['kolom8_433'][$key],
            'kolom9' => $post['kolom9_433'][$key],
            'kolom10' => $post['kolom10_433'][$key],
            'kolom11' => $post['kolom11_433'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir433'][0]);
    }

    // 36 (434 & 435)
    // TANPA ARRAY
    public function ngisi434_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['434id_butir'];
        $this->M_isian3as2->insert_isian434_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['434id_butir']);
    }

    // PAKE ARRAY
    public function ngisi434_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_434'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['434id_butir'][$key],
            'kolom1' => $post['kolom1_434'][$key],
            'kolom2' => $post['kolom2_434'][$key],
            'kolom3' => $post['kolom3_434'][$key],
            'kolom4' => $post['kolom4_434'][$key],
            'kolom5' => $post['kolom5_434'][$key],
            'kolom6' => $post['kolom6_434'][$key],
            'kolom7' => $post['kolom7_434'][$key],
            'kolom8' => $post['kolom8_434'][$key],
            'kolom9' => $post['kolom9_434'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['434id_butir'][0]);
    }

    // 37 (434 & 435)
    // TANPA ARRAY
    public function ngisi435_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['435id_butir'];
        $this->M_isian3as2->insert_isian435_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['435id_butir']);
    }

    // PAKE ARRAY
    public function ngisi435_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_435'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['435id_butir'][$key],
            'kolom1' => $post['kolom1_435'][$key],
            'kolom2' => $post['kolom2_435'][$key],
            'kolom3' => $post['kolom3_435'][$key],
            'kolom4' => $post['kolom4_435'][$key],
            'kolom5' => $post['kolom5_435'][$key],
            'kolom6' => $post['kolom6_435'][$key],
            'kolom7' => $post['kolom7_435'][$key],
            'kolom8' => $post['kolom8_435'][$key],
            'kolom9' => $post['kolom9_435'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['435id_butir'][0]);
    }

    // 38
    // TANPA ARRAY
    public function ngisi44_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['44id_butir'];
        $this->M_isian3as2->insert_isian44_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['44id_butir']);
    }

    // PAKE ARRAY
    public function ngisi44_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_44'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir44'][$key],
            'kolom1' => $post['kolom1_44'][$key],
            'kolom2' => $post['kolom2_44'][$key],
            'kolom3' => $post['kolom3_44'][$key],
            'kolom4' => $post['kolom4_44'][$key],
            'kolom5' => $post['kolom5_44'][$key],
            'kolom6' => $post['kolom6_44'][$key],
            'kolom7' => $post['kolom7_44'][$key],
            'kolom8' => $post['kolom8_44'][$key],
            'kolom9' => $post['kolom9_44'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir44'][0]);
    }

    // 39 40
    // TANPA ARRAY
    public function ngisi442_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['442id_butir'];
        $this->M_isian3as2->insert_isian442_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['442id_butir']);
    }

    // PAKE ARRAY
    public function ngisi442_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_442'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir442'][$key],
            'kolom1' => $post['kolom1_442'][$key],
            'kolom2' => $post['kolom2_442'][$key],
            'kolom3' => $post['kolom3_442'][$key],
            'kolom4' => $post['kolom4_442'][$key],
            'kolom5' => $post['kolom5_442'][$key],
            'kolom6' => $post['kolom6_442'][$key],
            'kolom7' => $post['kolom7_442'][$key],
            'kolom8' => $post['kolom8_442'][$key],
            'kolom9' => $post['kolom9_442'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir442'][0]);
    }

    // 41
    // TANPA ARRAY
    public function ngisi451_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir451'];
        $this->M_isian3as2->insert_isian451_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir451']);
    }

    // PAKE ARRAY
    public function ngisi451_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_451'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir451'][$key],
            'kolom1' => $post['kolom1_451'][$key],
            'kolom2' => $post['kolom2_451'][$key],
            'kolom3' => $post['kolom3_451'][$key],
            'kolom4' => $post['kolom4_451'][$key],
            'kolom5' => $post['kolom5_451'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir451'][0]);
    }

    // 42
    // TANPA ARRAY
    public function ngisi452_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir452'];
        $this->M_isian3as2->insert_isian452_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir452']);
    }

    // PAKE ARRAY
    public function ngisi452_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_452'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir452'][$key],
            'kolom1' => $post['kolom1_452'][$key],
            'kolom2' => $post['kolom2_452'][$key],
            'kolom3' => $post['kolom3_452'][$key],
            'kolom4' => $post['kolom4_452'][$key],
            'kolom5' => $post['kolom5_452'][$key],
            'kolom6' => $post['kolom6_452'][$key],
            'kolom7' => $post['kolom7_452'][$key],
            'kolom8' => $post['kolom8_452'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir452'][0]);
    }

    // 43
    // TANPA ARRAY
    public function ngisi453_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir453'];
        $this->M_isian3as2->insert_isian453_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir453']);
    }

    // PAKE ARRAY
    public function ngisi453_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_453'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir453'][$key],
            'kolom1' => $post['kolom1_453'][$key],
            'kolom2' => $post['kolom2_453'][$key],
            'kolom3' => $post['kolom3_453'][$key],
            'kolom4' => $post['kolom4_453'][$key],
            'kolom5' => $post['kolom5_453'][$key],
            'kolom6' => $post['kolom6_453'][$key],
            'kolom7' => $post['kolom7_453'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir453'][0]);
    }

    // 42
    // TANPA ARRAY
    public function ngisi4541_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir4541'];
        $this->M_isian3as2->insert_isian4541_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir4541']);
    }

    // PAKE ARRAY
    public function ngisi4541_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_4541'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir4541'][$key],
            'kolom1' => $post['kolom1_4541'][$key],
            'kolom2' => $post['kolom2_4541'][$key],
            'kolom3' => $post['kolom3_4541'][$key],
            'kolom4' => $post['kolom4_4541'][$key],
            'kolom5' => $post['kolom5_4541'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir4541'][0]);
    }

    // 42
    // TANPA ARRAY
    public function ngisi4542_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir4542'];
        $this->M_isian3as2->insert_isian4542_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir4542']);
    }

    // PAKE ARRAY
    public function ngisi4542_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_4542'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir4542'][$key],
            'kolom1' => $post['kolom1_4542'][$key],
            'kolom2' => $post['kolom2_4542'][$key],
            'kolom3' => $post['kolom3_4542'][$key],
            'kolom4' => $post['kolom4_4542'][$key],
            'kolom5' => $post['kolom5_4542'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir4542'][0]);
    }

    // 42
    // TANPA ARRAY
    public function ngisi4543_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir4543'];
        $this->M_isian3as2->insert_isian4543_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir4543']);
    }

    // PAKE ARRAY
    public function ngisi4543_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_4543'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir4543'][$key],
            'kolom1' => $post['kolom1_4543'][$key],
            'kolom2' => $post['kolom2_4543'][$key],
            'kolom3' => $post['kolom3_4543'][$key],
            'kolom4' => $post['kolom4_4543'][$key],
            'kolom5' => $post['kolom5_4543'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir4543'][0]);
    }

    // 45
    // TANPA ARRAY
    public function ngisi455_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir455'];
        $this->M_isian3as2->insert_isian455_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir455']);
    }

    // PAKR ARRAY
    public function ngisi455_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_455'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir455'][$key],
            'kolom1' => $post['kolom1_455'][$key],
            'kolom2' => $post['kolom2_455'][$key],
            'kolom3' => $post['kolom3_455'][$key],
            'kolom4' => $post['kolom4_455'][$key],
            'kolom5' => $post['kolom5_455'][$key],
            'kolom6' => $post['kolom6_455'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir455'][0]);
    }

    // 46 47 48
    // TANPA ARRAY
    public function ngisi461_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['461id_butir'];
        $this->M_isian3as2->insert_isian461_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['461id_butir']);
    }

    // PAKE ARRAY
    public function ngisi461_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_461'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir461'][$key],
            'kolom1' => $post['kolom1_461'][$key],
            'kolom2' => $post['kolom2_461'][$key],
            'kolom3' => $post['kolom3_461'][$key],
            'kolom4' => $post['kolom4_461'][$key],
            'kolom5' => $post['kolom5_461'][$key],
            'kolom6' => $post['kolom6_461'][$key],
            'kolom7' => $post['kolom7_461'][$key],
            'kolom8' => $post['kolom8_461'][$key],
            'kolom9' => $post['kolom9_461'][$key],
            'kolom10' => $post['kolom10_461'][$key],
            'kolom11' => $post['kolom11_461'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir461'][0]);
    }

    // 28
    public function ngisi462_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir462'];
        $this->M_isian3as2->insert_isian462_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir462']);
    }

    // 28
    public function ngisi511_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir511'];
        $this->M_isian3as2->insert_isian511_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir511']);
    }

    // 28
    public function ngisi5121_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir5121'];
        $this->M_isian3as2->insert_isian5121_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir5121']);
    }

    // 42
    // TANPA ARRAY
    public function ngisi5122_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir5122'];
        $this->M_isian3as2->insert_isian5122_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir5122']);
    }

    // PAKE ARRAY
    public function ngisi5122_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_5122'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir5122'][$key],
            'kolom1' => $post['kolom1_5122'][$key],
            'kolom2' => $post['kolom2_5122'][$key],
            'kolom3' => $post['kolom3_5122'][$key],
            'kolom4' => $post['kolom4_5122'][$key],
            'kolom5' => $post['kolom5_5122'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir5122'][0]);
    }

    // 28
    public function ngisi513_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir513'];
        $this->M_isian3as2->insert_isian513_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir513']);
    }

    // 28
    public function ngisi521_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir521'];
        $this->M_isian3as2->insert_isian521_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir521']);
    }

    // 28
    public function ngisi522_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir522'];
        $this->M_isian3as2->insert_isian522_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir522']);
    }

    // 28
    public function ngisi523_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir523'];
        $this->M_isian3as2->insert_isian523_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir523']);
    }

    // 28
    public function ngisi524_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir524'];
        $this->M_isian3as2->insert_isian524_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir524']);
    }

    // 28
    public function ngisi525_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir525'];
        $this->M_isian3as2->insert_isian525_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir525']);
    }

    // 28
    public function ngisi526_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir526'];
        $this->M_isian3as2->insert_isian526_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir526']);
    }

    // 28
    public function ngisi527_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir527'];
        $this->M_isian3as2->insert_isian527_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir527']);
    }

    // 28
    public function ngisi531_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir531'];
        $this->M_isian3as2->insert_isian531_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir531']);
    }

    // 28
    public function ngisi532_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir532'];
        $this->M_isian3as2->insert_isian532_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir532']);
    }

    // 28
    public function ngisi541_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir541'];
        $this->M_isian3as2->insert_isian541_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir541']);
    }

    // 42
    // TANPA ARRAY
    public function ngisi542_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir542'];
        $this->M_isian3as2->insert_isian542_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir542']);
    }

    // PAKE ARRAY
    public function ngisi542_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_542'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir542'][$key],
            'kolom1' => $post['kolom1_542'][$key],
            'kolom2' => $post['kolom2_542'][$key],
            'kolom3' => $post['kolom3_542'][$key],
            'kolom4' => $post['kolom4_542'][$key],
            'kolom5' => $post['kolom5_542'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir542'][0]);
    }

    // 28
    public function ngisi543_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir543'];
        $this->M_isian3as2->insert_isian543_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir543']);
    }

    // 28
    public function ngisi551_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir551'];
        $this->M_isian3as2->insert_isian551_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir551']);
    }

    // 28
    public function ngisi552_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir552'];
        $this->M_isian3as2->insert_isian552_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir552']);
    }

    // 28
    public function ngisi553_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir553'];
        $this->M_isian3as2->insert_isian553_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir553']);
    }

    // 28
    public function ngisi554_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir554'];
        $this->M_isian3as2->insert_isian554_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir554']);
    }

    // 28
    public function ngisi561_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir561'];
        $this->M_isian3as2->insert_isian561_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir561']);
    }

    // 28
    public function ngisi562_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir562'];
        $this->M_isian3as2->insert_isian562_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir562']);
    }

    // 28
    public function ngisi563_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir563'];
        $this->M_isian3as2->insert_isian563_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir563']);
    }

    // 28
    public function ngisi564_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir564'];
        $this->M_isian3as2->insert_isian564_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir564']);
    }

    // 28
    public function ngisi61_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir61'];
        $this->M_isian3as2->insert_isian61_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir61']);
    }

    // 79
    // TANPA ARRAY
    public function ngisi622_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['622id_butir'];
        $this->M_isian3as2->insert_isian622_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['622id_butir']);
    }

    // PAKE ARRAY
    public function ngisi622_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_622'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir622'][$key],
            'kolom1' => $post['kolom1_622'][$key],
            'kolom2' => $post['kolom2_622'][$key],
            'kolom3' => $post['kolom3_622'][$key],
            'kolom4' => $post['kolom4_622'][$key],
            'kolom5' => $post['kolom5_622'][$key],
            'kolom6' => $post['kolom6_622'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir622'][0]);
    }

    // 79
    // TANPA ARRAY
    public function ngisi623_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['623id_butir'];
        $this->M_isian3as2->insert_isian623_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['623id_butir']);
    }

    // PAKE ARRAY
    public function ngisi623_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_623'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir623'][$key],
            'kolom1' => $post['kolom1_623'][$key],
            'kolom2' => $post['kolom2_623'][$key],
            'kolom3' => $post['kolom3_623'][$key],
            'kolom4' => $post['kolom4_623'][$key],
            'kolom5' => $post['kolom5_623'][$key],
            'kolom6' => $post['kolom6_623'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir623'][0]);
    }

    // 79
    // TANPA ARRAY
    public function ngisi624_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['624id_butir'];
        $this->M_isian3as2->insert_isian624_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['624id_butir']);
    }

    // PAKE ARRAY
    public function ngisi624_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_624'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir624'][$key],
            'kolom1' => $post['kolom1_624'][$key],
            'kolom2' => $post['kolom2_624'][$key],
            'kolom3' => $post['kolom3_624'][$key],
            'kolom4' => $post['kolom4_624'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir624'][0]);
    }

    // 28
    public function ngisi632_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir632'];
        $this->M_isian3as2->insert_isian632_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir632']);
    }

    // 28
    public function ngisi651_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir651'];
        $this->M_isian3as2->insert_isian651_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir651']);
    }

    // 93
    // TANPA ARRAY
    public function ngisi711_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['711id_butir'];
        $this->M_isian3as2->insert_isian711_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['711id_butir']);
    }

    // PAKE ARRAY
    public function ngisi711_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_711'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir711'][$key],
            'kolom1' => $post['kolom1_711'][$key],
            'kolom2' => $post['kolom2_711'][$key],
            'kolom3' => $post['kolom3_711'][$key],
            'kolom4' => $post['kolom4_711'][$key],
            'kolom5' => $post['kolom5_711'][$key],
            'kolom6' => $post['kolom6_711'][$key],
            'kolom7' => $post['kolom7_711'][$key],
            'kolom8' => $post['kolom8_711'][$key],
            'kolom9' => $post['kolom9_711'][$key],
            'kolom10' => $post['kolom10_711'][$key],
            'kolom11' => $post['kolom11_711'][$key],
            'kolom12' => $post['kolom12_711'][$key],
            'kolom13' => $post['kolom13_711'][$key],
            'kolom14' => $post['kolom14_711'][$key],
            'kolom15' => $post['kolom15_711'][$key],
            'kolom16' => $post['kolom16_711'][$key],
            'kolom17' => $post['kolom17_711'][$key],
            'kolom18' => $post['kolom18_711'][$key],
            'kolom19' => $post['kolom19_711'][$key],
            'kolom20' => $post['kolom20_711'][$key],
            'kolom21' => $post['kolom21_711'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir711'][0]);
    }

    // 28
    public function ngisi712_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir712'];
        $this->M_isian3as2->insert_isian712_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir712']);
    }

    // 28
    public function ngisi713_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir713'];
        $this->M_isian3as2->insert_isian713_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir713']);
    }

    // 93
    // TANPA ARRAY
    public function ngisi714_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['714id_butir'];
        $this->M_isian3as2->insert_isian714_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['714id_butir']);
    }

    // PAKE ARRAY
    public function ngisi714_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_714'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir714'][$key],
            'kolom1' => $post['kolom1_714'][$key],
            'kolom2' => $post['kolom2_714'][$key],
            'kolom3' => $post['kolom3_714'][$key],
            'kolom4' => $post['kolom4_714'][$key],
            'kolom5' => $post['kolom5_714'][$key],
            'kolom6' => $post['kolom6_714'][$key],
            'kolom7' => $post['kolom7_714'][$key],
            'kolom8' => $post['kolom8_714'][$key],
            'kolom9' => $post['kolom9_714'][$key],
            'kolom10' => $post['kolom10_714'][$key],
            'kolom11' => $post['kolom11_714'][$key],
            'kolom12' => $post['kolom12_714'][$key],
            'kolom13' => $post['kolom13_714'][$key],
            'kolom14' => $post['kolom14_714'][$key],
            'kolom15' => $post['kolom15_714'][$key],
            'kolom16' => $post['kolom16_714'][$key],
            'kolom17' => $post['kolom17_714'][$key],
            'kolom18' => $post['kolom18_714'][$key],
            'kolom19' => $post['kolom19_714'][$key],
            'kolom20' => $post['kolom20_714'][$key],
            'kolom21' => $post['kolom21_714'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3as2->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir714'][0]);
    }

    // 95
    // TANPA ARRAY
    public function ngisi715_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['715id_butir'];
        $this->M_isian3as2->insert_isian715_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['715id_butir']);
    }

    // PAKE ARRAY
    public function ngisi715_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_715'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir715'][$key],
            'kolom1' => $post['kolom1_715'][$key],
            'kolom2' => $post['kolom2_715'][$key],
            'kolom3' => $post['kolom3_715'][$key],
            'kolom4' => $post['kolom4_715'][$key],
            'kolom5' => $post['kolom5_715'][$key],
            'kolom6' => $post['kolom6_715'][$key],
            'kolom7' => $post['kolom7_715'][$key],
            'kolom8' => $post['kolom8_715'][$key],
            'kolom9' => $post['kolom9_715'][$key],
            'kolom10' => $post['kolom10_715'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3as2->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir715'][0]);
    }

    // 96
    // TANPA ARRAY
    public function ngisi717_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['717id_butir'];
        $this->M_isian3as2->insert_isian717_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['717id_butir']);
    }

    // PAKE ARRAY
    public function ngisi717_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_717'] AS $key => $val)
        {
            $result[] = array(
                'id_butir' => $this->input->post(''),
                        'kolom1' => $this->input->post(''),
            'id_butir' => $post['id_butir717'][$key],
            'kolom1' => $post['kolom1_717'][$key],
            'kolom2' => $post['kolom2_717'][$key],
            'kolom3' => $post['kolom3_717'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3as2->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir717'][0]);
    }

    // 97
    // TANPA ARRAY
    public function ngisi721_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['721id_butir'];
        $this->M_isian3as2->insert_isian721_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['721id_butir']);
    }

    // PAKE ARRAY
    public function ngisi721_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_721'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir721'][$key],
            'kolom1' => $post['kolom1_721'][$key],
            'kolom2' => $post['kolom2_721'][$key],
            'kolom3' => $post['kolom3_721'][$key],
            'kolom4' => $post['kolom4_721'][$key],
            'kolom5' => $post['kolom5_721'][$key],
            'kolom6' => $post['kolom6_721'][$key],
            'kolom7' => $post['kolom7_721'][$key],
            'kolom8' => $post['kolom8_721'][$key],
            'kolom9' => $post['kolom9_721'][$key],
            'kolom10' => $post['kolom10_721'][$key],
            'kolom11' => $post['kolom11_721'][$key],
            'kolom12' => $post['kolom12_721'][$key],
            'kolom13' => $post['kolom13_721'][$key],
            'kolom14' => $post['kolom14_721'][$key],
            'kolom15' => $post['kolom15_721'][$key],
            'kolom16' => $post['kolom16_721'][$key],
            'kolom17' => $post['kolom17_721'][$key],
            'kolom18' => $post['kolom18_721'][$key],
            'kolom19' => $post['kolom19_721'][$key],
            'kolom20' => $post['kolom20_721'][$key],
            'kolom21' => $post['kolom21_721'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir721'][0]);
    }

    // 99
    // TANPA ARRAY
    public function ngisi731_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir731'];
        $this->M_isian3as2->insert_isian731_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir731']);
    }

    // PAKE ARRAY
    public function ngisi731_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_461'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir461'][$key],
            'kolom1' => $post['kolom1_461'][$key],
            'kolom2' => $post['kolom2_461'][$key],
            'kolom3' => $post['kolom3_461'][$key],
            'kolom4' => $post['kolom4_461'][$key],
            'kolom5' => $post['kolom5_461'][$key],
            'kolom6' => $post['kolom6_461'][$key],
            'kolom7' => $post['kolom7_461'][$key],
            'kolom8' => $post['kolom8_461'][$key],
            'kolom9' => $post['kolom9_461'][$key],
            'kolom10' => $post['kolom10_461'][$key],
            'kolom11' => $post['kolom11_461'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir461'][0]);
    }

    // 100
    // TANPA ARRAY
    public function ngisi732_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir732'];
        $this->M_isian3as2->insert_isian732_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir732']);
    }

    // PAKE ARRAY
    public function ngisi732_buku_array(){
    //load needed library,helper,model
$post = $this->input->post();
        $result = array();
        $load = 'isian_buku3as2';

        foreach($post['kolom1_461'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir461'][$key],
            'kolom1' => $post['kolom1_461'][$key],
            'kolom2' => $post['kolom2_461'][$key],
            'kolom3' => $post['kolom3_461'][$key],
            'kolom4' => $post['kolom4_461'][$key],
            'kolom5' => $post['kolom5_461'][$key],
            'kolom6' => $post['kolom6_461'][$key],
            'kolom7' => $post['kolom7_461'][$key],
            'kolom8' => $post['kolom8_461'][$key],
            'kolom9' => $post['kolom9_461'][$key],
            'kolom10' => $post['kolom10_461'][$key],
            'kolom11' => $post['kolom11_461'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir461'][0]);
    }

    

    // INSERT ISIAN BUKU SESUAI DENGA FORMAT BUTIR BORANG PENILAIAN EXCEL 3A 3B

    // 1
    public function ngisi11(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir11'];
        $this->M_isian3as2->insert_isian11();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir11']);
    }

    // 2
    public function ngisi11b(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir11b'];
        $this->M_isian3as2->insert_isian11b();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir11b']);
    }

    // 3
    public function ngisi12(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir12'];
        $this->M_isian3as2->insert_isian12();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir12']);
    }

    public function ngisi12b(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir12b'];
        $this->M_isian3as2->insert_isian12b();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir12b']);
    }

    // 4
    public function ngisi21(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir21'];
        $this->M_isian3as2->insert_isian21();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir21']);
    }

    // 5
    public function ngisi22(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir22'];
        $this->M_isian3as2->insert_isian22();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir22']);
    }

    // 6
    public function ngisi23(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir23'];
        $this->M_isian3as2->insert_isian23();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir23']);
    }

    // 7
    public function ngisi24(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir24'];
        $this->M_isian3as2->insert_isian24();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir24']);
    }

    // 8
    public function ngisi25(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir25'];
        $this->M_isian3as2->insert_isian25();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir25']);
    }

    // 9
    public function ngisi26(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir26'];
        $this->M_isian3as2->insert_isian26();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir26']);
    }

    // 10 11 12 13
    public function ngisi321(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir321'];
        // $rbt = (int)($_POST['kolom4_321']);
        // $ls = (int)($_POST['kolom3_321']);
        // if ($rbt>=$ls) {
        //     $_SESSION['gagalinputrbt'] = '';
        //     redirect('isian3as2/'.$_POST['321id_butir']);
        // }else{
            $this->M_isian3as2->insert_isian321();
            $_SESSION['suksesinput'] = '';
            redirect('isian3as2/'.$_POST['321id_butir']);
        // }
        // $this->M_isian3as2->insert_isian321();
        //     $_SESSION['suksesinput'] = '';
        //     redirect('isian3as2/'.$_POST['321id_butir']);
    }

    // 14
    public function ngisi322(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir322'];
        $this->M_isian3as2->insert_isian322();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir322']);
    }

    // 15
    public function ngisi313(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir313'];
        $this->M_isian3as2->insert_isian313();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir313']);
    }

    // 16 17
    public function ngisi323(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['323id_butir'];
        $this->M_isian3as2->insert_isian323();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['323id_butir']);
    }

    // 18 19
    public function ngisi32(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir32'];
        $this->M_isian3as2->insert_isian32();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['32id_butir']);
    }

    // 20
    public function ngisi331a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir331a'];
        $this->M_isian3as2->insert_isian331a();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir331a']);
    }

    // 21 22
    public function ngisi332a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['331id_butir'];
        $this->M_isian3as2->insert_isian332();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['331id_butir']);
    }

    // 23
    public function ngisi332(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir332'];
        $this->M_isian3as2->insert_isian332();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir332']);
    }

    // 24
    public function ngisi333(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir333'];
        $this->M_isian3as2->insert_isian333();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir333']);
    }

    // 25
    public function ngisi341(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir341'];
        $this->M_isian3as2->insert_isian341();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir341']);
    }

    // 26
    public function ngisi342(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir342'];
        $this->M_isian3as2->insert_isian342();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir342']);
    }

    // 27
    public function ngisi41(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir41'];
        $this->M_isian3as2->insert_isian41();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir41']);
    }

    // 28
    public function ngisi421(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir421'];
        $this->M_isian3as2->insert_isian421();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir421']);
    }

    // 29
    public function ngisi422(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir422'];
        $this->M_isian3as2->insert_isian422();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir422']);
    }

    // 30 31 32 33
    public function ngisi431(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['431id_butir'];
        $this->M_isian3as2->insert_isian431();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['431id_butir']);
    }

    // 34
    public function ngisi432(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['432id_butir'];
        $this->M_isian3as2->insert_isian432();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['432id_butir']);
    }

    // 35
    public function ngisi433(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir433'];
        $this->M_isian3as2->insert_isian433();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir433']);
    }

    // 36 (434 & 435)
    public function ngisi434(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['434id_butir'];
        $this->M_isian3as2->insert_isian434();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['434id_butir']);
    }

    // 37 (434 & 435)
    public function ngisi435(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['435id_butir'];
        $this->M_isian3as2->insert_isian435();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['435id_butir']);
    }

    // 38
    public function ngisi44(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['44id_butir'];
        $this->M_isian3as2->insert_isian44();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['44id_butir']);
    }

    // 39 40
    public function ngisi442(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['442id_butir'];
        $this->M_isian3as2->insert_isian442();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['442id_butir']);
    }

    // 41
    public function ngisi451(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir451'];
        $this->M_isian3as2->insert_isian451();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir451']);
    }

    // 42
    public function ngisi452(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir452'];
        $this->M_isian3as2->insert_isian452();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir452']);
    }

    // 43
    public function ngisi453(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir453'];
        $this->M_isian3as2->insert_isian453();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir453']);
    }

    // 44
    public function ngisi454(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir454'];
        $this->M_isian3as2->insert_isian454();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir454']);
    }

    // 45
    public function ngisi455(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir455'];
        $this->M_isian3as2->insert_isian455();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir455']);
    }

    // 46 47 48
    public function ngisi461(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['461id_butir'];
        $this->M_isian3as2->insert_isian461();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['461id_butir']);
    }

  // public function ngisi461b(){
  //   //load needed library,helper,model
  //       $this->load->library('form_validation');
  //       $this->load->model('M_butir');
  //       $this->load->model('M_borang');
  //       $this->load->model('M_isian3as2');
  //       $id=$_POST['id_butir461b'];
  //       $this->M_isian3as2->insert_isian461b();
  //       $_SESSION['suksesinput'] = '';
  //       redirect('isian3as2/'.$_POST['id_butir461b']);
  // }

  // public function ngisi461c(){
  //   //load needed library,helper,model
  //       $this->load->library('form_validation');
  //       $this->load->model('M_butir');
  //       $this->load->model('M_borang');
  //       $this->load->model('M_isian3as2');
  //       $id=$_POST['id_butir461c'];
  //       $this->M_isian3as2->insert_isian461c();
  //       $_SESSION['suksesinput'] = '';
  //       redirect('isian3as2/'.$_POST['id_butir461c']);
  // }

    // 49
    public function ngisi462(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir462'];
        $this->M_isian3as2->insert_isian462();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir462']);
    }

    // 50 51
    public function ngisi511(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir511a'];
        $this->M_isian3as2->insert_isian511();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir511a']);
    }

    // 52
    public function ngisi512a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir512a'];
        $this->M_isian3as2->insert_isian512a();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir512a']);
    }

    // 53
    public function ngisi512b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['512bid_butir'];
        $this->M_isian3as2->insert_isian512b();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['512bid_butir']);
    }

    // 54
    public function ngisi512c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir512c'];
        $this->M_isian3as2->insert_isian512c();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir512c']);
    }

    // 55
    public function ngisi513(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['513id_butir'];
        $this->M_isian3as2->insert_isian513();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['513id_butir']);
    }

    // 56
    public function ngisi514(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['514id_butir'];
        $this->M_isian3as2->insert_isian514();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['514id_butir']);
    }

    // 57
    public function ngisi52a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir52a'];
        $this->M_isian3as2->insert_isian52a();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir52a']);
    }

    // 58
    public function ngisi52b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir52b'];
        $this->M_isian3as2->insert_isian52b();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir52b']);
    }

    // 59 60
    public function ngisi531(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['531id_butir'];
        $this->M_isian3as2->insert_isian531();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['531id_butir']);
    }

    // 61
    public function ngisi532(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir532'];
        $this->M_isian3as2->insert_isian532();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir532']);
    }

    // 62 63 64
    public function ngisi541(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['541id_butir'];
        $this->M_isian3as2->insert_isian541();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['541id_butir']);
    }

    // 65
    public function ngisi542(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['542id_butir'];
        $this->M_isian3as2->insert_isian542();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['542id_butir']);
    }

    // 66
    public function ngisi551a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir551a'];
        $this->M_isian3as2->insert_isian551a();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir551a']);
    }

    // 67
    public function ngisi551b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir551b'];
        $this->M_isian3as2->insert_isian551b();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir551b']);
    }

    // 68
    public function ngisi551c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir551c'];
        $this->M_isian3as2->insert_isian551c();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir551c']);
    }

    // 69
    public function ngisi551d(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['551did_butir'];
        $this->M_isian3as2->insert_isian551d();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['551did_butir']);
    }

    // 70
    public function ngisi552(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir552'];
        $this->M_isian3as2->insert_isian552();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir552']);
    }

    // 71
    public function ngisi56(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['56id_butir'];
        $this->M_isian3as2->insert_isian56();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['56id_butir']);
    }

    // 72
    public function ngisi571(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir571'];
        $this->M_isian3as2->insert_isian571();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir571']);
    }

    // 73
    public function ngisi572(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir572'];
        $this->M_isian3as2->insert_isian572();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir572']);
    }

    // 74
    public function ngisi573(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir573'];
        $this->M_isian3as2->insert_isian573();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir573']);
    }

    // 75
    public function ngisi574(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir574'];
        $this->M_isian3as2->insert_isian574();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir574']);
    }

    // 76
    public function ngisi575(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir575'];
        $this->M_isian3as2->insert_isian575();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir575']);
    }

    // 77
    public function ngisi61(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir61'];
        $this->M_isian3as2->insert_isian61();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir61']);
    }

    // 78
    public function ngisi621(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621'];
        $this->M_isian3as2->insert_isian621();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir621']);
    }

    public function ngisi621a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621a'];
        $this->M_isian3as2->insert_isian621a();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir621a']);
    }

    public function ngisi621b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621b'];
        $this->M_isian3as2->insert_isian621b();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir621b']);
    }

    public function ngisi621c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621c'];
        $this->M_isian3as2->insert_isian621c();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir621c']);
    }

    public function ngisi621d(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621d'];
        $this->M_isian3as2->insert_isian621d();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir621d']);
    }

    // 79
    public function ngisi622(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['622id_butir'];
        $this->M_isian3as2->insert_isian622();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['622id_butir']);
    }

    // 80
    public function ngisi623(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['623id_butir'];
        $this->M_isian3as2->insert_isian623();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['623id_butir']);
    }

    // 81
    public function ngisi631(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['631id_butir'];
        $this->M_isian3as2->insert_isian631();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['631id_butir']);
    }

    // 82
    public function ngisi632(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir632'];
        $this->M_isian3as2->insert_isian632();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir632']);
    }

    // 83
    public function ngisi633(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir633'];
        $this->M_isian3as2->insert_isian633();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir633']);
    }

    // 84 85
    public function ngisi641a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['641aid_butir'];
        $this->M_isian3as2->insert_isian641a();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['641aid_butir']);
    }

    // 86 87 88
    public function ngisi641c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['641cid_butir'];
        $this->M_isian3as2->insert_isian641c();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['641cid_butir']);
    }

    public function ngisi641e(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir641e'];
        $this->M_isian3as2->insert_isian641e();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir641e']);
    }

    // 89
    public function ngisi642(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir642'];
        $this->M_isian3as2->insert_isian642();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir642']);
    }

    // 90
    public function ngisi643(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir643'];
        $this->M_isian3as2->insert_isian643();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir643']);
    }

    // 91
    public function ngisi651(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir651'];
        $this->M_isian3as2->insert_isian651();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir651']);
    }

    // 92
    public function ngisi652(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir652'];
        $this->M_isian3as2->insert_isian652();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir652']);
    }

    // 93
    public function ngisi711(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['711id_butir'];
        $this->M_isian3as2->insert_isian711();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['711id_butir']);
    }

    // 94
    public function ngisi712(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir712'];
        $this->M_isian3as2->insert_isian712();
        $_SESSION['suksesinput'] = '';
          redirect('isian3as2/'.$_POST['id_butir712']);
    }

    // 95
    public function ngisi713(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['713id_butir'];
        $this->M_isian3as2->insert_isian713();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['713id_butir']);
    }

    // 96
    public function ngisi714(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['714id_butir'];
        $this->M_isian3as2->insert_isian714();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['714id_butir']);
    }

    // 97
    public function ngisi721(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['721id_butir'];
        $this->M_isian3as2->insert_isian721();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['721id_butir']);
    }

    // 98
    public function ngisi722(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir722'];
        $this->M_isian3as2->insert_isian722();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir722']);
    }

    // 99
    public function ngisi731(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir731'];
        $this->M_isian3as2->insert_isian731();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir731']);
    }

    // 100
    public function ngisi732(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir732'];
        $this->M_isian3as2->insert_isian732();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir732']);
    }

    public function ngisi2kolom(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir'];
        $this->M_isian3as2->insert_isian2kolom();
        $_SESSION['suksesinput'] = '';
        redirect('isian3as2/'.$_POST['id_butir']);
    }

    
// TUTUP QUERY INSERT ISIAN

// QUERY UPLOAD DOKUMEN

    // FUNGSI UNTUK UPLOAD DOKUMEN BISA DIGUNAKAN UNTUK SEMUA BUTIR
  public function dokumen11(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_uploadisi');
        $id=$_POST['id_butir11'];
        $config['upload_path']   = FCPATH.'/uploads/dokumen/';
        $config['allowed_types'] = 'docx|doc|pdf|rar|zip|xls|xlsx|7Z|7-Zip';
        $config['max_size']      = 2000000000000;
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
        redirect('isian3as2/'.$_POST['id_butir11']);
  }

// TUTUP QUERY UPLOAD DOKUMEN

// QUERY PENCARIAN/FIND

    // MENCARI ID DARI ISIAN
    public function findisian(){
        $id=$_POST['id'];
        $this->load->model('M_isian3as2');
    $data=$this->M_isian3as2->findisian1kolom('id',$id);
        // if (($id==1) || ($id==15)) {
        //  $data=$this->M_isian3as2->findisian4kolom('id',$id);
        // }elseif (($id==2) || ($id==3) || ($id==4) || ($id==5) || ($id==6) || ($id==7) || ($id==14) || ($id==15) || ($id==16) || ($id==17) || ($id==18) || ($id==20) || ($id==21) || ($id==22) || ($id==23) || ($id==24) || ($id==25) || ($id==26)){
        //  $data=$this->M_isian3as2->findisian1kolom('id',$id);
        // }elseif ($id==8) {
        //  $data=$this->M_isian3as2->findisian12kolom('id',$id);
        // }elseif (($id==9)) {
        //  $data=$this->M_isian3as2->findisian5kolom('id',$id);
        // }elseif (($id==10) || ($id==11) || ($id==12) || ($id==13)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',10);
  //   }elseif (($id==19) || ($id==20) || ($id==21)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',19);
  //   }elseif (($id==27) || ($id==28)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',27);
  //   }elseif (($id==29) || ($id==30) || ($id==31) || ($id==32)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',29);
  //   }elseif (($id==38) || ($id==39)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',38);
  //   }elseif (($id==45) || ($id==46) || ($id==47)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',45);
  //   }elseif (($id==49) || ($id==50)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',49);
  //   }elseif (($id==51) || ($id==52) || ($id==53)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',51);
  //   }elseif (($id==56) || ($id==57)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',56);
  //   }elseif (($id==58) || ($id==59)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',58);
  //   }elseif (($id==61) || ($id==62) || ($id==63)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',61);
  //   }elseif (($id==65) || ($id==66) || ($id==67) || ($id==68)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',65);
  //   }elseif (($id==83) || ($id==84) || ($id==85) || ($id==86) || ($id==87)) {
  //     $data=$this->M_isian3as2->findisian1kolom('id',83);
  //   }else{
  //     $data=$this->M_isian3as2->findisian1kolom('id',$id);
  //   }
        echo json_encode($data);
    }

    // MENCARI UNTUK UPDATE TABEL ISIAN

    // FORMAT BUKU BORANG SESUAI EXCEL
    public function findUpdateTbl(){
        $id=$_POST['id'];
        $this->load->model('M_isian3as2');
        $data=$this->M_isian3as2->findUpdateTbl('id',$id);
        echo json_encode($data);
    }

    // FORMAT BUKU BORANG SESUAI WORD
    public function findUpdateTbl_buku(){
        $id=$_POST['id'];
        $this->load->model('M_isian3as2');
        $data=$this->M_isian3as2->findUpdateTbl_buku('id',$id);
        echo json_encode($data);
    }

    // MENCARI PENILAIAN
    public function findNilai(){
        $id=$_POST['id'];
        $this->load->model('M_isian3as2');
        $data=$this->M_isian3as2->findNilai('id_buku',$id);
        echo json_encode($data);
    }

// TUTUP QUERY PENCARIAN/FIND

// QUERY UPDATE ISIAN

    // UPDATE ISIAN BUTIR BORANG SESUAI DENGAN FORMAT BUKU BORANG WORD 3A 3B

    // 1
    public function updateisian111_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir111'];
        $this->M_isian3as2->update_isian111_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir111']);
    }

    // 6
    public function updateisian12_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir12'];
        $this->M_isian3as2->update_isian12_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir12']);
    }

    // 7
    public function updateisian21_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir21'];
        $this->M_isian3as2->update_isian21_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir21']);
    }

    // 8
    public function updateisian22_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir22'];
        $this->M_isian3as2->update_isian22_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir22']);
    }

    // 9
    public function updateisian23_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir23'];
        $this->M_isian3as2->update_isian23_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir23']);
    }

    // 10
    public function updateisian24_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir24'];
        $this->M_isian3as2->update_isian24_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir24']);
    }

    // 11
    public function updateisian25_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir25'];
        $this->M_isian3as2->update_isian25_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir25']);
    }

    // 12
    public function updateisian26_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir26'];
        $this->M_isian3as2->update_isian26_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir26']);
    }

    // 12
    public function updateisian31_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir31'];
        $this->M_isian3as2->update_isian31_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir31']);
    }

    // 13
    public function updateisian321_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['321id_butir'];
        $this->M_isian3as2->updatetabel321_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['321id_butir']);
    }

    // 14
    public function updateisian322_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir322tabel'];
        $this->M_isian3as2->update_isian322_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir322tabel']);
    }

    // 15
    public function updateisian313_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir313tabel'];
        $this->M_isian3as2->update_isian313_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir313tabel']);
    }

    // 16
    public function updateisian323_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir323'];
        $this->M_isian3as2->update_isian323_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir323']);
    }

    // 20
    public function updateisian331_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir331'];
        $this->M_isian3as2->update_isian331_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir331']);
    }

    // 21 22
    public function updateisian332_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id332'];
        $this->M_isian3as2->update_isian332_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['332id_butir']);
    }

    // 25
    public function updateisian341_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir341'];
        $this->M_isian3as2->update_isian341_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir341']);
    }

    // 27
    public function updateisian41_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir41'];
        $this->M_isian3as2->update_isian41_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir41']);
    }

    // 28
    public function updateisian42_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir42'];
        $this->M_isian3as2->update_isian42_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir42']);
    }

    // 30 31 32 33
    public function updateisian431_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['431id_butir'];
        $this->M_isian3as2->update_isian431_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['431id_butir']);
    }

    // 34
    public function updateisian432_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['432id_butir'];
        $this->M_isian3as2->update_isian432_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['432id_butir']);
    }

    // 35
    public function updateisian433_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir433tabel'];
        $this->M_isian3as2->update_isian433_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir433tabel']);
    }

    // 36 (434 & 435)
    public function updateisian434_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir434tabel'];
        $this->M_isian3as2->update_isian434_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir434tabel']);
    }

    // 37 (434 & 435)
    public function updateisian435_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir435tabel'];
        $this->M_isian3as2->update_isian435_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir435tabel']);
    }

    // 38
    public function updateisian44_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['44id_butir'];
        $this->M_isian3as2->update_isian44_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['44id_butir']);
    }

    // 39 40
    public function updateisian442_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['442id_butir'];
        $this->M_isian3as2->update_isian442_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['442id_butir']);
    }

    // 41
    public function updateisian451_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir451tabel'];
        $this->M_isian3as2->update_isian451_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir451tabel']);
    }

    // 42
    public function updateisian452_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir452tabel'];
        $this->M_isian3as2->update_isian452_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir452tabel']);
    }

    // 43
    public function updateisian453_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir453tabel'];
        $this->M_isian3as2->update_isian453_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir453tabel']);
    }

    // 44
    public function updateisian4541_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir4541tabel'];
        $this->M_isian3as2->update_isian4541_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir4541tabel']);
    }

    // 44
    public function updateisian4542_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir4542tabel'];
        $this->M_isian3as2->update_isian4542_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir4542tabel']);
    }

    // 44
    public function updateisian4543_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir4543tabel'];
        $this->M_isian3as2->update_isian4543_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir4543tabel']);
    }

    // 45
    public function updateisian455_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir455tabel'];
        $this->M_isian3as2->update_isian455_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir455tabel']);
    }

    // 46 47 48
    public function updateisian461_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['461id_butir'];
        $this->M_isian3as2->update_isian461_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['461id_butir']);
    }

    // 28
    public function updateisian462_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir462'];
        $this->M_isian3as2->update_isian462_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir462']);
    }

    // 28
    public function updateisian511_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir511'];
        $this->M_isian3as2->update_isian511_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir511']);
    }

    // 28
    public function updateisian5121_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir5121'];
        $this->M_isian3as2->update_isian5121_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir5121']);
    }

    // 44
    public function updateisian5122_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir5122tabel'];
        $this->M_isian3as2->update_isian5122_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir5122tabel']);
    }

    // 28
    public function updateisian513_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir513'];
        $this->M_isian3as2->update_isian513_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir513']);
    }

    // 28
    public function updateisian521_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir521'];
        $this->M_isian3as2->update_isian521_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir521']);
    }

    // 28
    public function updateisian522_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir522'];
        $this->M_isian3as2->update_isian522_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir522']);
    }

    // 28
    public function updateisian523_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir523'];
        $this->M_isian3as2->update_isian523_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir523']);
    }

    // 28
    public function updateisian524_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir524'];
        $this->M_isian3as2->update_isian524_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir524']);
    }

    // 28
    public function updateisian525_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir525'];
        $this->M_isian3as2->update_isian525_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir525']);
    }

    // 28
    public function updateisian526_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir526'];
        $this->M_isian3as2->update_isian526_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir526']);
    }

    // 28
    public function updateisian527_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir527'];
        $this->M_isian3as2->update_isian527_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir527']);
    }

    // 28
    public function updateisian531_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir531'];
        $this->M_isian3as2->update_isian531_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir531']);
    }

    // 28
    public function updateisian532_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir532'];
        $this->M_isian3as2->update_isian532_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir532']);
    }

    // 28
    public function updateisian541_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir541'];
        $this->M_isian3as2->update_isian541_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir541']);
    }

    // 44
    public function updateisian542_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir542tabel'];
        $this->M_isian3as2->update_isian542_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir542tabel']);
    }

    // 28
    public function updateisian543_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir543'];
        $this->M_isian3as2->update_isian543_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir543']);
    }

    // 28
    public function updateisian551_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir551'];
        $this->M_isian3as2->update_isian551_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir551']);
    }

    // 28
    public function updateisian552_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir552'];
        $this->M_isian3as2->update_isian552_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir552']);
    }

    // 28
    public function updateisian553_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir553'];
        $this->M_isian3as2->update_isian553_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir553']);
    }

    // 28
    public function updateisian554_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir554'];
        $this->M_isian3as2->update_isian554_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir554']);
    }

    // 28
    public function updateisian561_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir561'];
        $this->M_isian3as2->update_isian561_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir561']);
    }

    // 28
    public function updateisian562_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir562'];
        $this->M_isian3as2->update_isian562_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir562']);
    }

    // 28
    public function updateisian563_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir563'];
        $this->M_isian3as2->update_isian563_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir563']);
    }

    // 28
    public function updateisian564_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir564'];
        $this->M_isian3as2->update_isian564_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir564']);
    }

    // 28
    public function updateisian61_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir61'];
        $this->M_isian3as2->update_isian61_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir61']);
    }

    
    // 79
    public function updateisian622_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['622id_butir'];
        $this->M_isian3as2->update_isian622_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['622id_butir']);
    }

    // 80
    public function updateisian623_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['623id_butir'];
        $this->M_isian3as2->update_isian623_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['623id_butir']);
    }

    // 80
    public function updateisian624_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['624id_butir'];
        $this->M_isian3as2->update_isian624_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['624id_butir']);
    }

    // 28
    public function updateisian632_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir632'];
        $this->M_isian3as2->update_isian632_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir632']);
    }

    // 28
    public function updateisian651_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir651'];
        $this->M_isian3as2->update_isian651_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir651']);
    }

    
// 93
    public function updateisian711_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['711id_butir'];
        $this->M_isian3as2->update_isian711_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['711id_butir']);
    }

    // 28
    public function updateisian712_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir712'];
        $this->M_isian3as2->update_isian712_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir712']);
    }

    // 28
    public function updateisian713_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir713'];
        $this->M_isian3as2->update_isian713_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir713']);
    }

    
// 93
    public function updateisian714_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['714id_butir'];
        $this->M_isian3as2->update_isian714_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['714id_butir']);
    }

    
// 95
    public function updateisian715_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['715id_butir'];
        $this->M_isian3as2->update_isian715_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['715id_butir']);
    }

    
// 96
    public function updateisian717_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['717id_butir'];
        $this->M_isian3as2->update_isian717_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['717id_butir']);
    }

    // 97
    public function updateisian721_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['721id_butir'];
        $this->M_isian3as2->update_isian721_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['721id_butir']);
    }
// 99
    public function updateisian731_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir731tabel'];
        $this->M_isian3as2->update_isian731_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir731tabel']);
    }

    // 100
    public function updateisian732_buku(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir732tabel'];
        $this->M_isian3as2->update_isian732_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3as2/'.$_POST['id_butir732tabel']);
    }


    // UPDATE ISIAN BUTIR BORANG SESUAI DENGAN FORMAT EXCEL PENILAIAN 3A 3B

    // 1
    public function updateisian11(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir11'];
        $this->M_isian3as2->update_isian11();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir11']);
    }

    // 2
    public function updateisian11b(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir11b'];
        $this->M_isian3as2->update_isian11b();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir11b']);
    }

    // 3
    public function updateisian12(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir12'];
        $this->M_isian3as2->update_isian12();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir12']);
    }

    // 4
    public function updateisian21(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir21'];
        $this->M_isian3as2->update_isian21();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir21']);
    }

    // 5
    public function updateisian22(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir22'];
        $this->M_isian3as2->update_isian22();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir22']);
    }

    // 6
    public function updateisian23(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir23'];
        $this->M_isian3as2->update_isian23();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir23']);
    }

    // 7
    public function updateisian24(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir24'];
        $this->M_isian3as2->update_isian24();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir24']);
    }

    // 8
    public function updateisian25(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir25'];
        $this->M_isian3as2->update_isian25();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir25']);
    }

    // 9
    public function updateisian26(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir26'];
        $this->M_isian3as2->update_isian26();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir26']);
    }

    // 10 11 12 13
    public function updateisian321(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir321'];
        $this->M_isian3as2->update_isian321();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['321id_butir']);
    }

  // update BENTUK tabel butir 
    
    // 10 11 12 13
    public function updatetabel321(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id321'];
        $this->M_isian3as2->updatetabel321();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['321id_butir']);
    }

    // 14
    public function updateisian322(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id322'];
        $this->M_isian3as2->update_isian322();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir322tabel']);
    }

    // 15
    public function updateisian313(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id313'];
        $this->M_isian3as2->update_isian313();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir313tabel']);
    }

    // 16 17
    public function updateisian323(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['323id_butir'];
        $this->M_isian3as2->update_isian323();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['323id_butir']);
    }

    // 18 19
    public function updateisian32(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir32'];
        $this->M_isian3as2->update_isian32();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['32id_butir']);
    }

    // 20
    public function updateisian331a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir331a'];
        $this->M_isian3as2->update_isian331a();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir331a']);
    }

    // 21 22
    public function updateisian332a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id332'];
        $this->M_isian3as2->update_isian332();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['331id_butir']);
    }

    // 23
    public function updateisian332(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir332'];
        $this->M_isian3as2->update_isian332();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir332']);
    }

    // 24
    public function updateisian333(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir333'];
        $this->M_isian3as2->update_isian333();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir333']);
    }

    // 25
    public function updateisian341(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir341'];
        $this->M_isian3as2->update_isian341();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir341']);
    }

    // 26
    public function updateisian342(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir342'];
        $this->M_isian3as2->update_isian342();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir342']);
    }

    // 27
    public function updateisian41(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir41'];
        $this->M_isian3as2->update_isian41();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir41']);
    }

    // 28
    public function updateisian421(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir421'];
        $this->M_isian3as2->update_isian421();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir421']);
    }

    // 29
    public function updateisian422(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir422'];
        $this->M_isian3as2->update_isian422();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir422']);
    }

    // 30 31 32 33
    public function updateisian431(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['431id_butir'];
        $this->M_isian3as2->update_isian431();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['431id_butir']);
    }

    // 34
    public function updateisian432(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['432id_butir'];
        $this->M_isian3as2->update_isian432();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['432id_butir']);
    }

    // 35
    public function updateisian433(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir433tabel'];
        $this->M_isian3as2->update_isian433();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir433tabel']);
    }

    // 36 (434 & 435)
    public function updateisian434(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir434tabel'];
        $this->M_isian3as2->update_isian434();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir434tabel']);
    }

    // 37 (434 & 435)
    public function updateisian435(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir435tabel'];
        $this->M_isian3as2->update_isian435();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir435tabel']);
    }

    // 38
    public function updateisian44(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['44id_butir'];
        $this->M_isian3as2->update_isian44();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['44id_butir']);
    }

    // 39 40
    public function updateisian442(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['442id_butir'];
        $this->M_isian3as2->update_isian442();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['442id_butir']);
    }

    // 41
    public function updateisian451(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir451tabel'];
        $this->M_isian3as2->update_isian451();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir451tabel']);
    }

    // 42
    public function updateisian452(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir452tabel'];
        $this->M_isian3as2->update_isian452();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir452tabel']);
    }

    // 43
    public function updateisian453(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir453tabel'];
        $this->M_isian3as2->update_isian453();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir453tabel']);
    }

    // 44
    public function updateisian454(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir454tabel'];
        $this->M_isian3as2->update_isian454();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir454tabel']);
    }

    // 45
    public function updateisian455(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir455tabel'];
        $this->M_isian3as2->update_isian455();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir455tabel']);
    }

    // 46 47 48
    public function updateisian461(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['461id_butir'];
        $this->M_isian3as2->update_isian461();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['461id_butir']);
    }

  // public function updateisian461b(){
  //   //load needed library,helper,model
  //       $this->load->library('form_validation');
  //       $this->load->model('M_butir');
  //       $this->load->model('M_borang');
  //       $this->load->model('M_isian3as2');
  //       $id=$_POST['id_butir461b'];
  //       $this->M_isian3as2->update_isian461b();
  //       $_SESSION['suksesupdate'] = '';
  //       redirect('isian3as2/'.$_POST['id_butir461b']);
  // }

  // public function updateisian461c(){
  //   //load needed library,helper,model
  //       $this->load->library('form_validation');
  //       $this->load->model('M_butir');
  //       $this->load->model('M_borang');
  //       $this->load->model('M_isian3as2');
  //       $id=$_POST['id_butir461c'];
  //       $this->M_isian3as2->update_isian461c();
  //       $_SESSION['suksesupdate'] = '';
  //       redirect('isian3as2/'.$_POST['id_butir461c']);
  // }

    // 49
    public function updateisian462(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir462'];
        $this->M_isian3as2->update_isian462();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir462']);
    }

    // 50 51
    public function updateisian511(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir511a'];
        $this->M_isian3as2->update_isian511();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir511a']);
    }

    // 52
    public function updateisian512a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir512a'];
        $this->M_isian3as2->update_isian512a();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir512a']);
    }

    // 53
    public function updateisian512b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['512bid_butir'];
        $this->M_isian3as2->update_isian512b();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['512bid_butir']);
    }

    // 54
    public function updateisian512c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['512cid_butir'];
        $this->M_isian3as2->update_isian512c();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['512cid_butir']);
    }

    // 55
    public function updateisian513(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['513id_butir'];
        $this->M_isian3as2->update_isian513();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['513id_butir']);
    }

    // 56
    public function updateisian514(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['514id_butir'];
        $this->M_isian3as2->update_isian514();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['514id_butir']);
    }

    // 57
    public function updateisian52a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir52a'];
        $this->M_isian3as2->update_isian52a();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir52a']);
    }

    // 58
    public function updateisian52b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['52bid_butir'];
        $this->M_isian3as2->update_isian52b();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['52bid_butir']);
    }

    // 59 60
    public function updateisian531(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['531id_butir'];
        $this->M_isian3as2->update_isian531();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['531id_butir']);
    }

    // 61
    public function updateisian532(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir532'];
        $this->M_isian3as2->update_isian532();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir532']);
    }

    // 62 63 64
    public function updateisian541(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['541id_butir'];
        $this->M_isian3as2->update_isian541();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['541id_butir']);
    }

    // 65
    public function updateisian542(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['542id_butir'];
        $this->M_isian3as2->update_isian542();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['542id_butir']);
    }

    // 66
    public function updateisian551a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir551a'];
        $this->M_isian3as2->update_isian551a();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir551a']);
    }

    // 67
    public function updateisian551b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir551b'];
        $this->M_isian3as2->update_isian551b();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir551b']);
    }

    // 68
    public function updateisian551c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir551c'];
        $this->M_isian3as2->update_isian551c();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir551c']);
    }

    // 69
    public function updateisian551d(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['551did_butir'];
        $this->M_isian3as2->update_isian551d();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['551did_butir']);
    }

    // 70
    public function updateisian552(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir552'];
        $this->M_isian3as2->update_isian552();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir552']);
    }

    // 71
    public function updateisian56(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['56id_butir'];
        $this->M_isian3as2->update_isian56();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['56id_butir']);
    }

    // 72
    public function updateisian571(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir571'];
        $this->M_isian3as2->update_isian571();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir571']);
    }

    // 73
    public function updateisian572(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir572'];
        $this->M_isian3as2->update_isian572();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir572']);
    }

    // 74
    public function updateisian573(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir573'];
        $this->M_isian3as2->update_isian573();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir573']);
    }

    // 75
    public function updateisian574(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir574'];
        $this->M_isian3as2->update_isian574();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir574']);
    }

    // 76
    public function updateisian575(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir575'];
        $this->M_isian3as2->update_isian575();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir575']);
    }

    // 77
    public function updateisian61(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir61'];
        $this->M_isian3as2->update_isian61();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir61']);
    }

    // 78
    public function updateisian621(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621'];
        $this->M_isian3as2->update_isian621();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir621']);
    }

    public function updateisian621a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621a'];
        $this->M_isian3as2->update_isian621a();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir621a']);
    }

    public function updateisian621b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621b'];
        $this->M_isian3as2->update_isian621b();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir621b']);
    }

    public function updateisian621c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621c'];
        $this->M_isian3as2->update_isian621c();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir621c']);
    }

    public function updateisian621d(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir621d'];
        $this->M_isian3as2->update_isian621d();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir621d']);
    }

    // 79
    public function updateisian622(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['622id_butir'];
        $this->M_isian3as2->update_isian622();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['622id_butir']);
    }

    // 80
    public function updateisian623(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['623id_butir'];
        $this->M_isian3as2->update_isian623();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['623id_butir']);
    }

    // 81
    public function updateisian631(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['631id_butir'];
        $this->M_isian3as2->update_isian631();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['631id_butir']);
    }

    // 82
    public function updateisian632(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir632tabel'];
        $this->M_isian3as2->update_isian632();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir632tabel']);
    }

    // 83
    public function updateisian633(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir633tabel'];
        $this->M_isian3as2->update_isian633();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir633tabel']);
    }

    // 84 85
    public function updateisian641a(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['641aid_butir'];
        $this->M_isian3as2->update_isian641a();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['641aid_butir']);
    }

    // 86 87 88
    public function updateisian641c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['641cid_butir'];
        $this->M_isian3as2->update_isian641c();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['641cid_butir']);
    }

    public function updateisian641e(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir641e'];
        $this->M_isian3as2->update_isian641e();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir641e']);
    }

    // 89
    public function updateisian642(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir642'];
        $this->M_isian3as2->update_isian642();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir642']);
    }

    // 90
    public function updateisian643(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir643tabel'];
        $this->M_isian3as2->update_isian643();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir643tabel']);
    }

    // 91
    public function updateisian651(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir651'];
        $this->M_isian3as2->update_isian651();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir651']);
    }

    // 92
    public function updateisian652(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir652'];
        $this->M_isian3as2->update_isian652();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir652']);
    }

    // 93
    public function updateisian711(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['711id_butir'];
        $this->M_isian3as2->update_isian711();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['711id_butir']);
    }

    // 94
    public function updateisian712(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir712'];
        $this->M_isian3as2->update_isian712();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir712']);
    }

    // 95
    public function updateisian713(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['713id_butir'];
        $this->M_isian3as2->update_isian713();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['713id_butir']);
    }

    // 96
    public function updateisian714(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['714id_butir'];
        $this->M_isian3as2->update_isian714();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['714id_butir']);
    }

    // 97
    public function updateisian721(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['721id_butir'];
        $this->M_isian3as2->update_isian721();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['721id_butir']);
    }

    // 98
    public function updateisian722(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir722'];
        $this->M_isian3as2->update_isian722();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir722']);
    }

    // 99
    public function updateisian731(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir731tabel'];
        $this->M_isian3as2->update_isian731();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir731tabel']);
    }

    // 100
    public function updateisian732(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir732tabel'];
        $this->M_isian3as2->update_isian732();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir732tabel']);
    }

    public function updateisian2kolom(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3as2');
        $id=$_POST['id_butir'];
        $this->M_isian3as2->update_isian2kolom();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3as2/'.$_POST['id_butir']);
    }

    

    
// TUTUP QUERY UPDATE ISIAN

// QUERY DELETE ISIAN

    // DELETE ISIAN DENGAN 1 KOLOM DENGAN FORMAT ISIAN EXCEL PENILAIAN
    public function destroyisian1kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deleteisian1kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3as2/'.$borang);
    }

    // DELETE ISIAN DENGAN 1 KOLOM DENGAN FORMAT ISIAN BUKU ROANG WORD 
    public function destroyisian1kolom_buku($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deleteisian1kolom_buku('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian_buku3as2/'.$borang);
    }

    // DELETE ISIAN DENGAN 2 KOLOM SESIAI FORMAT PENILAIAN EXCEL
    public function destroyisian2kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deleteisian2kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3as2/'.$borang);
    }

    // DELETE ISIAN DENGAN 4 KOLOM SESUAI FORMAT PENILAIAN EXCEL
    public function destroyisian4kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deleteisian4kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3as2/'.$borang);
    }

    // DELETE ISIAN DENGAN 4 KOLOM SESUAI DENGAN FORMAT BUKU BORANG WORD
    public function destroyisian4kolom_buku($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deleteisian4kolom_buku('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian_buku3as2/'.$borang);
    }

    // DELETE ISIAN DENGAN 12 KOLOM SESUAI DENGAN FORMAT PENILAIAN EXCEL
    public function destroyisian12kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deleteisian12kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3as2/'.$borang);
    }

    // DELETE ISIAN DENGAN 5 KOLOM SESUAI DENGAN FORMAT PENILAIAN EXCEL
    public function destroyisian5kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deleteisian5kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3as2/'.$borang);
    }

    // DELETE ISIAN DENGAN 4 KOLOM TAPI DENGAN MENGHAPUS DATA SATU PERSATU PADA SUATU TABEL TERSEBUT
    public function destroyisian4kolomsatupersatu($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deleteisian4kolomsatupersatu('id',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3as2/'.$borang);
    }

    // DELETE ISIAN BUTIR DENGAN BERDASARKAN ID BUTIR

    // FORMAT BUKU BORANG EXCEL
    public function deletabelbutir($id,$borang){
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deletabelbutir('id',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        redirect('isian3as2/'.$borang);
    }

    // FORMAT BUKU BORANG WORD
    public function deletabelbutir_buku($id,$borang){
        $this->load->model('M_isian3as2');
        $result=$this->M_isian3as2->deletabelbutir_buku('id',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        redirect('isian_buku3as2/'.$borang);
    }
// TUTUP QUERY DELETE ISIAN
// 
    // 
    // 
    // 
    // 
    // 
    // 




    // KDOE DIBAWAH INI ADALAH KODE LAMA DARI PROGRAMMER SEBELUMNYA

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

  public function destroydok($id,$borang){
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
        redirect('isian3as2/'.$borang);
  }

    public function destroy(){
        $id=$_POST['id'];
        $this->load->model('M_isian3as2');

        //delete files on server
        $dok=$this->M_isian3as2->find('id',$id);
        $path = './public/upload/'.$dok[0]['filename'];
        //unlink($path);

        //delete data on database
        $result=$this->M_isian3as2->delete('id',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
    redirect('butir/'.$borang);
    }

    function delete_multiple(){
        //$id=$_POST['id'];
        $this->load->model('M_isian3as2');
        $this->M_isian3as2->remove_checked_id();
        //$btr=$this->M_isian3as2->find('id',$id);
        redirect(base_url().'index.php');
        //redirect('/isian3as2/'.$this->input->post('id_butir'));
    }

    function remove_checked(){
        $id=$_POST['id'];
        $this->load->library('form_validation');
        $this->load->model('M_isian3as2');

        //validation rules
        $this->form_validation->set_rules('msg[]', 'Private Message', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE)
        {
            $data['query'] = $this->M_isian3as2->received_msg();
            $this->load->view('M_isian3as2/inbox', $data);
        }
        else //success
        {
            $checked_messages = $this->input->post('msg'); //selected messages
            $this->M_isian3as2->delete_checked($checked_messages);

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
        $this->load->model('M_isian3as2');
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
                $this->M_isian3as2->insert_entry("","");
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
                        //$data['isian']=$this->M_isian3as2->find('id_butir',$_POST['id_butir']);
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
                        $this->M_isian3as2->insert_entry($file_path,$upload_data['file_name']);
                        redirect('/isian3as2/'.$this->input->post('id_butir'));
                }
            }

        }
    }

    public function find(){
        $id=$_POST['id'];
        $this->load->model('M_isian3as2');
        $data=$this->M_isian3as2->find('id',$id);
        echo json_encode($data);
    }

    public function findFlag(){
        $flag='view';
        $this->load->model('M_isian3as2');
        $data=$this->M_isian3as2->findFlag('flag',$flag);
        echo json_encode($data);
    }

    public function findForUpdate(){
        $id=$_POST['id'];
        $this->load->model('M_isian3as2');

        $data=$this->M_isian3as2->findForUpdate($id);
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
        $this->load->model('M_isian3as2');
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
                    $this->M_isian3as2->insert_entry($filename);
                    $this->version_model->insert_entry($file_path);
                    redirect('/isian3as2/'.$this->input->post('id_butir'));

                }else{
                    $this->M_isian3as2->insert_entry("");
                    redirect('/isian3as2/'.$this->input->post('id_butir'));
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
                        //$data['isian']=$this->M_isian3as2->find('id_butir',$_POST['id_butir']);
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
                        $this->M_isian3as2->insert_entry($upload_data['file_name']);
                    // masukkan detail softcopy kedalam database
                        $this->version_model->insert_entry($file_path);
                        redirect('/isian3as2/'.$this->input->post('id_butir'));
                }
            }

        }
    }

    public function applyforall(){
        $butir=$this->uri->segment(3, 0);
        echo $butir;
        $this->load->model('M_isian3as2');
        $this->load->model('version_model');
        $data=$this->M_isian3as2->global_query('select id,filename from isian where id_butir=(SELECT id FROM `butir` where butir="'.$butir.'") and id not in (select id_isian from documentversion )');
        //print_r($data);
        $i=0;
        foreach($data as $dok){
            $file_path=base_url()."public/upload/".$dok['filename'];
            $this->version_model->insert_entry_with_dok_id($dok['id'],$file_path);
            $i++;
        }
        echo $i." rows  affected";


    }

    public function upload_update(){
        // load semua library, model yang dibutuhkan
        $this->load->library('form_validation');
        $this->load->model('M_isian3as2');
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
        $data['isian']=$this->M_isian3as2->find('id',$id);
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
                        'flag'  => $this->input->post('flag')
                    );
                    $this->M_isian3as2->update_column($data,$id);
                    redirect('/isian3as2/'.$this->input->post('id_butir'));
                }else{
                    echo "uploadedFIle empty";
                    if($_POST['version']==""){
                        $filename="";
                        $filename=$this->input->post('fileExisting');
                        if(!empty($filename)){
                            //print_r("filename not empty");
                            $file_path=base_url()."public/upload/".$filename;
                            echo $this->input->post('fileExisting');
                            $this->M_isian3as2->update_entry();
                            $this->version_model->insert_version($file_path);
                            redirect('/isian3as2/'.$this->input->post('id_butir'));
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
                                'flag'  => $this->input->post('flag')
                            );
                            $this->M_isian3as2->update_column($data,$id);
                            redirect('/isian3as2/'.$this->input->post('id_butir'));
                        }
                        //jika tidak menggunakan teknik versioning, langsung update data isian terkait

                    }else{
                        $this->version_model->update_version();
                    }
                }

                //redirect('/isian3as2/'. $data['isian'][0]['id_butir']);
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
                        //$data['isian']=$this->M_isian3as2->find('id_butir',$_POST['id_butir']);
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
                        $this->M_isian3as2->update_column($file,$_POST['id_isian']);
                        $status=array('status'=> $_POST['status']);
                         $this->M_isian3as2->update_column($status,$_POST['id_isian']);
                    // masukkan detail softcopy kedalam database
                        $this->version_model->insert_version($file_path);
                        redirect('/isian3as2/'. $this->input->post('id_butir'));
                }
            }

        }
    }
}
