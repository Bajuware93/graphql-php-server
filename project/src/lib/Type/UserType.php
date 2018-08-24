<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 24.08.2018
 * Time: 11:43
 */

namespace Type;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;

class UserType extends ObjectType {
	public function __construct(){
		$config = [
			'name' => 'User',
			'fields' => function() {
				return [
					'id' => \Types::id(),
					'firstName' => \Types::string(),
					'lastName' => \Types::string(),
				];
			},
		];
		parent::__construct($config);
	} //Constructor
}