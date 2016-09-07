<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Obed Mena Chuquimia">
        <meta name="description" content="tabla de ajedrez con número">
        <title>3</title>
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
            <li>No. 3</li>
            <li>Descripción: Tabla tipo ajedrez</li>
        </ul>
        <hr align="center" width="100%" size="1" noshade>

        <!--DESARROLLO//-->
        <p>Desarrollo</p>
        <?php         
        $n = 9;
        echo "<table border=1>";
        for ($i = 1; $i <= $n; $i++) 
        {
            echo "\n <tr>";
            for ($j = 1; $j <= $n; $j++) 
            {
                if (($i + $j) % 2 == 0 && $i >= $j)
                    echo "\n <td bgcolor=white align=center><font color=black>$i " . "</td>";
                else
                    echo "\n <td bgcolor=black align=center><font color=white>$j " . "</td>";
            }
        }

        ?>
    </body>
</html>