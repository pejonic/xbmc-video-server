<h2>Movies</h2>

<?php

/* @var $dataProvider LibraryDataProvider */

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_movieGridItem',
	'itemsTagName'=>'ul',
	'itemsCssClass'=>'thumbnails movie-grid',
));