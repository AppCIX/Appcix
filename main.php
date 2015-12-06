<?PHP
session_name('apcix');
session_start();
if(!isset($_SESSION['user'])){
	echo "<script language='Javascript'>"; 
	echo "window.location='index.php'";
	echo "</script>\n";
}
error_reporting( error_reporting() & ~E_NOTICE );
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<!-- Mirrored from www.malijuthemeshop.com/live_previews/mws-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 16 Mar 2013 16:47:31 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"><!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="plugins/colorpicker/colorpicker.css" media="screen"><!--<link rel="stylesheet" type="text/css" href="custom-plugins/wizard/wizard.css" media="screen">-->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen"><!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/fonts/icomoon/style.css" media="screen">
<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="custom-plugins/picklist/picklist.css" media="screen">
<link rel="stylesheet" type="text/css" href="plugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css" href="plugins/ibutton/jquery.ibutton.css" media="screen">
<link rel="stylesheet" type="text/css" href="plugins/cleditor/jquery.cleditor.css" media="screen">
<link rel="stylesheet" type="text/css" href="plugins/jgrowl/jquery.jgrowl.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/mws-style.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/icons/icol32.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/demo.css" media="screen">
<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="jui/jquery-ui.custom.css" media="screen">
<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/themer.css" media="screen">
	<!-- tabs -->
<link rel="stylesheet" href="css/estilo_tabs.css">
    <!-- JavaScript Plugins -->
    <script src="js/libs/jquery-1.8.3.min.js"></script>
    <script src="js/libs/jquery.mousewheel.min.js"></script>
    <script src="js/libs/jquery.placeholder.min.js"></script>
    <script src="custom-plugins/fileinput.min.js"></script>    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="jui/jquery-ui.custom.min.js"></script>
    <script src="jui/js/jquery.ui.touch-punch.min.js"></script>
	<link rel="stylesheet" href="css/jquery.datepick.css">
	<script src="js/jquery.datepick.js"></script>
    <script src="js/jquery.datepick-es.js"></script>    

    <script type="text/javascript" charset="utf-8" src="plugins/datatables/FixedColumns.js"></script>
    <!-- Plugin Scripts -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>    
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <!--<script src="plugins/flot/jquery.flot.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.resize.min.js"></script>-->
    <script src="plugins/colorpicker/colorpicker-min.js"></script>
    <script src="plugins/validate/jquery.validate-min.js"></script>
    <script src="plugins/jgrowl/jquery.jgrowl-min.js"></script>    
   <!-- <script src="custom-plugins/wizard/wizard.min.js"></script>-->
    <!-- Core Script -->
    <script src="plugins/cleditor/jquery.cleditor.min.js"></script>
    <script src="plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script src="plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
    <script src="plugins/cleditor/jquery.cleditor.icon.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/core/mws.js"></script>
    <!-- Themer Script (Remove if not needed) -->
    <script src="js/core/themer.js"></script>
    <!-- Demo Scripts (remove if not needed) -->
    <script src="js/demo/demo.dashboard.js"></script>
	<!-- funciones basicas -->
	<script type="text/javascript" src="js/funciones.js"></script>
        <!-- Demo Scripts (remove if not needed) -->
	<script src="js/demo/demo.widget.js"></script>
    <!-- <script src="http://malsup.github.com/jquery.form.js"></script> -->
    <!-- Demo Scripts (remove if not needed) -->
    <!-- <script src="js/demo/demo.widget.js"></script>-->
<script language="javascript">
$(document).ready(function(){
   tabs();  
   tabs2();
    $("#mm").hide();
   $("#om").show();
});

function tabs()
{
	var hash = window.location.hash.substr(1);
	var href = $('ul.tabs li a').each(function(){
		var href = $(this).attr('href');
		href=href.substr(1);
		if(hash==href){
			$(".tab_content").hide();
			$("ul.tabs li").removeClass("active");
			$(this).parent('li').addClass("active");
			$('#'+hash).fadeIn();
		}											
	})
	
	$("ul.tabs li").click(function()
       {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();

		var content = $(this).find("a").attr("href");
		$(content).fadeIn();
		return false;
	});
}

function tabs2()
{
    var hash = window.location.hash.substr(1);
    var href = $('ul.tabs li a').each(function(){
        var href = $(this).attr('href');
        href=href.substr(1);
        if(hash==href){
            $(".tab_content2").hide();
            $("ul.tabs li").removeClass("active");
            $(this).parent('li').addClass("active");
            $('#'+hash).fadeIn();
        }                                           
    })
    
    $("ul.tabs li").click(function()
       {
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide();

        var content = $(this).find("a").attr("href");
        $(content).fadeIn();
        return false;
    });
}

