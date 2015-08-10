<?php //print "<pre>".print_r($content, true)."</pre>";    ?>
<div class="blog-posts news-events">
	<h2 class="entry-title">Press Coverage - <?php print $content['month_name'].' '.$content['year'] ?></h2>
	<div class="row">
		<?php if (isset($content['press_coverage'])) { ?>
		<?php foreach ($content['press_coverage'] as $press) { ?>
		<div class="col-sm-6 col-md-4">
			<article class="post post-grid">
				<div class="post-image">
					<div class="image-container">
						<a href="#" data-toggle="modal" data-target="#myModal-<?php print $press->nid ?>"><img alt="" src="<?php print file_create_url($press->field_press_coverage_image[LANGUAGE_NONE][0]['uri']) ?>"></a>
					</div>
				</div>
				<div class="post-content">
					<h4 class="entry-title"><a href="#" data-toggle="modal" data-target="#myModal"><?php print $press->title ?> - <?php print $content['month_name'].' '.$content['year'] ?></a></h4>
				</div>
			</article>
			<!-- modal -->
			<div class="modal fade" id="myModal-<?php print $press->nid ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="soap-gallery owl-carousel style3 owl-theme">
								<?php foreach($press->field_press_coverage_image[LANGUAGE_NONE] as $image) { ?>
								<img src="<?php print file_create_url($image['uri']) ?>" alt="">
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end of modal -->
		</div>	
		<?php } ?>
	<?php } else print 'No Press Coverage'; ?>
		
	</div>
</div>