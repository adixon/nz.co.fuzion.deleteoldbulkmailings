<?php

require_once 'deleteoldbulkmailings.civix.php';
use CRM_Deleteoldbulkmailings_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function deleteoldbulkmailings_civicrm_config(&$config) {
  _deleteoldbulkmailings_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function deleteoldbulkmailings_civicrm_install() {
  _deleteoldbulkmailings_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function deleteoldbulkmailings_civicrm_enable() {
  _deleteoldbulkmailings_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function deleteoldbulkmailings_civicrm_navigationMenu(&$menu) {
  _deleteoldbulkmailings_civix_insert_navigation_menu($menu, NULL, array(
    'label' => E::ts('The Page'),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _deleteoldbulkmailings_civix_navigationMenu($menu);
} // */
