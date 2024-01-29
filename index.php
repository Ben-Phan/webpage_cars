<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"/>

    <!-- Leaflet map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container-fluid px-0">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <span class="material-icons-outlined me-1">important_devices</span>
                Andy Auta
            </a>
            <button type="button" 
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container px-3">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li>
                            <a class="nav-link me-lg-3" href="#">Domů</a>
                        </li>
                        <li>
                            <a class="nav-link me-lg-3" href="#about">O nás</a>
                        </li>
                        <li>
                            <a class="nav-link me-lg-3" href="#ojeteVozy">Ojeté vozy</a>
                        </li>
                        <li>
                            <a class="nav-link me-lg-3" href="PHPdatabase.php" target="_blank">PHP</a>
                        </li>
                        <li>
                            <a class="nav-link me-lg-3" href="JS_kalkulacka.html" target="_blank">JavaScript</a>
                        </li>
                        <li>
                            <a class="nav-link me-lg-3" href="#kontakt">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero -->
    <header class="bg-light py-5">
        <div class="container px-5">
            <div class="row align-items-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5">
                        <h2 class="text-center fw-bold mb-2">Andy Auta</h2>
                        <h2 class="text-primary text-center fw-bold mb-2">Největší prodejce ojetých vozů</h2>
                        <p class="lead text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem error amet? Officia animi maiores enim a dolorem adipisci sit corporis magnam, impedit ex dolore, pariatur illum amet libero sunt!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-center">
                            <a class="btn btn-primary btn-large text-uppercase" href="#about">O nás
                                <span class="material-icons-outlined ms-2">help_outline</span>
                            </a>
                            <a class="btn btn-outline-primary btn-large text-uppercase" href="#ojeteVozy">Ojeté vozy
                                <span class="material-icons-outlined ms-2">manage_search</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 cold-xxl-6 justify-content-center">
                    <img class="img-fluid rounded-3 my-5" src="images/superb.jpg" alt="Hero superb">
                </div>
            </div>
        </div>
    </header>
    <!-- Hero End -->

<main>

<!-- About -->
<section id="about" class="text-center py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <h2 class="fw-bold">O nás</h2>
            <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A fuga quam accusantium? Reprehenderit iure eligendi dolorem totam perferendis veniam libero optio quis molestias nulla, ipsum deserunt, at nesciunt magni consectetur?</p>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-4 mx-auto mb-5">
                <div class="d-flex mb-5 about">
                    <span class="material-icons-outlined m-auto text-primary">
                        currency_exchange
                    </span>
                </div>
                <h5>Protiúčet</h5>
                <p class="text-muted mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus beatae aliquid illo aut. Maiores veritatis pariatur dolores, magnam iure harum eos nemo eveniet delectus aperiam expedita recusandae, aspernatur, cum distinctio?</p>
            </div>
            <div class="col-lg-4 mx-auto mb-5">
                <div class="d-flex mb-5 about">
                    <span class="material-icons-outlined m-auto text-primary">
                        build
                    </span>
                </div>
                <h5>Servis</h5>
                <p class="text-muted mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus beatae aliquid illo aut. Maiores veritatis pariatur dolores, magnam iure harum eos nemo eveniet delectus aperiam expedita recusandae, aspernatur, cum distinctio?</p>
            </div>
            <div class="col-lg-4 mx-auto mb-5">
                <div class="d-flex mb-5 about">
                    <span class="material-icons-outlined m-auto text-primary">
                        <span class="material-symbols-outlined">
                            shopping_cart
                        </span>
                    </span>
                </div>
                <h5>Nákup</h5>
                <p class="text-muted mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus beatae aliquid illo aut. Maiores veritatis pariatur dolores, magnam iure harum eos nemo eveniet delectus aperiam expedita recusandae, aspernatur, cum distinctio?</p>
            </div>
        </div>
    </div>
</section>

<hr>

