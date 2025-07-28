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
   <section class="hero-section" style="margin-top: 0; height: 200px;">
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
            <span class="px-1"> / </span>
            <span class="active-product" id="active-product-category"></span>
        </div>


        <div class="row">

            <div class="col-lg-12 pt-2 grid-container">
                <div class="demo-gallery container-fluid">
                    <ul id="lightgallery" class="text-center"></ul>
                </div>
                <div id="invalid-section-container"></div>
            </div>
        </div>
    </div>
</section>

<script>
    const invalidSection = `
    	<section class="promo-banner py-md-5  pt-0">
		<div class="container">
			<h3 class="mb-5 heading text-center">Product Category</h3>
			<div class="row">
					<!-- Rugs -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=rugs">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p1.jpeg" class="img-fluid" alt="Rugs">
									<h3 class="product-name text-uppercase">RUGS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Bathmats -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=bathmats">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p2.jpeg" class="img-fluid" alt="Bathmats">
									<h3 class="product-name text-uppercase">BATHMATS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Throws -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=throws">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p2.jpeg" class="img-fluid" alt="Throws">
									<h3 class="product-name text-uppercase">THROWS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Poufs and Ottomans -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=poufs-and-ottomans">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p3.jpeg" class="img-fluid" alt="Poufs and Ottomans">
									<h3 class="product-name text-uppercase">POUFS and OTTOMANS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Towels -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=towels">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p3.jpeg" class="img-fluid" alt="Towels">
									<h3 class="product-name text-uppercase">TOWELS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Baskets -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=baskets">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p4.jpeg" class="img-fluid" alt="Baskets">
									<h3 class="product-name text-uppercase">BASKETS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Placemats -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=placemats">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p5.jpeg" class="img-fluid" alt="Placemats">
									<h3 class="product-name text-uppercase">PLACEMATS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Runners -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=runners">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p6.jpeg" class="img-fluid" alt="Runners">
									<h3 class="product-name text-uppercase">RUNNER</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Carpets -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=carpets">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p7.jpeg" class="img-fluid" alt="Carpets">
									<h3 class="product-name text-uppercase">CARPETS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Cushions -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=cushions">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p8.jpeg" class="img-fluid" alt="Cushions">
									<h3 class="product-name text-uppercase">CUSHIONS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Prayer Mats -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=prayer-mats">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p11.jpeg" class="img-fluid" alt="Prayer Mats">
									<h3 class="product-name text-uppercase">Prayer Mats</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Cushions -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=cushions">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p8.jpeg" class="img-fluid" alt="Cushions">
									<h3 class="product-name text-uppercase">CUSHIONS</h3>
								</div>
							</div>
						</a>
					</div>

					<!-- Pet Beds -->
					<div class="col-lg-3 col-md-3 col-6 py-3">
						<a href="./products?category=pet-beds">
							<div class="promob-col">
								<div class="promo-box text-center">
									<img src="images/p12.jpeg" class="img-fluid" alt="Pet Beds">
									<h3 class="product-name text-uppercase">PET BEDS</h3>
								</div>
							</div>
						</a>
					</div>
			</div>
		</div>
	</section>`;
    const allowedCategories = [
        'rugs', 'baskets', 'bathmats', 'carpets',
        'cushions', 'placemats', 'poufs-and-ottomans',
        'runners', 'throws', 'towels', 'prayer-mats', 'pet-beds'
    ];

		const categoryObject = {
			'rugs': 'Rugs',
			'baskets': 'Baskets',
			'bathmats': 'Bathmats',
			'carpets': 'Carpets',
			'cushions': 'Cushions',
			'placemats': 'Placemats',
			'poufs-and-ottomans': 'Poufs and Ottomans',
			'runners': 'Runners',
			'throws': 'Throws',
			'towels': 'Towels',
			'prayer-mats': 'Prayer Mats',
			'pet-beds': 'Pet Beds'
		}

    const categoryFromURL = window.location.search.split('=')[1];

    if (!allowedCategories.includes(categoryFromURL)) {
        document.getElementById('invalid-section-container').innerHTML = invalidSection;
    } else {
		document.getElementById('active-product-category').innerHTML = `<a href="./products?category=${categoryFromURL}">${categoryObject[categoryFromURL] || "Product Category"}</a>`;
        const gallery = document.getElementById('lightgallery');
        for (let i = 1; i < 15; i++) {
            const imgPath = `images/product/${categoryFromURL}/p${i}.jpeg`;
            const li = document.createElement('li');
            li.setAttribute('data-responsive', imgPath);
            li.setAttribute('data-src', imgPath);
            li.innerHTML = `
                <a href="">
                    <img class="img-responsive" src="${imgPath}" onerror="this.onerror=null; this.src='images/coming-soon.jpg'">
                    <div class="demo-gallery-poster">
                        <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
                    </div>
                </a>
            `;
            gallery.appendChild(li);
        }
    }
</script>


<?php include('preloader.php') ?>
<?php include('footer.php') ?>
<?php include('js/gallery.php') ?>
</body>
</body>

</html>