<?php if ($block->region == 'content') { ?>
	<?php print $content; ?>
<?php } else { ?>
<div class="box">
	<?php print $content; ?>
</div>
<?php } ?>