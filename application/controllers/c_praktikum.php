<?php  

class c_praktikum extends CI_Controller
{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			
		}

		public function index()
		{
			$data['judul'] = "awal";
			$this->load->view('v_index');
		}
		public function input()
		{
			$user= $this->input->post('user');
			$pass= $this->inpur->post('pass');
		}
}
?>