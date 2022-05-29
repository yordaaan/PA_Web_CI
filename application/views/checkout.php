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
</head>

<body>
	<br>
	<div class="container col-md-7" style="border: 1px solid rgb(224, 224, 224);
	box-shadow: rgb(238, 238, 238) 0px 0px 3px 1px; position: relative;">
	<!-- desktop site__header -->
	<!-- site__body -->
	<div class="site__body">
		<div class="page-header">
			<div class="page-header__container container">
				<div class="page-header__title">
					<h1><center>Terima Kasih</center></h1>
					<h3><center>Pesanan Akan Di Proses</center></h3>
				</div>
			</div>
		</div>
		<div class="checkout block">
			<div class="container">
				<div class="row">
					<div class="card-body">
						<h3 class="card-title">Alamat Dendeng Racinang</h3>						
						<div class="form-group"> 
							<input type="text" class="form-control" id="checkout-company-name" placeholder="Jln. AAAA" disabled="">
						</div>
						<div class="form-group"><label for="checkout-country">Jemput produk pada tanggal xx-xx-xxxx</label></div>
						<div class="form-group"><label for="checkout-country">Jam penjemputan xx.xx - xx.xx</label></div>
						<div class="form-row">
							<div class="form-group col-md-6"><h4>Total Pembayaran</h4></div>
							<div class="form-group col-md-6"><input type="text" class="form-control" id="checkout-phone" placeholder="xxx.xxx.xxx"></div>
						</div>
						<br>
						<h7><center>Kamu Akan Dihubungi Penjual</center></h7>
						<h7><center>Untuk Membayar Pesanan</center></h7>
						<br>
						<br>
						<br>
						<a href="<?php echo base_url('/home/index') ?>" class="btn" style="width: 100%">Kembali Ke Katalog</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- site / end -->
<br>
</body>

</html>