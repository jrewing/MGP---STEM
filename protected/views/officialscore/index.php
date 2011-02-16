<?php
$this->breadcrumbs=array(
	'Officialscores',
);

$this->menu=array(
	array('label'=>'Create Officialscore', 'url'=>array('create')),
	array('label'=>'Manage Officialscore', 'url'=>array('admin')),
);
?>

<h1>Officialscores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
