<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *INVISI
*/

class Alumni_model extends CI_Model
{	
	/**
	* constructor
	*/
    public function __construct()    {
        parent::__construct();
		//$this->CI =& get_instance();
    }
	
    public function easyGrid($purpose=1){
        $lastNo = isset($_POST['lastNo']) ? intval($_POST['lastNo']) : 0;
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;  
        $limit = isset($_POST['rows']) ? intval($_POST['rows']) : 10;  

        $count = $this->GetRecordCount();
        $response = new stdClass();
        $response->total = $count;
        $sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'alumni';  
        $order = isset($_POST['order']) ? strval($_POST['order']) : 'asc';  
        $offset = ($page-1)*$limit;  
        $pdfdata = array();
        if ($count>0){
            $this->db->order_by($sort." ".$order );
            if($purpose==1){$this->db->limit($limit,$offset);}
            $this->db->select("*",false);
            $this->db->from('alumni');
            $query = $this->db->get();

            $i=0;
            $no =$lastNo;
            foreach ($query->result() as $row)            {
                $no++;
                $response->rows[$i]['no']= $no;
                $response->rows[$i]['alumni_id']=$row->alumni_id;
                $response->rows[$i]['nik']=$row->nik;
                $response->rows[$i]['nama']=$row->nama;
                $response->rows[$i]['tempat_lahir']=$row->tempat_lahir;
                $response->rows[$i]['tgl_lahir']=$row->tgl_lahir;
                $response->rows[$i]['agama']=$row->agama;
                $response->rows[$i]['sex']=$row->sex;
                $response->rows[$i]['alamat']=$row->alamat;
                $response->rows[$i]['email']=$row->email;
                $response->rows[$i]['telepon']=$row->telepon;
                $response->rows[$i]['instansi']=$row->instansi;
                $response->rows[$i]['jabatan']=$row->jabatan;
                $response->rows[$i]['golongan']=$row->golongan;
                $response->rows[$i]['alamat_kantor']=$row->alamat_kantor;
                $response->rows[$i]['telepon_kantor']=$row->telepon_kantor;
                $response->rows[$i]['provinsi']=$row->provinsi;
                $response->rows[$i]['kota']=$row->kota;
                $response->rows[$i]['klasifikasi_perusahaan']=$row->klasifikasi_perusahaan;
                $response->rows[$i]['riwayat_pendidikan']=$row->riwayat_pendidikan;
                $response->rows[$i]['pendidikan_ln']=$row->pendidikan_ln;
                $response->rows[$i]['pendidikan_khusus']=$row->pendidikan_khusus;
                $response->rows[$i]['riwayat_jabatan']=$row->riwayat_jabatan;
                $response->rows[$i]['riwayat_diklat_minerba']=$row->riwayat_diklat_minerba;

                //utk kepentingan export pdf===================
                $pdfdata[] = array($no,$response->rows[$i]['nik'],$response->rows[$i]['nama'],$response->rows[$i]['instansi']);
        //============================================================
                $i++;
            } 

            $response->lastNo = $no;
                //$query->free_result();
        }else {
            $response->rows[$count]['no']='';
            $response->rows[$count]['alumni_id']='';
            $response->rows[$count]['nik']='';
            $response->rows[$count]['nama']='';
            $response->rows[$count]['tempat_lahir']='';
            $response->rows[$count]['tgl_lahir']='';
            $response->rows[$count]['agama']='';
            $response->rows[$count]['sex']='';
            $response->rows[$count]['alamat']='';
            $response->rows[$count]['email']='';
            $response->rows[$count]['telepon']='';
            $response->rows[$count]['instansi']='';
            $response->rows[$count]['jabatan']='';
            $response->rows[$count]['golongan']='';
            $response->rows[$count]['alamat_kantor']='';
            $response->rows[$count]['telepon_kantor']='';
            $response->rows[$count]['provinsi']='';
            $response->rows[$count]['kota']='';
            $response->rows[$count]['klasifikasi_perusahaan']='';
            $response->rows[$count]['riwayat_pendidikan']='';
            $response->rows[$count]['pendidikan_ln']='';
            $response->rows[$count]['pendidikan_khusus']='';
            $response->rows[$count]['riwayat_jabatan']='';
            $response->rows[$count]['riwayat_diklat_minerba']='';
            
            $response->lastNo = 0;	
        }

        if ($purpose==1) //grid normal
            return json_encode($response);
        else if($purpose==2){//pdf
            return $pdfdata;
        }
        else if($purpose==3){//to excel
                //tambahkan header kolom
            $colHeaders = array("No.","NIK","Nama","Instansi");		
            //var_dump($query->result());die;
            to_excel($query,"alumni",$colHeaders);
        }
        else if ($purpose==4) { //WEB SERVICE
            return $response;
        }

    }
	
