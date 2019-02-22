<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_login extends CI_Model {

	 function proseslogin($nama, $nip){

	 	  $this->db->from('karyawan');
		  $this->db->where('Nama',$nama);
		  $this->db->where('NIP',$nip);

		  $query = $this->db->get();
		  
		 return $query->result();
 	}

}
?>