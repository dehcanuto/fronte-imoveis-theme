<section class="ofertas-flow py-5">
	<div class="container">
			<?php
				if ( have_posts() ) :
					print('<div class="title-session text-center text-lg-left my-5">
								<h2>Empreendimentos</h2>
							</div>
							<div class="row align-items-center">');
					while ( have_posts() ) : the_post();
						if ( get_field('parcelas') ) {
							$valorEmpre = '<small>Parcelas a partir de</small><h4>R$ '.number_format( get_field('parcelas'), 2, ',', '.').'</h4>';
						} else {
							$valorEmpre = '<p class="text-white mb-0">Valor sob</p><h4>consulta</h4>';
						}

						printf('<div class="col-12 col-lg-4 mb-4 item">
									<div class="card-oferta">
										<div class="thumb-flow">
											<a href="%6$s">
												<img class="img-cover" src="%3$s">
											</a>
										</div>
										<div class="oferta-desc">
											<h3><a href="%6$s">%1$s</a></h3>
											<p>%2$s</p>
										</div>
										<div class="oferta-bottom">
											<div class="row no-gutters">
												<div class="col-6 ob-local">
					              					%5$s
												</div>
												<div class="col-6 ob-preco">
													<a href="%6$s">%4$s</a>
												</div>
											</div>
										</div>
									</div>
								</div>',
							get_the_title(),
							substr_replace( get_the_excerpt(), '...', 180 ),
							acf_photo_gallery('imagens', $post->ID)[0]['thumbnail_image_url'], // thumbnail_image_url ou full_image_url
							$valorEmpre,
							get_the_term_list( $post->ID, 'localizacao', '<i class="fas fa-map-marker-alt"></i> ', '/', '' ),
							get_the_permalink()
						);
					endwhile;
						print('<div class="tm-pagination my-3 w-100 text-center">');
							paginacao();
						print('</div>');
						//wp_reset_query();
					else :
						print('<div class="title-session text-center text-lg-left my-5">
									<h2>Nenhum Resultado</h2>
								</div>
								<div class="row align-items-center">');
						print('Não encontramos empreendimentos de acordo com a sua pesquisa :(');
				endif;
			?>
		</div>
	</div>
</section>