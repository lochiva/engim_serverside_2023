<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= $menus['navbar-title']['link']?>">
                    <?= $menus['navbar-title']['hotword']?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?= $menus['navbar-items'][0]['active']?>" aria-current="page" href="<?= $menus['navbar-items'][0]['link']?>">
                             <?= $menus['navbar-items'][0]['hotword']?>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link <?= $menus['navbar-items'][1]['active']?>" href="<?= $menus['navbar-items'][0]['link']?>">
                            <?= $menus['navbar-items'][1]['hotword']?>
                            </a>
                        
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $menus['navbar-items'][2]['active']?>" href="<?= $menus['navbar-items'][0]['link']?>">
                            <?= $menus['navbar-items'][2]['hotword']?>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link <?= $menus['navbar-items'][3]['active']?>" href="<?= $menus['navbar-items'][3]['link']?>">
                            <?= $menus['navbar-items'][3]['hotword']?> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="<?= $img ?>" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light"><?= $tagline_title ?></h1>
                    <p><?= $tagline_text ?></p>
                    <a class="btn btn-primary" href="<?= $tagline_link ?>"><?= $tagline_hotword ?></a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"><?= $cards[0]['title'] ?></h2>
                            <p class="card-text"><?= $cards[0]['description'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-sm" href="<?= $cards[0]['link']?>">
                            <?= $cards[0]['hotword']?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"><?= $cards[1]['title'] ?></h2>
                            <p class="card-text"><?= $cards[1]['description'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-sm" href="<?= $cards[1]['link']?>">
                                <?= $cards[1]['hotword']?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"><?= $cards[2]['title'] ?></h2>
                            <p class="card-text"><?= $cards[2]['description'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-sm" href="<?= $cards[2]['link']?>">
                                <?=$cards[2]['hotword']?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white"><?= $copyright ?></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
