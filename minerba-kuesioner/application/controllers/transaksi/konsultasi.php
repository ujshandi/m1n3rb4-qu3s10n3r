<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konsultasi extends CI_Controller 
{ 
    function __construct()
    {
        parent::__construct();
		$this->load->model("transaksi/m_konsultasi");
		//$this->load->model("m_penanganan");
		//$this->load->model("m_jeniskerusakan");
        //$this->load->model("m_permasalahan");
        //$this->load->model("m_komponen");
        $this->load->library('session');
		$this->load->library('pagination');
    }
    function index()
    {
		$data['isi'] = 'home/home';
        $this->load->view("home/index",$data);
    }
    function tambah_data()
    {
    	$tmp="";
    	for ($i=0; $i <3 ; $i++) { 
    		$id=$_POST["id_permasalahan"][$i];
            $kode_konsultasi=$_POST["kode_konsultasi"];
            $this->m_konsultasi->tmp_analisa($kode_konsultasi,$id);
            $jawaban=$_POST["jawaban"][$i];
    		if($jawaban=="ya")
    		{
    			    
    			if($tmp=="")
    			{
    				$tmp=$id;
    			}
    			else
    			{
    				$tmp=$tmp."$id";
    			}
           	
    		}
    		

    	}
    	$data['penanganan']=$this->m_penanganan->getPenanganan($tmp);
        $data['permasalahan']=$this->m_permasalahan->getPermasalahan($kode_konsultasi);
        $data['isi']= 'home/hasil_konsultasi';
    	$this->load->view("home/index",$data);
        $this->session->sess_destroy();
    }

    function validasi()
    {
        $nip=$this->input->post('nip');
        $hasil=$this->m_konsultasi->getNIP($nip);
        if ($hasil != NULL)
        {
            $newdata = array(
                'nip' => $hasil->nip,
                'nama'=> $hasil->nama_pegawai );
            $this->session->set_userdata($newdata);
            $data['result'] = $this->m_komponen->tampil();
            $data['pegawai'] = $this->m_konsultasi->getNIP($nip);
            $data['isi'] = 'home/konsultasi';
            $this->load->view("home/index",$data);
        }
        else
        {
            $data['isi'] = 'home/validasi';
            $this->load->view("home/index",$data);
        }
    }

    function tampil_pertanyaan($id_komponen=NULL)     
        {
        $data['result']= $this->m_konsultasi->tampilpertanyaan($id_komponen);
        $data['kode']=$this->m_konsultasi->getKode();
        $data['isi']='home/tampil_pertanyaan';
        $this->load->view('home/index', $data);
        }
    
}
