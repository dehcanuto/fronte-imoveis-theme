<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">

<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113306582-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113306582-1');
</script>
<!-- ./ Global site tag (gtag.js) - Google Analytics -->

	<script type="text/javascript">
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-3QNK125UQA.marketingautomation.services/webforms/receivePostback/MzawMDE3NzUzBgA/']);
    __ss_noform.push(['endpoint', '534e4f0b-94af-48a8-a1df-6896cf48bf19']);
</script>
<script type="text/javascript" src="https://koi-3QNK125UQA.marketingautomation.services/client/noform.js?ver=1.24" ></script>	
	
	
</head>
<body <?php body_class(); ?>>

<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/3e7ae033-57ef-40ee-b3f0-551cc19985ed-loader.js" ></script>

<div class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3 text-center text-lg-right d-flex">
				<div class="d-inline-flex m-auto py-2">
					<p class="mb-0">Tem alguma dúvida? Fale conosco: </p>
				</div>
			</div>

			<div class="col-12 col-lg-5 text-center text-lg-right d-flex">
				<div class="d-inline-flex m-auto py-2">
					<ul class="d-inline-flex list-inline ml-3 contatos">
						<li><i class="fab fa-whatsapp"></i> 813003-1122</li>
						<li><i class="fas fa-phone fa-flip-horizontal"></i> 3003-1122</li>
						<li><i class="fas fa-envelope"></i> contato@fronteimoveis.com.br</li>
					</ul>
				</div>
			</div>

			<div class="col-12 col-lg-4 text-center text-lg-right">
				<div class="d-inline-flex my-auto py-2">
					<p class="mb-0">Redes sociais: </p>
					<ul class="d-inline-flex list-inline ml-3 contatos">
						<li><a href="https://www.facebook.com/fronteimoveis/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.instagram.com/fronteimoveis/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCEqdgxecGVkM2wWQR5ku6Zw"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<header class="d-flex flex-lg-row align-items-center p-3 px-md-4 bg-white">
	<div class="container">
		<div class="row">
			<h1 class="my-0 mr-auto font-weight-normal">
			  	<?php 
			  		if ( has_custom_logo() ) {
			  			echo the_custom_logo();
			  		} else {
			  			echo esc_html( get_bloginfo( 'name' ) );
			  		}
			  	 ?>
			</h1>
			<nav class="d-none d-lg-flex align-items-center my-2 my-md-0 mr-md-3">
				<?php 
					wp_nav_menu( 
						array( 
							'theme_location' => 'main-menu',
							'menu_class' => 'menu-horizontal'
						)
					);
			  	?>
			  	<div id="search">
					<?php get_search_form(); ?>
				</div>
		  	</nav>
		  	<button class="d-block d-lg-none navbar-toggler mr-4" type="button">
				<div class="menu-bar"></div>
				<div class="menu-bar"></div>
				<div class="menu-bar"></div>
			</button>
		</div>
	</div>
	
</header>