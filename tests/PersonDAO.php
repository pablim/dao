<?php
namespace pablovf\model\tests;

use \PDO;

use model\Connection;
use pablovf\model\DAO;
use pablovf\model\tests\Pessoa;

class PersonDAO extends DAO {

	function __construct() {
		parent::__construct(Person::class);
	}

}
