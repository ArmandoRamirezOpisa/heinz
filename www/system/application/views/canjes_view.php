    <table class="table table-striped span10">
    <thead>
        <th class="thTP">Folio</th>
        <th class="thTP">Fecha</th>
        <th class="thTP">Cantidad</th>
        <th class="thTP">Descripci&oacute;n</th>
        <th class="thTP">Estatus</th>
        <th class="thTP">Mensajer&iacute;a</th>
        <th class="thTP">Gu&iacute;a</th>
        <th class="thTP">Puntos</th>
    </thead>
    
    <tbody>
        <?PHP
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