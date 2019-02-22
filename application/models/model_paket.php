<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_paket extends CI_Model {

    public function getAllpaket(){

	    $this->db->from('paket');
	    $query = $this->db->get();
	    return $query->result();
	}

    public function inputpaket($tgldatang,$sasaran,$penerima,$isipaket,$tglambil){

        $data = array(
           'tanggal_datang' =>  $tgldatang ,
           'sasaran'=>  $sasaran,
           'penerima' => $penerima,
           'isi_paket' => $isipaket,
           'tanggal_ambil' => $tglambil
       );
           $query = $this->db->insert('model_paket', $data);
           
       }
}
?>