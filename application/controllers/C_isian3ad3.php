<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_isian3ad3 extends CI_Controller {

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
        $this->load->model('M_isian3ad3');
        $this->load->model('M_uploadisi');
        $this->load->model('M_dokumen');
        $this->load->model('M_penilaian');
        $this->load->library('form_validation');
    }


    public function index()
    {
        if(isset($_SESSION['logged_in']))
        {

            $id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
            $this->load->view('template/header',$data);
            $data['butir']=$this->M_butir->find('id',$id);
            $data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
            $data['isian']=$this->M_isian3ad3->find('id_butir',$id);
            $data['getdata']=$this->M_isian3ad3->join3tabel($id);
            //$data['f1']=$this->M_penilaian->get_f1();
            $id_but = $data['butir'][0]['id'];
            $id_bor = $data['butir'][0]['id_borang'];
            $caributir['carbut'] = $this->M_isian3ad3->findButirnya('id',$id_but,'id_borang',$id_bor);
            $butirnya = $caributir['carbut'][0]['butir'];
            if (($butirnya=='1.1.1') || ($butirnya=='1.1.2') || ($butirnya=='1.2') || ($butirnya=='2.1') || ($butirnya=='2.2') || ($butirnya=='2.3') || ($butirnya=='2.4') || ($butirnya=='2.5') || ($butirnya=='2.6') || ($butirnya=='3.1.3') || ($butirnya=='3.2') || ($butirnya=='3.3.1.a') || ($butirnya=='3.3.2') || ($butirnya=='3.3.3') || ($butirnya=='3.4.1') || ($butirnya=='3.4.2') || ($butirnya=='4.1') || ($butirnya=='4.3.2') || ($butirnya=='4.3.3') || ($butirnya=='4.3.4') || ($butirnya=='4.3.5') || ($butirnya=='4.4.1') || ($butirnya=='4.5.1') || ($butirnya=='4.5.2') || ($butirnya=='4.5.3') || ($butirnya=='4.5.4') || ($butirnya=='4.5.5') || ($butirnya=='4.6.2') || ($butirnya=='5.3.2') || ($butirnya=='5.5.2') || ($butirnya=='5.7.1') || ($butirnya=='5.7.2') || ($butirnya=='5.7.3') || ($butirnya=='5.7.4') || ($butirnya=='5.7.5') || ($butirnya=='6.1') || ($butirnya=='6.4.2') || ($butirnya=='6.5.1')) {
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$id);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$id);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
             }else if (($butirnya=='3.1.1.1') || ($butirnya=='3.1.1.2') || ($butirnya=='3.1.1.3') || ($butirnya=='3.1.1.4')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $cariidbutir['carbutr'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','3.1.1.1');
                $idbutirnya = $cariidbutir['carbutr'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian311kolom('id_butir',$idbutirnya);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$idbutirnya);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$idbutirnya);
            } else if (($butirnya=='3.1.2')) {
                $data['dataisian']=$this->M_isian3ad3->findisian311kolom('id_butir',$id);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$id);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
            } else if (($butirnya=='3.2.1') || ($butirnya=='3.2.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $cariidbutir['carbutr'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','3.2.1');
                $idbutirnya = $cariidbutir['carbutr'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian311kolom('id_butir',$idbutirnya);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$idbutirnya);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$idbutirnya);
            }elseif (($butirnya=='3.4.1.2') || ($butirnya=='3.4.1.3')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir3412['caribut3412'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','3.4.1.2');
                $butirnya3412 = $caributir3412['caribut3412'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian331kolom('id_butir',$butirnya3412);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya3412);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya3412);
            }elseif (($butirnya=='4.2.1') || ($butirnya=='4.2.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir421['carbut421'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','4.2.1');
                $butirnya421 = $caributir421['carbut421'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya421);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya421);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya421);
            }elseif (($butirnya=='4.3.1.1') || ($butirnya=='4.3.1.2') || ($butirnya=='4.3.1.3')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','4.3.1.1');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya431);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='4.3.2.1') || ($butirnya=='4.3.2.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir432['carbut432'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','4.3.2.1');
                $butirnya432 = $caributir432['carbut432'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya432);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya432);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya432);
            }elseif (($butirnya=='4.4.2.1') || ($butirnya=='4.4.2.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir442['carbut442'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','4.4.2.1');
                $butirnya442 = $caributir442['carbut442'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya442);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya442);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya442);
            }elseif (($butirnya=='4.6.1.1') || ($butirnya=='4.6.1.2') || ($butirnya=='4.6.1.3')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir461['carbut461'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','4.6.1.1');
                $butirnya461 = $caributir461['carbut461'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya461);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya461);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya461);
            }elseif (($butirnya=='5.1.1.1') || ($butirnya=='5.1.1.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir511['carbut511'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','5.1.1.1');
                $butirnya511 = $caributir511['carbut511'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya511);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya511);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya511);
            }elseif (($butirnya=='5.1.2.1.1') || ($butirnya=='5.1.2.1.2') || ($butirnya=='5.1.2.1.3') || ($butirnya=='5.1.2.1.4')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir512['carbut512'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','5.1.2.1.1');
                $butirnya512 = $caributir512['carbut512'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya512);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya512);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya512);
            }elseif (($butirnya=='4.6.1.a') || ($butirnya=='4.6.1.b') || ($butirnya=='4.6.1.c')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','4.6.1.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya431);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='5.3.1.a') || ($butirnya=='5.3.1.b')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','5.3.1.a');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya431);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='5.4.1.1')|| ($butirnya=='5.4.1.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir541['carbut541'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','5.4.1.1');
                $butirnya541 = $caributir541['carbut541'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya541);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya541);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya541);
            }elseif (($butirnya=='5.4.2.1') || ($butirnya=='5.4.2.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir542['carbut542'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','5.4.2.1');
                $butirnya542 = $caributir542['carbut542'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian331kolom('id_butir',$butirnya542);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya542);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya542);
            }elseif (($butirnya=='6.2.1.1') || ($butirnya=='6.2.1.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir621['carbut621'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','6.2.1.1');
                $butirnya621 = $caributir621['carbut621'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian331kolom('id_butir',$butirnya621);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya621);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya621);
            }elseif (($butirnya=='6.3.1')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','6.3.1');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian331kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya431);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='6.4.1.1') || ($butirnya=='6.4.1.2') || ($butirnya=='6.4.1.3') || ($butirnya=='6.4.1.4') || ($butirnya=='6.4.1.5') || ($butirnya=='6.4.1.6')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir641['carbut641'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','6.4.1.1');
                $butirnya641 = $caributir641['carbut641'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya641);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya641);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya641);
            }elseif (($butirnya=='6.4.1.c') || ($butirnya=='6.4.1.d') || ($butirnya=='6.4.1.e')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','6.4.1.c');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya431);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='6.5.2')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','6.5.2');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian331kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya431);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='7.1.1')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','7.1.1');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian331kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya431);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            }elseif (($butirnya=='7.2.1')) {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $caributir431['carbut431'] = $this->M_isian3ad3->findButirnyasama('id_borang',$id_bor,'butir','7.2.1');
                $butirnya431 = $caributir431['carbut431'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian331kolom('id_butir',$butirnya431);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$butirnya431);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$butirnya431);
            } else{
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom('id_butir',$id);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$id);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
            }
            
            
            $data1['isian']=$this->M_isian3ad3->ambildata();
            $data1['isian']=$this->M_isian3ad3->get_entire_data1($id);
            $this->load->view('isian3ad3',$data);
            //$this->load->view('isian2',$data1);
            // $this->load->view('footer');
        }else{
            redirect('Home/pages');
        }


    }

    public function isian_buku()
    {
        if(isset($_SESSION['logged_in']))
        {
            $id=$this->uri->segment(2, 0);
            $data['active_menu']='borang';
            $this->load->view('template/header',$data);
            $data['butir']=$this->M_butir->find_buku('id',$id);
            $data['buku']=$this->M_borang->find_buku('id',$data['butir'][0]['id_borang']);
            $data['isian']=$this->M_isian3ad3->find('id_butir',$id);
            $data['getdata']=$this->M_isian3ad3->join3tabel_buku($id);
            // sini
            $id_but = $data['butir'][0]['id'];
            $id_bor = $data['butir'][0]['id_borang'];
            $caributir['carbut'] = $this->M_isian3ad3->findButirnya_buku('id',$id_but,'id_borang',$id_bor);
            $butirnya = $caributir['carbut'][0]['butir'];
            if ($butirnya=='3.1.1') {
                $id_but = $data['butir'][0]['id'];
                $id_bor = $data['butir'][0]['id_borang'];
                $cariidbutir['carbutr'] = $this->M_isian3ad3->findButirnyasama_buku('id_borang',$id_bor,'butir','3.1.1');
                $idbutirnya = $cariidbutir['carbutr'][0]['id'];
                $data['dataisian']=$this->M_isian3ad3->findisian311kolom_buku('id_butir',$idbutirnya);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$idbutirnya);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$idbutirnya);
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
            }else{
                $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
                $data['dataisian']=$this->M_isian3ad3->findisian1kolom_buku('id_butir',$id);
                $data['dataisianversion']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',$id);
                $data['datadokumenversion']=$this->M_uploadisi->finduploaddokumenversion('id_dokumen',$id);
            }
            // tutup
            $this->load->view('isian_buku3ad3',$data);
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
        $this->load->model('M_isian3ad3');
        $this->load->library('form_validation');

        $id=$this->uri->segment(2, 0);
        $data['active_menu']='borang';
        $this->load->view('template/header',$data);
        $data['butir']=$this->M_butir->find('id',$id);
        $data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
        $data['isian']=$this->M_isian3ad3->find('id_butir',$id);
        $data['dataisian1']=$this->M_isian3ad3->findisian1kolom('id_butir',1);
        $data['dataisianversion1']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',1);
        $data['dataisian2']=$this->M_isian3ad3->findisian1kolom('id_butir',2);
        $data['dataisianversion2']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',2);
        $data['dataisian3']=$this->M_isian3ad3->findisian1kolom('id_butir',3);
        $data['dataisianversion3']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',3);
        $data['dataisian4']=$this->M_isian3ad3->findisian1kolom('id_butir',4);
        $data['dataisianversion4']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',4);
        $data['dataisian5']=$this->M_isian3ad3->findisian1kolom('id_butir',5);
        $data['dataisianversion5']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',5);
        $data['dataisian6']=$this->M_isian3ad3->findisian1kolom('id_butir',6);
        $data['dataisianversion6']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',6);
        $data['dataisian7']=$this->M_isian3ad3->findisian1kolom('id_butir',7);
        $data['dataisianversion7']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',7);
        $data['dataisian8']=$this->M_isian3ad3->findisian1kolom('id_butir',8);
        $data['dataisianversion8']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',8);
        $data['dataisian9']=$this->M_isian3ad3->findisian1kolom('id_butir',9);
        $data['dataisianversion9']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',9);
        $data['dataisian10']=$this->M_isian3ad3->findisian311kolom('id_butir',10);
        $data['dataisianversion10']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',10);
        $data['dataisian11']=$this->M_isian3ad3->findisian311kolom('id_butir',11);
        $data['dataisianversion11']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',11);
        $data['dataisian12']=$this->M_isian3ad3->findisian311kolom('id_butir',12);
        $data['dataisianversion12']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',12);
        $data['dataisian13']=$this->M_isian3ad3->findisian311kolom('id_butir',13);
        $data['dataisianversion13']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',13);
        $data['dataisian14']=$this->M_isian3ad3->findisian311kolom('id_butir',14);
        $data['dataisianversion14']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',14);
        $data['dataisian15']=$this->M_isian3ad3->findisian1kolom('id_butir',15);
        $data['dataisianversion15']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',15);
        $data['dataisian16']=$this->M_isian3ad3->findisian1kolom('id_butir',16);
        $data['dataisianversion16']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',16);
        $data['dataisian17']=$this->M_isian3ad3->findisian1kolom('id_butir',17);
        $data['dataisianversion17']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',17);
        $data['dataisian18']=$this->M_isian3ad3->findisian1kolom('id_butir',18);
        $data['dataisianversion18']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',18);
        $data['dataisian19']=$this->M_isian3ad3->findisian1kolom('id_butir',19);
        $data['dataisianversion19']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',19);
        $data['dataisian20']=$this->M_isian3ad3->findisian1kolom('id_butir',20);
        $data['dataisianversion20']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',20);
        $data['dataisian21']=$this->M_isian3ad3->findisian1kolom('id_butir',21);
        $data['dataisianversion21']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',21);
        $data['dataisian22']=$this->M_isian3ad3->findisian1kolom('id_butir',22);
        $data['dataisianversion22']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',22);
        $data['dataisian23']=$this->M_isian3ad3->findisian1kolom('id_butir',23);
        $data['dataisianversion23']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',23);
        $data['dataisian24']=$this->M_isian3ad3->findisian1kolom('id_butir',24);
        $data['dataisianversion24']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',24);
        $data['dataisian25']=$this->M_isian3ad3->findisian1kolom('id_butir',25);
        $data['dataisianversion25']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',25);
        $data['dataisian26']=$this->M_isian3ad3->findisian1kolom('id_butir',26);
        $data['dataisianversion26']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',26);
        $data['dataisian27']=$this->M_isian3ad3->findisian1kolom('id_butir',27);
        $data['dataisianversion27']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',27);
        $data['dataisian28']=$this->M_isian3ad3->findisian1kolom('id_butir',28);
        $data['dataisianversion28']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',28);
        $this->load->view('template/header',$data);
        $this->load->view('viewbookbutir');
    }

    // FORMAT BUKU BORANG YANG SUDAH JADI
  public function bukuborang(){
    $this->load->model('M_borang');
    $this->load->model('M_butir');
    $this->load->model('M_isian3ad3');
    $this->load->library('form_validation');

    $id=$this->uri->segment(2, 0);
    $data['active_menu']='penilaian';
    $this->load->view('template/header',$data);
    $data['butir']=$this->M_butir->find('id',$id);
    $data['buku']=$this->M_borang->find('id',$data['butir'][0]['id_borang']);
    $data['isian']=$this->M_isian3ad3->find('id_butir',$id);
    // if ($id==1) {
      $data['dataisian1']=$this->M_isian3ad3->findisian1kolom('id_butir',1);
      $data['dataisianversion1']=$this->M_isian3ad3->findisian4kolomversion('id_kolom',1);
    // }elseif ($id==2) {
      $data['dataisian2']=$this->M_isian3ad3->findisian1kolom('id_butir',2);
      $data['dataisianversion2']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',2);
    // }elseif ($id==3) {
      $data['dataisian3']=$this->M_isian3ad3->findisian1kolom('id_butir',3);
      $data['dataisianversion3']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',3);
    // }
    $data['dataisian4']=$this->M_isian3ad3->findisian1kolom('id_butir',4);
    $data['dataisianversion4']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',4);
    $data['dataisian5']=$this->M_isian3ad3->findisian1kolom('id_butir',5);
    $data['dataisianversion5']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',5);
    $data['dataisian6']=$this->M_isian3ad3->findisian1kolom('id_butir',6);
    $data['dataisianversion6']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',6);
    $data['dataisian7']=$this->M_isian3ad3->findisian1kolom('id_butir',7);
    $data['dataisianversion7']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',7);
    $data['dataisian8']=$this->M_isian3ad3->findisian12kolom('id_butir',8);
    $data['dataisianversion8']=$this->M_isian3ad3->findisian12kolomversion('id_kolom',8);
    $data['dataisian9']=$this->M_isian3ad3->findisian5kolom('id_butir',9);
    $data['dataisianversion9']=$this->M_isian3ad3->findisian5kolomversion('id_kolom',9);
    $data['dataisian10']=$this->M_isian3ad3->findisian1kolom('id_butir',10);
    $data['dataisianversion10']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',10);
    $data['dataisian11']=$this->M_isian3ad3->findisian1kolom('id_butir',11);
    $data['dataisianversion11']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',11);
    $data['dataisian12']=$this->M_isian3ad3->findisian1kolom('id_butir',12);
    $data['dataisianversion12']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',12);
    $data['dataisian13']=$this->M_isian3ad3->findisian1kolom('id_butir',13);
    $data['dataisianversion13']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',13);
    $data['dataisian14']=$this->M_isian3ad3->findisian1kolom('id_butir',14);
    $data['dataisianversion14']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',14);
    $data['dataisian15']=$this->M_isian3ad3->findisian1kolom('id_butir',15);
    $data['dataisianversion15']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',15);
    $data['dataisian16']=$this->M_isian3ad3->findisian1kolom('id_butir',16);
    $data['dataisianversion16']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',16);
    $data['dataisian17']=$this->M_isian3ad3->findisian1kolom('id_butir',17);
    $data['dataisianversion17']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',17);
    $data['dataisian18']=$this->M_isian3ad3->findisian1kolom('id_butir',18);
    $data['dataisianversion18']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',18);
    $data['dataisian19']=$this->M_isian3ad3->findisian1kolom('id_butir',19);
    $data['dataisianversion19']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',19);
    $data['dataisian20']=$this->M_isian3ad3->findisian1kolom('id_butir',20);
    $data['dataisianversion20']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',20);
    $data['dataisian21']=$this->M_isian3ad3->findisian1kolom('id_butir',21);
    $data['dataisianversion21']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',21);
    $data['dataisian22']=$this->M_isian3ad3->findisian1kolom('id_butir',22);
    $data['dataisianversion22']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',22);
    $data['dataisian23']=$this->M_isian3ad3->findisian1kolom('id_butir',23);
    $data['dataisianversion23']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',23);
    $data['dataisian24']=$this->M_isian3ad3->findisian1kolom('id_butir',24);
    $data['dataisianversion24']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',24);
    $data['dataisian25']=$this->M_isian3ad3->findisian1kolom('id_butir',25);
    $data['dataisianversion25']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',25);
    $data['dataisian26']=$this->M_isian3ad3->findisian1kolom('id_butir',26);
    $data['dataisianversion26']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',26);
    $data['dataisian27']=$this->M_isian3ad3->findisian1kolom('id_butir',27);
    $data['dataisianversion27']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',27);
    $data['dataisian28']=$this->M_isian3ad3->findisian1kolom('id_butir',28);
    $data['dataisianversion28']=$this->M_isian3ad3->findisian1kolomversion('id_kolom',28);
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
            $data['isian']=$this->M_isian3ad3->find('id_butir',$id);
            $data['getdata']=$this->M_isian3ad3->join3tabel($id);
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
            $data['isian']=$this->M_isian3ad3->find('id_butir',$id);
            $data['getdata']=$this->M_isian3ad3->join3tabel_buku($id);
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
            $data['isian']=$this->M_isian->find('id_butir',$id);
            $data['listpendukung']=$this->M_isian->listpendukung('id_pendukung',$id);
            $data['pendukung']=$this->M_isian->pendukung('id',$id);
            $data['getdata']=$this->M_isian->join3tabel($id);
            $data['datadokumen']=$this->M_uploadisi->finduploaddokumen('id_butir',$id);
            $this->load->view('list_dok_pend',$data);
        }else{
            redirect('Home/pages');
        }
    }

