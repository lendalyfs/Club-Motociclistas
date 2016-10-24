<?php
session_start();
if (isset($_SESSION["token"]) && isset($_SESSION["ytrfvbnjjhgfgb"]) ) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
        <title>Oli :)</title>

        <!-- css -->
        <link href="css/base.min.css" rel="stylesheet">
        <link href="css/project.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link href="css/dropzone.css" rel="stylesheet" type="text/css">

        <!-- scripts -->
        <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" src="js/validation.min.js"></script>
        <!-- ... -->
    </head>
    <body class="page-brand">
    <header class="header header-brand ui-header">
        <span class="header-logo">Oli :)</span>
    </header>
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-push-3 col-sm-6 col-sm-push-3">
                    <section class="content-inner">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-header">
                                    <div class="card-inner">
                                        <h1 class="card-heading">Oli BB's de lulz :)</h1>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="form-group">
                                        <a type="submit" href="make.php" id="btn-login" name="btn-login" class="btn btn-info waves-attach waves-light">
                                            Crear archivo cifrado
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <a type="submit" href="restore.php" id="btn-login" name="btn-login" class="btn  btn-info waves-attach waves-light">
                                            Cambiar contrasena
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <a type="submit" href="logout.php" id="btn-login" name="btn-login" class="btn  btn-danger waves-attach waves-light">
                                            Cerrar Sesion
                                        </a>
                                    </div>
                                    <div id="error">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <footer class="ui-footer">
        <div class="container">
            <p>Creative Commons</p>
        </div>
    </footer>
    <!-- js -->
    <script src="assets/js/session.js"></script>
    <script src="js/base.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/project.min.js"></script>
    <script src="js/dropzone.js"></script>
    </body>
    </html>
    <?php
} else {
    header("Location: index.php");
}
?>
