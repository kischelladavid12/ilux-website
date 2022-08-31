<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About-Us</title>
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
                    <li class="nav-item"><a class="nav-link" href="/#offers">Offers</a></li>
                    <li id="abou-us" class="nav-item"><a class="nav-link" href="/#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#reviews">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact-us">Contact Us</a></li>
                </ul>
                @if (auth('sanctum')->user())
                    <div>
                        <a class="btn btn-primary" href="/dashboard">Account</a>
                        <a class="btn btn-primary" href="/dashboard">Log-out</a>
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
    <section class="projects-section bg-light">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="container tm-container-gallery">
                <div class="row">
                    <div class="text-center col-12">
                        <h2 class="tm-text-primary tm-section-title mb-4">About iLux</h2>
                        <p class="mx-auto tm-section-desc">
                            Established in 2012, iLux is a social media growth platform, offering affordable growing
                            solutions to individuals and local and international businesses.
                        </p>
                        <p class="mx-auto tm-section-desc">
                            Again, thanks for visiting our store and we look forward to serving you in the future.
                        </p>
                    </div>
                </div>
                <!-- Result-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="img/result.jpg" alt="service" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Satisfying Result</h4>
                                    <p class="mb-0 text-white-50">When it comes to delivery times, we at iLux put it at
                                        the highest priority! Did you make an order in our store? You’re expected to
                                        receive the order at super-fast delivery times in order to keep you smiling.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Price-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="img/price.jpg" alt="target" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Lowest Price Guaranteed</h4>
                                    <p class="mb-0 text-white-50">If you were looking for a service of buying likes,
                                        followers, or views on social media at reasonable prices, our prices are simply
                                        insane and fit everyone! View all of the services offered on the website now,
                                        and find out just how low our prices are compared to others.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Discretion-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="img/discretion.jpg" alt="team" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Complete Discretion</h4>
                                    <p class="mb-0 text-white-50">To buy followers, we at iLux are commited to
                                        maintaining the complete discretion of all our customers. Your information is
                                        entered and stored on a secured server for the sole purpose of using the various
                                        services offered in our store.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</body>

</html>
