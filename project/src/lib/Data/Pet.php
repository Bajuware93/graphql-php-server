<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 24.08.2018
 * Time: 14:12
 */

namespace Data;

use GraphQL\Utils\Utils;

class Pet{
	public $name;
	public $tier;

	public function __construct(array $data) {
		Utils::assign($this, $data);
	}
}