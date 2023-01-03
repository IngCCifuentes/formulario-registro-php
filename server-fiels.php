<?php 



$imagenname = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$ruta_a_subir ="images./$imagenname";

move_uploaded_file($image, $ruta_a_subir);



echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $ruta_a_subir ?>" alt=  "<?= $imagenname?>">
</body>
</html>