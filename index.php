<?php
    phpinfo();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Jean-Luc Ahoyo - Portfolio</title>
    </head>
    <body>
        <!--barre de navigation-->
        <section1>
            <div class="navi">
                <div class="container row-cols-md-3 row-cols-sm-12 navigate navigate2 navigate3 d-flex justify-content-between">
                    <ul class="nav"><li class="nav-item"><a class="nav-link active text-uppercase fw-bold" href="#">Jean-Luc.A</a></li></ul>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link active" href="#myProfil">Profil</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#myExpertise">Expertise</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#myContact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section1>
        <!--petite présentation-->
        <section2>
            <div class="self" id="myProfil">
                <div class="container d-flex justify-content-center align-items-center fw-bold zone">
                    <div class="row g-4">
                    <article class="col-md-9"><h1>Je suis Jean-Luc Ahoyo </h1></article>
                    <article class="col-md-3"><a href="#myExpertise"<button type="button" class="btn btn-lg btn-dark" data-bs-toggle="popover"></button>Expertise Web</a></article>
                    </div>
                </div>
            </div>
        </section2>
        <!--ce que je connais-->
        <section3>
            <div class="exp">
                <div class="container mtext" id="myExpertise">
                    <div class="row g-3" id="col">
                        <article class="col-md-6 col-sm-6 d-flex justify-content-center align-items-center fw-bold">
                            <h4><strong>Langage de développement web</strong></h4>
                        </article>
                        <article class="col-md-6 col-sm-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tellus leo, volutpat vitae mi ultrices, sollicitudin blandit dui. Mauris ultricies iaculis leo id consequat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </article>
                    </div><br><br>
                    <div class="row g-3" id="col">
                        <article class="col-md-6 col-sm-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tellus leo, volutpat vitae mi ultrices, sollicitudin blandit dui. Mauris ultricies iaculis leo id consequat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </article>
                        <article class="col-md-6 col-sm-6 d-flex justify-content-center align-items-center fw-bold">
                            <h4><strong>Framework</strong></h4>
                        </article>
                    </div>
                </div>
            </div>
        </section3>
        <br><br>
        <!--Mes coordonnées-->
        <section4>
            <div class="container cont" id="myContact">
                <div class="row g-3">
                    <article class="col-md-6 d-flex justify-content-center align-items-center fw-bold">
                        <h4><strong>Contactez moi !<br>Ensemble, nous allons résoudre votre problématique.</strong></h4>
                    </article>
                    <article class="col-md-6 d-flex justify-content-center align-items-center fw-bold">
                        <h4><strong>Téléphone: +229 66287252<br>Mail: <a href="mailto:jean-luc.ahoyo@epitech.eu">jean-luc.ahoyo@epitech.eu</a></strong></h4>
                    </article>
                </div>
            </div><br><br>
        </section4>
    </body>
    <!--footer-->
    <footer class="ref">
        <div class="container d-flex justify-content-center align-items-center">
            <p>
                <a class="btn btn-danger" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Mentions Légales
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tellus leo, volutpat vitae mi ultrices, sollicitudin blandit dui. Mauris ultricies iaculis leo id consequat.
                </div>
              </div>
        </div>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </footer>
</html>
