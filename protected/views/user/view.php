<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<h3><a href="/mgp-skjema/index.php?r=user/view&id=<?=$currentmodel->id?>">Hjem <?php echo $currentmodel->name; ?></a></h3>
<h1>View User #<?php echo $model->id; ?></h1>
<?php
$tags = $model->hashtags;
echo $this->renderPartial('_view', array('data'=>$model,'tags'=>$tags));
?>
<?php
/**
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'facebook_id',
        array('hashtags'),
	),
));
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'facebook_id',
        array('name'=>'hashtags','value'=>'$tags[0]->name'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

**/
 ?>
