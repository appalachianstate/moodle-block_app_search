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
   * APPsearch block plugin
   *
   * @package    block_app_search
   * @author     Michelle Melton 
   * @copyright  2015 Appalachian State University
   * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
   */

  defined('MOODLE_INTERNAL') || die;

  if ($ADMIN->fulltree) {
  
    $settings->add(new admin_setting_configtextarea('block_app_search_html', get_string('app_search_html', 'block_app_search'), get_string('app_search_html_desc', 'block_app_search'), get_string('app_search_html_default', 'block_app_search'), PARAM_RAW));
  }
