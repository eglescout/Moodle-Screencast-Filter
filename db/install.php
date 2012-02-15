<?php
// This file is part of Moodle-Screencast-Filter
//
// Moodle-Screencast-Filter is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle-Screencast-Filter is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Install function for component 'filter_screencast'
 *
 * @package   filter_screencast
 * @copyright 2012 Mark Schall, TechSmith Corporation (link: http://techsmith.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function xmldb_filter_screencast_install() {
    global $CFG;

    filter_set_global_state('filter/screencast', TEXTFILTER_ON);
}

