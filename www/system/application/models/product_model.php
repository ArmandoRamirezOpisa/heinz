<?php
    class Product_model extends CI_Model {
    	
    	public function __construct()
    	{
    		
    	}
        
        public function getProducts()
        {
    		$query = $this->db->query("
                                         SELECT * FROM t12InProductoParticipante WHERE status = 1 ORDER BY id
                                        
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