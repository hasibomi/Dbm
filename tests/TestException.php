<?php require __DIR__ . "/../vendor/autoload.php";

use Hasibomi\Dbm\Exceptions\CouldnotConnectException;

class TestException {
	public function __construct($value = "root")
	{
		switch ($value) {
			case "nazmul" :
				throw new CouldnotConnectException("Nazmul is not a user");
				break;
			case "ab" :
				throw new CouldnotConnectException("Ab is a client");
				break;
		}
	}
}

try {
	$value = new TestException("ab");
} catch (CouldnotConnectException $e) {
	echo "Caught My exception\n", $e;
} catch (Exception $e) {
	echo "Caught Default Exception\n", $e;
}
