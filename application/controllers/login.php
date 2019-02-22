
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('model_login');
	    

		$this->load->helper('url');
	    $this->load->helper('form');
	

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
		$this->load->view('login');
	}

	function ceklogin(){
		  if(isset($_POST['submit'])){
		   $nama 	= $this->input->post('nama',true);
		   $nip	= $this->input->post('nip',true);
		   $cek 	= $this->model_login->proseslogin($nama, $nip);

		   $hasil = count($cek);

		   if($hasil>0){
				    $login = $this->db->get_where('karyawan',array('Nama'=>$nama, 'NIP' => $nip))->row();
				    
				    
				    	
                        $data = array('udhmasuk' => true,
                       'Nama' => $login->Nama, 'NIP' => $login->NIP);
             
                         $this->session->set_userdata('Nama', $login->Nama);
                            $_SESSION['data'] = $data;

                              $pesan = "Login Berhasil";
                              echo "<script type='text/javascript'>alert('$pesan'); </script>";

                         $this->load->view('home');
		   }else{
		   
		    echo "gagal";
		    redirect('login');
		   }    
		  
    }
    }
    

	public function logout(){

		$this->session->sess_destroy();
		$this->session->unset_userdata('user_id');

		$pesan = "Logout Berhasil";
		echo "<script type='text/javascript'>alert('$pesan'); </script>";
		$this->load->view('login');
		
	
	}
		
	}



?>