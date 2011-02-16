<div class="view">
<?php /**
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebook_id')); ?>:</b>
	<?php echo CHtml::encode($data->facebook_id); ?>
	<br />
*/?>
<?php
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])&&(CHtml::encode($data->id)==$_SESSION['user_id']))
{
    echo CHtml::encode("Du heter ".$data->name);
}else{
    echo CHtml::encode("Dette er ikke deg");
}


?>
<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
<br />
</div>
<div>
<?php
foreach ($scores as $sc){
    echo ("Land" .$sc->country);
}
?>

</div>