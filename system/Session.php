<?php

/**
 * Agency - a PHP framework for web development
 *
 * @author DavidJotta (https://davidjotta.me)
 * @link https://github.com/DavidJotta/Agency
 * @license The Unlicense <http://unlicense.org>
 */

class Session {

  /**
   * @var Instance of the Session class
   */
  private static $instance;

  /**
   * Session class, used to manage $_SESSION
   */
  public function __construct() {
    /**
     * Allow the use of $this->session
     */
     self::$instance = $this;
    /**
     * Start the session
     */
     session_start();
  }

  /**
   * Get the Loader instance object
   */
  public static function &get_instance() {
    return self::$instance;
  }

  /**
   * Set a session variable
   */
  public function set($key, $value) {
    $_SESSION[$key] = $value;
  }

  /**
   * Get a session variable
   */
  public function get($key) {
    return $_SESSION[$key];
  }

  /**
   * Destroy a session
   */
  public function destroy() {
    session_destroy();
  }
}
