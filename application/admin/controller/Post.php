<?php
namespace  app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Image;
use app\admin\model\Tag as TagModel;
class Post extends Base
{
    public function index($id=''){
        if(!empty($id)) {
            $posts = Db::name('posts')->where('id', $id)->find();
            $posts['tags'] = json_decode($posts['tags']);
        } else{
            $posts=array('title'=>'','content'=>'','img'=>'','status'=>'1','sort'=>'','tags'=>'');
        }
            $this->assign('posts',$posts);

        $tags = TagModel::scope('id,name')->where('status','1')->select();
        $sort=  Db::name('sort')->where('pid','<>','0')->select();
        $this->assign('title','文章添加');
        $this->assign('tags',$tags);
        $this->assign('sort',$sort);
        $this->assign('tree', '2');
        return $this->fetch('post/index');
    }
    public function lists(){
        $list = Db::name('posts')->order('id desc')->paginate(5);
        $this->assign('list', $list);
        $this->assign('tree', '2');
        $this->assign('title','文章列表');
        return $this->fetch('post/list');
    }
    public function upload(Request $request){
        $file = $request->file('image');
        if (empty($file)) {
            $this->error('请选择上传文件');
        }
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $tag = input('tags/a');
        $data['content'] = input('editorValue');
        $data['title'] = input('title');
        $data['img'] = '/uploads/'.date('Ymd').'/'.$info->getFilename();
        $data['status'] = input('status');
        $data['create_time'] = time();
        $data['user_id'] = session('admin_user.admin_user')['uid'];
        $tag =input('tags/a');
        $data['tags'] = json_encode($tag);
        $result  = Db::name('posts')->insert($data);
       // var_dump($posts);
//        $posts_id = Db::name('user')->getLastInsID();
//        $tag =input('tags/a');
//            foreach ($tag as $k=>$v){
//                $pt['posts_id'] = $posts_id;
//                $pt['tag_id'] = $v;
//                $result=Db::name('posts_tags')->insert($pt);
                if($result){
                    $this->success('添加成功','/admin/post_lists');
                }else{
                    return array('code'=>'0','msg'=>'网络出问题了，请稍后重试。。。。');
                }
//            }
//
//        if($info){
//            echo $info->getExtension();
//            echo $info->getSaveName();
//            echo $info->getFilename();
//        }else{
//            // 上传失败获取错误信息
//            echo $file->getError();
//        }
    }
    public function read(){

    }
}

?>