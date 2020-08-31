<?php foreach($posts as $p):?>
	<div class="post">
		<img src="<?php echo $p->titlePic?>">

		<div class="date"><?php echo date('d F Y', $p->date)?></div>
		<h2><a href="<?php echo $p->url?>"><?php echo $p->title ?></a></h2>

		<?php echo $p->body?>

	</div>
<?php endforeach;?>

<?php if ($has_pagination['prev']):?>
	<a href="?page=<?php echo $page-1?>" class="pagination-arrow newer">Newer</a>
<?php endif;?>

<?php if ($has_pagination['next']):?>
	<a href="?page=<?php echo $page+1?>" class="pagination-arrow older">Older</a>
<?php endif;?>
