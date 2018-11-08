<table class="table table-striped span10">
    <thead>
        <th class="thTP">Fecha</th>
        <th class="thTP">Folio</th>
        <th class="thTP">Descripción</th>
        <th class="thTP">Puntos</th>
    </thead>
    
    <tbody>
        <?php
            if ($ec)
            {
                //$c = 0;
                foreach($ec as $row)
                {
                    //if ($c == 0)
                    //{
                       // $st = "tdTP";
                    //    $c = 1;
                    //}else{
                    //    $st = "tdTP2";    
                    //    $c = 0; 
                    //}
                    echo "<tr>
                            <td style='color:#000;'>".substr($row["Act_Fecha"],0,10)."</td>
                            <td style='color:#000;'>".$row["Folio"]."</td>
                            <td style='color:#000;'>".$row["Descripcion"]."</td>
                            <td style='color:#000;'>".number_format($row["Act_Obtenidos"])."</td>
                          </tr>";
               }
            }else{
                echo "<tr><td colspan = 4><h3>No hay movimientos registrados.</h3></td></tr>";
            }
        ?>
    </tbody>
</table>