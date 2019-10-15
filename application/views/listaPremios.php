<h1 class="display-4 mb-3"><i class="fa fa-gift mr-2" aria-hidden="true"></i>Lista de premios</h1>
 
<div class="table-responsive">
<table class="table table-striped table-danger span10 table-hover text-center mt-4">
    <thead class="btn-light">
        <th class="thTP">codPremio</th>
        <th class="thTP">Nombre_Esp</th>
        <th class="thTP">Marca</th>
        <th class="thTP">Modelo</th>
        <th class="thTP">ValorPuntos</th>
    </thead>
    
    <tbody>
        <?PHP
            if ($precanjes)
            {
                $st = "tdTP";
                foreach($precanjes as $row)
                {
                    echo "<tr>
                            <td class='".$st."' style='color:#000;'>".$row["codPremio"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Nombre_Esp"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Marca"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Modelo"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["ValorPuntos"]."</td>
                            
                          </tr>";
                }
         
            }else{
                echo "<tr><td colspan = 8><h3>No hay canjes registrados.</h3></td></tr>";
            }
        ?>
    </tbody>
</div>
</table>






