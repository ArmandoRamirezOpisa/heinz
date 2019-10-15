<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->library('email');
            $this->load->model("Admin");
        }
        
        function CanjesRealizados(){
            $misCanjesRealizados = $this->admin->misCanjesRealizados();
            if ($misCanjesRealizados){
                $data["precanjes"] = $misCanjesRealizados;
            }else{
                $data["precanjes"] = false;
            }
            $this->load->view('CanjesRealizadosView',$data);
        }
    }
?>