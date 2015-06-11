<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<link rel="stylesheet" href="<?=base_url('assets/css/jquery.fancybox.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/css/jquery.fancybox-thumbs.css')?>">
<script src="<?=base_url('assets/js/jquery.mousewheel-3.0.6.pack.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.fancybox.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.fancybox-thumbs.js')?>"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : true,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
		});
	</script>
<section class="container">
	<a href="<?=base_url('page/create_img/'.$sub_id)?>" class="btn btn-primary pull-right" style="margin: 10px 0;">新增圖片</a>
	<div class="clearfix"></div>
	<?php foreach ($query as $key => $value): ?>
		<figure class="col-xs-12 col-sm-3 text-center">
			<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?=base_url($value->path)?>"><img src="<?=base_url($value->path)?>" alt="" class="img-responsive" /></a>
			<a href="<?=base_url('page/edit_img/'.$value->img_id)?>" class="btn btn-warning">編輯</a>
			<a href="javascript:if(confirm('確定刪除？'))location.href='<?=base_url()?>'" class="btn btn-danger">刪除</a>
		</figure>
	<?php endforeach ?>
</section>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
