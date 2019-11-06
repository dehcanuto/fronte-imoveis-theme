<div class="clear"></div>
</div>

<div class="subir-topo" style="display: none;">
	<i class="fas fa-arrow-up"></i>
</div>

<a class="btn-whats pulse-whats" href="https://api.whatsapp.com/send?phone=558130031122" target="_blank">
  <i class="fab fa-whatsapp"></i>
</a>

<footer class="text-light">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3 text-center">
				<?php 
					printf( '<img class="img-fluid" src="%1$s/assets/img/fronte-imoveis-footer.png" alt="%2$s">',
						get_template_directory_uri(),
						get_bloginfo( 'name' ) ); 
				?>
				<p class="my-4">
					CNPJ: 22.132.683/0001-73<br>
					contato@fronteimoveis.com.br<br>
					Ligue: 3003-1122
				</p>
				<ul class="d-inline-flex list-inline ft-social mx-auto">
					<li><a href="https://www.facebook.com/fronteimoveis/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.instagram.com/fronteimoveis/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=558130031122" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCEqdgxecGVkM2wWQR5ku6Zw"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="col-12 col-md-9">
				<h5 class="text-center text-lg-left my-5 mt-lg-0">
					<?php echo get_bloginfo( 'description' ); ?>
				</h5>
				<div class="row no-gutters">
					<div class="col-6 col-lg-3 mb-4">
						<h6>Menu</h6>
						<?php 
							wp_nav_menu( 
								array(	'theme_location' => 'main-menu',
										'menu_class' => 'list-unstyled'
								) 
							);
						?>
					</div>
					<div class="col-6 col-lg-3 mb-4">
						<?php 
							if ( is_active_sidebar('footer-widget-1') ) {
								dynamic_sidebar('footer-widget-1');
							}
						?>
					</div>
					<div class="col-6 col-lg-3 mb-4">
						<?php 
							if ( is_active_sidebar('footer-widget-2') ) {
								dynamic_sidebar('footer-widget-2');
							}
						?>
					</div>
					<div class="col-6 col-lg-3 mb-4">
						<?php 
							if ( is_active_sidebar('footer-widget-3') ) {
								dynamic_sidebar('footer-widget-3');
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mt-5 font-weight-light rodape">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 text-center text-lg-left">
					<p class="mb-0">
						<?php 
							printf( '%1$s %2$s %3$s.',
								'&copy;',
								date( 'Y' ),
								esc_html( get_bloginfo( 'name' ) ) 
							);
						?>
					</p>
				</div>
				<div class="col-6 text-center text-lg-right developed-by">
					<p class="py-2">
						<?php printf( 'Desenvolvido por: %1$s', '<a href="https://andrecanuto.com.br/">André Canuto</a></p>' );?>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>
<?php wp_footer(); ?>

<script type="text/javascript">
    var _ss = _ss || [];
    _ss.push(['_setDomain', 'https://koi-3QNK125UQA.marketingautomation.services/net']);
    _ss.push(['_setAccount', 'KOI-45CTCKZOGY']);
    _ss.push(['_trackPageView']);
(function() {
    var ss = document.createElement('script');
    ss.type = 'text/javascript'; ss.async = true;
    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNK125UQA.marketingautomation.services/client/ss.js?ver=2.2.1';
    var scr = document.getElementsByTagName('script')[0];
    scr.parentNode.insertBefore(ss, scr);
})();
</script>

</body>
</html>