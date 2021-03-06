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
 *
 * @package   assignfeedback_customfeedback
 * @copyright 2019, Moses Modupi <1614669@student.wits.ac.za>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Competitive Assignment';
$string['enabled'] = 'Competitive Assignment Judge';
$string['enabled_help'] = 'If enabled, the teacher will be able to provide awesome feedback ';

$string['default'] = 'Enabled by default';
$string['default_help'] = 'If set, this feedback method will be enabled by default for all new assignments.';
$string['basepath'] = 'Test Case Path';
$string['basepath_help'] = 'Path to test case folder.';
$string['handler'] = 'Competitive Assignment Handler url address';
$string['handler_help'] = 'Url where the handler is located';
$string['prefix'] = 'Submission File Prefix';
$string['prefix_help'] = 'The prefix all submission files have to follow, limited to 3 characters';
$string['secret'] = 'Secret';
$string['secret_help'] = 'Secret authentication token that markers should use.';
$string['languages'] = 'Available Languages';
$string['languages_help'] = 'Comma separated list of supported languages';
$string['maxquestions'] = 'Maximum number of Questions';
$string['maxquestions_help'] = 'Input the maximum number of questions a competitve assignment is allowed to have';
$string['maximumtestcasesize'] = 'Maximum test case size';
$string['maximumtestcasesize_help'] = 'Files uploaded by teachers as test cases may be up to this size.';
$string['configmaxbytes'] = 'Maximum file size';
$string['leaderboardsite'] = 'Leaderboard Site';
$string['leaderboardsite_help'] = 'Url for the site where the full leaderboard is hosted';

//form lang strings
$string['assign_mode'] = 'Assignment Mode';
$string['assign_mode_help'] = 'The competition mode recognised by the backend marker';

$string['language'] = 'Programming Language';
$string['language_help'] = 'Programming Language recognised by the marking backend.';

$string['eval_language'] = 'Evaluator Language';
$string['eval_language_help'] = 'Evaluator Language recognised by the marking backend.';

$string['numQuestions'] = 'Number of Questions';
$string['numQuestions_help'] = 'The number of questions this assignment has.';

$string['ordering'] = "Order";
$string['ordering_help'] = "In which order the leaderboard will be in?";

$string['reruns'] = 'Number of Reruns';
$string['reruns_help'] = 'The number of times code for time based assignments is going to be ran in determining the score.';

$string['scoreunits'] = 'Score Units';
$string['scoreunits_help'] = 'The assessment point system';

$string['question'] = 'Question';

$string['timelimit'] = 'Time Limit';
$string['timelimit_help'] = 'Maximum time (in seconds) the student submissions are allowed to run.';

$string['memorylimit'] = 'Memory Limit';
$string['memorylimit_help'] = 'Maximum memory the student submissions are allowed to use.';

$string['test_cases'] = 'Test Cases';
$string['test_cases_help'] = 'Upload the test case zip file here.';

$string['default_score'] = 'Default Score';
$string['default_score_help'] = 'Default score for an unsubmitted or incorrect solution to a question.';

$string['autograding_option'] = 'Autograding Option';
$string['autograding_option_help'] = 'Toggle autograding on or off';

$string['autograding_cron'] = 'Autograding Cron';
$string['autograding_cron_help'] = 'Specify how often autograding occurs intervals';

$string['autograde_script'] = 'Autograding Script';
$string['autograde_script_help'] = 'Python script for autograding';

$string['rejudge_option'] = 'Rejudge Option';
$string['rejudge_option_help'] = 'Toggle Rejudge on saving settings on and off. This rejudges all submissions that have been made for the assignment';

$string['jugde_nochange'] = 'Judge Unchanged Submissions';
$string['jugde_nochange_help'] = 'Choose whether to judge Unchanged submissions or not';

