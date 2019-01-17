<?php

  if($awards){

    foreach($awards as $row){

      $pp = "";
		  $codPremio=$row['codPremio'];          
      while(!(strlen($codPremio)>4))
      $codPremio='0'.$codPremio;
      $noChar = strlen($row["Caracts_Esp"]);
      if (strlen($noChar > 150)){
        $pp = ' ...'; 
      }else{
        $pp = "";
      }

      echo ' 
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail dvCatalog">
            <img style="max-height:200px;width:auto;height:200px;" src="http://www.opisa.com/incentivos/'.$codPremio.'.jpg" alt="...">
            <div class="caption">
            <h5 style = "height:50px;"><b>'.$row["Nombre_Esp"].'</b></h5>
            <p style="text-align:justify;height:150px;"><b>C&oacute;digo '.$row["codPremio"].'</b>: '.substr($row["Caracts_Esp"],0,140).$pp.'</p>
            <p>
              <a href="javascript:void(0)" class="btn btn-light d-block" role="button" onClick = "showDet('.$row['codPremio'].')">
                <i class="fa fa-cart-plus mr-3 " aria-hidden="true"></i></span><span class="badge badge-warning ml-3 
                  pt-1 pb-1">'.number_format($row["ValorPuntos"]).' puntos</span>
              </a> 
            </p>
          </div>
        </div>
      </div>';

    }

  }
?>