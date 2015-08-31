<?php //print "<pre>".print_r($content['product'], true)."</pre>";  ?>
<?php global $base_url; ?>
<div class="blog-posts products">
	<h2 class="entry-title"><?php print $content['category_title'] ?></h2>
	<div class="head">
		<div class="post-image">
			<div class="image-container">
				<?php if (isset($content['category_image'])) { ?>
				<img alt="<?php print $content['category_title'] ?>" src="<?php print $content['category_image'] ?>">
				<?php } ?>
			</div>
		</div>
		<div class="post-content">
			<?php print $content['category_description'] ?>
		</div>
	</div>

	<div class="row">
		<?php if (isset($content['product'])) { ?>
		<?php foreach($content['product'] as $product) { ?>
		<?php 
			if ($content['product_type'] == 'skin_care') {
				$images = $product->field_skin_care_image[LANGUAGE_NONE];
				$main_image = $product->field_skin_care_image[LANGUAGE_NONE][0]['uri'];
				$description = $product->field_skin_care_description[LANGUAGE_NONE][0]['value'];
				$how_to_use = $product->field_skin_care_how_to_use[LANGUAGE_NONE][0]['value'];
				$ingredient = $product->field_skin_care_ingredient[LANGUAGE_NONE][0]['value'];
			} else if ($content['product_type'] == 'make_up') {
				$images = $product->field_make_up_image[LANGUAGE_NONE];
				$main_image = $product->field_make_up_image[LANGUAGE_NONE][0]['uri'];
				$description = $product->field_make_up_description[LANGUAGE_NONE][0]['value'];
				$how_to_use = $product->field_make_up_how_to_use[LANGUAGE_NONE][0]['value'];
				$ingredient = $product->field_make_up_ingredient[LANGUAGE_NONE][0]['value'];
			} else if ($content['product_type'] == 'fragrance') {
				$brand = _get_brand_name($product->field_fragrance_brand[LANGUAGE_NONE][0]['value']);
				$images = $product->field_fragrance_image[LANGUAGE_NONE];
				$main_image = $product->field_fragrance_image[LANGUAGE_NONE][0]['uri'];
			}
			
			//if (isset($images)) {
		?>
		<div class="col-sm-6 col-md-4">
			<article class="post post-grid">
				<div class="post-image">
					<div class="image-container">
						<a href="#" data-toggle="modal" data-target="#myModal-<?php print $product->product_id ?>">
								<img alt="" src="<?php print (isset($main_image)) ? file_create_url($main_image) : $base_url.'/sites/default/files/default-image.jpg' ?>">
						</a>
					</div>
				</div>
				<div class="post-content">
					<?php if ($content['product_type'] == 'fragrance') ?><h5><a data-target="#myModal-<?php print $product->product_id ?>" data-toggle="modal" href="#"><?php print $brand ?></a></h5>
					<h4 class="entry-title"><a href="#" data-toggle="modal" data-target="#myModal-<?php print $product->product_id ?>"><?php print $product->title ?></a></h4>
				</div>
			</article>

			<!-- modal -->
			<div class="modal fade" id="myModal-<?php print $product->product_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-sm-5">
									<div class="post-image">
									
										<section id="gallery" class="simplegallery">
											<div class="image-container-popup">
												<?php 
													if (isset($images)) {
													foreach($images as $key=>$product_image) { 
														if ($main_image == $product_image['uri']) $display = '';
														else $display = 'style="display:none"';
												?>
													<img class="image_<?php print $key ?>" alt="<?php print $product->title ?>" src="<?php print file_create_url($product_image['uri']) ?>" <?php print $display ?>>
												<?php }
													} else { ?>
													<img src='<?php print $base_url ?>/sites/default/files/default-image.jpg' />
													<?php } ?>
											</div>

											<div class="clear"></div>

											<div class="image-alternate">
												<?php if (isset($images)) { ?>
												<ul class="row">
													<?php foreach($images as $key=>$product_image) { ?>
													<li class="col-xs-4"><img src="<?php print image_style_url('thumbnail', $product_image['uri']) ?>" id="thumb_<?php print $key ?>"></li>
													<?php } ?>
												</ul>
												<?php } ?>
											</div>
										</section>
									
									</div>	
								</div>
								<div class="col-sm-7">
									<?php if ($content['product_type'] == 'fragrance') { ?>
									<div class="heading">
										<h2><?php print $product->title ?></h2>
										<h4><?php print $product->sku ?></h4>
									</div>
									<div class="description">
										<h6>DETAILS:</h6>
										<p><?php print $product->field_fragrance_description[LANGUAGE_NONE][0]['value'] ?></p>
										<?php if (isset($product->field_fragrance_note[LANGUAGE_NONE][0]['value'])) { ?>
										<h6>FRAGRANCE NOTES:</h6>
										<p><?php print $product->field_fragrance_note[LANGUAGE_NONE][0]['value'] ?></p>
										<?php } ?>
										<h6>CATEGORY:</h6>
										<p><?php print $product->field_fragrance_type[LANGUAGE_NONE][0]['value'] ?></p>
										<h6>SIZE:</h6>
										<p><?php print $product->field_fragrance_size[LANGUAGE_NONE][0]['value'] ?></p>
									</div>
									<?php } else { ?>								
									<div class="heading skin-care">
										<h2><?php print $product->title ?></h2>
										<h4><?php print $product->sku ?></h4>
									</div>
									<div class="description">
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li>
											<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">How to use</a></li>
											<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Ingredients</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="details">
												<?php print $description ?>
											</div>
											<div role="tabpanel" class="tab-pane" id="profile">
												<?php print $how_to_use ?>
											</div>
											<div role="tabpanel" class="tab-pane" id="messages">
												<?php print $ingredient ?>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end of modal -->

		</div>
		<?php 
				//}
			} ?>
		<?php } else { print '<div class="col-sm-6 col-md-4">No product found</div>'; } ?>
	</div>
</div>

<div class="post-pagination">
	<?php print theme('pager') ?>
	<!--<a href="#" class="nav-prev disabled" onclick="return false;"></a>
	<div class="page-links">
		<span class="active">1</span>
		<a href="#" data-page-num="2">2</a>
		<a href="#" data-page-num="3">3</a>
	</div>
	<a href="#" class="nav-next" data-page-num="2"></a>
 -->
</div>

<script type="text/javascript" src="<?php print $base_url ?>/sites/all/libraries/minimalist-jquery/src/simplegallery.min.js"></script>
<script type="text/javascript">
	(function($) {
		$(document).ready(function(){
			$('#gallery').simplegallery({
				galltime : 400,
				gallcontent: '.image-container-popup',
				gallthumbnail: '.image-alternate',
				gallthumb: '.col-xs-4'
			});
		});
	})(jQuery);
</script>