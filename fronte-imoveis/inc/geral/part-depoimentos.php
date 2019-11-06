<section class="depoimentos overlay">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6 offset-lg-3 my-auto text-white text-center">
				<h2 class="my-5">O que dizem nossos clientes?</h2>
				<div class="depoimento-slide">
					<?php 
						$args = array( 'post_type'   => 'Depoimentos', 'post_status' => 'publish', 'posts_per_page' => 3, 'order' => 'ASC' );
						$clientesSlide = new WP_Query( $args );
						if( $clientesSlide->have_posts() ) :
						  while( $clientesSlide->have_posts() ) : $clientesSlide->the_post();
						  	print(	'<div class="item"><i class="fas fa-quote-left big-quote"></i>');
						    printf( '<div class="dep-text my-5"><p class="text-white">%1$s</p></div>', get_field('depoimento') );
							printf( '<div class="dep-autor">');
						    if ( get_field('imagem') ) {
								printf( '<img class="thumb" src="%1$s" alt="%2$s">',
									get_field('imagem')['url'],
									get_the_title() );
						    } else {
								printf( '<img class="thumb" src="%1$s/assets/img/user-default.png" alt="%2$s">',
									get_template_directory_uri(),
									get_the_title() );
							}
							printf( '<div class="dep-desc"><h4>%1$s</h4><strong>%2$s</strong></div>',
									get_the_title(),
									get_field('empresa')
									);
							print(	'</div></div></div>');
						  endwhile;
						  wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>