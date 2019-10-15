<?php
      class Login_model extends CI_Model {
    	
    	      public function __construct(){
                  $this->load->database();
            }
        
            public function login($loginHeinzData){
                  $emp=substr($loginHeinzData['user'],0,5);
                  $part=intval(substr($loginHeinzData['user'],5,3));
                  $query = $this->db->query("
                        CALL spu_hzLogin(".$emp.",".$part.",'".$loginHeinzData['pass']."');
                  ");
                  if ($query->num_rows() == 1){
                        return $query->result_array(); 
                  }else{
                        return false;
                  }
            }
      }
?>
