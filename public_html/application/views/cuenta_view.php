<!-- Imagen lateral -->
<div class="d-none d-xl-block col-xl-2 bd-toc">
	<ul class="section-nav">
		<li class="toc-entry toc-h2">
			<img src="assets/images/Logo_Login.png" class="img-fluid" alt="Responsive image">
		</li>
        <li class="toc-entry toc-h2">
			<p>Para dudas y aclaraciones favor de comunicarse a:</p>
		</li>
		<li class="toc-entry toc-h2">
			<p>operaciones@opisa.com</p>
		</li>
	</ul>
</div>
<!-- Fin imagen lateral -->

<div class="container" style="margin-bottom:100px;">

    <!--<div class="row justify-content-center mt-5">
		<div class="col-12 col-md-4 mt-4">
			<img src="assets/images/Logo_Login.png" class="img-fluid" alt="Responsive image">
		</div>
	</div>-->

    <table class="table table-striped">
        <thead class="thead-dark">
            <th class="thTP">Fecha</th>
            <th class="thTP">Folio</th>
            <th class="thTP">Descripción</th>
            <th class="thTP">Puntos</th>
        </thead>
        <tbody>
            <?php
                if ($ec){
                    foreach($ec as $row){
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
</div>