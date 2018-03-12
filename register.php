<?php 
    require_once "includes/global.php";

    if(isset($_SESSION['user'])) {
        redirect('/');
    }

    if ($_SERVER['REQUEST_METHOD'] =='POST'){
        
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
        if (strlen($username) < 3) {
            flash('Username can\'t be less than 3 letters', 'danger', 'username');
        }

        if (empty($email)) {
            flash('Email can\'t be empty', 'danger', 'email');
        }

        if (strlen($_POST['password']) < 6) {
            flash('Password can\'t be less than 6 letters', 'danger', 'password');
        }
        if ($_POST["password"] != $_POST['password_confirmation']) {
            flash('Password doesn\'t match', 'danger', 'password_confirmation');
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            flash('Please enter a valid email', 'danger', 'email');
        }
        if(user_exists($email)) {
            flash('User with same email already exist', 'danger', 'email');                
        }

        if(!isset($_SESSION['errors'])) {
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username , :email, :password)");
            $stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);
            login($email, $_POST['password']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
    <?php require_once "includes/navbar.php" ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center">Register</h2>
                <hr>

                <?php require_once "includes/flash.php" ?>

                <form method="POST" class="form-horizontal">
                    <div class="form-group <?= has_error('email')? 'has-error' : '' ?>">
                        <label for="email" class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-9">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" autocomplete="off" value="<?= old('email') ?>">
                        </div>
                    </div>
                    <div class="form-group <?= has_error('username')? 'has-error' : '' ?>">
                        <label for="username" class="col-lg-3 control-label">Username:</label>
                        <div class="col-lg-9">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" autocomplete="off" value="<?= old('username') ?>">
                        </div>
                    </div>
                    <div class="form-group <?= has_error('password')? 'has-error' : '' ?>">
                        <label for="password" class="col-lg-3 control-label">Password:</label>
                        <div class="col-lg-9">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group <?= has_error('password_confirmation')? 'has-error' : '' ?>">
                        <label for="password_confirmation" class="col-lg-3 control-label">Confirm Password:</label>
                        <div class="col-lg-9">
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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