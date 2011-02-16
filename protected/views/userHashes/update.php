<?php
$this->breadcrumbs=array(
	'User Hashes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserHashes', 'url'=>array('index')),
	array('label'=>'Create UserHashes', 'url'=>array('create')),
	array('label'=>'View UserHashes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserHashes', 'url'=>array('admin')),
);
?>

<h1>Update UserHashes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>