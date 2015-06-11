<?php require_once VIEWPATH.'_layouts/_header.php' ?>
<h1 class="text-center"></h1>
<section class="container">
	<a href="<?=base_url('page/create/'.$page_id)?>" class="btn btn-primary pull-right">新增項目</a>
	<div class="clearfix"></div>
	<br>
	<table class="table table-hover">
		<tr class="success"> 
			<td>No.</td>
			<td>圖片</td>
			<td>標題</td>
			<td>編輯</td>
			<td>刪除</td>
			<td>管理</td>
		</tr>
		<tbody>
		<?php $counter = 1 ?>
		<?php foreach ($query as $key => $value): ?>
			<tr id="item-<?=$counter?>">
				<td><?= $counter++ ?></td>
				<td><img src="<?=base_url($value->path)?>" alt="" class="img-responsive" style="height:100px;"></td>
				<td><?=$value->title?></td>
				<td><a href="<?=base_url('page/edit/'.$value->sub_id)?>" class="btn btn-warning">編輯</a></td>
				<td><a href="javascript:if(confirm('確定刪除？'))location.href='<?=base_url('page/delete/'.$value->sub_id)?>'" class="btn btn-danger">刪除</a></td>
				<td><a href="<?=base_url('page/')?>" class="btn btn-primary">進入管理</a>	</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
</section>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$(function() {
    $( "tbody" ).sortable();
    $( "tbody" ).disableSelection();
  });
  $('tbody').sortable({
    axis: 'y',
    update: function (event, ui) {
    	$(".circles").show();
      var data = $(this).sortable('serialize');
      // POST to server using $.post or $.ajax
      $.ajax({
          data: data,
          type: 'POST',
          url: "<?=base_url('ajax/change_page/'.$page_id)?>",
          dataType: 'text',
          success: function(msg) {
          	window.location.reload(); //拖曳更新完自動刷頁
          }
      })
    }
	});
</script>

<?php require_once VIEWPATH.'_layouts/_footer.php' ?>
