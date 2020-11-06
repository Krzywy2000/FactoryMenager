<html>
    <head>

        <!--title-->
        <title>Factory Menager - Hunter AG</title>

        <!--Meta tags-->
        <meta charset="utf-8">
        <meta author="Wiktor Wiese">

        <!--Scripts-->
            <!-- MDB -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0/mdb.min.js"></script>

        <!--Links-->
            <!-- Font Awesome -->
            <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet"/>
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
            <!-- MDB -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0/mdb.min.css" rel="stylesheet"/>

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