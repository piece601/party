<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<h1 class="text-center"></h1>
<section class="container">
	<a href="<?=base_url('page/create/'.$page_id)?>" class="btn btn-primary pull-right">新增項目</a>
	<a href="<?=base_url('page/order/'.$page_id)?>" class="btn btn-warning pull-right" style="margin:0 20px">更動順序</a>
	<div class="clearfix"></div><br>
	<?php foreach ($query as $key => $value): ?>
 		<section class="col-xs-12 col-sm-4 text-center">
			<img src="<?=base_url($value->path)?>" alt="" class="img-responsive" style="margin:0 auto;">
			<p><?=$value->title?></p>
			<ul class="list-inline">
				<li><a href="javascript:if(confirm('確定刪除？'))location.href='<?=base_url('page/delete/'.$value->sub_id)?>'" class="btn btn-danger">刪除</a></li>
				<li><a href="<?=base_url('page/edit/'.$value->sub_id)?>" class="btn btn-warning">編輯</a></li>
				<li><a href="<?=base_url('page/image/'.$value->sub_id)?>" class="btn btn-primary">進入管理</a></li>
			</ul>
		</section>
	<?php endforeach ?>
</section>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
