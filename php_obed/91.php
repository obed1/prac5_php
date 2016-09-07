<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Obed Mena Chuquimia">
        <meta name="description" content="formulario de contacto">
        <title>9</title>
    </head>
    <body bgcolor="white" text="black" leftmargin="10" topmargin="10" marginwidth="10" marginheight="10">
        <hr align="center" width="100%" size="1" noshade>
        <!--IDENTIFICACIÓN//-->
        <ul type="disc">
            <li>Tecologias Emergentes I</li>
            <li>Lenguajes de programación PHP</li>
        </ul>
        <hr align="center" width="100%" size="1" noshade>
        <ul type="square">
            <li>Práctica No 5</li>
            <li>No. 9</li>
            <li>Descripción: Muestra datos del formulario de contacto</li>
        </ul>
        <hr align="center" width="100%" size="1" noshade>

        <!--DESARROLLO//-->
        <h3>Datos del formulario de contacto</h3>
        <p>Los datos recibidos son:</p>
        <p>Nombre: <?= $_GET["nombre"] ?></p>
        <p>Apellido: <?= $_GET["apellido"] ?></p>
        <p>Correo: <?= $_GET["correo"] ?></p>
        <p>Comentario: <?= $_GET["comentario"] ?></p>
    </body>
</html>