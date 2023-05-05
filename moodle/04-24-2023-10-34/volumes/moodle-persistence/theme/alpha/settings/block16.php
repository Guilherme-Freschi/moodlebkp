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
 * @package   theme_alpha
 * @copyright 2022 Marcin Czaja (https://rosea.io)
 * @license   Commercial https://themeforest.net/licenses
 *
 */


defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_alpha_block16', get_string('settingsblock16', 'theme_alpha'));

          $name = 'theme_alpha/displayblock16';
          $title = get_string('turnon', 'theme_alpha');
          $description = get_string('displayblock16_desc', 'theme_alpha');
          $default = 0;
          $setting = new admin_setting_configcheckbox($name, $title . '<span class="badge badge-sq badge-dark ml-2">Block #16</span>', $description, $default);
          $page->add($setting);

          $name = 'theme_alpha/displayhrblock16';
          $title = get_string('displayblockhr', 'theme_alpha');
          $description = get_string('displayblockhr_desc', 'theme_alpha');
          $default = 1;
          $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
          $page->add($setting);

          $name = 'theme_alpha/block16class';
          $title = get_string('additionalclass', 'theme_alpha');
          $description = get_string('additionalclass_desc', 'theme_alpha');
          $default = '';
          $setting = new admin_setting_configtext($name, $title, $description, $default);
          $page->add($setting);

          $name = 'theme_alpha/block16introtitle';
          $title = get_string('blockintrotitle', 'theme_alpha');
          $description = get_string('blockintrotitle_desc', 'theme_alpha');
          $default = '';
          $setting = new admin_setting_configtextarea($name, $title, $description, $default);
          $page->add($setting);

          $name = 'theme_alpha/block16introcontent';
          $title = get_string('blockintrocontent', 'theme_alpha');
          $description = get_string('blockintrocontent_desc', 'theme_alpha');
          $default = '';
          $setting = new admin_setting_configtextarea($name, $title, $description, $default);
          $page->add($setting);

          $name = 'theme_alpha/block16htmlcontent';
          $title = get_string('blockhtmlcontent', 'theme_alpha');
          $description = get_string('blockhtmlcontent_desc', 'theme_alpha');
          $default = '<div class="wrapper-md text-center">
          <p class="rui-block-text--light rui-block-text--3 mt-3">Trusted by hundreds of customers</p>
      
          <div class="row justify-content-center align-items-center">
              <div class="col-auto col-sm py-3 text-center">
                  <img src="https://assets.rosea.io/demofiles/alpha/block16/logo-1.png" alt="Logo" width="106" height="60" class="atto_image_button_middle">
              </div>
              <!-- End Col -->
      
              <div class="col-auto col-sm py-3 text-center">
                  <img src="https://assets.rosea.io/demofiles/alpha/block16/logo-2.png" alt="Logo" width="206" height="80" class="img-fluid atto_image_button_middle">
              </div>
              <!-- End Col -->
      
              <div class="col-auto col-sm py-3 text-center">
                  <img src="https://assets.rosea.io/demofiles/alpha/block16/logo-3.png" alt="Logo" width="69" height="80" class="atto_image_button_middle">
              </div>
              <!-- End Col -->
      
              <div class="col-auto col-sm py-3 text-center">
                  <img src="https://assets.rosea.io/demofiles/alpha/block16/logo-4.png" alt="Logo" width="120" height="25" class="img-fluid atto_image_button_middle">
              </div>
              <!-- End Col -->
      
              <div class="col-auto col-sm py-3 text-center">
                  <img src="https://assets.rosea.io/demofiles/alpha/block16/logo-5.png" alt="Logo" width="96" height="80" class="img-fluid atto_image_button_middle">
              </div>
              <!-- End Col -->
          </div>
          <!-- End Row -->
          <p class="rui-block-text--1 mt-3">Completely redesigned user interface. Better UX. In-build dark mode. <br>All Moodle 4.0 features! Optimized - 50% less CSS...</p>
          <div class="d-flex mt-4 justify-content-center w-100"><a href="https://themeforest.net/item/space-moodle-template/22579922" class="m-2 btn btn-lg btn-dark" target="_blank">Get this theme for $99*</a><a href="https://rosea.gitbook.io/space-moodle-theme/" class="m-2 btn btn-lg btn-secondary" target="_blank">Documentation</a></div>
          <hr class="hr-small">
          <p class="rui-block-text--3 mt-3">The theme is not compatible with older Alpha versions. You have to set up the front page from scratch.<front page!--="" start="" .badge="" --="">
              </front>
          </p>
          <div class="badge badge-primary mt-2">Alpha 2.0 is there! Only for Moodle 4.0</div>
          <!-- end .badge -->
      </div><!-- end .wrapper-md -->';
          $setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
          $page->add($setting);

          $name = 'theme_alpha/block16footercontent';
          $title = get_string('blockfootercontent', 'theme_alpha');
          $description = get_string('blockfootercontent_desc', 'theme_alpha');
          $default = '';
          $setting = new admin_setting_configtextarea($name, $title, $description, $default);
          $page->add($setting);

$settings->add($page);
