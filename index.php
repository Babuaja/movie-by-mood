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
            <form class="search">
                <!-- Search -->
                <div class="input-group">
                    <input
                        type="search"
                        class="form-control rounded search-value"
                        placeholder="Search Movie"
                        aria-label="Search"
                        aria-describedby="search-addon"/>
                    <button type="button" class="btn btn-outline-primary search-button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- End Form Search -->
            <!-- Select Mood and Sort -->
            <form class="d-flex flex-row justify-content-evenly">
                <!-- Mood Filter-->
                <div class="input-group filter">
                    <button
                        id="btn_mood"
                        class="btn btn-outline-secondary dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="far fa-grin"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="dropdown-item mood-button">Angry</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button">Sad</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button">Stressed</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button">Lonely</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button">Fighting</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button">Happy</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button">Romantic</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button">Humorous</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button">Hopeful</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button">Tense</p>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li style="text-align: center;">
                            -- Select Mood --
                        </li>
                    </ul>
                </div>
                <!-- End Mood Filter -->
                <!-- Sort By-->
                <div class="input-group sort">
                    <button
                        id="btn_sort"
                        class="btn btn-outline-secondary dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-sort"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="dropdown-item sort-button">Ascending</p>
                        </li>
                        <li>
                            <p class="dropdown-item sort-button">Descending</p>
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
                    <a id="nav_home" href="https://babuaja.github.io" class="nav_logo">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <span class="nav_logo-name">Babu Aja</span>
                    </a>
                    <div class="nav_list">
                        <a id="nav_dashboard" href="#dashboard" class="nav_link active">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Dashboard</span>
                        </a>
                        <a id="nav_user" href="#user" class="nav_link">
                            <i class='bx bx-user nav_icon'></i>
                            <span class="nav_name">User</span>
                        </a>
                        <a id="nav_file" href="#file"  class="nav_link">
                            <i class='bx bx-folder nav_icon'></i>
                            <span class="nav_name">Files</span>
                        </a>
                        <a id="nav_stats" href="#stats" class="nav_link">
                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                            <span class="nav_name">Stats</span>
                        </a>
                    </div>
                </div>
                <a href="logout.php" class="nav_link">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">Sign Out</span>
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
                <div class="container">
                    <div class="row showImg">
                        <div class="col-md-4">
                            <img id="fImg" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="col-md-8">
                            <div class="row p-3 border border-white">
                                <div id="ftitle" class="row h2">Rewrite for tittle</div>
                                <div id="fyear" class="row fs-4" style="display: inline;">Rewrite for sinopsis</div>
                                <div id="fdetails" class="row fs-4">Rewrite for sinopsis</div>
                                <div id="frating" class="row fs-4">Rewrite for sinopsis</div>
                                <div id="fduration" class="row fs-4">Rewrite for sinopsis</div>
                                <div id="fdirectors" class="row fs-4">Rewrite for sinopsis</div>
                                <div id="fstars" class="row fs-4">Rewrite for sinopsis</div>
                            </div>
                            <div class="row m-5">
                                <form action="save_movie.php" method="POST">
                                    <div class="d-flex justify-content-evenly">
                                        <button name="favorite_movie" id="favorite" class="btn btn-primary" value=""><i class="far fa-grin-hearts"></i> Favorite</button>
                                        <button name="disliked_movie" id="disliked" class="btn btn-danger" value=""><i class="far fa-frown"></i> Disliked</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End My Modal -->

            <!-- Dashboard -->
            <section id="dashboard">
                <!-- Choose Mood Customer -->
                <section id="choose-mood" class="choose-mood">
                    <h1 class="pt-3 text-center">Mood apa yang ingin ditonton ?</h1>
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Angry</button>
                            </div>
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Sad</button>
                            </div>
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Stressed</button>
                            </div>
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Lonely</button>
                            </div>
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Fighting</button>
                            </div>
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Happy</button>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Romantic</button>
                            </div>
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Humorous</button>
                            </div>
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Hopeful</button>
                            </div>
                            <div class="col-md-2 col-sm-3 col-4 d-flex justify-content-center p-3">
                                <button class="btn btn-dark rounded-pill mood-button">Tense</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Choose Mood Customer -->

                <!-- Show popular Movie -->
                <section id="popular" class="popular-movie">
                    <h1 class="pt-3 text-center">Popular Movies</h1>
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
                                            <!-- <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BMjMwNDkxMTgzOF5BMl5BanBnXkFtZTgwNTkwNTQ3NjM@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <!-- <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BNzVlY2MwMjktM2E4OS00Y2Y3LWE3ZjctYzhkZGM3YzA1ZWM2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <!-- <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div> -->
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
                                            <!-- <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <!-- <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <!-- <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div> -->
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
                                            <!-- <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BZGMxZTdjZmYtMmE2Ni00ZTdkLWI5NTgtNjlmMjBiNzU2MmI5XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <!-- <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col">
                                            <img
                                                src="https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_SX1000.jpg"
                                                class="img-fluid mx-auto d-block targetImg"
                                                alt="img06"/>
                                            <!-- <div class="middle">
                                                <div class="text-wrap h2">
                                                    Tittle Lorem ipsum dolor sit amet
                                                </div>
                                            </div> -->
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
                </section>
                <!-- End Show popular Movie -->
            </section>
            <!-- End Dashboard -->

            <!-- File -->
            <!-- Hasil anotasi data terbaru -->
            <!-- Show film with table with 4 col per row-->
            <section id="file" class="file">
                <div class="title-mood">
                    <h1 class="text-center">New Anotation Data Movies</h1>
                </div>
                <div class="container-fluid mb-5 pt-3" id="data-film"></div>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-primary infinite-scrolls">show more</button>
                </div>
            </section>
            <!-- End Show Film table-->
            <!-- End File -->

            <!-- User -->
            <section id="user" class="user">
                <div class="container-fluid">
                     <div class="shadow container profile">
                        <div class="row">
                            <h1 class="text-center p-2 m-0">Membership Card</h1>
                        </div>
                        <div class="row divider d-flex align-items-center">
                            <div class="col-md-3 p-3">
                                <span class=""><img src="img/BigBabuaja.png" class="img-fluid img-user" alt="photo profile">
                                </span>
                            </div>
                            <div class="col-md-9">
                                <div class="row p-3">
                                    <div class="col-md-3 h4">Nama</div>
                                    <div class="col-md-8 h4"><?php echo $_SESSION['name']?></div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3 h4">E-mail</div>
                                    <div class="col-md-8 h4"><?php echo $_SESSION['email']?></div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3 h4">Favorite Movie</div>
                                    <div class="col-md-8 h4"><?php echo $_SESSION['favorite_movie']?></div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3 h4">Disliked Movie</div>
                                    <div class="col-md-8 h4"><?php echo $_SESSION['disliked_movie']?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End User -->

            <!-- Stats Movie -->
            <section id="stats" class="stats">
                <div class="container">
                    <div id="data-stats">
                        <!-- <h1 class="text-center">Stats a Movie</h1>
                        <div class="shadow row mb-5">
                            <div class="col-md-3">
                                <img
                                    src="https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX1000.jpg"
                                    class="img-fluid mx-auto d-block targetImg"
                                    alt="img06"/>
                            </div>
                            <div class="col-md-5">
                                <h3>[Judul]</h3>
                                <p>Loremipsum colorset amet</p>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <canvas id="myChart4"></canvas>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <h1 class="pt-2 text-center">Global Movies Stats</h1>
                    <div class="shadow row mb-5">
                        <div class="col-md-6 p-4">
                            <div>
                                <canvas id="genre-movies-chart" class="global-stats"></canvas>
                            </div>
                        </div>
                        <div class="col-md-6 p-4">
                            <div>
                                <canvas id="mood-movies-chart" class="global-stats"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Stats Movie -->
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

        <!-- Use Chartjs -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- js for graph -->
        <script src="js/stats_a_movie.js"></script>
        <script src="js/stats_global_movies.js"></script>

    </body>

</html>


<?php
    } else{
     header("Location: ../Login-WEB/");
     exit();
    }
?>