<?php 

$se_hablo_de_bruno = true;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h1> ESTO NO SE DEBE HACER </h1>
    <?php 
    
    if ($se_hablo_de_bruno) {
     
        echo "<b>🐧 aa </b>";
     
        # code...
    }else{
        echo "<br> 🐖 </b>";
    }
    
    ?>
    <h1> ESTE ES ACEPTABLE </h1>

    <?php if($se_hablo_de_bruno){?>
        <b>🤴 </b>

        <?php } else{?>

            <b>👸 </b>

            <?php }?>


    <h1>ESTO SI DEBERIA HACERLO </h1>

    <?php ?>

    
</body>
</html>