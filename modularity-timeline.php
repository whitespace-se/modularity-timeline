<?php

/**
 * Plugin Name:       Modularity Timeline
 * Plugin URI:        (#plugin_url#)
 * Description:       A module to display a timeline.
 * Version:           1.0.0
 * Author:            Jonatan Hanson
 * Author URI:        (#plugin_author_url#)
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       modularity-timeline
 * Domain Path:       /languages
 */

 // Protect agains direct file access
if (! defined('WPINC')) {
    die;
}

define('MODULARITYTIMELINE_PATH', plugin_dir_path(__FILE__));
define('MODULARITYTIMELINE_URL', plugins_url('', __FILE__));
define('MODULARITYTIMELINE_TEMPLATE_PATH', MODULARITYTIMELINE_PATH . 'templates/');

load_plugin_textdomain('modularity-timeline', false, plugin_basename(dirname(__FILE__)) . '/languages');

require_once MODULARITYTIMELINE_PATH . 'source/php/Vendor/Psr4ClassLoader.php';
require_once MODULARITYTIMELINE_PATH . 'Public.php';

// Instantiate and register the autoloader
$loader = new ModularityTimeline\Vendor\Psr4ClassLoader();
$loader->addPrefix('ModularityTimeline', MODULARITYTIMELINE_PATH);
$loader->addPrefix('ModularityTimeline', MODULARITYTIMELINE_PATH . 'source/php/');
$loader->register();

// Acf auto import and export
add_action('plugins_loaded', function () {
    $acfExportManager = new \AcfExportManager\AcfExportManager();
    $acfExportManager->setTextdomain('modularity-timeline');
    $acfExportManager->setExportFolder(MODULARITYTIMELINE_PATH . 'acf-fields/');
    $acfExportManager->autoExport(array(
    	'timeline' => 'group_59ede2f88a7b5'
    ));
    $acfExportManager->import();
});

// Start application
new ModularityTimeline\App();
