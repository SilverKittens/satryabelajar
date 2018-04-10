<?php
class Grafik_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('grafik_model');
    }
    function index(){
        $x['data']=$this->grafik_model->get_data_satuan();
        $this->load->view('grafik_view',$x);
    }
}
