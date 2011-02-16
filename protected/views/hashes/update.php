<?php
$this->breadcrumbs=array(
	'Hashes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hashes', 'url'=>array('index')),
	array('label'=>'Create Hashes', 'url'=>array('create')),
	array('label'=>'View Hashes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hashes', 'url'=>array('admin')),
);
?>

<h1>Update Hashes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>