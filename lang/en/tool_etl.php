<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Lang strings.
 *
 * @package    tool_etl
 * @copyright  2017 Dmitrii Metelkin <dmitriim@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'Extract, transform, load (ETL)';
$string['privacy:metadata'] = 'Extract, transform, load (ETL) plugin does not store any personal data.';
$string['edit_breadcrumb'] = 'Edit task';
$string['create_breadcrumb'] = 'Create task';
$string['delete_breadcrumb'] = 'Delete task';
$string['edit_heading'] = 'Edit task #{$a}';
$string['create_heading'] = 'Create a new task';
$string['delete_heading'] = 'Delete task';
$string['delete_confirm'] = 'Are you sure you want to delete Task with ID {$a}?';
$string['schedule'] = 'Schedule';
$string['scheduledaily'] = 'Daily';
$string['scheduleddaily'] = 'Daily at {$a}';
$string['scheduledhourly'] = 'Every {$a} hour(s) from midnight';
$string['scheduledminutely'] = 'Every {$a} minute(s) from the start of the hour';
$string['scheduledmonthly'] = 'Monthly on the {$a}';
$string['scheduledweekly'] = 'Weekly on {$a}';
$string['schedulehourly'] = 'Every X hours';
$string['scheduleminutely'] = 'Every X minutes';
$string['schedulemonthly'] = 'Monthly';
$string['scheduleweekly'] = 'Weekly';
$string['dailyat'] = 'Daily at';
$string['weeklyon'] = 'Weekly on';
$string['monthlyon'] = 'Monthly on';
$string['hourlyon'] = 'Hourly on';
$string['minutelyon'] = 'Minutely on';
$string['historynav'] = 'Run history';
$string['historyheader'] = 'Run history';
$string['enabled'] = 'Enabled?';
$string['source'] = 'Source';
$string['selsource'] = 'Select source';
$string['target'] = 'Target';
$string['seltarget'] = 'Select target';
$string['processor'] = 'Processor';
$string['selprocessor'] = 'Select processor';
$string['schedule'] = 'Schedule';
$string['runid'] = 'Run number';
$string['taskid'] = 'Task';
$string['logtype'] = 'Status';
$string['taskelement'] = 'Element';
$string['elementaction'] = 'Action';
$string['choose'] = 'Choose ...';
$string['trace'] = 'Trace';
$string['viewhistory'] = 'View task history';
$string['filters'] = 'Filters';
$string['status'] = 'Status';
$string['regex_error_too_short'] = 'RegEx too short';
$string['regex_error_malformed'] = 'Invalid (malformed) RegEx';
$string['subplugintype_etl'] = 'ETL step set';
$string['subplugintype_etl_plural'] = 'ETL step sets';
$string['eventloggingsucceed'] = 'ETL Tool log record added';
$string['eventloggingfailed'] = 'Failed to add ETL Tool log record';
$string['address_empty'] = 'URL address could not be empty';
$string['address_not_url'] = 'This file cannot be downloaded';
