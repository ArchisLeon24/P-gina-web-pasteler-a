<?php
/**
 * Proyecto: Pastelería Dulce Deleite
 * Servidor: IIS (Internet Information Services)
 */

// Definimos algunas variables de PHP para hacer el sitio dinámico
$nombre_pasteleria = "Dulce Deleite";
$eslogan = "Sabor artesanal directo a tu mesa";
$anio_actual = date("Y");

// Simulación de una pequeña base de datos de productos
$productos = [
    ["nombre" => "Pastel de Chocolate", "precio" => 25.50, "imagen" => "chocolate.jpg"],
    ["nombre" => "Red Velvet", "precio" => 30.00, "imagen" => "red-velvet.jpg"],
    ["nombre" => "Tarta de Frutos Rojos", "precio" => 28.00, "imagen" => "frutos.jpg"],
    ["nombre" => "Cheesecake de Limón", "precio" => 22.00, "imagen" => "limon.jpg"]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nombre_pasteleria; ?> - Repostería Fina</title>
    
    <link rel="stylesheet" href="style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="container">
            <h1><?php echo $nombre_pasteleria; ?></h1>
            <p class="tagline"><?php echo $eslogan; ?></p>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#productos">Menú de Pasteles</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <section id="bienvenida">
            <h2>Nuestra Pasión</h2>
            <p>En <strong><?php echo $nombre_pasteleria; ?></strong>, horneamos con amor y los mejores ingredientes para que cada evento sea inolvidable.</p>
        </section>

        <section id="productos">
            <h2>Catálogo de Temporada</h2>
            <div class="grid-productos">
                <?php foreach ($productos as $producto): ?>
                    <div class="tarjeta-producto">
                        <h3><?php echo $producto['nombre']; ?></h3>
                        <p class="precio">$<?php echo number_format($producto['precio'], 2); ?></p>
                        <button class="btn-pedido">Pedir ahora</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo $anio_actual; ?> <?php echo $nombre_pasteleria; ?>. Todos los derechos reservados.</p>
        <small>Servidor: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></small>
    </footer>

    <script src="script.js"></script>
</body>
</html>