<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Offers</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/offer.css" rel="stylesheet" />
</head>

<body id="page-top">
    <div id="chatbot">
        <!-- CHAT BAR BLOCK -->
        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Need help? Chat with Luxy!
            </button>

            <div class="content">
                <div class="full-chat-block">
                    <!-- Message Container -->
                    <div class="outer-container">
                        <div class="chat-container">
                            <!-- Messages -->
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                                <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                            </div>

                            <!-- User input box -->
                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input id="textInput" class="input-box" type="text" name="msg"
                                        placeholder="Tap 'Enter' to send a message">
                                    <p></p>
                                </div>

                                <div class="chat-bar-icons">
                                    <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                        onclick="heartButton()"></i>

                                </div>
                            </div>

                            <div id="chat-bar-bottom">
                                <p></p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="ilux.js"></script>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"><img src="img/ilux2.png" id="logo">iLux</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#what-we-do">What We Do</a></li>
                    <li id="offer-nav" class="nav-item"><a class="nav-link" href="/#offers">Offers</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#reviews">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact-us">Contact Us</a></li>
                </ul>
                @if (auth('sanctum')->user())
                    <div>
                        <a class="btn btn-primary" href="/dashboard">Account</a>
                        <a class="btn btn-primary" href="/api/auth/logout">Log-out</a>
                    </div>
                @else
                    <div>
                        <a class="btn btn-primary" href="login">Login</a>
                        <a class="btn btn-primary" href="/register">Register</a>
                    </div>
                @endif
            </div>
        </div>
    </nav>
    <!-- Offer Page -->
    <section class="projects-section bg-light" id="offer-page">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="container tm-container-gallery">
                <div class="row row-offer">
                    <div class="text-center col-12">
                        <h2 class="tm-text-primary tm-section-title mb-4">What we Offer</h2>
                        <p class="mx-auto tm-section-desc">
                            Here are the social medias available to grow your reach!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- social medias-->
        <div class="card-deck">
            <div class="card-plan">
                <div class="card-body">
                    <div><img id="pic" class="card-img-top" src="img/insta-logo.png"
                            alt="instagram-logo"><br><br>
                    </div>
                    <h5 class="card-title">Instagram</h5>
                    <p class="card-text">Avail more Followers, Likes, Views, and Comments now!</p>
                    <a class="btn btn-primary" href="offer-instagram">Boost Now!</a>
                </div>
            </div>
            <div class="card-plan">
                <div class="card-body">
                    <div><img id="pic" class="card-img-top" src="img/facebook-logo.png"
                            alt="facebook-logo"><br><br>
                    </div>
                    <h5 class="card-title">Facebook</h5>
                    <p class="card-text">Avail more Followers, Likes, Views, and Comments now!</p>
                    <a class="btn btn-primary" href="offer-facebook">Boost Now!</a>
                </div>
            </div>
            <div class="card-plan">
                <div class="card-body">
                    <div><img id="pic" class="card-img-top" src="img/twitter-logo.png"
                            alt="twitter-logo"><br><br>
                    </div>
                    <h5 class="card-title">Twitter</h5>
                    <p class="card-text">Avail more Followers, Likes, and Retweets now!</p>
                    <a class="btn btn-primary" href="offer-twitter">Boost Now!</a>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card-plan">
                <div class="card-body">
                    <div><img id="pic" class="card-img-top" src="img/youtube-logo.png"
                            alt="youtube-logo"><br><br>
                    </div>
                    <h5 class="card-title">Youtube</h5>
                    <p class="card-text">Avail more Subscribers, Likes, Views and Comments now!</p>
                    <a class="btn btn-primary" href="offer-youtube">Boost Now!</a>
                </div>
            </div>
            <div class="card-plan">
                <div class="card-body">
                    <div><img id="pic" class="card-img-top" src="img/tiktok-logo.png"
                            alt="tiktok-logo"><br><br>
                    </div>
                    <h5 class="card-title">Tiktok</h5>
                    <p class="card-text">Avail more Followers, Likes, Views, and Comments now!</p>
                    <a class="btn btn-primary" href="offer-tiktok">Boost Now!</a>
                </div>
            </div>
        </div>

    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; iLux 2012. All Rights Reserved. We are not affiliated with
            Instagram, Facebook, Twitter, YouTube, Tiktok.</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
