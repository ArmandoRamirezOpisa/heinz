<?php
      class Login_model extends CI_Model {
    	
    	      public function __construct(){
                  $this->load->database();
            }
        
            public function login($loginHeinzData){
                  $emp=substr($loginHeinzData['user'],0,5);
                  $part=intval(substr($loginHeinzData['user'],5,3));
                  $query = $this->db->query("
                        SELECT codPrograma,codEmpresa,codParticipante,Status,Cargo,PrimerNombre,SegundoNombre,
                        ApellidoPaterno,ApellidoMaterno,eMail,SaldoActual,idParticipante,CalleNumero, Colonia, 
                        CP,Ciudad,Estado,Administrador
                        FROM Participante
                        WHERE codPrograma = 43 
                        AND codEmpresa = ".$emp." 
                        AND codParticipante = ".$part." 
                        AND pwd = md5('".$loginHeinzData['pass']."')
                        AND Status = 1
                  ");
                  if ($query->num_rows() == 1){
                        return $query->result_array(); 
                  }else{
                        return false;
                  }
            }
      }
?>
