<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div class="row">
  <div class="access">
    <?php print render($content['field_work_image']); ?>
    <!-- <a href="http://catalog.sharedshelf.artstor.org">Browse images of <?php print $title; ?></a> -->
    <?php if (!empty ($content['field_shared_shelf_link'])) : ?>
      <?php print render($content['field_shared_shelf_link']); ?>
    <?php endif; ?>
    <a href="http://hdl.handle.net/1813.001/8788265">Browse all images</a>
  </div>
  <div class="work-data">
    <dl>
      <?php if (!empty ($content['field_type'])) : ?>
        <dt>Type</dt>
        <dd><?php print render($content['field_type']); ?></dd>
      <?php endif; ?>
      <?php if (!empty ($content['field_location'])) : ?>
        <dt>Location</dt>
        <dd><?php print render($content['field_location']); ?></dd>
      <?php endif; ?>
      <?php if (!empty ($content['field_owner'])) : ?>
        <dt>Owner</dt>
        <dd><?php print render($content['field_owner']); ?></dd>
      <?php endif; ?>
      <?php if (!empty ($content['field_sponsor'])) : ?>
        <dt>Sponsor</dt>
        <dd><?php print render($content['field_sponsor']); ?></dd>
      <?php endif; ?>
      <?php if (!empty ($content['field_date'])) : ?>
        <dt>Date</dt>
        <dd><?php print render($content['field_date']); ?></dd>
      <?php endif; ?>
      <?php if (!empty ($content['field_design'])) : ?>
        <dt>Design</dt>
        <dd><?php print render($content['field_design']); ?></dd>
      <?php endif; ?>
      <?php if (!empty ($content['field_engineering'])) : ?>
        <dt>Engineering</dt>
        <dd><?php print render($content['field_engineering']); ?></dd>
      <?php endif; ?>
      <?php if (!empty ($content['field_award'])) : ?>
        <dt>Award</dt>
        <dd><?php print render($content['field_award']); ?></dd>
      <?php endif; ?>
    </dl>
    <?php if (!empty ($content['field_program'])) : ?>
      <h2>Program Description</h2>
      <?php print render($content['field_program']); ?>
    <?php endif; ?>
    <?php if (!empty ($content['field_design_description'])) : ?>
      <h2>Design Description</h2>
      <?php print render($content['field_design_description']); ?>
    <?php endif; ?>
    <?php if (!empty ($content['field_award_description'])) : ?>
      <h2>Award Description</h2>
      <?php print render($content['field_award_description']); ?>
    <?php endif; ?>
  </div>
</div>
