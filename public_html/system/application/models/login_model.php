<?php
    class Login_model extends CI_Model {
    	
    	public function __construct()
    	{
    		
    	}

        
        public function login($datos)
        {
       		$emp=substr($datos["usuario"],0,5);
    		$part=intval(substr($datos["usuario"],5,3));
			
    		$query = $this->db->query("
                                         SELECT codPrograma,codEmpresa,codParticipante,Status,Cargo,PrimerNombre,SegundoNombre,ApellidoPaterno,ApellidoMaterno,eMail,SaldoActual,idParticipante,
                                         CalleNumero, Colonia, CP,Ciudad,Estado
                                         FROM Participante
                                         WHERE codPrograma = 40 AND codEmpresa = ".$emp." AND codParticipante = ".$part." AND pwd = '".$datos["password"]."'                                        
                                      ");
    		if ($query->num_rows() == 1)
    		{
                return $query->result_array(); 
    		}else{
                return false;
    		}
        }
	}
?>