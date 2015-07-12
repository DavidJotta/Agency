<?php

/**
 * Agency - a PHP framework for web development
 *
 * @author DavidJotta (https://davidjotta.me)
 * @link https://github.com/DavidJotta/Agency
 * @license The Unlicense <http://unlicense.org>
 */

class Bootstrap {

  /**
   * @var The controller
   */
  private $controller = null;

  /**
   * @var The method, also called "action"
   */
  private $action = null;

  /**
   * @var The URL parameters
   */
  private $params = array();

  /**
   * Application bootstrap: analyze URL elements and route calls!
   */
  public function __construct() {
    // Split URL
    $this->splitUrl();
    // Check controller and method existance
    if(!$this->controller) $this->controller = Config::$default_controller;
    if(!file_exists(APP_DIR . 'controllers/' . $this->controller . '.php')) $this->controller = Config::$error_controller;
    if(!method_exists($this->controller, $this->action)) $this->action = 'index';
    // Load controller
    require_once(APP_DIR . 'controllers/' . $this->controller . '.php');
    // Create object and call method
    $this->controller = new $this->controller();
    die(call_user_func_array(array($this->controller, $this->action), $this->params));
  }

  /**
   * Get and split the URL into controller, action and parameters
   */
  private function splitUrl() {
    $request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
    $script_url = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
    // CRON format like "php /path/to/index.php /controller/action"
    if(!$request_url && isset($_SERVER['SHELL']) && isset($_SERVER['argv']) && isset($_SERVER['argv'][1])) $request_url = $_SERVER['argv'][1];
    if($request_url != $script_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');
    $segments = explode('/', $url);
    if(isset($segments[0]) && !empty($segments[0])) $this->controller = $segments[0];
    if(isset($segments[1]) && !empty($segments[1])) $this->action = $segments[1];
    unset($segments[0], $segments[1]);
    $this->params = array_values($segments);
  }
}
