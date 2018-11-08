
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
                    <div class="col-md-5" style="background:#fcf6b9;">
                        <img style="background:#fcf6b9;width:100%;height:auto;" src="http://www.opisa.com/incentivos/'.$codPremio.'.jpg" alt="...">
                    </div>
                    <div class="col-md-5">
                        <h3>'.number_format($row["ValorPuntos"]).' Puntos</h3>
                        <h2>'.$row["Nombre_Esp"].'</h2>
                        <p style="text-align:center">'.$row["Caracts_Esp"].'</p>
                        <p><a class="btn btn-warning" onClick = "addItemOrder('.$row["codPremio"].',\''.str_replace('"',' ',$row["Nombre_Esp"]).'\','.$row["ValorPuntos"].')"><span class="glyphicon glyphicon-shopping-cart btn-lg"></span> Agregar</a></p>
                    </div>
                ';
       } 
    }
?>
</div>