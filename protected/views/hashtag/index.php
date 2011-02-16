<?php
$this->breadcrumbs=array(
	'Hashtags',
);

$this->menu=array(
	array('label'=>'Create Hashtag', 'url'=>array('create')),
	array('label'=>'Manage Hashtag', 'url'=>array('admin')),
);
?>

<h1>Hashtags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
