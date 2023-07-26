<?php
global $post;
$blocks = $blocks ?? (get_field('blocks') ?: []);
?>

<?php if ($post->post_name == 'home') : ?>
  <?= partial('includes/logo') ?>
<?php else : ?>
  <?= hd_component('title', [
    'class' => 'page-title',
    'text' => $post->post_title,
  ]) ?>
<?php endif; ?>
<?= block('includes/blocks/flexible-content', compact('blocks') + ['props' => [
  'parent' => $post->post_type == 'page' ? "{$post->post_name}-page" : "{$post->post_type}-post",
]]) ?>