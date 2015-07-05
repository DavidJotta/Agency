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

class Config {

  // MySQL-related settings
  public static $db_host = 'localhost';
  public static $db_user = '';
  public static $db_pass = '';
  public static $db_name = '';

  // URL-related settings
  public static $base_url = ''; // e.g. http(s)://example.com/

  // Router-related settings
  public static $default_controller = 'home';
  public static $error_controller = 'error';
}
