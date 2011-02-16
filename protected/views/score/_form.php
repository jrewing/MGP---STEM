<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'score-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clothes'); ?>
		<?php echo $form->textField($model,'clothes'); ?>
		<?php echo $form->error($model,'clothes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'choreography'); ?>
		<?php echo $form->textField($model,'choreography'); ?>
		<?php echo $form->error($model,'choreography'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'song'); ?>
		<?php echo $form->textField($model,'song'); ?>
		<?php echo $form->error($model,'song'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'heart'); ?>
		<?php echo $form->textField($model,'heart'); ?>
		<?php echo $form->error($model,'heart'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->