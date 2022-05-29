<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<title>Dendeng Racinang</title>
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
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-97489509-6');
	</script>
</head>

<body>
	<br>
	<div class="container col-md-7" style="border: 1px solid rgb(224, 224, 224);
	box-shadow: rgb(238, 238, 238) 0px 0px 3px 1px; position: relative;">
	<!-- desktop site__header -->
	<header class="site__header d-lg-block d-none">
		<br>
		<div class="site-header">
			<div class="site-header__middle container">
				<div class="site-header__logo"><a href="index.html"><img width="250px" height="70px" src="<?php echo base_url('/dist/images/logos/logoo.jpg') ?>" alt=""></a></div>
			</div>

				</header>
				<!-- desktop site__header / end -->
				<!-- site__body -->
				<div class="site__body">
					<div class="page-header">
						<div class="page-header__container container">
							<div class="page-header__title">
								<br>
								<h1>Semua Produk</h1></div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="block">
										<div class="products-view">
											<div class="products-view__options">
												<div class="view-options">
													<div class="view-options__layout">
														<div class="layout-switcher">
															<div class="layout-switcher__list">
																<button data-layout="grid-3-sidebar" data-with-features="false" title="Grid" type="button" class="layout-switcher__button layout-switcher__button--active"><svg width="16px" height="16px"><use xlink:href="<?php echo base_url('/dist/images/sprite.svg#layout-grid-16x16') ?>"></use></svg></button> 
																<button data-layout="list" data-with-features="false" title="List" type="button" class="layout-switcher__button"><svg width="16px" height="16px"><use xlink:href="<?php echo base_url('/dist/images/sprite.svg#layout-list-16x16') ?>"></use></svg></button></div>
															</div>
														</div>
														<div class="view-options__divider"></div>
														<div class="view-options__control"><label for="">Kategori</label>
															<div><select class="form-control form-control-sm" name="" id="">
																<option value="">Semua Produk</option>
																<option value="">Produk 1</option>
																<option value="">Produk 2</option>
															</select></div>
														</div>
                                                    </div>
												</div>
												<div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false">
													<div class="products-list__body">
                                                    <?php 
                                                    foreach ($queryAllProduk as $row){
                                                    ?>
														<div class="products-list__item">
															<div class="product-card">
																<div class="product-card__image">
																	<a href="<?php echo base_url('/home/halaman_produk')?>/<?php echo $row->id_produk?>"><img src="<?php echo base_url('/dist/images/products/no-img.jpg') ?>" alt=""></a>
																</div>
																<div class="product-card__info">
																	<div class="product-card__name"><a href="<?php echo base_url('/home/halaman_produk') ?>"><?php echo $row->nama_produk?></a>
																	</div>
																	<p><?php echo $row->deskripsi_produk?></p>
																</div>
																<div class="product-card__actions">
																	<div class="product-card__prices">Rp.<?php echo $row->harga_produk?></div>
																	<div class="product-card__buttons"><a href="<?php echo base_url('/home/halaman_produk')?>/<?php echo $row->id_produk?>" class="btn product-card__addtocart" type="button">Tambah Produk</a></div>
																</div>
															</div>
														</div>
                                                    <?php } ?>
													</div>
												</div>
												<div class="products-view__pagination">
													<br>
													<a href="<?php echo base_url('/home/halaman_cart') ?>" class="btn" style="width: 100%">Cek Keranjang</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- site__body / end -->
					</div>
					<!-- site / end -->
				</div>
			</div>
		</header>
	</div>
</body>
</html>