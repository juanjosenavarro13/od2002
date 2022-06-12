<!-- FOOTER -->
<footer id="footer">
	<!-- top footer -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Sobre nosotros</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
						<ul class="footer-links">
							<!-- <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li> -->
							<li><a href="tel:+34<?= $datosweb['telefono1'] ?>"><i class="fa fa-phone"></i> <?= $datosweb['telefono1'] ?></a> / <a href="tel:+34<?= $datosweb['telefono2'] ?>"><i class="fa fa-phone"></i> <?= $datosweb['telefono2'] ?></a></li>
							<li><a href="mailto:<?= $datosweb['email'] ?>"><i class="fa fa-envelope-o"></i> <?= $datosweb['email'] ?></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Catalogos</h3>
						<ul class="footer-links">

							<li><a href="?p=catalogo&id=1"><?= $catalogos['1']['nombre'] ?></a></li>
							<li><a href="?p=catalogo&id=2"><?= $catalogos['2']['nombre'] ?></a></li>
							<li><a href="?p=catalogo&id=3"><?= $catalogos['3']['nombre'] ?></a></li>
							<li><a href="?p=catalogo&id=4"><?= $catalogos['4']['nombre'] ?></a></li>

						</ul>
					</div>
				</div>

				<div class="clearfix visible-xs"></div>

				<!-- <div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informacion</h3>
								<ul class="footer-links">
									<li><a href="#">Abou</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div> -->

				<!-- <div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div> -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /top footer -->
	<!-- bottom footer -->
	<div id="bottom-footer" class="section">
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12 text-center">
					<!-- <ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul> -->
					<span class="copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> Todos los derechos reservados | diseñado por <a class="text-danger" href="http://gesimar.es" target="_blank">Gesimar Informatica</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</span>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bottom footer -->
</footer>
<!-- /FOOTER -->