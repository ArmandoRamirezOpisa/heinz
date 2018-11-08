//Globales
var contOrder = new Array();

function loadSection(controller,divSel)//Controlador,Div en el que se despliega la vista
{
    $.ajax({
        url:controller,
        async:'true',
        cache: false,
        contentType: "application/x-www-form-urlencoded",
        dataType: "html",
        error: function(object, error, anotherObject){
            alert('Mensaje: '+ object.statusText + 'Status: ' + object.status);
        },
        global: true,
        ifModified: false,
        processData:true,
        success: function(result){
        	$('#'+divSel).html(result);
        },
        timeout: 30000,
        type: "GET"
    });
}

var formatNumber = {
	separador: ",", // separador para los miles
	sepDecimal: '.', // separador para los decimales
	formatear:function (num){
		num +='';
		var splitStr = num.split('.');
		var splitLeft = splitStr[0];
		var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
		var regx = /(\d+)(\d{3})/;
		while (regx.test(splitLeft)) {
			splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
		}
		return this.simbol + splitLeft  +splitRight;
	},
	new:function(num, simbol){
		this.simbol = simbol ||'';
		return this.formatear(num);
	}
}


function addItemOrder(idProduct,name,puntos)
{
	//console.log("Agregar:"+idProduct+"-"+name+"-"+puntos);
	////////////////
	var exist = 0;
	//Arma array de productos seleccionados, si el id seleccionado ya se encuentra en el array lo elimina del mismo.
	numE=contOrder.length;

		if (numE==0)
		{
			//Si el array esta vacío agrega el id en la posicion 0
			contOrder = [
							{
								"id":idProduct,
								"cantidad":"1",
								"nombre":name,
								"puntos":puntos
							}
						];
						
						//console.log("Agrega id "+contOrder[0].id+" al array de la orden. Cantidad: "+contOrder[0].cantidad+" Nombre:"+contOrder[0].nombre+" Puntos:"+contOrder[0].puntos);
		}else{
			//A partir del segundo elemento se verifica si existe en el array, si existe se le suma 1 a la cantidad.
			$.each(contOrder, function(k,v){
				if (v.id == idProduct)
				{
					//console.log("Existe el id "+v.id+", se suma uno a la cantidad:"+v.cantidad);
					v.cantidad = parseInt(v.cantidad)+1;
					v.puntos   = parseInt(v.puntos)+puntos;
					exist = 1;
				}
			});
			
			//Si no existe en el array se agrega un nuevo elemento con cantidad 1
			if (exist == 0)
			{
				//console.log("Se inserta el id "+idProduct+" como un nuevo elemento al array");
				contOrder.push(
								{
									"id":idProduct,
									"cantidad":"1",
									"nombre":name,
									"puntos":puntos
								}
							   );
			}
		}
		loadSection("cart_controller/showContentCart/","dvContAw");
		$.notify("Se ha agregado el producto a su orden", "success");
		//console.log("Total de elementos en array: "+contOrder.length);
}

function refreshCar()
{
	//Actualiza las cantidades de los productos en el array
	//console.log("Refresca array");
	$.each(contOrder, function(k,v){
		if($("#in"+v.id).val() == 0){
			alert("La cantidad indicada debe ser mayor a cero");
		}else{
			v.cantidad = $("#in"+v.id).val();
			//console.log("Asigna al id: "+v.id+ "la cantidad: "+v.cantidad);
		}
	});	
	showOrderContent(0);		
}

function deleteItem(item)
{
	var r=confirm("Eliminara el producto seleccionado ¿Desae continuar?")
	if (r==true)
  	{
		//console.log("Eliminara: "+item);
		$.each(contOrder, function(k,v){
			if(item == v.id)
			{
				contOrder.splice(k, 1);
				//console.log("Elimino: "+item);
                                loadSection("cart_controller/showContentCart/","dvContAw");
				$.notify("Se ha eliminado el producto de su orden", "success");
				return false;
			}
		});	
		if (contOrder.length == 0)
		{
			$('#dvContOrder').modal('hide')
			$("#dvCar").html('');
			bloqueaCombos(0);
			//console.log("Orden elimiada");
			//console.log("No.Contenido: "+contOrder.length);
		}else{
			showOrderContent(0);	
		}
		
  	}
}

function delArray()
{
	//Elimina todo el contenido del carrito//
	$.each(contOrder, function(k,v){
		contOrder.splice(k, 1);
	});
	//confirmDelArray();
}

function showDet(id)
{
    loadSection("cart_controller/showItem/"+id,"dvContAw");
}

function sendCanje($ptsUser,$ptsCanje)
{
	periodoCanjes = 0;
	if (periodoCanjes == 1)
	{
	    $("#btnGenCanje").hide();
	    $("#lblProc").show();
	    
	    if ($ptsUser >= $ptsCanje)
	    {
	       var jsonString = JSON.stringify(contOrder);//Pasa array a formato JSON
	
	       $.ajax({ 
	            type:'POST',
	            url:  "canje_controller/addCanje",
	            dataType: "json",
	            data:{"data": jsonString,"ptsCanje":$ptsCanje},
	            beforeSend: function() {
	                //console.log('Procesando, espere por favor...');
	            },
	            success: function(response) {
	                if (response) {
	                    $.notify("La solicitud de canje ha sido almacenada.", "success");
	                    //delArray();//Elimina el contenido del array
	                    setTimeout(function(){location.href="http://www.puntosheinz.com.mx";}, 3000);
	                } else {
	                    $.notify("A ocurrido un error de comunicación. Intente nuevamente.", "error");
	                    $("#btnGenCanje").show();
	                    $("#lblProc").hide();
	                }
	            },
	            error: function(x, e) {
	                alert("Ocurrio un error al realizar el canje:" + e.messager);
	                $("#btnGenCanje").show();
	                $("#lblProc").hide();
	            }
	        });
	    }else{
	        $.notify("Su saldo es insuficiente para realizar este canje.", "error");
	        $("#btnGenCanje").show();
	        $("#lblProc").hide();
	    }
	}else{
	        $.notify("No es posible realizar el proceso de canje.", "error");
	}
}

function exit()
{
    var r = confirm("Cerrara su sesión. ¿Desea continuar?");
    if (r == true) {
       location.href="http://www.puntosheinz.com.mx/exit_controller";
    } else {
      
    }
}