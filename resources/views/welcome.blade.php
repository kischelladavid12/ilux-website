<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>iLux-Homepage</title>
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
    <link rel="stylesheet" href="css/offer.css">
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
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#what-we-do">What We Do</a></li>
                    <li class="nav-item"><a class="nav-link" href="#offers">Offers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reviews">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
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
    <!-- Masthead-->
    <header id="home" class="masthead">
        <title>iLux-Home</title>
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">iLux</h1>
                    <h4 class="text-white-50 mx-auto mt-2 mb-5">Social Media Growth Platform</h3>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Ready to grow and expand your reach? At iLux, we
                            have millions of followers ready for you!</h2>

                        <a class="btn btn-primary" href="#what-we-do">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- What We Do-->
    <section class="about-section text-center" id="what-we-do">
        <title>iLux-What-We-Do-Homepage</title>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-3">What We Do</h2>
                    <p class="text-white-50">
                        Your all-in-one solution for your social media growth. We prepare everything you need for
                        growing your reach in social media.</p>

                </div>
            </div>
            <a class="btn btn-primary mt-2 mb-5" href="what-we-do">Get Started</a>
        </div>

        <img class="img-fluid px-lg-6 mt-3" src="img/sm.png" alt="logo" />
    </section>

    <!-- Offers-->
    <section class="projects-section bg-light" id="offers">
        <title>iLux-Offers-Homepage</title>
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="container tm-container-gallery">
                <div class="row">
                    <div class="text-center col-12">
                        <h2 class="tm-text-primary tm-section-title mb-4">Offers</h2>
                        <p class="mx-auto tm-section-desc">
                            Here are the available services on different social media platforms:
                        </p>
                    </div>
                </div>
                <!-- Instagram-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/instagram-crop.png" alt="instagram" />
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Instagram Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Followers, Likes, Views, and Comments now!
                                    </p>
                                    <a class="btn btn-primary mt-4" href="offer">Boost Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Facebook-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/facebook-crop.png" alt="facebook" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Facebook Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Followers, Likes, Views, and Comments now!
                                    </p>
                                    <a class="btn btn-primary mt-4" href="offer">Boost Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Twitter-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/twitter-crop.png" alt="twitter" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Twitter Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Followers, Likes, and Retweets</p>
                                    <a class="btn btn-primary mt-4" href="offer">Boost Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Youtube-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/youtube-crop.png" alt="youtube" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Youtube Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Subscribers, Likes, Views and Comments</p>
                                    <a class="btn btn-primary mt-4" href="offer">Boost Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tiktok-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/tiktok-crop.png" alt="tiktok" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Tiktok Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Followers, Likes, Views, and Comments now!
                                    </p>
                                    <a class="btn btn-primary mt-4" href="offer">Boost Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- About Us-->
    <section class="about-section text-center" id="about-us">
        <title>iLux-About-Us-Homepage</title>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-3">About Us</h2>
                    <p class="text-white-50">
                        Established in 2012, iLux is a social media growth platform, offering affordable growing
                        solutions to individuals and local and international businesses.</p>

                </div>
            </div>
            <a class="btn btn-primary mt-2 mb-5" href="/about-us">Know More</a>
        </div>

        <img class="img-fluid px-lg-6 mt-3 " src="img/about.jpg" alt="logo" />
    </section>

    <!-- Reviews-->
    <section class="projects-section bg-light" id="reviews">
        <title>iLux-Reviews-Homepage</title>
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="container tm-container-gallery">
                <div class="row">
                    <div class="text-center col-12">
                        <h2 class="tm-text-primary tm-section-title mb-4">Reviews</h2>
                        <p class="mx-auto tm-section-desc">
                            Get to know iLux from other people!
                        </p>
                    </div>
                </div>
                <!-- t1-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/ree1.png" alt="review1" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <img id="testimonial" src="img/testimonial-img-01.jpg" alt="Image"
                                        class="img-fluid mx-auto"><br>
                                    <h4 class="text-white">Kendra Boyle</h4>
                                    <p class="mb-0 text-white-50">"Fast and professional service I received I
                                        intend to return here only Highly recommended"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- t2-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/ree2.png" alt="review2" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <img id="testimonial" src="img/testimonial-img-02.jpg" alt="Image"
                                        class="img-fluid mx-auto"><br>
                                    <h4 class="text-white">Damien James</h4>
                                    <p class="mb-0 text-white-50">"​I ordered likes for some posts from you
                                        and got the order. Tell you the truth? I didn’t expect it to be
                                        that fast"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- t3-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/ree3.png" alt="review3" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <img id="testimonial" src="img/testimonial-img-03.jpg" alt="Image"
                                        class="img-fluid mx-auto"><br>
                                    <h4 class="text-white">Adel Roberts</h4>
                                    <p class="mb-0 text-white-50">"​From a hundred followers, I gained a thousand more
                                        in such a
                                        convenient way with the help of iLux!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- t4-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/ree4.png" alt="review4" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <img id="testimonial" src="img/testimonial-img-04.jpg" alt="Image"
                                        class="img-fluid mx-auto"><br>
                                    <h4 class="text-white">Karla Jones</h4>
                                    <p class="mb-0 text-white-50">"Number 1 supplying followers quickly and cheap! Such
                                        a big help to gain more followers and viewers."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Contact-->
    <section class="contact-section bg-black" id="contact-us">
        <div class="card-deck">
            <div class="card-plan">
                <div class="card-body">
                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                    <h6 class="text-uppercase m-0">Address</h6>
                    <hr class="my-4 mx-auto" />
                    <div class="small text-black">4923 Manila, Philippines</div>
                </div>
            </div>
            <div class="card-plan">
                <div class="card-body">
                    <i class="fas fa-envelope text-primary mb-2"></i>
                    <h6 class="text-uppercase m-0">Email</h6>
                    <hr class="my-4 mx-auto" />
                    <div class="small text-black">ilux@email.com</div>
                </div>
            </div>
            <div class="card-plan">
                <div class="card-body">
                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                    <h6 class="text-uppercase m-0">Phone</h6>
                    <hr class="my-4 mx-auto" />
                    <div class="small text-black">+1 (555) 902-8832</div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-instagram"></i></a>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; iLux 2022. All Rights Reserved. We are not affiliated with
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
