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

abstract class Controller {

	public function loadModel($name) {
		require(APP_DIR . 'models/' . ucfirst(strtolower($name)) . '.php');
		return new $name;
	}

	public function loadView($name)	{
		return new View($name);
	}

	public function loadHelper($name) {
		require(APP_DIR . 'helpers/' . ucfirst(strtolower($name)) . '.php');
		return new $name;
	}
}
