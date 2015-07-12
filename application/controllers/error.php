<?php

/**
 * Agency - a PHP framework for web development
 *
 * @author DavidJotta (https://davidjotta.me)
 * @link https://github.com/DavidJotta/Agency
 * @license The Unlicense <http://unlicense.org>
 */

class Error extends Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    die('<h1>404 Error</h1><br><p>Looks like this page does not exist!</p>');
  }
}
