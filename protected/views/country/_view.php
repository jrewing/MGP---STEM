<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('song')); ?>:</b>
	<?php echo CHtml::encode($data->song); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artist')); ?>:</b>
	<?php echo CHtml::encode($data->artist); ?>
	<br />


</div>