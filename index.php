<?php
    require_once "includes/global.php";
    
    $popular = $pdo->query('SELECT * FROM products ORDER BY views DESC LIMIT 3')->fetchall();
    
    $products = $pdo->query('SELECT * FROM products ORDER BY views DESC')->fetchall();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buy&amp;Buy</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
    <?php require_once "includes/navbar.php" ?>

    <div class="container">

        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php foreach($popular as $key => $product): ?>
                                    <div class="item <?= $key == 0 ? 'active' : '' ?>">
                                        <img class="slide-image" src="<?= $product->image ?>" alt="<?= $product->name ?>">
                                        <div class="carousel-caption">
                                            <h3><?= $product->name ?></h3>
                                            <p><?= limit($product->description) ?></p>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <?php foreach($products as $key => $product): ?>

                        <?php if ($key % 3 == 2): ?>
                            <div class="row">
                        <?php endif ?>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                                <div class="caption">
                                    <h4 class="pull-right">$<?= $product->price ?></h4>
                                    <h4><a href="<?= 'product.php?id=' . $product->id ?>"><?= $product->name ?></a>
                                    </h4>
                                    <p><?= limit($product->description) ?></p>
                                </div>
                                <div class="ratings">
                                    <p class="pull-right"><i class="glyphicon glyphicon-eye-open"></i> <?= $product->views ?> views</p>
                                    <p>
                                        <?php for($i = 1; $i <= $product->rate; $i++ ): ?>
                                            <span class="glyphicon glyphicon-star"></span>
                                        <?php endfor ?>
                                        <?php for($i = $product->rate; $i < 5; $i++ ): ?>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                        <?php endfor ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <?php if ($key % 3 == 2): ?>
                            </div>
                        <?php endif ?>

                        <?php endforeach ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like these products?</a>
                        </h4>
                        <p>If you like these products, then check the website regulary to see more products.</p>
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
