<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 24.08.2018
 * Time: 14:51
 */

namespace Data;

use GraphQL\Utils\Utils;

class Friend {

	public $name;
	public $alter;

	public function __construct(array $data) {
		Utils::assign($this, $data);
	}
}