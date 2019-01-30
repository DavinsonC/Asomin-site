<?php
session_start();
    include "conexion.php";
    if(isset($_SESSION['Usuario'])){

    }else{
        header("Location:Login_v11/Login.php?Error=Acceso denegado");
    }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Asociación de mujeres e infancia (ASOMIN)</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/log.ico">
    <link rel="shortcut icon" href="img/log.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">


 

    <link rel="stylesheet" href="assets/css/style.css">
    
    


    <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart { 
            min-height: 335px; 
        }
        #flotPie1  {
            height: 150px;
        } 
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        } 

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>

</head>
<body>


   



    <!-- Right Panel --> 
   
           <?php include("conexion.php") ?>
        <?php include("header.php") ?>
        <!-- Header-->


       
<li><a href="cerrar.php" ><h3 >Cargar Imagen</h3></a></li>

  

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
            };echo $resul;
        }
            else{
                echo "no hay hojas de vida registradas ";
                
            }
                           
                
        
        ?>
                           
                                
                                
                           
                    </div>  
                    </div>
    </div>
    <?php include("footer.php") ?>




</body>
</html>
