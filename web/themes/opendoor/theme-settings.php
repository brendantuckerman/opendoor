<?php

/**
 * @file
 * Functions to support opendoor theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter() for system_theme_settings.
 */
function opendoor_form_system_theme_settings_alter(&$form, FormStateInterface $form_state): void {
  $form['#attached']['library'][] = 'opendoor/color-picker';

  $color_config = [
    'colors' => [
      'base_primary_color' => 'Primary base color',
    ],
    'schemes' => [
      'default' => [
        'label' => 'Ice blue',
        'colors' => [
          'base_primary_color' => '#acecf7',
        ],
      ],
      'mint' => [
        'label' => 'Mint Green',
        'colors' => [
          'base_primary_color' => '#d6f6dd',
        ],
      ],
      'purple' => [
        'label' => 'Bubblegum Purple',
        'colors' => [
          'base_primary_color' => '#DAC4f7',
        ],
      ],
      'red' => [
        'label' => 'Red Soda',
        'colors' => [
          'base_primary_color' => '#f4989c',
        ],
      ],
      'orange' => [
        'label' => 'Crayon Orange',
        'colors' => [
          'base_primary_color' => '#FF7538',
        ],
      ],
    ],
  ];

  $form['#attached']['drupalSettings']['opendoor']['colorSchemes'] = $color_config['schemes'];

  $form['opendoor_settings']['opendoor_utilities'] = [
    '#type' => 'fieldset',
    '#title' => t('opendoor Utilities'),
  ];
  $form['opendoor_settings']['opendoor_utilities']['mobile_menu_all_widths'] = [
    '#type' => 'checkbox',
    '#title' => t('Enable mobile menu at all widths'),
    '#config_target' => 'opendoor.settings:mobile_menu_all_widths',
    '#description' => t('Enables the mobile menu toggle at all widths.'),
  ];
  $form['opendoor_settings']['opendoor_utilities']['site_branding_bg_color'] = [
    '#type' => 'select',
    '#title' => t('Header site branding background color'),
    '#options' => [
      'default' => t('Primary Branding Color'),
      'gray' => t('Gray'),
      'white' => t('White'),
    ],
    '#config_target' => 'opendoor.settings:site_branding_bg_color',
  ];
  $form['opendoor_settings']['opendoor_utilities']['opendoor_color_scheme'] = [
    '#type' => 'fieldset',
    '#title' => t('opendoor Color Scheme Settings'),
  ];
  $form['opendoor_settings']['opendoor_utilities']['opendoor_color_scheme']['description'] = [
    '#type' => 'html_tag',
    '#tag' => 'p',
    '#value' => t('These settings adjust the look and feel of the opendoor theme. Changing the color below will change the base hue, saturation, and lightness values the opendoor theme uses to determine its internal colors.'),
  ];
  $form['opendoor_settings']['opendoor_utilities']['opendoor_color_scheme']['color_scheme'] = [
    '#type' => 'select',
    '#title' => t('opendoor Color Scheme'),
    '#empty_option' => t('Custom'),
    '#empty_value' => '',
    '#options' => [
      'default' => t('Ice Blue (Default)'),
      'mint' => t('Mint Green'),
      'purple' => t('Bubblegum Purple'),
      'red' => t('Red Soda'),
      'orange' => t('Orange Crayon'),
    ],
    '#input' => FALSE,
    '#wrapper_attributes' => [
      'style' => 'display:none;',
    ],
  ];

  foreach ($color_config['colors'] as $key => $title) {
    $form['opendoor_settings']['opendoor_utilities']['opendoor_color_scheme'][$key] = [
      '#type' => 'textfield',
      '#maxlength' => 7,
      '#size' => 10,
      '#title' => t($title),
      '#description' => t('Enter color in hexadecimal format (#abc123).') . '<br/>' . t('Derivatives will be formed from this color.'),
      '#config_target' => "opendoor.settings:$key",
      '#attributes' => [
        // Regex copied from Color::validateHex()
        'pattern' => '^[#]?([0-9a-fA-F]{3}){1,2}$',
      ],
      '#wrapper_attributes' => [
        'data-drupal-selector' => 'opendoor-color-picker',
      ],
    ];
  }
}
