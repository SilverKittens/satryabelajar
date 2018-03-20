<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formkomentar extends CI_Controller {
	public function index()
	    {
		$nama=$_POST['nama_depan_komentar'];
		$email=$_POST['email_komentar'];
		$isi=$_POST['komentar'];
		$now= date('Y-m-d H:i:s');
		$data = array(
			'nama' =>$nama,
			'email'=>$email,
			'time'=>$now,
			'isi'=>$isi
		);
		$this->db->insert('komentar',$data);
		$this->load->view('index');
	}

}
?>
