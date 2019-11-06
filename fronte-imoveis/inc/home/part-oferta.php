<?php
  query_posts( 
    array(  'post_type' => 'empreendimentos',
            'tax_query' =>  array( 
                              array(  'taxonomy' => 'oferta',
                                      'field' => 'slug',
                                      'terms' => 'oferta'
                              )
                            ),
            'post_status' => 'publish',
            'posts_per_page' => '1' 
    )
  );
    if ( have_posts() ) : 
      print(  '<section class="container oferta">
                <div class="card-oferta">
                  <div class="row no-gutters">');
          while ( have_posts() ) : the_post();
            get_field('parcelas') ? $valorEmpre = 'R$ '.number_format( get_field('parcelas'), 2, ',', '.') : $valorEmpre = 'sob consulta';
            printf('<div class="col-12 col-lg-7 order-lg-2">
                      <a href="%6$s">
                        <div class="thumb">
                          <span>OFERTA</span>
                          <img class="img-cover" src="%3$s">
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-lg-5 mt-auto">
                      <div class="desc px-5">
                        <div class="text-desc pb-lg-4 pt-4">
                          <h3>%1$s</h3>
                          <p>%2$s</p>
                        </div>
                        <div class="bottom-desc mt-5 mb-3">
                          <div class="local">
                            %5$s
                          </div>
                          <div class="preco">
                            <a href="%6$s">%4$s</a>
                          </div>
                        </div>
                      </div>
                    </div>',
                  get_the_title(),
                  substr_replace( get_the_excerpt(), '...', 180 ),
                  acf_photo_gallery('imagens', $post->ID)[0]['full_image_url'], // ['thumbnail_image_url']
                  $valorEmpre,
                  get_the_term_list( $post->ID, 'localizacao', '<i class="fas fa-map-marker-alt"></i> ', '/', '' ),
                  get_the_permalink()
            );
          endwhile;
            print(  '</div>
                    </div>
                  </section>'
            );
    endif;
  wp_reset_query();
?>