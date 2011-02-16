<?php
$this->breadcrumbs=array(
	'Scores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Score', 'url'=>array('index')),
	array('label'=>'Create Score', 'url'=>array('create')),
	array('label'=>'Update Score', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Score', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Score', 'url'=>array('admin')),
);
?>

<h1>View Score #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'country',
		'clothes',
		'choreography',
		'song',
		'heart',
	),
)); ?>
