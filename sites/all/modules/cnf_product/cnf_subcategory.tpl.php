<?php //print "<pre>".print_r($content['product'], true)."</pre>";   ?>
<?php global $base_url; ?>

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