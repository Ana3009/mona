<?php 
use yii\Helpers\Html;

$this->title = 'Categories';
?>

<?php
foreach ($model as $subcategory) {
	echo Html::a($subcategory->name, ['site/subcategories', 'id' => $subcategory->id]) . '<br/>';
}
?>