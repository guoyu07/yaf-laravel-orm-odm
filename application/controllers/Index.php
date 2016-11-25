<?php
/**
 * @name IndexController
 * @author peter
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends Yaf_Controller_Abstract {

	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/blog/index/index/index/name/peter 的时候, 你就会发现不同
     */
	public function indexAction()
	{
        return true;
	}
	public function tagsAction()
	{
		return true;
	}
	public function detailAction()
	{
		return true;
	}
	public function testMongoAction()
	{
		
		$model = new ArticleModel();
		echo '<pre>';
		var_dump( $model->allData() );
		
		return false;
	}
}
