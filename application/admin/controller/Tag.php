<?php 
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\Request;
use app\admin\model\Tag as TagModel;
class Tag extends Base{
	public function index(Request $request){
//        if($request->isPost()){
//            $name = input('name');
//            if(!empty($name)){
//                $data = ['name'=>$name,'status'=>'1','create_time'=>time()];
//                Db::name('tags')->insert($data);
//            }
//        }
        $this->assign('tree', '3');
        $this->assign('title',"标签添加");
		return $this->fetch();
	}

    /**
     * 列表
     */
	public function tag_list(){

        // $list = Db::name('user')->where('status',1)->order('id desc')->paginate(10);
		$list = TagModel::order('id desc')->paginate(5);
        $this->assign('list', $list);
        $this->assign('tree', '3');
        $this->assign('title','标签列表');
		//return view('read',['list'=>$list]);
		return $this->fetch('list');
    }

    public function tag_add_ajax(){
        $name = input('name');
        if(!empty($name)){
            $data = ['name'=>$name,'status'=>'1','create_time'=>time()];
            $result = Db::name('tags')->insert($data);
            if($result){
                return array('code'=>'1','msg'=>'添加成功');
            }else{
                return array('code'=>'0','msg'=>'网络出问题了，请稍后重试。。。。');
            }
        }else{
            return array('code'=>'0','msg'=>'标签名为空');
        }
    }
}

 ?>