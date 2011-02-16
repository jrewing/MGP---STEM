<?php
$this->breadcrumbs=array(
	'User Hashes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserHashes', 'url'=>array('index')),
	array('label'=>'Manage UserHashes', 'url'=>array('admin')),
);
?>

<h1>Create UserHashes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>