<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div id="navigation" class="navigation">
  <?php if ($page['topbar']): ?>
    <div id="topbar" class="topbar">
      <div class="container">
        <?php print render($page['topbar']); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['main_nav']): ?>
    <div id="main-nav" class="main-nav">
      <div class="container">

        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
        <?php if ($site_name || $site_slogan): ?>
          <hgroup id="site-name-slogan">
            <?php if ($site_name): ?>
              <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
              <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
            <?php endif; ?>
          </hgroup>
        <?php endif; ?>

        <?php print render($page['main_nav']); ?>
      </div>
    </div>
  <?php endif; ?>
</div>

<?php if ($page['header']): ?>
  <header id="header" class="header" role="banner">
    <div class="container">
      <?php print render($page['header']); ?>
    </div>
  </header>
<?php endif; ?>

<?php if ($page['main_prefix']): ?>
  <div id="main-prefix" class="main-prefix">
     <div class="container">
        <?php print render($page['main_prefix']); ?>
     </div>
   </div>
 <?php endif; ?>

<?php if ($page['content']): ?>
  <main id="main" class="main" role="main">
    <div class="container">

      <?php print $messages; ?>
      <?php print render($page['help']); ?>
      <?php if ($breadcrumb): print $breadcrumb; endif;?>

      <?php if (!empty($tabs['#primary'])): ?>
        <div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div>
      <?php endif; ?>
  
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
    
      <div class="content-wrapper">
        <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="title" id="page-title"><?php print $title; ?></h1>
          <?php endif; ?>
        <?php print render($title_suffix); ?>
    
        <?php print render($page['content']); ?>
      </div>

    </div>
  </main>
<?php endif; ?>

<?php if ($page['main_suffix']): ?>
  <div id="main-suffix" class="main-suffix">
     <div class="container">
        <?php print render($page['main_suffix']); ?>
     </div>
   </div>
<?php endif; ?>

<?php if ($page['footer']): ?>
  <footer id="footer" class="footer" role="contentinfo">
    <div class="container">
      <?php print render($page['footer']); ?>
    </div>
  </footer>
<?php endif; ?>