<?php
$this->breadcrumbs=array(
	'User Hashtags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserHashtag', 'url'=>array('index')),
	array('label'=>'Manage UserHashtag', 'url'=>array('admin')),
);
?>

<h1>Create UserHashtag</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>