<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Order</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href={{ URL::asset('css/styles.css') }} rel="stylesheet" />
    <link href={{ URL::asset('css/offer.css') }} rel="stylesheet" />
    <link href={{ URL::asset('css/login.css') }} rel="stylesheet" />

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
    <script src={{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}></script>
    <script src={{ URL::asset('js/ilux.js') }}></script>
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
                <?php
                use App\Http\Controllers\WalletController;
                ?>
                @if (auth('sanctum')->user())
                    <button class="btn btn-light">
                        ₱<?php
                        $bal = new WalletController();
                        echo $bal->showBalance();
                        ?>
                    </button>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            echo auth()->user()->username;
                            ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/dashboard">Account</a>
                            <a class="dropdown-item" href="/api/auth/logout">Logout</a>
                        </div>
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
    <!--Order Form IG-->
    <div id="form">
        <div class="container-login ">
            <div class="form_message form_message--error">
                @if (Session::get('status') == false)
                    {{ Session::get('message') }}
                @endif
            </div>
            <div class="form_message text-success">
                @if (Session::get('status') == true)
                    {{ Session::get('message') }}
                @endif
            </div>

            <form action="{{ url('/order/form-submit') }}" method="POST" class="form" id="order">
                @csrf

                <h5 class="form_title">Order Process Form</h5>
                <h3 class="form_title">Twitter</h3>
                <div class="form_message form_message--error"></div>
                <div class="form_input-group">
                    <select class="form_input" name="service_name" autofocus placeholder="Services">
                        <option id="offer-twitter" name="service_name" value="twitter_followers">Followers</option>
                        <option id="offer-twitter" name="service_name" value="twitter_likes">Likes</option>
                        <option id="offer-twitter" name="service_name" value="twitter_retweets">Retweets</option>
                        </option>
                    </select>
                </div>
                <div class="form_input-group">
                    <input type="text" name="link" class="form_input" autofocus placeholder="URL Account">

                </div>
                <div class="form_input-group">
                    <input type="number" name="quantity" class="form_input" min="100" max="50000"
                        step="100" autofocus placeholder="Quantity">

                </div>
                <div class="form_input-group">
                    <label type="number" name="price" class="form_input">Price</label>

                </div>
                <button class="form_button mb-3" type="submit" href="/dashboard">Order Now</button>
                <p class="form_text">
                    <a class="form_link" href="/offer">Back to Offers</a>
                </p>
            </form>
        </div>
    </div>
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
    <script src={{ URL::asset('https://cdn.startbootstrap.com/sb-forms-latest.js') }}></script>
    <script src={{ URL::asset('js/bootstrap.bundle.min.js') }}></script>
    <script src={{ URL::asset('js/login.js') }}></script>

</body>

</html>
