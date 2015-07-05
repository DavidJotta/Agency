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

class Model {

	private $connection;

	public function __construct() {
		$this->connection = mysql_pconnect(Config::$db_host, Config::$db_user, Config::$db_pass) or die('Could not connect to DB!');
		mysql_select_db(Config::$db_name, $this->connection);
	}

	public function escapeString($string) {
		return mysql_real_escape_string($string);
	}

	public function escapeArray($array) {
    array_walk_recursive($array, create_function('&$v', '$v = mysql_real_escape_string($v);'));
		return $array;
	}

	public function to_bool($val) {
    return !!$val;
	}

	public function to_date($val) {
    return date('Y-m-d', $val);
	}

	public function to_time($val) {
    return date('H:i:s', $val);
	}

	public function to_datetime($val) {
    return date('Y-m-d H:i:s', $val);
	}

	public function query($qry) {
		$result = mysql_query($qry) or die('MySQL Error: '. mysql_error());
		$resultObjects = array();
		while($row = mysql_fetch_object($result)) $resultObjects[] = $row;
		return $resultObjects;
	}

	public function execute($qry) {
		$exec = mysql_query($qry) or die('MySQL Error: '. mysql_error());
		return $exec;
	}
}
