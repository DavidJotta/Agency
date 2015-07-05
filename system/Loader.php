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

class Loader {

  public static $instance;

  function __construct() {
    /**
     * Allow the access to $instance
     */
     self::$instance = $this;
    /**
     * Include application classes and stuff
     */
     require(APP_DIR . 'config/Config.php');
     require(SYS_DIR . 'Model.php');
     require(SYS_DIR . 'View.php');
     require(SYS_DIR . 'Controller.php');
     require(SYS_DIR . 'Bootstrap.php');
  }

  function model($name) {
		require(APP_DIR . 'models/' . ucfirst(strtolower($name)) . '.php');
		return new $name;
	}

	function view($name)	{
		return new View($name);
	}

	function helper($name) {
		require(APP_DIR . 'helpers/' . ucfirst(strtolower($name)) . '.php');
		return new $name;
	}

  function database() {
    $instance = Controller::get_instance();
    if(isset($instance->db)) return false;
    $instance->db = '';
    $instance->db =& new mysqli(Config::$db_host, Config::$db_user, Config::$db_pass, Config::$db_name);
    $instance->db->set_charset(Config::$db_charset);
  }
}
