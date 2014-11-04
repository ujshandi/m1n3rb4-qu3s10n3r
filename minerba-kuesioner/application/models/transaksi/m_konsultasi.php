<?php
class M_konsultasi extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    function tambahdata($nama_komponen)
    {    	
		return $this->db->query("insert into komponen (nama_komponen) values('".$nama_komponen."')");	
    }
	function tampildata($perPage,$uri)
    {    	
		$getData = $this->db->query("select * from komponen order by id_komponen DESC limit $uri,$perPage");
		if($getData->num_rows() > 0)
		{
		return $getData;
		}
		else
		{
		return null;
		}
    
    }
	
	function pilihdata($id_komponen)
	{
	   return $this->db->query( " SELECT * FROM komponen where id_komponen='".$id_komponen."'")->row();
	}
	
	function ubahdata($id_komponen,$data)
	{
		$this->db->where('id_komponen', $id_komponen);
		$this->db->update('komponen', $data); 
		
    }
	function hapusdata($id_komponen)
	{
		return $this->db->query( "DELETE  FROM komponen WHERE id_komponen='".$id_komponen."'");
	}
	
	function caridata($nama_komponen)
	{
		$sql="SELECT * FROM pengguna  where komponen like'%".$nama_komponen."%'";
		return $this->db->query($sql);
	}
	
	function tampil()
    {    	
		return $this->db->query("select * from permasalahan where id_komponen=1");	
    }

    function tmp_analisa($kode_konsultasi,$tmp)
    {    	
		return $this->db->query("insert into tmp_analisa values ('".$kode_konsultasi."','".$tmp."')");	
    }

    function getKode()
    {    	
		return $this->db->query("select * from tmp_analisa order by kode_konsultasi DESC")->row();	
    }

     function getNIP($nip)
    {    	
		return $this->db->query("select * from pegawai where nip ='".$nip."'")->row();	
    }
    
    function tampilpertanyaan($id_komponen)
	{
	   return $this->db->query( " SELECT * FROM permasalahan where id_komponen='".$id_komponen."'");
	}
}


	