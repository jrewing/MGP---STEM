<?php
$this->breadcrumbs=array(
	'Hashtags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hashtag', 'url'=>array('index')),
	array('label'=>'Manage Hashtag', 'url'=>array('admin')),
);
?>

<h1>Create Hashtag</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>