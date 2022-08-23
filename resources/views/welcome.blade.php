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
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact Us</a></li>
                </ul>
                <!--<a class="btn btn-primary" href="log-in.html">Login</a> -->


                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                            @endif
                        @endauth
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

        <img class="img-fluid px-lg-6 mt-3 " src="img/sm.png" alt="logo" />
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
                    <div class="col-lg-4"><img class="img-fluid" src="img/instagram.png" alt="instagram" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Instagram Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Followers, Likes, Views, and Comments now!
                                    </p>
                                    <a class="btn btn-primary mt-4" href="#about">Boost Now!</a>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Facebook-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/facebook.png" alt="facebook" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Facebook Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Followers, Likes, Views, and Comments now!
                                    </p>
                                    <a class="btn btn-primary mt-4" href="#about">Boost Now!</a>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Twitter-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/twitter.png" alt="twitter" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Twitter Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Followers, Likes, and Retweets</p>
                                    <a class="btn btn-primary mt-4" href="#about">Boost Now!</a>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Youtube-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/youtube.png" alt="youtube" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Youtube Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Subscribers, Likes, Views and Comments</p>
                                    <a class="btn btn-primary mt-4" href="#about">Boost Now!</a>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tiktok-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/tiktok.png" alt="tiktok" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Tiktok Boost</h4>
                                    <p class="mb-0 text-white-50">Avail more Followers, Likes, Views, and Comments now!
                                    </p>
                                    <a class="btn btn-primary mt-4" href="#about">Boost Now!</a>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
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
                    <div class="col-lg-4"><img class="img-fluid" src="img/r1.jpg" alt="review1" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Kendra Boyle</h4>
                                    <p class="mb-0 text-white-50">"I was very skeptical about how the service will be
                                        performed and what response will be received regarding issues so I made a
                                        relatively small order, after the fast and professional service I received I
                                        intend to return here only Highly recommended"</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- t2-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/r2.jpg" alt="review2" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Damien James</h4>
                                    <p class="mb-0 text-white-50">"​I ordered likes for some Instagram posts from you
                                        and got the order in 2 minutes.. Tell you the truth? I didn’t expect it to be
                                        that fast and that’s why I’m writing my recommendation"</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- t3-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/r3.jpg" alt="review3" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Adel Roberts</h4>
                                    <p class="mb-0 text-white-50">"​From 1,000 followers, I gained 5,000 more in such a
                                        convenient way with the help of iLux!"</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- t4-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4"><img class="img-fluid" src="img/r4.jpg" alt="review4" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Karl Jones</h4>
                                    <p class="mb-0 text-white-50">"Number 1 supplying followers quickly and cheap! Such
                                        a big help with my newly opened business to gain more followers and viewers."
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Signup-->
    <section class="signup-section" id="signup">
        <title>iLux-Contact-Us-Homepage</title>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" id="emailAddress" type="email"
                                    placeholder="Enter email address..." aria-label="Enter email address..."
                                    data-sb-validations="required,email" /></div>
                            <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton"
                                    type="submit">Notify Me!</button></div>
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is
                            required.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2 text-white">
                                <div class="fw-bolder">Form submission successful!</div>
                                <!--To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>-->
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">4923 Manila, Philippines</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">ilux@email.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; iLux 2022</div>
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
