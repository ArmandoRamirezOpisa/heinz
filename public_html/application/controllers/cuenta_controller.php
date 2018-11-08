<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Cuenta_controller extends CI_Controller {
    	   
        public function __construct()
        {
                parent::__construct();
                $this->load->model("cuenta_model");
        }
        
        public function index()
        {
    	    $ec = $this->cuenta_model->getEdoCuenta();
            if ($ec)
            {
                $data["ec"] = $ec;
            }else{
                $data["ec"] = false;
            }
    		$this->load->view('cuenta_view',$data);
            
        }
        
    }
    
?>