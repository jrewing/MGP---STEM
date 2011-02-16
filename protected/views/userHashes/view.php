<?php
$this->breadcrumbs=array(
	'User Hashes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserHashes', 'url'=>array('index')),
	array('label'=>'Create UserHashes', 'url'=>array('create')),
	array('label'=>'Update UserHashes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserHashes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserHashes', 'url'=>array('admin')),
);
?>

<h1>View UserHashes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'hashes_id',
	),
)); ?>
