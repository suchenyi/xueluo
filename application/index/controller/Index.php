<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\model\User as UserModel;
class Index extends Base
{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
    public function index()
    {

        return $this->fetch();
    }
    /**
     * [aa description]
     * @param  string $name [description]
     * @return [type]       [description]
     */
    public function aa(){
    	$result = Db::name('data')->where('id', '=', 1)->find();
		dump($result);    
    }
    public function hello(){
    	$result = Db::execute('insert into think_data (name ,status) values ("thinkphp",1)');
    	return $result;
    }
}
