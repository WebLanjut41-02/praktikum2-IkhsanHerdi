
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paket extends CI_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('model_paket');
	    

		$this->load->helper('url');
	

	    $this->load->library('session');

	  }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = $this->model_paket->getAllpaket();
		$this->session->set_userdata('all_data',$data);
		
		$this->load->view('list_paket');
		}
		
		public function inputakun()
	{
		$data = $this->model_pkun->getAllpaket();
		$this->session->set_userdata('all_data',$data);
   
		$this->load->view('input_paket');
	}

	
	}



?>