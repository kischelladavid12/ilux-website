<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <title>Order Form</title>
    <link rel="stylesheet" href="login.css">
    </head>


<body>
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
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#what-we-do">What We Do</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#offers">Offers</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#reviews">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#signup">Contact Us</a></li>
                </ul>
                <a class="btn btn-primary" href="log-in.html">Login</a>
            </div>
        </div>
    </nav>

    <!--Order Form IG-->
    <div id="form">
        <div class="container-login ">
        
            <form action="{{ url('/order/form-submit') }}" method="POST" class="form" id="order">
                <!--@csrf--> 
                <!-- Please include these hidden inputs and their respective values for every respective order form -->
                <input type="hidden" id="service" name="service" value="2236">
                <input type="hidden" id="package" name="package_name" value="Instagram - 100,000 Followers">
                <input type="hidden" id="price" name="price" value="49,000">
                <input type="hidden" id="quantity" name="quantity" value="100000">
        
                <h5 class="form_title">Order Process Form</h5>
                <h2 style="font-weight: bold;" class="form_title">₱49,000</h2>
                <h3 class="form_title">100,000 Instagram Followers</h3>
                <div class="form_message form_message--error"></div>
                <div class="form_input-group">
                    <input type="text" name="link" class="form_input" autofocus placeholder="URL Instagram Account" >
                </div>
                <button class="form_button mb-3" type="submit" href="user.html">Order Now</button>
                <p class="form_text">
                    <a class="form_link" href="offer.html">Back to Offers</a>
                </p>
            </form>
        </div>
    </div>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; iLux 2012. All Rights Reserved. We are not affiliated with Instagram, Facebook, Twitter, YouTube, Tiktok.</div></footer>
</body>
</html>

