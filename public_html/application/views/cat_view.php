<!--Div sidebar o menu lateral -->
<div id="mnuProd" class="col-12 col-md-3 col-xl-2 bd-sidebar">
    <form class="bd-search d-flex align-items-center">
		<div class="form-control" id="search-input" style="border:0px solid #ffffff"><h2 class="font-weight-bold">Categorias.</h2></div>
			<button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#categorias-nav" aria-controls="categorias-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false" role="img"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg></button>
	</form>
    <nav class="collapse bd-links" id="categorias-nav">
        <?php
            if($cat){
                foreach($cat as $row){
                    $act = "";
                    if ($row["CodCategoria"] == 1){
                        $act = "active";
                    }
                    echo '<div class="list-group-item">
						<a id="a'.$row["CodCategoria"].'" class="bd-toc-link" href="javascript:void(0)" onClick="selCat('.$row["CodCategoria"].',\'a'.$row["CodCategoria"].'\')">'.$row["nbCategoria"].'</a>
                    </div>';
                }
            }
        ?>
    </nav>
</div>
<!-- Fin div sidebar o menu-lateral -->

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

<!-- cards de todo lo que se va a mostrar -->
<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

    <!--<div class="row justify-content-center mt-5">
	    <div class="col-12 col-md-4 mt-4">
			<img src="assets/images/Logo_Login.png" class="img-fluid" alt="Responsive image">
		</div>
	</div>-->

    <div id="dvContAw" class="row"></div>

</main>

<script>
    var dAct = "a1";
    function selCat(idCat,id)
    {
        $("#"+dAct).removeClass("active");
        dAct = id;
        $("#"+id).addClass("active");
        loadSection('cart_controller/getAwards/'+idCat,'dvContAw');
    }
    loadSection('cart_controller/getAwards/1','dvContAw');
    up();
    
    function up()
    {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    }
    
    $("#selProd").change(function(){
        //alert(this.value());
    });
    
</script>