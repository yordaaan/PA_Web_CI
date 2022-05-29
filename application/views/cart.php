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
	<!-- site__body -->
	<div class="site__body">
		<div class="page-header">
			<br>
			<div class="page-header__container container">
				<div class="page-header__title">
					<h1>Keranjang</h1>
				</div>
			</div>
		</div>
		<div class="cart block">
			<div class="container">
				<table class="cart__table cart-table">
					<thead class="cart-table__head">
						<tr class="cart-table__row">
							<th class="cart-table__column cart-table__column--image">Gambar</th>
							<th class="cart-table__column cart-table__column--product">Produk</th>
							<th class="cart-table__column cart-table__column--price">Harga</th>
							<th class="cart-table__column cart-table__column--quantity">Jumlah</th>
							<th class="cart-table__column cart-table__column--total">Total</th>
							<th class="cart-table__column cart-table__column--remove"></th>
						</tr>
					</thead>
					<tbody class="cart-table__body">
						<tr class="cart-table__row">
							<td class="cart-table__column cart-table__column--image"><a href="#"><img src="images/products/no-img.jpg" alt=""></a></td>
							<td class="cart-table__column cart-table__column--product"><a href="#" class="cart-table__product-name">Produk 1</a>
								<p>Deskripsi Produk 1</p>
							</td>
							<td class="cart-table__column cart-table__column--price" data-title="Price">Rp.xxx.xxx</td>
							<td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
								<div class="input-number"><input class="form-control input-number__input" type="number" min="1" value="2">
									<div class="input-number__add"></div>
									<div class="input-number__sub"></div>
								</div>
							</td>
							<td class="cart-table__column cart-table__column--total" data-title="Total">Rp.xxx.xxx</td>
							<td class="cart-table__column cart-table__column--remove"><button type="button" class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
								<use xlink:href="images/sprite.svg#cross-12"></use>
							</svg></button></td>
						</tr>
						<tr class="cart-table__row">
							<td class="cart-table__column cart-table__column--image"><a href="#"><img src="images/products/no-img.jpg" alt=""></a></td>
							<td class="cart-table__column cart-table__column--product"><a href="#" class="cart-table__product-name">Produk 2</a>
								<p>Deskripsi Produk 2</p>
							</td>
							<td class="cart-table__column cart-table__column--price" data-title="Price">Rp.xxx.xxx</td>
							<td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
								<div class="input-number"><input class="form-control input-number__input" type="number" min="1" value="2">
									<div class="input-number__add"></div>
									<div class="input-number__sub"></div>
								</div>
							</td>
							<td class="cart-table__column cart-table__column--total" data-title="Total">Rp.xxx.xxx</td>
							<td class="cart-table__column cart-table__column--remove"><button type="button" class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
								<use xlink:href="images/sprite.svg#cross-12"></use>
							</svg></button></td>
						</tr>
						<tr class="cart-table__row">
							<td class="cart-table__column cart-table__column--image"><a href="#"><img src="images/products/no-img.jpg" alt=""></a></td>
							<td class="cart-table__column cart-table__column--product"><a href="#" class="cart-table__product-name">Produk 3</a>
								<p>Deskripsi Produk 3</p>
							</td>
							<td class="cart-table__column cart-table__column--price" data-title="Price">Rp.xxx.xxx</td>
							<td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
								<div class="input-number"><input class="form-control input-number__input" type="number" min="1" value="2">
									<div class="input-number__add"></div>
									<div class="input-number__sub"></div>
								</div>
							</td>
							<td class="cart-table__column cart-table__column--total" data-title="Total">Rp.xxx.xxx</td>
							<td class="cart-table__column cart-table__column--remove"><button type="button" class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
								<use xlink:href="images/sprite.svg#cross-12"></use>
							</svg></button></td>
						</tr>

					</tbody>
				</table>
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">Data Diri</h3>
						<table class="cart__totals">
							<thead class="cart__totals-header">
								<tr>
									<th>Nama</th>
									<td><input type="text"></td>
								</tr>
								<tr>
									<th>No. WA</th>
									<td><input type="text"></td>
								</tr>
							</thead>
							<tbody class="cart__totals-body">
								<tr>
									<th>Info Tambahan</th>
									<td></td>
								</tr>
								<tr>
									<td><textarea cols="50" name="comment" form="usrform"></textarea></td>
								</tr>
							</tbody>
							<tfoot class="cart__totals-footer">
								<tr>
									<th>Total</th>
									<td>Rp.xxx.xxx</td>
								</tr>
							</tfoot>
						</table><a class="btn btn-xl btn-block" href="<?php echo base_url('/home/halaman_checkout') ?>">Buat Pesanan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div><!-- site__body / end -->
</div><!-- site / end -->
</body>

</html>