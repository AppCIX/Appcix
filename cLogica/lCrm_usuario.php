<?php
session_name('apcix');
session_start();
require_once('d_conexion.php');
if(isset($_REQUEST['opcion'])) {
    if($_REQUEST['opcion']=='logueo') {
	$DNI =$_REQUEST['username'];
	 $sql = "select * from  personero where DNI ='".$DNI."'";
	 $ocado = new cado();
     $datos = $ocado->ejecutar_sql($sql);
	while($datoz = mysql_fetch_array($datos)) {
            $_SESSION['user']=$datoz['DNI'];
            $_SESSION['partipoli']=$datoz['CodPartiPol'];
			$_SESSION['RangPer']=$datoz['CodRangPer'];
			$_SESSION['Nombre']=$datoz['Nombre']." ".$datoz['Apellido'];
        }
        $dias = array();
	for($i=0;$i<=31;$i++)
            if($i>0)
		$dias[$i]=str_pad(($i), 2, "0", STR_PAD_LEFT);
            else
		$dias[$i]="";
        $mes = array();
	for($i=0;$i<=12;$i++)			
            if($i>0)
		$mes[$i]=str_pad(($i), 2, "0", STR_PAD_LEFT);
            else
	$mes[$i]="";
	$anio_actual= date("Y");
        $anio = array();			
	$k=0;
	for($i=$anio_actual;$i>=2000;$i--) {
            $anio[$k]=$i;
            $k++;
	}
        $_SESSION['f_dias']=$dias;
	$_SESSION['f_mes']=$mes;
	$_SESSION['f_anio']=$anio;
	echo "<script language=\"javascript\">";
	echo "window.location='../main.php'";
	echo "</script>";
    } elseif($_REQUEST['opcion']=='logout') {
	session_destroy();
	echo "<script language=\"javascript\">";
	echo "window.location='../index.php'";
	echo "</script>";
    } elseif($_REQUEST['opcion']=='cambiarclave'){
	$oe->tipo_operacion='C';
	$oe->setId($_SESSION['user']);
	$oe->setUsuario($_SESSION['user']);
	$od = new dCrm_usuario();
	$clave_nueva =  $_REQUEST['txtclaveconfirmar'];
	$oe->setClave($clave_nueva);	
	$ol->CambiarClave($oe,$_REQUEST['txtclaveantigua'],$_REQUEST['txtclavenueva']);
    } 
}
?>