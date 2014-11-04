<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
   }
  public function index()
	{
	   $data['isi'] = 'home/home';
	   $this->load->view('home/index', $data);
	}
}