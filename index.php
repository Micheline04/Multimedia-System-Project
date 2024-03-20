<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda</title>

        <!-- Embedded Bootstrap v4.6.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Embedded AOS Library - for Animation -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <!-- Navbar -->
        <nav class="bg-black navbar navbar-dark p-3 bg-black">
            <span class="navbar-brand mb-0 h1 ml-5">Navbar</span>
            <div class="w-75 d-flex justify-content-center">
                <div class="navbar-link-container d-flex justify-content-between">
                    <span class="navbar-brand mb-0 h1 mr-5">
                        <!-- Sesuaikan isi link dengan nama file -->
                        <a class="navbar-link link-white text-decoration-none" href="index.html">Tentang Film</a>
                    </span>
                    <span class="navbar-brand mb-0 h1">
                        <!-- Sesuaikan isi link dengan nama file -->
                        <a class="navbar-link link-white text-decoration-none" href="dibalik_layar.html">Dibalik Layar</a>
                    </span>
                </div>
            </div>
        </nav>

        <div class="container-fluid">

            <!-- Jumbotron -->
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="jumbotron-container d-flex justity-content-center align-items-center bg-black-sub p-0 rounded-0">
                    <div class="film-desc col-md-4 bg-black-sub p-5">
                        <p class="film-text poppins-medium">Film</p>
                        <h1 class="film-title poppins-semi-bold mb-5">180&deg;</h1>

                        <h6 class="film-text poppins-medium">Sinopsis</h6>
                        <p class="film-detail mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                        <button class="btn btn-md btn-warning pt-2 pb-2 pl-5 pr-5">
                            <a class="button-link play-button-text poppins-medium text-decoration-none" href="video.html">Play</a>
                        </button>
                    </div>
                    <div class="cover col-md-8">
                        <img src="assets/cover.png" alt="Cover">
                    </div>
                </div>
            </div>

            <div class="row bg-black p-5" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="col-md-12 poppins-bold film-text mb-5">Pemeran Utama</h2>

                <div class="col-md-6 d-flex justify-content-left">
                    <div class="profile-img">
                        <img src="assets/profile/profile.jpg" alt="">
                    </div>
                    <div class="profile-detail p-3">
                        <p class="poppins-bold film-detail">Clarensia Novia Hartanoe</p>
                        <p class="poppins-italic film-detail">as Ana</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-left">
                    <div class="profile-img">
                        <img src="assets/profile/profile.jpg" alt="">
                    </div>
                    <div class="profile-detail p-3">
                        <p class="poppins-bold film-detail">Gideon Giyanto</p>
                        <p class="poppins-italic film-detail">as Eric</p>
                    </div>
                </div>
            </div>
            
            <div class="row bg-black p-5 mt-2 mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="col-md-12 poppins-bold film-text mb-3">Special Mentions</h2>
                <ul class="ml-5">
                    <li>Name</li>
                    <li>Name</li>
                    <li>Name</li>
                    <li>Name</li>
                    <li>Name</li>
                    <li>Name</li>
                    <li>Name</li>
                    <li>Name</li>
                    <li>Name</li>
                    <li>Name</li>
                </ul>
            </div>
        </div>
    </body>
    <!-- Embedded JS AOS Library for Animation -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="js/index.js"></script>
</html>