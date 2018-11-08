<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Exit_controller extends CI_Controller {
    	   
        public function __construct()
        {
                parent::__construct();
        }
		
    	public function index()
    	{
           $array_items = array('nombre' => '', 'programa' => '', 'participante' => '', 'empresa' => '', 'status' => '', 'puntos' => '', 'idPart' => '','logged_in' => '');
           $this->session->unset_userdata($array_items);
           //Manda al inicio de la página, si no hay session se va al login.
           header( 'Location: http://www.puntosheinz.com.mx' ) ;
        }
    }
?>