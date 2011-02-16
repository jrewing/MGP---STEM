<?php
$this->breadcrumbs=array(
	'Officialscores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Officialscore', 'url'=>array('index')),
	array('label'=>'Create Officialscore', 'url'=>array('create')),
	array('label'=>'Update Officialscore', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Officialscore', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Officialscore', 'url'=>array('admin')),
);
?>

<h1>View Officialscore #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'judge',
		'country',
		'score',
	),
)); ?>
