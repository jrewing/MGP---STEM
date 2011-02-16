<?php
$this->breadcrumbs=array(
	'Scores',
);

$this->menu=array(
	array('label'=>'Create Scores', 'url'=>array('create')),
	array('label'=>'Manage Scores', 'url'=>array('admin')),
);
?>

<h1>Scores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
