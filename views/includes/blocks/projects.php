<?php
$query_params = [
  'post_type' => 'project',
  'post_status' => 'publish',
  'posts_per_page' => -1,
];

$projects = new WP_Query($query_params);
?>
<div class="<?= $_bem->block() ?>">
  <?php if (!empty($_block['title'])) : ?>
  <h2 class="title <?= $_bem->element('title') ?>"><?= $_block['title'] ?></h2>
  <?php endif ?>
  <div class="<?= $_bem->element('list-item') ?>">
    <?php if (!empty($_block['featured'])) : ?>
    <?= block("includes/blocks/projects/item",  [
        '_block' => $_block['featured'],
        'parent' => 'projects__list',
        'featured' => true,
      ]) ?>
    <?php endif ?>
    <?php foreach ($projects->posts as $item) :
      if (!empty($_block['featured']) && $_block['featured']->ID !== $item->ID) :
    ?>
    <div class='<?= $_bem->element('list-item') ?>'>
      <?= block("includes/blocks/projects/item",  [
            '_block' => $item,
            'parent' => 'projects__list',
          ]) ?>
    </div>
    <?php endif ?>
    <?php endforeach; ?>
  </div>
</div>