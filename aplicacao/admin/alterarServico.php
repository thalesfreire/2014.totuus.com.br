<?php 
session_start();

require_once("../classes/br.com.totuus/ServicoManager.php");

//echo $_SERVER["SERVER_NAME"];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="br" lang="br" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<title>Totuus - Localiza��o e Monitoramento</title>

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />

	<link rel="shortcut icon" href="../../favicon.ico" />
	<link href="../../css/styles.css" type="text/css" rel="stylesheet" />

</head>
<script type="text/javascript" src="../../js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="../../js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="../../js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="../../js/totuus.js"></script>
<!-- Google Analytics -->
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30032054-1']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
<script language="javascript">

function showMensagem() {
	
	var sta = getParameterByName('sta');

	if(sta == 'success') {
		$("#msgContainer").css('border-color', '#009900');
		$("#msgContainer").css('color', '#009900');
		$("#msgContainer").fadeIn('slow');
		setTimeout("$('#msgContainer').fadeOut(2000);", 5000);
	} else if (sta == 'error') {
		$("#msgRetorno").html('Ocorreu algum erro durante a opera��o. Favor entrar em contato com o respons�vel.');
		$("#msgContainer").css('border-color', '#CC0000');
		$("#msgContainer").css('color', '#CC0000');
		$("#iconMsg").attr('src', '../../../images/error-icon.png');
		$("#msgContainer").fadeIn('slow');
		setTimeout("$('#msgContainer').fadeOut(2000);", 5000);
	}

}
</script>
<body onload="showMensagem();">

	<div id="Container">
	
		<!-- LOGO -->
		<div id="Outer">
			<div id="Header">
				<div id="Logo">
					<a href="servico/index.php"><img src="../../images/LogoTotuus.png" border="0" id="LogoImage" alt="Totuus - Localiza��o e Monitoramento" /></a>
				</div>
				<br class="Clear" />
			</div>		
		</div>
		
		<div id="TopMenu">
			<ul>
				<?php if(!empty($_SESSION["idUsuarioAdmin"])) { ?>
				  <li><a href="usuario.php">Controle de Usu�rios</a></li>
				  <li><a href="contrato.php">Controle de Contratos</a></li>
				  <li><a href="servico.php">Controle de Servi�os</a></li>
				  <li><a href="monitor.php">Monitor de C�meras</a></li>
				  <li><a href="tabelaPrecos.php">Tabela de Pre�os</a></li>
				  <?php }?>
			</ul>
			<br class="Clear" />
		</div>
		
		<div id="msgContainer" style="display:none;">
			<div id="msgImage"><img src="../../images/success-icon.png" width="30" height="30" id="iconMsg" /></div>
			<div id="msgRetorno">Dados do servi�o alterados com sucesso!</div>
		</div>
		
		<!-- CORPO -->
		<div class="Content" style="margin-left: 5px;">
		   
			<div id="bodyContainer">
				
				<h2>Controle de Servi�os</h2>
				
				<?php 
				
					$ervicoManager = new ServicoManager();
					$servico = $ervicoManager->findById($_REQUEST['seqServico']);
					
					
				?>
				
				<form action="servicoAction.php?method=alterarServico" method="post" class="wpcf7-form">

				<p class="" style="width:100%">Descri��o servi�o<br />
					<input type="text" class="inputFormContato" value="<?=$servico->dscServico?>" size="40" id="dscServico" name="dscServico"/>
				</p>
				
				<p>
					<input type="button" value="Voltar" onclick="javascript:window.location='servico.php';" />
				</p>
				
				<p>
					<input type="submit" value="Alterar" />
				</p>
				<input type="hidden" value="<?= $servico->seqServico ?>" id="seqServico" name="seqServico" />
				
			</form>
			</div>
			
		</div>
		
		<br class="Clear" />
        
		<!-- FOOTER -->
		<div id="Footer">
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.totuus.com.br&amp;send=false&amp;layout=button_count&amp;width=135&amp;show_faces=true&amp;action=recommend&amp;colorscheme=light&amp;font=verdana&amp;height=21&locale=pt_BR" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:21px;" allowTransparency="true"></iframe>
		
			<div style="padding-left: 470px; float: right;">Copyright &copy; 2012 Totuus. Todos os Direitos Reservados.</div>
			
		</div>

	
	</div>
</body>   
</html>
		
	