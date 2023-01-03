<?php

require("mail.php");

/**
 * validate
 *
 * @param  mixed $name
 * @param  mixed $email
 * @param  mixed $subject
 * @param  mixed $message
 * @param  mixed $form
 * @return void
 */
function validate ($name, $email, $subject, $message, $form){

    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
    # code...
}
$status ="";




if (isset($_POST["form"])) {

    if (validate(...$_POST)) {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body = "$name <$email> te envía el siguiente mensaje: <br><br>
        $message";


        //mandar el correo
        sendMail($subject, $body, $email, $name, true);


        $status ="success";


    }else{
        $status = "danger";
    }
    
} 






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Formulario de contacto</title>
</head>
<body>

    <?php if($status == "danger"):?>
    
    <div class="alert danger">
        <span>Surgió un problema</span>
    </div>
    <?php endif;?>

    <?php if($status == "success"): ?>
    
    <div class="alert success">
        <span>¡Mensaje enviado con éxito!</span>
    </div>
    
    <?php endif; ?>





    <form action="./index.php" method="POST">
        <h1>Contáctanos</h1>

        <div class="input-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name">    
        </div>

        <div class="input-group">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email">    
        </div>

        <div class="input-group">
            <label for="subject">Asunto</label>
            <input type="text" name="subject" id="subject">    
        </div>

        <div class="input-group">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message"></textarea>    
        </div>


        <div class="button-container">
            <button type="submit" name="form">Enviar</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span><i class="fa-solid fa-location-dot"></i>Girardot Cundinamarca</span>
            </div>
            <div class="info">
                <span> <i class="fas fa-phone"></i> 311 592 9180</span>

            </div>


        </div>


    </form>
    <script src="https://kit.fontawesome.com/8ca5bebefc.js" crossorigin="anonymous"></script>
</body>
</html>