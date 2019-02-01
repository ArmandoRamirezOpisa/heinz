<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Canje_controller extends CI_Controller {
    	   
        public function __construct(){
            parent::__construct();
            $this->load->library('email');
            $this->load->model("canje_model");
        }
        
        function addCanje(){
            $data = json_decode(stripslashes($_POST['data']));//Decodifica JSON

            $fecha = date("Y-m-d");
            if ($fecha < '2019-02-28'){

                $idCanje = $this->canje_model->addCanje();//
                if ($idCanje){
                    $detCanje = $this->canje_model->addDetCanje($data,$idCanje);
                    $updateSaldo = $this->canje_model->updSaldo($_POST["ptsCanje"]);
                    if ($updateSaldo){
                        $sdoAct = $this->session->userdata('puntos') - $_POST["ptsCanje"];
                        $this->session->set_userdata('puntos', $sdoAct);
                    }
                    if ($detCanje){
                        //Envía mail de confirmación de canje
                        $this->sendCanjeMail($idCanje,$data);
                        $this->output->set_output(json_encode($idCanje));    
                    }
                }else{
                    $this->output->set_output(json_encode(false));
                }

            }else{
                $this->output->set_output(json_encode("ceroCanjes"));
            }
        }
        
        function getCanjes(){
            $misPreCanjes = $this->canje_model->misPreCanjes();
            if ($misPreCanjes){
               $data["precanjes"] = $misPreCanjes;
            }else{
                $data["precanjes"] = false;
            }
            $this->load->view('canjes_view',$data);
        }

        function getCanjesGlobales(){
            $misPreCanjes = $this->canje_model->misCanjesGlobales();
            if ($misPreCanjes){
               $data["precanjes"] = $misPreCanjes;
            }else{
                $data["precanjes"] = false;
            }
            $this->load->view('CanjesRealizadosView',$data);
        }

        function getParticipantesActivos(){
            $misPreCanjes = $this->canje_model->ParticipantesActivos();
            if ($misPreCanjes){
               $data["precanjes"] = $misPreCanjes;
            }else{
                $data["precanjes"] = false;
            }
            $this->load->view('ParticipantesActivos',$data);
        }

        function getListaPremios(){
            $misPreCanjes = $this->canje_model->ListaDePremios();
            if ($misPreCanjes){
               $data["precanjes"] = $misPreCanjes;
            }else{
                $data["precanjes"] = false;
            }
            $this->load->view('listaPremios',$data);
        }
        function PuntosObtenidosXmes(){
            $misPreCanjes = $this->canje_model->PuntosObtenidosXmes();
            if ($misPreCanjes){
               $data["precanjes"] = $misPreCanjes;
            }else{
                $data["precanjes"] = false;
            }
            $this->load->view('puntosXmes',$data);
        }

        function PuntosRedimidos(){
            $misPreCanjes = $this->canje_model->PuntosRedimidos();
            if ($misPreCanjes){
               $data["precanjes"] = $misPreCanjes;
            }else{
                $data["precanjes"] = false;
            }
            $this->load->view('puntosRedimidos',$data);
        }
        
        function sendCanjeMail($idCanje = 0,$datos){
            //Configuracion de SMTP
            $config['smtp_host'] = 'm176.neubox.net';
            $config['smtp_user'] = 'envios@opisa.com';//envios@opisa.com
            $config['smtp_pass'] = '3hf89w';//3hf89w
            $config['smtp_port'] = 465;
            $config['mailtype'] = 'html';
            
            $message = "<h1>Puntos Heinz</h1>
                <h2>SE HA GENERADO EL CANJE CON FOLIO: ".$idCanje."</h2>
                <table>
                    <tr><td>ID PARTICIPANTE: </td><td style='font-weight'>".$this->session->userdata('idPart')."</td></tr>
                    <tr><td>NOMBRE: </td><td style='font-weight'>".$this->session->userdata('nombre')."</td></tr>
                    <tr><td>COD. PARTICIPANTE: </td><td style='font-weight'>".$this->session->userdata('participante')."</td></tr>
                    <tr><td>COD. EMPRESA: </td><td style='font-weight'>".$this->session->userdata('empresa')."</td></tr>
                </table>
                <h3>Productos</h3>
                <table>";
            foreach($datos as $d){
                $message.="<tr>
                    <td>Artículo:</td><td>".$d->id."</td>
                    <td>Desc:</td><td>".$d->nombre."</td>
                    <td>Cantidad:</td><td>".$d->cantidad."</td>
                    <td>Puntos:</td><td>".number_format($d->puntos)."</td>
                </tr>";
            }               
            $message .= "</table>";          
            //Inicializa
            $this->email->initialize($config);
            //Envío de alerta de canje.
            $this->email->from('no_reply@puntosheinz.com.mx', 'Puntos Heinz');
            $this->email->to('operaciones@opisa.com');//operaciones@opisa.com
            //$this->email->cc('another@another-example.com');
            $this->email->subject('Canje');
            $this->email->message($message);
            $this->email->send();
        }
    }
?>