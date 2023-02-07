<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
    
$conexion = mysqli_connect("localhost", "root", "", "dawstore");

if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    $nombre = $_POST['name'];
    $sku = $_POST['sku'];
    $precio = $_POST['price'];
    $desc = $_POST['des'];
    $stock = $_POST['stock'];
    $genre = $_POST['gen'];
    $gen = '';
    $ima = $_POST['images'];

    foreach ($genre as $g) {
        $gen = $g;
    }

    $consulta = "INSERT INTO products (sku,`name`,price,`description`,stock,genre,images) 
    VALUES ($sku, '$nombre', $precio, '$desc', $stock,'$gen', '$ima')";
    $actualizarChamp = mysqli_query($conexion, $consulta);
    echo "<h1>Datos actualizados correctamente !!!</h1><br><br>";
}

?>
</body>
</html>