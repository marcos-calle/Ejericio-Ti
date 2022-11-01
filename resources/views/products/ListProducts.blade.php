<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Products</title>
</head>
<?php
$host = "localhost";
$bd = "ejercicio_ti";
$usuario = "root";
$contrasenia = "";
try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

$sentenciaSQL = $conexion->prepare("SELECT * FROM products");
$sentenciaSQL->execute();
$products = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<body class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['description']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</body>

</html>