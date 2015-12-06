<?php
include_once("cLogica/lCrm_menu.php");
$olMenu = new lCrm_menu();
$datos_menu=$olMenu->AccesoMenu_M($oeMenu);
//echo "<pre>"; print_r($_SESSION); echo "</pre>";
?>
<div id="mws-navigation">
    <ul>
	<li class="closed" style="display:block;">	                    
                    <a href="main.php">Informate</a>
                </li>
        <?PHP
        while($menu = mysql_fetch_array($datos_menu)) { ?>   
                <li class="closed" style="display:block;">	                    
 <a href="main.php?modulo=<?=$menu['Modulo']?>"> <?=$menu['Nombre']?></a>
                </li>
                <?PHP
        }
	?>   
    </ul>
</div>