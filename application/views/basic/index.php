<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<section class="container">
	<div class="panel panel-primary">
		<div class="panel-heading"><h3>Logo圖片</h3></div>
		<div class="panel-body text-center">
			<img src="<?= base_url($logo->path)?>" alt="" class="img-responsive" style="margin:0 auto;">
			<a href="<?=base_url('basic/edit_logo')?>" class="btn btn-warning">編輯</a>
		</div>
	</div>
	<div class="panel panel-info">
		<div class="panel panel-heading"><h3>背景圖片</h3></div>
		<div class="panel-body text-center">
			<img src="<?= base_url($background->path)?>" alt="" class="img-responsive">
			<a href="<?=base_url('basic/edit_background')?>" class="btn btn-warning">編輯</a>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel panel-heading"><h3>站底資訊</h3></div>
		<div class="panel body">
			<div><?=$footer->content?></div>
			<a href="<?=base_url('basic/edit_footer')?>" class="btn btn-warning">編輯</a>
		</div>
	</div>
</section>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
