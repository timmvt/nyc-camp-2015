<?php
/**
 * @file
 * nyc_camp_news.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function nyc_camp_news_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_news:news
  $menu_links['main-menu_news:news'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'news',
    'router_path' => 'news',
    'link_title' => 'News',
    'options' => array(
      'identifier' => 'main-menu_news:news',
      'attributes' => array(
        'title' => 'News',
      ),
      'item_attributes' => array(
        'id' => '',
        'class' => '',
        'style' => '',
      ),
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 1,
    'weight' => -48,
    'customized' => 1,
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('News');


  return $menu_links;
}
