<?php
class Grafik_model extends CI_Model{

    function get_data_satuan(){
        $query = $this->db->query("SELECT bulan,SUM(satuan) AS satuan FROM komentar GROUP BY bulan");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}
?>
