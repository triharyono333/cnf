<?php
global $base_url, $language;
$path_to_theme = $base_url . "/sites/all/themes/cnf/";
$arg0 = arg(0);
?>
<div id="page-wrapper">
	<header id="header">
		<div class="container">
			<div class="header-inner">
				<div class="branding">
					<h1 class="logo">
						<!--<a href="index.html"><img src="images/logo@2x.png" alt="" width="165" height="62">C &amp; F</a>-->
					</h1>
				</div>
				<nav id="nav">
					<ul class="header-top-nav">
						<li class="visible-mobile">
							<a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
						</li>
					</ul>
					<ul id="main-nav" class="hidden-mobile">
						<?php print top_menu(); ?>
					</ul>
				</nav>
			</div>
		</div>
		<div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
			<ul class="mobile-nav">
				<?php print top_menu(); ?>
			</ul>
		</div>
	</header>

	<section id="content">
		<?php if (drupal_is_front_page()) { ?>
		<div class="section">
			<div class="container">
				<div class="soap-gallery owl-carousel style3">
					<?php
						$banners = node_load(7);
						foreach($banners->field_banner_image[LANGUAGE_NONE] as $banner) {
					?>
					<img src="<?php print file_create_url($banner['uri']) ?>" alt="CnF banner" data-thumb="<?php print file_create_url($banner['uri']) ?>">
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="section home-featured">
			<div class="container">
				<div class="row">
					<?php
					$small_banner_ids = array('121', '122');
					$small_banners = node_load_multiple($small_banner_ids);
					foreach($small_banners as $small_banner) {
					?>
					<div class="col-sm-4">
						<article class="post post-masonry">
							<div class="post-image">
								<div class="image">
									<img src="<?php print file_create_url($small_banner->field_small_banner_image[LANGUAGE_NONE][0]['uri']) ?>" alt="">
									<div class="image-extras">
										<div class="image-text">
											<?php print $small_banner->body[LANGUAGE_NONE][0]['value'] ?>
										</div>
										<a href="<?php print $small_banner->field_small_banner_redirect[LANGUAGE_NONE][0]['value'] ?>" class="post-gallery"></a>
									</div>
								</div>
							</div>
						</article>
					</div>
					<?php } ?>

					<div class="col-sm-4">
						<div class="past-events">
							<h2><span>Past Events</span></h2>
							<?php print _get_last_event(5); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } else { ?>

		<div class="container">
			<div class="page-title-container">
				<ul class="breadcrumbs">
					<?php print breadcrumb(); ?>
				</ul>
			</div>
			<div class="row">
					<?php if ($messages): ?><div id="console" class="clearfix"><?php print $messages; ?></div><?php endif; ?>
					<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
				<div class="sidebar col-md-3 col-sm-4">
					<?php if ($page['sidebar_first']): ?>
							<?php print render($page['sidebar_first']); ?>
					<?php endif; ?>
					<!-- accordion menu -->
					<div class="panel-group" id="category-menu" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="menuOne">
					        <a role="button" data-toggle="collapse" data-parent="#category-menu" href="#categoryMenuOne" aria-expanded="true" aria-controls="categoryMenuOne">
					          Parent #1
					        </a>
					    </div>
					    <div id="categoryMenuOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="menuOne">
					      <div class="panel-body">
					        <ul class="list-menus">
					        	<li><a title="Child Menu #1" href="#">Child Menu #1</a></li>
					        	<li><a title="Child Menu #2" href="#">Child Menu #2</a></li>
					        	<li><a title="Child Menu #3" href="#">Child Menu #3</a></li>
					        	<li><a title="Child Menu #4" href="#">Child Menu #4</a></li>
					        	<li><a title="Child Menu #5" href="#">Child Menu #5</a></li>
					        </ul>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="menuTwo">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#category-menu" href="#categoryMenuTwo" aria-expanded="false" aria-controls="categoryMenuTwo">
					          Parent #2
					        </a>
					    </div>
					    <div id="categoryMenuTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menuTwo">
					      <div class="panel-body">
					        <ul class="list-menus">
					        	<li><a title="Child Menu #1" href="#">Child Menu #1</a></li>
					        	<li><a title="Child Menu #2" href="#">Child Menu #2</a></li>
					        	<li><a title="Child Menu #3" href="#">Child Menu #3</a></li>
					        	<li><a title="Child Menu #4" href="#">Child Menu #4</a></li>
					        	<li><a title="Child Menu #5" href="#">Child Menu #5</a></li>
					        </ul>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div id="main" class="col-md-9 col-sm-8 <?php print ($arg0 == 'store-locator')? $arg0 : '' ?>">
					<?php print render($page['content']); ?>
				</div>
			</div>
		</div>

		<?php } ?>
	</section>

	<footer id="footer">
		<div class="footer-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4">
						<ul class="useful-links">
							<li><a href="<?php print $base_url ?>">Home</a></li>
							<li><a href="<?php print $base_url ?>/corporate">Corporate</a></li>
							<li><a href="<?php print $base_url ?>/fragrance">Fragrance</a></li>
							<li><a href="<?php print $base_url ?>/make_up">Make Up</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-5">
						<ul class="useful-links">
							<li><a href="<?php print $base_url ?>/skin_care">Skin Care</a></li>
							<li><a href="<?php print $base_url ?>/news_event">News &amp; Events</a></li>
							<li><a href="<?php print $base_url ?>/career">Career</a></li>
							<li><a href="<?php print $base_url ?>/contact">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-1 col-xs-3">
						<div class="store-locator">
							<a href="<?php print $base_url ?>/store-locator" title="store locator">
								<div class="icon"><i class="fa fa-map-marker"></i> <em>C&amp;F</em></div>
								<h4>Store<em>Locator</em></h4>
							</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-8">
						<div class="subscribe">
							<h3><em>SUBSCRIBE</em> FOR C&amp;F NEWS and INFO</h3>
							<form method="post" action="<?php print $base_url ?>/subscribe">
							<div class="form-group">
								<input type="text" name="email" class="input-text full-width" placeholder="Enter your email address">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-md style5" value="Submit">
							</div>
							</form>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<ul class="sosmed">
							<li><a href="<?php print variable_get('facebook') ?>" target="_blank" title="C & F Perfumery"><i class="fa fa-facebook"></i> <span>/CF-Perfumery</span></a></li>
							<li><a href="<?php print variable_get('twitter') ?>" target="_blank" title="C & F Perfumery"><i class="fa fa-twitter"></i> <span>@cnf_perfumery</span></a></li>
							<li><a href="<?php print variable_get('instagram') ?>" target="_blank" title="C & F Perfumery"><i class="fa fa-instagram"></i> <span>@cnf_perfumery</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-area">
			<div class="container">
				<div class="copyright-area">
					<div class="copyright">
						Copyright &copy; 2015 - cnfperfumery.com
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<!-- Javascript -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.noconflict.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/modernizr.2.8.3.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery-ui.1.11.2.min.js"></script>

<!-- Twitter Bootstrap -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/bootstrap.min.js"></script>

<!-- Magnific Popup core JS file -->
<script type="text/javascript" src="<?php print $path_to_theme ?>components/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- parallax -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.stellar.min.js"></script>

<!-- waypoint -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/waypoints.min.js"></script>

<!-- carouFredSel -->
<script type="text/javascript" src="<?php print $path_to_theme ?>components/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="<?php print $path_to_theme ?>components/owl-carousel/owl.carousel.min.js"></script>

<!-- plugins -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.plugins.js"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/main.js"></script>