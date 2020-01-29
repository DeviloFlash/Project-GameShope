<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<title> GES Shop : โปรโมชั่น</title>
	<!-- ส่วนเสริม -->
	<?php echo $assist; ?>

</head>
<body>

		<?php echo $navbar; ?>
		<div class="bg-promotion">
			<div class="img-bg">
				<img src="<?php echo base_url(); ?>assist/img/bgpro.jpg">
			</div>
		</div>
		<div class="body-promotion">
			<div class="header-pro">
				<p><i class="fas fa-ad"></i> โปรโมชั่น</p>
			</div>
			<div class="or">
					<hr><p><i class="fas fa-gamepad"></i></p><hr>
			</div>
			<div class="teble-order">
				<div class="table-box">
					<img src="<?php echo base_url(); ?>assist/img/menu/s13.jpg">
					<div class="bg-blank"></div>
					<div class="bg-blank-text"></div>
					<div class="bg-readmore"><a href="<?php echo base_url(); ?>index.php/Gameshope/promotion_view">ดูรายละเอียด</a></div>
					<div class="bg-submit"><a href="#">เช่าเลย</a></div>
					<div class="text-price">ราคา 100.-</div>
					<div class="text-header">โปรโมชั่นเกมส์ผี</div>
					<div class="text-number">100 เกมส์</div>
				</div>
			</div>
		</div>

	<?php echo $footer; ?>
</body>

<?php echo $aostime; ?>
</html>
