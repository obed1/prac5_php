<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Obed Mena Chuquimia">
        <meta name="description" content="Valores asosciado a la instruccion forech">
        <title>6</title>
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
            <li>No. 6</li>
            <li>Descripción: Valores de la instrucción foreach</li>
        </ul>
        <hr align="center" width="100%" size="1" noshade>

        <!--DESARROLLO//-->
        <?php
        $v[0] = 100;
        $v[11] = 1;
        $v['O'] = 66;
        $v['Obed'] = 33;
        foreach ($v as $indice => $valor) {
            echo "El Valor = " . $valor . ", vale : " . $indice . "<br>";
        }
        ?>
    </body>
</html>