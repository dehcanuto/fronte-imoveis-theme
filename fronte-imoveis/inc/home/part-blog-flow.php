<section class="blog-flow py-5">
	<div class="container">
		<div class="title-session text-center text-lg-left mb-5">
			<h2>Leia o nosso blog</h2>
		</div>
		<div class="row align-items-center slide-blog-flow black-dots">
			<?php
				query_posts("posts_per_page=3"); // exibe apenas 3 posts.
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						printf('<div class="col-12 col-lg-4 item">
									<div class="card-blog">
										<div class="thumb">
											<img class="img-cover" src="%3$s" alt="%1$s">
											<h3>%1$s</h3>
										</div>
										<div class="blog-desc">
											<p>%2$s</p>
										</div>
									</div>
								</div>',
							get_the_title(),
							substr_replace( get_the_excerpt(), '...', 180 ),
							get_the_post_thumbnail_url()
						);
					endwhile;
						wp_reset_query();
					else :
						print('sem posts do blog para exibir :(');
				endif;
			?>
		</div>
	</div>
</section>