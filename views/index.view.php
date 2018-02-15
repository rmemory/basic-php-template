<?php require('partials/head.php'); ?>

<!-- task list -->
<h1>My Tasks</h1>

<ul>
  <?php foreach ($tasks as $task) : ?>
    <li>
      <?php if ($task->completed) : ?>
          <strike><?= $task->description; ?></strike>
      <?php else: ?>
          <?= $task->description; ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>

<!-- display users -->

<?php require('partials/footer.php'); ?>
