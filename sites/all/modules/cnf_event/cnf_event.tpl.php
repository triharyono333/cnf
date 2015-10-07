<?php global $base_url;   ?>
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
					<h3 class="entry-title"><a href="#"><?php print $news->title ?> - <?php print date('d F Y', $news->field_event_date[LANGUAGE_NONE][0]['value']) ?></a></h3>
					<p><?php print $news->body[LANGUAGE_NONE][0]['value'] ?></p>
					<a href="<?php print $base_url ?>/event_promo_detail/<?php print $content['archive_month'].'/'.$content['year'].'/'.$news->nid ?>" data-toggle="modal" class="btn read-more">Read More</a>
				</div>
			</div>
		</article>
		<?php } ?>
	<?php } else print 'No Event'; ?>
</div>

<div class="post-pagination">
	<?php print theme('pager') ?>
</div>