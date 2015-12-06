<?php
require("cLogica/lPresonero.php");
$ol = new lPresonero();
$rs=$ol->Listar($oe);
while($rs0 = mysql_fetch_array($rs)) {
    $DNI=$rs0['DNI'];
    $Apellido=$rs0['Apellido'];
    $Nombre = $rs0['Nombre'];
    $Direccion = $rs0['Direccion'];
    $NivelEducacion = $rs0['NivelEducacion'];
    $Institucion  = $rs0['Institucion'];
    $Carrera = $rs0['Carrera'];
    $MesaVotacion = $rs0['MesaVotacion'];
    $CodRangPer = $rs0['CodRangPer'];
}?>
<form class="mws-form" action="cLogica/lPresonero.php?opcion=logueo" method="post" id="frmlogin" name="frmlogin">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td width="10%">      
            <label for="textfield" class="mws-form-label">DNI</label>
		</td>
		<td>
                <input type="text" name="txtdni" readonly="true" id="txtdni" value="<?=$DNI;?>"/>
		</td>
        </tr>
        <tr>
		<td>
                <label for="textfield" class="mws-form-label">Apellido</label>
		</td>
		<td> 
               <input type="text" name="txtApellido" id="txtApellido" value="<?=$Apellido?>" />
		</td>
        </tr>
	<tr>
            <td><label for="textfield" class="mws-form-label">Nombre</label>
		</td>
            <td><input type="text" name="txtNombre" id="txtNombre" value="<?=$Nombre;?>" />
            </td>
	</tr>
        <tr>
            <td><label for="textfield" class="mws-form-label">Dirección</label>
		</td>
            <td><input type="text" name="txtDireccion" id="txtDireccion" value="<?=$Direccion;?>" />
            </td>
	</tr>
	<tr>
        <td><label for="textfield" class="mws-form-label">Grado de Instrucción</label>
	</td>
        <td>
        <select name="NivelEducacion" id="NivelEducacion" class="txtBox" onclick="ACtivarCarreda"  >
        <option value="No tengo" <?php if ($NivelEducacion=="No tengo") { ?> selected <?php } ?> >No Tengo</option>
      	<option value="Primaria Incompleta" <?php if ($NivelEducacion=="Primaria Incompleta") { ?> selected <?php } ?> >Primaria Incompleta</option>
      	<option value="Primaria Completa" <?php if ($NivelEducacion=="Primaria Completa") { ?> selected <?php } ?> >Primaria Completa</option>
      	<option value="Secundaria Imcompleta" <?php if ($NivelEducacion=="Secundaria Imcompleta") { ?> selected <?php } ?> >Secundaria Incompleta</option>
      	<option value="Secundaria Completa" <?php if ($NivelEducacion=="Secundaria Completa") { ?> selected <?php } ?> >Secundaria Completa</option>
      	<option value="Instituto Incompleta" <?php if ($NivelEducacion=="Instituto Incompleta") { ?> selected <?php } ?> >Instituto Incompleta</option>
      	<option value="Instituto Completa" <?php if ($NivelEducacion=="Instituto Completa") { ?> selected <?php } ?> >Instituto Completa</option>
      	<option value="Universidad Incompleta" <?php if ($NivelEducacion=="Universidad Incompleta") { ?> selected <?php } ?> >Universidad Incompleta</option>
        <option value="Universidad Egresado" <?php if ($NivelEducacion=="Universidad Egresado") { ?> selected <?php } ?> >Universidad Egresado</option>
      	<option value="Bachiller" <?php if ($NivelEducacion=="Bachiller") { ?> selected <?php } ?> >Bachiller</option>
      	<option value="Titulado" <?php if ($NivelEducacion=="Titulado") { ?> selected <?php } ?> >Titulado</option>
      	<option value="Maestria" <?php if ($NivelEducacion=="Maestria") { ?> selected <?php } ?> >Maestria</option>
      	<option value="Doctorado" <?php if ($NivelEducacion=="Doctorado") { ?> selected <?php } ?> >Doctorado</option>
    			</select>
                    </td>
		</tr>
		<tr>
            <td><label for="textfield" class="mws-form-label">Institucion</label>
		</td>
            <td><input type="text" name="txtInstitucion" id="txtInstitucion" value="<?=$Institucion;?>" />
            </td>
	</tr>
        <?php if ($CodRangPer=="3") { ?>
                    <tr>
            <td><label for="textfield" class="mws-form-label">Mesa Votacion</label>
		</td>
            <td><input type="text" name="txtMesaVotacion" id="txtMesaVotacion" value="<?=$MesaVotacion;?>" />
            </td>
	</tr>
                    <?php } ?>
        <tr>
            <td colspan="2"><input type="hidden" name="txtCodRangPer" id="txtCodRangPer" value="<?=$CodRangPer;?>" />
            <input type="submit" value="Grabar" class="btn btn-success mws-login-button"></td> 
        </tr>
            </table>
</form>
