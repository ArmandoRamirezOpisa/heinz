<h1 class="display-4 mb-3"><i class="fa fa-bar-chart mr-2" aria-hidden="true"></i>Puntos Obtenidos</h1>
 
<div class="table-responsive">
<table class="table table-striped table-danger span10 table-hover text-center mt-4">
    <thead class="btn-light">
        <th class="thTP">Año</th>
        <th class="thTP">Mes</th>
        <th class="thTP">Puntos</th>
        <th class="thTP">Costo</th>

    </thead>
    
    <tbody>
        <?PHP
            if ($precanjes)
            {
                $st = "tdTP";
                foreach($precanjes as $row)
                {
                    echo "<tr>
                            <td class='".$st."' style='color:#000;'>".$row["Año"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Mes"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Puntos"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Costo"]."</td>

                          </tr>";
                }
         
            }else{
                echo "<tr><td colspan = 8><h3>No hay canjes registrados.</h3></td></tr>";
            }
        ?>
    </tbody>
</div>
</table>