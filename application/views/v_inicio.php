<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Hojas de estilo ================> -->
    <link rel="stylesheet" href= <?= base_url()."assets/bootstrap/css/bootstrap.min.css"; ?>>

    <title>Inicio de sesion</title>
</head>
<body>

    <!-- Arreglos etiquetas ===========================> -->
    <?php
        $input_usuario = array(
            "name" => "usuario",
            "type" => "text",
            "id" => "usuario",
            "class" => "form_control",
            "required" => "true"
        );
        $input_contrasenia = array(
            "name" => "contrasenia",
            "type" => "text",
            "id" => "contrasenia",
            "class" => "form_control",
            "required" => "true"
        );
    ?>
    
    <!-- Formulario =======================================> -->
    <?= form_open();?><br>
        <?= form_label("Usuario:");?><br>
        <?= form_input($input_usuario);?><br>
        <?= form_label("Contraseña:");?><br>
        <?= form_input($input_contrasenia);?><br>
    <?= form_close();?>

    <!-- Archivos JS =================================> -->
    <script src= <?= base_url()."assets/bootstrap/js/bootstrap.min.js"; ?> ></script>

</body>
</html>