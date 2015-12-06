<?php
session_name('apcix');
session_start();
require_once('d_conexion.php');
require_once '../Excel/reader.php';
$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$archivo = $_FILES["archivo"]['name'];
$temp = $_FILES["archivo"]['tmp_name'];
$tipo = $_FILES["archivo"]['type'];
$destino =  "../archivo/Personero.xls";
$NuevoNivel = $_SESSION['RangPer']+1;
if ($tipo=="application/vnd.ms-excel") {
if (copy($temp,$destino)) {
     $data->read('../archivo/Personero.xls');
     for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
            if ($_SESSION['RangPer']=="1") {
                $DNI = $data->sheets[0]['cells'][$i][1];
                $Apellido = $data->sheets[0]['cells'][$i][2];
                $Nombre = $data->sheets[0]['cells'][$i][3];
            } elseif ($_SESSION['RangPer']=="2") {
                $MesaVotacion = $data->sheets[0]['cells'][$i][1]; 
                $DNI = $data->sheets[0]['cells'][$i][2];
                $Apellido = $data->sheets[0]['cells'][$i][3];
                $Nombre = $data->sheets[0]['cells'][$i][4];
        }
		$sql = "select * from  personero where DNI ='".$DNI."'";
	 $ocado = new cado();
     $datos = $ocado->ejecutar_sql($sql);
     if (mysql_num_rows($datos)==0){ 
         if ($_SESSION['RangPer']=="1") {
                $sql = "insert into  personero (DNI, Apellido, Nombre,CodRangPer,CodPartiPol)  VALUES 
                        ('".$DNI."','".$Apellido."','".$Nombre."','".$NuevoNivel."','".$_SESSION['partipoli']."')";
            } elseif ($_SESSION['RangPer']=="2") {
                $sql = "insert into  personero (DNI, Apellido, Nombre,MesaVotacion,CodRangPer,CodPartiPol)  VALUES 
                        ('".$DNI."','".$Apellido."','".$Nombre."','".$MesaVotacion."','".$NuevoNivel."','".$_SESSION['partipoli']."')";
        }
        //echo $sql;
         $ocado = new cado();
     $datos = $ocado->ejecutar_sql($sql);
     }
	}

}
} 
echo "<script language=\"javascript\">";
    echo "alert('Se ingreso con exito ');";
    echo "window.location='../main?modulo=Registrar'";
    echo "</script>";
} else {
    echo "<script language=\"javascript\">";
    echo "alert('Ingresar Excel del 97 aL 2003');";
    echo "window.location='../main?modulo=Registrar'";
    echo "</script>";
}

?>