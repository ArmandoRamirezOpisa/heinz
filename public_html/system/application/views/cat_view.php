<div class="container-fluid">
    <select id="selProd" class="form-control">
    
        <?php
            if($cat)
            {
                foreach($cat as $row)
                {
                    echo '<option>'.$row["nbCategoria"].'</option>';
                    //echo '<a id="a'.$row["CodCategoria"].'" href="javascript:void(0)" onClick="selCat('.$row["CodCategoria"].',\'a'.$row["CodCategoria"].'\')" class="list-group-item '.$act.'" >'.$row["nbCategoria"].'</a>';
                }
            }
        ?>
    </select>

    <div class="row">
      <div id="mnuProd" class="col-md-2">
        <div class="list-group" style="text-align: left;">
        <?php
            if($cat)
            {
                foreach($cat as $row)
                {
                    $act = "";
                    if ($row["CodCategoria"] == 1)
                    {
                        $act = "active";
                    }
                    echo '<a id="a'.$row["CodCategoria"].'" href="javascript:void(0)" onClick="selCat('.$row["CodCategoria"].',\'a'.$row["CodCategoria"].'\')" class="list-group-item '.$act.'" >'.$row["nbCategoria"].'</a>';
                }
            }
        ?>
        </div>
      </div>
      <div id="dvContAw" class="col-md-10"></div>
    </div>
</div>


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

