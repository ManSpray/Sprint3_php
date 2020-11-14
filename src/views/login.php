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
    <title>Loginn</title>
</head>

<body>
    <?php
    // logout logic
    if (isset($_GET['action']) and $_GET['action'] == 'logout') {
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['logged_in']);
        print('Logged out!');
    } ?>

    <div>
        <?php
        session_start();
        $msg = '';
        if (
            isset($_POST['login'])
            && !empty($_POST['username'])
            && !empty($_POST['password'])
        ) {
            if (
                $_POST['username'] == 'admin' &&
                $_POST['password'] == 'admin'
            ) {
                $_SESSION['logged_in'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'admin';
                header('location: src/views/entities.php');
                // $request = $_SERVER['REQUEST_URI'];
                // $route_prefix = "/CMS_app";
                // switch ($request) {
                //     case $route_prefix . '/admin':
                //         ob_clean();
                //         require __DIR__ . '/entities.php';

                //         // $idxView = new Views\IndexView();
                //         // $idxView->setTitle();
                //         // $idxView->setTable();
                //         // print($idxView);

                //         break;
                // }
            } else {
                $msg = 'Wrong username or password';
            }
        }
        ?>
    </div>

    <form id="login" action="./admin" method="post" style="text-align: center;">
        <h4><?php echo $msg; ?></h4>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 offset-0 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 ale">
                        <div class="login">
                            Login
                        </div>
                        <div class="sign">
                            Not signed up?
                            <a href="">Sign up here.</a>
                        </div>
                        <div class="email">
                            <!-- <input type="text" name="email" placeholder="ID"> -->
                            <input type="text" name="username" placeholder="User Name" required autofocus>
                        </div>
                        <div class="pass">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="log_fog">
                            <!-- <button class="btn_log">Login</button> -->
                            <button class="btn_log" type="submit" name="login">Login</button>
                            | <a class="forgot" href="">Forgotten Password?</a>
                        </div>
                    </div>
                </div>
        </section>
    </form>


    <!-- <div class="login">
        <form id="login" action="./" method="post">
            <h4></h4>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="ale">
                            <div class="logini">
                                Login
                            </div>
                            <div class="sign">
                                Not signed up?
                                <a href="">Sign up here.</a>
                            </div>
                            <div class="email">
                                <input type="text" name="username" placeholder="User Name" required autofocus>
                            </div>
                            <div class="pass">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="log_fog">
                                <button class="btn_log" type="submit" name="login" >Login</button>
                                | <a class="forgot" href="">Forgotten Password?</a>
                            </div>
                        </div>
                    </div>
            </section>
        </form>
    </div> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>