	//jumlah data record buat paging
    public function GetRecordCount(){
        $query=$this->db->from('alumni');
        return $this->db->count_all_results();
        $this->db->free_result();
    }

    public function isExistKode($kode=null){	
        if ($kode!=null)//utk update
            $this->db->where('alumni_id',$kode); //buat validasi

        $this->db->select('*');
        $this->db->from('alumni');

        $query = $this->db->get();
        $rs = $query->num_rows() ;		
        $query->free_result();
        return ($rs>0);
    }
	
    public function isSaveDelete($kode){			
       /* $this->db->where('bidang',$kode); //buat validasi		
        $this->db->select('*');
        $this->db->from('tbl_kegiatan');

        $query = $this->db->get();
        $rs = $query->num_rows() ;		
        $query->free_result();
        $isSave = ($rs==0);
        if ($isSave){
            $this->db->flush_cache();
            $this->db->where('bidang',$kode); //buat validasi		
            $this->db->select('*');
            $this->db->from('tbl_iku_kl');

            $query = $this->db->get();
            $rs = $query->num_rows() ;		
            $query->free_result();
            $isSave = ($rs==0);
        }*/
        $isSave = true;
        return $isSave;
    }
	
	//insert data
    public function InsertOnDb($data,& $error) {
            //query insert data		
        $this->db->set('nik',$data['nik']);
        $this->db->set('nama',$data['nama']);
        $this->db->set('tempat_lahir',$data['tempat_lahir']);
        $this->db->set('tgl_lahir',$data['tgl_lahir']);
        $this->db->set('agama',$data['agama']);
        $this->db->set('sex',$data['sex']);
        $this->db->set('alamat',$data['alamat']);
        $this->db->set('email',$data['email']);
        $this->db->set('telepon',$data['telepon']);
        $this->db->set('instansi',$data['instansi']);
        /*$this->db->set('jabatan',$data['jabatan']);
        $this->db->set('golongan',$data['golongan']);
        $this->db->set('alamat_kantor',$data['alamat_kantor']);
        $this->db->set('telepon_kantor',$data['telepon_kantor']);
        $this->db->set('provinsi',$data['provinsi']);
        $this->db->set('kota',$data['kota']);
        $this->db->set('klasifikasi_perusahaan',$data['klasifikasi_perusahaan']);
        $this->db->set('riwayat_pendidikan',$data['riwayat_pendidikan']);
        $this->db->set('pendidikan_ln',$data['pendidikan_ln']);
        $this->db->set('pendidikan_khusus',$data['pendidikan_khusus']);
        $this->db->set('riwayat_jabatan',$data['riwayat_jabatan']);
        $this->db->set('riwayat_diklat_minerba',$data['riwayat_diklat_minerba']);*/
        

        $result = $this->db->insert('alumni');
        $errNo   = $this->db->_error_number();
        $errMess = $this->db->_error_message();
            $error = $errMess;
            //var_dump($errMess);die;
        log_message("error", "Problem Inserting to : ".$errMess." (".$errNo.")"); 
            //return
            if($result) {
                    return TRUE;
            }else {
                    return FALSE;
            }
    }

