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

class Controller {
	
	public function loadModel($name) {
		require(APP_DIR .'models/'. strtolower($name) .'.php');
		$model = new $name;
		return $model;
	}
	
	public function loadView($name)	{
		$view = new View($name);
		return $view;
	}
	
	public function loadPlugin($name) {
		require(APP_DIR .'plugins/'. strtolower($name) .'.php');
	}
	
	public function loadHelper($name) {
		require(APP_DIR .'helpers/'. strtolower($name) .'.php');
		$helper = new $name;
		return $helper;
	}
	
	public function redirect($loc) {
		global $config;
		header('Location: '. $config['base_url'] . $loc);
	}
}

?>