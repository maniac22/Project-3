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
 * An event observer.
 *
 * @package    assignfeedback_customfeedback
 * @copyright  2016 Damyon Wiese
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace assignfeedback_customfeedback\event;

require_once('../../config.php');
require_once($CFG->libdir . '/accesslib.php');
require_once($CFG->dirroot . '/mod/assign/locallib.php');
//require_once($CFG->libdir . '/gradelib.php');


/**
 * An event observer.
 * @copyright  2016 Damyon Wiese
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class observer {
    public static function assessable_submitted(\assignsubmission_file\event\assessable_uploaded $event) {
    global $DB;
	// Load assignment details
	$id = $event->contextinstanceid;
	list ($course, $cm) = get_course_and_cm_from_cmid($id, 'assign');
	//die($id);
	$context = \context_module::instance($cm->id);
	$assign = new \assign($context, $cm, $course);
	$plugin = $assign->get_feedback_plugin_by_type("customfeedback");
	if(!$plugin->is_enabled()){
		return;
	}
	$plugin->set_initial_grade($event->get_data()['userid']);
	$plugin->judge($event->get_data()['userid']);
	//$plugin->update_record(0,20,2,1,2,4,100);
	//$data = ["a" => 2];
	//$plugin->post_to_handler($data);
    }
}
