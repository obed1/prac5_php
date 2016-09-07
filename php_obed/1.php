<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Obed Mena Chuquimia">
        <meta name="description" content="tabla 10 x 10">
        <title>1</title>
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
            <li>No. 1</li>
            <li>Descripción: Tabla 10 x10</li>
        </ul>
        <hr align="center" width="100%" size="1" noshade>

        <!--DESARROLLO//-->
        <p>Desarrollo</p>
        <?php
        define('TAM', 10); //CONSTANTE PARA EL TAMAÑO
        echo "<table border=1>"; //CREANDO LA TABLA
        $n = 1;
        for ($n1 = 1; $n1 <= TAM; $n1++) {
            for ($n2 = 1; $n2 <= TAM; $n2++) {
                    echo "<td>", $n, "</td>"; //CREAMOS UNA CELDA Y MOSTRAMOS EL NUMERO
                $n = $n + 1;
            }
            echo "</tr>"; //CERRANDO FILA
        }
        echo "</table>"; //CERRANDO TABLA
        ?>
    </body>
</html>