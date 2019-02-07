

<!DOCTYPE html>
<html lang="en"> 
<head>

	
	<meta charset="utf-8">
	<title>DotCode - Gallery</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	


		
		
		
		<link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />
		

		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Asociación de mujeres e infancia – ASOMIN</title>
        <meta name="description" content="">
        <META name="keywords" lang="es" 
      content="Asomin, Arauca, mujeres, asociación,ICBF">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="text/css" href="img/log.ico">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 		
        <!-- Place favicon.ico in the root directory -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">

	<!-- Optional - Adds useful class to manipulate icon font display -->
	<link rel="stylesheet" href="pe-icon-7-stroke/css/helper.css">


	
</head>
<body>
<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="lft_hd">
					<a href="index.html"><h1 style="color: #ffffff;"><STRONG>ASOMIN</STRONG></h1></a>
				</div>
			</div>

					
			<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="rgt_hd">					
					<div class="main_menu">
						<nav id="nav_menu">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>	
						<div id="navbar">
							<ul>
								<li><a class="page-scroll" href="index.php">Inicio</a></li> 
    
							
							
								<li><a class="page-scroll" href="Nosotros.html">Sobre Nosotros</a></li>
								<li><a class="page-scroll" href="gallery.php">Galeria de Momentos</a></li>
								<li><a class="page-scroll" href="#">Documentación</a>
								<ul>
								<li><a class="page-scroll" style="font-size: 10px;" href="Documentos/OBJETIVOS SISTEMA DE GESTION DE LA SEGURIDAD EN EL TRABAJO.pdf" target="_blank">OBJETIVOS SISTEMA DE GESTION DE LA SEGURIDAD EN EL TRABAJO</a></li>
								<li><a class="page-scroll" style="font-size: 10px;" href="Documentos/POLITICA DE SEGURIDAD VIAL.pdf" target="_blank">POLITICA DE SEGURIDAD VIAL</a></li>
								<li><a class="page-scroll" style="font-size: 10px;" href="Documentos/ DE PREVENCIÓN DE CONSUMO DE TABACO.pdf" target="_blank">POLÍTICA DE PREVENCIÓN DE CONSUMO DE TABACO</a></li>
								<li><a class="page-scroll" style="font-size: 10px;" href="Documentos/POLÍTICA DE PREVENCIÓN DEL CONSUMO DE SUSTANCIAS PSICOACTIVAS.pdf" target="_blank">POLÍTICA DE PREVENCIÓN DEL CONSUMO DE SUSTANCIAS PSICOACTIVAS</a></li>
								<li><a class="page-scroll" style="font-size: 10px;" href="Documentos/POLÍTICA DE SEGURIDAD Y SALUD EN EL TRABAJO.pdf" target="_blank">POLÍTICA DE SEGURIDAD Y SALUD EN EL TRABAJO</a></li>
								<li><a class="page-scroll" style="font-size: 10px;" href="Documentos/POLÍTICA MEDIO AMBIENTAL.pdf" target="_blank">POLÍTICA MEDIO AMBIENTAL</a></li>
								<li><a class="page-scroll"  href="Documentos/REGLAMENTO DE HIGIENE Y SEGURIDAD INDUSTRIAL.pdf" style="font-size: 10px;" target="_blank">REGLAMENTO DE HIGIENE Y SEGURIDAD INDUSTRIAL</a></li>
								
								
								<li><a class="page-scroll"  href="Documentos/proceso de selección del telento humano.pdf" style="font-size: 10px;" target="_blank">PROCESOS DE SELECCIÓN</a></li>
								</ul>
								</li>
								
							</ul>
						</div>		
						</nav>			
					</div>					
						
				</div>
			</div>	
		</div>	
	</div>	
</header>
<br><br><br><br><br>
<!-- End Header Section 



		<!-- Blog Section
	================================================== -->
<div class="gallery-head">
	
	 <div class="gallery-text">
		 
	 </div>

		<div class="container">
			<div class="one-whole text-center">
            
			<h1><strong>
				Galeria de Imagenes
				</strong></h1>
				
              

                <hr style="border:solid 1px;margin-top:0px;">
<p style="margin-left:75px">
				<?php  
		include "conexion.php";

$sql = "SELECT * FROM Fotos";
$num_rows = mysqli_num_rows(mysqli_query($con,$sql));		
####### Fetch Results From Table ########

$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
$gimage=$row['nombre'];

?>	
	
<?php	echo "<a href='img/$gimage' target='_self'  class='inline-block litebox' data-litebox-group='group-1'><img style='width: inherit;' height='255' src='img/$gimage' class='inline-block' /></a> ";?>			
<?php } ?>				
</p>
				
</div>			
</div>
<div class="clearfix"></div>
</div>	
</div>	

<img style>



	
	<!-- Bottom Footer Section
	================================================== -->
<div class="bottom_footer_section">
	<div class="container">
	<div class="sixteen columns bottom_line_dev">	
		
<br/><br/>		
<hr style="border:solid 1px;margin-top:0px">
<br/>
<br/>
<br/>
		</div>	
        
	</div>	
</div>	


	<!-- Primary Page Layout
	================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="litebox-master/assets/js/smoothscroll.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/images-loaded.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/tipsy.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/backbone.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/litebox.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			$('.litebox').liteBox();
		</script>
	
<!-- JavaScript
	================================================== -->
	<script src="js/jquery-main.js" type="text/javascript"></script>
	<script type='text/javascript' src="js/jquery-latest.min.js"></script>
	<script type='text/javascript' src='js/menu_jquery.js'></script>
	<script src="js/car/jquery-1.7.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="js/car/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
    <script src="js/car/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
	<script src="js/ticker.js" type="text/javascript"></script>
	<script type='text/javascript' src='js/jquery.common.min.js'></script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = '../../apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>



<!-- End Document
================================================== -->
</body>

</html>