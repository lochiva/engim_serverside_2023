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
                     
                    <?php foreach ($menus['navbar-items'] as $item): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $item['active']?>" aria-current="page" href="<?= $item['link']?>">
                             <?= $item['hotword']?>
                            </a>
                        </li>
                        <?php endforeach; ?>

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
                <?php foreach ($cards as $card): ?>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"><?= $card['title'] ?></h2>
                            <p class="card-text"><?= $card['description'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-sm" href="<?= $card['link']?>">
                            <?= $card['hotword']?>
                            </a>
                        </div>
                    </div>
                </div>
                    <?php endforeach; ?>
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
