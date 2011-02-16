<?php
$this->breadcrumbs=array(
	'Hashes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hashes', 'url'=>array('index')),
	array('label'=>'Manage Hashes', 'url'=>array('admin')),
);
?>

<h1>Create Hashes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>