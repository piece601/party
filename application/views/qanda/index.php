<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<h1 class="text-center"><?=$query->title?></h1>
<div class="container">
	<a href="<?=base_url('qanda/edit')?>" class="btn btn-warning pull-right">編輯</a>
	<div class="clearfix"></div>
	<hr>
</div>
<section class="container">
	<?=$query->content?>
</section>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
