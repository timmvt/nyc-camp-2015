<?php
/**
 * @file
 * nyc_camp_podcasts.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function nyc_camp_podcasts_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_podcast_general|node|podcast|form';
  $field_group->group_name = 'group_podcast_general';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'podcast';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'General',
    'weight' => '0',
    'children' => array(
      0 => 'field_podcast_date',
      1 => 'field_podcast_description',
      2 => 'field_podcast_file',
      3 => 'field_podcast_image',
      4 => 'field_podcast_intro',
      5 => 'field_podcast_video',
      6 => 'title',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => ' group-podcast-general field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_podcast_general|node|podcast|form'] = $field_group;

  return $export;
}
