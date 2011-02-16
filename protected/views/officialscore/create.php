<?php
$this->breadcrumbs=array(
	'Officialscores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Officialscore', 'url'=>array('index')),
	array('label'=>'Manage Officialscore', 'url'=>array('admin')),
);
?>

<h1>Create Officialscore</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>