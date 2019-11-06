<section class="container clientes py-5">
	<div class="row align-items-center clientes-slide mb-0">
		<?php 
			$args = array( 'post_type'   => 'Clientes', 'post_status' => 'publish', 'posts_per_page' => 7, 'order' => 'ASC' );
			$clientesSlide = new WP_Query( $args );
			if ( $clientesSlide->have_posts() ) :
			  while ( $clientesSlide->have_posts() ) : $clientesSlide->the_post();
			    printf('<div class="item"><img class="img-fluid" src="%1$s" alt="%2$s"></div>',
			    	get_field('logo')['url'],
			    	get_the_title()
			    );
			  endwhile;
			  wp_reset_postdata();
			endif;
		?>
	</div>
</section>