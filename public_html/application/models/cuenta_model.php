<?php
      class Cuenta_model extends CI_Model {
    	
    	      public function __construct(){}
        
            public function getEdoCuenta(){
                  $query = $this->db->query("
                        CALL spu_hzGetEdoCuenta(".$this->session->userdata('programa').",".$this->session->userdata('participante').",".$this->session->userdata('empresa').");
                  ");
    		      if ($query->num_rows() > 0){
                        return $query->result_array(); 
    		      }else{
                        return false;
    		      }
            }
      }
?>