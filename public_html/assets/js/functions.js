//Globales
var contOrder = new Array();

function loadSection(controller, divSel) //Controlador,Div en el que se despliega la vista
{
    $.ajax({
        url: controller,
        async: 'true',
        cache: false,
        contentType: "application/x-www-form-urlencoded",
        dataType: "html",
        error: function(object, error, anotherObject) {
            alert('Mensaje: ' + object.statusText + 'Status: ' + object.status);
        },
        global: true,
        ifModified: false,
        processData: true,
        success: function(result) {
            $('#' + divSel).html(result);
        },
        timeout: 30000,
        type: "GET"
    });
}

var formatNumber = {
    separador: ",", // separador para los miles
    sepDecimal: '.', // separador para los decimales
    formatear: function(num) {
        num += '';
        var splitStr = num.split('.');
        var splitLeft = splitStr[0];
        var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
        var regx = /(\d+)(\d{3})/;
        while (regx.test(splitLeft)) {
            splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
        }
        return this.simbol + splitLeft + splitRight;
    },
    new: function(num, simbol) {
        this.simbol = simbol || '';
        return this.formatear(num);
    }
}


function addItemOrder(idProduct, name, puntos) {
    var cantidadArt = document.getElementById("productoCantidad").value;
    if (parseInt(cantidadArt) == 0) {
        $.notify("Es necesario elegir una cantidad. Intente nuevamente.", "error");
    } else {
        var exist = 0;
        numE = contOrder.length;
        if (numE == 0) {
            contOrder = [{
                "id": idProduct,
                "cantidad": cantidadArt,
                "nombre": name,
                "puntos": puntos * cantidadArt
            }];
        } else {
            $.each(contOrder, function(k, v) {
                if (v.id == idProduct) {
                    v.cantidad = parseInt(v.cantidad) + parseInt(cantidadArt);
                    v.puntos = parseInt(v.puntos) + puntos * cantidadArt;
                    exist = 1;
                }
            });
            if (exist == 0) {
                contOrder.push({
                    "id": idProduct,
                    "cantidad": cantidadArt,
                    "nombre": name,
                    "puntos": puntos * cantidadArt
                });
            }
        }
        loadSection("cart_controller/showContentCart/", "dvContAw");
        $.notify("Se ha agregado el producto a su orden", "success");
    }
}

function refreshCar() {
    //Actualiza las cantidades de los productos en el array
    //console.log("Refresca array");
    $.each(contOrder, function(k, v) {
        if ($("#in" + v.id).val() == 0) {
            alert("La cantidad indicada debe ser mayor a cero");
        } else {
            v.cantidad = $("#in" + v.id).val();
            //console.log("Asigna al id: "+v.id+ "la cantidad: "+v.cantidad);
        }
    });
    showOrderContent(0);
}

function deleteItemModal(itemId) {

    //55
    var idEliminarModal = itemId;
    //55-e
    var valorE = idEliminarModal + "-" + "e";
    var idBtnModalEliminar = valorE;
    console.log(idBtnModalEliminar);
    //55-3
    document.getElementById('eliminarProductoBtn-e').id = idBtnModalEliminar;

    //55-c
    var valorC = idEliminarModal + "-" + "c";
    var idBtnModalCancelar = valorC
    console.log(idBtnModalCancelar);
    //55-c
    document.getElementById('eliminarProductoBtn-c').id = idBtnModalCancelar;
}

function deleteItemCancelar(idCancelar) {

    //55-c
    var cancelarId = idCancelar.id;
    //5 - c
    var cancelarIdArray = cancelarId.split("-");
    //eliminarProductoBtn-e
    var btnCancelarNewId = "eliminarProductoBtn" + "-" + cancelarIdArray[1];
    console.log(btnCancelarNewId);

    document.getElementById(cancelarId).id = btnCancelarNewId;

    //eliminarProductoBtn-e
    var btnCancelarNewId = "eliminarProductoBtn" + "-" + "e";
    //55-e
    var idEliminarModal = cancelarIdArray[0] + "-" + "e";
    document.getElementById(idEliminarModal).id = btnCancelarNewId;

}

function deleteItem(item1) {
    var item = item1.id;
    var itemArray = item.split("-");
    var itemNum = itemArray[0];
    console.log(itemNum);
    //var r = confirm("Eliminara el producto seleccionado ¿Desae continuar?")
    //if (r == true) {
    //console.log("Eliminara: "+item);
    $.each(contOrder, function(k, v) {
        if (itemNum == v.id) {
            contOrder.splice(k, 1);
            //console.log("Elimino: "+item);
            loadSection("cart_controller/showContentCart/", "dvContAw");
            $.notify("Se ha eliminado el producto de su orden", "success");
            return false;
        }
    });
    if (contOrder.length == 0) {
        $('#dvContOrder').modal('hide')
        $("#dvCar").html('');
        bloqueaCombos(0);
        //console.log("Orden elimiada");
        //console.log("No.Contenido: "+contOrder.length);
    }
    /*else {
           showOrderContent(0);
       }*/
    //$('#eliminarItemHeinz').modal('hide');
    //}
    document.getElementById(item).id = "eliminarProductoBtn-e";
}

function delArray() {
    //Elimina todo el contenido del carrito//
    $.each(contOrder, function(k, v) {
        contOrder.splice(k, 1);
    });
    //confirmDelArray();
}

function showDet(id) {
    loadSection("cart_controller/showItem/" + id, "dvContAw");
}

function sendCanje($ptsUser, $ptsCanje) {
    periodoCanjes = 1;
    if (periodoCanjes == 1) {
        $("#btnGenCanje").hide();
        $("#lblProc").show();
        if ($ptsUser >= $ptsCanje) {
            var jsonString = JSON.stringify(contOrder); //Pasa array a formato JSON
            $.ajax({
                type: 'POST',
                url: "canje_controller/addCanje",
                dataType: "json",
                data: { "data": jsonString, "ptsCanje": $ptsCanje },
                beforeSend: function() {
                    console.log('Procesando, espere por favor...');
                },
                success: function(response) {
                    if (response) {
                        $.notify("La solicitud de canje ha sido almacenada .", "success");
                        //delArray();//Elimina el contenido del array
                        var el = document.getElementById('btn');
                        el.parentNode.removeChild(el);
                        //setTimeout(function() { location.href = "http://www.puntosheinz.com.mx"; }, 3000);
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
        } else {
            $.notify("Su saldo es insuficiente para realizar este canje.", "error");
            $("#btnGenCanje").show();
            $("#lblProc").hide();
        }
    } else {
        $.notify("No es posible realizar el proceso de canje.", "error");
    }

}

function up() {
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
}

function exit() {
    location.href = "http://www.puntosheinz.com.mx/exit_controller";
}