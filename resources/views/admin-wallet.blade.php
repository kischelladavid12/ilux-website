<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin-Wallet-List</title>
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
    <link href="css/login.css" rel="stylesheet" />
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
                    <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin-order">Order List</a></li>
                    <li id="offer-nav" class="nav-item"><a class="nav-link" href="/admin-wallet">Wallet List</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin-luxy">Luxy</a></li>
                </ul>
                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" class="form-label" for="form1"
                            placeholder="Search" />
                    </div>
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!--Register Form-->
    <section class="projects-section bg-light" id="offer-page">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="container tm-container-gallery">
                <div class="row row-offer">
                    <div class="text-center col-12">
                        <h2 class="tm-text-primary tm-section-title mb-4">Wallet List
                        </h2>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalTerms">Add
                            Amount</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modalTerms" tabindex="-1" role="dialog"
                            aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabel">Add Amount</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form_input-group">
                                                <input type="text" name="$adminKey" id="adminKey"
                                                    class="form_input" autofocus placeholder="Admin Key">
                                            </div>
                                            <div class="form_input-group">
                                                <input type="text" name="$amount" class="form_input" autofocus
                                                    placeholder="Amount to be Added">
                                            </div>
                                            <div class="form_input-group">
                                                <input type="text" name="$user_id" id="user_id"
                                                    class="form_input" autofocus placeholder="User ID">
                                            </div>
                                            <button class="btn btn-primary mb-3" type="submit">Add</button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Table-->
                        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>wallet_id</th>
                                        <th>user_id</th>
                                        <th>balance</th>
                                        <th>created_at</th>
                                        <th>updated_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0.00</td>
                                        <td>2022-09-04</td>
                                        <td>2022-09-04</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0.00</td>
                                        <td>2022-09-04</td>
                                        <td>2022-09-04</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0.00</td>
                                        <td>2022-09-04</td>
                                        <td>2022-09-04</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

    </section>
    <script src="js/login.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; iLux 2012. All Rights Reserved. We are not
            affiliated with
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
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>
