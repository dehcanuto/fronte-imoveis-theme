<section class="empre-single">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-lg-6">
                <ul class="nav nav-tabs row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="caracteristicas-tab" data-toggle="tab" href="#caracteristicas" role="tab" aria-controls="caracteristicas" aria-selected="true">
                            Características
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="localizacao-tab" data-toggle="tab" href="#localizacao" role="tab" aria-controls="localizacao" aria-selected="false">
                            Localização
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="informacoes-tab" data-toggle="tab" href="#informacoes" role="tab" aria-controls="informacoes" aria-selected="false">
                            Informações
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post();
                            if ( get_field('parcelas') ) {
                                $valorEmpre = '<small>Parcelas a partir de</small><h4>R$ '.number_format( get_field('parcelas'), 2, ',', '.' ).'</h4>';
                            } else {
                                $valorEmpre = '<h4><a class="text-white" href="https://api.whatsapp.com/send?text=quanto custa este empreendimento *'. get_the_title() .'*?&phone=558130031122">consultar</a></h4>';
                            }
                ?>
                    <div class="tab-pane fade show active" id="caracteristicas" role="tabpanel" aria-labelledby="caracteristicas-tab">
                    <?php
                        printf('<h2>%1$s</h2>', get_the_title());
                        the_content();
                    ?>
                    <div class="d-flex mt-5 sg-infos">
                        <div class="sg-local my-auto">
                             <?php print( get_the_term_list( $post->ID, 'localizacao', '<i class="fas fa-map-marker-alt mr-3"></i>', '/', '' ) );?>
                        </div>
                        <div class="sg-valor ml-auto">
                            <?php print( $valorEmpre ); ?>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="localizacao" role="tabpanel" aria-labelledby="localizacao-tab">
                        <h3><?php print( get_the_term_list( $post->ID, 'localizacao', '<i class="fas fa-map-marker-alt mr-3"></i>', '/', '' ) );?></h3>
                        <?php 
                        get_field('localizacao') ? 
                            print( get_field('localizacao') ) : 
                            print('<iframe src="https://www.google.com/maps/embed?pb=" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>');
                        ?>
                    </div>
                    <div class="tab-pane fade" id="informacoes" role="tabpanel" aria-labelledby="informacoes-tab">
                        <h3>Este empreendimento inclui:</h3>
                        <?php
                            $field = get_field_object('vantagens');
                            $vantCheck = $field['value'];
                            if ( $vantCheck ) : 
                                print('<ul class="list-unstyled vantagens">');
                                foreach ( $vantCheck as $vants ) : 
                                    printf('<li icon="%1$s">%1$s</li>', $field['choices'][ $vants ] );
                                endforeach;
                                print('</ul>');
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
            <?php
                $images = acf_photo_gallery('imagens', $post->ID);
                if ( count( $images ) ) :
                    print('<div class="slide-emp-princ mb-3">');
                    foreach ( $images as $image ) :
                        printf('<div class="item">
                                    <a data-fancybox="gallery" href="%1$s">
                                        <img class="img-cover" src="%1$s" alt="%2$s" title="%2$s">
                                    </a>
                                </div>',
                            $image['full_image_url'],
                            $image['title']
                        );
                    endforeach;
                        print('</div><div class="slide-emp-sec white-dots">');
                    foreach ( $images as $thumb ) :
                        printf('<div class="item">
                                    <img class="img-fluid" src="%1$s" alt="%2$s" title="%2$s">
                                </div>',
                            $thumb['thumbnail_image_url'],
                            $thumb['title']
                        );
                    endforeach;
                        print('</div>');
                endif;
                endwhile;
                endif;
            ?>
            </div>
        </div>
    </div>
</section>