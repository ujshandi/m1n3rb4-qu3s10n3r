<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
   }
  public function index()
	{
	   $data["isi"]  = 'rujukan/alumni_tambah';
       $this->load->view('admin/index', $data);  
	}
}