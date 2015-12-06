// JavaScript Document
var IGV=18;
var SEG_DERECHO_EMISION=3;

function eliminarElemento(id){
	imagen = document.getElementById(id);	
/*	if (!imagen){
		alert("El elemento selecionado no existe");
	} else {
		padre = imagen.parentNode;
		padre.removeChild(imagen);
	}*/
	if (imagen){
		padre = imagen.parentNode;
		padre.removeChild(imagen);
	}

}
function confirmar(mensaje){
		if(confirm(mensaje)){
		return true;
		}else{
		return false;
		}
}
function PopUp2 (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=500, top=85, left=140";
window.open(pagina,"",opciones);
}
function f_Mensaje(mensaje){
			 $.jGrowl(''+mensaje+'', {
						//position: 'center'
						position: 'bottom-right'
						});
}
function f_ocultar(div){
	var L;
	var R;

	L=document.getElementById('activo_izquierda').innerHTML;
	R=document.getElementById('activo_derecha').innerHTML;

	if(div=='lado_izquierda'){
		if(L=='1' && R=='1'){
			document.getElementById('div_cuerpo_1').style.width=30;
			document.getElementById('div_cuerpo_2').style.width=808;//(692+146-20);
			document.getElementById('activo_izquierda').innerHTML='0';
			document.getElementById(div).style.display='none';
			//$('#'+div).fadeOut();
			document.getElementById('boton_izquierda').innerHTML="<a href='#' onclick=\"f_ocultar('lado_izquierda');\" title=\"Mostrar Menu\"><img src='images/ultimo.png' width='14px' height='14px'><img src='images/ocultar.jpg' width='14px' height='14px'></a>";			
			//$('#'+div).fadeIn();
		}
		else if(L=='1' && R=='0')
		{
		    document.getElementById('div_cuerpo_1').style.width=30;
			document.getElementById('div_cuerpo_2').style.width=924;//(692+146-20);
			document.getElementById('activo_izquierda').innerHTML='0';
			document.getElementById(div).style.display='none';
			//$('#'+div).fadeOut();
			document.getElementById('boton_izquierda').innerHTML="<a href='#' onclick=\"f_ocultar('lado_izquierda');\" title=\"Mostrar Menu\"><img src='images/ultimo.png' width='14px' height='14px'><img src='images/ocultar.jpg' width='14px' height='14px'></a>";
		}		
		else if(L=='0' && R=='0')
		{
			document.getElementById('div_cuerpo_1').style.width=146;
			document.getElementById('div_cuerpo_2').style.width=808;//(692+146-20);
			document.getElementById('activo_izquierda').innerHTML='1';
			document.getElementById(div).style.display='block';
			$('#'+div).fadeOut();
			document.getElementById('boton_izquierda').innerHTML="<a href='#' onclick=\"f_ocultar('lado_izquierda');\" title=\"Ocultar Menu\"><img src='images/primero(1).png' width='14px' height='14px'><img src='images/mostrar.jpg' width='14px' height='14px'></a>";
			$('#'+div).fadeIn();
		}
		else
		{
			document.getElementById('div_cuerpo_1').style.width=146;
			document.getElementById('div_cuerpo_2').style.width=692;
			document.getElementById('activo_izquierda').innerHTML='1';
			document.getElementById(div).style.display='block';
			$('#'+div).fadeOut();
			document.getElementById('boton_izquierda').innerHTML="<a href='#' onclick=\"f_ocultar('lado_izquierda');\" title=\"Ocultar Menu\"><img src='images/primero(1).png' width='14px' height='14px'><img src='images/mostrar.jpg' width='14px' height='14px'></a>";
			$('#'+div).fadeIn();
		}
	}
	else if(div=='lado_derecha')
	{
		if(R=='1' && L=='1'){
			document.getElementById('div_cuerpo_3').style.width=30;
			document.getElementById('div_cuerpo_2').style.width=808;//(692+146-20);
			document.getElementById('activo_derecha').innerHTML='0';
			document.getElementById(div).style.display='none';
			//$('#'+div).fadeOut();
			document.getElementById('boton_derecha').innerHTML="<a href='#' onclick=\"f_ocultar('lado_derecha');\" title='Mostrar Alertas'><img src='images/primero(1).png' width='14px' height='14px'><img src='images/ocultar.jpg' width='14px' height='14px'></a>";
			//$('#'+div).fadeIn();
		}
		else if (R=='1' && L=='0'){
			document.getElementById('div_cuerpo_3').style.width=30;
			document.getElementById('div_cuerpo_2').style.width=924;//(692+146-20);
			document.getElementById('activo_derecha').innerHTML='0';
			document.getElementById(div).style.display='none';
			//$('#'+div).fadeOut();
			document.getElementById('boton_derecha').innerHTML="<a href='#' onclick=\"f_ocultar('lado_derecha');\" title='Mostrar Alertas'><img src='images/primero(1).png' width='14px' height='14px'><img src='images/ocultar.jpg' width='14px' height='14px'></a>";

		}
		else if(R=='0' && L=='0'){
			document.getElementById('div_cuerpo_3').style.width=146;
			document.getElementById('div_cuerpo_2').style.width=808;//(692+146-20);
			document.getElementById('activo_derecha').innerHTML='1';
			document.getElementById(div).style.display='none';
			$('#'+div).fadeOut();
			document.getElementById('boton_derecha').innerHTML="<a href='#' onclick=\"f_ocultar('lado_derecha');\" title='Ocultar Alertas'><img src='images/mostrar.jpg' width='14px' height='14px'><img src='images/ultimo.png' width='14px' height='14px'></a>";
			$('#'+div).fadeIn();
		}
		else
		{
			document.getElementById('div_cuerpo_3').style.width=146;
			document.getElementById('div_cuerpo_2').style.width=692;
			document.getElementById('activo_derecha').innerHTML='1';
			document.getElementById(div).style.display='block';
			$('#'+div).fadeOut();
			document.getElementById('boton_derecha').innerHTML="<a href='#' onclick=\"f_ocultar('lado_derecha');\" title='Ocultar Alertas'><img src='images/mostrar.jpg' width='14px' height='14px'><img src='images/ultimo.png' width='14px' height='14px'></a>";
			$('#'+div).fadeIn();
		}		
	}
}

