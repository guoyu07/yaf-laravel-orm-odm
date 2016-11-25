<?php
	
	/**
	 * Created by PhpStorm.
	 * User: peter
	 * Date: 2016/11/25
	 * Time: 22:47
	 */
	class ArticleModel extends MongoDB
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		
		public function allData()
		{
			return $this->getConnection();
		}
		
	}