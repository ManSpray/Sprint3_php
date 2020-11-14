<?php
$request = $_SERVER['REQUEST_URI'];
print($request);
$route_prefix = "/CMS_app";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/Uzduotis11.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/fontawesome-free-5.14.0-web/css/all.css">
    <title>CmsApp.</title>
    <style>
        a:link {
            color: rgb(0, 94, 94);
        }

        a:hover {
            color: black;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row menus">
                <div class="col-12 navig">
                    <div class="logo">
                        Cms<span class="strap_logo">App</span>.
                    </div>
                    <div class="custom_navigation">
                        <a href="./home" class="home fa fa-home"></a>
                        <a href="./pages" class="pages">pages</a>
                        <a href="./features" class="features1">features</a>
                        <a href="./shop" class="shop">shop</a>
                        <a href="./elements" class="elements">elements</a>
                        <a href="./about" class="mega">about us</a>
                        <input class="menu_toggle" type="checkbox" id="burger" name="burgeris">
                        <label class="checkbox_toggle" for="burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </label>
                        <nav>
                            <ul>
                                <li>
                                    <a href="./home">Home</a>
                                </li>
                                <li>
                                    <a href="./pages">Pages</a>
                                </li>
                                <li>
                                    <a href="./features">Features</a>
                                </li>
                                <li>
                                    <a href="./shop">Shop</a>
                                </li>
                                <li>
                                    <a href="./elements">Elements</a>
                                </li>
                                <li>
                                    <a href="./about">About Us</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="search fa fa-search"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- <main>
        <div class="container">
            <div class="row awe">
                <div class="col-12 col-md-6 awfe">
                    <div class="awesome">AWESOME <span class="features">FEATURES</span></div>
                    <div class="feat">
                        99.99% Uptime<span class="slashas"> / </span>Free Upgrades<span class="slashas"> / </span>Fully
                        Responsive<span class="slashas"> / </span>Bug Free
                    </div>
                </div>
                <div class="col-12 col-md-6 get_app_today">
                    <button class="get_btn">Get CmsApp Today <span class="fa fa-arrow-right"></span></button>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 contact">
                    CONTACT US
                    <i class="fas fa-cog fa-spin"></i>
                    <div class="ragelis "><i class="fa fa-phone"></i> 019223 8092344</div>
                    <div class="emailas"><i class="fa fa-envelope"></i> info@cmsapptheme.com</div>
                    <div class="adresas"><i class="fa fa-home"></i> Sunshine House, Sunville. SUN12 8LU.</div>
                </div>
                <div class="col-12 col-md-4 about">
                    ABOUT US
                    <div class="pasaka">Making the web a prettier place one template at a time! We make beautiful,
                        quality, responsive Drupal & web templates!</div>
                </div>
                <div class="col-12 col-md-4 newsletter">
                    NEWSLETTER
                    <div class="ragelis">Stay up to date with our latest news and product releases by singing up to our
                        newsletter.</div>
                    <div class="inputs">
                        <input class="email_input" type="text" placeholder="Email">
                        <input class="go_btn" type="button" value="Go!">
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body> -->
    <?php
    switch ($request) {
        case $route_prefix . '/':
            require __DIR__ . '/src/views/index.php';
            // $idxView = new Views\IndexView();
            // $idxView->setTitle();
            // $idxView->setTable();
            // print($idxView);
            break;
        case $route_prefix . '/':
            require __DIR__ . '/src/views/index.php';
            break;
        case $route_prefix . '/about':
            require __DIR__ . '/src/views/about.php';
            break;
        case $route_prefix . '/home':
            require __DIR__ . '/src/views/home.php';
            break;
        case $route_prefix . '/features':
            require __DIR__ . '/src/views/features.php';
            break;
        case $route_prefix . '/pages':
            require __DIR__ . '/src/views/pages.php';
            break;
        case $route_prefix . '/elements':
            require __DIR__ . '/src/views/elements.php';
            break;
        case $route_prefix . '/shop':
            require __DIR__ . '/src/views/shop.php';
            break;
        case $route_prefix . '/admin':
            ob_clean();
            require __DIR__ . '/src/views/login.php';
            break;
        default:
            ob_clean();
            http_response_code(404);
            require __DIR__ . '/src/views/404.php';
            break;
    }
    ?>
    <!-- <main>
    <div class="container">
        <div class="row awe">
            <div class="col-12 col-md-6 awfe">
                <div class="awesome">AWESOME <span class="features">FEATURES</span></div>
                <div class="feat">
                    99.99% Uptime<span class="slashas"> / </span>Free Upgrades<span class="slashas"> / </span>Fully
                    Responsive<span class="slashas"> / </span>Bug Free
                </div>
            </div>
            <div class="col-12 col-md-6 get_app_today">
                <button class="get_btn">Get CmsApp Today <span class="fa fa-arrow-right"></span></button>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 contact">
                CONTACT US
                <i class="fas fa-cog fa-spin"></i>
                <div class="ragelis "><i class="fa fa-phone"></i> 019223 8092344</div>
                <div class="emailas"><i class="fa fa-envelope"></i> info@cmsapptheme.com</div>
                <div class="adresas"><i class="fa fa-home"></i> Sunshine House, Sunville. SUN12 8LU.</div>
            </div>
            <div class="col-12 col-md-4 about">
                ABOUT US
                <div class="pasaka">Making the web a prettier place one template at a time! We make beautiful,
                    quality, responsive Drupal & web templates!</div>
            </div>
            <div class="col-12 col-md-4 newsletter">
                NEWSLETTER
                <div class="ragelis">Stay up to date with our latest news and product releases by singing up to our
                    newsletter.</div>
                <div class="inputs">
                    <input class="email_input" type="text" placeholder="Email">
                    <input class="go_btn" type="button" value="Go!">
                </div>
            </div>
        </div>
    </div>
</footer> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>