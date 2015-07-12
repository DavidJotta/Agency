<?php

/**
 * Agency - a PHP framework for web development
 *
 * @author DavidJotta (https://davidjotta.me)
 * @link https://github.com/DavidJotta/Agency
 * @license The Unlicense <http://unlicense.org>
 */

class Config {

  // MySQL-related settings
  public static $db_host = 'localhost';
  public static $db_user = '';
  public static $db_pass = '';
  public static $db_name = '';
  public static $db_charset = 'utf8';

  // URL-related settings
  public static $base_url = ''; // e.g. http(s)://example.com/

  // Router-related settings
  public static $default_controller = 'home';
  public static $error_controller = 'error';
}
