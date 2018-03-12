<?php
    require_once "includes/global.php";
    
    if(!isset($_SESSION['user'])) {
        redirect('/');
    }

    $users = $pdo->query('SELECT * FROM users')->fetchall();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Users</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
    <?php require_once "includes/navbar.php" ?>
    
    <!-- Page Content -->
    <div class="container">
        <h1>Users</h1>
        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                <th>id</th>
                <th>username</th>
                <th>email</th>
                <th>password</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr <?= $user->id == user()->id ? 'class="info"':''?> >
                        <td><?= $user->id ?></td>
                        <td><?= $user->username ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->password ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            </table>
    </div>
    <!-- /.container -->
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
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