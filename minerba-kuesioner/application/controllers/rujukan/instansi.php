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
class instansi extends CI_Controller {
    //put your code here
     function __construct()
    {
        parent::__construct();			

        //	$userdata = array ('userLogin' => $userLogin,'logged_in' => TRUE,'groupId'=>$this->sys_login_model->groupId,'fullName'=>$this->sys_login_model->fullName,'userId'=>$this->sys_login_model->userId,'groupLevel'=>$this->sys_login_model->level);

        $this->load->model('/security/sys_menu_model');
        $this->load->model('/rujukan/instansi_model');
        $this->load->model('/rujukan/alumni_model');
        $this->load->library("utility");
        $this->load->helper(array('form', 'url', 'inflector'));
        $this->load->library('form_validation');


    }

    function index()
    {
            $data["isi"]  = 'rujukan/instansi_tambah';
            $data["ket"]  = 'tambah';
            $this->load->view('admin/index', $data);  
    }

    function tambah()
    {
            $data['isi'] = 'rujukan/instansi_tambah';
            $data["ket"]  = 'tambah';
            $this->load->view('admin/index',$data);  
    }

    function tampil()
    {
            $data['isi'] = 'rujukan/instansi_tampil';
            $data['result'] = $this->instansi_model->tampildata();
            $this->load->view('admin/index',$data);   
    }

    
    function simpan()
    {
            $nama_instansi=$this->input->post('nama_instansi');
            $jenis_instansi=$this->input->post('jenis_instansi');
            $this->instansi_model->simpan($nama_instansi,$jenis_instansi);
            $data['result'] = $this->instansi_model->tampildata();
            $data["isi"]  = 'rujukan/instansi_tampil';
            $this->load->view('admin/index', $data);
    }

    function edit()
    {
            
            $nama_instansi=$this->input->post('nama_instansi');
            $jenis_instansi=$this->input->post('jenis_instansi');
            $this->instansi_model->edit($nama_instansi,$jenis_instansi);
            $data['result'] = $this->instansi_model->tampildata();
            $data["isi"]  = 'rujukan/instansi_tampil';
            $this->load->view('admin/index', $data);
    }

    function hapus($instansi_id)
    {
        $this->instansi_model->hapus($instansi_id); 
        $data['isi'] = 'rujukan/instansi_tampil';
        $data['result'] = $this->instansi_model->tampildata();
        $this->load->view('admin/index',$data);  
    }

    function tampil_ubah($instansi_id=NULL)     
    {
        $data['result']= $this->instansi_model->pilihdata($instansi_id);
        $data["isi"]  = 'rujukan/instansi_tambah';
        $data["ket"]  = 'edit';
        $this->load->view('admin/index', $data);
    }       


    function pilihdata($instansi_id=NULL)     
    {
        $data['result']= $this->instansi_model->pilihdata($instansi_id);
        $this->load->view('rujukan/instansi_view', $data);
    } 

}
