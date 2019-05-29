<?php
      class Cart_model extends CI_Model {
    	
    	      public function __construct(){}
        
            public function getAwards($idCat){
                  $query = $this->db->query("
                        CALL spu_hzGetAwards(". $this->session->userdata('programa').",".$idCat.");
                  ");
    		      if ($query->num_rows() > 0){
                        return $query->result_array(); 
    		      }else{
                        return false;
    		      }
            }
        
            public function getCategory(){
                  $query = $this->db->query("
                        CALL spu_hzGetCategory(".$this->session->userdata('programa').");
                  ");
    		      if ($query->num_rows() > 0){
                        return $query->result_array(); 
    		      }else{
                        return false;
    		      }
            }
        
            public function getDataItem($idItem){
                  $query = $this->db->query("
                      CALL spu_hzGetDataItem(". $this->session->userdata('programa').",".$idItem.");
                  ");
    		      if ($query->num_rows() > 0){
                        return $query->result_array(); 
    		      }else{
                        return false;
    		      }
            }
      }
?>