<?php

require 'database.php';

?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>REGISTRO</title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/ace.min.css" />
        <link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="assets/css/ace-skins.min.css" />

     
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body class="navbar">
        <div class="row-fluid">
            <div class="span12">
                		
                    <div class="row-fluid">
                        <div class="center">
                            <img src="img/evole.jpg" style="width: 15%;">

                        </div>
                    </div>
               


                <div class="space-6"></div>

                <div class="row-fluid">
                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">

                                  
                                    <h1 class="header blue lighter center">
                                        REGISTRO
                                    </h1>
                                   

                                        
                                    <div class="center">
                                    <form action="funciones/registrar_usuario.php" method="POST">

                                    <input name="correo_usuario" id="correo_usuario" type="text" class="span3" placeholder="EMAIL" required/>
                                     <br>
                                    <input name="contracena" id="contracena" type="text" class="span3" placeholder="CONTRASEÑA" required/>
                                    <br>
                                                
                                         
                                                <select name="color" id="color" class="span3" required>
                                                     <option value="">SELECCIONA COLOR</option>
                                                    <option value="rojo">ROJO</option>
                                                    <option value="verde">VERDE</option>
                                                    <option value="azul">AZUL</option>
                                                    <option value="amarillo">AMARILLO</option>
                                                    <option value="blanco">BLANCO</option>
                                                    <option value="negro">NEGRO</option>

                                                </select>

                                                  <BR>
                                                <input type="submit" value="Registrar" id="Registrar" class="width-20 btn btn-small btn-primary" onclick="addvoucher();">
                                            
                                          
                                        <div class="space-24"></div>

                                        <div class="clearfix">
                                        <a href='login.php' class='width-20 btn btn-small btn-primary'> LOGIN

</a>
                                        </div>
                                        
                                  

                                </form>

                                    </div>
                                   
                                    
                                    
                                </div><!--/widget-main-->
                            </div><!--/widget-body-->
                        </div><!--/login-box-->
                    </div><!--/position-relative-->
                </div>
            </div><!--/.span-->
        </div><!--/.row-fluid-->


        <!--scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        </script>
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

    </body>
</html>
