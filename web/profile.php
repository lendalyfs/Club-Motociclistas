<?php
session_start();
include_once 'php/Constants.php';
if ((empty($_SESSION['token'])) || ($_SESSION['token'] == "")) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo WEB_NAME; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel='stylesheet' href='css/google.css'>
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/multi-steep.css">
        <style>
            .slider {
                margin-top: 90px;
                margin-left: 50px;

                width: 30%;
                height: 100%;
            }
        </style>
    </head>
    <body>
    <!-- preloader -->
    <div class="preloader">
        <div class="sk-spinner sk-spinner-rotating-plane"></div>
    </div>
    <!-- end preloader -->
    <!-- menu -->
    <nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <p class="navbar-brand">Club motociclista</p>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right text-uppercase">
                    <li><a href="privacy.php">Aviso de privacidad</a></li>
                    <li><a href="tos.php">Términos & condiciones</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.6s">
                    <h2>Mi cuenta</h2>
                    <form action="#" method="POST">
                        <div class="contact-form">
                            <div class="card-inner">
                                <p class="text-center">
										<span class="avatar avatar-inline avatar-lg">
											<img alt="Login" src="images/user/avatar-001.jpg">
										</span>
                                </p>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">@</div>
                                    <input type="text" name="profile_user" id="profile_user" class="form-control"
                                           placeholder="Email / Usuario" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="profile_password" id="profile_password"
                                       class="form-control" placeholder="Nueva Contraseña" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="profile_password2" id="profile_password2"
                                       class="form-control" placeholder="Confirmar Contraseña" required>
                            </div>
                            <div class="form-top-left">
                                <h3>Información Personal</h3>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-text form-control" name="first_name" id="first_name"
                                       placeholder="Nombre" required="required"/>
                                <input type="text" class="form-text form-control" name="middle_name" id="middle_name"
                                       placeholder="Apellido Paterno" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-text form-control" name="last_name" id="last_name"
                                       placeholder="Apellido Materno"/>
                                <input type="text" class="form-text form-control" name="phone1" id="phone1"
                                       placeholder="Telefono de emergencia" min="8" max="14" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-text form-control" name="phone2" id="phone2"
                                       placeholder="Telefono de emergencia secundario (Opcional)" min="8" max="14"/>
                            </div>
                            <div class="form-group">
                                <label>Fecha de nacimiento: </label>
                                Dia <select class="form-control-static" id="days"></select>
                                Mes <select class="form-control-static" id="months"></select>
                                Año <select class="form-control-static" id="years"></select>
                            </div>
                            <div class="form-group">
                                <label>Grupo senguineo: </label>
                                <select class="form-control-static" id="blood">
                                    <option value="otro">Sin Especificar</option>
                                    <option value="o-">O-</option>
                                    <option value="o+">O+</option>
                                    <option value="a-">A-</option>
                                    <option value="a+">A+</option>
                                    <option value="b-">B-</option>
                                    <option value="b+">B+</option>
                                    <option value="ab-">AB-</option>
                                    <option value="ab+">AB+</option>
                                </select>
                            </div>
                            <div class="form-top-left">
                                <h3>Dirección Personal</h3>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-text form-control" name="street" id="street"
                                       placeholder="Calle y número" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-text form-control" name="colonia" id="colonia" placeholder="Colonia"
                                       required="required"/>
                                <input type="text" class="form-text form-control" name="cp" placeholder="Código Postal"
                                       required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-text form-control" name="delegacion" id="delegacion"
                                       placeholder="Delegación o Municipio" required="required"/>
                                <input type="text" class="form-text form-control" name="state" id="state" placeholder="Estado"
                                       required="required"/>
                            </div>
                            <div class="form-top-left">
                                <h3>Información del vehiculo</h3>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-text form-control" name="placa" id="placa" placeholder="Placa" required="required" />
                                <div class="form-group">
                                    <input type="text" class="form-text form-control" name="marca_linea" id="marca_linea" placeholder="Marca o Linea" required="required" />
                                    <input type="text" class="form-text form-control" name="modelo" id="modelo" placeholder="Modelo" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-text form-control" name="motor" id="motor" placeholder="Número de motor" required="required" />
                                    <input type="text" class="form-text form-control" name="clave_vehicular" id="clave_vehicular" placeholder="Clave Vehicular" required="required" />
                                </div>
                            </div>
                            <div class="form-top-left">
                                <h3>Tarjeta de circulación</h3>
                            </div>
                            <div class="form-group">
                                <label>Fecha de expedición: </label>
                                Dia <select class="form-control-static" name="expedition-day" id="full-days"></select>
                                Mes <select class="form-control-static" name="expedition-month" id="full-months"></select>
                                Año <select class="form-control-static" name="expedition-year" id="full-years"></select>
                            </div>
                            <div class="form-inline">
                                <div class="form-group-sm">
                                    <label>Vigencia: </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="vigencia" id="vigencia" placeholder="Vigencia" required="required" />
                                        <div class="input-group-addon">años</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="placa">Tarjeta de circulacion</label>
                                <p>Sube una foto de tu tarjeta de circulacion (Formatos validos: .JPG .PNG .PDF)</p>
                                <input type="file" class="form-text form-control" name="placa" id="placa" placeholder="Placa" required="required" />
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-success">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <!-- start footer -->
    <footer>
        <div class="container">
            <div class="row">
                <?php echo COPYRIGHT . " | " . WEB_NAME; ?>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/tools.js"></script>
    </body>
    </html>
    <?php
} else {
    header("Location: events.php");
}
?>