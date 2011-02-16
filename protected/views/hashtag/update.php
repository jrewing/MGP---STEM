<?php
$this->breadcrumbs=array(
	'Hashtags'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hashtag', 'url'=>array('index')),
	array('label'=>'Create Hashtag', 'url'=>array('create')),
	array('label'=>'View Hashtag', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hashtag', 'url'=>array('admin')),
);
?>

<h1>Update Hashtag <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>