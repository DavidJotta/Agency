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

// Base URL including trailing slash (e.g. http(s)://localhost/)
$config['base_url'] = '';

// Default controller to load (it should exist in /application/controllers)
$config['default_controller'] = 'home';

// Controller used for errors (e.g. 404, 500...)
$config['error_controller'] = 'error';

// Database settings (useless, as long as you don't use Models)
$config['db_host'] = 'localhost';
$config['db_name'] = '';
$config['db_username'] = '';
$config['db_password'] = '';

?>