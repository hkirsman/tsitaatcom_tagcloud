<?php
/**
 * @file
 * Template for tag cloud.
 */
?>
<ul class="tag-cloud">
  <?php foreach ($tags as $tag): ?>
  <li>
    <?php print $tag ?>
  </li>
  <?php endforeach; ?>
</ul>
