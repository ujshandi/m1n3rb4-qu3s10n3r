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
        return $this->db->query("SELECT * FROM instansi order by instansi_id");    
    }

    function tampil_id()
    {       
        return $this->db->query("SELECT * FROM instansi");    
    }

    function simpan($nama_instansi,$jenis_instansi)
    {       
        return $this->db->query("INSERT INTO instansi (nama_instansi,jenis_instansi) values('".$nama_instansi."','".$jenis_instansi."')");   
    }

    public function edit($instansi_id, $nama_instansi, $jenis_instansi) 
    {
        $this->db->where('instansi_id',$instansi_id);
        $this->db->set('nama_instansi',$nama_instansi);
        $this->db->set('jenis_instansi',$jenis_instansi);
        return $this->db->update('instansi');
    }
	
    function hapus($instansi_id)
    {
        return $this->db->query( "DELETE  FROM instansi WHERE instansi_id='".$instansi_id."'");
    }

    function pilihdata($instansi_id)
    {
       return $this->db->query( "SELECT * FROM instansi where instansi_id='".$instansi_id."'")->row();
    }

}
?>
