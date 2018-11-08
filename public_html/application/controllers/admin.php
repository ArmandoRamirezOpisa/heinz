<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Admin extends CI_Controller {
    	   
        public function __construct()
        {
                parent::__construct();
                $this->load->library('email');
                $this->load->model("admin");
        }
        
        
        
        function CanjesRealizados()
        {
            $misCanjesRealizados = $this->admin->misCanjesRealizados();
            //$misCanjes = $this->canje_model->misCanjes();

           if ($misCanjesRealizados)
            {
               $data["precanjes"] = $misCanjesRealizados;
            }else{
                $data["precanjes"] = false;
            }
            

            $this->load->view('CanjesRealizadosView',$data);
        }
        
       
        }
    
?>