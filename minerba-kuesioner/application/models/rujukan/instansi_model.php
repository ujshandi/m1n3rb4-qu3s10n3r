<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *INVISI
*/

class instansi_model extends CI_Model
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
        return $this->db->query("select * from instansi order by instansi_id");    
    }

    function tampil_id()
    {       
        return $this->db->query("select * from instansi");    
    }

    function simpan($nama_instansi,$jenis_instansi)
    {       
        return $this->db->query("insert into instansi (nama_instansi,jenis_instansi) values('".$nama_instansi."','".$jenis_instansi."')");   
    }

    function edit($instansi_id,$nama_instansi,$jenis_instansi)
    {       
        return $this->db->query("update instansi set nama_instansi='".$nama_instansi."',jenis_instansi='".$jenis_instansi."' where instansi_id = '".$instansi_id."'");   
    }
	
    function hapus($instansi_id)
    {
        return $this->db->query( "DELETE  FROM instansi WHERE instansi_id='".$instansi_id."'");
    }

    function pilihdata($instansi_id)
    {
       return $this->db->query( " SELECT * FROM instansi where instansi_id='".$instansi_id."'")->row();
    }

}
?>
