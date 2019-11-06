<section class="ofertas-flow py-5">
	<div class="container">
			<?php
				if ( isset($_POST['sch-local']) ) {
					$srclocal = $_POST['sch-local'];
					$titleSess = 'Loteamentos em ' . get_term( $srclocal, 'localizacao' )->name;
				} else {
					$termslocal = get_terms( array( 'taxonomy' => 'localizacao', 'hide_empty' => false ) );
					$srclocal = array();
					foreach( $termslocal as $term ) {
						$srclocal[] = $term->term_id;
					}
					$titleSess = 'Todos os empreendimentos';
				}

				if ( isset($_POST['sch-estilo']) ) {
					$srcestilo = $_POST['sch-estilo'];
					$titleSessSub = 'com estilo de ' . get_term( $srcestilo, 'tipo' )->name;
				} else {
					$termsestilo = get_terms( array( 'taxonomy' => 'tipo', 'hide_empty' => false ) );
					$srcestilo = array();
					foreach( $termsestilo as $term ) {
						$srcestilo[] = $term->term_id;
					}
				}

				// Paginação na query.
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts( 
					array( 
						'post_type' => 'empreendimentos',
						'post_status' => 'publish',
						'paged' => $paged,
						'tax_query' => array(
											'relation' => 'AND',
											array(  
												'taxonomy' => 'localizacao',
												'terms' => $srclocal
											),
											array(  
												'taxonomy' => 'tipo',
												'terms' => $srcestilo
											)
										)
					)
				);

				if ( have_posts() ) :
					print('<div class="title-session text-center text-lg-left my-5">
								<h2>'.$titleSess.' '.$titleSessSub.'</h2>
							</div>
							<div class="row align-items-center">');
					while ( have_posts() ) : the_post();
						if ( get_field('parcelas') ) {
							$valorEmpre = '<small>Parcelas a partir de</small><h4>R$ '.number_format( get_field('parcelas'), 2, ',', '.').'</h4>';
						} else {
							$valorEmpre = '<p class="text-white mb-0">Valor sob</p><h4>consulta</h4>';
						}

						// Separa estado de cidade.
						$termLocalHier = get_the_terms( $post->ID, 'localizacao' );
						foreach( $termLocalHier as $local ) {
							if ( $local->parent == 0 ) {
								$estado = $local->name;
							} else {
								$cidade = $local->name;
							}
						}

						printf('<div class="col-12 col-lg-4 mb-4 item">
									<div class="card-oferta">
										<div class="thumb-flow">
											<a href="%7$s">
												<img class="img-cover" src="%3$s">
											</a>
										</div>
										<div class="oferta-desc">
											<h3><a href="%7$s">%1$s</a></h3>
											<p>%2$s</p>
										</div>
										<div class="oferta-bottom">
											<div class="row no-gutters">
												<div class="col-6 ob-local">
					              					<i class="fas fa-map-marker-alt"></i> %5$s/%6$s
												</div>
												<div class="col-6 ob-preco">
													<a href="%7$s">%4$s</a>
												</div>
											</div>
										</div>
									</div>
								</div>',
							get_the_title(),
							substr_replace( get_the_excerpt(), '...', 180 ),
							acf_photo_gallery('imagens', $post->ID)[0]['thumbnail_image_url'], // thumbnail_image_url ou full_image_url
							$valorEmpre,
							$cidade,
							$estado,
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