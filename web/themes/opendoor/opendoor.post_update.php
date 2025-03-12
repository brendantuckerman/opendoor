<?php

/**
 * @file
 * Post update functions for OpenDoor.
 */

/**
 * Implements hook_removed_post_updates().
 */
function opendoor_removed_post_updates(): array {
  return [
    'opendoor_post_update_add_opendoor_primary_color' => '11.0.0',
  ];
}
