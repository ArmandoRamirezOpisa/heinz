<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Ini extends CI_Controller {
    
        //Old version 2.1.4
    	public function index()
    	{  
            if ($this->session->userdata('logged_in'))
			{
                if($this->session->userdata('administrador')==1){
                    $this->load->view('admin_home_view');
               }else{
                    $this->load->view('home_view');

                }
			}else{
                $this->load->view('login_view');
			}
    	}
    }

?>