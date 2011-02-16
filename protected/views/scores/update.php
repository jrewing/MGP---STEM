<?php
$this->breadcrumbs=array(
	'Scores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scores', 'url'=>array('index')),
	array('label'=>'Create Scores', 'url'=>array('create')),
	array('label'=>'View Scores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Scores', 'url'=>array('admin')),
);
?>

<h1>Update Scores <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>