<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Cart_controller extends CI_Controller {
    	   
        public function __construct(){
            parent::__construct();
            $this->load->model("Cart_model");
        }
        
        public function getCategory(){
    	    $cat = $this->Cart_model->getCategory();
            if ($cat){
                $data["cat"] = $cat;
            }else{
                $data["cat"] = false;
            }
    		$this->load->view('cat_view',$data);
        }
        
        public function getAwards($idCat){
    	    $aw = $this->Cart_model->getAwards($idCat);
            if ($aw){
                $data["awards"] = $aw;
            }else{
                $data["awards"] = false;
            }
    		$this->load->view('cart_view',$data);
        }
        
        public function showItem($id){
    	    $item = $this->Cart_model->getDataItem($id);
            if ($item){
                $data["item"] = $item;
            }else{
                $data["item"] = false;
            }
    		$this->load->view('det_item_view',$data);
        }
		
		public function showContentCart(){
			$this->load->view('prev_cart_view');
		}
    }
?>