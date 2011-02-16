<?php
$this->breadcrumbs=array(
	'Officialscores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Officialscore', 'url'=>array('index')),
	array('label'=>'Create Officialscore', 'url'=>array('create')),
	array('label'=>'View Officialscore', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Officialscore', 'url'=>array('admin')),
);
?>

<h1>Update Officialscore <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>