<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Canje_controller extends CI_Controller {
    	   
        public function __construct()
        {
                parent::__construct();
                $this->load->model("canje_model");
        }
        
        function addCanje()
        {
            $data = json_decode(stripslashes($_POST['data']));//Decodifica JSON
            //var_dump($data);
			
   	        $idCanje = $this->canje_model->addCanje();//
            
            if ($idCanje)
            {
                $detCanje = $this->canje_model->addDetCanje($data,$idCanje);
                $updateSaldo = $this->canje_model->updSaldo($_POST["ptsCanje"]);
                
                if ($updateSaldo)
                {
                    $sdoAct = $this->session->userdata('puntos') - $_POST["ptsCanje"];
                    $this->session->set_userdata('puntos', $sdoAct);
                }
                
                if ($detCanje)
                {
                    $this->output->set_output(json_encode($idCanje));    
                }
            }else{
                $this->output->set_output(json_encode(false));
            }
        }
        
        function getCanjes()
        {
            $misCanjes = $this->canje_model->misCanjes();
            if ($misCanjes)
            {
                $data["canjes"] = $misCanjes;
            }else{
                $data["canjes"] = false;
            }
            $this->load->view('canjes_view',$data);
        }
    }
?>