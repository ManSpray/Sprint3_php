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
    <?php
    switch ($request) {
        case $route_prefix . '/':
            require __DIR__ . '/src/views/index.php';
            // $idxView = new Views\IndexView();
            // $idxView->setTitle();
            // $idxView->setTable();
            // print($idxView);
            break;
        case $route_prefix . '':
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
        default:
            http_response_code(404);
            require __DIR__ . '/src/views/404.php';
            break;
    }
    ?>