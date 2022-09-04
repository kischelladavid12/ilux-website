<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
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
                <div class="input-search">
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
    <!--Wallet List-->
    <div id="form">
        <div class="container-login ">

            <form action="" method="POST" class="form" id="wallet-list">

                <h1 class="form_title">Wallet List</h1>

                <div class="form_message form_message--error"></div>
                <div class="form_input-group">
                    <label type="text" name="balance" class="form_input">Balance</label>
                </div>
                <button class="form_button mb-3" type="submit" href="/dashboard">Add Amount</button>
                <p class="form_text">
                    <a class="form_link" href="/home">Back to Home</a>
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
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
