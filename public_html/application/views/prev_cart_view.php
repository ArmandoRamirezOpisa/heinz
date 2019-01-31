<div class="container" style="margin-bottom:100px;">

	<div class="row">
		<div class="col-sm"></div>
		<div class="col-sm">
			<h2 class="justify-content-center">Contenido de la orden</h2>
		</div>
		<div class="col-sm">
			<label id="lblProc" style="display:none;"><h2 class="justify-content-center">Procesando... <i class="fa fa-cog fa-spin"></i></h2></label>
		</div>
	</div>

	<table class="table table-hover">
		<thead class="thead-dark">
			<tr>
				<th scope="col">C&oacute;digo</th>
				<th scope="col">Nombre</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Valor puntos</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody id="bodyContentCart"></tbody>
	</table>

	<div class="row">
		<div class="col-sm"></div>
		<div class="col-sm"></div>
		<div class="col-sm">
			<h2>Total: <span id="totalCarrito"></span></h2>
		</div>
	</div>

	<div style="text-align:left;float:left;">

		<h4>Direcci&oacute;n de env&iacute;o:</h4>
		<p class="text-capitalize"><?php echo $this->session->userdata('calle')?></p>
		<p class="text-capitalize"><?php echo $this->session->userdata('colonia')?></p>
		<p class="text-capitalize"><?php echo $this->session->userdata('cp')?></p>
		<p class="text-capitalize"><?php echo $this->session->userdata('ciudad')?></p>
		<p class="text-capitalize"><?php echo $this->session->userdata('estado')?></p>

		<a href="javascript:void(0)" onclick="loadSection('cart_controller/getCategory','dvSecc')" class="btn btn-primary" id="btnGenCanje">Continuar comprando<i class="fa fa-share ml-2" aria-hidden="true"></i></a>

		<span id="btn">
    		<a href="javascript:void(0)" onclick="sendCanje(<?php echo $this->session->userdata('puntos'); ?>,totPuntos)" class="btn btn-success" id="btnGenCanje">Finalizar compra <i class="fa fa-paper-plane ml-2" aria-hidden="true"></i></a>
		</span>

	</div>

</div>
   
<script>
	var str = "";
	var c = 1;
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
		str += "<tr "+ctd+"><td>"+v.id+"</td><td>"+v.nombre+"</td><td>"+v.cantidad+"</td><td>"+formatNumber.new(v.puntos)+"</td><td><a class='badge badge-warning eleminiarItemHeinz' onClick='deleteItem("+v.id+")'><i class='fa fa-trash'></i> Eliminar</a></td></tr>";
		
		$("#bodyContentCart").html(str);
	});

	$('#totalCarrito').html(formatNumber.new(totPuntos))

	if (totPuntos == 0){
		var el = document.getElementById( 'btn' );
		el.parentNode.removeChild(el);
	}
</script>