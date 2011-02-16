<?php
$this->breadcrumbs=array(
	'Scores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Scores', 'url'=>array('index')),
	array('label'=>'Create Scores', 'url'=>array('create')),
	array('label'=>'Update Scores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Scores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scores', 'url'=>array('admin')),
);
?>

<h1>View Scores #<?php echo $model->id; ?></h1>

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
