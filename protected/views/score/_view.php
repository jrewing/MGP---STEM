<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clothes')); ?>:</b>
	<?php echo CHtml::encode($data->clothes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('choreography')); ?>:</b>
	<?php echo CHtml::encode($data->choreography); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('song')); ?>:</b>
	<?php echo CHtml::encode($data->song); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heart')); ?>:</b>
	<?php echo CHtml::encode($data->heart); ?>
	<br />


</div>