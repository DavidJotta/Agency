<?php

/**
 * jPHP-Framework 0.1a
 * 
 * Copyright (C) 2014 David Juan Ahullana
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
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
		global $config;
		$this->connection = mysql_pconnect($config['db_host'], $config['db_username'], $config['db_password']) or die('MySQL Error: '. mysql_error());
		mysql_select_db($config['db_name'], $this->connection);
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

?>