<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="box-footer info-contact">
							<h3>Thông tin liên hệ</h3>
							<div class="content-contact">
								<p>Website chuyên cung cấp mỹ phẩm chính hãng hàng đầu Việt Nam</p>
								<p>
									<strong>Địa chỉ:</strong> Xuân Lãnh - Đồng Xuân - Phú Yên
								</p>
								<p>
									<strong>Email: </strong> caothithudancva@gmail.com
								</p>
								<p>
									<strong>Điện thoại: </strong> 0962446563
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="box-footer info-contact">
							<h3>Thông tin khác</h3>
							<div class="content-list">
							<?php wp_nav_menu(
								array( 
									'theme_location' => 'footer-menu', 
									'container' => 'false', 
									'menu_id' => 'footer-menu', 
									'menu_class' => 'footer-menu'
								) 
								); ?>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="box-footer info-contact">
							<h3>Form liên hệ</h3>
							<div class="content-contact">
							<?php echo do_shortcode('[contact-form-7 id="185" title="lienhe"]')?>
							<p class="title">Kết nối</p>
							<ul class="lh2-ul share-h2">
							<li><a href="https://www.facebook.com/lixiboxvn" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://xn--2bnh-6na.vn/cua-hang/twitchofficialstore.vn/" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="https://zalo.me/0962446563" target="_blank"><i class="fab fa-skype"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCIvtEEgfjqOuYPXRDV4mZQg" target="_blank"><i class="fab fab fa-youtube"></i></a></li>
								
							</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="copyright">
				<p>Copyright © 2021 Cosmetics - Design by Caothdan</p>
			</div>
			</footer>
		</div>
		<script src="<?php bloginfo('template_directory'); ?>/libs/jquery-3.4.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" 
			src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="g1WvijDe">
		</script>
	<?php wp_footer(); ?>
    </body>
</html>