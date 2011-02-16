<?php
$this->breadcrumbs=array(
	'User Hashtags'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserHashtag', 'url'=>array('index')),
	array('label'=>'Create UserHashtag', 'url'=>array('create')),
	array('label'=>'View UserHashtag', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserHashtag', 'url'=>array('admin')),
);
?>

<h1>Update UserHashtag <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>