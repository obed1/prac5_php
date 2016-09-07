<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Obed Mena Chuquimia">
        <meta name="description" content="compara numeros">
        <title>7</title>
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
            <li>No. 7</li>
            <li>Descripción: compara numeros</li>
        </ul>
        <hr align="center" width="100%" size="1" noshade>

        <!--DESARROLLO//-->
        <p>Ingrese 3 numeros</p>
        <form action= "" method="POST">
            <label>1er Número</label>
            <br>
            <input type="text" name="a"/> 
            <br>  
            <label>2do Número</label>
            <br>
            <input type="text" name="b"/> 
            <br>
            <label>3er Número</label>
            <br>
            <input type="text" name="c"/> 
            <br>
            <input type="submit" name="compara" value="comparar"/>
        </form>
        <?php

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        echo "Compara numeros: ";
        if($a > $b){
            if($a > $c){
                echo $a . ": Es Mayor número, ";
                echo $b . ": Es número del medio, ";
                echo $c . ": Es Menor número, ";
            }
        }

        if($b > $a){
            if ($b > $c) {
                echo $b . ": Es Mayor, ";
                echo $c . ": Es número del medio, ";
                echo $a . ": Es Menor número, ";
            }

            if($c > $b){
                echo $c . ": Es Mayor, ";
                echo $a . ": Es número del medio, ";
                echo $b . ": Es Menor número, ";
            }
        }
        ?>
  
    </body>
</html>