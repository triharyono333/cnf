<?php //print "<pre>".print_r($content, true)."</pre>";    ?>
<div class="blog-posts news-events">
	<div class="post-content">
		<h3 class="entry-title"><a href="#"><?php print $content['news']->title ?> - <?php print $content['month_name'].' '.$content['year'] ?></a></h3>
		<p><?php print $content['news']->body[LANGUAGE_NONE][0]['value'] ?></p>
	</div>
	<div class="soap-gallery metro-style gallery-col-3">
		<div class="gallery-wrapper">
			<?php foreach($content['news']->field_event_image[LANGUAGE_NONE] as $image) { ?>
				<a href="<?php print file_create_url($image['uri']) ?>" class="image hover-style3">
					<img src="<?php print file_create_url($image['uri']) ?>" alt="">
					<div class="image-extras"></div>
				</a>
			<?php } ?>
		</div>
	</div>
	<div class="post-pagination">
		<a href="#" class="nav-prev" onclick="parent.history.back();return false;"></a>
	</div>
</div>