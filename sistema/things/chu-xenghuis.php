
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-br">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Mooca Fix</title>
	<meta name="description" content="Assistência técnica com a qualidade e a velocidade que você precisa.">
	<meta name="author" content="Mooca Fix">
<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
	================================================== -->
	<!-- Bootstrap  -->
	<link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<!-- web font  -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
	<!-- plugin css  -->
	<link rel="stylesheet" type="text/css" href="../../js-plugin/animation-framework/animate.css" />
	<!-- Pop up-->
	<link rel="stylesheet" type="text/css" href="../../js-plugin/magnific-popup/magnific-popup.css" />
	<!-- Owl carousel-->
	<link rel="stylesheet" href="../../js-plugin/owl.carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="../../js-plugin/owl.carousel/owl-carousel/owl.theme.css">
	<!-- icon fonts -->
	<link type="text/css" rel="stylesheet" href="../../font-icons/custom-icons/css/custom-icons.css">
	<link type="text/css" rel="stylesheet" href="../../font-icons/custom-icons/css/custom-icons-ie7.css">
	<!-- Custom css -->
	<link type="text/css" rel="stylesheet" href="../../css/layout.css">
	<link type="text/css" id="colors" rel="stylesheet" href="../../css/colors.css">
	<link type="text/css" rel="stylesheet" href="../../css/custom.css">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<script src="../../js/modernizr-2.6.1.min.js"></script>
<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="../../images/favicon.ico">
	<link rel="apple-touch-icon" href="../../images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../../images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../../images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../../images/apple-touch-icon-144x144.png">
</head>
<body>

	<div id="globalWrapper">
		<header class="navbar-fixed-top">

			<div id="mainHeader" role="banner">
				<div class="container">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">

							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a class="navbar-brand" href="../../index.html"><img src="../../images/main-logo.png" alt="Mooca Fix"/></a>
						</div>
						<div class="collapse navbar-collapse" id="mainMenu">

							<ul class="nav navbar-nav pull-right">

								<li class="primary">
									<a href="../../index.html" class="firstLevel" >Home</a>
									
								</li>

								<li class="sep"></li>

								<li class="primary"> 
									<a href="../../servicos.html" class="firstLevel hasSubMenu" >Serviços</a>
									<ul class="subMenu">
										<li><a href="../../servicos-apple.html">Apple iPhone e iPad</a></li>
										<li><a href="../../servicos-gps.html">GPS</a></li>
										<li><a href="../../servicos-lg.html">LG</a></li>
										<li><a href="../../servicos-motorola.html">Motorola</a></li>
										<li><a href="../../servicos-nokia.html">Nokia</a></li>
										<li><a href="../../servicos-samsung.html">Samsung</a></li>
										<li><a href="../../servicos-sony.html">Sony</a></li>
										<li><a href="../../servicos-outras.html">Outras Marcas</a></li>
								    </ul>
								</li>

								<li class="sep"></li>

								<li class="primary">
									<a href="../../como-funciona.html" class="firstLevel">Como Funciona?</a>

								</li>

						
								<li class="sep"></li>
								<li lass="primary"><a href="../../contato.html" class="firstLevel" >Contato</a></li>
                                
                                <li class="sep"></li>
								<li id="lastMenu" class="last"><a href="sistema" class="firstLevel last active">Ordens de Serviço</a></li>
							</ul>

						</div>
					</nav>
				</div>
			</div>
		</header>
<section id="page">
			<header class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>Ordens de Serviço</h1>
						</div>
					</div>
				</div>
			</header>
								<section class="mt40">

									<div class="container">

										<div class="row">
											<div class="span12 text-center mb40">
												
											</div>


											<div class="col-md-8 col-md-offset-2 boxFocus pt30 mb30">
												
												<div class="row">

						<div class="col-md-12" > 
                        <h3>
<?php

include 'curtis-lovi.php'; 

$email	= $_POST["email"];
$os	= $_POST["os"];

