<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Producto_controller extends CI_Controller {
    	   
        public function __construct(){
            parent::__construct();
            $this->load->model("Product_model");
        }
		
    	public function index(){
    	    $prod = $this->Product_model->getProducts();
            if ($prod){
                $data["prod"] = $prod;
            }else{
                $data["prod"] = false;
            }
    		$this->load->view('producto_view',$data);
        }
    }
?>