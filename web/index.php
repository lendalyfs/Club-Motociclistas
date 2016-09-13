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
        <section id="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" data-wow-delay="0.6s">
                            <h2>¿Ya eres miembro?</h2>
                            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalLogin"><i class="fa fa-lock "></i> Acceder</button>
                            <h2>¡Únete!</h2>
                            <a class="btn btn-success btn-lg" href="account.php"><i class="fa fa-sign-in"></i> Crear cuenta</a>
                        </div>
                        <div class="col-md-6" data-wow-delay="0.6s">
                            <h3 class="text-uppercase">¿Quienes somos?</h3>
                            <p>Somos un grupo de motociclistas que busca fomentar una sana convivencia vial </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form action="#" method="POST">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
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
            </div>
        </div>

        <section id="divider">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
                        <i class="fa fa-users"></i>
                        <h3 class="text-uppercase">Miembros</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                    </div>
                    <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
                        <i class="fa fa-calendar"></i>
                        <h3 class="text-uppercase">Rodadas</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                    </div>
                    <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
                        <i class="fa fa-beer"></i>
                        <h3 class="text-uppercase">Comunidad</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="download">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.6s">
                        <h2>Accede desde nuestra aplicación</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                        <button class="btn btn-success"><i class="fa fa-download"></i> Descargar</button>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay="0.6s">
                        <img src="images/smartphone-655342_1920.png" width="40%" class="img-responsive" alt="feature img">
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