<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Exit_controller extends CI_Controller {
    	   
        public function __construct(){
            parent::__construct();
        }
		
    	public function index()
    	{

           $array_items = array('nombre' => '', 'programa' => '', 'participante' => '', 'empresa' => '', 'status' => '', 'puntos' => '', 'idPart' => '','logged_in' => FALSE);
           $this->session->unset_userdata($array_items);
           header( 'Location: http://puntosheinz.com.mx' ) ;
        }
    }
?>