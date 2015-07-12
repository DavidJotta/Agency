<?php

/**
 * Agency - a PHP framework for web development
 *
 * @author DavidJotta (https://davidjotta.me)
 * @link https://github.com/DavidJotta/Agency
 * @license The Unlicense <http://unlicense.org>
 */

class View {

  /**
   * @var Instance of the View class
   */
  private static $instance;

  /**
   * @var Store page variables
   */
  private $pageVars = array();

  /**
   * @var Store template name
   */
  private $template;

  /**
   * View class, used to handle views :P
   */
  public function __construct($template) {
    /**
     * Allow the use of $this->view
     */
     self::$instance = $this;
    /**
     * Load page template
     */
     $this->template = APP_DIR . 'views' . DIRECTORY_SEPARATOR . $template . '.php';
  }

  /**
   * Get the View instance object
   */
  public static function &get_instance() {
    return self::$instance;
  }

  /**
   * Set a variable for the view template
   */
  public function assign($var, $val) {
    $this->pageVars[$var] = $val;
  }

  /**
   * Render view template
   */
  public function render() {
    extract($this->pageVars);
    ob_start();
    require($this->template);
    echo ob_get_clean();
  }
}
