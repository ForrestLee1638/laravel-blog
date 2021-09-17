<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;

class LimingdongController extends Controller
{
    //
    public function index()
    {
        $data_riji = DB::select("select * from limingdonginfo where lx='个人日记' order by id desc limit 5 ");
        $data_xinqing = DB::select("select * from limingdonginfo where lx='心情记录' order by id desc limit 10");
        $data_note = DB::select("select * from limingdonginfo where lx='学习笔记' order by id desc limit 6");
        return view('index', compact('data_riji', 'data_xinqing', 'data_note'));
    }

    public function base()
    {
        return view('base'); 
    }

    public function boke_list()
    {
        $data_boke = DB::select("select * from limingdonginfo where lx='个人日记'");
        $data_count = DB::select("select count(*) from limingdonginfo where lx='个人日记'");
        $obj = json_decode(json_encode($data_count), true);
        $_count = array_values($obj[0])[0];
        $lx = "个人日记";
        return view('boke_list', compact('data_boke', 'lx', '_count'));
    }

    public function boke_listed()
    {
        $data_boke = DB::select("select * from limingdonginfo where lx='个人日记' order by id desc");
        $data_count = DB::select("select count(*) from limingdonginfo where lx='个人日记' order by id desc");
        $obj = json_decode(json_encode($data_count), true);
        $_count = array_values($obj[0])[0];
        $lx = "个人日记";
        return view('boke_listed', compact('data_boke', 'lx', '_count'));
    }

    public function note_list()
    {
        $data_boke = DB::select("select * from limingdonginfo where lx='学习笔记' order by id desc ");
        $data_count = DB::select("select count(*) from limingdonginfo where lx='学习笔记' order by id desc ");
        $obj = json_decode(json_encode($data_count), true);
        $_count = array_values($obj[0])[0];
        $lx = "学习笔记";
        return view('boke_list', compact('data_boke', 'lx', '_count'));
    }

    public function note_listed()
    {
        $data_boke = DB::select("select * from limingdonginfo where lx='学习笔记' order by id desc ");
        $data_count = DB::select("select count(*) from limingdonginfo where lx='学习笔记' order by id desc ");
        $obj = json_decode(json_encode($data_count), true);
        $_count = array_values($obj[0])[0];
        $lx = "学习笔记";
        return view('boke_listed', compact('data_boke', 'lx', '_count'));
    }

    public function xinqing_list()
    {
        $data_boke = DB::select("select * from limingdonginfo where lx='心情记录'");
        $data_count = DB::select("select count(*) from limingdonginfo where lx='心情记录'");
        $obj = json_decode(json_encode($data_count), true);
        $_count = array_values($obj[0])[0];
        $lx = "心情记录";
        return view('boke_list', compact('data_boke', 'lx', '_count'));
    }


    public function xinqing_listed()
    {
        $data_boke = DB::select("select * from limingdonginfo where lx='心情记录'");
        $data_count = DB::select("select count(*) from limingdonginfo where lx='心情记录'");
        $obj = json_decode(json_encode($data_count), true);
        $_count = array_values($obj[0])[0];
        $lx = "心情记录";
        return view('boke_listed', compact('data_boke', 'lx', '_count'));
    }

    public function info($id)
    {
        $data_info = DB::select("select * from limingdonginfo where id = '$id'");
        $pre = DB::select("select * from limingdonginfo where id = '$id'-1");
        $next = DB::select("select * from limingdonginfo where id = '$id'+1");
        return view('info', compact('data_info', 'pre', 'next'));
    }

    public function infoed($id)
    {
        $data_info = DB::select("select * from limingdonginfo where id = '$id'");
        $pre = DB::select("select * from limingdonginfo where id = '$id'-1");
        $next = DB::select("select * from limingdonginfo where id = '$id'+1");
        return view('infoed', compact('data_info', 'pre', 'next'));
    }

    public function login()
    {
        return view('login');
    }

    public function dologin()
    {
        $username = Input::get('username');
        $password = Input::get('password');
        $yzm = Input::get('yzm');
        $yzmcode = Input::get('yzmcode');
        $yhm = DB::select("select username from users where username='$username'");
        $mm = DB::select("select password from users where username='$username'");
        if ($yzm == "") {
            echo "<script>alert('请输入验证码');location.href='login'</script>";
        } else {
            if ($yhm) {
                if ($username == array_values(json_decode(json_encode($yhm), true)[0])[0] && $password == array_values(json_decode(json_encode($mm), true)[0])[0]) {
                    session(['uid' => '2021007001']);
                    session()->save();
                    echo "<script>alert('登陆成功');location.href='indexed'</script>";
                } else {
                    echo "<script>alert('用户名或密码错误');location.href='login'</script>";
                }
            } else {
                echo "<script>alert('用户名不存在');location.href='login'</script>";
            }
        }
    }

    public function indexed()
    {
        $data_riji = DB::select("select * from limingdonginfo where lx='个人日记' order by id desc limit 5");
        $data_xinqing = DB::select("select * from limingdonginfo where lx='心情记录' order by id desc limit 10");
        $data_note = DB::select("select * from limingdonginfo where lx='学习笔记' order by id desc limit 6");
        return view('indexed', compact('data_riji', 'data_xinqing', 'data_note'));
    }

    public function fabu()
    {
        return view('fabu');
    }

    public function shanchu()
    {
        $data_boke = DB::select("select * from limingdonginfo order by id desc");
        $data_count = DB::select("select count(*) from limingdonginfo");
        $obj = json_decode(json_encode($data_count), true);
        $_count = array_values($obj[0])[0];
        $lx = "删除文章";
        return view('shanchu', compact('data_boke', 'lx', '_count'));
    }


    public function doshanchu($id)
    {
        $delete = DB::delete("delete from limingdonginfo where id='$id'");
        if ($delete) {
            echo "<script>alert('删除成功');location.href='../shanchu'</script>";
        } else {
            echo "<script>alert('删除失败');location.href='../anchu'</script>";
        }

    }

    public function dofabu()
    {
        $title = Input::get('title');
        $content = Input::get('content');
        $lx = Input::get('lx');
        $insert = DB::insert("insert into limingdonginfo (bt,nr,lx) values('$title','$content','$lx')");
        if ($insert) {
            echo "<script>alert('发布成功');location.href='indexed'</script>";
        }
    }


    public function update()
    {
        $data_boke = DB::select("select * from limingdonginfo order by id desc");
        $data_count = DB::select("select count(*) from limingdonginfo");
        $obj = json_decode(json_encode($data_count), true);
        $_count = array_values($obj[0])[0];
        $lx = "修改文章";
        return view('update', compact('data_boke', 'lx', '_count'));
    }

    public function updateinfo($id)
    {
        $data_info = DB::select("select * from limingdonginfo where id = '$id'");
        $date_nr = DB::select("select nr from limingdonginfo where id = '$id'");
        $obj = json_decode(json_encode($data_info), true);
        $nr = array_values($obj[0]);
        return view('updateinfo', compact('data_info', 'nr'));
    }


    public function doupdate($id)
    {
        $title = Input::get('title');
        $content = Input::get('content');
        $lx = Input::get('lx');
        DB::update("update limingdonginfo set bt = '$title' where id='$id'");
        DB::update("update limingdonginfo set nr = '$content' where id='$id'");
        DB::update("update limingdonginfo set lx = '$lx' where id='$id'");

        echo "<script>alert('修改成功');location.href='../update'</script>";
    }
}