// QUERY INSERT ISIAN

  // INSERT ISIAN BUKU BORANG SESUAI DENGAN FORMAT BUKU BORANG WORD 3A 3B

    // 1
    public function ngisi111_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir111'];
        $this->M_isian3ad3->insert_isian111_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir111']);
    }

    // 2
    public function ngisi112_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir112'];
        $this->M_isian3ad3->insert_isian112_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir112']);
    }

    // 3
    public function ngisi12_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir12'];
        $this->M_isian3ad3->insert_isian12_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir12']);
    }

    // 4
    public function ngisi21_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir21'];
        $this->M_isian3ad3->insert_isian21_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir21']);
    }

    // 5
    public function ngisi22_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir22'];
        $this->M_isian3ad3->insert_isian22_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir22']);
    }

    // 6
    public function ngisi23_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir23'];
        $this->M_isian3ad3->insert_isian23_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir23']);
    }

    // 7
    public function ngisi24_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir24'];
        $this->M_isian3ad3->insert_isian24_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir24']);
    }

    // 8
    public function ngisi25_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir25'];
        $this->M_isian3ad3->insert_isian25_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir25']);
    }

    // 9
    public function ngisi26_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir26'];
        $this->M_isian3ad3->insert_isian26_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir26']);
    }

    // 10
    // TANPA ARRAY
    public function ngisi311_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['idTS'];
        $pilihts = $_POST['pilihts'];
        if ($pilihts=='inputts') {
            $this->M_isian3ad3->insert_isian311_buku();
        }else{
            $this->M_isian3ad3->deleteisian1kolom_buku('id',$id);
            $this->M_isian3ad3->insert_isian311_buku();
        }

        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir311']);
    }

    // PAKE ARRAY
    public function ngisi311_buku_array()
    {
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';

        foreach($post['kolom1_311'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir311'][$key],
            'kolom1' => $post['kolom1_311'][$key],
            'kolom2' => $post['kolom2_311'][$key],
            'kolom3' => $post['kolom3_311'][$key],
            'kolom4' => $post['kolom4_311'][$key],
            'kolom5' => $post['kolom5_311'][$key],
            'kolom6' => $post['kolom6_311'][$key],
            'kolom7' => $post['kolom7_311'][$key],
            'kolom8' => $post['kolom8_311'][$key],
            'kolom9' => $post['kolom9_311'][$key],
            'kolom10' => $post['kolom10_311'][$key],
            'kolom11' => $post['kolom11_311'][$key],
            'kolom12' => $post['kolom12_311'][$key],
            'kolom13' => $post['kolom13_311'][$key],
            'kolom14' => $post['kolom14_311'][$key],
            'kolom15' => $post['kolom15_311'][$key],
            'kolom16' => $post['kolom16_311'][$key],
            'kolom17' => $post['kolom17_311'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['311id_butir'][0]);
    }


    // 11
    // TANPA ARRAY
    public function ngisi312_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir312'];
        $this->M_isian3ad3->insert_isian312_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir312']);
    }

    // PAKE ARRAY
    public function ngisi312_buku_array(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_312'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir312'][$key],
            'kolom1' => $post['kolom1_312'][$key],
            'kolom2' => $post['kolom2_312'][$key],
            'kolom3' => $post['kolom3_312'][$key],
            'kolom4' => $post['kolom4_312'][$key],
            'kolom5' => $post['kolom5_312'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }

        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir312'][0]);
    }

    // 12
    // TANPA ARRAY
    public function ngisi313_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir313'];
        $id=$_POST['idTS'];
        $pilihts = $_POST['pilihts'];
        if ($pilihts=='inputts') {
            $this->M_isian3ad3->insert_isian313_buku();
        }else{
            $this->M_isian3ad3->deleteisian1kolom_buku('id',$id);
            $this->ngisi313_buku_array();
        }

        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir313']);
    }

    // PAKE ARRAY
    public function ngisi313_buku_array(){
        //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';

        foreach($post['kolom1_313'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir313'][$key],
            'kolom1' => $post['kolom1_313'][$key],
            'kolom2' => $post['kolom2_313'][$key],
            'kolom3' => $post['kolom3_313'][$key],
            'kolom4' => $post['kolom4_313'][$key],
            'kolom5' => $post['kolom5_313'][$key],
            'kolom6' => $post['kolom6_313'][$key],
            'kolom7' => $post['kolom7_313'][$key],
            'kolom8' => $post['kolom8_313'][$key],
            'kolom9' => $post['kolom9_313'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir313'][0]);
    }

    // 13
    public function ngisi32_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir32'];
        $this->M_isian3ad3->insert_isian32_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir32']);
    }

    // 14
    public function ngisi33_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir33'];
        $this->M_isian3ad3->insert_isian33_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir33']);
    }

    // 15
    public function ngisi341_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir341'];
        $this->M_isian3ad3->insert_isian341_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir341']);
    }

    // 16
    public function ngisi342_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir342'];
        $this->M_isian3ad3->insert_isian342_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir342']);
    }

    // 17
    public function ngisi343_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir343'];
        $this->M_isian3ad3->insert_isian343_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir343']);
    }

    // 18
    public function ngisi344_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir344'];
        $this->M_isian3ad3->insert_isian344_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir344']);
    }

    // 19
    public function ngisi345_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir345'];
        $this->M_isian3ad3->insert_isian345_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir345']);
    }

    // 20
    public function ngisi35_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir35'];
        $this->M_isian3ad3->insert_isian35_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir35']);
    }

    // 21
    public function ngisi41_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir41'];
        $this->M_isian3ad3->insert_isian41_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir41']);
    }

    // 22
    public function ngisi42_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir42'];
        $this->M_isian3ad3->insert_isian42_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir42']);
    }

    // 23
    // TANPA ARRAY
    public function ngisi431_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir431'];
        $this->M_isian3ad3->insert_isian431_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir431']);
    }

    // PAKE ARRAY
    public function ngisi431_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }

        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir431'][0]);
    }

    // 24
    // TANPA ARRAY
    public function ngisi432_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir432'];
        $this->M_isian3ad3->insert_isian432_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir432']);
    }

    // PAKE ARRAY
    public function ngisi432_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir432'][0]);
    }

    // 25
    // TANPA ARRAY
    public function ngisi433_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir433'];
        $this->M_isian3ad3->insert_isian433_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir433']);
    }

    // PAKE ARRAY
    public function ngisi433_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir433'][0]);
    }

    // 26
    // TANPA ARRAY
    public function ngisi434_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir434'];
        $this->M_isian3ad3->insert_isian434_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir434']);
    }

    // PAKE ARRAY
    public function ngisi434_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['434id_butir'][0]);
    }

    // 27
    // TANPA ARRAY
    public function ngisi435_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir435'];
        $this->M_isian3ad3->insert_isian435_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir435']);
    }

    // PAKE ARRAY
    public function ngisi435_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['435id_butir'][0]);
    }

    // 28
    // TANPA ARRAY
    public function ngisi441_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir441'];
        $this->M_isian3ad3->insert_isian441_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir441']);
    }

    // PAKE ARRAY
    public function ngisi441_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_441'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir441'][$key],
            'kolom1' => $post['kolom1_441'][$key],
            'kolom2' => $post['kolom2_441'][$key],
            'kolom3' => $post['kolom3_441'][$key],
            'kolom4' => $post['kolom4_441'][$key],
            'kolom5' => $post['kolom5_441'][$key],
            'kolom6' => $post['kolom6_441'][$key],
            'kolom7' => $post['kolom7_441'][$key],
            'kolom8' => $post['kolom8_441'][$key],
            'kolom9' => $post['kolom9_441'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir441'][0]);
    }

    // 29
    // TANPA ARRAY
    public function ngisi442_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir442'];
        $this->M_isian3ad3->insert_isian442_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir442']);
    }

    // PAKE ARRAY
    public function ngisi442_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir442'][0]);
    }

    // 30
    // TANPA ARRAY
    public function ngisi451_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir451'];
        $this->M_isian3ad3->insert_isian451_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir451']);
    }

    // PAKE ARRAY
    public function ngisi451_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';

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

    // 31
    public function ngisi452_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir452'];
        $this->M_isian3ad3->insert_isian452_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir452']);
    }

    // 32
    // TANPA ARRAY
    public function ngisi453_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir453'];
        $this->M_isian3ad3->insert_isian453_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir453']);
    }

    // PAKE ARRAY
    public function ngisi453_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir453'][0]);
    }

    // 33
    // TANPA ARRAY
    public function ngisi454_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir454'];
        $this->M_isian3ad3->insert_isian454_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir454']);
    }

    // PAKE ARRAY
    public function ngisi454_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_454'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir454'][$key],
            'kolom1' => $post['kolom1_454'][$key],
            'kolom2' => $post['kolom2_454'][$key],
            'kolom3' => $post['kolom3_454'][$key],
            'kolom4' => $post['kolom4_454'][$key],
            'kolom5' => $post['kolom5_454'][$key],
            'kolom6' => $post['kolom6_454'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir454'][0]);
    }

    // 34
    public function ngisi455_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir455'];
        $this->M_isian3ad3->insert_isian455_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir455']);
    }

    // 35
    // TANPA ARRAY
    public function ngisi461_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir461'];
        $this->M_isian3ad3->insert_isian461_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir461']);
    }

    // PAKE ARRAY
    public function ngisi461_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir461'][0]);
    }

    // 36
    public function ngisi462_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir462'];
        $this->M_isian3ad3->insert_isian462_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir462']);
    }

    // 37
    public function ngisi511_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir511'];
        $this->M_isian3ad3->insert_isian511_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir511']);
    }

    // 38
    public function ngisi5121_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5121'];
        $this->M_isian3ad3->insert_isian5121_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5121']);
    }

    // 39
    public function ngisi5122_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5122'];
        $this->M_isian3ad3->insert_isian5122_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5122']);
    }

    // 40
    public function ngisi521_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir521'];
        $this->M_isian3ad3->insert_isian521_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir521']);
    }

    // 41
    public function ngisi522_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir522'];
        $this->M_isian3ad3->insert_isian522_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir522']);
    }

    // 42
    public function ngisi523_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir523'];
        $this->M_isian3ad3->insert_isian523_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir523']);
    }

    // 43
    public function ngisi531_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir531'];
        $this->M_isian3ad3->insert_isian531_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir531']);
    }

    // 44
    public function ngisi532_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir532'];
        $this->M_isian3ad3->insert_isian532_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir532']);
    }

    // 45
    // TANPA ARRAY
    public function ngisi541_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir541'];
        $this->M_isian3ad3->insert_isian541_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir541']);
    }

    // PAKE ARRAY
    public function ngisi541_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_541'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir541'][$key],
            'kolom1' => $post['kolom1_541'][$key],
            'kolom2' => $post['kolom2_541'][$key],
            'kolom3' => $post['kolom3_541'][$key],
            'kolom4' => $post['kolom4_541'][$key],
            'kolom5' => $post['kolom5_541'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir541'][0]);
    }

    // 46
    public function ngisi542_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir542'];
        $this->M_isian3ad3->insert_isian542_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir542']);
    }

    // 47
    public function ngisi551_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir551'];
        $this->M_isian3ad3->insert_isian551_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir551']);
    }

    // 48
    public function ngisi5521_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5521'];
        $this->M_isian3ad3->insert_isian5521_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5521']);
    }

    // 49
    public function ngisi5522_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5522'];
        $this->M_isian3ad3->insert_isian5522_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5522']);
    }

    // 50
    public function ngisi5523_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5523'];
        $this->M_isian3ad3->insert_isian5523_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5523']);
    }

    // 51
    // TANPA ARRAY
    public function ngisi5524_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5524'];
        $this->M_isian3ad3->insert_isian5524_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5524']);
    }

    // PAKE ARRAY
    public function ngisi5524_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_5524'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir5524'][$key],
            'kolom1' => $post['kolom1_5524'][$key],
            'kolom2' => $post['kolom2_5524'][$key],
            'kolom3' => $post['kolom3_5524'][$key],
            'kolom4' => $post['kolom4_5524'][$key],
            'kolom5' => $post['kolom5_5524'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir5524'][0]);
    }

    // 52
    public function ngisi56_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir56'];
        $this->M_isian3ad3->insert_isian56_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir56']);
    }

    // 53
    public function ngisi571_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir571'];
        $this->M_isian3ad3->insert_isian571_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir571']);
    }

    // 54
    public function ngisi572_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir572'];
        $this->M_isian3ad3->insert_isian572_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir572']);
    }

    // 55
    public function ngisi573_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir573'];
        $this->M_isian3ad3->insert_isian573_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir573']);
    }

    // 56
    public function ngisi574_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir574'];
        $this->M_isian3ad3->insert_isian574_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir574']);
    }

    // 57
    public function ngisi58_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir58'];
        $this->M_isian3ad3->insert_isian58_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir58']);
    }

    // 58
    public function ngisi59_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir59'];
        $this->M_isian3ad3->insert_isian59_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir59']);
    }

    // 59
    public function ngisi61_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir61'];
        $this->M_isian3ad3->insert_isian61_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir61']);
    }

    // 60
    public function ngisi621_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621'];
        $this->M_isian3ad3->insert_isian621_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir621']);
    }

    // 61
    // TANPA ARRAY
    public function ngisi622_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir622'];
        $this->M_isian3ad3->insert_isian622_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir622']);
    }

    // PAKE ARRAY
    public function ngisi622_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir622'][0]);
    }

    // 62
    // TANPA ARRAY
    public function ngisi623_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir623'];
        $this->M_isian3ad3->insert_isian623_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir623']);
    }

    // PAKE ARRAY
    public function ngisi623_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';

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

    // 63
    public function ngisi631_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir631'];
        $this->M_isian3ad3->insert_isian631_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir631']);
    }

    // 64
    public function ngisi632_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir632'];
        $this->M_isian3ad3->insert_isian632_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir632']);
    }

    // 65
    public function ngisi633_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir633'];
        $this->M_isian3ad3->insert_isian633_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir633']);
    }

    // 66
    public function ngisi641_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir641'];
        $this->M_isian3ad3->insert_isian641_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir641']);
    }

    // 67
    public function ngisi642_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir642'];
        $this->M_isian3ad3->insert_isian642_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir642']);
    }

    // 68
    public function ngisi643_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir643'];
        $this->M_isian3ad3->insert_isian643_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir643']);
    }

    // 69
    public function ngisi651_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir651'];
        $this->M_isian3ad3->insert_isian651_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir651']);
    }

    // 70
    public function ngisi652_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir652'];
        $this->M_isian3ad3->insert_isian652_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir652']);
    }

    // 71
    // TANPA ARRAY
    public function ngisi711_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir711'];
        $this->M_isian3ad3->insert_isian711_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir711']);
    }

    // PAKE ARRAY
    public function ngisi711_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

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

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir711'][0]);
    }

    // 72
    // TANPA ARRAY
    public function ngisi712_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir712'];
        $this->M_isian3ad3->insert_isian712_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir712']);
    }

    // PAKE ARRAY
    public function ngisi712_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_712'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir712'][$key],
            'kolom1' => $post['kolom1_712'][$key],
            'kolom2' => $post['kolom2_712'][$key],
            'kolom3' => $post['kolom3_712'][$key],
            'kolom4' => $post['kolom4_712'][$key],
            'kolom5' => $post['kolom5_712'][$key],
            'kolom6' => $post['kolom6_712'][$key],
            'kolom7' => $post['kolom7_712'][$key],
            'kolom8' => $post['kolom8_712'][$key],
            'kolom9' => $post['kolom9_712'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir712'][0]);
    }

    // 73
    // TANPA ARRAY
    public function ngisi713_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir713'];
        $this->M_isian3ad3->insert_isian713_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir713']);
    }

    // PAKE ARRAY
    public function ngisi713_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';
        $id = $post['idTS'][0];
        $pilihts = $post['pilihts'][0];

        foreach($post['kolom1_713'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $this->input->post(''),
            'kolom1' => $this->input->post(''),
            'id_butir' => $post['id_butir713'][$key],
            'kolom1' => $post['kolom1_713'][$key],
            'kolom2' => $post['kolom2_713'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        if (($pilihts=='replacets')) {
            $this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }else{
            $this->db->insert_batch('isian_16kolom_buku', $result);
        }
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir713'][0]);
    }

    // 74
    // TANPA ARRAY
    public function ngisi721_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir721'];
        $this->M_isian3ad3->insert_isian721_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir721']);
    }

    // PAKE ARRAY
    public function ngisi721_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';

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

    // 75
    public function ngisi722_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir722'];
        $this->M_isian3ad3->insert_isian722_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir722']);
    }

    // 76
    // TANPA ARRAY
    public function ngisi731_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir731'];
        $this->M_isian3ad3->insert_isian731_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir731']);
    }

    // PAKE ARRAY
    public function ngisi731_buku_array(){
    //load needed library,helper,model
        $post = $this->input->post();
        $result = array();
        $load = 'isian_buku3ad3';

        foreach($post['kolom1_731'] AS $key => $val)
        {
            $result[] = array(
            'id_butir' => $post['id_butir731'][$key],
            'kolom1' => $post['kolom1_731'][$key],
            'kolom2' => $post['kolom2_731'][$key],
            'kolom3' => $post['kolom3_731'][$key],
            'kolom4' => $post['kolom4_731'][$key],
            'kolom5' => $post['kolom5_731'][$key],
            'kolom6' => $post['kolom6_731'][$key],
            'kolom7' => $post['kolom7_731'][$key],
            'version_no' => "1",
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
            );
        }

        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir731'][0]);
    }

    // 77
    // TANPA ARRAY
    public function ngisi732_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir732'];
        $this->M_isian3ad3->insert_isian732_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir732']);
    }

    // PAKE ARRAY
    public function ngisi732_buku_array(){
    //load needed library,helper,model
    $post = $this->input->post();
    $result = array();
    $load = 'isian_buku3ad3';
    foreach($post['kolom1_732'] AS $key => $val)
        {
            $result[] = array(
                'id_butir' => $post['id_butir732'][$key],
                'kolom1' => $post['kolom1_732'][$key],
                'kolom2' => $post['kolom2_732'][$key],
                'kolom3' => $post['kolom3_732'][$key],
                'kolom4' => $post['kolom4_732'][$key],
                'kolom5' => $post['kolom5_732'][$key],
                'kolom6' => $post['kolom6_732'][$key],
                'kolom7' => $post['kolom7_732'][$key],
                'version_no' => "1",
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
            );
        }
        $this->db->insert_batch('isian_16kolom_buku', $result);
        $_SESSION['suksesinput'] = '';
        redirect($load.'/'.$post['id_butir732'][0]);
    }



  // INSERT ISIAN BUKU SESUAI DENGAN FORMAT BUKU BORANG EXCEL PENILAIAN 3A 3B

    // 1
    public function ngisi111(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir111'];
        $this->M_isian3ad3->insert_isian111();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir111']);
    }

    // 2
    public function ngisi112(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir112'];
        $this->M_isian3ad3->insert_isian112();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir112']);
    }

    // 3
    public function ngisi12(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir12'];
        $this->M_isian3ad3->insert_isian12();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir12']);
    }

    // 4
    public function ngisi21(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir21'];
        $this->M_isian3ad3->insert_isian21();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir21']);
    }

    // 5
    public function ngisi22(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir22'];
        $this->M_isian3ad3->insert_isian22();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir22']);
    }

    // 6
    public function ngisi23(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir23'];
        $this->M_isian3ad3->insert_isian23();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir23']);
    }

    // 7
    public function ngisi24(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir24'];
        $this->M_isian3ad3->insert_isian24();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir24']);
    }

    // 8
    public function ngisi25(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir25'];
        $this->M_isian3ad3->insert_isian25();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir25']);
    }

    // 9
    public function ngisi26(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir26'];
        $this->M_isian3ad3->insert_isian26();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir26']);
    }

    // 10
    public function ngisi311(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['id_butir311'];
        $rbt = (int)($_POST['kolom4_311']);
        $ls = (int)($_POST['kolom3_311']);
        if ($rbt>=$ls) {
            $_SESSION['gagalinputrbt'] = '';
            redirect('isian3ad3/'.$_POST['311id_butir']);
        }else{
            
            $this->M_isian3ad3->insert_isian311();
            $_SESSION['suksesinput'] = '';
            redirect('isian3ad3/'.$_POST['311id_butir']);
        }
        // $this->M_isian3ad3->insert_isian311();
        //     $_SESSION['suksesinput'] = '';
        //     redirect('isian3ad3/'.$_POST['311id_butir']);
    }

    // 11
  public function ngisi312(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir312'];
        $this->M_isian3ad3->insert_isian312();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir312']);
  }

    // 12
    public function ngisi313(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir313'];
        $this->M_isian3ad3->insert_isian313();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir313']);
    }

    // 13
  public function ngisi314(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir314'];
        $this->M_isian3ad3->insert_isian314();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir314']);
  }

  // 14
  public function ngisi32(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir32'];
        $this->M_isian3ad3->insert_isian32();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir32']);
  }

  // 15
  public function ngisi33(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir33'];
        $this->M_isian3ad3->insert_isian33();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir33']);
  }

  // 16
  public function ngisi331b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['331id_butir'];
        $this->M_isian3ad3->insert_isian331b();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['331id_butir']);
  }

  // 17
  public function ngisi332(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir332'];
        $this->M_isian3ad3->insert_isian332();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir332']);
  }

  // 18
  public function ngisi333(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir333'];
        $this->M_isian3ad3->insert_isian333();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir333']);
  }

    // 19
    public function ngisi341(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir341'];
        $this->M_isian3ad3->insert_isian341();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir341']);
    }

    // 20
    public function ngisi3412(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir3412'];
        $this->M_isian3ad3->insert_isian3412();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir3412']);
    }

    // 21
    public function ngisi342(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir342'];
        $this->M_isian3ad3->insert_isian342();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir342']);
    }

    // 22
    public function ngisi343(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir343'];
        $this->M_isian3ad3->insert_isian343();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir343']);
    }

    // 23
    public function ngisi344(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir344'];
        $this->M_isian3ad3->insert_isian344();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir344']);
    }

    // 24
    public function ngisi345(){
                //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['id_butir345'];
        $this->M_isian3ad3->insert_isian345();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir345']);
    }

    // 25
    public function ngisi35(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir35'];
        $this->M_isian3ad3->insert_isian35();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir35']);
    }

    // 26
    public function ngisi41(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir41'];
        $this->M_isian3ad3->insert_isian41();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir41']);
    }

    // 27
    public function ngisi421(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir421'];
        $this->M_isian3ad3->insert_isian421();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir421']);
    }

    // 28
    public function ngisi422(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir422'];
        $this->M_isian3ad3->insert_isian422();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir422']);
    }

    // 29
  public function ngisi431(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['431id_butir'];
        $this->M_isian3ad3->insert_isian431();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['431id_butir']);
  }

  // 30
  public function ngisi432(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['432id_butir'];
        $this->M_isian3ad3->insert_isian432();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['432id_butir']);
  }

  // 31
  public function ngisi433(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir433'];
        $this->M_isian3ad3->insert_isian433();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir433']);
  }

  // 32
  public function ngisi434(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['434id_butir'];
        $this->M_isian3ad3->insert_isian434();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['434id_butir']);
  }

  // 33
  public function ngisi435(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['435id_butir'];
        $this->M_isian3ad3->insert_isian435();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['435id_butir']);
  }

  // 34
  public function ngisi441(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['441id_butir'];
        $this->M_isian3ad3->insert_isian441();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['441id_butir']);
  }

  // 35
  public function ngisi442(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['442id_butir'];
        $this->M_isian3ad3->insert_isian442();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['442id_butir']);
  }

  // 36
  public function ngisi451(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir451'];
        $this->M_isian3ad3->insert_isian451();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir451']);
  }

  // 37
  public function ngisi452(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir452'];
        $this->M_isian3ad3->insert_isian452();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir452']);
  }

  // 38
  public function ngisi453(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir453'];
        $this->M_isian3ad3->insert_isian453();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir453']);
  }

  // 39
  public function ngisi454(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir454'];
        $this->M_isian3ad3->insert_isian454();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir454']);
  }

  // 40
  public function ngisi455(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir455'];
        $this->M_isian3ad3->insert_isian455();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir455']);
  }

  // 41
  public function ngisi461(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['461id_butir'];
        $this->M_isian3ad3->insert_isian461();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['461id_butir']);
  }

  // public function ngisi461b(){
  //   //load needed library,helper,model
  //       $this->load->library('form_validation');
  //       $this->load->model('M_butir');
  //       $this->load->model('M_borang');
  //       $this->load->model('M_isian3ad3');
  //       $id=$_POST['id_butir461b'];
  //       $this->M_isian3ad3->insert_isian461b();
  //       $_SESSION['suksesinput'] = '';
  //       redirect('isian3ad3/'.$_POST['id_butir461b']);
  // }

  // public function ngisi461c(){
  //   //load needed library,helper,model
  //       $this->load->library('form_validation');
  //       $this->load->model('M_butir');
  //       $this->load->model('M_borang');
  //       $this->load->model('M_isian3ad3');
  //       $id=$_POST['id_butir461c'];
  //       $this->M_isian3ad3->insert_isian461c();
  //       $_SESSION['suksesinput'] = '';
  //       redirect('isian3ad3/'.$_POST['id_butir461c']);
  // }


  // 42
  public function ngisi462(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir462'];
        $this->M_isian3ad3->insert_isian462();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir462']);
  }

  // 43
  public function ngisi511(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir511'];
        $this->M_isian3ad3->insert_isian511();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir511']);
  }

  // 44
  public function ngisi5121(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5121'];
        $this->M_isian3ad3->insert_isian5121();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir5121']);
  }

  // 45
  public function ngisi512b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['512bid_butir'];
        $this->M_isian3ad3->insert_isian512b();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['512bid_butir']);
  }

  // 46
  public function ngisi5122(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['5122id_butir'];
        $this->M_isian3ad3->insert_isian5122();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['5122id_butir']);
  }

  // 47
  public function ngisi512c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir512c'];
        $this->M_isian3ad3->insert_isian512c();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir512c']);
  }

  // 48
  public function ngisi513(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['513id_butir'];
        $this->M_isian3ad3->insert_isian513();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['513id_butir']);
  }

  // 49
  public function ngisi514(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['514id_butir'];
        $this->M_isian3ad3->insert_isian514();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['514id_butir']);
  }

  // 50
  public function ngisi521(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir521'];
        $this->M_isian3ad3->insert_isian521();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir521']);
  }

  // 51
  public function ngisi522(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir522'];
        $this->M_isian3ad3->insert_isian522();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir522']);
  }

  // 52
  public function ngisi523(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir523'];
        $this->M_isian3ad3->insert_isian523();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir523']);
  }

  // 53
  public function ngisi531(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir531'];
        $this->M_isian3ad3->insert_isian531();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir531']);
  }

  // 54
  public function ngisi532(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir532'];
        $this->M_isian3ad3->insert_isian532();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir532']);
  }

  // 55
  public function ngisi541(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['541id_butir'];
        $this->M_isian3ad3->insert_isian541();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['541id_butir']);
  }

  // 56
  public function ngisi542(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['542id_butir'];
        $this->M_isian3ad3->insert_isian542();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['542id_butir']);
  }

  // 57
  public function ngisi551(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir551'];
        $this->M_isian3ad3->insert_isian551();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir551']);
  }

  // 58
  public function ngisi5521(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5521'];
        $this->M_isian3ad3->insert_isian5521();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir5521']);
  }

  // 59
  public function ngisi5522(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5522'];
        $this->M_isian3ad3->insert_isian5522();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir5522']);
  }

  // 60
  public function ngisi5523(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5523'];
        $this->M_isian3ad3->insert_isian5523();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir5523']);
  }

  // 61
  public function ngisi5524(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5524'];
        $this->M_isian3ad3->insert_isian5524();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir5524']);
  }

  // 62
  public function ngisi56(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['56id_butir'];
        $this->M_isian3ad3->insert_isian56();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['56id_butir']);
  }

  // 63
  public function ngisi571(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir571'];
        $this->M_isian3ad3->insert_isian571();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir571']);
  }

  // 64
  public function ngisi572(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir572'];
        $this->M_isian3ad3->insert_isian572();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir572']);
  }

  // 65
  public function ngisi573(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir573'];
        $this->M_isian3ad3->insert_isian573();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir573']);
  }

  // 66
  public function ngisi574(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir574'];
        $this->M_isian3ad3->insert_isian574();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir574']);
  }

  // 67
  public function ngisi58(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir58'];
        $this->M_isian3ad3->insert_isian58();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir58']);
  }

  // 68
  public function ngisi59(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir59'];
        $this->M_isian3ad3->insert_isian59();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir59']);
  }

  // 69
  public function ngisi61(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir61'];
        $this->M_isian3ad3->insert_isian61();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir61']);
  }

  // 70
  public function ngisi621(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621'];
        $this->M_isian3ad3->insert_isian621();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir621']);
  }

  // 71
  public function ngisi621b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621b'];
        $this->M_isian3ad3->insert_isian621b();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir621b']);
  }

  // 72
  public function ngisi621c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621c'];
        $this->M_isian3ad3->insert_isian621c();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir621c']);
  }

  // 73
  public function ngisi621d(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621d'];
        $this->M_isian3ad3->insert_isian621d();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir621d']);
  }

  // 74
  public function ngisi622(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['622id_butir'];
        $this->M_isian3ad3->insert_isian622();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['622id_butir']);
  }

  // 75
  public function ngisi623(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['623id_butir'];
        $this->M_isian3ad3->insert_isian623();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['623id_butir']);
  }

  // 76
  public function ngisi631(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['631id_butir'];
        $this->M_isian3ad3->insert_isian631();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['631id_butir']);
  }

  // 77
  public function ngisi632(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir632'];
        $this->M_isian3ad3->insert_isian632();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir632']);
  }

  // 78
  public function ngisi633(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir633'];
        $this->M_isian3ad3->insert_isian633();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir633']);
  }

  // 79
  public function ngisi641(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['641id_butir'];
        $this->M_isian3ad3->insert_isian641();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['641id_butir']);
  }

  // 80
  public function ngisi641c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['641cid_butir'];
        $this->M_isian3ad3->insert_isian641c();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['641cid_butir']);
  }

  // 81
  public function ngisi641e(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir641e'];
        $this->M_isian3ad3->insert_isian641e();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir641e']);
  }

  // 82
  public function ngisi642(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir642'];
        $this->M_isian3ad3->insert_isian642();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir642']);
  }

  // 83
  public function ngisi643(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir643'];
        $this->M_isian3ad3->insert_isian643();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir643']);
  }

  // 84
  public function ngisi651(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir651'];
        $this->M_isian3ad3->insert_isian651();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir651']);
  }

  // 85
  public function ngisi652(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir652'];
        $this->M_isian3ad3->insert_isian652();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir652']);
  }

  // 86
  public function ngisi711(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['711id_butir'];
        $this->M_isian3ad3->insert_isian711();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['711id_butir']);
  }

  // 87
  public function ngisi712(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['712id_butir'];
        $this->M_isian3ad3->insert_isian712();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['712id_butir']);
  }

  // 88
  public function ngisi713(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['713id_butir'];
        $this->M_isian3ad3->insert_isian713();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['713id_butir']);
  }

  // 89
  public function ngisi714(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['714id_butir'];
        $this->M_isian3ad3->insert_isian714();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['714id_butir']);
  }

  // 90
  public function ngisi721(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['721id_butir'];
        $this->M_isian3ad3->insert_isian721();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['721id_butir']);
  }

  // 91
  public function ngisi722(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir722'];
        $this->M_isian3ad3->insert_isian722();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir722']);
  }

  // 92
  public function ngisi731(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir731'];
        $this->M_isian3ad3->insert_isian731();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir731']);
  }

  // 93
  public function ngisi732(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir732'];
        $this->M_isian3ad3->insert_isian732();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir732']);
  }

    public function ngisi2kolom(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir'];
        $this->M_isian3ad3->insert_isian2kolom();
        $_SESSION['suksesinput'] = '';
        redirect('isian3ad3/'.$_POST['id_butir']);
    }

    
