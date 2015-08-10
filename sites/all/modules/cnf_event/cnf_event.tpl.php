<?php //print "<pre>".print_r($content, true)."</pre>";   ?>
<div class="blog-posts news-events">
	<h2 class="entry-title">News &amp; Events - <?php print $content['month_name'].' '.$content['year'] ?></h2>
	<?php if (isset($content['news'])) { ?>
		<?php foreach ($content['news'] as $news) { ?>
		<article class="post post-classic">
			<div class="row">
				<div class="post-image col-md-3 col-sm-4">
					<div class="image-container">
						<a href="#"><img src="<?php print file_create_url($news->field_event_image[LANGUAGE_NONE][0]['uri']) ?>" alt=""></a>
					</div>
				</div>
				<div class="post-content col-md-9 col-sm-8">
					<h3 class="entry-title"><a href="#"><?php print $news->title ?> - <?php print date('d F Y', $news->created) ?></a></h3>
					<p><?php print $news->body[LANGUAGE_NONE][0]['summary'] ?></p>
					<a href="#" data-toggle="modal" data-target="#myModal-<?php print $news->nid ?>" class="btn read-more">Read More</a>
				</div>
			</div>
		</article>
		<!-- modal -->
		<div class="modal fade" id="myModal-<?php print $news->nid ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="soap-gallery owl-carousel style3 owl-theme">
							<?php foreach($news->field_event_image[LANGUAGE_NONE] as $image) { ?>
							<img src="<?php print file_create_url($image['uri']) ?>" alt="">
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of modal -->
		<?php } ?>
	<?php } else print 'No Event'; ?>
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