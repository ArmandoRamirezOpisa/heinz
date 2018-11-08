<?php
    class Cuenta_model extends CI_Model {
    	
    	public function __construct()
    	{
    		
    	}
        
        public function getEdoCuenta()
        {
    		$query = $this->db->query("
                                         SELECT *
                                         FROM PartMovimientos 
                                         WHERE codPrograma = ".$this->session->userdata('programa')."
                                               AND codParticipante = ".$this->session->userdata('participante')."
                                               AND codEmpresa = ".$this->session->userdata('empresa')."
                                         ORDER BY Act_Fecha DESC
                                        
                                      ");
    		if ($query->num_rows() > 0)
    		{
                return $query->result_array(); 
    		}else{
                return false;
    		}
        }
     }
?>