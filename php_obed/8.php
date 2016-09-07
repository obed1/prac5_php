<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Obed Mena Chuquimia">
        <meta name="description" content="recibe fecha">
        <title>8</title>
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
            <li>No. 8</li>
            <li>Descripción: recibe fecha</li>
        </ul>
        <hr align="center" width="100%" size="1" noshade>

        <!--DESARROLLO//-->
        <h3>Ingresa fecha en formato numero</h3>
       
        <?php 
            if($_GET["enviar"]){
                echo $_GET["fecha"];
            } else{
                ?>
                 <form action="" method="GET">
                    <p>
                        Escribe fecha: <input name="fecha" type="text" />
                    </p> 
                    <p>
                        <input name="enviar" value="enviar datos" type="submit"/>
                    </p>  
                </form>
                <?php
            }
        ?>
    </body>
</html>