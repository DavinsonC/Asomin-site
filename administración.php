<?php
session_start();
    include "conexion.php";
    if(isset($_SESSION['Usuario'])){

    }else{
        header("Location:Login_v11/Login.php?Error=Acceso denegado");
    }
?>

<!doctype html>
<html class="no-js" lang="es">
    <head>
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
    
							
							
								
								<li><a class="page-scroll" href="#">Galeria de Momentos</a></li>
								<li><a class="page-scroll" href="subirImagenes.php">Subir imagenes</a></li>
								<li><a class="page-scroll" href="cerrar.php">cerrar sesiòn</a></li>
							</ul>
						</div>		
						</nav>			
					</div>					
						
				</div>
			</div>	
		</div>	
	</div>	
</header>

<br><br><br><br>


   





       <?php include("conexion.php") ?>
    


   




        <div class="content" style="padding: 40px;">
        
            <div class="row">
                
                    
                        
                            <h3 class="box-title" style="text-align: center;">HOJAS DE VIDA</h3>
                            <?php 
     
        $resultado=mysqli_query($con,"select * from Curriculum ");
        
         if(mysqli_num_rows($resultado) > 0){

            $resul="<table class='table table-bordered'>

                  <tr>
                                            <th >Cedula</th>
                                           
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Ciudad</th>
                                            <th>Profecion</th>
                                            <th>Telefono</th>
                                            <th>Hoja de vida</th>
                                        </tr>
        
               
                ";
         
        while($row=mysqli_fetch_array($resultado)){
            $resul.=' 
            <tr>
                
                <td class="active"><input name="id" type="text" class="active" value="'.$row['documento'].'"></td>
                <td class="active"><input name="id" type="text" class="active" value="'.$row['Nombre'].'"></td>
                <td class="active"><input name="n" type="text" class="nombre" value="'.$row['Apellido'].'"></td>
                 <td class="active"><input name="n" type="text" class="nombre" value="'.$row['Ciudad'].'"></td>
                 <td class="active"><input name="n" type="text" class="nombre" value="'.$row['Carrera'].'"></td>
                <td class="active"><input name="t"  type="text" class="vip" value="'.$row['Telefono'].'"></td>
                <td class="success"><a href="archivos/'.$row['Hv'].'"><input  name="p"  type="text" class="premi" value="'.$row['Hv'].'"></a></td>
                
                

                
                


                                    
            </tr>';
        };
        echo $resul;
    }
        else{
            echo "no hay hojas de vida registradas ";
            
        }
                       
            
    
    ?>
                       
                            
                            
                       
                </div>  
                </div>
   </div>
     
      




</body>
</html>
