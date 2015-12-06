<?php
session_name('apcix');
session_start();
require_once('d_conexion.php');
$group1=$_REQUEST['group1'];
$group2=$_REQUEST['group2'];
$group3=$_REQUEST['group3'];
$group4=$_REQUEST['group4'];
$group5=$_REQUEST['group5'];
$total = $group1+$group2+$group3+$group4+$group5;
if ($total>80) {
    $Nota = "Excelente";
} elseif ($total>60) {
    $Nota = "Muy Bueno";
} elseif ($total>40) {
    $Nota = "Bueno";
} elseif ($total>40) {
    $Nota = "Regular";
} elseif ($total>20) {
    $Nota = "Malo";
} else {
    $Nota = "Muy Malo";
}
$sql = "select * from   capacitacion Where DNIPerso ='".$_SESSION['user']."'";
	 $ocado = new cado();
     $datos = $ocado->ejecutar_sql($sql);
if (mysql_num_rows($datos)==0){ 
    $sql = "insert into  capacitacion (DNIPerso, Nivel, Fecha)  VALUES 
                        ('".$_SESSION['user']."','".$Nota."','".date("Y-m-d")."')";
} else {
    $sql = "UPDATE  capacitacion
     SET Nivel = '".$Nota."',
      Fecha = '".date("Y-m-d")."'
     Where DNIPerso = '".$_SESSION['user']."'";
}
//echo $sql;
$ocado = new cado();
     $datos = $ocado->ejecutar_sql($sql);
     echo "<script language=\"javascript\">";
    echo "alert('Su evaluacion salio como ".$Nota."');";
    echo "window.location='../main?modulo=Evaluacion'";
    echo "</script>";
?>