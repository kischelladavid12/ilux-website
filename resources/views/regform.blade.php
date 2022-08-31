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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css">
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
                    <li class="nav-item"><a class="nav-link" href="/#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#reviews">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact-us">Contact Us</a></li>
                </ul>
                @if (auth('sanctum')->user())
                    <div>
                        <a class="btn btn-primary" href="home">Account</a>
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

    <!--Register Form-->
    <div id="form">
        <div class="container-register ">

            <form class="form " id="createAccount" action="/api/auth/register" method="POST">
                @csrf
                <h1 class="form_title">Create Account</h1>
                @if ($errors->any())
                    <div class="m-auto text-center">
                        @foreach ($errors->all() as $error)
                            <li class="text-danger list-none">
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                @endif
                <div class="form_message form_message--error"></div>
                <div class="form_input-group">
                    <input type="text" name="username" id="signupUsername" class="form_input" autofocus
                        placeholder="Username" required>
                    <div class="form_input-error-message"></div>
                </div>
                <div class="form_input-group">
                    <input type="text" name="email" class="form_input" autofocus placeholder="Email Address"
                        required>
                    <div class="form_input-error-message"></div>
                </div>
                <div class="form_input-group">
                    <input type="password" name="password" id="signupPassword" class="form_input" autofocus
                        placeholder="Password" required>
                    <div class="form_input-error-message"></div>
                </div>
                <div class="form_input-group">
                    <input type="password" name="password_confirmation" id="signupConPassword" class="form_input"
                        autofocus placeholder="Confirm password" required>
                    <div class="form_input-error-message"></div>
                </div>
                <input type="checkbox" name="terms" class="inline mb-3" required /> I accept the <a
                    class="terms-link" data-toggle="modal" data-target="#modalTerms">terms and conditions</a>
                <!-- Modal -->
                <div class="modal fade" id="modalTerms" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Terms and Conditions</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    terms and conditions ni ilux<br>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="form_button mb-3" type="submit">Continue</button>
                <p class="form_text">
                    <a class="form_link" href="log-in.html" id="linkLogin">Already have an account? Sign in</a>
                </p>
                <p class="form_text">
                    <a class="form_link" href="index.html">Back to Home</a>
                </p>
            </form>
            <form class="form form--hidden" id="login">
                <h1 class="form_title">Login</h1>
                <div class="form_message form_message--error"></div>
                <div class="form_input-group">
                    <input type="text" class="form_input" autofocus placeholder="Username or email">
                    <div class="form_input-error-message"></div>
                </div>
                <div class="form_input-group">
                    <input type="password" class="form_input" autofocus placeholder="Password">
                    <div class="form_input-error-message"></div>
                </div>
                <button class="form_button mb-3" type="submit">Continue</button>
                <p class="form_text">
                    <a href="#" class="form_link">Forgot your password?</a>
                </p>
                <p class="form_text">
                    <a class="form_link" href="regform.blade.php" id="linkCreateAccount">Don't have an account?
                        Create account</a>
                </p>
                <p class="form_text">
                    <a class="form_link" href="welcome.blade.php">Back to Home</a>
                </p>
            </form>
        </div>
    </div>
    <script src="js/login.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
