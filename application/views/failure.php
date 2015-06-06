<? @require_once VIEWPATH.'_layouts/_header.php' ;?>
<section class="container">
	<div class="alert alert-warning"><h3><?echo $message;?></h3></div> 
	<p class="text-info text-center">三秒回前頁</p>	
</section>
<script>setTimeout("history.go(-1)",3000)</script>

<? @require_once VIEWPATH.'_layouts/_footer.php' ;?>