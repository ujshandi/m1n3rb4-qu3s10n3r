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
class alumni extends CI_Controller {
    //put your code here
     function __construct()
    {
        parent::__construct();			

        //	$userdata = array ('userLogin' => $userLogin,'logged_in' => TRUE,'groupId'=>$this->sys_login_model->groupId,'fullName'=>$this->sys_login_model->fullName,'userId'=>$this->sys_login_model->userId,'groupLevel'=>$this->sys_login_model->level);

        $this->load->model('/security/sys_menu_model');
        $this->load->model('/rujukan/alumni_model');
        $this->load->library("utility");
        //$this->load->library("excel_reader2");
        $this->load->helper(array('form', 'url', 'inflector'));
        $this->load->library('form_validation');


    }

    function index()
    {
            $data["isi"]  = 'rujukan/alumni_tambah';
            $this->load->view('admin/index', $data);  
    }

    function tambah()
    {
            $data['isi'] = 'rujukan/alumni_tambah';
            $this->load->view('admin/index',$data);  
    }

    function tampil()
    {
            $data['isi'] = 'rujukan/alumni_tampil';
            $data['result'] = $this->alumni_model->tampildata();
            $this->load->view('admin/index',$data);  
    }

    function grid(){	
        echo $this->alumni_model->easyGrid();
    }

    private function get_form_values() {
            // XXS Filtering enforced for user input
        $data['alumni'] = $this->input->post("alumni", TRUE);
        $data['alumni_id'] = $this->input->post("alumni_id", TRUE);
        
        return $data;
    }

    function save($aksi="", $kode=""){
        $this->load->library('form_validation');
        $data = $this->get_form_values();
        $status = "";
        $result = false;

        //validasi form
        $this->form_validation->set_rules("alumni", 'Nama Alumni', 'trim|required|xss_clean');
        
        $data['pesan_error'] = '';
        if ($this->form_validation->run() == FALSE){
                //jika data tidak valid kembali ke view
                $data["pesan_error"].=(trim(form_error("alumni"," "," "))==""?"":form_error("alumni"," "," ")."<br/>");
                //$data["pesan_error"].=(trim(form_error("jumlah"," "," "))==""?"":form_error("jumlah"," "," ")."<br/>");
                $status = $data["pesan_error"];
        }else {
            if($aksi=="add"){ // add
                if (!$this->alumni_model->isExistKode($data['alumni'])){
                        $result = $this->alumni_model->InsertOnDb($data,$status);
                }
                else
                        $data['pesan_error'] .= 'Nama alumni sudah ada';

            }else { // edit
                $result=$this->alumni_model->UpdateOnDb($data,$kode);
                $data['pesan_error'] .= 'Update : '.$kode;
            }
            $data['pesan_error'] .= $status;	
        }

        if ($result){
                echo json_encode(array('success'=>true));
        } else {
                echo json_encode(array('msg'=>$data['pesan_error']));
        }
//		echo $status;

    }

    function delete($id=''){
        if($id != ''){
            if ($this->alumni_model->isSaveDelete($id))
                    $result = $this->alumni_model->DeleteOnDb($id);
            else
                    $result = false;
            if ($result){
                    echo json_encode(array('success'=>true, 'haha'=>''));
            } else {
                    echo json_encode(array('msg'=>'Data tidak bisa dihapus karena sudah digunakan sebagai referensi data lainnya.', 'data'=> ''));
            }
        }
    }

    public function pdf(){
        $this->load->library('cezpdf');	
        $pdfdata = $this->alumni_model->easyGrid(2);
        if (count($pdfdata)==0){
                echo "Data Tidak Tersedia";
                return;
        }
        //$pdfdata = $pdfdata->rows;
        $pdfhead = array('No.','Kode','Nama Kementerian','Singkatan','Nama Menteri');
        $pdf = new $this->cezpdf($paper='A4',$orientation='potrait');
        $pdf->ezSetCmMargins(1,1,1,1);
        $pdf->selectFont( APPPATH."libraries/fonts/Helvetica.afm" );
//	$pdf->ezText('Biroren Kemenhub',8,array('left'=>'1'));
        $pdf->ezText('Unit Kerja Kementerian',12,array('left'=>'1'));
//	if (($filtahun != null)&&($filtahun != "-1"))
        //$pdf->ezText('Tahun 2012',12,array('left'=>'1'));
//	$pdf->ezText('Tahun 2012',12,array('left'=>'1'));
        // if (($file1 != null)&&($file1 != "-1"))
                // $pdf->ezText($this->eselon1_model->getNamaE1($file1),12,array('left'=>'1'));
        $pdf->ezText('');
        //halaman 
        $pdf->ezStartPageNumbers(550,10,8,'right','',1);

        $options = array(
                'showLines' => 2,
                'showHeadings' => 1,
                'fontSize' => 8,
                'rowGap' => 1,
                'shaded' => 0,
                'colGap' => 5,
                'xPos' => 40,
                'xOrientation' => 'right',
                        'cols'=>array(
                         0=>array('justification'=>'center','width'=>25),
                         1=>array('width'=>50),
                         2=>array('width'=>225),
                         3=>array('width'=>100),
                         4=>array('width'=>125)),
                'width'=>'520'
        );
        $pdf->ezTable( $pdfdata, $pdfhead, NULL, $options );
        $opt['Content-Disposition'] = "Kementerian.pdf";
        $pdf->ezStream($opt);
    }

