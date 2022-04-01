<?php
require '../database.php';

if (!empty($_POST['correo_usuario'])) {
    $_correo_usuario = $_POST['correo_usuario'];
    $_contracena = password_hash($_POST['contracena'], PASSWORD_BCRYPT);
    $_color = $_POST['color'];
    date_default_timezone_set('America/Mexico_City');
    $fecha_hora_registro = date("Y-m-d H:i:s");


    $sql = "INSERT INTO usuarios(correo,pasword,color,fecha_hora_registro) VALUES ('$_correo_usuario','$_contracena','$_color','$fecha_hora_registro')";
    $stmt = $conn->prepare($sql);




    if ($stmt->execute()) {
       // echo ' <script>alert("usuario guardado correctamente")</script>';
            header("Location: /prueba/login.php?mensaje_u=1");
    } else {
        echo '<script>alert("ERROR AL GENERAR USUARIO")
           </script>';
        

    }
}

?>