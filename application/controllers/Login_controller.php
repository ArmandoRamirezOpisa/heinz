<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login_controller extends CI_Controller {
    	   
        public function __construct(){
            parent::__construct();
            $this->load->model('Login_model');
        }
		
		public function login(){
            $loginHeinzData = array(
                "user"=>$this->input->post('user'),
                "pass"=>$this->input->post('pass')
            );
			$login = $this->Login_model->login($loginHeinzData);
			if ($login){
				$userData = array(
			       'logged_in' => TRUE,
                    'nombre' => $login[0]["PrimerNombre"]." ".$login[0]["ApellidoPaterno"],
                    'eMail' => $login[0]["eMail"],
                    'programa' => $login[0]["codPrograma"],
                    'participante' => $login[0]["codParticipante"],
                    'empresa' => $login[0]["codEmpresa"],
                    'status' => $login[0]["Status"],
                    'puntos' => $login[0]["SaldoActual"],
                    'idPart' => $login[0]["idParticipante"],
                    'calle' => $login[0]["CalleNumero"],
                    'colonia' => $login[0]["Colonia"],
                    'cp' => $login[0]["CP"],
                    'ciudad' => $login[0]["Ciudad"],
                    'estado' => $login[0]["Estado"],
                    'administrador' => $login[0]["Administrador"]                                           
                );
            	$this->session->set_userdata($userData);
				$this->output->set_output(json_encode($login));
			}else{
				$this->output->set_output(json_encode(false));
            }
		}
	}
?>