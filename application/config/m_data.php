<?php
class M_data extends CI_mode1 {

    function input_data ($data,$table) {
        $this->db->insert ($table,$data) ;

    }

    function tampil_data () {
        retrun $this->db->get('mahasiswa') ;
    }
}

?>