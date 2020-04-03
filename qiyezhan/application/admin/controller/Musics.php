<?php
namespace app\admin\controller;
use app\common\model\Productcategory;
use think\console\Input;
use think\Controller;
use think\Db;
use think\Image;
use app\common\model\Youhua as YouhuaModel;
use app\common\model\About as AboutModel;
use app\common\model\Mainabout as MainaboutModel;
use app\common\model\Productyouhua as ProductyouhuaModel;
use app\common\model\Productcategory as ProductcategoryModel;
use app\common\model\Aboutyouhua as AboutyouhuaModel;
use app\common\model\Product as ProductModel;
use app\common\model\Music as MusicModel;
use think\Request;
use think\Session;

class Musics extends Controller
{

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function add()
    {

        if (request()->isPost()) {
            // dump($_POST); die;
            $data = [
                'artist' => input('author'),
                'creat_time' => time(),
            ];

            if ($_FILES['music']['tmp_name']) {
                //获取文件信息
                $filemusic = request()->file('music');
                //获取并定义音乐的名称
                $musicname=$filemusic->getInfo('name');
                //上传音乐的位置和名称
                $filemusic->move('static/user/websiteDemo/mp3',$musicname);
                //写入数据库的内容
                $data['mp3'] = '/static/user/websiteDemo/mp3/' .  $musicname;
                //写入数据库音乐名称（标题）
                $data['title']= $filemusic->getInfo('name');
                $data['album']= $filemusic->getInfo('name');
            }

            if ($_FILES['pic']['tmp_name']) {
                $filepic = request()->file('pic');

                $picname=$filepic->getInfo('name');

                $filepic->move( 'static/user/websiteDemo/img',$picname);

                $data['cover'] = '/static/user/websiteDemo/img/'.$picname;
            }




            if (db('Music')->insert($data)) {
                return $this->success('添加音乐成功！', 'Musics/add');
            } else {
                return $this->error('添加音乐失败！');
            }
            return;
        }

        return $this->fetch();
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//音乐列表的展示
    public function lst()
    {
        $music=new MusicModel;
        $musics=$music->where(['status'=>1])->select();
        $this->assign('list',$musics);
        return $this->fetch();
    }




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//音乐列表管理之删除
    public function del()
    {

        $id = input('id');


        $result = db('Music')->where('id', $id)->update(['status'=>-1]);
        if ($result) {
            return $this->success('删除音乐成功');
        } else {
            return $this->error('删除音乐失败', url('Musics/lst'));
        }


    }




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//音乐列表的修改
    public function edit()
    {
        $id = input('id');
        $musics = db('Music')->find($id);

        $this->assign('musics', $musics);


        if (request()->isPost()) {
            $data = [
                'id' => input('id'),
                'artist' => input('author'),
                'creat_time' => time(),
                'title'=>input('title')
            ];
            if ($_FILES['music']['tmp_name']) {
                //获取文件信息
                $filemusic = request()->file('music');
                //获取并定义音乐的名称
                $musicname=$filemusic->getInfo('name');
                //上传音乐的位置和名称
                $filemusic->move('static/user/websiteDemo/mp3',$musicname);
                //写入数据库的内容
                $data['mp3'] = '/static/user/websiteDemo/mp3/' .  $musicname;
                //写入数据库音乐名称（标题）
                $data['title']= $filemusic->getInfo('name');
                $data['album']= $filemusic->getInfo('name');
            }


            if ($_FILES['pic']['tmp_name']) {
                $filepic = request()->file('pic');

                $picname=$filepic->getInfo('name');

                $filepic->move( 'static/user/websiteDemo/img',$picname);

                $data['cover'] = '/static/user/websiteDemo/img/'.$picname;
            }




            if (db('Music')->update($data)){
                $this->success('修改音乐成功！', 'Musics/lst');
            } else {
                $this->error('修改音乐失败！');
            }
        }

        return $this->fetch();
    }


}