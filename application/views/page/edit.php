<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<section class="container">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>原圖</label>
			<img src="<?=base_url($query->path)?>" alt="" class="img-responsive" style="margin:0 auto;">
		</div>
		<div class="form-group">
			<label for="userfile">檔案</label>
			<input type="file" name="userfile" class="form-control">
		</div>
		<div class="form-group">
			<label for="title">編題</label>
			<input type="text" class="form-control" name="title" value="<?=$query->title?>">
		</div>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-primary" value="送出">
		</div>
	</form>
</section>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
