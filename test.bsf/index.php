<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bowling Sports &amp; Fun</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  Bowling Sports &amp; Fun
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Über uns</a>
                    </li>
                    <!--li class="page-scroll">
                        <a href="#pictures">Bilder</a>
                    </li-->
                     <li class="page-scroll">
                        <a href="#montagsliga">Montagsliga</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Danke.</h1>
                        <p class="intro-text">Der letzte Pin ist gefallen. Zum 31. März 2014 schließt unsere Halle nach fast 35 Jahren für immer ihre Pforten.</p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Über Bowling Sports &amp; Fun</h2>
                <p>"Home of Champions" stand Anfang der 2000er als Slogan neben dem Logon von Stern Bowling Oberrad, dem Namen unter dem Sepp Steh und seine Frau Mary die Anlage seinerzeit Anfang der 80er gründeten. Und das hatte seinen Grund: auf unserer Bahn spielten nicht nur Freizeitspieler sondern auch waschechte Profis. So gingen unter anderem Deutsche MeisterInnnen, EuropameisterInnen oder gar Bowling-Weltmeisterinnen auf der kleinen, beschaulichen aber gemütlichen Bowlingbahn in Frankfurt-Oberrad regelmäßig trainieren.</p>
                <p>Das "Freizeitvergnügen" Bowling war es jedoch, welches es in Kombination mit einem Gastonomiebetrieb überhaupt erst ermöglichte, solch eine Anlage als Gewerbe zu betreiben. Sinkendes Interesse am Bowling allgemein, gestiegende Kosten, strengere Bauauflagen und Nachwuchssorgen im Sportbowling waren es am Ende, die Jogi Steh zwangen, die Anlage am Ende zu schließen. Er hatte den Familienbetrieb in den vergangenen Jahren fortgeührt und mit seiner Frau Daggi lange nach Möglichkeiten gesucht, dem Sportbowling in Frankfurt ein Zuhause zu erhalten.</p>
                <p>Wir schauen nun in die Zukunft und drücken allen, die diesen Sport genauso lieben wie wir, dass es in Frankfurt in den nächsten Jahren wieder bergauf damit geht. Und dass es bald ein neues "Home of Champions" gibt.</p>
                <iframe src="http://www.facebook.com/video/embed?video_id=448328128577528" width="640" height="360" frameborder="0"></iframe>
            </div>
        </div>
    </section>



    <!--section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the download page at Start Bootstrap. You can also get the source code directly from GitHub if you prefer. Additionally, Grayscale is the first Start Bootstrap theme to come with a LESS file for easy color customization!</p>
                    <a href="http://startbootstrap.com/grayscale" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section-->

    <section id="montagsliga" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Montagsliga</h2>
                <p>So lange es die Halle gab, gab es auch die Montagsliga. Und die war wirklich einzigartig. Nirgendwo in Deutschland spielten 30 Jahre lang "bloody beginners" gegen echte Champions. Die Montagsliga war eine grandiose Handicap-Liga mit einem großen Ziel: Dem Spaß am Bowlingsport.</p>
                <p><a href="">Ergebnisse 2014</a></p>
                <p><a href="">Ergebnisse 2013</a></p>
                <p><a href="">Ergebnisse 2012</a></p>

                <select id="urlSelect" onchange="window.location = jQuery('#urlSelect option:selected').val();">
                <?php $alledateien = scandir('liga/2013',1); //Ordner "files" auslesen
                print "<option value=\"\" selected>Ergebnisse 2014</option>\n";
                foreach ($alledateien as $datei) { // Ausgabeschleife
                    $string = $datei;
                    if (preg_match("/^LIGA2014-/",$string)) {
                    $treffer = preg_split("/^LIGA2014-|\.|W/", $string);   
                    print "<option value=\"http://bowling-sports-fun.de/liga/2013/".$string."\">".($treffer[2]).". Spieltag</option>\n";
                    }
                }; 
                ?>
                <!--<option value="http://www.bowling-sports-fun.de/wp-content/uploads/2013/01/montag_2013-X-Spielplan.pdf">Spielplan</option>-->
  </select>





                <p></p>
            </div>
        </div>
    </section>

    <section id="pictures" class="container pictures-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!--h2>Bilder</h2>
                <p>Hier einige Bilder zur Erinnerung an unsere großartige Anlage.</p-->
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Kontakt</h2>
                <p>Wir wollen in Kontakt mit Euch bleiben. Folgt uns weiterhin auf Facebook, Twitter und Co. Wenn Ihr Anregungen habt, schreibt uns eine Mail!</p>
                <p><a href="mailto:feedback@bowling-sports-fun.de">feedback@bowling-sports-fun.de</a></p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/bowlingoberrad" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://www.facebook.com/BowlingSportsandFun" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div id="map"></div>

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
