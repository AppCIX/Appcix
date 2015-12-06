<?php
IF ($_SESSION['RangPer']=="1"){
    $file = "Subir Archivo Excel de los personeros de los Locales de Votacion";
} elseif ($_SESSION['RangPer']=="2") {
    $file = "Subir Archivo Excel de los personeros de las Mesa de Sufragio";
}

?>
<form action="cLogica/subir_rar.php" method="post" enctype="multipart/form-data">
    <label><?=$file?>:
        <input name="archivo" type="file" id="archivo" size="30"/>
    </label>
    <label>
        <input type="submit" name="submitBtn" value="Subir Excel"/>
    </label>
 </form>
<?php
IF ($_SESSION['RangPer']=="1"){ ?>
    <img src="images/localvotacion.png" alt="mws admin">  
<?php } elseif ($_SESSION['RangPer']=="2") {?> 
    <img src="images/mesa.png" alt="mws admin" width="124" height="61">  
<?php }

?>