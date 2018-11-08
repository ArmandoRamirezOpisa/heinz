<?php
    class Cart_model extends CI_Model {
    	
    	public function __construct()
    	{
    		
    	}
        
        public function getAwards($idCat)
        {
    		$query = $this->db->query("
                                         SELECT DISTINCT(p.codPremio) as codPremio,p.Nombre_Esp,p.Caracts_Esp,pp.ValorPuntos
                                         FROM Premio p 
                                         INNER JOIN PremioPrograma pp ON pp.codPremio = p.codPremio 
                                         WHERE pp.codPrograma = ". $this->session->userdata('programa')." AND p.CodCategoria = ".$idCat."
                                         ORDER BY pp.ValorPuntos DESC,p.codPremio
                                        
                                      ");
    		if ($query->num_rows() > 0)
    		{
                return $query->result_array(); 
    		}else{
                return false;
    		}
        }
        
        public function getCategory()
        {
    		$query = $this->db->query("
                                        SELECT distinct(cp.nbCategoria) as nbCategoria,cp.CodCategoria  
                                        FROM t213kpCategoriaPremio cp LEFT JOIN Premio p ON p.codCategoria = cp.codCategoria 
                                        WHERE cp.esBaja=0 AND p.codPremio in (SELECT codPremio FROM PremioPrograma WHERE codPrograma = ".$this->session->userdata('programa').") 
                                        ORDER BY cp.nbCategoria
                                                
                                      ");
    		if ($query->num_rows() > 0)
    		{
                return $query->result_array(); 
    		}else{
                return false;
    		}
        }
        
        public function getDataItem($idItem)
        {
    		$query = $this->db->query("
                                         SELECT p.codPremio,p.Nombre_Esp,p.Caracts_Esp,pp.ValorPuntos
                                         FROM Premio p 
                                         INNER JOIN PremioPrograma pp ON pp.codPremio = p.codPremio 
                                         WHERE pp.codPrograma = ". $this->session->userdata('programa')." 
                                         AND p.codPremio = ".$idItem
                                      );
    		if ($query->num_rows() > 0)
    		{
                return $query->result_array(); 
    		}else{
                return false;
    		}
        }
        
    }
?>