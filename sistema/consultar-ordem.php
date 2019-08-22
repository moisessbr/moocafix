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
	<title>Mooca Fix - Consultar Ordem de Serviço</title>
	<meta name="description" content="Consultar ordem de serviço.">
	<meta name="author" content="Mooca Fix">
<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
	================================================== -->
	<!-- Bootstrap  -->
	<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<!-- web font  -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
	<!-- plugin css  -->
	<link rel="stylesheet" type="text/css" href="../js-plugin/animation-framework/animate.css" />
	<!-- Pop up-->
	<link rel="stylesheet" type="text/css" href="../js-plugin/magnific-popup/magnific-popup.css" />
	<!-- Owl carousel-->
	<link rel="stylesheet" href="../js-plugin/owl.carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="../js-plugin/owl.carousel/owl-carousel/owl.theme.css">
	<!-- icon fonts -->
	<link type="text/css" rel="stylesheet" href="../font-icons/custom-icons/css/custom-icons.css">
	<link type="text/css" rel="stylesheet" href="../font-icons/custom-icons/css/custom-icons-ie7.css">
	<!-- Custom css -->
	<link type="text/css" rel="stylesheet" href="../css/layout.css">
	<link type="text/css" id="colors" rel="stylesheet" href="../css/colors.css">
	<link type="text/css" rel="stylesheet" href="../css/custom.css">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<script src="../js/modernizr-2.6.1.min.js"></script>
<script>
function mascara(src, mask){
var i = src.value.length;
var saida = mask.substring(0,1);
var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
{
src.value += texto.substring(0,1);
}
} 
</script>
<script language="JavaScript" type="text/javascript">
var timer;

function limitarTamanho1(tamanho1) {
//ta = TextArea
//tamanho = maximo de caracteres permitidos
    var ta = document.getElementById("problema");
    if(ta.value.length > tamanho1)
        ta.value = ta.value.substring(0, tamanho1);
    timer = setTimeout("limitarTamanho1(" + tamanho1 + ")", 100);
    return;
}

function limitarTamanho(tamanho) {
//ta = TextArea
//tamanho = maximo de caracteres permitidos
    var ta = document.getElementById("endereco");
    if(ta.value.length > tamanho)
        ta.value = ta.value.substring(0, tamanho);
    timer = setTimeout("limitarTamanho(" + tamanho + ")", 100);
    return;
}

function pararLimitacao() {
    clearTimeout(timer);
    return;
}
</script>
<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>

<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../images/apple-touch-icon-144x144.png">
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51813469-1', 'moocafix.com.br');
  ga('send', 'pageview');

</script>

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

							<a class="navbar-brand" href="../index.html"><img src="../images/main-logo.png" alt="Mooca Fix"/></a>
						</div>
						<div class="collapse navbar-collapse" id="mainMenu">

							<ul class="nav navbar-nav pull-right">

								<li class="primary">
									<a href="../index.html" class="firstLevel" >Home</a>
									
								</li>

								<li class="sep"></li>

								<li class="primary"> 
									<a href="../servicos.html" class="firstLevel hasSubMenu" >Serviços</a>
									<ul class="subMenu">
										<li><a href="../servicos-apple.html">Apple iPhone e iPad</a></li>
										<li><a href="../servicos-gps.html">GPS</a></li>
										<li><a href="../servicos-lg.html">LG</a></li>
										<li><a href="../servicos-motorola.html">Motorola</a></li>
										<li><a href="../servicos-nokia.html">Nokia</a></li>
										<li><a href="../servicos-samsung.html">Samsung</a></li>
										<li><a href="../servicos-sony.html">Sony</a></li>
										<li><a href="../servicos-outras.html">Outras Marcas</a></li>
								    </ul>
								</li>

								<li class="sep"></li>

								<li class="primary">
									<a href="../como-funciona.html" class="firstLevel">Como Funciona?</a>

								</li>

						
								<li class="sep"></li>
								<li lass="primary"><a href="../contato.html" class="firstLevel" >Contato</a></li>
                                
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
							<h1>Ordem de Serviço</h1>
						</div>
					</div>
				</div>
			</header>
								<section class="mt40">

									<div class="container">

										<div class="row">
											<div class="span12 text-center mb40">
                                            <h1>Consulte o andamento.</h1>
												<h2 class="subTitle">Está com dúvidas? Ligue 2081-5997</h2>
											</div>


											<div class="col-md-8 col-md-offset-2 boxFocus pt30 mb30">
												
												<div class="row">

						<div class="col-md-12" > 
						<form method="post" action="things/chu-xenghuis.php" id="contactfrm" role="form" class="mb15 pb40">
															<div class="form-group">
																<label for="email">Email</label>
																<input type="email" class="form-control" maxlength="60" name="email" id="email" placeholder="Digite seu e-mail" title="Digite um endereço válido."/>
															</div>
                                                            <div class="form-group">
																<label for="os">Número da Ordem de Serviço</label>
																<input type="os" onkeypress="return SomenteNumero(event)" maxlength="5" class="form-control" name="os" id="os" placeholder="Digite o número da ordem para consulta." title="Digite o número informado no momento do cadastro."/> 
															</div>
                                                              <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Enviar</button>
						</form>
													</div>

												</div>

											</div>
											
										</div>
									</div>

								</section>

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
		
		<script type="text/javascript" src="../js-plugin/respond/respond.min.js"></script>
	<script type="text/javascript" src="../js-plugin/jquery/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="../js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
	<!-- third party plugins  -->
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../js-plugin/easing/jquery.easing.1.3.js"></script>
	<!-- carousel -->
	<script type="text/javascript" src="../js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
	<!-- pop up -->
	<script type="text/javascript" src="../js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- form -->
	<script type="text/javascript" src="../js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
	<script type="text/javascript" src="../js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
	<!-- Custom  -->
	<script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>
