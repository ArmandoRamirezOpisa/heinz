<div class="col-md-10">
	<h2>Contenido de la orden</h2>
	<div class="table-responsive">
	  <table class="table table-bordered">
	    <thead>
	    	<tr>
	    		<th class="thHeadCart">C&oacute;digo</th>
	    		<th class="thHeadCart">Nombre</th>
	    		<th class="thHeadCart">Cantidad</th>
	    		<th class="thHeadCart">Valor Puntos</th>
                        <th class="thHeadCart"></th>
	    	</tr>	
	    </thead>
	    <tbody id = "bodyContentCart">
	    	
	    </tbody>
	  </table>
	</div>
    
    <br>

    </div><br>
    
    <div style="text-align:left;float:left;"><h4>Direcci&oacute;n de env&iacute;o</h4>
    <?php
        echo $this->session->userdata('calle')."<br>";
        echo $this->session->userdata('colonia')."<br>";
        echo $this->session->userdata('cp')."<br>";
        echo $this->session->userdata('ciudad')."<br>";
        echo $this->session->userdata('estado')."<br><br>";
    ?>
    
    
    <a href="javascript:void(0)" onclick="loadSection('cart_controller/getCategory','dvSecc')" class="btn btn-warning" id="btnGenCanje">Continuar comprando</a>
    <!--<a href="javascript:void(0)" onclick="sendCanje(<?php echo $this->session->userdata('puntos'); ?>,totPuntos)" class="btn btn-warning" id="btnGenCanje">Finalizar compra</a>-->
    <center><label id="lblProc" style="display:none;"><h2 style="color:#084B8A;">Procesando ...</h2></label></center>
</div>

   
<script>
	var str = "";
	var c = 0;
	var ctd;
	var totPuntos = 0;
	
	$.each(contOrder, function(k,v){
		totPuntos = totPuntos + v.puntos;
		if (c == 0)
		{
			ctd = "class = 'warning'"; 
			c = 1;
		}else{
			ctd = "";
			c = 0;
		}
		str += "<tr "+ctd+"><td>"+v.id+"</td><td>"+v.nombre+"</td><td>"+v.cantidad+"</td><td>"+formatNumber.new(v.puntos)+"</td><td><a style='cursor:pointer' onClick='deleteItem("+v.id+")'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td></tr>";
		
		$("#bodyContentCart").html(str);
	});
	str = "<tr><td colspan = 3 style ='text-align:right;'><h2>Total:</h2></td><td><h2>"+formatNumber.new(totPuntos)+"</h2></td></tr>";
	$("#bodyContentCart").append(str);
</script>