// TUTUP QUERY INSERT ISIAN

// QUERY UPLOAD DOKUMEN

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
        redirect('isian3ad3/'.$_POST['id_butir11']);
  }

// TUTUP QUERY UPLOAD DOKUMEN

// QUERY PENCARIAN/FIND

    public function findisian(){
        $id=$_POST['id'];
        $this->load->model('M_isian3ad3');
    $data=$this->M_isian3ad3->findisian1kolom('id',$id);
        // if (($id==1) || ($id==15)) {
        //  $data=$this->M_isian3ad3->findisian4kolom('id',$id);
        // }elseif (($id==2) || ($id==3) || ($id==4) || ($id==5) || ($id==6) || ($id==7) || ($id==14) || ($id==15) || ($id==16) || ($id==17) || ($id==18) || ($id==20) || ($id==21) || ($id==22) || ($id==23) || ($id==24) || ($id==25) || ($id==26)){
        //  $data=$this->M_isian3ad3->findisian1kolom('id',$id);
        // }elseif ($id==8) {
        //  $data=$this->M_isian3ad3->findisian12kolom('id',$id);
        // }elseif (($id==9)) {
        //  $data=$this->M_isian3ad3->findisian5kolom('id',$id);
        // }elseif (($id==10) || ($id==11) || ($id==12) || ($id==13)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',10);
  //   }elseif (($id==19) || ($id==20) || ($id==21)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',19);
  //   }elseif (($id==27) || ($id==28)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',27);
  //   }elseif (($id==29) || ($id==30) || ($id==31) || ($id==32)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',29);
  //   }elseif (($id==38) || ($id==39)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',38);
  //   }elseif (($id==45) || ($id==46) || ($id==47)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',45);
  //   }elseif (($id==49) || ($id==50)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',49);
  //   }elseif (($id==51) || ($id==52) || ($id==53)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',51);
  //   }elseif (($id==56) || ($id==57)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',56);
  //   }elseif (($id==58) || ($id==59)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',58);
  //   }elseif (($id==61) || ($id==62) || ($id==63)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',61);
  //   }elseif (($id==65) || ($id==66) || ($id==67) || ($id==68)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',65);
  //   }elseif (($id==83) || ($id==84) || ($id==85) || ($id==86) || ($id==87)) {
  //     $data=$this->M_isian3ad3->findisian1kolom('id',83);
  //   }else{
  //     $data=$this->M_isian3ad3->findisian1kolom('id',$id);
  //   }
        echo json_encode($data);
    }

    // MENCARI UNTUK UPDATE TABEL ISIAN

    // FORMAT BUKU BORANG SESUAI EXCEL
    public function findUpdateTbl(){
        $id=$_POST['id'];
        $this->load->model('M_isian3ad3');
        $data=$this->M_isian3ad3->findUpdateTbl('id',$id);
        echo json_encode($data);
    }

    // FORMAT BUKU BORANG SESUAI WORD
    public function findUpdateTbl_buku(){
        $id=$_POST['id'];
        $this->load->model('M_isian3ad3');
        $data=$this->M_isian3ad3->findUpdateTbl_buku('id',$id);
        echo json_encode($data);
    }

    // MENCARI PENILAIAN
    public function findNilai(){
        $id=$_POST['id'];
        $this->load->model('M_isian3ad3');
        $data=$this->M_isian3ad3->findNilai('id_buku',$id);
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
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir111'];
        $this->M_isian3ad3->update_isian111_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir111']);
    }

    // 2
    public function updateisian112_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir112'];
        $this->M_isian3ad3->update_isian112_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir112']);
    }

    // 3
    public function updateisian12_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir12'];
        $this->M_isian3ad3->update_isian12_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir12']);
    }

    // 4
    public function updateisian21_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir21'];
        $this->M_isian3ad3->update_isian21_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir21']);
    }

    // 5
    public function updateisian22_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir22'];
        $this->M_isian3ad3->update_isian22_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir22']);
    }

    // 6
    public function updateisian23_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir23'];
        $this->M_isian3ad3->update_isian23_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir23']);
    }

    // 7
    public function updateisian24_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir24'];
        $this->M_isian3ad3->update_isian24_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir24']);
    }

    // 8
    public function updateisian25_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir25'];
        $this->M_isian3ad3->update_isian25_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir25']);
    }

    // 9
    public function updateisian26_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir26'];
        $this->M_isian3ad3->update_isian26_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir26']);
    }

    // 10
    public function updateisian311_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir311tabel'];
        $this->M_isian3ad3->updatetabel311_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir311tabel']);
    }

    // 11
    public function updateisian312_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir312tabel'];
        $this->M_isian3ad3->update_isian312_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir312tabel']);
    }

    // 12
    public function updateisian313_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir313'];
        $this->M_isian3ad3->update_isian313_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir313']);
    }

    // 13
    public function updateisian32_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir32'];
        $this->M_isian3ad3->update_isian32_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir32']);
    }

    // 14
    public function updateisian33_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir33'];
        $this->M_isian3ad3->update_isian33_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir33']);
    }

    // 15
    public function updateisian341_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir341'];
        $this->M_isian3ad3->update_isian341_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir341']);
    }

    // 16
    public function updateisian342_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir342'];
        $this->M_isian3ad3->update_isian342_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir342']);
    }

    // 17
    public function updateisian343_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir343'];
        $this->M_isian3ad3->update_isian343_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir343']);
    }

    // 18
    public function updateisian344_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir344'];
        $this->M_isian3ad3->update_isian344_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir344']);
    }

    // 19
    public function updateisian345_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir345'];
        $this->M_isian3ad3->update_isian345_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir345']);
    }

    // 20
    public function updateisian35_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir35'];
        $this->M_isian3ad3->update_isian35_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir35']);
    }

    // 21
    public function updateisian41_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir41'];
        $this->M_isian3ad3->update_isian41_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir41']);
    }

    // 22
    public function updateisian42_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir42'];
        $this->M_isian3ad3->update_isian42_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir42']);
    }

    // 23
    public function updateisian431_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir431tabel'];
        $this->M_isian3ad3->update_isian431_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir431tabel']);
    }

    // 24
    public function updateisian432_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir432tabel'];
        $this->M_isian3ad3->update_isian432_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir432tabel']);
    }

    // 25
    public function updateisian433_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir433tabel'];
        $this->M_isian3ad3->update_isian433_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir433tabel']);
    }

    // 26
    public function updateisian434_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir434tabel'];
        $this->M_isian3ad3->update_isian434_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir434tabel']);
    }

    // 27
    public function updateisian435_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir435tabel'];
        $this->M_isian3ad3->update_isian435_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir435tabel']);
    }

    // 28
    public function updateisian441_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir441tabel'];
        $this->M_isian3ad3->update_isian441_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir441tabel']);
    }

    // 29
    public function updateisian442_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir442tabel'];
        $this->M_isian3ad3->update_isian442_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir442tabel']);
    }

    // 30
    public function updateisian451_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir451tabel'];
        $this->M_isian3ad3->update_isian451_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir451tabel']);
    }

    // 31
    public function updateisian452_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir452tabel'];
        $this->M_isian3ad3->update_isian452_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir452tabel']);
    }

    // 32
    public function updateisian453_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir453tabel'];
        $this->M_isian3ad3->update_isian453_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir453tabel']);
    }

    // 33
    public function updateisian454_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir454tabel'];
        $this->M_isian3ad3->update_isian454_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir454tabel']);
    }

    // 34
    public function updateisian455_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir455tabel'];
        $this->M_isian3ad3->update_isian455_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir455tabel']);
    }

    // 35
    public function updateisian461_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir461tabel'];
        $this->M_isian3ad3->update_isian461_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir461tabel']);
    }

    // 36
    public function updateisian462_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir462tabel'];
        $this->M_isian3ad3->update_isian462_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir462tabel']);
    }

    // 37
    public function updateisian511_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir511'];
        $this->M_isian3ad3->update_isian511_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir511']);
    }

    // 38
    public function updateisian5121_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5121'];
        $this->M_isian3ad3->update_isian5121_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5121']);
    }

    // 39
    public function updateisian5122_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5122'];
        $this->M_isian3ad3->update_isian5122_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5122']);
    }

    // 40
    public function updateisian521_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir521'];
        $this->M_isian3ad3->update_isian521_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir521']);
    }

    // 41
    public function updateisian522_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir522'];
        $this->M_isian3ad3->update_isian522_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir522']);
    }

    // 42
    public function updateisian523_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir523'];
        $this->M_isian3ad3->update_isian523_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir523']);
    }

    // 43
    public function updateisian531_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir531'];
        $this->M_isian3ad3->update_isian531_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir531']);
    }

    // 44
    public function updateisian532_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir532'];
        $this->M_isian3ad3->update_isian532_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir532']);
    }

    // 45
    public function updateisian541_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir541tabel'];
        $this->M_isian3ad3->update_isian541_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir541tabel']);
    }

    // 46
    public function updateisian542_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir542'];
        $this->M_isian3ad3->update_isian542_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir542']);
    }

    // 47
    public function updateisian551_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir551'];
        $this->M_isian3ad3->update_isian551_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir551']);
    }

    // 48
    public function updateisian5521_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5521'];
        $this->M_isian3ad3->update_isian5521_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5521']);
    }

    // 49
    public function updateisian5522_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5522'];
        $this->M_isian3ad3->update_isian5522_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5522']);
    }

    // 50
    public function updateisian5523_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5523'];
        $this->M_isian3ad3->update_isian5523_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5523']);
    }

    // 51
    public function updateisian5524_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5524tabel'];
        $this->M_isian3ad3->update_isian5524_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir5524tabel']);
    }

    // 52
    public function updateisian56_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir56'];
        $this->M_isian3ad3->update_isian56_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir56']);
    }

    // 53
    public function updateisian571_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir571'];
        $this->M_isian3ad3->update_isian571_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir571']);
    }

    // 54
    public function updateisian572_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir572'];
        $this->M_isian3ad3->update_isian572_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir572']);
    }

    // 55
    public function updateisian573_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir573'];
        $this->M_isian3ad3->update_isian573_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir573']);
    }

    // 56
    public function updateisian574_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir574'];
        $this->M_isian3ad3->update_isian574_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir574']);
    }

    // 57
    public function updateisian58_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir58'];
        $this->M_isian3ad3->update_isian58_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir58']);
    }

    // 58
    public function updateisian59_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir59'];
        $this->M_isian3ad3->update_isian59_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir59']);
    }

    // 59
    public function updateisian61_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir61'];
        $this->M_isian3ad3->update_isian61_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir61']);
    }

    // 60
    public function updateisian621_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621'];
        $this->M_isian3ad3->update_isian621_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir621']);
    }

    // 61
    public function updateisian622_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir622tabel'];
        $this->M_isian3ad3->update_isian622_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir622tabel']);
    }

    // 62
    public function updateisian623_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir623tabel'];
        $this->M_isian3ad3->update_isian623_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir623tabel']);
    }

    // 63
    public function updateisian631_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir631'];
        $this->M_isian3ad3->update_isian631_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir631']);
    }

    // 64
    public function updateisian632_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir632'];
        $this->M_isian3ad3->update_isian632_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir632']);
    }

    // 65
    public function updateisian633_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir633'];
        $this->M_isian3ad3->update_isian633_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir633']);
    }

    // 66
    public function updateisian641_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir641'];
        $this->M_isian3ad3->update_isian641_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir641']);
    }

    // 67
    public function updateisian642_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir642'];
        $this->M_isian3ad3->update_isian642_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir642']);
    }

    // 68
    public function updateisian643_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir643'];
        $this->M_isian3ad3->update_isian643_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir643']);
    }

    // 69
    public function updateisian651_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir651'];
        $this->M_isian3ad3->update_isian651_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir651']);
    }

    // 70
    public function updateisian652_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir652'];
        $this->M_isian3ad3->update_isian652_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir652']);
    }

    // 71
    public function updateisian711_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir711tabel'];
        $this->M_isian3ad3->update_isian711_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir711tabel']);
    }

    // 72
    public function updateisian712_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir712tabel'];
        $this->M_isian3ad3->update_isian712_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir712tabel']);
    }

    // 73
    public function updateisian713_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir713tabel'];
        $this->M_isian3ad3->update_isian713_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir713tabel']);
    }

    // 74
    public function updateisian721_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir721tabel'];
        $this->M_isian3ad3->update_isian721_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir721tabel']);
    }

    // 75
    public function updateisian722_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir722'];
        $this->M_isian3ad3->update_isian722_buku();
        $_SESSION['suksesupdate'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir722']);
    }

    // 76
    public function updateisian731_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir731tabel'];
        $this->M_isian3ad3->insert_isian731_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir731tabel']);
    }

    // 77
    public function updateisian732_buku(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir732tabel'];
        $this->M_isian3ad3->insert_isian732_buku();
        $_SESSION['suksesinput'] = '';
        redirect('isian_buku3ad3/'.$_POST['id_butir732tabel']);
    }




    // UPDATE ISIAN BUTIR BORANG SESUAI DENGAN FORMAT BUKU BORANG EXCEL 3A 3B

    // 1
    public function updateisian111(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir111'];
        $this->M_isian3ad3->update_isian111();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir111']);
    }

    // 2
    public function updateisian112(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir112'];
        $this->M_isian3ad3->update_isian112();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir112']);
    }

    // 3
    public function updateisian12(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir12'];
        $this->M_isian3ad3->update_isian12();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir12']);
    }

    // 4
    public function updateisian21(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir21'];
        $this->M_isian3ad3->update_isian21();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir21']);
    }

    // 5
    public function updateisian22(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir22'];
        $this->M_isian3ad3->update_isian22();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir22']);
    }

    // 6
    public function updateisian23(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir23'];
        $this->M_isian3ad3->update_isian23();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir23']);
    }

    // 7
    public function updateisian24(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir24'];
        $this->M_isian3ad3->update_isian24();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir24']);
    }

    // 8
    public function updateisian25(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir25'];
        $this->M_isian3ad3->update_isian25();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir25']);
    }

    // 9
    public function updateisian26(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir26'];
        $this->M_isian3ad3->update_isian26();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir26']);
    }

    // 10
    public function updateisian311(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['id_butir311'];
        $this->M_isian3ad3->update_isian311();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['311id_butir']);
    }
  // update tabel butir
    
    public function updatetabel311(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['id311'];
        $this->M_isian3ad3->updatetabel311();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['311id_butir']);
    }

    // 11
  public function updateisian312(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id312'];
        $this->M_isian3ad3->update_isian312();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir312tabel']);
  }

    // 12
    public function updateisian313(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id313'];
        $this->M_isian3ad3->update_isian313();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir313tabel']);
    }

    // 13
  public function updateisian314(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir314'];
        $this->M_isian3ad3->update_isian314();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir314']);
  }

  // 14
  public function updateisian32(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir32'];
        $this->M_isian3ad3->update_isian32();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir32']);
  }

  // 15
  public function updateisian33(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir33'];
        $this->M_isian3ad3->update_isian33();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir33']);
  }

  // 16
  public function updateisian331b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id331b'];
        $this->M_isian3ad3->update_isian331b();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['331id_butir']);
  }

  // 17
  public function updateisian332(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir332'];
        $this->M_isian3ad3->update_isian332();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir332']);
  }

  // 18
  public function updateisian333(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir333'];
        $this->M_isian3ad3->update_isian333();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir333']);
  }

    // 19
    public function updateisian341(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir341'];
        $this->M_isian3ad3->update_isian341();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir341']);
    }

    // 20
    public function updateisian3412(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir3412'];
        $this->M_isian3ad3->update_isian3412();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir3412']);
    }
    
    // 21
    public function updateisian342(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir342'];
        $this->M_isian3ad3->update_isian342();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir342']);
    }

    // 22
    public function updateisian343(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir343'];
        $this->M_isian3ad3->update_isian343();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir343']);
    }

    // 23
    public function updateisian344(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir344'];
        $this->M_isian3ad3->update_isian344();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir344']);
    }

    // 24
     public function updateisian345(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['id345'];
        $this->M_isian3ad3->update_isian345();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir345tabel']);
        }

    // 25
    public function updateisian35(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir35'];
        $this->M_isian3ad3->update_isian35();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir35']);
    }

    // 26
    public function updateisian41(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir41'];
        $this->M_isian3ad3->update_isian41();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir41']);
    }

    // 27
    public function updateisian421(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir421'];
        $this->M_isian3ad3->update_isian421();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir421']);
    }

    // 28
  public function updateisian422(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir422'];
        $this->M_isian3ad3->update_isian422();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir422']);
  }

  // 29
    public function updateisian431(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['431id_butir'];
        $this->M_isian3ad3->update_isian431();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['431id_butir']);
    }

    // 30
  public function updateisian432(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['432id_butir'];
        $this->M_isian3ad3->update_isian432();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['432id_butir']);
  }

  // 31
  public function updateisian433(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir433tabel'];
        $this->M_isian3ad3->update_isian433();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir433tabel']);
  }

  // 32
  public function updateisian434(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['id_butir434tabel'];
        $this->M_isian3ad3->update_isian434();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir434tabel']);
  }

  // 33
  public function updateisian435(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['id_butir435tabel'];
        $this->M_isian3ad3->update_isian435();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir435tabel']);
  }

  // 34
  public function updateisian441(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['441id_butir'];
        $this->M_isian3ad3->update_isian441();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['441id_butir']);
  }

  // 35
  public function updateisian442(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['442id_butir'];
        $this->M_isian3ad3->update_isian442();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['442id_butir']);
  }

  // 36
  public function updateisian451(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir451tabel'];
        $this->M_isian3ad3->update_isian451();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir451tabel']);
  }

  // 37
  public function updateisian452(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir452tabel'];
        $this->M_isian3ad3->update_isian452();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir452tabel']);
  }

  // 38
  public function updateisian453(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir453tabel'];
        $this->M_isian3ad3->update_isian453();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir453tabel']);
  }

  // 39
  public function updateisian454(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir454tabel'];
        $this->M_isian3ad3->update_isian454();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir454tabel']);
  }

  // 40
  public function updateisian455(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir455tabel'];
        $this->M_isian3ad3->update_isian455();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir455tabel']);
  }

  // 41
  public function updateisian461(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['461id_butir'];
        $this->M_isian3ad3->update_isian461();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['461id_butir']);
  }

  // public function updateisian461b(){
  //   //load needed library,helper,model
  //       $this->load->library('form_validation');
  //       $this->load->model('M_butir');
  //       $this->load->model('M_borang');
  //       $this->load->model('M_isian3ad3');
  //       $id=$_POST['id_butir461b'];
  //       $this->M_isian3ad3->update_isian461b();
  //       $_SESSION['suksesupdate'] = '';
  //       redirect('isian3ad3/'.$_POST['id_butir461b']);
  // }

  // public function updateisian461c(){
  //   //load needed library,helper,model
  //       $this->load->library('form_validation');
  //       $this->load->model('M_butir');
  //       $this->load->model('M_borang');
  //       $this->load->model('M_isian3ad3');
  //       $id=$_POST['id_butir461c'];
  //       $this->M_isian3ad3->update_isian461c();
  //       $_SESSION['suksesupdate'] = '';
  //       redirect('isian3ad3/'.$_POST['id_butir461c']);
  // }


  // 42
  public function updateisian462(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir462'];
        $this->M_isian3ad3->update_isian462();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir462']);
  }

  // 43
  public function updateisian511(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir511'];
        $this->M_isian3ad3->update_isian511();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir511']);
  }

  // 44
  public function updateisian5121(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5121'];
        $this->M_isian3ad3->update_isian5121();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir5121']);
  }

  // 45
  public function updateisian512b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['512bid_butir'];
        $this->M_isian3ad3->update_isian512b();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['512bid_butir']);
  }

  // 46
  public function updateisian5122(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['5122id_butir'];
        $this->M_isian3ad3->update_isian5122();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['5122id_butir']);
  }

  // 47
  public function updateisian512c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['512cid_butir'];
        $this->M_isian3ad3->update_isian512c();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['512cid_butir']);
  }

  // 48
  public function updateisian513(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['513id_butir'];
        $this->M_isian3ad3->update_isian513();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['513id_butir']);
  }

  // 49
  public function updateisian514(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['514id_butir'];
        $this->M_isian3ad3->update_isian514();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['514id_butir']);
  }

  // 50
  public function updateisian521(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir521'];
        $this->M_isian3ad3->update_isian521();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir521']);
  }

  // 51
  public function updateisian522(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir522'];
        $this->M_isian3ad3->update_isian522();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir522']);
  }

  // 52
  public function updateisian523(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir523'];
        $this->M_isian3ad3->update_isian523();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir523']);
  }

  // 53
  public function updateisian531(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir531'];
        $this->M_isian3ad3->update_isian531();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir531']);
  }

  // 54
  public function updateisian532(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['532id_butir'];
        $this->M_isian3ad3->update_isian532();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['532id_butir']);
  }

  // 55
  public function updateisian541(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['541id_butir'];
        $this->M_isian3ad3->update_isian541();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['541id_butir']);
  }

  // 56
  public function updateisian542(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['542id_butir'];
        $this->M_isian3ad3->update_isian542();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['542id_butir']);
  }

  // 57
  public function updateisian551(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir551'];
        $this->M_isian3ad3->update_isian551();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir551']);
  }

  // 58
  public function updateisian5521(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5521'];
        $this->M_isian3ad3->update_isian5521();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir5521']);
  }

  // 59
  public function updateisian5522(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5522'];
        $this->M_isian3ad3->update_isian5522();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir5522']);
  }

  // 60
  public function updateisian5523(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir5523'];
        $this->M_isian3ad3->update_isian5523();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir5523']);
  }

  // 61
  public function updateisian5524(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['5524id_butir'];
        $this->M_isian3ad3->update_isian5524();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['5524id_butir']);
  }

  // 62
  public function updateisian56(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['56id_butir'];
        $this->M_isian3ad3->update_isian56();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['56id_butir']);
  }

  // 63
  public function updateisian571(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir571'];
        $this->M_isian3ad3->update_isian571();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir571']);
  }

  // 64
  public function updateisian572(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir572'];
        $this->M_isian3ad3->update_isian572();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir572']);
  }

  // 65
  public function updateisian573(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir573'];
        $this->M_isian3ad3->update_isian573();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir573']);
  }

  // 66
  public function updateisian574(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir574'];
        $this->M_isian3ad3->update_isian574();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir574']);
  }

  // 67
  public function updateisian58(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir58'];
        $this->M_isian3ad3->update_isian58();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir58']);
  }

  // 68
  public function updateisian59(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['59id_butir'];
        $this->M_isian3ad3->update_isian59();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['59id_butir']);
  }

  // 69
  public function updateisian61(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir61'];
        $this->M_isian3ad3->update_isian61();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir61']);
  }

  // 70
  public function updateisian621(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621'];
        $this->M_isian3ad3->update_isian621();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir621']);
  }

  // 71
  public function updateisian621b(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621b'];
        $this->M_isian3ad3->update_isian621b();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir621b']);
  }

  // 72
  public function updateisian621c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621c'];
        $this->M_isian3ad3->update_isian621c();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir621c']);
  }

  // 73
  public function updateisian621d(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir621d'];
        $this->M_isian3ad3->update_isian621d();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir621d']);
  }

  // 74
  public function updateisian622(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['622id_butir'];
        $this->M_isian3ad3->update_isian622();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['622id_butir']);
  }

  // 75
  public function updateisian623(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['623id_butir'];
        $this->M_isian3ad3->update_isian623();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['623id_butir']);
  }

  // 76
  public function updateisian631(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['631id_butir'];
        $this->M_isian3ad3->update_isian631();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['631id_butir']);
  }

  // 77
  public function updateisian632(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir632tabel'];
        $this->M_isian3ad3->update_isian632();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir632tabel']);
  }

  // 78
  public function updateisian633(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir633tabel'];
        $this->M_isian3ad3->update_isian633();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir633tabel']);
  }

  // 79
  public function updateisian641(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['641id_butir'];
        $this->M_isian3ad3->update_isian641();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['641id_butir']);
  }

  // 80
  public function updateisian641c(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['641cid_butir'];
        $this->M_isian3ad3->update_isian641c();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['641cid_butir']);
  }

  // 81
  public function updateisian641e(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir641e'];
        $this->M_isian3ad3->update_isian641e();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir641e']);
  }

  // 82
  public function updateisian642(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir642'];
        $this->M_isian3ad3->update_isian642();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir642']);
  }

  // 83
  public function updateisian643(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir643tabel'];
        $this->M_isian3ad3->update_isian643();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir643tabel']);
  }

  // 84
  public function updateisian651(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir651'];
        $this->M_isian3ad3->update_isian651();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir651']);
  }

  // 85
  public function updateisian652(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir652'];
        $this->M_isian3ad3->update_isian652();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir652']);
  }

  // 86
  public function updateisian711(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['711id_butir'];
        $this->M_isian3ad3->update_isian711();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['711id_butir']);
  }

  // 87
  public function updateisian712(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['712id_butir'];
        $this->M_isian3ad3->update_isian712();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['712id_butir']);
  }

  // 88
  public function updateisian713(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian');
        $id=$_POST['713id_butir'];
        $this->M_isian3ad3->update_isian713();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['713id_butir']);
  }

  // 89
  public function updateisian721(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['721id_butir'];
        $this->M_isian3ad3->update_isian721();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['721id_butir']);
  }

  // 90
  public function updateisian722(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir722'];
        $this->M_isian3ad3->update_isian722();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir722']);
  }

  // 91
  public function updateisian731(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir731tabel'];
        $this->M_isian3ad3->update_isian731();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir731tabel']);
  }

  // 92
  public function updateisian732(){
    //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir732tabel'];
        $this->M_isian3ad3->update_isian732();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir732tabel']);
  }

    public function updateisian2kolom(){
        //load needed library,helper,model
        $this->load->library('form_validation');
        $this->load->model('M_butir');
        $this->load->model('M_borang');
        $this->load->model('M_isian3ad3');
        $id=$_POST['id_butir'];
        $this->M_isian3ad3->update_isian2kolom();
        $_SESSION['suksesupdate'] = '';
        redirect('isian3ad3/'.$_POST['id_butir']);
    }

    

    
