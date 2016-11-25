<?php
	
	/**
	 * Created by PhpStorm.
	 * User: peter
	 * Date: 2016/11/25
	 * Time: 13:13
	 */
	use Jenssegers\Mongodb\Eloquent\HybridRelations;
	use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
	class MysqlDB extends Eloquent
	{
		use HybridRelations;
		protected $connection = 'mysql';
	}