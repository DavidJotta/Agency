<?php

/**
 * Agency - a PHP framework for web development
 *
 * @author DavidJotta (https://davidjotta.me)
 * @link https://github.com/DavidJotta/Agency
 * @license The Unlicense <http://unlicense.org>
 */

/**
 * Defining the paths of the application
 * -------------------------------------
 * Basically, you can tune these settings to fit your directory tree,
 * but make sure they are all readable!
 */
 define('ROOT_DIR', dirname(__DIR__) . DIRECTORY_SEPARATOR);
 define('SYS_DIR', ROOT_DIR . 'system' . DIRECTORY_SEPARATOR);
 define('APP_DIR', ROOT_DIR . 'application' . DIRECTORY_SEPARATOR);
 define('PUBLIC_DIR', __DIR__ . DIRECTORY_SEPARATOR);

/**
 * Call the application loader
 * ---------------------------
 * The next step is loading all the application classes and stuff,
 * like Controller, View and Model classes, helpers, etc.
 */
 require(SYS_DIR . 'Loader.php');
 $loader = new Loader();

/**
 * And away we go!
 * ---------------
 * So jPHP has been initialized successfully.. now let's show something
 * awesome to the user! :D
 */
 $app = new Bootstrap();
 $app->init();
