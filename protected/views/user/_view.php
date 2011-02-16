<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />
	<ul>
<?php

foreach ($tags as $t){
    ?><li><a href="/mgp-skjema/index.php?r=hashtag/view&id=<?=$t->id?>"><?=$t->name?></a></li><?php
}

 ?>
</ul>
</div>