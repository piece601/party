<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<section class="container">
	<h3>滑動圖片</h3>
	<div class="row text-center">
		<div class="col-xs-12 col-sm-2">
			<img src="<?=base_url($slides[0]->path)?>" alt="" class="img-responsive">
			<p><?=$slides[0]->title?></p>
			<a href="<?=base_url('welcome/edit_slide/'.$slides[0]->id)?>" class="btn btn-warning">編輯</a>
		</div>
		<div class="col-xs-12 col-sm-2">
			<img src="<?=base_url($slides[1]->path)?>" alt="" class="img-responsive">
			<p><?=$slides[1]->title?></p>
			<a href="<?=base_url('welcome/edit_slide/'.$slides[1]->id)?>" class="btn btn-warning">編輯</a>
		</div>
		<div class="col-xs-12 col-sm-2">
			<img src="<?=base_url($slides[2]->path)?>" alt="" class="img-responsive">
			<p><?=$slides[2]->title?></p>
			<a href="<?=base_url('welcome/edit_slide/'.$slides[2]->id)?>" class="btn btn-warning">編輯</a>
		</div>
		<div class="col-xs-12 col-sm-2">
			<img src="<?=base_url($slides[3]->path)?>" alt="" class="img-responsive">
			<p><?=$slides[3]->title?></p>
			<a href="<?=base_url('welcome/edit_slide/'.$slides[3]->id)?>" class="btn btn-warning">編輯</a>
		</div>
		<div class="col-xs-12 col-sm-2">
			<img src="<?=base_url($slides[4]->path)?>" alt="" class="img-responsive">
			<p><?=$slides[4]->title?></p>
			<a href="<?=base_url('welcome/edit_slide/'.$slides[4]->id)?>" class="btn btn-warning">編輯</a>
		</div>
		<div class="col-xs-12 col-sm-2">
			<img src="<?=base_url($slides[5]->path)?>" alt="" class="img-responsive">
			<p><?=$slides[5]->title?></p>
			<a href="<?=base_url('welcome/edit_slide/'.$slides[5]->id)?>" class="btn btn-warning">編輯</a>
		</div>
	</div>
	<div class="clear-fix"></div>
	<hr>
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<h3>介紹圖片</h3>	
			<img src="<?=base_url($picture->path)?>" alt="" class="img-responsive">
			<div class="clearfix" style="margin:10px 0"></div>
			<a href="<?=base_url('welcome/edit_picture')?>" class="btn btn-warning">編輯</a>
		</div>
		<div class="col-xs-12 col-sm-6">
			<h3>介紹文字</h3>
			<div class="well"><?=$text->content?></div>
			<a href="<?=base_url('welcome/edit_text')?>" class="btn btn-warning" style="margin: 10px 0">編輯</a>
		</div>
	</div>

</section>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
