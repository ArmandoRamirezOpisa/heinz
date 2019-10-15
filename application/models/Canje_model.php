<?php
        class Canje_model extends CI_Model {
    	
    	        public function __construct(){}
        
                public function addCanje(){
                        $query = $this->db->query("
                                CALL spu_hzAddCanje(".$this->session->userdata('programa').",".$this->session->userdata('idPart').");
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
                                        CALL spu_hzAddDetCanje(".$this->session->userdata('idPart').",".$noFolio.",".$nItem.",".$d->id.",".$d->cantidad.",".$d->puntos.");
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
                                CALL spu_hzUpdSaldo(".$ptsCanje.",".$this->session->userdata('idPart').");
                        ");
			if ($query){
				return true;
			}else{
				return false;
			}
                }

                public function misPreCanjes(){
                        $query=$this->db->query("
                                CALL spu_hzMisPreCanjes(".$this->session->userdata('programa').",".$this->session->userdata('idPart').");
                        ");
                        if ($query->num_rows() > 0){
                                return $query->result_array(); 
                        }else{
                                return false;
                        }
                }

                public function misCanjesGlobales(){
                        $query=$this->db->query("
                                CALL spu_hzMisCanjesGlobales;
                        ");
                        if ($query->num_rows() > 0){
                                return $query->result_array(); 
                        }else{
                                return false;
                        }
                }

                public function ParticipantesActivos(){
                        $query=$this->db->query("
                                CALL spu_hzParticipantesActivos;
                        ");
                        if ($query->num_rows() > 0){
                                return $query->result_array(); 
                        }else{
                                return false;
                        }
                }

                public function ListaDePremios(){
                        $query=$this->db->query("
                                CALL spu_hzListaDePremios;
                        ");
                        if ($query->num_rows() > 0){
                                return $query->result_array(); 
                        }else{
                                return false;
                        }
                }
        
                public function PuntosObtenidosXmes(){
                        $query=$this->db->query("
                                CALL spu_hzPuntosObtenidosXmes;
                        ");
                        if ($query->num_rows() > 0){
                                return $query->result_array(); 
                        }else{
                                return false;
                        }
                }

                public function PuntosRedimidos(){
                        $query=$this->db->query("
                                CALL spu_hzPuntosRedimidos;
                        ");
                        if ($query->num_rows() > 0){
                                return $query->result_array(); 
                        }else{
                                return false;
                        }
                }

                public function misCanjes(){
                        $query = $this->db->query("
                                CALL spu_hzMisCanjes(".$this->session->userdata('idPart').");       
                        ");
    		        if ($query->num_rows() > 0){
                                return $query->result_array(); 
    		        }else{
                                return false;
    		        }
                }

                public function fhExpira43(){
                        $query = $this->db->query("
                                CALL spu_hzFhExpira43(".$this->session->userdata('programa').");
                        ");
    		        if ($query->num_rows() > 0){
                                return $query->result_array(); 
    		        }else{
                                return false;
    		        }
                }
        }
?>