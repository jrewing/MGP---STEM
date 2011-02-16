<?php
$this->breadcrumbs=array(
	'Scores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Score', 'url'=>array('index')),
	array('label'=>'Manage Score', 'url'=>array('admin')),
);
?>

<h1>Create Score</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>