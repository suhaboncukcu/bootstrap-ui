<?php
$class = array_unique((array)$params['class']);
$message = (isset($params['escape']) && $params['escape'] === false) ? $message : h($message);

$classes = "";
foreach ($class as $cs) {
	$classes .= $cs." ";
}

$classes = str_replace('alert','error visible', $classes);
?>


<div class="ui message <?=$classes?>">
	<p>
		<?=$message?>
	</p>
</div>
