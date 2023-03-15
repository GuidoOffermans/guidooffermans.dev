<?php
$textStyles = [
	'h1' => 'text-4xl',
	'h2' => 'text-2xl',
	'h3' => 'text-1xl',
	'h4' => 'text-1xl',
	'h5' => 'text-1xl',
	'h6' => 'text-1xl',
];

$level = '' . $block->content()->level();
$textStyle = $textStyles[$level];
?>

<<?= $level ?> class="<?= $textStyle ?>">
	<?= $block->content()->text() ?>
</<?= $level ?>>