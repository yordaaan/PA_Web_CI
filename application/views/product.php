<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<title>Dendeng Racingan</title>
	<link rel="icon" type="image/png" href="<?php echo base_url('/dist/images/favicon.png') ?>">
    <!-- fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
	<!-- css -->
	<link rel="stylesheet" href="<?php echo base_url('/dist/vendor/bootstrap-4.2.1/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('/dist/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('/dist/css/style.css') ?>">
	<!-- js -->
	<script src="<?php echo base_url('/dist/vendor/jquery-3.3.1/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('/dist/vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('/dist/vendor/owl-carousel-2.3.4/owl.carousel.min.js') ?>"></script>
	<script src="<?php echo base_url('/dist/vendor/nouislider-12.1.0/nouislider.min.js') ?>"></script>
	<script src="<?php echo base_url('/dist/js/number.js') ?>"></script>
	<script src="<?php echo base_url('/dist/js/main.js') ?>"></script>
	<script src="<?php echo base_url('/dist/vendor/svg4everybody-2.1.9/svg4everybody.min.js') ?>"></script>
	<script>svg4everybody();</script>
	<!-- font - fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url('/dist/vendor/fontawesome-5.6.1/css/all.min.css') ?>">
	<!-- font - stroyka -->
	<link rel="stylesheet" href="<?php echo base_url('/dist/fonts/stroyka/stroyka.css') ?>">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
</head>

<body>
	<br>
	<div class="container col-md-7" style="border: 1px solid rgb(224, 224, 224)";>
		<!-- desktop site__header -->
		<header class="site__header d-lg-block d-none">
			<div class="site-header">
				<div class="page-header__container container">
					<div class="page-header__title">
						<br>
						<h1>Detail Produk</h1></div>
					</div>
				</div>
				<!-- site__body -->
				<div class="site__body">
					<div class="container">
						<div class="product product--layout--standard" data-layout="standard">
							<div class="product__content">
								<!-- .product__gallery -->
								<div class="product__gallery">
									<div class="product-gallery">
										<div class="product-gallery__featured">
											<div class="owl-carousel" id="product-image"><img src="images/products/no-img.jpg" alt=""></div>
										</div>
									</div>
								</div><!-- .product__gallery / end -->
								<!-- .product__info -->
								<div class="product__wishlist-compare"><button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Wishlist"><svg width="16px" height="16px">
									<use xlink:href="images/sprite.svg#wishlist-16"></use>
								</svg></button> <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Compare"><svg width="16px" height="16px">
									<use xlink:href="images/sprite.svg#compare-16"></use>
								</svg></button></div>
								<h1 class="product__name"><?php echo $queryDetailProduk -> nama_produk ?></h1>

								<div class="product__description"><?php echo $queryDetailProduk -> deskripsi_produk ?></div>
							</div><!-- .product__info / end -->
							<!-- .product__sidebar -->
							<div class="product__sidebar">
								<div class="product__prices">Rp.<?php echo $queryDetailProduk -> harga_produk ?></div><!-- .product__options -->
								<form class="product__options">
									<div class="form-group product__option"><label class="product__option-label" for="product-quantity">Jumlah</label>
										<div class="product__actions">
											<div class="product__actions-item">
												<div class="input-number product__quantity"><input id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1">
													<div class="input-number__add"></div>
													<div class="input-number__sub"></div>
												</div>
											</div>
											<div class="product__actions-item product__actions-item--addtocart"><button class="btn btn-lg">Tambah Belanjaan</button></div>
										</div>
									</div>
								</form><!-- .product__options / end -->
							</div><!-- .product__end -->
						</div>
						<br><br><br><br>
						<a href="<?php echo base_url('/home/index') ?>" class="btn" style="width: 100%">Kembali</a>
					</div>
					<br><br>
				</div>
			</div>
		</div>
	</div>
</div><!-- .block-products-carousel -->
</div><!-- site__body / end -->
<!-- site__footer -->
</header>
</div><br>
</body>
</html>