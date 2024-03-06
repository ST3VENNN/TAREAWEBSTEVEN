<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php
include("config.php");
?>
</head>
<body>
    <div class="container">
        <div class="row">
           
            <div class= "col-12"> 
                <table class = "table table-bordered table-hover">
                    <td>Cod.productos</td>
                    <td>Productos</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    <td>Fecha Elaboraciòn</td>
                    <td>Fecha Caducidad</td>

                    <?php
                    $consulta = "SELECT * FROM productos";

                    if ($resultado = $conn->query($consulta))
                    
                    {
                    
                    while ($filas = $resultado->fetch_assoc())
                    
                    {
                    
                    $cod_producto = $filas["cod_producto"];
                     $nombre_producto = $filas["nom_producto"];
                    $precio= $filas["precio"];
                    $cantidad= $filas["cantidad"];
                    $categoria= $filas["Categoria"];
                    $fecha_elaboracion= $filas["fecha_elab"];
                    $fecha_caducidad= $filas["fecha_cad"];
                    echo '<tr>
                    <td>'.$cod_producto .'</td>
                    <td>'.$nombre_producto.'</td>
                    <td>'.$precio.'</td>
                    <td>' .$cantidad.'</td>
                    <td>' .$categoria.'</td>
                    <td>'.$fecha_elaboracion.'</td>
                    <td>' .$fecha_caducidad.'</td>
                    </tr>';
                    
                    }
                    
                    }
                    
                    $resultado->free();
                    
                    mysqli_close($conn);
                    
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>