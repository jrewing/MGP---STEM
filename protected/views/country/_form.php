<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'country-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'song'); ?>
		<?php echo $form->textField($model,'song',array('size'=>60,'maxlength'=>1023)); ?>
		<?php echo $form->error($model,'song'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'artist'); ?>
		<?php echo $form->textField($model,'artist',array('size'=>60,'maxlength'=>1023)); ?>
		<?php echo $form->error($model,'artist'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->