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
    
    <form action="insertar.php" method="post" class="formulario3 m-4">
        <div class="mb-3 w-25">
            <label for="name" class="form-label"><b>Nombre:</b></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>
        <div class="mb-3 w-25">
            <label for="sku" class="form-label"><b>Sku:</b></label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="sku">
        </div>
        <div class="mb-3 w-25">
            <label for="price" class="form-label"><b>Price:</b></label>
            <input step="any" type="number" class="form-control" id="exampleFormControlInput1" name="price">
        </div>
        <div class="mb-3 w-75">
            <label for="des" class="form-label"><b>Descripción:</b></label>
            <input type="text-area" class="form-control" id="exampleFormControlInput1" name="des">
        </div>
        <div class="mb-3 w-25">
            <label for="stock" class="form-label"><b>Stock:</b></label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="stock">
        </div>
        <div class="mb-3 w-50">
            <p><b>Genre:</b></p>
            <p><input class="form-check-input" type="radio" name="gen[]" id="gen" value="male" id="flexCheckDefault">Male</p>
            <p><input class="form-check-input" type="radio" name="gen[]" id="gen" value="female" id="flexCheckDefault">Female</p>
            <p><input class="form-check-input" type="radio" name="gen[]" id="gen" value="unisex" id="flexCheckDefault">Unisex</p>
        </div>
        <div class="mb-3 w-25">
            <label for="images" class="form-label"><b>Imagenes:</b></label>
            <input name="images" id="images" type="file"/>
        </div>
        <div class="mb-3 w-25">
            <button type="submit" class="btn btn-primary">Enviar datos</button>
        </div>
    </form>
</body>
</html>