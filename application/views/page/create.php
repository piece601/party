<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<section class="container">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="userfile">檔案</label>
			<input type="file" name="userfile" class="form-control">
		</div>
		<div class="form-group">
			<label for="title">編題</label>
			<input type="text" class="form-control" name="title">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="送出">
		</div>
	</form>
</section>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
