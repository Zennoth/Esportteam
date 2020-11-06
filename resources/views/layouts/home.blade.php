<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Untitled</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin" />
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Dark.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-with-Button.css')}}" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="color: #4ed9d9;background-color: #000000;">
        <div class="container"><a class="navbar-brand text-capitalize" href="#" style="color: #ff8210;filter: blur(0px) brightness(100%) grayscale(0%);margin-left: -10%;margin-right: 5%;">Chirazu Esport</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li role="presentation" class="nav-item"><a class="nav-link" href="{{ route('team.index') }}" style="color: rgb(255,255,255);font-weight: bold;">Add Squad</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="{{ route('member.index') }}" style="color: rgb(255,255,255);font-weight: bold;">Add Member</a></li>
                </ul><span class="navbar-text actions"></span></div>
        </div>
    </nav>

    <div class="carousel slide" data-ride="carousel" id="carousel-1" style=width:100%>
    <div class="carousel-inner">
        <div class="carousel-item active"><img class="w-100 d-block" src="{{asset('assets/img/a.png')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{asset('assets/img/b.png')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{asset('assets/img/c.png')}}" alt="Slide Image"></div>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
    <ol
        class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
    </ol>
    </div>

    <div class="footer-dark" style="margin-top: 25%;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Chirazu Esport</h3>
                        <p>Chirazu Esport provide you with the list of all Esport team available and also all of the latest information of each Esport team</p>
                    </div>
                    <div class="col item social">
                    <a href="#"><i class="icon ion-social-facebook"></i></a>
                    <a href="#"><i class="icon ion-social-twitter"></i></a>
                    <a href="#"><i class="icon ion-social-snapchat"></i></a>
                    <a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Chirazu Esport @2020</p>
            </div>
        </footer>
    </div>
</body>

</html>


