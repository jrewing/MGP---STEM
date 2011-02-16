<?php
$this->breadcrumbs=array(
	'Hashes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Hashes', 'url'=>array('index')),
	array('label'=>'Create Hashes', 'url'=>array('create')),
	array('label'=>'Update Hashes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hashes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hashes', 'url'=>array('admin')),
);
?>

<h1>View Hashes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
