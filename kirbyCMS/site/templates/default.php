<!DOCTYPE html>
<html class="h-full antialiased" lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?= css('assets/css/styles.css') ?>

	<title><?= $page->seoTitle() ?></title>
	<description><?= $page->seoDescription() ?></description>

</head>

<body class="flex h-full flex-col bg-zinc-50 dark:bg-black">
	<?php snippet('header') ?>

	<main>
		<div class="sm:px-8 mt-16 sm:mt-32">
			<div class="flex flex-col gap-2">
				<?php foreach ($page->blocks()->toBlocks() as $block) : ?>
					<div id="<?= $block->id() ?>">
						<?php snippet('blocks/' . $block->type(), [
							'block' => $block,
							'theme' => 'dark'
						]) ?>
					</div>
				<?php endforeach ?>
			</div>

		</div>
	</main>

</body>

</html>