<?php
	
	/**
	 * Created by PhpStorm.
	 * User: peter
	 * Date: 2016/11/25
	 * Time: 14:33
	 */
	class MysqlDemoModel extends MysqlDB
	{
		private static $_table;
		
		public static function demo()
		{
			return self::$_table = new self();
		}
		
	}