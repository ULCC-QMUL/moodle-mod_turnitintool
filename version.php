<?php
/**
 * @package   turnitintool
 * @copyright 2012 Turnitin
 */

/* $module syntax unsupported in Moodle 3.0.
 * Use $plugin instead.
 * D Cooper 09/02/2016
 *
if(!isset($module)){
	$module = new stdClass();
}
$module->version  = 2015030305;  // The current module version (Date: YYYYMMDDXX)
$module->component = 'mod_turnitintool';
$module->maturity  = MATURITY_STABLE;
$module->cron     = 1800;        // Period for cron to check this module (secs)
//$module->requires = 2007101509;  // 1.9+
//$module->requires = 2010112400;  // 2.0+
 *
 * End unsupported syntax.
 */

if (!isset($plugin)) {
	$plugin = new StdClass();
}

$plugin->version  = 2016020900;  // The current module version (Date: YYYYMMDDXX)
$plugin->component = 'mod_turnitintool';
$plugin->maturity  = MATURITY_STABLE;
$plugin->cron     = 1800;        // Period for cron to check this module (secs)
//$plugin->requires = 2007101509;  // 1.9+
//$plugin->requires = 2010112400;  // 2.0+

/* ?> */
