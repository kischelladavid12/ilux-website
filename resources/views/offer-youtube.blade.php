<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Offer-Youtube</title>
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
        <title>iLux-Offers-Homepage</title>
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="container tm-container-gallery">
                <div class="row row-offer">
                    <div class="text-center col-12">
                        <img id="ig" src="img/youtube-logo.png" alt="youtube-logo">
                        <h2 class="tm-text-primary tm-section-title mb-4">Youtube Growth Solution</h2>
                        <h4 class="mb-2">With the number 1 and secured boosting platform.</h4><br>
                    </div>
                </div>
                <!-- Twitter-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/youtube.png" alt="youtube" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <div class="text">
                                        <p class="mx-auto tm-section-desc">
                                            Are you looking to boost your personal or business social media
                                            account? While there's no way to grow your Youtube account
                                            overnight, our tools will help you to grow your subscribers and views on
                                            Youtube with no effort!<br><br>Let our experts help you get the
                                            most out of your Youtube account,and make sure
                                            all your subscribers are real.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Youtube Account -->
                <div class="container px-4 px-lg-5">
                    <!-- Featured Project Row-->
                    <div class="container tm-container-gallery">
                        <div class="row row-offer">
                            <div class="text-center col-12">
                                <img id="ig" src="img/youtube-logo.png" alt="youtube-logo">
                                <h2 class="tm-text-primary tm-section-title mb-4">YouTube Account Growth Plans</h2>
                                <p class="mx-auto tm-section-desc">
                                    Get Started Today, with your very own Youtube Marketer. Setup your campaign, you'll
                                    be
                                    receiving your first grow within hours!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- social medias-->
                <div class="card-deck">
                    <div class="card-plan">
                        <div class="card-body">
                            <h5>VIEWS</h5>
                            <h1>₱599</h1>
                            <h5 style="font-weight: bold;">1000 Views</h5>
                            <hr>
                            <p> ✓ 100% Organic Growth</p>
                            <p> ✓24/7 Live chat & Phone support</p>
                            <p> ✓ Refill in 24 hours if drops occured</p>
                            <p> ✓ 100% Money Back Guarantee</p>
                            <a class="btn btn-primary" href="/order-yt-views-1k">Boost Now!</a>
                        </div>
                    </div>
                    <div class="card-plan">
                        <div class="card-body">
                            <h5>SUBSCRIBERS</h5>
                            <h1>₱499</h1>
                            <h5 style="font-weight: bold;">1000 Subscribers</h5>
                            <hr>
                            <p> ✓ 100% Organic Growth</p>
                            <p> ✓ Weekly optimization reviews</p>
                            <p> ✓ Location & Gender based targeting</p>
                            <p> ✓ 100% Money Back Guarantee</p>
                            <a class="btn btn-primary" href="/order-yt-subs-1k">Boost Now!</a>
                        </div>
                    </div>
                    <div class="card-plan">
                        <div class="card-body">
                            <h5>LIKES</h5>
                            <h1>₱2,999</h1>
                            <h5 style="font-weight: bold;">1000 Likes</h5>
                            <hr>
                            <p> ✓ Faster likes growth</p>
                            <p> ✓ Weekly optimization reviews</p>
                            <p> ✓ Location & Gender based targeting</p>
                            <p> ✓ 100% Money Back Guarantee</p>
                            <a class="btn btn-primary" href="/order-yt-likes-1k">Boost Now!</a>
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
