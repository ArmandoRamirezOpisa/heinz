<?php
        class Canje_model extends CI_Model {
    	
    	        public function __construct(){}
        
                public function addCanje(){
    		        $query = $this->db->query("
                                INSERT INTO PreCanje
                                (codPrograma,idParticipante,noTipoEntrega)
                                VALUES (".$this->session->userdata('programa').",".$this->session->userdata('idPart').",1)
                        ");
    		        if ($query){
                                return $this->db->insert_id();
    		        }else{
                                return false;
    		        }
                }
        
                public function addDetCanje($datos,$noFolio){
        	        $err = 0;
		        $nItem = 1;
			foreach($datos as $d){
	    		        $query = $this->db->query("
                                        INSERT INTO PreCanjeDet (idParticipante,noFolio,idPreCanjeDet,CodPremio,cantidad,PuntosXUnidad)
                                        VALUES (".$this->session->userdata('idPart').",".$noFolio.",".$nItem.",".$d->id.",".$d->cantidad.",".$d->puntos."/".$d->cantidad.")
	                        ");
				if (!$query){
					$err ++;
				}else{
					$nItem++;
				}
			}
			if ($err > 0){
			        return false;
			}
			return true;
                }
        
                public function updSaldo($ptsCanje){
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

        public function misPreCanjes()
        {
            $query=$this->db->query(
                                        "
                                         SELECT p.idCanje,p.feSolicitud,d.Cantidad,pr.Nombre_Esp,d.Status,d.Mensajeria,d.NumeroGuia,d.Cantidad*d.PuntosXUnidad *-1 as puntos
                                            FROM PreCanje p
                                            INNER JOIN PreCanjeDet d on d.noFolio = p.idCanje
                                            INNER join Premio pr ON pr.codPremio = d.CodPremio 
                                            WHERE  
                                                 p.codPrograma = ".$this->session->userdata('programa')."
                                                AND p.idParticipante = ".$this->session->userdata('idPart')."
                                                UNION ALL SELECT p.NoFolio as idCanje, p.feMov as feSolicitud,null as Cantidad, dsMov as Nombre_Esp, '-' as Status,'-' as Mensajeria,'-' as NumeroGuia,noPuntos as puntos from PartMovsRealizados p  where p.idParticipante = ".$this->session->userdata('idPart')."
                                                
                                                
                                            ORDER BY 2,1
                                        "
                                    );
            if ($query->num_rows() > 0)
            {
                    return $query->result_array(); 
            }else{
                    return false;
            }
        }
        



//MauroMorales 11/7/2017 para el reporte


 public function misCanjesGlobales()
        {
            $query=$this->db->query(
                                        "
                                        SELECT c.idCanje as FolioWeb, c.feSolicitud as FechaOrden, e.nombreOficial as Distribuidora, concat(p.PrimerNombre,' ', p.SegundoNombre,' ' ,p.ApellidoPaterno,' ',p.ApellidoMaterno) as Nombre
,d.codPremio, d.Cantidad, pr.Nombre_Esp as Premio, d.PuntosXUnidad*d.Cantidad as Puntos
,d.PuntosXUnidad*d.Cantidad*0.0159 as Total
FROM opisa_opisa.PreCanje c JOIN opisa_opisa.PreCanjeDet d on c.idParticipante=d.idParticipante and c.idCanje=d.noFolio
JOIN opisa_opisa.Participante p on p.idParticipante=c.idParticipante
JOIN opisa_opisa.Empresa e on e.codPrograma=p.codPrograma and e.codEmpresa=p.codEmpresa
JOIN opisa_opisa.Premio pr on pr.codPremio=d.codPremio
WHERE c.codPrograma = 43 and feSolicitud >= '2017/04/01'
ORDER BY 1
                                        "
                                    );
            if ($query->num_rows() > 0)
            {
                    return $query->result_array(); 
            }else{
                    return false;
            }
        }
        

 public function ParticipantesActivos()
        {
            $query=$this->db->query(
                                        "
SELECT e.numCliente as NumCliente, p.codEmpresa as CodEmpOPI
,e.nombreoficial as Cliente, p.codParticipante as CodParOPI
,p.primernombre,p.segundonombre,p.apellidopaterno,p.apellidomaterno
,p.SaldoActual
FROM Participante p JOIN Empresa e on p.codPrograma=e.codPrograma and p.codEmpresa=e.codEmpresa
WHERE p.codPrograma = 43 and p.status=1
ORDER BY e.NombreOficial, p.codParticipante
                                        "
                                    );
            if ($query->num_rows() > 0)
            {
                    return $query->result_array(); 
            }else{
                    return false;
            }
        }
        
 public function ListaDePremios()
        {
            $query=$this->db->query(
                                        "
SELECT pp.codPremio, pr.Nombre_Esp, pr.Marca, pr.Modelo, pp.ValorPuntos
FROM PremioPrograma pp JOIN Premio pr on pp.codPremio=pr.codPremio
                                        "
                                    );
            if ($query->num_rows() > 0)
            {
                    return $query->result_array(); 
            }else{
                    return false;
            }
        }

        
 public function PuntosObtenidosXmes()
        {
            $query=$this->db->query(
                                        "
SELECT year(feMov) as Año, month(feMov) as Mes, sum(noPuntos) as Puntos, sum(noPuntos*0.0159) as Costo
FROM PartMovsRealizados m join Participante p on m.idParticipante=p.idParticipante 
WHERE p.codPrograma=43 and feMov >= '2017-08-01' 
GROUP BY year(feMov), month(feMov)
                                        "
                                    );
            if ($query->num_rows() > 0)
            {
                    return $query->result_array(); 
            }else{
                    return false;
            }
        }

 public function PuntosRedimidos()
        {
            $query=$this->db->query(
                                        "
SELECT year(feSolicitud) as Año, month(feSolicitud) as Mes, sum(PuntosXUnidad*d.Cantidad) as Puntos
,sum(d.PuntosXUnidad*d.Cantidad*0.0159) as Costo
FROM opisa_opisa.PreCanje c JOIN opisa_opisa.PreCanjeDet d on c.idParticipante=d.idParticipante and c.idCanje=d.noFolio
WHERE c.codPrograma = 43 and feSolicitud >= '2017/04/01'
GROUP BY year(feSolicitud), month(feSolicitud)
ORDER BY 1
                                        "
                                    );
            if ($query->num_rows() > 0)
            {
                    return $query->result_array(); 
            }else{
                    return false;
            }
        }
//Mauro Morales 11/7/2017 para el reporte



        public function misCanjes() //queda fuera de la iteracion con controlador 13/otc/2017
        {
    		$query = $this->db->query("
                                        SELECT pc.idCanje as Folio,p.codEmpresa,p.codParticipante,pc.feSolicitud as Fecha,pd.Status as Estatus,pd.Mensajeria,pd.NumeroGuia as Guias,pd.noFolio as FolioWeb,
                                                   pd.codPremio,pd.Cantidad,pr.Nombre_Esp as Descripcion,pr.Marca,pd.PuntosXUnidad as Puntos,pd.PuntosXUnidad*pd.Cantidad as Total
                                            FROM PreCanje pc
                                            INNER JOIN PreCanjeDet pd ON pd.noFolio = pc.idCanje AND pd.idParticipante = pc.idParticipante
                                            INNER JOIN Participante p on p.idParticipante = pc.idParticipante
                                            INNER JOIN Premio pr on pr.codPremio = pd.codPremio
                                            WHERE pc.idParticipante = ".$this->session->userdata('idPart')." and pd.Mensajeria is not null and pd.Mensajeria <> ''
                                         
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