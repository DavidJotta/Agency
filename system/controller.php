<?php

/**
 * jPHP-Framework 0.2
 * Copyright (C) 2014-2015 David Juan Ahullana
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

abstract class Controller {

  /**
   * Reference to the instance
   */
  private static $instance;

  /**
   * Allow $instance access and the $this->load shortcut
   */
  public function __construct() {
    self::$instance =& $this;
    $this->load =& Loader::$instance;
  }

  /**
   * Get the instance
   */
  public static function &get_instance() {
    return self::$instance;
  }
}
