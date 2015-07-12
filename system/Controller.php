<?php

/**
 * Agency - a PHP framework for web development
 *
 * @author DavidJotta (https://davidjotta.me)
 * @link https://github.com/DavidJotta/Agency
 * @license The Unlicense <http://unlicense.org>
 */

abstract class Controller {

  /**
   * @var Instance of the Controller class
   */
  private static $instance;

  /**
   * Allow $instance access and the $this->load shortcut
   */
  public function __construct() {
    self::$instance =& $this;
    $this->load =& Loader::get_instance();
  }

  /**
   * Get the instance
   */
  public static function &get_instance() {
    return self::$instance;
  }
}
