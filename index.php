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
            <form>
                <!-- Search -->
                <div class="input-group search">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search Movie"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary search-button" type="button" id="button-addon2">Search</button>
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
                            <p class="dropdown-item mood-button" href="">Angry</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Fighting</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Happy</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Hopeful</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Humorous</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Hopeful</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Lonely</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Romantic</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Sad</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Stressed</p>
                        </li>
                        <li>
                            <p class="dropdown-item mood-button" href="">Tense</p>
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
                <a href="#" class="nav_link">
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
            <!-- End Slideshow -->
            <!-- End Show popular Movie -->
            <!-- Hasil anotasi data terbaru -->
            <h2 class="pt-3 text-center">Hasil Anotasi Data Terbaru</h2>
            <!-- Show film with table with 4 col per row-->
            <div class="container-fluid mb-5 pt-3" id="data-film">
            </div>
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

<
<?php
    } else{
     header("Location: ../Login-WEB/index.php");
     exit();
    }
?>