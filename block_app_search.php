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

  class block_app_search extends block_base 
  {
      function init() 
      {
          $this->title = get_string('pluginname', 'block_app_search');
          $this->blockConfigs = get_config('block_app_search');
      }

      function get_content() 
      {
          global $CFG, $USER;

          if($this->content !== NULL) {
              return $this->content;
          }
        
          $this->content = new stdClass;
          $this->content->footer = '';
          
          $html = '<form method="get" action="http://0-search.ebscohost.com.wncln.wncln.org/login.aspx" id="appsearch-form-1">
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
          if (!empty($CFG->block_app_search_html)) {
            $html= $CFG->block_app_search_html;
          }
          $this->content->text = $html; 
          return $this->content;
      }
      
      /**
       * Override
       * @see block_base::has_config()
       */
      function has_config()
      {
          return true;
      }
  }
