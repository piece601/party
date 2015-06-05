<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<section class="container">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">目前圖片</label>
			<img src="<?=base_url($query->path)?>" alt="" class="img-responsive" style="max-height:300px">
		</div>
		<div class="form-group">
			<label for="userfile">標題</label>
			<input type="text" name="title" class="form-control" value="<?=$query->title?>">
		</div>
		<div class="form-group">
			<label for="userfile">檔案</label>
			<input type="file" name="userfile" class="form-control">
		</div>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-primary" value="送出">
		</div>
	</form>
</section>
<style>
	img {
		margin: 0 auto;
	}
</style>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
