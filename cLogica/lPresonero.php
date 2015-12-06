<?php
session_name('apcix');
session_start();
require_once('d_conexion.php');
if(isset($_REQUEST['opcion'])) {
    if($_REQUEST['opcion']=='logueo') {
$DNI =$_REQUEST['txtdni'];
$Apellido=$_REQUEST['txtApellido'];
$Nombre = $_REQUEST['txtNombre'];
$Direccion = $_REQUEST['txtDireccion'];
$NivelEducacion = $_REQUEST['NivelEducacion'];
$Institucion  = $_REQUEST['txtInstitucion'];
$MesaVotacion = $_REQUEST['txtMesaVotacion'];
$CodRangPer = $_REQUEST['txtCodRangPer'];
 $sql ="UPDATE  personero
     SET Apellido = '".$Apellido."',";
 IF ($Direccion <> "") {
     $sql .="Direccion = '".$Direccion."',";
 }
 IF ($NivelEducacion <> "") {
     $sql .="NivelEducacion = '".$NivelEducacion."',";
 }
 IF ($Institucion <> "") {
     $sql .="Institucion = '".$Institucion."',";
 }
 IF ($MesaVotacion <> "") {
     $sql .="MesaVotacion = '".$MesaVotacion."',";
 }
 $sql .="Nombre = '".$Nombre."'
      WHERE DNI='".$DNI."'";
  $ocado = new cado();
  $ocado->ejecutar_sql($sql); 
  echo "<script language=\"javascript\">";
  echo "alert('Se actulizo con exito ');";
	echo "window.location='../main?modulo=actulizardato'";
	echo "</script>";
        }
        }
class lPresonero{
    public function Listar($oeObjetivo) {
	try {
            $sql ="SELECT * FROM  personero 
            WHERE DNI='".$_SESSION['user']."'";
            //echo $sql;
            //$_SESSION['sql_m']=$sql;
            $ocado = new cado();
            return $ocado->ejecutar_sql($sql);  
	} catch (Exception $e){
	}
    }
}
?>