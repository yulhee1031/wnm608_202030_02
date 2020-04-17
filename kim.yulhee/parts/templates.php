<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="/images/store/$o->thumbnail" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;$o->price</div>
				<div class="product-title">$o->name</div>
			</figcaption>
		</figure>
	</a>
</div>
HTML;
}


function cartListTemplate($r,$o) {
$hascase = rand(0,1) ? "case: big" : "";
$amount = rand(1,5);
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none product-thumbs">
		<img src="/images/store/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->name ($amount)</strong>
				<div>$hascase</div>
				<div>Delete</div>
			</div>
			<div class="flex-none">
				&dollar;$o->price
			</div>
		</div>
	</div>
</div>
HTML;
}