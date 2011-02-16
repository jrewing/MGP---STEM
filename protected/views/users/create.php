<?php
/*
$this->breadcrumbs=array(
	//'Users'=>array('index'),
	//'Create',
);

$this->menu=array(
	//array('label'=>'List Users', 'url'=>array('index')),
	//array('label'=>'Manage Users', 'url'=>array('admin')),
);
*/
?>

<h1>Velkommen til MGP!</h1>
<div><p>Her kan du bli med å stemme på alle sangene sammen med vennene dine</p></div>
<div><p>For å komme i gang velger du et kallenavn og merkelapper. Bruk de samme merkelappene som de du sitter sammen med, så kan dere stemme sammen.</p></div>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>