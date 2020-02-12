<?php

namespace core;

use core\Db;

abstract class Model {

	public $db;
	
	public function __construct() {
		$this->db = new Db;
	}

}