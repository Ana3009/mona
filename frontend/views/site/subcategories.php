<?php
$this->title = 'Subcategories';
?>

<?php 
foreach ($model as $services) {
	echo $services->name . '<br/>';
}
?>