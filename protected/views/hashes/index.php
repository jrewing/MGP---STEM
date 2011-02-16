<?php
$this->breadcrumbs=array(
	'Hashes',
);

$this->menu=array(
	array('label'=>'Create Hashes', 'url'=>array('create')),
	array('label'=>'Manage Hashes', 'url'=>array('admin')),
);
?>

<h1>Hashes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