<!-- Auta -->
<section id="ojeteVozy" class="text-center py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <h2 class="fw-bold">Ojeté vozy</h2>
            <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-4 mx-auto mb-5">
                <div class="card h-100 shadow-lg border-0 bg-light">
                    <img class="card-img-top" src="images/Enyaq.webp" alt="Enyaq">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Škoda Enyaq</h5>
                        <div class="mb-2">
                            <div class="badge bg-primary rounded-pill">Zobrazit</div>
                            <div class="badge bg-primary rounded-pill">Rezervovat</div>
                            <div class="badge bg-primary rounded-pill">Koupit</div>
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, doloribus?
                        </p>
                    </div>
                    <div class="card-footer bg-transparent mb-3">
                        <a class="btn btn-outline-primary btn-sm text-uppercase"
                            href="https://www.skoda-auto.cz/modely/enyaq/enyaq-iv"
                            target="blank">
                        <span class="material-icons-outlined me-1">visibility</span>
                        Škoda Enyaq
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mx-auto mb-5">
                <div class="card h-100 shadow-lg border-0 bg-light">
                    <img class="card-img-top" src="images/2016-tesla-model-s-19-of-43.webp" alt="Tesla">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Tesla model S</h5>
                        <div class="mb-2">
                            <div class="badge bg-primary rounded-pill">Zobrazit</div>
                            <div class="badge bg-primary rounded-pill">Rezervovat</div>
                            <div class="badge bg-primary rounded-pill">Koupit</div>
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, doloribus?
                        </p>
                    </div>
                    <div class="card-footer bg-transparent mb-3">
                        <a class="btn btn-outline-primary btn-sm text-uppercase"
                            href="https://www.tesla.com/cs_cz/models"
                            target="blank">
                        <span class="material-icons-outlined me-1">visibility</span>
                        Tesla model S
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mx-auto mb-5">
                <div class="card h-100 shadow-lg border-0 bg-light">
                    <img class="card-img-top" src="images/mazda.png" alt="Mazda">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Mazda CX-5</h5>
                        <div class="mb-2">
                            <div class="badge bg-primary rounded-pill">Zobrazit</div>
                            <div class="badge bg-primary rounded-pill">Rezervovat</div>
                            <div class="badge bg-primary rounded-pill">Koupit</div>
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, doloribus?
                        </p>
                    </div>
                    <div class="card-footer bg-transparent mb-3">
                        <a class="btn btn-outline-primary btn-sm text-uppercase"
                            href="https://www.mazda.cz/modely/mazda-cx-5/"
                            target="blank">
                        <span class="material-icons-outlined me-1">visibility</span>
                        Mazda CX-5
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>
<!-- Kontakt -->
<section id="kontakt" class="text-center py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <h2 class="fw-bold">Kontakt</h2>
            <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut distinctio animi in dicta suscipit placeat.
            </p>
        </div> 
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-xl-5 col-xxl-6 mb-5">
                <div id="map"></div>
            </div>
            <div class="col-lg-8 cold-xl-7 col-xxl-6 mb-5">
                <div class="mb-5">
                    <h6 class="text-uppercase mb-2">Adresa</h6>
                    <p class="lead mb-8">Slévárenská 758/2, 370 01 České Budějovice 1</p>
                </div>
                <div class="mb-5">
                    <h6 class="text-uppercase mb-2">Telefon</h6>
                    <p class="lead mb-8">606 666 555</p>
                </div>
                <div class="mb-5">
                    <h6 class="text-uppercase mb-2">E-mail</h6>
                    <p class="lead mb-8">Andy@auta.cz</p>
                </div>
            </div>
        </div>
    </div>
</section>

</main>


</div>
<hr>
<!-- Footer -->
<footer class="text-center py-4">
    <div class="container" px-5 mb-2>
        Andy Auta &copy; 2023
    </div>
</footer>

<!-- Leaflet map JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<!-- Bootstrap JS -->
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- My JS -->
<script src="js/sripts.js"></script>    
</body>

</html>