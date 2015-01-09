<?php 

$section = $data[2];
$prev = $data[0];
$next = $data[1];
$maxpage = $data[3];

$prevlink = "/".$data[2]."/page/".$data[0]."/";
$nextlink = "/".$data[2]."/page/".$data[1]."/";
?>

<div class="pagination">
<?php 
if($prev < 1) {

}else{ ?>
	<a class="prevlink btn" href="<?= $prevlink?>">&laquo; back to page <?= $prev ?></a>
<?php } 
if($next > $maxpage) {

}else{
?>
	<a class="nextlink btn" href="<?= $nextlink?>">next to page <?= $next ?> &raquo;</a>
<?php } ?>
</div>