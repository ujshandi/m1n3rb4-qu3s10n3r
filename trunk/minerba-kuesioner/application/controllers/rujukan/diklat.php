<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of alumni
 *
 * @author chan
 */
class diklat extends CI_Controller {
    //put your code here
     function __construct()
    {
        parent::__construct();			

        //	$userdata = array ('userLogin' => $userLogin,'logged_in' => TRUE,'groupId'=>$this->sys_login_model->groupId,'fullName'=>$this->sys_login_model->fullName,'userId'=>$this->sys_login_model->userId,'groupLevel'=>$this->sys_login_model->level);

        $this->load->model('/security/sys_menu_model');
        $this->load->model('/rujukan/diklat_model');
        $this->load->model('/rujukan/alumni_model');
        $this->load->library("utility");
        $this->load->helper(array('form', 'url', 'inflector'));
        $this->load->library('form_validation');


    }

    function index()
    {
            $data["isi"]  = 'rujukan/diklat_tambah';
            $data['result'] = $this->diklat_model->tampildata();
            $data["ket"]  = 'tambah';
            $this->load->view('admin/index', $data);  
    }

    function tambah()
    {
            $data['isi'] = 'rujukan/diklat_tambah';
            $data["ket"]  = 'tambah';
            $this->load->view('admin/index',$data);  
    }

    function tampil()
    {
            $data['isi'] = 'rujukan/diklat_tampil';
            $data['result'] = $this->diklat_model->tampildata();
            $this->load->view('admin/index',$data);   
    }

    
    function simpan()
    {
            $judul_diklat=$this->input->post('judul_diklat');
            $jenis_diklat=$this->input->post('jenis_diklat');
            $tahun=$this->input->post('tahun');
            $angkatan=$this->input->post('angkatan');
            $this->diklat_model->simpan($judul_diklat,$jenis_diklat,$tahun,$angkatan);
            $data['result'] = $this->diklat_model->tampildata();
            $data["isi"]  = 'rujukan/diklat_tampil';
            $this->load->view('admin/index', $data);
    }

    function hapus($diklat_id)
    {
        $this->diklat_model->hapus($diklat_id); 
        $data['isi'] = 'rujukan/diklat_tampil';
        $data['result'] = $this->diklat_model->tampildata();
        $this->load->view('admin/index',$data);  
    }

    function tampil_ubah($diklat_id=NULL)     
    {
        $data['result']= $this->diklat_model->pilihdata($diklat_id);
        $data["isi"]  = 'rujukan/diklat_tambah';
        $data["ket"]  = 'edit';
        $this->load->view('admin/index', $data);
    }       


    function pilihdata($diklat_id=NULL)     
    {
        $data['result']= $this->diklat_model->pilihdata($diklat_id);
        $this->load->view('rujukan/diklat_view', $data);
    } 

}
