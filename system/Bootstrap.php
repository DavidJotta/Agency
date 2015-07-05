<?php

/**
 * jPHP-Framework 0.2
 * Copyright (C) 2014-2015 David Juan Ahullana
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

class Bootstrap {

  function init() {
    // Set our defaults
    $controller = Config::$default_controller;
    $action = 'index';
    $url = '';
  	// Get request url and script url
  	$request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
  	$script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
    // If it is a CRON job, then use the CLI arguments as the URL
    // Format like "php /path/to/index.php /controller/action"
    if(!request_url && isset($_SERVER['SHELL']) && isset($_SERVER['argv']) && isset($_SERVER['argv'][1])) $request_url = $_SERVER['argv'][1];
  	// Get our url path and trim the / of the left and the right
  	if($request_url != $script_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');
  	// Split the url into segments
  	$segments = explode('/', $url);
  	// Do our default checks
  	if (isset($segments[0]) && $segments[0] != '') $controller = $segments[0];
  	if (isset($segments[1]) && $segments[1] != '') $action = $segments[1];
  	// Get our controller file
    $path = APP_DIR . 'controllers/' . $controller . '.php';
  	if (file_exists($path)) require_once($path);
  	else {
      $controller = Config::$error_controller;
      require_once(APP_DIR . 'controllers/' . $controller . '.php');
  	}
    // Check the action exists
    if(!method_exists($controller, $action)){
      $controller = Config::$default_controller;
      require_once(APP_DIR . 'controllers/' . $controller . '.php');
      $index = 'index';
    }
  	// Create object and call method
  	$obj = new $controller;
    die(call_user_func_array(array($obj, $action), array_slice($segments, 2)));
  }
}
