<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url','html');
	}
 
	public function index(){		
		$data['judul'] = "Home";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}
 
	public function about(){		
		$data['judul'] = "Halaman about";
		$this->load->view('v_header',$data);
		$this->load->view('v_about',$data);
		$this->load->view('v_footer',$data);
	}

	public function gallery(){		
		$data['judul'] = "Halaman gallery";
		$this->load->view('v_header',$data);
		$this->load->view('v_gallery',$data);
		$this->load->view('v_footer',$data);
	}

	public function group(){		
		$data['judul'] = "Halaman gallery";
		$this->load->view('navbar',$data);
		$this->load->view('sms-group/form',$data);
		$this->load->view('footer',$data);
	}

}