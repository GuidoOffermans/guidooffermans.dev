<!DOCTYPE html>
<html class="h-full antialiased text-white" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?= css('assets/css/styles.css') ?>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title><?= $page->seoTitle() ?></title>
  <description><?= $page->seoDescription() ?></description>

</head>

<body class="flex h-full flex-col bg-gray-900">
<?php snippet('header') ?>

<main class="px-6 sm:px-8">
  <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
    <div class="lg:pl-20">

      <?php foreach ($page->blocks1()->toBlocks() as $block) : ?>
        <div id="<?= $block->id() ?>">
          <?php snippet('blocks/' . $block->type(), [
            'block' => $block,
            'theme' => 'dark'
          ]) ?>
        </div>
      <?php endforeach ?>
    </div>

    <div class="lg:order-first lg:row-span-2">
      <?php foreach ($page->blocks2()->toBlocks() as $block) : ?>
        <div id="<?= $block->id() ?>">
          <?php snippet('blocks/' . $block->type(), [
            'block' => $block,
            'theme' => 'dark'
          ]) ?>
        </div>
      <?php endforeach ?>
    </div>

    <div class="lg:pl-20">
      <?php foreach ($page->blocks3()->toBlocks() as $block) : ?>
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
