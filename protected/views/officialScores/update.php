<?php
$this->breadcrumbs=array(
	'Official Scores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OfficialScores', 'url'=>array('index')),
	array('label'=>'Create OfficialScores', 'url'=>array('create')),
	array('label'=>'View OfficialScores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OfficialScores', 'url'=>array('admin')),
);
?>

<h1>Update OfficialScores <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>