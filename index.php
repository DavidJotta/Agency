<?php

/**
 * jPHP-Framework 0.1a
 * 
 * Copyright (C) 2014 David Juan Ahullana
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Start the Session
session_start(); 

// Set the directories
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');
define('SYS_DIR', ROOT_DIR .'system/');

// Load framework core
require(APP_DIR .'config/config.php');
require(SYS_DIR .'model.php');
require(SYS_DIR .'view.php');
require(SYS_DIR .'controller.php');
require(SYS_DIR .'jphp.php');

// Define base URL
global $config;
define('BASE_URL', $config['base_url']);

// And there we go!
jphp();

?>