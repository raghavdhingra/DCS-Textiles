<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCS Textiles</title>
    <link rel="icon" type="image/png" href="images/favicon.ico" />
    <?php include('head-links.php'); ?>

</head>

<body>
   <?php include('header.php') ?>
   <section class="hero-section">
    <div class="container">
        <h4>Products</h4>
    </div>
</section>

<section class="product-section recommended-product-section pt-1 main-product-page">
    <div class="container-fluid">
        <div class="mini-hero my-4">
            <a href="./">Home</a>
            <span class="px-1"> / </span>
            <a href="products" class="active-product"> Products</a>
            <!-- <span class="px-1"> / </span> -->
            <!-- <span class="active-product"> Electrical & Mechanical Division</span> -->
        </div>


        <div class="row">

            <div class="col-lg-12 pt-2 grid-container">
                <div class="demo-gallery container-fluid">
                    <ul id="lightgallery" class="text-center">
                        <?php 
                        for ($i=1; $i < 38; $i++) { ?> 
                            <li data-responsive="images/p<?php echo $i; ?>.jpeg" data-src="images/p<?php echo $i; ?>.jpeg">
                                <a href="">
                                    <img class="img-responsive" src="images/p<?php echo $i; ?>.jpeg">
                                    <div class="demo-gallery-poster">
                                        <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('preloader.php') ?>
<?php include('footer.php') ?>
<?php include('js/gallery.php') ?>
</body>
</body>

</html>