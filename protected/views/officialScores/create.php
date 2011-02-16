<?php
$this->breadcrumbs=array(
	'Official Scores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OfficialScores', 'url'=>array('index')),
	array('label'=>'Manage OfficialScores', 'url'=>array('admin')),
);
?>

<h1>Create OfficialScores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>