function pasar_tab2(tab,tabinactivo)
{
	$("ul.tabs li").removeClass("active");
	$("ul.tabs li").addClass("inactive");
	$(".tab_content").hide();
	var href = $('ul.tabs li a').each(function(){
		var href = $(this).attr('href');
		href=href.substr(1);
		if(tab==href){
			$(".tab_content").hide();
			$(this).parent('li').removeClass("inactive");
			$(this).parent('li').addClass("active");
			$('#'+tab).fadeIn()
		}											
	})
	//$('#'+tab).fadeIn();
	//$('#'+tabinactivo).attr('disabled','-1');
	//$('#'+tabinactivo).removeAttr('disabled');
	return tab;
}

function pasar_tab3(tab,tabinactivo)
{
    $("ul.tabs li").removeClass("active");
    $("ul.tabs li").addClass("inactive");
    $(".tab_content2").hide();
    var href = $('ul.tabs li a').each(function(){
        var href = $(this).attr('href');
        href=href.substr(1);
        if(tab==href){
            $(".tab_content2").hide();
            $(this).parent('li').removeClass("inactive");
            $(this).parent('li').addClass("active");
            $('#'+tab).fadeIn()
        }                                           
    })
    //$('#'+tab).fadeIn();
    //$('#'+tabinactivo).attr('disabled','-1');
    //$('#'+tabinactivo).removeAttr('disabled');
    return tab;
}

function f_Logout(){
	opcion='logout';
	$("#procesar").html("<br><center><img src='images/loadingFB.gif' width='60' height='15'></center>");
	$.post("cLogica/lCrm_usuario.php", {
	opcion:opcion
	}, function(data){
    $("#procesar").html(data);
	window.location=index.php;
    });	
}
function Ocultar_menu(){
    $("#mws-sidebar-stitch").hide();
    $("#mws-sidebar-bg").hide();
    $("#mws-sidebar").hide();
    $("#om").hide();
    $("#mm").show();
    $("#mws-container").css("margin-left","0px");
}
function Mostrar_menu(){
    var pwidth=$("#mws-sidebar-bg").css("width"); 
    $("#mws-container").css("margin-left",pwidth);
    $("#mws-sidebar-stitch").show();
    $("#mws-sidebar-bg").show();
    $("#mws-sidebar").show();
    $("#mm").hide();
    $("#om").show();    
}
</script>
<title>APCIX</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 36px;
	color: #FF0000;
}
.Estilo2 {color: #FF6600}
-->
</style>
</head>
<body >
	<!-- Themer (Remove if not needed) -->  
	<div id="mws-themer">
	  <div id="mws-themer-css-dialog">
        </div>
    </div>
    <!-- Themer End -->
	<!-- Header -->
  <div id="mws-header" class="clearfix" style="height:150px">    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="images/mws-logo.png" alt="mws admin" width="124" height="61">            
			</div>
        </div>         
        <h2 class="Estilo1 Estilo2">Bienvenido Personero <?=$_SESSION['Nombre']?></h2>
		<div class="pull-right">
                        <form class="mws-form" action="cLogica/lCrm_usuario.php?opcion=logout" method="post" id="frmlogin" name="frmlogin">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                        <input type="submit" value="Salir" class="btn btn-success mws-login-button">
                    </div>
					</div>
                </form>
	</div>
</div>    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">   
     
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar" >
		<?php require_once('menu.php');  ?>
        <div id="mws-searchbox" class="mws-inset">
			<div id="procesar"></div>            
        </div>
        </div>
      <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
		<!-- Inner Container Start -->
            <div class="container">
					<?php
                   // echo $_GET['modulo']."<br>";
                    //echo substr($_GET['modulo'],0,3);
    				if($_GET)
                    {
                        if(substr($_GET['modulo'],0,3)!='rpt')
    	                    require_once('cPresentacion/frm'.ucfirst(strtolower($_GET['modulo'])).'.php');
    					elseif(substr($_GET['modulo'],0,3)=='rpt')
                             require_once('cReporte/frm'.ucfirst(strtolower($_GET['modulo'])));                        
                    }
                    else
                    {
						require_once('cPresentacion/frmPrincipal.php');
                    }
					?>        
	        </div>
        	<!-- Inner Container Start --><!-- Inner Container End -->                       
            <!-- Footer -->
            <a href="#" class="btn" id="om" style="position:absolute;bottom:5px;left:0px;z-index:1;background:#003651;color:#CCCCCC" onClick="Ocultar_menu();" title="Ocultar Menu"><?=" << ";?></a>
            <a href="#" class="btn" id="mm" style="position:absolute;bottom:5px;left:0px;z-index:2;background:#003651;color:#CCCCCC" onClick="Mostrar_menu();" title="Mostrar Menu"><?=" >> ";?></a>

         <?PHP /* <div id="mws-footer">	Copyright &copy; 2013 EEPN. Todos los derechos reservados.   </div> */ ?>            
        </div>
        <!-- Main Container End -->        
    </div>

</div>
</body>
<!-- Mirrored from www.malijuthemeshop.com/live_previews/mws-admin/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 16 Mar 2013 16:47:37 GMT -->
</html>