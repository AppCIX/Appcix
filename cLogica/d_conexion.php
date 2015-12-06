<?php
//@header('Content-type: text/html; charset= iso-8859-1');
class CADO  {
	private $user; 
	private $pass;
	private $host;
	
	function __construct(){
		$this->user="root";
		$this->pass="toor";
		$this->host="localhost";
	}
	
	function conectar()
 {
   $link=mysql_connect($this->host,$this->user,$this->pass)
   or die('No se pudo conectar: ' . mysql_error());
   mysql_select_db("apcix",$link) or die('Error de conexi�n a la Base de Datos, Verifique CADO');
   return $link;
 }

  
  	 function ejecutar_sql($isql)
 {
	$rs = mysql_query($isql, $this->conectar());
	return $rs;
 }

 function desconectar()
 {
	mysql_close();
 }
	
}
?>