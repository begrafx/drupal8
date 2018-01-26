<?php
/**
 * @file
 * Some settings specific for this local environment.
 *
 * If you want you can add the content of this file to the basic settings.php,
 * or you can leave it here. Some settings are specific for the local
 * environment and you have to adapt it to other environments with
 * different content.
 *
 * Questions? <hello@gridonic.ch>
 */
// Disable some caches.
// ⚠️ Works together with "development.services.yml"
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

// Settings for drupal-module "environment_indicator".
$config['environment_indicator.indicator']['bg_color'] = '#014F01';
$config['environment_indicator.indicator']['fg_color'] = '#ffffff';
$config['environment_indicator.indicator']['name'] = 'Local';