   /* public function excel()
    {
            echo  $this->alumni_model->easyGrid(3);
    }*/

    public function uplod()
    {
        $this->load->view('rujukan/b');
    }

    

    
    public function do_upload()
    {   
        
            $config['upload_path'] = './temp_upload/';
            $config['allowed_types'] = 'xls';
             
            $this->load->library('upload', $config);
             
            if ( ! $this->upload->do_upload())
            {
                $data = array('error' => $this->upload->display_errors());
            }
            else
            {
                $data = array('error' => false);
                $upload_data = $this->upload->data();
                $this->load->library('excel_reader');
                $this->excel_reader->setOutputEncoding('230787');
                $file =  $upload_data['full_path'];
                $this->excel_reader->read($file);
                error_reporting(E_ALL ^ E_NOTICE);
                // Sheet 1
                $data = $this->excel_reader->sheets[0] ;
                $dataexcel = Array();
                for ($i = 1; $i <= $data['numRows']; $i++) 
                {
                            if($data['cells'][$i][1] == '') break;
                            $dataexcel[$i-1]['nis'] = $data['cells'][$i][1];
                            $dataexcel[$i-1]['nama'] = $data['cells'][$i][2];
                            

                }        
                delete_files($upload_data['file_path']);
                $this->load->model('alumni_model');
                $this->alumni_model->tambahsiswa($dataexcel);
            
            }
        
    }

    function simpan()
    {
        $nik=$this->input->post('nik');
        $nama=$this->input->post('nama');
        $tempat_lahir=$this->input->post('tempat_lahir');
        $tanggal=$this->input->post('tgl_lahir');
        $tgl_lahir=date("Y-m-d", strtotime($tanggal));
        $agama=$this->input->post('agama');
        $sex=$this->input->post('sex');
        $alamat=$this->input->post('alamat');
        $email=$this->input->post('email');
        $telepon=$this->input->post('telepon');
        $instansi=$this->input->post('instansi');
        $jabatan=$this->input->post('jabatan');
        $golongan=$this->input->post('golongan');
        $alamat_kantor=$this->input->post('alamat_kantor');
        $telepon_kantor=$this->input->post('telepon_kantor');
        $provinsi=$this->input->post('provinsi');
        $kota=$this->input->post('kota');
        $klasifikasi_perusahaan=$this->input->post('klasifikasi_perusahaan');
        $riwayat_pendidikan=$this->input->post('riwayat_pendidikan');
        $pendidikan_ln=$this->input->post('pendidikan_ln');
        $pendidikan_khusus=$this->input->post('pendidikan_khusus');
        $riwayat_jabatan=$this->input->post('riwayat_jabatan');
        $riwayat_diklat_minerba=$this->input->post('riwayat_diklat_minerba');
        $this->alumni_model->simpan($nik,$nama,$tempat_lahir,$tgl_lahir,$agama,$sex,$alamat,$email,$telepon,$instansi,$jabatan,$golongan,$alamat_kantor,$telepon_kantor,$provinsi,$kota,$klasifikasi_perusahaan,$riwayat_pendidikan,$pendidikan_ln,$pendidikan_khusus,$riwayat_jabatan,$riwayat_diklat_minerba);
        $data['result'] = $this->alumni_model->tampildata();
        $this->load->view('rujukan/alumni_v',$data); 
    }

    function hapus($alumni_id)
    {
        $this->alumni_model->hapus($alumni_id); 
        $data['result'] = $this->alumni_model->tampildata();
        $this->load->view('rujukan/alumni_v',$data);   
    }

    function tampil_ubah($alumni_id=NULL)     
    {
        $data['result']= $this->alumni_model->pilihdata($alumni_id);
        $this->load->view('rujukan/alumni_v_ubah',$data);
    }

    function import()
    {   
        include_once ( APPPATH."libraries/excel_reader2.php");
        $data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
        $hasildata = $data->rowcount($sheet_index=0);

        $sukses = 0;
        $gagal = 0;

        for ($i=2; $i<=$hasildata; $i++)
        {
            $nik = $data->val($i,2); 
            $nama = $data->val($i,3);
            //$data3 = $data->val($i,4);
            //$created_by = 'Admin'; 
            //$date = date('Y-m-d H:i:s');
            //$rand = rand();

            $this->alumni_model->simpan_upload($nik,$nama);
            $query = "INSERT INTO alumni (alumni_id,nik,nama) VALUES (null,'$nik','$nama')";
            /*$data['isi'] = 'rujukan/alumni_tampil';
            $data['result'] = $this->alumni_model->tampildata();
            $this->load->view('admin/index',$data);  */
            if ($hasildata) $sukses++;
            else $gagal++;
  
            echo "<pre>";
            print_r($query);
            echo "</pre>";
        }

        echo "<b>import data selesai.</b> <br>";
        echo "Data yang berhasil di import : " . $sukses .  "<br>";
        echo "Data yang gagal diimport : ".$gagal .  "<br>";
        echo "back <a href='import.php'>import</a>";
               
    }    

}
