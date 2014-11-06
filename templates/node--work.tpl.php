<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<!-- <article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <p>TEST PAGE</p>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article> -->

<div class="row">
  <div class="access">
    <?php print render($content['field_work_image']); ?>
    <a href"#" class="btn btn-default">View images of <?php print $title; ?></a>
    <a href"#" class="btn btn-default">View full collection</a>
  </div>
  <div class="work-data">
    <dl>
      <?php if ($content['type']) : ?>
        <dt>Type</dt>
        <dd><?php print render($content['field_type']); ?></dd>
      <?php endif; ?>
      <dt>Location</dt>
      <dd><?php print render($content['field_location']); ?></dd>
      <dt>Owner</dt>
      <dd><?php print render($content['field_owner']); ?></dd>
      <dt>Sponsor</dt>
      <?php if ($content['type']) : ?>
        <dd><?php print render($content['field_sponsor']); ?></dd>
        <dt>Date</dt>
      <?php endif; ?>
      <dd><?php print render($content['field_date']); ?></dd>
      <dt>Design</dt>
      <dd><?php print render($content['field_design']); ?></dd>
      <dt>Engineering</dt>
      <dd><?php print render($content['field_engineering']); ?></dd>
      <dt>Award</dt>
      <dd><?php print render($content['field_award']); ?></dd>
    </dl>
    <h2>Program Description</h2>
    <?php print render($content['field_program']); ?>
    <h2>Design Description</h2>
    <?php print render($content['field_design_description']); ?>
    <h2>Award Description</h2>
    <?php print render($content['field_award_description']); ?>
  </div>
</div>
