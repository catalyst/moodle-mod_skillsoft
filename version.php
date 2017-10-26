<?php
/*
 * @package		mod-skillsoft
 * @author		$Author$
 * @version		SVN: $Header$
 * @copyright	2009-2014 Martin Holden
 * @license		http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version  = 20171001001;  // Extra digit added to the version at 20160832301 accidentally.
$plugin->requires = 2014051200;  // Requires this Moodle version (2.7)
$plugin->cron     = 60;           // Period for cron to check this module (secs)
$plugin->component = 'mod_skillsoft'; // Full name of the plugin (used for diagnostics)
$plugin->maturity = MATURITY_STABLE;