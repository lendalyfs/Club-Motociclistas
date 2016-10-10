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
        <link rel="stylesheet" href="css/rsvp.css">
        <link rel="stylesheet" href="css/fullcalendar.min.css">
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <style>
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            #map {
                height: 100%;
            }
        </style>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $('.bxslider').bxSlider({
                    adaptiveHeight: false,
                    auto: true,
                    autoControls: true,
                    mode: 'fade'
                });
            });
        </script>
    </head>
    <body>
    <!-- preloader -->
    <div class="preloader">
        <div class="sk-spinner sk-spinner-rotating-plane"></div>
    </div>
    <!-- end preloader -->
    <!-- menu -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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

            </div>
        </div>
    </section>

    <?php
    if ((!empty($_GET['event']) or $_GET['event'] != "") and is_numeric($_GET['event'])) {
        ?>
        <section id="event-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="slider">
                            <ul class="bxslider">
                                <li><img src="images/motorcycle-1163779_1920.jpg" /></li>
                                <li><img src="images/motorcycle-1163779_1920.jpg" /></li>
                                <li><img src="images/motorcycle-1163779_1920.jpg" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="event">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                        <h2>Detalles del evento</h2>
                        <div class="calendar">
                            <div class="event_icon">
                                <div class="event_month">JUL</div>
                                <div class="event_day">18</div>
                            </div>
                        </div>
                        <p><strong>Fecha: </strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                        <div class="wrap">
                            <p><strong>¿Asistiras?</strong></p>
                            <input type="checkbox" id="check3" />
                            <label for="check3" class="switch">
                                <div class="slide"></div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
                        <h2>Destino</h2>
                        <div id="map" style="width:100%;height:400px"></div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            function myMap() {
                var myCenter = new google.maps.LatLng(19.0896321,-98.626025);
                var mapCanvas = document.getElementById("map");
                var mapOptions = {center: myCenter, zoom: 14};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({position:myCenter});
                marker.setMap(map);
            }
        </script>
        <?php
    }
    ?>

    <section id="events">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft" data-wow-delay="0.6s">
                    <h2>Nuestros proximos eventos</h2>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Destino</th>
                            <th>Detalles</th>
                            <th>RSVP</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <div class="calendar">
                                    <div class="event_icon">
                                        <div class="event_month">JUL</div>
                                        <div class="event_day">18</div>
                                    </div>
                                </div>
                            </th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <div class="wrap">
                                    ¿Asistiras?
                                    <input type="checkbox" id="check" />
                                    <label for="check" class="switch">
                                        <div class="slide"></div>
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div class="calendar">
                                    <div class="event_icon">
                                        <div class="event_month">JUL</div>
                                        <div class="event_day">18</div>
                                    </div>
                                </div>
                            </th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>
                                <div class="wrap">
                                    ¿Asistiras?
                                    <input type="checkbox" id="check2" checked />
                                    <label for="check2" class="switch">
                                        <div class="slide"></div>
                                    </label>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="calendario">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft" data-wow-delay="0.6s">
                    <h2>Calendario de eventos</h2>
                    <div id="bootstrapModalFullCalendar"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="fullCalModal" tabindex="-1" role="dialog" aria-labelledby="modalLogin">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                    <h4 id="modalTitle" class="modal-title"></h4>
                </div>
                <div id="modalBody" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <a class="btn btn-success" id="eventUrl">Ver evento</a>
                </div>
            </div>
        </div>
    </div>
    <!-- start footer -->
    <footer>
        <div class="container">
            <div class="row">
                <?php echo COPYRIGHT . " | " . WEB_NAME; ?>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKLsDM8ArByP4XmNQgmbo0laMIkhzrHM0&signed_in=true&callback=myMap"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/tools.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#bootstrapModalFullCalendar').fullCalendar({
                header: {
                    left: '',
                    center: 'prev title next',
                    right: ''
                },
                eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
                events:
                    [
                        {
                            "title":"Free Pizza",
                            "allday":"false",
                            "description":"<p>This is just a fake description for the Free Pizza.</p><p>Nothing to see!</p>",
                            "start":moment().subtract('days',14),
                            "end":moment().subtract('days',14),
                            "url":"events.php?event=1#event-header"
                        },
                        {
                            "title":"Free Beer",
                            "allday":"false",
                            "description":"<p>This is just a fake description for the Free Pizza.</p><p>Nothing to see!</p>",
                            "start":moment().subtract('days',12),
                            "end":moment().subtract('days',12),
                            "url":"events.php?event=2#event-header"
                        },
                        {
                            "title":"CSS Meetup",
                            "allday":"false",
                            "description":"<p>This is just a fake description for the CSS Meetup.</p><p>Nothing to see!</p>",
                            "start":moment().add('days',27),
                            "end":moment().add('days',27),
                            "url":"http://www.mikesmithdev.com/blog/migrating-from-asp-net-to-ghost-node-js/"
                        }
                    ]
            });
        });
    </script>
    </body>
    </html>
    <?php
}
else {
    header("Location: events.php");
}
?>