	//update data
    public function UpdateOnDb($data, $kode) {
        $this->db->where('alumni_id',$kode);
        //query insert data		
        $this->db->set('nik',$data['nik']);
        $this->db->set('nama',$data['nama']);
        $this->db->set('tempat_lahir',$data['tempat_lahir']);
        $this->db->set('tgl_lahir',$data['tgl_lahir']);
        $this->db->set('agama',$data['agama']);
        $this->db->set('sex',$data['sex']);
        $this->db->set('alamat',$data['alamat']);
        $this->db->set('email',$data['email']);
        $this->db->set('telepon',$data['telepon']);
        $this->db->set('instansi',$data['instansi']);
        $this->db->set('jabatan',$data['jabatan']);
        $this->db->set('golongan',$data['golongan']);
        $this->db->set('alamat_kantor',$data['alamat_kantor']);
        $this->db->set('telepon_kantor',$data['telepon_kantor']);
        $this->db->set('provinsi',$data['provinsi']);
        $this->db->set('kota',$data['kota']);
        $this->db->set('klasifikasi_perusahaan',$data['klasifikasi_perusahaan']);
        $this->db->set('riwayat_pendidikan',$data['riwayat_pendidikan']);
        $this->db->set('pendidikan_ln',$data['pendidikan_ln']);
        $this->db->set('pendidikan_khusus',$data['pendidikan_khusus']);
        $this->db->set('riwayat_jabatan',$data['riwayat_jabatan']);
        $this->db->set('riwayat_diklat_minerba',$data['riwayat_diklat_minerba']);
        
        $result=$this->db->update('alumni');

        $errNo   = $this->db->_error_number();
        $errMess = $this->db->_error_message();
            //var_dump($errMess);die;
            //return
        if($result) {
            return TRUE;
        }else {
            return FALSE;
        }
    }
	
	//hapus data
    public function DeleteOnDb($id){
        $this->db->flush_cache();
        $this->db->where('alumni_id', $id);
        $result = $this->db->delete('alumni'); 

        $errNo   = $this->db->_error_number();
        $errMess = $this->db->_error_message();
        $error = $errMess;
        //var_dump($errMess);die;
        log_message("error", "Problem Update to : ".$errMess." (".$errNo.")"); 
		//return
		
        if($result) {
            return TRUE;
        }else {
            return FALSE;
        }
    }
	
    public function getListBidang($objectId="",$isAjax=false){		
        $this->db->flush_cache();
        $this->db->select('*');
        $this->db->from('tbl_bidang');
        $this->db->order_by('bidang');

        $que = $this->db->get();

        $out = '<select name="bidang_id" id="bidang_id'.$objectId.'" class="easyui-validatebox" required="true">';

        foreach($que->result() as $r){
                $out .= '<option value="'.$r->bidang_id.'">'.$r->bidang.'</option>';
        }

        $out .= '</select>';
		if ($isAjax){
			echo $out;
		}
		else {
			return $out;
		}
    }
    
    public function getListBidangFilter($objectId="",$isAjax=false){		
        $this->db->flush_cache();
        $this->db->select('*');
        $this->db->from('tbl_bidang');
        $this->db->order_by('bidang');

        $que = $this->db->get();

        $out = '<select name="filter_bidang_id" id="filter_bidang_id'.$objectId.'" class="easyui-validatebox" required="true">';
        $out .= '<option value="-1">Semua Bidang</option>';    
        foreach($que->result() as $r){
                $out .= '<option value="'.$r->bidang_id.'">'.$r->bidang.'</option>';
        }

        $out .= '</select>';
		if ($isAjax){
			echo $out;
		}
		else {
			return $out;
		}
    }


