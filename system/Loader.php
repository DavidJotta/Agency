<?php

/**
 * Agency - a PHP framework for web development
 *
 * @author DavidJotta (https://davidjotta.me)
 * @link https://github.com/DavidJotta/Agency
 * @license The Unlicense <http://unlicense.org>
 */

class Loader {

  /**
   * @var Instance of the Loader class
   */
  private static $instance;

  /**
   * Loader class, used to load classes :P
   */
  public function __construct() {
    /**
     * Allow the use of $this->load
     */
     self::$instance = $this;
    /**
     * Load application core classes
     */
     require(APP_DIR . 'config' . DIRECTORY_SEPARATOR . 'Config.php');
     if(Config::$debug) {
       error_reporting(E_ALL);
       ini_set('display_errors', 1);
     }
     require(SYS_DIR . 'Model.php');
     require(SYS_DIR . 'Twig' . DIRECTORY_SEPARATOR . 'Autoloader.php');
     Twig_Autoloader::register();
     require(SYS_DIR . 'View.php');
     require(SYS_DIR . 'Controller.php');
     require(SYS_DIR . 'Session.php');
     require(SYS_DIR . 'Bootstrap.php');
  }

  /**
   * Get the Loader instance object
   */
  public static function &get_instance() {
    return self::$instance;
  }

  /**
   * Load a model, shortcut: $this->load->model()
   */
  public function model($name) {
    require(APP_DIR . 'models' . DIRECTORY_SEPARATOR . ucfirst(strtolower($name)) . '.php');
    return new $name;
  }

  /**
   * Load a view, shortcut: $this->load->view()
   */
  public function view($name)	{
    $instance = Controller::get_instance();
    if(isset($instance->view)) return false;
    $instance->view = '';
    $instance->view =& new View($name);
  }

  /**
   * Load a helper, shortcut: $this->load->helper()
   */
  public function helper($name) {
    require(APP_DIR . 'helpers' . DIRECTORY_SEPARATOR . ucfirst(strtolower($name)) . '.php');
    return new $name;
  }

  /**
   * Load the database, shortcut: $this->load->database()
   */
  public function database() {
    $instance = Controller::get_instance();
    if(isset($instance->db)) return false;
    $instance->db = '';
    $instance->db =& new mysqli(Config::$db_host, Config::$db_user, Config::$db_pass, Config::$db_name);
    $instance->db->set_charset(Config::$db_charset);
  }

  /**
   * Load the session, shortcut: $this->load->session()
   */
  public function session() {
    $instance = Controller::get_instance();
    if(isset($instance->session)) return false;
    $instance->session = '';
    $instance->session =& new Session();
  }
}
