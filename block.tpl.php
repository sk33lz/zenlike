<?php
// $Id: block.tpl.php $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="clear-block block block-<?php print $block->module ?>">

<?php if (!empty($block->subject)): ?>
  <h4><?php print $block->subject ?></h4>
<?php endif;?>

  <div class="content"><?php print $block->content ?></div>
</div>
