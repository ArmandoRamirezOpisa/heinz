<div class="row">
<?php
    if ($item)
    {
       foreach($item as $row)
       { 
    	   $codPremio=$row['codPremio'];           
    
           while(!(strlen($codPremio)>4))
           $codPremio='0'.$codPremio;
           
           
           echo '
                    <div class="col-md-5">
                        <img style="width:100%;height:auto;" class = "style_prevu_kit" src="http://www.opisa.com/incentivos/'.$codPremio.'.jpg" alt="...">
                    </div>
                    <div class="col-md-5">
                        <h3>'.number_format($row["ValorPuntos"]).' Puntos</h3>
                        <h2>'.$row["Nombre_Esp"].'</h2>
                        <p style="text-align:center">'.$row["Caracts_Esp"].'</p>


<p class="font-weight-bold">Cantidad : <input type="number" placeholder="cantidad" min="0" max="100" 
id="productoCantidad" value="1" class="form-control col-md-3 text-center"></p>







                        <p><a class="btn btn-light text-white" onClick = "addItemOrder('.$row["codPremio"].',\''.str_replace('"',' ',$row["Nombre_Esp"]).'\','.$row["ValorPuntos"].')"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a></p>

                    </div>


                ';
       } 
    }
?>
</div>

