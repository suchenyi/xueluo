<?php
namespace app\admin\Controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Image;

use app\admin\model\Sort as SortModel;
class Sort extends Base{
    public function index($id){
        $sort= Db::name('sort')->where('pid','0')->select();
        $this->assign('sort', $sort);
        $this->assign('tree', '4');
        $this->assign('title','分类添加');
        return $this->fetch();
    }
    public function sort_add_ajax(){
        $name= input('name');
        $pid= input('pid');
        $fa_code= input('fa_code');
        if(!empty($name)){
            $data = ['name'=>$name,'pid'=>$pid,'fa_code'=>$fa_code,'status'=>'1','create_time'=>time()];
            $result = Db::name('sort')->insert($data);
            if($result){
                return array('code'=>'1','msg'=>'添加成功');
            }else{
                return array('code'=>'0','msg'=>'网络出问题了，请稍后重试。。。。');
            }
        }else{
            return array('code'=>'0','msg'=>'分类名为空');
        }
    }
    public function sort_list(){
        $sort= Db::name('sort')->where('pid','0')->order('id','asc')->select();

        if(!empty($sort)){
            $menu = array();
            foreach ($sort as $k=>$v){
                $arr = Db::name('sort')->where('pid',$v['id'])->order('id','asc')->select();
                if(!empty($arr)){
                    $v['arr'] = $arr;
                }else{
                    $v['arr'] = array();
                }
               $menu[] = $v;
            }
            $this->assign('list', $menu );
        }else{
            $this->assign('list', $sort);
        }

        $this->assign('tree', '4');
        $this->assign('title','分类列表');
        return $this->fetch();
    }
    //获取父级分类名称
    public function get_pname($pid){
        if($pid==''){
            return '顶级分类';
        }else{
            $sort= Db::name('sort')->where('pid','0')->order('id','asc')->find();
            return $sort['name'];
        }
    }
}