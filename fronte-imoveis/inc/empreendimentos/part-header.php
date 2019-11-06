<section class="empreendimento-header position-relative overlay py-5 text-center text-white">
	<div class="container my-5 pt-lg-5">
		<div class="col-12 text-center">
			<h2>Encontre o seu empreendimento</h2>
		</div>
	</div>
	<div class="container">
		<form class="row emp-search no-gutters" action="<?php echo get_permalink( get_page_by_title( 'Empreendimentos' ) ); ?>" method="post">
			<div class="col-12 col-lg">
				<select name="sch-local">
					<option disabled selected>Cidade</option>
					<?php 
						$terms = get_terms( array( 'taxonomy' => 'localizacao', 'hide_empty' => false ) );
						foreach( $terms as $term ) {
						    echo '<option value="'. $term->term_id .'">'. $term->name .'</option>';
						}
					?>
				</select>
				<i class="fas fa-sort-down"></i>
			</div>
			<div class="col-12 col-lg">
				<select name="">
					<option disabled selected>Valor do sinal</option>
				</select>
				<i class="fas fa-sort-down"></i>
			</div>
			<div class="col-12 col-lg">
				<select name="">
					<option disabled selected>Loteamento</option>
				</select>
				<i class="fas fa-sort-down"></i>
			</div>
			<div class="col-12 col-lg">
				<select name="sch-estilo">
					<option disabled selected>Estilo</option>
					<?php 
						$terms = get_terms( array( 'taxonomy' => 'tipo', 'hide_empty' => false ) );
						foreach( $terms as $term ) {
						    echo '<option value="'. $term->term_id .'">'. $term->name .'</option>';
						}
					?>
				</select>
				<i class="fas fa-sort-down"></i>
			</div>
			<div class="col-12 col-lg">
				<button type="submit">Buscar</button>
			</div>
		</form>
	</div>
</section>