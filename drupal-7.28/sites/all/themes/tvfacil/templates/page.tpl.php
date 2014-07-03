<div class="header-container">
  <header class="header wrapper">
    <h1 class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a></h1>
    <div class="header-right">
      <aside class="social-buttons">
        <?php print render($page['header_social']); ?>
      </aside>
      <aside class="session">
        <?php print render($page['user']); ?>
        <a href="/cart" class="cart"><i class="fa fa-shopping-cart"></i></a>
      </aside>
      <aside class="search">
        <?php print render($page['search_block']); ?>
      </aside>
      <nav class="main-nav">
        <?php print render($page['main_nav']); ?>
      </nav>
    </div>
  </header>
</div>

<?php if ($is_front): ?>
  <div id="slides" class="home-slider">
    <?php print render($page['front_slider']); ?>
  </div>
<?php endif; ?>

<div class="main-container">
  <div class="main-content wrapper">
    <div class="content">
      <?php print $messages; ?>
      <?php print render($page['highlighted']); ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if(!$is_front): ?>
        <?php if ($title): ?>
          <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      <?php else: ?>
        <?php print render($page['front_productos']); ?>
      <?php endif ?>
    </div>
    <div class="sidebar">
      <?php print render($page['sidebar']); ?>
    </div>
  </div>
</div>
<div class="footer-container">
  <footer class="footer wrapper">
    <div class="footer-row left">
      <div class="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" />
      </div>
      <div class="info">
        <?php print render($page['footer_info']); ?>
      </div>
    </div>
    <div class="footer-row right">
      <aside class="footer-nav clearfix">
        <?php print render($page['footer_menu']); ?>
      </aside>
      <aside class="social-buttons clearfix">
        <?php print render($page['footer_social']); ?>
      </aside>
    </div>
  </footer>
</div>
<?php print render($page['extras']); ?>