// TUTUP QUERY UPDATE ISIAN

// QUERY DELETE ISIAN

    // DELETE ISIAN DENGAN 1 KOLOM DENGAN FORMAT ISIAN EXCEL PENILAIAN
    public function destroyisian1kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deleteisian1kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3ad3/'.$borang);
    }

    // DELETE ISIAN DENGAN 1 KOLOM DENGAN FORMAT ISIAN BUKU ROANG WORD 
    public function destroyisian1kolom_buku($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deleteisian1kolom_buku('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian_buku3ad3/'.$borang);
    }

    // DELETE ISIAN DENGAN 2 KOLOM SESIAI FORMAT PENILAIAN EXCEL
    public function destroyisian2kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deleteisian2kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3ad3/'.$borang);
    }

    // DELETE ISIAN DENGAN 4 KOLOM SESUAI FORMAT PENILAIAN EXCEL
    public function destroyisian4kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deleteisian4kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3ad3/'.$borang);
    }

    // DELETE ISIAN DENGAN 4 KOLOM SESUAI DENGAN FORMAT BUKU BORANG WORD
    public function destroyisian4kolom_buku($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deleteisian4kolom_buku('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian_buku3ad3/'.$borang);
    }

    // DELETE ISIAN DENGAN 12 KOLOM SESUAI DENGAN FORMAT PENILAIAN EXCEL
    public function destroyisian12kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deleteisian12kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3ad3/'.$borang);
    }

    // DELETE ISIAN DENGAN 5 KOLOM SESUAI DENGAN FORMAT PENILAIAN EXCEL
    public function destroyisian5kolom($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deleteisian5kolom('id_butir',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3ad3/'.$borang);
    }

    // DELETE ISIAN DENGAN 4 KOLOM TAPI DENGAN MENGHAPUS DATA SATU PERSATU PADA SUATU TABEL TERSEBUT
    public function destroyisian4kolomsatupersatu($id,$borang){
        // $id=$_POST['id'];
        // $idbut=3;
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deleteisian4kolomsatupersatu('id',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        // redirect('butir/'.$idbut);
        redirect('isian3ad3/'.$borang);
    }

    // DELETE ISIAN BUTIR DENGAN BERDASARKAN ID BUTIR

    // FORMAT BUKU BORANG EXCEL
    public function deletabelbutir($id,$borang){
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deletabelbutir('id',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        redirect('isian3ad3/'.$borang);
    }

    // FORMAT BUKU BORANG WORD
    public function deletabelbutir_buku($id,$borang){
        $this->load->model('M_isian3ad3');
        $result=$this->M_isian3ad3->deletabelbutir_buku('id',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
        redirect('isian_buku3ad3/'.$borang);
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
        redirect('isian3ad3/'.$borang);
  }

    public function destroy(){
        $id=$_POST['id'];
        $this->load->model('M_isian3ad3');

        //delete files on server
        $dok=$this->M_isian3ad3->find('id',$id);
        $path = './public/upload/'.$dok[0]['filename'];
        //unlink($path);

        //delete data on database
        $result=$this->M_isian3ad3->delete('id',$id);
        if($result > 0){
            echo json_encode('success');
        }else{
            echo json_encode('failed');
        }
    redirect('butir/'.$borang);
    }

    function delete_multiple(){
        //$id=$_POST['id'];
        $this->load->model('M_isian3ad3');
        $this->M_isian3ad3->remove_checked_id();
        //$btr=$this->M_isian3ad3->find('id',$id);
        redirect(base_url().'index.php');
        //redirect('/isian3ad3/'.$this->input->post('id_butir'));
    }

    function remove_checked(){
        $id=$_POST['id'];
        $this->load->library('form_validation');
        $this->load->model('M_isian3ad3');

        //validation rules
        $this->form_validation->set_rules('msg[]', 'Private Message', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE)
        {
            $data['query'] = $this->M_isian3ad3->received_msg();
            $this->load->view('M_isian3ad3/inbox', $data);
        }
        else //success
        {
            $checked_messages = $this->input->post('msg'); //selected messages
            $this->M_isian3ad3->delete_checked($checked_messages);

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
        $this->load->model('M_isian3ad3');
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
                $this->M_isian3ad3->insert_entry("","");
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
                        //$data['isian']=$this->M_isian3ad3->find('id_butir',$_POST['id_butir']);
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
                        $this->M_isian3ad3->insert_entry($file_path,$upload_data['file_name']);
                        redirect('/isian3ad3/'.$this->input->post('id_butir'));
                }
            }

        }
    }

    public function find(){
        $id=$_POST['id'];
        $this->load->model('M_isian3ad3');
        $data=$this->M_isian3ad3->find('id',$id);
        echo json_encode($data);
    }

    public function findFlag(){
        $flag='view';
        $this->load->model('M_isian3ad3');
        $data=$this->M_isian3ad3->findFlag('flag',$flag);
        echo json_encode($data);
    }

    public function findForUpdate(){
        $id=$_POST['id'];
        $this->load->model('M_isian3ad3');

        $data=$this->M_isian3ad3->findForUpdate($id);
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
        $this->load->model('M_isian3ad3');
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
                    $this->M_isian3ad3->insert_entry($filename);
                    $this->version_model->insert_entry($file_path);
                    redirect('/isian3ad3/'.$this->input->post('id_butir'));

                }else{
                    $this->M_isian3ad3->insert_entry("");
                    redirect('/isian3ad3/'.$this->input->post('id_butir'));
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
                        //$data['isian']=$this->M_isian3ad3->find('id_butir',$_POST['id_butir']);
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
                        $this->M_isian3ad3->insert_entry($upload_data['file_name']);
                    // masukkan detail softcopy kedalam database
                        $this->version_model->insert_entry($file_path);
                        redirect('/isian3ad3/'.$this->input->post('id_butir'));
                }
            }

        }
    }

    public function applyforall(){
        $butir=$this->uri->segment(3, 0);
        echo $butir;
        $this->load->model('M_isian3ad3');
        $this->load->model('version_model');
        $data=$this->M_isian3ad3->global_query('select id,filename from isian where id_butir=(SELECT id FROM `butir` where butir="'.$butir.'") and id not in (select id_isian from documentversion )');
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
        $this->load->model('M_isian3ad3');
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
        $data['isian']=$this->M_isian3ad3->find('id',$id);
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
                    $this->M_isian3ad3->update_column($data,$id);
                    redirect('/isian3ad3/'.$this->input->post('id_butir'));
                }else{
                    echo "uploadedFIle empty";
                    if($_POST['version']==""){
                        $filename="";
                        $filename=$this->input->post('fileExisting');
                        if(!empty($filename)){
                            //print_r("filename not empty");
                            $file_path=base_url()."public/upload/".$filename;
                            echo $this->input->post('fileExisting');
                            $this->M_isian3ad3->update_entry();
                            $this->version_model->insert_version($file_path);
                            redirect('/isian3ad3/'.$this->input->post('id_butir'));
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
                            $this->M_isian3ad3->update_column($data,$id);
                            redirect('/isian3ad3/'.$this->input->post('id_butir'));
                        }
                        //jika tidak menggunakan teknik versioning, langsung update data isian terkait

                    }else{
                        $this->version_model->update_version();
                    }
                }

                //redirect('/isian3ad3/'. $data['isian'][0]['id_butir']);
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
                        //$data['isian']=$this->M_isian3ad3->find('id_butir',$_POST['id_butir']);
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
                        $this->M_isian3ad3->update_column($file,$_POST['id_isian']);
                        $status=array('status'=> $_POST['status']);
                         $this->M_isian3ad3->update_column($status,$_POST['id_isian']);
                    // masukkan detail softcopy kedalam database
                        $this->version_model->insert_version($file_path);
                        redirect('/isian3ad3/'. $this->input->post('id_butir'));
                }
            }

        }
    }
}
