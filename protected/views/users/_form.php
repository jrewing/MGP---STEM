<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php /** echo $form->labelEx($model,'name'); */ ?>
		<?php echo $form->textField($model,'name',array('value'=>'skriv inn ditt kallenavn','size'=>20,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	<?php
/**
 
	<div class="row">
		<?php echo $form->labelEx($model,'facebook_id'); ?>
		<?php echo $form->textField($model,'facebook_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'facebook_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	*/
	 ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
