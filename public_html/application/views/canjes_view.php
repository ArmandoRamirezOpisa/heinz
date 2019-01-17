<div class="container" style="margin-bottom:100px;">

    <div class="row justify-content-center mt-5">
		<div class="col-12 col-md-4 mt-4">
			<img src="assets/images/Logo_Login.png" class="img-fluid" alt="Responsive image">
		</div>
	</div>

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
                    if ($precanjes){
                        $st = "";
                        foreach($precanjes as $row){
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
                    }else{
                        echo "<tr><td colspan = 8><h3>No hay canjes registrados.</h3></td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

</div>