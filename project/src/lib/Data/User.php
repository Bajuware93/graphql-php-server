<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 24.08.2018
 * Time: 11:31
 */

namespace Data;

use GraphQL\Utils\Utils;

class User {

	public $id;
	public $email;
	public $firstName;
	public $lastName;

	public function __construct(array $data) {
		Utils::assign($this, $data);
	}
}