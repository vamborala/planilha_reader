<?php
include_once('functions.php');

/*
 * Tratamento feito após o submit
 */
if (getval('btnSubmit', false)){
	die("oi, eu sou o goku");
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de leitura de planilhas by dellatorre.co</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="functions.js"></script>
</head>
<body>
	<div class="banner">
		<img src="logo_continental.png" width="600px">
	</div>
	<div class="banner" id="loadingFrame" style="display: none;">
		<img src="aguarde.gif" style="margin-top: -85px;" />
	</div>
	<div id="divForm">
		<form name='consulta' id='consulta' method="post" onSubmit="return exibeLoading()">
			<table id="formulario">
				<tr>
					<td class="radiosTd">
						<input type="radio" name="radioOptions" id="grouponRadio" />Groupon
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="radioOptions" id="peixeRadio" />Peixe Urbano
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="file" name="fileUpload" id="fileUpload">
					</td>
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td class="tdSubmit">
						<input type="submit" name="btnSubmit" id="btnSubmit" value="Processar planilha" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
