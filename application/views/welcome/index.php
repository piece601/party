<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<link rel="stylesheet" href="<?=base_url('assets/css/jquery.kwicks.css')?>">
<style type='text/css'>
	.kwicks {
		height: 500px;
	}
	.kwicks > li {
		height: 500px;
	}
	p.slide-text-1 {
		position: absolute;
		background-color: rgba(219, 53, 33, .7);
		width: 500px;
		padding: 20px 10px;
		color: white;
	}

	p.slide-text-2 {
		position: absolute;
		background-color: rgba(242, 119, 72, .7);
		width: 500px;
		padding: 20px 10px;
		color: white;
	}
	
	p.slide-text-3 {
		position: absolute;
		background-color: rgba(246, 195, 46, .7);
		width: 500px;
		padding: 20px 10px;
		color: white;
	}
	p.slide-text-4 {
		position: absolute;
		background-color: rgba(244, 238, 159, .7);
		width: 500px;
		padding: 20px 10px;
		color: white;
	}

	p.slide-text-5 {
		position: absolute;
		background-color: rgba(95, 75, 98, .7);
		width: 500px;
		padding: 20px 10px;
		color: white;
	}

	p.slide-text-6 {
		position: absolute;
		background-color: rgba(83, 179, 136, .7);
		width: 500px;
		padding: 20px 10px;
		color: white;
	}
/*	li:hover p.slide-text-6 {
		-webkit-transition: all 300ms ease;
		-moz-transition: all 300ms ease;
		-ms-transition: all 300ms ease;
		-o-transition: all 300ms ease;
		transition: all 300ms ease;
		background-color: rgba(83, 179, 136, 1);
	}*/
</style>
<section class="container">
	<figure class="col-xs-12">
		<ul class='kwicks kwicks-horizontal'>
			<li>
				<a href="<?=base_url('company')?>">
					<!-- <p class="slide-text-1"><?=$slides[0]->title?></p> -->
					<img src="<?=base_url($slides[0]->path)?>" alt="">
				</a>
			</li>
			<li>
				<a href="<?= base_url('page/index/2')?>">
					<!-- <p class="slide-text-2"><?=$slides[1]->title?></p> -->
					<img src="<?=base_url($slides[1]->path)?>" alt="">
				</a>			
			</li>
			<li>
				<a href="<?= base_url('page/index/3')?>">
					<!-- <p class="slide-text-3"><?=$slides[2]->title?></p> -->
					<img src="<?=base_url($slides[2]->path)?>" alt="">
				</a>
			</li>
			<li>
				<a href="<?= base_url('page/index/3')?>">
					<!-- <p class="slide-text-4"><?=$slides[3]->title?></p> -->
					<img src="<?=base_url($slides[3]->path)?>" alt="">
				</a>
			</li>
			<li>
				<a href="<?= base_url('page/index/4')?>">
					<!-- <p class="slide-text-5"><?=$slides[4]->title?></p> -->
					<img src="<?=base_url($slides[4]->path)?>" alt="">
				</a>
			</li>
			<li>
				<a href="<?=base_url('qanda')?>">
					<!-- <p class="slide-text-6"><?=$slides[5]->title?></p> -->
					<img src="<?=base_url($slides[5]->path)?>" alt="">
				</a>
			</li>
			<li>
				<a href="http://goo.gl/forms/xE9TAyVfv9">
					<!-- <p class="slide-text-6"><?=$slides[5]->title?></p> -->
					<img src="<?=base_url($slides[6]->path)?>" alt="">
				</a>
			</li>
		</ul>
	</figure>
	<div class="clearfix" style="margin:20px 0;"></div>
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
			maxSize: '420px',
			behavior: 'menu',
			spacing: 0,
			duration: 300
		});
	});
</script>

<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
