<html>
    <head>

        <!--title-->
        <title>Factory Menager - Hunter AG</title>

        <!--Meta tags-->
        <meta charset="utf-8">
        <meta author="Wiktor Wiese">

        <!--Scripts-->


        <!--Links-->


    </head>
    <body>
        <?php

            include("./layout/header.php");
            $toInclude = isset($_GET['page']) ? $_GET['page']:"main";
            include("./pages/{$toInclude}.php");
            include("./layout/footer.php");

        ?>
    </body>
</html>