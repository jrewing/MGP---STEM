<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

<?php
foreach ($users as $u){
    ?><li><a href="/mgp-skjema/index.php?r=user/view&id=<?=$u->id?>"><?=$u->name?></a></li><?php
}
?>
</div>