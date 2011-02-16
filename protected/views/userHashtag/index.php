<?php
$this->breadcrumbs=array(
	'User Hashtags',
);

$this->menu=array(
	array('label'=>'Create UserHashtag', 'url'=>array('create')),
	array('label'=>'Manage UserHashtag', 'url'=>array('admin')),
);
?>

<h1>User Hashtags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
