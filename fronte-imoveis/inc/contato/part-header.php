<section class="contato-header position-relative overlay-gray-light d-lg-flex align-items-lg-center py-5">
    <div class="container space-2 mt-lg-8">
        <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-12 col-lg-6 text-white">
                <h2 class="mb-5">Entre em contato com a Fronte</h2>
                <ul class="list-unstyled contato-lista">
                    <li>
                        <div class="icone">
                            <i class="front-icon front-icon-local"></i>
                        </div>
                        <div class="desc">
                            <h3>Unidade Recife (PE)</h3>
                            <ul class="list-unstyled">
                                <li>Rua de Sant’anna, 54 Santana,</li>
                                <li>Recife/PE</li>
                                <li>Cep: 52060-460</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="icone">
                            <i class="front-icon front-icon-local"></i>
                        </div>
                        <div class="desc">
                            <h3>Vitória de Santo Antão (PE)</h3>
                            <ul class="list-unstyled">
                                <li>Av. Henrique de Holanda, 2450</li>
                                <li>Alto Jose Leal,</li>
                                <li>Vitória de Santo Antão/PE</li>
                                <li>Cep: 55608-001</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="icone">
                            <i class="front-icon front-icon-email"></i>
                        </div>
                        <div class="desc">
                            <h3>Emails</h3>
                            <ul class="list-unstyled">
                                <li>elizangela@fronteimoveis.com.br</li>
                                <li>contato@fronteimoveis.com.br</li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-12 col-lg-5">
                <div class="form-contato shadow-sm rounded p-6">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link col active" id="quero-ser-tab" data-toggle="tab" href="#quero-ser" role="tab" aria-controls="quero-ser" aria-selected="true">Quero ser cliente</a>
                        <a class="nav-item nav-link col" id="ja-sou-tab" data-toggle="tab" href="#ja-sou" role="tab" aria-controls="ja-sou" aria-selected="false">Sou cliente</a>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="quero-ser" role="tabpanel" aria-labelledby="quero-ser-tab">
                            <?php echo do_shortcode('[contact-form-7 id="100" title="Quero ser cliente"]'); ?>
                        </div>
                        <div class="tab-pane fade" id="ja-sou" role="tabpanel" aria-labelledby="ja-sou-tab">
                            <?php echo do_shortcode('[contact-form-7 id="101" title="Já sou cliente"]'); ?>
                        </div>
                    </div>
                </div>


			</div>
		</div>
	</div>
</section>