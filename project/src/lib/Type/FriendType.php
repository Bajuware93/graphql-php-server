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

class FriendType extends ObjectType {
	public function __construct(){
		$config = [
			'name' => 'getFriend',
			'fields' => function() {
				return [
					'name' => \Types::string(),
					'alter' => \Types::string(),
				];
			},
		];
		parent::__construct($config);
	} //Constructor
}