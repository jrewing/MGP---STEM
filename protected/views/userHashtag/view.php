<?php
$this->breadcrumbs=array(
	'User Hashtags'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserHashtag', 'url'=>array('index')),
	array('label'=>'Create UserHashtag', 'url'=>array('create')),
	array('label'=>'Update UserHashtag', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserHashtag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserHashtag', 'url'=>array('admin')),
);
?>

<h1>View UserHashtag #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'hashtag_id',
	),
)); ?>