$rodrigu = mysql_query("SELECT * FROM  `KTQYjax` WHERE  `key` ='$os' AND  `imael` LIKE  '$email'")  or die(mysql_error());

	if (mysql_num_rows($rodrigu) > 0) {

while($exibe = mysql_fetch_assoc ($rodrigu)):


$silver = $exibe ["nume"];
$gold = $exibe ["estados"];
$blue = $exibe ["key"];
$reds = $exibe ["march"];
$greens = $exibe ["mudlo"];
$orca = $exibe ["orca"];
$valor1 = $exibe ["valorf"];
$dataentrega = $exibe ["delgy"];

$valordividido = explode('.', $valor1);
$valor = $valordividido[0].','.$valordividido[1];
$datadividida = explode('-', $dataentrega);
$dataentrega2 = $datadividida[2].'/'.$datadividida[1].'/'.$datadividida[0];

$agcoleta = "Aguardando Coleta";
$agconfirm = "Aguardando Confirmação";
$apcoletado = "Coletado";
$orcamento = "Orçamento";
$agaprovacao = "Aguardando Aprovação";
$apexecut = "Aprovado - Em Execução";
$apagpecas = "Aprovado - Aguardando Peças";
$executadoagentrega = "Executado - Aguardando Entrega";
$naoaprovado = "Não Aprovado";
$semreparo = "Sem Reparo";
$entregue = "Entregue";
$entreguenotrepair = "Entregue - Sem Reparo";
$entreguecancelado = "Entregue - Cancelado";

$mensagem="";
if ($gold == $agcoleta){
	
	$mensagem = "Olá <b>$silver</b> sua ordem de serviço nº <b>$blue</b> do seu <b>$reds $greens </b> já foi confirmada e está <b>$gold</b> que será realizada conforme informado via e-mail.";	

} elseif ($gold == $agconfirm){

  $mensagem = "Olá <b>$silver</b> atualmente a ordem de serviço nº <b>$blue</b> do seu <b>$reds $greens </b> encontra-se em <b>$gold</b> em breve nossa equipe entrará em contato via e-mail ou telefone para realizar a confirmação.";

} elseif ($gold == $apcoletado){

  $mensagem = "Olá <b>$silver</b> o seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> já foi <b>$gold</b>, entraremos em contato via e-mail ou telefone com o orçamento para aprovação em breve.";
  
  } elseif ($gold == $orcamento){

  $mensagem = "Olá <b>$silver</b> o orçamento do seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> já foi realizado:<p> $orca o valor total é de <b>R$ $valor.</b>";
  
  } elseif ($gold == $agaprovacao){

  $mensagem = "Olá <b>$silver</b> o orçamento do seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> já foi realizado: <p> $orca o valor total é de <b>R$ $valor</b>, estamos aguardando sua resposta para prosseguir com o conserto do seu aparelho.</b>";
  
  } elseif ($gold == $apexecut){

  $mensagem = "Olá <b>$silver</b> o seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> já esta sendo reparado, assim que for finalizado entraremos em contato.";
  
  } elseif ($gold == $apagpecas){

  $mensagem = "Olá <b>$silver</b> o seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> já teve o orçamento aprovado, e está apenas aguardando a chegada das peças para execução do reparo.";
  
  } elseif ($gold == $executadoagentrega){

  $mensagem = "Olá <b>$silver</b> o seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> já foi reparado, em breve o mesmo será entregue.";
  
  } elseif ($gold == $naoaprovado){

  $mensagem = "Olá <b>$silver</b> o orçamento do seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> não foi aprovado, em breve o mesmo será entregue.";
  
  } elseif ($gold == $semreparo){

  $mensagem = "Olá <b>$silver</b> o seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> infelizmente não teve reparo, em breve realizaremos a entrega do aparelho.";
  
  } elseif ($gold == $entregue){

  $mensagem = "Olá <b>$silver</b> o seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> já foi entregue em $dataentrega2 , quaisquer dúvidas entre em contato.";
  
  } elseif ($gold == $entreguenotrepair){

  $mensagem = "Olá <b>$silver</b> o seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> que infelizmente não teve reparo, já foi entregue em $dataentrega2 , quaisquer dúvidas entre em contato.";
  
  } elseif ($gold == $entreguecancelado){

  $mensagem = "Olá <b>$silver</b> o seu <b>$reds $greens </b>cadastrado sob a Ordem de Serviço nº <b>$blue</b> que não teve o orçamento aprovado foi entregue em $dataentrega2 , quaisquer dúvidas entre em contato.";

} else {

  $mensagem = "<b>Sem posição definida.</b><p><p>Entre em contato conosco pelo telefone <b>(11) 2081-5997</b> <p>ou por e-mail <b>contato@moocafix.com.br</b> ";

}
			
	echo $mensagem;

	endwhile;
	
	}else{
		echo "<b>Ordem de serviço não encontrada</b>. <p>Por gentileza <a href='javascript:window.history.go(-1)'> volte</a> e verifique o e-mail ou número da ordem de serviço. Caso tenha perdido estas informações entre em contato conosco.";
		
	}
	@mysql_close($link);
	@mysql_close($rodrigu);
	

?>

</h3><h2>
<a href='http://www.moocafix.com.br'>Clique Aqui para voltar ao site</a></h2><br>

													</div>

												</div>

											</div>
											<br>
										</div>
									</div>

								</section>
                                <br>

								<!-- contact -->

								

		<section  id="footerRights">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<ul class="socialNetwork">
							<li><a href="http://www.facebook.com/moocafix" target="_blank" class="tips" title="Nosso Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
							<li><a href="http://www.twitter.com/moocafix" target="_blank" class="tips" title="Nosso Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
							<li><a href="http://www.instagram.com/moocafix" target="_blank" class="tips" title=" Siga-nos no Instagram"><i class="icon-instagramm iconRounded"></i></a></li>
						</ul>     
					</div>
<div class="col-md-12">
												<p>Copyright © 2014 <a href="http://www.moocafix.com.br" target="blank">Mooca Fix</a> / Todos os direitos reservados.</p>
											</div>

			</div>
			</div>
		</section>
		</div>
		
		<script type="text/javascript" src="../../js-plugin/respond/respond.min.js"></script>
	<script type="text/javascript" src="../../js-plugin/jquery/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="../../js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
	<!-- third party plugins  -->
	<script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../../js-plugin/easing/jquery.easing.1.3.js"></script>
	<!-- carousel -->
	<script type="text/javascript" src="../../js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
	<!-- pop up -->
	<script type="text/javascript" src="../../js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- form -->
	<script type="text/javascript" src="../../js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
	<script type="text/javascript" src="../../js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
	<!-- Custom  -->
	<script type="text/javascript" src="../../js/custom.js"></script>
</body>
</html>

