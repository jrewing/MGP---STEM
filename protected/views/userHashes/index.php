<?php
$this->breadcrumbs=array(
	'User Hashes',
);

$this->menu=array(
	array('label'=>'Create UserHashes', 'url'=>array('create')),
	array('label'=>'Manage UserHashes', 'url'=>array('admin')),
);
?>

<h1>User Hashes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
