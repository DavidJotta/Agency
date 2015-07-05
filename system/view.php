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

class View {

	private $pageVars = array();
	private $template;

	public function __construct($template) {
		$this->template = APP_DIR . 'views/' . $template . '.php';
	}

	public function set($var, $val) {
		$this->pageVars[$var] = $val;
	}

	public function render() {
		extract($this->pageVars);
		ob_start();
		require($this->template);
		echo ob_get_clean();
	}
}
