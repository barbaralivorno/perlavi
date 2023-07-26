<?php foreach ($blocks as $index => $_block) : ?>
  <?= block("includes/blocks/" . str_replace('_', '-', $_block['acf_fc_layout']), compact('_block', 'index') + ($props ?? [])) ?>
<?php endforeach; ?>