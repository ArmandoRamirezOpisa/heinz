    <div class="table-responsive-sm">
    <table class="table table-striped">
    <thead class="thead-dark">
        <th class="thTP">Folio</th>
        <th class="thTP">Fecha</th>
        <th class="thTP">Cantidad</th>
        <th class="thTP">Descripci&oacute;n</th>
        <th class="thTP">Estatus</th>
        <th class="thTP">Mensajer&iacute;a</th>
        <th class="thTP">Gu&iacute;a</th>
        <th class="thTP">Puntos</th>
        <th class="thTP">Rastreo de Guia</th>
    </thead>
    
    <tbody>
        <?PHP


            if ($precanjes)
            {
                $st = "";
                foreach($precanjes as $row)
                {
                $Tracking= "https://sistemasopisa.aftership.com/";
                if($row["NumeroGuia"] == "-"){
                $ResultLink = "-";
                
                }else{
              
               
                $ResultLink = "<a href='". $Tracking . $row["NumeroGuia"]."'>Rastreo</a>";
             
                }
                    
                    
                    
                    
                    echo "<tr>
                            <td class='".$st."' style='color:#000;'>".$row["idCanje"]."</td>
                            <td class='".$st."' style='color:#000;'>".substr($row["feSolicitud"],0,10)."</td>
                            <td class='".$st."' style='color:#000;'>".number_format($row["Cantidad"])."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Nombre_Esp"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Status"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Mensajeria"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["NumeroGuia"]."</td>  
                            <td class='".$st."' style='color:#000;'>".number_format($row["puntos"])."</td>
                            <td class='".$st."' style='color:#000;'> ".$ResultLink."</td>
                          </tr>";
                }
            //}
            
           /* 
            INICIO -EDITADA PARA PRUEBA DE CANJES 1 SOLA TABLA 13/OCT/2017
           if ($canjes)
            {
                $st = "tdTP";
                foreach($canjes as $row)
                {
                    echo "<tr>
                            <td class='".$st."' style='color:#000;'>".$row["Folio"]."</td>
                            <td class='".$st."' style='color:#000;'>".substr($row["Fecha"],0,10)."</td>
                            <td class='".$st."' style='color:#000;'>".number_format($row["Cantidad"])."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Descripcion"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Estatus"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Mensajeria"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Guias"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Total"]."</td>
                          </tr>";
                }
                 -FIN INICIO -EDITADA PARA PRUEBA DE CANJES 1 SOLA TABLA 13/OCT/2017
                */
                
               
                
              /*  $c = 0;
                $n = 0;
                $na = 0;
                foreach($canjes as $row)
                {
                    $n = $row["Folio"];
                    if ($c == 0)
                    {
                        $st = "tdTP";
                        $c = 1;
                    }else{
                        $st = "tdTP2";    
                        $c = 0; 
                    }
                    if ($n != $na)
  	            {
                    	echo "<tr>
                            <td class='".$st."' style='color:#000;'>".$row["Folio"]."</td>
                            <td class='".$st."' style='color:#000;'>".substr($row["Fecha"],0,10)."</td>
                            <td class='".$st."' style='color:#000;'>".number_format($row["Cantidad"])."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Descripcion"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Estatus"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Mensajeria"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Guias"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Total"]."</td>
                          </tr>";
                        
                        //Muestra el primer producto del canje  
                    	echo "<tr>";
                    	echo "  <td></td>";
                    	echo "	<td>".$row["codPremio"]."</td>";
                    	echo "  <td>".$row["Nombre_Esp"]."</td>";
                    	echo "</tr>";
                          $na = $row["idCanje"];
                    }else{
                    	echo "<tr>";
                    	echo "  <td></td>";
                    	echo "	<td>".$row["codPremio"]."</td>";
                    	echo "  <td>".$row["Nombre_Esp"]."</td>";
                    	echo "</tr>";
                    }
                }*/
            }else{
                echo "<tr><td colspan = 8><h3>No hay canjes registrados.</h3></td></tr>";
            }
        ?>
    </tbody>
</table>
</div>