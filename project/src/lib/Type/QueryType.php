<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 24.08.2018
 * Time: 11:44
 */

namespace Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Types;
use Data\DataSource;

class QueryType extends ObjectType {

	public function __construct() {
		$config = [
			'name'   => 'Query',
			'fields' => [
				'user' => [
					'type' => Types::user(),
					'description' => 'Returns user by id (in range of 1-5)',
					'args' => [
						'id' => Types::nonNull(Types::id())
					]
				],
				'pet' => [
					'type' => Types::pet(),
					'args' => [
						'name' => Types::nonNull(Types::string())
					]
				],
				'getFriend' => [
					'type' => Types::friend(),
					'args' => [
						'name' => Types::nonNull(Types::string())
					]
				],
			],
			'resolveField' => function($val, $args, $context, ResolveInfo $info) {
				return $this->{$info->fieldName}($val, $args, $context, $info);
			}
		];
		parent::__construct($config);
	}

	public function user($rootValue, $args)
	{
		return DataSource::findUser($args['id']);
	}

	public function pet($rootValue, $args)
	{
		return DataSource::findPet( $args['name']);
	}

	public function getFriend($rootValue, $args)
	{
		return DataSource::findFriend( $args['name']);
	}
}