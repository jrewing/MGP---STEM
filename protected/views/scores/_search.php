<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clothes'); ?>
		<?php echo $form->textField($model,'clothes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'choreography'); ?>
		<?php echo $form->textField($model,'choreography'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'song'); ?>
		<?php echo $form->textField($model,'song'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'heart'); ?>
		<?php echo $form->textField($model,'heart'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->