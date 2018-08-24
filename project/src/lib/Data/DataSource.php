<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 24.08.2018
 * Time: 11:34
 */

namespace Data;
require_once 'user.php';
require_once 'pet.php';
require_once 'friend.php';
class DataSource {
	private static $users = [];
	private static $pets = [];
	private static $friends = [];

	public static function init() {
		self::$users = [
			'1' => new User([
				'id' => '1',
				'email' => 'john@example.com',
				'firstName' => 'John',
				'lastName' => 'Doe'
			]),
			'2' => new User([
				'id' => '2',
				'email' => 'jane@example.com',
				'firstName' => 'Jane',
				'lastName' => 'Doe'
			]),
			'3' => new User([
				'id' => '3',
				'email' => 'john@example.com',
				'firstName' => 'John',
				'lastName' => 'Doe'
			]),
		];

		self::$pets = [
			new Pet([
				'name' => 'Bello',
				'tier' => 'Hund',
			]),
			new	Pet([
				'name' => 'Susi',
				'tier' => 'Hamster',
			]),
		];

		self::$friends = [
			new Friend([
				'name' => 'Lilly',
				'alter' => '24',
			]),
			new Friend([
				'name' => 'Timo',
				'alter' => '25',
			]),
			new Friend([
				'name' => 'Erwin',
				'alter' => '99',
			]),
		];
	}

	public static function findUser($id)
	{
		return isset(self::$users[$id]) ? self::$users[$id] : null;
	}

	public static function findPet($name)
	{
		foreach( self::$pets as $pet ) {
			if ( $pet->name === $name ){
				return $pet;
			}
		}
		return null;
	}

	public static function findFriend($name)
	{
		foreach( self::$friends as $friend ) {
			if ( $friend->name === $name ){
				return $friend;
			}
		}
		return null;
	}
}