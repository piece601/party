<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<h1 class="text-center"></h1>
<section class="container">
	<a href="<?=base_url('page/create/'.$page_id)?>" class="btn btn-primary pull-right">新增項目</a>
	<div class="clearfix"></div>
	<br>
	<table class="table table-hover">
		<tr class="success"> 
			<td>圖片</td>
			<td>標題</td>
			<td>編輯</td>
			<td>刪除</td>
			<td>管理</td>
		</tr>
		<?php foreach ($query as $key => $value): ?>
			<tr>
				<td><img src="<?=base_url($value->path)?>" alt="" class="img-responsive" style="height:100px;"></td>
				<td><?=$value->title?></td>
				<td><a href="<?=base_url('page/edit/'.$value->sub_id)?>" class="btn btn-warning">編輯</a></td>
				<td><a href="javascript:if(confirm('確定刪除？'))location.href='<?=base_url('page/delete/'.$value->sub_id)?>'" class="btn btn-danger">刪除</a></td>
				<td><a href="<?=base_url('page/')?>" class="btn btn-primary">進入管理</a>	</td>
			</tr>
		<?php endforeach ?>
	</table>
</section>
<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
