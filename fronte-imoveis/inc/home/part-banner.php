<section class="banner-home">
  <div class="slide-banner-home vertical-dots">
    <?php 
      $args = array( 'post_type'   => 'Banners', 'post_status' => 'publish', 'posts_per_page' => 5, 'order' => 'ASC' );
      $clientesSlide = new WP_Query( $args );
      if( $clientesSlide->have_posts() ) :
        while( $clientesSlide->have_posts() ) : $clientesSlide->the_post();
          if ( get_field('link') ) {
            printf('<div class="item"><a href="%2$s"><img class="img-cover" src="%1$s" alt="%3$s"></a></div>',
              get_field('imagem'),
              get_field('link'),
              get_the_title()
            );
          } else {
            printf('<div class="item"><img class="img-cover" src="%1$s" alt="%2$s"></div>',
              get_field('imagem'),
              get_the_title()
            );
          }
        endwhile;
          wp_reset_postdata();
        else : 
          printf("<div class=\"item\"><img class=\"img-cover\" src=\"%1$s/placeholder-header.jpg\"></div>", get_template_directory_uri());
      endif;
    ?>
  </div>
  <div class="container bullets-home">
      <div class="item text-center mb-3">
        <div class="widget">
          <div class="thumb my-auto">
            <i class="fronte-icon fronte-icon-financie-facil"></i>
          </div>
          <div class="desc text-left my-auto">
            <h3>FINANCIE FÁCIL</h3>
            <p>Parcele em até 120 meses.</p>
          </div>
        </div>
      </div>
      <div class="item text-center mb-3">
        <div class="widget">
          <div class="thumb my-auto">
            <i class="fronte-icon fronte-icon-sinal-facilitado"></i>
          </div>
          <div class="desc text-left my-auto">
            <h3>SINAL FACILITADO</h3>
            <p>Garanta a melhor entrada.</p>
          </div>
        </div>
      </div>
      <div class="item text-center mb-3">
        <div class="widget">
          <div class="thumb my-auto">
            <i class="fronte-icon fronte-icon-sem-analise"></i>
          </div>
          <div class="desc text-left my-auto">
            <h3>SEM ANÁLISE DE CRÉDITO</h3>
            <p>Compre apenas com CPF e RG.</p>
          </div>
        </div>
      </div>

    <!--
    <div class="row">
      <div class="col-12 col-lg-4 text-center mb-3">
        <div class="widget">
          <div class="thumb my-auto">
            <i class="front-icon front-icon-financie-facil"></i>
          </div>
          <div class="desc text-left my-auto">
            <h3>FINANCIE FÁCIL</h3>
            <p>Parcele em até 120 meses.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 text-center mb-3">
        <div class="widget">
          <div class="thumb my-auto">
            <i class="front-icon front-icon-sinal-facilitado"></i>
          </div>
          <div class="desc text-left my-auto">
            <h3>SINAL FACILITADO</h3>
            <p>Garanta a melhor entrada.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 text-center mb-3">
        <div class="widget">
          <div class="thumb my-auto">
            <i class="front-icon front-icon-sem-analise"></i>
          </div>
          <div class="desc text-left my-auto">
            <h3>SEM ANÁLISE DE CRÉDITO</h3>
            <p>Compre apenas com CPF e RG.</p>
          </div>
        </div>
      </div>
    </div>
    -->
  </div>
</section>