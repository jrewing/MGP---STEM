<?php
$this->breadcrumbs=array(
	'Hashtags'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Hashtag', 'url'=>array('index')),
	array('label'=>'Create Hashtag', 'url'=>array('create')),
	array('label'=>'Update Hashtag', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hashtag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hashtag', 'url'=>array('admin')),
);
?>

<h1>View Hashtag #<?php echo $model->id; ?></h1>
<?php $users = $model->users; ?>
<?php echo $this->renderPartial('_view', array('data'=>$model,'users'=>$users)); ?>
<?php
/**
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
));
*/
?>
