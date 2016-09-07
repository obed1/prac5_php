<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Obed Mena Chuquimia">
        <meta name="description" content="imagenes de un directorio">
        <title>5</title>
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
            <li>No. 5</li>
            <li>Descripción: Imagenes de un directorio</li>
        </ul>
        <hr align="center" width="100%" size="1" noshade>

        <!--DESARROLLO//-->
        <p>Desarrollo</p>
        <?php
        if ($gestor = opendir('fotos'))
        {
        echo "<table border=1>";
            echo "<tr>";
                $i=0;
                while (false !== ($archivo = readdir($gestor)))
                {
                if ($archivo!="." && $archivo!="..")
                {
                if ($i==4)
                {
                $i=0;
                echo "</tr>";
            echo "<tr>";
                }
                $i++;
                echo "<td>";
                    echo "<a href=fotos/$archivo><img src=fotos/$archivo>
                    </a>";
                    echo "</td>";
                }
                }
                echo "</tr>";
            echo "</table>";
        closedir($gestor);
        }
        ?>
    </body>
</html>