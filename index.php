<?php
    session_start();

    if(isset($_SESSION['id_customer']) && isset($_SESSION['email'])){
    ?>
        <!DOCTYPE html>
        <html>
        
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
        
                <!-- Bootstrap CSS -->
                <link
                    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                    rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">
        
                <!-- Box icon -->
                <link
                    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
                    rel="stylesheet">
                <!-- Link Custom Css -->
                <link rel="stylesheet" type="text/css" href="./css/style.css">
        
                <!-- LInk Font Awesome -->
                <script src="https://kit.fontawesome.com/566fc9c974.js" crossorigin="anonymous"></script>
        
                <!-- Favicons -->
                <link href="assets/img/BabuAja.png" rel="icon">
                <link href="assets/img/BabuAja.png" rel="apple-touch-icon">
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
                <!--Tittle-->
                <title>Anotasi Data Sinopsis Film</title>
            </head>
        
            <body id="body-pd">
                <!-- Navbar -->
                <header class="header" id="header">
                    <div class="header_toggle me-3">
                        <i class='bx bx-menu' id="header-toggle"></i>
                    </div>
                    <!-- Form Search -->
                    <form>
                        <!-- Search -->
                        <div class="input-group search">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search Movie"
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                        </div>
                        <!-- End Search -->
                    </form>
                    <!-- End Form Search -->
                    <!-- Select Mood and Sort -->
                    <form class="d-flex flex-row justify-content-evenly">
                        <!-- Mood Filter-->
                        <div class="input-group filter">
                            <button
                                class="btn btn-outline-secondary dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="far fa-grin"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Angry</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Fighting</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Happy</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Hopeful</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Humorous</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Hopeful</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Lonely</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Romantic</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Sad</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Stressed</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Tense</a>
                                </li>
        
                                <li><hr class="dropdown-divider"></li>
                                <li style="text-align: center;">
                                    -- Select Mood --
                                </li>
                            </ul>
                        </div>
                        <!-- End Mood Filter -->
                        <!-- Sort By-->
                        <div class="input-group">
                            <button
                                class="btn btn-outline-secondary dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-sort"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Ascending</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Descending</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li style="text-align: center;">
                                    -- Select Sorting --
                                </li>
                            </ul>
                        </div>
                        <!-- End Sort By -->
                    </form>
                    <!-- End Select Mood and Sort -->
                    <!-- Icon User -->
                    <img src="img/BabuAja.png" class="img-thumbnail rounded-circle" alt="">
                    <!-- End Icon User -->
                </header>
                <!-- End Navbar-->
                <!-- Sidebar -->
                <div class="l-navbar" id="nav-bar">
                    <nav class="nav">
                        <div>
                            <a id="home" href="#" class="nav_logo">
                                <i class='bx bx-layer nav_logo-icon'></i>
                                <span class="nav_logo-name">Babu Aja</span>
                            </a>
                            <div class="nav_list">
                                <a id="Dashboard" href="#" class="nav_link active">
                                    <i class='bx bx-grid-alt nav_icon'></i>
                                    <span class="nav_name">Dashboard</span>
                                </a>
                                <a id="user" href="#" class="nav_link">
                                    <i class='bx bx-user nav_icon'></i>
                                    <span class="nav_name">Users</span>
                                </a>
                                <a href="#" class="nav_link">
                                    <i class='bx bx-message-square-detail nav_icon'></i>
                                    <span class="nav_name">Messages</span>
                                </a>
                                <a href="#" class="nav_link">
                                    <i class='bx bx-bookmark nav_icon'></i>
                                    <span class="nav_name">Bookmark</span>
                                </a>
                                <a href="#" class="nav_link">
                                    <i class='bx bx-folder nav_icon'></i>
                                    <span class="nav_name">Files</span>
                                </a>
                                <a href="#Graph" class="nav_link">
                                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                                    <span class="nav_name">Stats</span>
                                </a>
                            </div>
                        </div>
                        <a href="logout.php" class="nav_link">
                            <i class='bx bx-log-out nav_icon'></i>
                            <span class="nav_name">SignOut</span>
                        </a>
                    </nav>
                </div>
                <!-- End Sidebar -->
        
                <!--Container Main start-->
                <!-- If u want take content here edit :-->
                <div id="main" class="container-fluid">
                    <!-- My Modal -->
                    <div id="myModal" class="modal">
                        <div id="close" class="d-flex flex-row-reverse">
                            <i id="bclose" class="fas fa-times-circle p-3 fs-3"></i>
                        </div>
                        <div class="row showImg">
                            <div class="col-md-5">
                                <img id="fImg" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="col-md-7">
                                    <div class="row p-3 border border-white">
                                        <div id="ftitle" class="row h2">Rewrite for tittle</div>
                                        <div id="fyear" class="row fs-4" style="display: inline;">Rewrite for sinopsis</div>
                                        <div id="fdetails" class="row fs-4">Rewrite for sinopsis</div>
                                        <div id="frating" class="row fs-4">Rewrite for sinopsis</div>
                                        <div id="fduration" class="row fs-4">Rewrite for sinopsis</div>
                                        <div id="fdirectors" class="row fs-4">Rewrite for sinopsis</div>
                                        <div id="fstars" class="row fs-4">Rewrite for sinopsis</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- End My Modal -->
                    <!-- Show popular Movie -->
                    <h1 class="pt-3 text-center">Popular Movie</h1>
                    <!-- Slideshow -->
                    <div class="container-fluid mb-5">
                        <div
                            id="carouselExampleDark"
                            class="carousel carousel-dark slide pt-3"
                            data-bs-ride="carousel"
                            data-bs-interval="10000">
                            <div class="carousel-indicators">
                                <button
                                    type="button"
                                    data-bs-target="#carouselExampleDark"
                                    data-bs-slide-to="0"
                                    class="active"
                                    aria-current="true"
                                    aria-label="Slide 1"></button>
                                <button
                                    type="button"
                                    data-bs-target="#carouselExampleDark"
                                    data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button
                                    type="button"
                                    data-bs-target="#carouselExampleDark"
                                    data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row justify-content-center align-middle">
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img 
                                                src="https://m.media-amazon.com/images/M/MV5BMjMwNDkxMTgzOF5BMl5BanBnXkFtZTgwNTkwNTQ3NjM@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BNzVlY2MwMjktM2E4OS00Y2Y3LWE3ZjctYzhkZGM3YzA1ZWM2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BZGMxZTdjZmYtMmE2Ni00ZTdkLWI5NTgtNjlmMjBiNzU2MmI5XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="carousel-control-prev"
                                type="button"
                                data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button
                                class="carousel-control-next"
                                type="button"
                                data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- End Slideshow -->
                    <!-- End Show popular Movie -->
                    <!-- End Show Film table-->
                </div>
                <!--Container Main end-->
        
                <!-- Script Bundle Boostrap 5.2 -->
                <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>
        
                <!-- Script separate boostrap 5.2 -->
                <!-- <script
                src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                crossorigin="anonymous"></script> <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                crossorigin="anonymous"></script> -->
                <!-- Custom Script -->
                <script src="js/datafilm.js"></script>
                <script src="js/kode.js"></script>
        
                <!--Script Pie Google Chart-->
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            </body>
        
        </html>
<?php
    } else{
     header("Location: ../Login-WEB/index.php");
     exit();
    }
?>