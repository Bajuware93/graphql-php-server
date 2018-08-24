<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 24.08.2018
 * Time: 14:17
 */

namespace Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use Types;

class PetType extends ObjectType {
	public function __construct(){
		$config = [
			'name' => 'PET',
			'fields' => [
				'name' => [
					'type' => Types::string(),
				],
				'tier' => [
					'type' => Types::string(),
				]
			]
		];
		parent::__construct($config);
	}
}