<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Controller {
	public function deleteData($id= NULL)
	    {
		$this->db->where('id', $id);
		$this->db->delete('komentar');
		$this->load->view('index');
	}
}
?>
