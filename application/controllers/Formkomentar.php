<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formkomentar extends CI_Controller {
	public function index()
	    {
		$nama=$_POST['nama_depan_komentar'];
		$email=$_POST['email_komentar'];
		$isi=$_POST['komentar'];
		$now= date('Y-m-d H:i:s');
		$d = date_parse_from_format("Y-m-d", $now);
		$data = array(
			'nama' =>$nama,
			'email'=>$email,
			'time'=>$now,
			'isi'=>$isi,
			'bulan'=>$d['month'],
			'satuan'=>1
		);
		$this->db->insert('komentar',$data);
		$this->load->view('index');
	}
}
?>
