<?php 
    require_once "includes/global.php";

    $stmt = $pdo->prepare('UPDATE products SET views=views+1 WHERE id= :id LIMIT 1')->execute(['id' => $_GET['id']]);

    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = :id LIMIT 1');
    $stmt->execute(['id' => $_GET['id']]);

    $product = $stmt->fetch();

    if($product==[]) {
        redirect('/');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $product->name ?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
    <?php require_once "includes/navbar.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="thumbnail">
                    <img class="img-responsive" src="<?= $product->image ?>" alt="<?= $product->name ?>">
                    <div class="caption-full">
                        <h4 class="pull-right">$<?= $product->price ?></h4>
                        <h4><a href="#"><?= $product->name ?></a>
                        </h4>
                        <p><?= $product->description ?></p>
                    </div>

                    <div class="ratings">
                        <span class="pull-right"><i class="glyphicon glyphicon-eye-open"></i> <?= $product->views ?> views</span>
                        <p>
                            <?php for($i = 1; $i <= $product->rate; $i++ ): ?>
                                <span class="glyphicon glyphicon-star"></span>
                            <?php endfor ?>
                            <?php for($i = $product->rate; $i < 5; $i++ ): ?>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            <?php endfor ?>
                            <?= $product->rate ?> stars
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
        <div class="clearfix"></div>
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