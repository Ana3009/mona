<?php 

use yii\Helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<?php foreach ($model as $category) {
    echo Html::a($category->name, ['site/categories', 'id' => $category->id]) . '<br/>';
}
?>