<?php

/**
 * Agency - a PHP framework for web development
 *
 * @author DavidJotta (https://davidjotta.me)
 * @link https://github.com/DavidJotta/Agency
 * @license The Unlicense <http://unlicense.org>
 */

class Home extends Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $this->load->view('home');
    $this->view->render();
  }
}
