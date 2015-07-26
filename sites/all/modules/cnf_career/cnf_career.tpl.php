<?php //print "<pre>".print_r($content, true)."</pre>";     ?>
<article class="post">
	<h2 class="entry-title">Career - <?php print $content->title ?></h2>
	<div class="post-content">
		<?php print $content->body[LANGUAGE_NONE][0]['value'] ?>
	</div>
	<div class="display-form">
		<h2 class="entry-title">Submit CV</h2>
		<?php print drupal_render($form) ?>
	</div>
</article>