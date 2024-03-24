<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Film</title>

        <!-- Embedded Bootstrap v4.6.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Embedded AOS Library - for Animation -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <!-- Navbar -->
        <nav class="bg-black navbar navbar-dark bg-black">
            <span class="navbar-brand mb-0 h1 ml-5 logo"></span>
            <div class="w-75 d-flex justify-content-center">
                <div class="navbar-link-container d-flex justify-content-between">
                    <span class="navbar-brand mb-0 h1 mr-5">
                        <!-- Sesuaikan isi link dengan nama file -->
                        <a class="navbar-link link-white text-yellow text-decoration-none film-link" href="index.html">About Film</a>
                    </span>
                    <span class="navbar-brand mb-0 h1">
                        <!-- Sesuaikan isi link dengan nama file -->
                        <a class="navbar-link link-white text-decoration-none film-link" href="dibalik_layar.html">Behind The Scenes</a>
                    </span>
                </div>
            </div>
        </nav>

        <div class="container-fluid">

            <!-- Jumbotron -->
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="jumbotron-container d-flex justity-content-center align-items-center bg-black-sub p-0 rounded-0">
                    <div class="col-md-4 bg-black-sub p-5">
                        <p class="film-text poppins-medium">Film</p>
                        <h1 class="film-title text-yellow poppins-semi-bold mb-5">180&deg;</h1>

                        <h6 class="film-text poppins-medium">Synopsis</h6>
                        <p class="film-detail mb-5">It's about two people living completely opposite lives. About conflicts, misunderstanding and change... 
                            About a diligent but lonely Ana... 
                            About an outgoing but anxious Eric.<br><br>
                            
                            What would happen in the end?<br>
                            This is 180°
                        </p>

                        <button class="btn btn-md btn-warning film-button">
                            <a class="button-link play-button-text poppins-medium text-decoration-none" href="video.html">Play</a>
                        </button>
                    </div>
                    <div class="cover col-md-8" id="film-cover">
                        <!-- <img src="assets/cover_without_text.png" alt="Cover"> -->
                    </div>
                </div>
            </div>

            <div class="row bg-black p-5" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="col-md-12 text-yellow poppins-bold film-section mb-5">Main Characters</h2>

                <div class="col-md-6 d-flex justify-content-left">
                    <div id="profile-img-ana">
                        <!-- <img src="assets/profile/ana.png" alt=""> -->
                    </div>
                    <div class="profile-detail p-3">
                        <p class="poppins-bold film-section-detail">Clarensia Novia Hartanoe</p>
                        <p class="poppins-italic film-section-detail">as Ana</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-left">
                    <div id="profile-img-eric">
                        <!-- <img src="assets/profile/eric.png" alt=""> -->
                    </div>
                    <div class="profile-detail p-3">
                        <p class="poppins-bold film-section-detail">Gideon Giyanto</p>
                        <p class="poppins-italic film-section-detail">as Eric</p>
                    </div>
                </div>
            </div>
            
            <div class="row bg-black p-5 mt-2 mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="col-md-12 text-yellow poppins-bold film-section mb-3">Special Mentions</h2>
                <ul class="ml-5">
                    <li class="film-section-detail">PPTI BCA</li>
                    <li class="film-section-detail">Binus University</li>
                    <li class="film-section-detail">Reinert Yosua Rumagit, S.Kom, M.TI</li>
                    <li class="film-section-detail">Artemis</li>
                </ul>
            </div>
        </div>
    </body>
    <!-- Embedded JS AOS Library for Animation -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="js/index.js"></script>
</html>