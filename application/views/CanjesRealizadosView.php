<h1 class="display-4 mb-3"><i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>Canjes realizados</h1>
 
<div class="table-responsive">
<table class="table table-striped table-danger span10 table-hover text-center mt-4">
    <thead class="btn-light">
        <th class="thTP">FolioWeb</th>
        <th class="thTP">FechaOrden</th>
        <th class="thTP">Distribuidora</th>
        <th class="thTP">Nombre</th>
        <th class="thTP">CodPremio</th>
        <th class="thTP">Cantidad</th>
        <th class="thTP">Premio</th>
        <th class="thTP">Puntos</th>
         <th class="thTP">Total</th>
    </thead>
    
    <tbody>
        <?PHP
            if ($precanjes)
            {
                $st = "tdTP";
                foreach($precanjes as $row)
                {
                    echo "<tr>
                            <td class='".$st."' style='color:#000;'>".$row["FolioWeb"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["FechaOrden"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Distribuidora"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Nombre"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["codPremio"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Cantidad"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Premio"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Puntos"]."</td>
                            <td class='".$st."' style='color:#000;'>"."$".$row["Total"]."</td>
                          </tr>";
                }
         
            }else{
                echo "<tr><td colspan = 8><h3>No hay canjes registrados.</h3></td></tr>";
            }
        ?>
    </tbody>
</div>
</table>