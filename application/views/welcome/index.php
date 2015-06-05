<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<link rel="stylesheet" href="<?=base_url('assets/css/jquery.kwicks.css')?>">
<style type='text/css'>
	.kwicks {
		height: 500px;
	}
	.kwicks > li {
		height: 500px;
	}
	#panel-1 { background-color: #53b388; }
	#panel-2 { background-color: #5F4B62; }
	#panel-3 { background-color: #F4EE9F; }
	#panel-4 { background-color: #F6C32E; }
	#panel-5 { background-color: #F27748; }
	#panel-6 { background-color: #DB3521; }
</style>
<section class="container">
	<ul class='kwicks kwicks-horizontal'>
		<li id='panel-1'><a href=""><img src="<?=base_url('assets/images/39111.jpg')?>" alt=""></a></li>
		<li id='panel-2'></li>
		<li id='panel-3'></li>
		<li id='panel-4'></li>
		<li id='panel-5'></li>
		<li id='panel-6'></li>
	</ul>
	<div class="clear-fix"></div>
	<figure class="col-xs-12 col-sm-6">
		<img src="<?=base_url($picture->path)?>" alt="" class="img-responsive">
	</figure>
	<article class="col-xs-12 col-sm-6">
		<?= $text->content ?>
	</article>
	<div class="clear-fix"></div>
</section>
<script src="<?=base_url('assets/js/jquery.kwicks.min.js')?>"></script>
<script type='text/javascript'>
	$(function() {
		$('.kwicks').kwicks({
			maxSize: '30%',
			behavior: 'menu',
			spacing: 0,
			duration: 300
		});
	});
</script>

<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
