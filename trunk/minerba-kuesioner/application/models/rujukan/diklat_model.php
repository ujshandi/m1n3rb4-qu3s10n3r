<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *INVISI
*/

class Diklat_model extends CI_Model
{	
	/**
	* constructor
	*/
    public function __construct()    {
        parent::__construct();
		//$this->CI =& get_instance();
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
	    
    function tampildata()
    {       
        return $this->db->query("select * from diklat order by diklat_id");    
    }

    function tampil_id()
    {       
        return $this->db->query("select * from diklat");    
    }

    function simpan($judul_diklat,$jenis_diklat,$tahun,$angkatan)
    {       
        return $this->db->query("insert into diklat (judul_diklat,jenis_diklat,tahun,angkatan) values('".$judul_diklat."','".$jenis_diklat."','".$tahun."','".$angkatan."')");   
    }
	
    function hapus($diklat_id)
    {
        return $this->db->query( "DELETE  FROM diklat WHERE diklat_id='".$diklat_id."'");
    }

    function pilihdata($diklat_id)
    {
       return $this->db->query( " SELECT * FROM diklat where diklat_id='".$diklat_id."'")->row();
    }

}
?>
