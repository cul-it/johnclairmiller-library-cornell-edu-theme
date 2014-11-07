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
  <ul id="cbp-bislideshow" class="cbp-bislideshow">
    <li><img src="/sites/all/themes/johnclairmiller/images/slideshow/1.jpg" alt="image01"/></li>
    <li><img src="/sites/all/themes/johnclairmiller/images/slideshow/1.jpg" alt="image01"/></li>
    <li><img src="/sites/all/themes/johnclairmiller/images/slideshow/1.jpg" alt="image01"/></li>
    <li><img src="/sites/all/themes/johnclairmiller/images/slideshow/1.jpg" alt="image01"/></li>
  </ul>
  <div class="navbar" role="navigation">
    <div class="container">
      <div class="row">
        <div class="brand">
          <a class="navbar-brand" href="/">John Clair Miller</a>
        </div>
      </div>
    </div>
  </div><!-- /navbar -->
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <?php print render($breadcrumb); ?>
          <?php print render($page['highlighted']); ?>
          <?php print $messages; ?>
          <?php print render($tabs); ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php if(drupal_is_front_page()) {
            unset($page['content']['system_main']['default_message']);
          }?>
          <?php print render($page['content']); ?>
        </div>
        <div class="home-menu">
          <?php print render($page['navigation']); ?>
        </div>
      </div>
    </div>
  </div><!-- /jumbotron -->
</div>

<div class="container">
  <footer>
    <?php print render($page['footer']); ?>
  </footer>
</div> <!-- /container -->

<script src="javascripts/jquery.imagesloaded.min.js"></script>
<script src="javascripts/cbpBGSlideshow.min.js"></script>
<script>
    $(function() {
        cbpBGSlideshow.init();
    });
</script>

<?php print render($page['bottom']); ?>