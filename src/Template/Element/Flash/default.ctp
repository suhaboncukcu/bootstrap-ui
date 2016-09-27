<?php
$class = array_unique((array)$params['class']);
$message = (isset($params['escape']) && $params['escape'] === false) ? $message : h($message);

$key = in_array('alert-danger', $class);

$class = array_replace($class, [$key => 'error']);

$classes = "";
foreach ($class as $cs) {
	$classes .= $cs." ";
}
?>


<div class="ui message <?=$classes?>">
	<p>
		<?=$message?>
	</p>
</div>
