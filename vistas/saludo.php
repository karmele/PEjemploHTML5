<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Es un ejemplo</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/estilo.css" />
</head>

<body>
    <div class="header-container">
        <header class="wrapper clearfix">
            <h1 class="title">El título(header)</h1>
            <nav>
                <ul>
                    <li><a href="#">Opción 1 ul/li/a</a></li>
                    <li><a href="#">Opción 2 ul/li/a</a></li>
                    <li><a href="#">Opción 3 ul/li/a</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="main-container">
        <div class="main wrapper clearfix">
            <article>
                <h2>article</h2>
                <form action="?" method="post">
                    <header>
                        <!-- Se pueden incluir cabeceras en el article-->
                    </header>
                    <section>
                        <h2>section</h2>
                        <div id="datos">
                            <label>Nombre :</label>
                            <input type="text" name="nombre" value="<?php if (isset($nombre)) echo $nombre ?>" /><br />
                            <span class="error"> <?php if (isset($errores['nombre'])) echo $errores['nombre'] ?> </span><br />
                            <label>DNI:</label>
                            <input type="text" name="dni" value="<?php if (isset($dni)) echo $dni ?>" /><br />
                            <span class='error'> <?php if (isset($errores['dni'])) echo $errores['dni'] ?> </span><br />
                        </div>
                    </section>
                    <footer>
                        <div id="botones">
                            <label>&nbsp;</label>
                            <input type="submit" name="enviar" value="Enviar" /><br />
                        </div>
                    </footer>
                </form>
            </article>

            <aside>
                <h3>NOTA(aside)</h3>
                <p>Es importante configurar en Propiedades del proyecto(bton derecho) la opción Run Configuration</p>
            </aside>
        </div> <!-- #main -->
    </div> <!-- #main-container -->

    <div class="footer-container">
        <footer class="wrapper">
            <h3>RESULTADO(footer)</h3>
            <?php
            if (isset($salida)) {
                echo "<div id=\"resultado\"> $salida </div>";
            }
            ?>
        </footer>
    </div>
</body>

</html>