<?php //print "<pre>".print_r($content, true)."</pre>";   ?>
<?php global $base_url; ?>

<!-- accordion menu -->
<div class="panel-group" id="category-menu" role="tablist" aria-multiselectable="true">
	<?php foreach($content['list'] as $key=>$value) { ?>
	<?php
		if ($value['parent']['tid'] == $content['parent_brand']) {
			$expanded = 'true';
			$collapse = 'in';
			$class = '';
		} else {
			$expanded = 'false';
			$collapse = '';
			$class = 'collapsed';
		}
	?>
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="menu<?php print $key ?>">
			<a class="<?php print $class ?>" role="button" data-toggle="collapse" data-parent="#category-menu" href="#categoryMenu<?php print $key ?>" aria-expanded="<?php print $expanded ?>" aria-controls="categoryMenu<?php print $key ?>">
				<?php print $value['parent']['name'] ?>
			</a>
		</div>
		<div id="categoryMenu<?php print $key ?>" class="panel-collapse collapse <?php print $collapse ?>" role="tabpanel" aria-labelledby="menu<?php print $key ?>">
			<div class="panel-body">
				<ul class="list-menus">
					<?php foreach($value['subcategory'] as $sub) { ?>
						<li class="<?php print ($content['default_tid']==$sub['tid']) ? 'active' : '' ?>"><a title="<?php print $sub['name'] ?>" href="<?php print $base_url.'/'.$content['product_type'].'/'.$sub['tid'].'?p='.$value['parent']['tid'] ?>"><?php print $sub['name'] ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<?php } ?>
</div>