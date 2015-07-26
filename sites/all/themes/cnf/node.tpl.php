<?php 
if ($node->type == 'corporate') {
	$image = file_create_url($node->field_corporate_image[LANGUAGE_NONE][0]['uri']);
	//print "<pre>".print_r($node, true)."</pre>";
}
$body = $node->body[LANGUAGE_NONE][0]['value'];
?>

<article class="post">
	<h2 class="entry-title"><?php print $node->title ?></h2>
	<div class="post-image">
		<div class="image-container">
			<a href="#"><img alt="" src="<?php print $image ?>"></a>
		</div>
	</div>
	<div class="post-content">
		<?php print $body ?>
	</div>
</article>