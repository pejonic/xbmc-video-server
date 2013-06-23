<?php

/* @var $this MovieController */

$movieUrl = $this->createUrl('details', array('id'=>$data->movieid));
$thumbnailUrl = $this->createUrl('thumbnail/get', 
		array('thumbnailPath'=>$data->thumbnail));

$this->renderPartial('//videoLibrary/_gridItem', array(
	'label'=>$data->label,
	'itemUrl'=>$movieUrl,
	'thumbnailUrl'=>$thumbnailUrl,
));