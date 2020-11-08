<html>
    <head>
        <!--title-->
        <title>Panel logowania</title>

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
        <div class="container">
            <form class="text-center border border-light p-5" action="../scripts/php/login.php" method="POST">
                <div class="md-form">
                    <p class="h4 mb-4">Panel logowania</p>
                    <H6>Dostęp tylko dla pracowników Hunter Bus&Coach s.f</H6>
                    <input type="text" name="login" class="form-control mb-4" placeholder="Login">
                    <input type="password" name="password" class="form-control mb-4" placeholder="Hasło">
                    <button class="btn bg-dark btn-info btn-block my-4" type="submit">Zaloguj!</button>
                </div>
            </form>
        </div>
    </body>
</html>