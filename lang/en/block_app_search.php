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

  $string['pluginname'] = 'APPsearch';
  
  $string['app_search'] = 'APPsearch';
  $string['app_search:addinstance'] = 'Add a new APPsearch block';
  $string['app_search:myaddinstance'] = 'Add a new APPsearch block to the My Moodle page';
  $string['app_search_settings'] = 'APPsearch settings';
  $string['app_search_html'] = 'HTML';
  $string['app_search_html_desc'] = 'Enter the HTML for the APPsearch block.';
  $string['app_search_html_default'] = '<form method="get" action="http://0-search.ebscohost.com.wncln.wncln.org/login.aspx" id="appsearch-form-1">
                                        <input name="direct" value="true" type="hidden" /> 
                                        <input name="site" value="eds-live" type="hidden" /> 
                                        <input name="scope" value="site" type="hidden" /> 
                                        <input name="group" value="main" type="hidden" /> 
                                        <input name="profile" value="eds" type="hidden" /> 
                                        <input name="authtype" value="cookie,ip,uid" type="hidden" /> 
                                        <input title="Search for books, journal articles, media, etc." name="bQuery" class="form-text" type="text" placeholder="Search for books, journal articles, media, etc." size="20" /> 
                                        <input type="submit" value="Search" />
                                        </form>
                                        <p><img src="/blocks/app_search/pix/app-search.png" alt="APPsearch logo" width="200" height="38" /></p>
                                        <p><a href="http://library.appstate.edu/appsearch">What is APPsearch?</a></p>';
