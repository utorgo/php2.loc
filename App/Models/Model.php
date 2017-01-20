<?php

namespace App\Models;

abstract class Model
{
	const TABLE = '';
	
	public $id;
	
	public function isNew()
	{
		return empty($this->id);
	}

	public static function findAll()
	{
		$db = \App\Db::instance();

		return $db->query(
				'SELECT * FROM ' . static::TABLE, //self::TABLE, //self::$table,
				static::class //self::class //'App\Models\User'				
				);
	}

	public static function findById($id='0')
	{
		$db = \App\Db::instance();

		return $db->query(
				"SELECT * FROM " . static::TABLE ." WHERE id=:id", //self::TABLE, //self::$table,
				static::class, //self::class //'App\Models\User'
				[':id' => $id]
				);
	}
	
	public function insert()
	{
		if(!$this->isNew())
		{
			return ;
		}
		
		$columns = [];
		$values = [];
		
		foreach ($this as $k => $v){
			
			if('id' == $k){
				continue;
			}
			
			$columns[] = $k;
			$values[':'.$k] = $v;
		}
		
		$db = \App\Db::instance();		
		$query = 'INSERT INTO ' . static::TABLE . ' ('. implode(', ', $columns) .') VALUES ('. implode(' ,', array_keys($values)) .')';
		//echo $db->lastInsertId();
		return $db->execute($query, $values);		
		
	}
}