<?PHP
session_name('apcix');
session_start();
include_once("cLogica/d_conexion.php");

class lCrm_menu {
    public function Listar($oeMenu) {
	$od = new dCrm_menu();
	$datos = $od->Listar($oeMenu);
	return $datos;
    }
    public function AccesoMenu($oeMenu) {
	$od = new dCrm_menu();
	$datos = $od->AccesoMenu($oeMenu);
	return $datos;
    }
    public function AccesoMenu_M($oeMenu) {
	try {
            $sql ="SELECT M.* FROM  menu M
            LEFT JOIN acceso MP ON M.IdMenu = MP.IdMenu 
            LEFT JOIN rangopersonero PR ON  MP.RangoPerso =  PR.codrango
            WHERE PR.codrango='".$_SESSION['RangPer']."'";
            //echo $sql;
            //$_SESSION['sql_m']=$sql;
            $ocado = new cado();
            return $ocado->ejecutar_sql($sql);  
	}
        catch (Exception $e){
            throw new Exception($e->getMessage(),$e->getCode());
	}
    }
    public function AccesoSubMenu_M($oeMenu) {
	$od = new dCrm_menu();
	$datos = $od->AccesoSubMenu_M($oeMenu);
	return $datos;
    }
    public function AccesoMenu_SM($oeMenu) {
	$od = new dCrm_menu();
	$datos = $od->AccesoMenu_SM($oeMenu);
	return $datos;
    }
    public function Combo($oeMenu) {
        $od = new dCrm_menu();
	$datos = $od->Combo($oeMenu);
	return $datos;
    }
    public function Guardar($oeMenu) {
	if($oeMenu->tipo_operacion=='I' && $_SESSION['user_ins']=='N'){
            $mensaje="Error,No tiene permisos para registrar este registro";
        } elseif($oeMenu->tipo_operacion=='A' && $_SESSION['user_mod']=='N'){
            $mensaje="Error,No tiene permisos para modificar este registro";
	} elseif($oeMenu->tipo_operacion=='E' && $_SESSION['user_eli']=='N'){
            $mensaje="Error,No tiene permisos para eliminar este registro";
	} elseif(strlen($mensaje)==0) {
            $valor=array();
            if($oeMenu->tipo_operacion != 'E'){ 
                $valor=$this->ValidarObjeto($oeMenu);              
            } else{
                $valor[0]=true;
                $valor[1]="mensaje";  
            }
            if($valor[0]) {
		$od = new dCrm_menu();
		if($od->Guardar($oeMenu)==1){
                    if($oeMenu->tipo_operacion=='E')
			$mensaje='Ok,Menu eliminado con exito';
                    else
			$mensaje='Ok,menu registrado con exito';
		} else 	{
                    if($oeMenu->tipo_operacion=='E') 
			$mensaje='Error,Menu eliminado sin exito'; 
                    else 
			$mensaje='Error,Menu registrado sin exito';  
		}
            } else {
		$mensaje=$valor[1].",".$valor[2];
            }			
	}
	echo $mensaje;
    }
	
    function ValidarObjeto($oeMenu){
	$valor=array();
	$valor[0]=true;
	$valor[1]="mensaje";
        if(strlen($oeMenu->getNombre())==0) {
            $valor[0]=false;
            $valor[1]="Error,Ingrese nombre del menu";
            $valor[2]="txtdescripcion";
            return $valor;	
        }
	if(strlen($oeMenu->getOrden())==0) {
            $valor[0]=false;
            $valor[1]="Error,Ingrese orden del menu";
            $valor[2]="txtorden";
            return $valor;	
	}	
	return $valor;
    }		
}
?>