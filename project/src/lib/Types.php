<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 24.08.2018
 * Time: 11:37
 */
require_once __DIR__ .'/type/querytype.php';
require_once __DIR__ .'/type/usertype.php';
require_once __DIR__ .'/type/pettype.php';
require_once __DIR__ .'/type/friendtype.php';

use GraphQL\Type\Definition\ListOfType;
use GraphQL\Type\Definition\NonNull;
use GraphQL\Type\Definition\Type;
use Type\UserType;
use Type\QueryType;
use Type\PetType;
use Type\FriendType;


class Types {
	private static $user;
	private static $pet;
	private static $query;
	private static $friend;

	/**
	 * @return UserType
	 */
	public static function user()
	{
		return self::$user ?: (self::$user = new UserType());
	}

	public static function pet()
	{
		return self::$pet ?: (self::$pet = new PetType());
	}

	public static function friend()
	{
		return self::$friend ?: (self::$friend = new FriendType());
	}

	public static function query()
	{
		return self::$query ?: (self::$query = new QueryType() );
	}

	public static function id()
	{
		return Type::id();
	}

	public static function nonNull($type)
	{
		return new NonNull($type);
	}

	public static function string()
	{
		return Type::string();
	}

}