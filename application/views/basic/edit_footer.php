<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<section class="container">
	<form action="" method="post">
		<div class="form-group">
			<label for="content">內容</label>
			<textarea name="content" class="form-control" id="" cols="30" rows="20"><?=$query->content?></textarea>
		</div>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-primary" value="送出">
		</div>
	</form>
</section>
<script src="<?=base_url('assets/tinymce/tinymce.min.js')?>"></script>
<script src="<?=base_url('assets/js/tinymcecustom.js')?>"></script>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
