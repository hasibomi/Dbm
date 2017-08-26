<?php

namespace Hasibomi\Dbm;

use Hasibomi\Dbm\Exceptions\CouldnotConnectException;

class Dbm {
	protected $db_host;
	protected $db_user;
	protected $db_password;
	protected $db_name;

	public function __construct($db_host, $db_user, $db_password, $db_name)
	{
		$this->db_host = $db_host;
		$this->db_user = $db_user;
		$this->db_password = $db_password;
		$this->db_name = $db_name;

		try {
			$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
		} catch (CouldnotConnectException $e) {
			$e->getMessage();
		}
	}
}
