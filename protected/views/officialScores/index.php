<?php
$this->breadcrumbs=array(
	'Official Scores',
);

$this->menu=array(
	array('label'=>'Create OfficialScores', 'url'=>array('create')),
	array('label'=>'Manage OfficialScores', 'url'=>array('admin')),
);
?>

<h1>Official Scores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
