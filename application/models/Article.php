<?php
	
	/**
	 * Created by PhpStorm.
	 * User: peter
	 * Date: 2016/11/25
	 * Time: 22:47
	 */
	class ArticleModel extends MongoDB
	{
		protected   $table      = 'article';
		//protected   $primaryKey = 'id';
		
		
		public function allData()
		{
			
			
			//return DB::connection( 'article')->insert( ['id'=>,'name' =>'Peter','age'=>25]);
			//return $this->save(['name' =>'Peter','age'=>25]);
			return $this->getConnection();
		}
		
	}