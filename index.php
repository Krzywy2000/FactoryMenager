<html>
    <head>
        <!--Meta tags-->
        

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