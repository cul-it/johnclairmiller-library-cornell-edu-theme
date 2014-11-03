<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<div class="cornell-brand">
  <div class="container hidden-xs">
    <div class="row">
      <div class="cornell-logo">
        <div class="cu-logo">
          <img src="/sites/all/themes/johnclairmiller/images/layout/cul-logo-white.gif" alt="Cornell University Library">
          <a id="insignia-link" href="http://www.cornell.edu/">Cornell Insignia</a>
          <div class="unit-signature-links">
            <a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a>
            <a id="unit-link" href="http://www.library.cornell.edu">Cornell University Library</a>
          </div>
        </div>
      </div>
      <div class="search-links hidden-xs">
        <ul>
          <li><a href="http://www.library.cornell.edu/">Search Library</a></li>
          <li><a href="http://www.cornell.edu/search/">Search Cornell</a></li>
        </ul>
      </div>
    </div>
  </div>
  <a class="visible-xs mobile-logo" href="http://www.library.cornell.edu"><img src="/sites/all/themes/johnclairmiller/images/layout/cul-mobile.png" alt="Cornell University Library"></a>
</div>

<div class="image-wrapper">
  <div class="navbar" role="navigation">
    <div class="container">
      <div class="row">
        <div class="brand">
          <a class="navbar-brand" href="/">John Clair Miller</a>
        </div>
        <div class="navigation">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-bars"></i> Menu
          </button>
          <div class="navbar-collapse collapse">
            <div class="navbar-nav">
              <?php print render($page['navigation']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /navbar -->
</div>

<div class="main-content">
  <div class="container">
    <?php print render($breadcrumb); ?>
    <?php print render($page['highlighted']); ?>
    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($page['content']); ?>
  </div>
</div><!-- /main-content -->

<div class="container">
  <footer>
    <?php print render($page['footer']); ?>
  </footer>
</div> <!-- /container -->

<?php print render($page['bottom']); ?>