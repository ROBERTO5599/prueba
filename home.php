<?php

require 'database.php';

        $sql = 'SELECT color, COUNT(1) AS total FROM usuarios GROUP BY color';
        $resultado_total= mysqli_query($cn, $sql);
    
    
        
        $sql_DOS = 'SELECT color, COUNT(1) AS total FROM usuarios GROUP BY color';

       

    
 //echo $sql;
$resultado_grafica = $cn->query($sql_DOS);



while ($valores_grafica = $resultado_grafica->fetch_assoc()) {
   $datos[]= array("y" => $valores_grafica["total"],"label" => $valores_grafica["color"] );
  
   
}



?>



<!DOCTYPE html>
<html lang="ES">

<head>
<script>
window.onload = function() {
 
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title:{
         text: "COLORES"
     },
    
     data: [{
         type: "bar",
         yValueFormatString: "#",
         indexLabel: "{y}",
         indexLabelPlacement: "inside",
         
         indexLabelFontColor: "BLACK",
         dataPoints: <?php echo json_encode($datos, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
</script>
    <meta charset="utf-8" />
    <title>REPORTES VENTAS</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--basic styles-->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
          <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

    <!--page specific plugin styles-->

    <!--fonts-->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

    <!--ace styles-->

    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

    <!--inline styles related to this page-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

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
                                    BIENVENIDO
                                </h1>
                                <div class="span3 ">
                                    <a href='logout.php' class='btn btn-app btn-primary  btn-mini pull-right'> SALIR

                                    </a>
                                </div>
                                <div class="space"></div>


                                
                                

                                <form>
                                    <div class="row-fluid">
                                        <div class="center">
                                           
                                            
                                            <div class="span11" >
                                            <div id="chartContainer" style="height: 135%; width: 100%;"></div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                                <table id="" class="table table-striped table-bordered ">
                                                    <thead>
                                                        <tr>

                                                            <th>COLOR</th>
                                                            <th>TOTAL</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <?php 
                                                        $sumatoria_total=0;
                                                        $i= 0;  
                                                            if (!empty($resultado_total) AND mysqli_num_rows($resultado_total)> 0) {
                                                               foreach ($resultado_total as $row) :

                                                                if( $row['total']== null){
                                                                    $monto_total=0;
                                                                }else{
                                                                    $monto_total= $row['total'];
                                                                }
                                                                $sumatoria_total +=$row['total'];


                                                               
                                                              
                                                            ?>

                                                            <td class="center">
                                                                <a href="#"><?php echo $row['color'] ; ?></a>
                                                            </td>
                                                            <td style="text-align: right;"><?php echo $monto_total;  ?></td>

                                                       
                                                        </tr>
                                                        <?php  endforeach;   ?>
                                                        <?php  }  ?>
                                                        <tr>
                                                        <td class="center">
                                                               TOTAL:
                                                            </td>
                                                            <td style="text-align: right;"><?php echo $sumatoria_total;  ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                           


                                        </div>



                                    </div>


                            </div>
                            </for>
                            



                        </div>
                        <!--/widget-main-->
                    </div>
                    <!--/widget-body-->
                </div>
                <!--/login-box-->
            </div>
            <!--/position-relative-->
        </div>
    </div>
    <!--/.span-->
    </div>
    <!--/.row-fluid-->


    <!--basic scripts-->

    <!--[if !IE]>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--<![endif]-->

    <!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

    <!--[if !IE]>-->

    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>

    <!--<![endif]-->

    <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

    <script type="text/javascript">
        if ("ontouchend" in document)
            document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--page specific plugin scripts-->

    <!--ace scripts-->

    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>

    <!--inline scripts related to this page-->

    <script type="text/javascript">
        function show_box(id) {
            $('.widget-box.visible').removeClass('visible');
            $('#' + id).addClass('visible');
        }
    </script>
    <script language="javascript">
        $(document).ready(function() {

            $("#selec_marca option:selected").onclic(function() {
                id_marca = $(this).val();
                $.post("acciones/select_sucursal.php", {
                    id_marca: id_marca
                }, function(data) {
                    $("#selec_sucursal").html(data);
                });
            });

        });
    </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>