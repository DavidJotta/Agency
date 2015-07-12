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
     * Load Twig Engine!
     */
     $this->engine = new Twig_Environment(new Twig_Loader_Filesystem(APP_DIR . 'views'), array('cache' => APP_DIR . 'cache'));
    /**
     * Load page template
     */
     $this->template = $template . '.html';
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
  public function assign($key, $value) {
    $this->pageVars[$key] = $value;
  }

  /**
   * Render view template
   */
  public function render() {
    echo $this->engine->render($this->template, $this->pageVars);
  }
}
