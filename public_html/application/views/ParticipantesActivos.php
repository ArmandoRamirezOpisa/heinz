<h1 class="display-4 mb-3"><i class="fa fa-users fa-lg mr-2" aria-hidden="true"></i>Participantes Activos</h1>
 
<div class="table-responsive">
<table class="table table-striped table-danger span10 table-hover text-center mt-4">
    <thead class="btn-light">
        <th class="thTP">NumCliente</th>
        <th class="thTP">CodEmpOPI</th>
        <th class="thTP">Cliente</th>
        <th class="thTP">CodParOPI</th>
        <th class="thTP">primernombre</th>
        <th class="thTP">segundonombre</th>
        <th class="thTP">apellidopaterno</th>
        <th class="thTP">apellidomaterno</th>
        <th class="thTP">SaldoActual</th>
    </thead>
    
    <tbody>
        <?PHP
            if ($precanjes)
            {
                $st = "tdTP";
                foreach($precanjes as $row)
                {
                    echo "<tr>
                            <td class='".$st."' style='color:#000;'>".$row["NumCliente"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["CodEmpOPI"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["Cliente"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["CodParOPI"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["primernombre"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["segundonombre"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["apellidopaterno"]."</td>
                            <td class='".$st."' style='color:#000;'>".$row["apellidomaterno"]."</td>
                            <td class='".$st."' style='color:#000;'>"."$".$row["SaldoActual"]."</td>
                          </tr>";
                }
         
            }else{
                echo "<tr><td colspan = 8><h3>No hay canjes registrados.</h3></td></tr>";
            }
        ?>
    </tbody>
</table>
</div>