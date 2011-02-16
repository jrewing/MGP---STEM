<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'official-scores-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'judge'); ?>
		<?php echo $form->textField($model,'judge',array('size'=>60,'maxlength'=>1023)); ?>
		<?php echo $form->error($model,'judge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score'); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->