function popUp(URL,ancho,alto,resizable) {
	day = new Date();
	id = day.getTime();
	var sHeight, sWidth;
	sHeight = screen.height;
	sWidth = screen.width;
	var sLeft, sTop;
	sLeft = (screen.width - ancho) / 2;
	sTop = (screen.height - alto) / 2;
	eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable="+resizable+",width= " + ancho + ",height= " + alto + ",left = " + sLeft + ",top = "+ sTop +"');");
}


function f_diferencia_fecha(d1,d2){  
    var d1 = $('#'+d1).val().split("/");  
    var dat1 = new Date(parseFloat(d1[0]), parseFloat(d1[1])-1, d1[2]);  
    var d2 = $('#'+d2).val().split("/");  
    var dat2 = new Date(parseFloat(d2[0]), parseFloat(d2[1])-1, d2[2]);  
  
    var fin = dat2.getTime() - dat1.getTime();  
    var dias = Math.floor(fin / (1000 * 60 * 60 * 24))    
  
    return dias;  
} 

function f_Fecha_suma_dias(fecha_emision,numdias)
{
  var fecha_ = fecha_emision.split("/");
  fecha_emision=fecha_[2]+'-'+fecha_[1]+'-'+fecha_[0];
  fecha_emision=fecha_emision.replace("-", "/").replace("-", "/");    
 
  fecha_emision= new Date(fecha_emision);
  fecha_emision.setDate(fecha_emision.getDate()+numdias);
  var anio=fecha_emision.getFullYear();
  var mes= fecha_emision.getMonth()+1;
  var dia= fecha_emision.getDate();
 
  if(mes.toString().length<2){
    mes="0".concat(mes);        
  }    
 
  if(dia.toString().length<2){
    dia="0".concat(dia);        
  }
 
//	 alert(dia+"/"+mes+"/"+anio);
 var fecha2=dia+"/"+mes+"/"+anio;
 return fecha2;
}

function f_Fecha_suma_anio(fecha_emision,numanio)
{
  var fecha_ = fecha_emision.split("/");
  fecha_emision=fecha_[2]+'-'+fecha_[1]+'-'+fecha_[0];
  fecha_emision=fecha_emision.replace("-", "/").replace("-", "/");    
 
  fecha_emision= new Date(fecha_emision);
  fecha_emision.setDate(fecha_emision.getDate());
  var num = parseInt(numanio);  
  var anio=fecha_emision.getFullYear()+num;
  var mes= fecha_emision.getMonth()+1;
  var dia= fecha_emision.getDate();
 
  if(mes.toString().length<2){
    mes="0".concat(mes);        
  }    
 
  if(dia.toString().length<2){
    dia="0".concat(dia);        
  }
 
//	 alert(dia+"/"+mes+"/"+anio);
 var fecha2=dia+"/"+mes+"/"+anio; 
 return fecha2;
}

function get_random_color() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
            color += letters[Math.round(Math.random() * 15)];
    }
        return color;
}


var nav1 = window.Event ? true : false;

function solonumerosentero(evt){
// Backspace = 8, Enter = 13, '0' = 48, '9' = 57, '.' = 46
var key = nav1 ? evt.which : evt.keyCode;
return (key <= 13 || (key >= 48 && key <= 57));
}


var nav2 = window.Event ? true : false;

function solonumerodecimal(evt){
// Backspace = 8, Enter = 13, '0' = 48, '9' = 57, '.' = 46
var key = nav2 ? evt.which : evt.keyCode;
return (key <= 13 || (key >= 48 && key <= 57) || key == 46);
}

