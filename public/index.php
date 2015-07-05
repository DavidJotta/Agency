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

/**
 * Defining the paths of the application
 * -------------------------------------
 * Basically, you can tune these settings to fit your directory tree,
 * but make sure they are all readable!
 */
 define('ROOT_DIR', realpath(dirname(__FILE__)) . '/');
 define('APP_DIR', ROOT_DIR . '../application/');
 define('SYS_DIR', ROOT_DIR . '../system/');

/**
 * Call the application loader
 * ---------------------------
 * The next step is loading all the application classes and stuff,
 * like Controller, View and Model classes, loading plugins, etc.
 */
 require(SYS_DIR . 'Loader.php');

/**
 * And away we go!
 * ---------------
 * So jPHP has been initialized successfully.. now let's show something
 * awesome to the user! :D
 */
 init();
