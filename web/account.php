<?php
session_start();
if ((empty($_SESSION['token'])) || ($_SESSION['token'] == "")) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Club motociclista</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel='stylesheet' href='google.css'>
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
                    <li><a>Aviso de privacidad</a></li>
                    <li><a>Términos & condiciones</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.6s">
                    <h2>Acceder</h2>
                    <form action="#" method="POST">
                        <div class="modal-body">
                            <div class="contact-form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">@</div>
                                        <input type="text" name="login_user" id="login_user" class="form-control" placeholder="Email / Usuario" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="login_password" id="login_password" class="form-control" placeholder="Contraseña" required>
                                </div>
                                <div class="form-group">
                                    <a href="#" >Olvide mi contraseña</a>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-success">Ingresar</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </form>
                </div>
                <div class="col-md-8 wow fadeInRight" data-wow-delay="0.6s">
                    <h2>Crear cuenta</h2>
                    <form id="msform" method="POST">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Crear cuenta</li>
                            <li>Información Personal</li>
                            <li>Dirección Personal</li>
                            <li>Información del vehiculo</li>
                            <li>Tarjeta de conducir</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <h2 class="fs-title">Crear cuenta</h2>
                            <h3 class="fs-subtitle">Información de tu cuenta de acceso</h3>
                            <input type="email" id="email" name="email" placeholder="Email" required="required" autofocus="autofocus" />
                            <input type="password" id="password1" name="password1" placeholder="Contraseña" required="required"  />
                            <input type="password" id="password2" name="password2" placeholder="Confirmar Contraseña" required="required"  />
                            <input type="button" name="next" class="next action-button" value="Siguiente" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Información Personal</h2>
                            <h3 class="fs-subtitle">Ingresa tus datos personales</h3>
                            <div class="col-md-6 form-group">
                                <input type="text" name="first_name" id="first_name" placeholder="Nombre" required="required" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="middle_name" id="middle_name" placeholder="Apellido Paterno" required="required" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="last_name" id="last_name" placeholder="Apellido Materno" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" name="phone1" id="phone1" placeholder="Telefono de emergencia" min="8" max="14" required="required" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" name="phone2" id="phone2" placeholder="Telefono de emergencia secundario" min="8" max="14" required="required" />
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Fecha de nacimiento</label>
                                <select id="days"></select>
                                <select id="months"></select>
                                <select id="years"></select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Grupo senguineo</label>
                                <select id="blood">
                                    <option value="o-">O-</option>
                                    <option value="o+">O+</option>
                                    <option value="a-">A-</option>
                                    <option value="a+">A+</option>
                                    <option value="b-">B-</option>
                                    <option value="b+">B+</option>
                                    <option value="ab-">AB-</option>
                                    <option value="ab+">AB+</option>
                                    <option value="otro">Sin Especificar</option>
                                </select>
                            </div>
                            <input type="button" name="previous" class="previous action-button" value="Volver" />
                            <input type="button" name="next" class="next action-button" value="Siguiente" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Dirección</h2>
                            <h3 class="fs-subtitle">Ingresa tu dirección</h3>
                            <div class="col-md-12 form-group">
                                <input type="text" name="street" id="street" placeholder="Calle y número" required="required" />
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" name="colonia" id="colonia" placeholder="Colonia" required="required" />
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="number" name="cp" placeholder="Código Postal" required="required" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="delegacion" id="delegacion" placeholder="Delegación o Municipio" required="required" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="state" id="state" placeholder="Estado" required="required" />
                            </div>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <input type="submit" name="submit" class="submit action-button" value="Submit" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Personal Details</h2>
                            <h3 class="fs-subtitle">We will never sell it</h3>
                            <input type="text" name="fname" placeholder="First Name" />
                            <input type="text" name="lname" placeholder="Last Name" />
                            <input type="text" name="phone" placeholder="Phone" />
                            <textarea name="address" placeholder="Address"></textarea>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <input type="submit" name="submit" class="submit action-button" value="Submit" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- start footer -->
    <footer>
        <div class="container">
            <div class="row">
                Copyright © 2016 Club motociclista
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
}
else {
    header("Location: events.php");
}
?>
