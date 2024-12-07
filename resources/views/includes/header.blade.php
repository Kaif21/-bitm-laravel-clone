<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <!-- booststrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="icon" href="https://bitm.org.bd/assets/frontend/images/favicon.png">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.js"></script>
    <!-- internal css -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">

</head>

<body class="bg-body-tertiary">
    <!-- top nav -->
    <div class="topNav bg-secondary-subtle">
        <div class="container py-1">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <div class="d-flex">
                        <div><a href="tel:+8809612342486" class="mx-2 fs-6 text-decoration-none text-dark"><i
                                    class="fa-solid fa-phone me-1 "></i> +8809612342486</a>
                        </div>
                        <div><a href="mailto:info@bitm.org.bd" class="mx-2 fs-6 text-decoration-none text-dark"><i
                                    class="fa-solid fa-envelope me-1"></i>info@bitm.org.bd</a></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex justify-content-end gap-3">
                        <?php

                        if (isset($_SESSION['id'])) {
                        ?>
                            <!-- Button trigger modal -->
                            <div>
                                <a href="{{route('logout')}}"> <button type="button" class="btn btn-danger rounded-pill py-1 px-3">
                                        Log out
                                    </button>
                                </a>
                            </div>
                        <?php } else { ?>

                            <div>
                                <button type="button" class="btn btn-primary rounded-pill py-1 px-3" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Sign in
                                </button>
                            </div>
                        <?php }
                        ?>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign In</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-danger"><?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?></p>
                                        <form action="route.php" method="POST">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="yourmail@Bitm.org.bd" name="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Your password" name="password">
                                            </div>
                                            <p class="text-end"><a href="#">Forget Password</a></p>
                                            <!-- submit -->
                                            <button class="btn btn-primary w-100" type="submit" name="loginBtn" value="login">Log in</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer justify-content-center">

                                        Not registered? To register click <a href="#">here</a>.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- main nav-->
    <div class="mainNav bg-body-secondary py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 text-center">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container">
                            <a class="navbar-brand" href="{{route('home')}}">
                                <img src="https://bitm.org.bd/assets/frontend/images/bitm-logo.png" alt="logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                                <ul class="navbar-nav fs-6 fw-bold ">
                                    <li class="nav-item my-auto">
                                        <a class="nav-link text-dark" aria-current="page"
                                            href="{{route('home')}}">HOME</a>
                                    </li>
                                    <li class=" nav-item">
                                        <a class="nav-link text-dark" href="#">ALL COURSES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">PGD</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="{{route('assesment')}}">ASSESSMENT</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            ABOUT US
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('about')}}">About us</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>

                                        <!-- <a class="nav-link text-dark" href="route.php?page=about">ABOUT US</a> -->
                                    </li>
                                    <li class="nav-item">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 text-end my-auto">
                    <img src="https://bitm.org.bd/assets/frontend/images/basis_logo.png" alt="logo"
                        style="height: 50px; width: auto; margin-top: 5px;">
                </div>
            </div>
        </div>
    </div>
