<?php
    class Canje_model extends CI_Model {
    	
    	public function __construct()//
    	{
    		
    	}
        
        public function addCanje()
        {
    		$query = $this->db->query("
                                         INSERT INTO PreCanje
                                         (codPrograma,idParticipante,noTipoEntrega)
                                         VALUES (".$this->session->userdata('programa').",".$this->session->userdata('idPart').",1
                                         )   
                                      ");
    		if ($query)
    		{
                        return $this->db->insert_id();
    		}else{
                        return false;
    		}  
        }
        
        public function addDetCanje($datos,$noFolio)
        {
        	$err = 0;
			$nItem = 1;
			foreach($datos as $d)
			{
	    		$query = $this->db->query("
                                                    INSERT INTO PreCanjeDet (idParticipante,noFolio,idPreCanjeDet,CodPremio,cantidad,PuntosXUnidad)
	    					    VALUES (".$this->session->userdata('idPart').",".$noFolio.",".$nItem.",".$d->id.",".$d->cantidad.",".$d->puntos.")
	                                      ");
				if (!$query)
				{
					$err ++;
				}else{
					$nItem++;
				}
			}
			
			if ($err > 0)
			{
				return false;
			}
			return true;
        }
        
        public function updSaldo($ptsCanje)
        {
        
    		$query = $this->db->query("
    					UPDATE Participante 
                                        SET SaldoActual = SaldoActual - ".$ptsCanje."
                                        WHERE idParticipante = ".$this->session->userdata('idPart')
                                      );
			if ($query)
			{
				return true;
			}else{
				return false;
			}
        }
        
        public function misCanjes()
        {
    		$query = $this->db->query("
                                            SELECT pc.Folio,pc.codEmpresa,pc.codParticipante,pc.Fecha,pc.Estatus,pc.Mensajeria,pc.Guias,pc.FolioWeb,
                                                   pd.codPremio,pd.Cantidad,pd.Descripcion,pd.Marca,pd.Puntos,pd.Total
                                            FROM PartCanje pc
                                            INNER JOIN PartCanjeDet pd ON pd.Folio = pc.Folio AND pd.codPrograma = pc.codPrograma
                                            WHERE pc.codParticipante = ".$this->session->userdata('participante')."
                                              AND pc.codEmpresa = ".$this->session->userdata('empresa')."
                                              AND pc.codPrograma = ".$this->session->userdata('programa')
                                         
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