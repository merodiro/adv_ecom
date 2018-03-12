<?php 
    require_once "includes/global.php";

    if(isset($_SESSION['user'])) {
        redirect('/');
    }

    if ($_SERVER['REQUEST_METHOD'] =='POST'){
        $email = $_POST["email"];
        $password = $_POST["password"];
        if (empty($email)) {
            flash('email can\'t be empty', 'danger', 'email');
        }

        if (empty($password)) {
            flash('password can\'t be empty', 'danger', 'password');
        }

        if(!isset($_SESSION['errors'])) {
            login($email, $password);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
    <?php require_once "includes/navbar.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center">Login</h2>
                <hr>
                <?php require_once "includes/flash.php" ?>
                <form method="POST" class="form-horizontal">
                    <div class="form-group <?= has_error('email')? 'has-error' : '' ?>">
                        <label for="email" class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-9">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" autocomplete="off" value="<?= old('email') ?>">
                        </div>
                    </div>

                    <div class="form-group <?= has_error('password')? 'has-error' : '' ?>">
                        <label for="password" class="col-lg-3 control-label">Password:</label>
                        <div class="col-lg-9">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Buy&amp;Buy 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php if(isset($_SESSION['errors'])): ?>
    <?php session_unset($_SESSION['errors']) ?>
<?php endif ?>