    function insert_chapter($dataarray)
    {
        for($i=1;$i<count($dataarray);$i++)
        {
            $data = array(
                'chapternumber'=>$dataarray[$i]['chapternumber'],
                'title'=>$dataarray[$i]['title'],
                'text1'=>$dataarray[$i]['text1'],
                'text2'=>$dataarray[$i]['text2'],
                'dateinserted' => date('Y-m-d H:i:s', now())
            );
            $this->db->insert('content', $data);
        }
    }

    function update_chapter($dataarray)
    {
        for($i=1;$i<count($dataarray);$i++)
        {
            $data = array(
                'chapternumber'=>$dataarray[$i]['chapternumber'],
                'title'=>$dataarray[$i]['title'],
                'text1'=>$dataarray[$i]['text1'],
                'text2'=>$dataarray[$i]['text2'],
                'dateupdated' => date('Y-m-d H:i:s', now())
            );
            $param = array(
               'chapternumber'=>$dataarray[$i]['chapternumber']
            );
            $this->db->where($param);
           return $this->db->update('content',$data);   
        }
    }
    function search_chapter($dataarray)
    {
        for($i=1;$i<count($dataarray);$i++)
        {
            $search = array(
                'chapternumber'=>$dataarray[$i]['chapternumber']
            );
        }
        $data = array();
        $this->db->where($search);
        $this->db->limit(1);
        $Q = $this->db->get('content');
        if($Q->num_rows() > 0){
        $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }

    function tambahsiswa($dataarray)
    {
        for($i=0;$i<count($dataarray);$i++){
            $data = array(
                'nis'=>$dataarray[$i]['nis'],
                'nama'=>$dataarray[$i]['nama']
            );
            $this->db->insert('siswa', $data);
        }
    }


    function tampildata()
    {       
        return $this->db->query("select * from alumni");    
    }

    function simpan($nik,$nama,$tempat_lahir,$tgl_lahir,$agama,$sex,$alamat,$email,$telepon,$instansi,$jabatan,$golongan,$alamat_kantor,$telepon_kantor,$provinsi,$kota,$klasifikasi_perusahaan,$riwayat_pendidikan,$pendidikan_ln,$pendidikan_khusus,$riwayat_jabatan,$riwayat_diklat_minerba)
    {       
        return $this->db->query("insert into alumni (alumni_id, nik, nama, tempat_lahir, tgl_lahir,agama,sex,alamat,email,telepon,instansi,jabatan,golongan,alamat_kantor,telepon_kantor,provinsi,kota,klasifikasi_perusahaan,riwayat_pendidikan,pendidikan_ln,pendidikan_khusus,riwayat_jabatan,riwayat_diklat_minerba)
            values('NULL','".$nik."',
                '".$nama."',
                '".$tempat_lahir."',
                '".$tgl_lahir."',
                '".$agama."',
                '".$sex."',
                '".$alamat."',
                '".$email."',
                '".$telepon."',
                '".$instansi."',
                '".$jabatan."',
                '".$golongan."',
                '".$alamat_kantor."',
                '".$telepon_kantor."',
                '".$provinsi."',
                '".$kota."',
                '".$klasifikasi_perusahaan."',
                '".$riwayat_pendidikan."',
                '".$pendidikan_ln."',
                '".$pendidikan_khusus."',
                '".$riwayat_jabatan."',
                '".$riwayat_diklat_minerba."')");   
    }

    function simpan_upload($nik,$nama)
    {       
        return $this->db->query("insert into alumni (alumni_id,nik,nama) values('NULL','".$nik."','".$nama."')");   
    }
	
    function hapus($alumni_id)
    {
        return $this->db->query( "DELETE  FROM alumni WHERE alumni_id='".$alumni_id."'");
    }

    function pilihdata($alumni_id)
    {
       return $this->db->query( " SELECT * FROM alumni where alumni_id='".$alumni_id."'")->row();
    }

}
?>
