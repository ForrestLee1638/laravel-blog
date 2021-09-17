<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Forrest 的博客</title>
    <meta name="keywords" content="blog"/>
    <meta name="description" content="blog"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/base.css" rel="stylesheet">
    <link href="../../css/m.css" rel="stylesheet">
    <link rel="stylesheet" href="../../layui/css/layui.css">
    <script src="../../js/jquery-1.8.3.min.js"></script>
    <script src="../../js/comm.js"></script>
</head>

<body>
<header id="header">
    <div class="navbox">
        <h2 id="mnavh"><span class="navicon"></span></h2>
        <div class="logo"><a href="#">Forrest 的博客</a></div>
        <nav>
            <ul id="starlist">
                <li><a href="{{url('indexed')}}">首页</a></li>
                <li><a href="{{url('boke_listed')}}">个人博客日记</a></li>
                <li><a href="{{url('note_listed')}}">学习笔记</a></li>
                <li><a href="{{url('xinqing_listed')}}">心情</a></li>
                <li><a href="{{url('fabu')}}">发布文章</a></li>
                <li><a href="{{url('update')}}">修改文章</a></li>
                <li><a href="{{url('shanchu')}}">删除文章</a></li>
                <li><a href="{{url('index')}}" style="color:white">退出</a></li>
            </ul>

        </nav>
    </div>
</header>
<!--top end-->
<article>
    <!--lbox begin-->
    <div class="lbox">
        <!--banbox begin-->
        <div class="banbox">
            <div class="banner">
                <div id="banner" class="fader">
                    <li class="slide"><a href="" target="_blank"><img src="../../images/1.jpg"></a></li>
                    <li class="slide"><a href="/" target="_blank"><img src="../../images/2.jpg"></a></li>
                    <li class="slide"><a href="/" target="_blank"><img src="../../images/3.jpg"></a></li>
                    <li class="slide"><a href="/" target="_blank"><img src="../../images/4.jpg"></a></li>
                    <div class="fader_controls">
                        <div class="page prev" data-target="prev"></div>
                        <div class="page next" data-target="next"></div>
                        <ul class="pager_list">
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="headline">
            <ul>
                <li><img src="../../images/h1.jpg" alt="为什么说10月24日是程序员的节日？"></li>
                <li><img src="../../images/h2.jpg" alt="个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。"></span></a></li>
            </ul>
        </div>
        <!--headline end-->

        <!--content-->

        @foreach($data_info as $item)

            <div class="clearblank"></div>
            <div class="content_box whitebg">
                <h2 class="htitle">修改文章</h2>
                <h1 class="con_tilte">{{$item->bt}}</h1>

                <div class="con_text">

                    <form class="layui-form" action="{{url('doupdate/'.$item->id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="layui-form-item">
                            <label class="layui-form-label">标题</label>
                            <div class="layui-input-block">
                                <input type="text" value="" name="title" lay-verify="title" autocomplete="off"
                                       placeholder="请输入标题" id="title" class="layui-input in-title">
                            </div>
                        </div>

                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">内容</label>
                            <div class="layui-input-block">
                                <textarea placeholder="请输入内容" name="content" style="height:400px;"
                                          class="layui-textarea"></textarea>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">文章类型</label>
                            <div class="layui-input-block">
                                <select name="lx" lay-filter="aihao">
                                    <option value=""></option>
                                    <option value="个人日记" selected="">个人博客</option>
                                    <option value="学习笔记">学习笔记</option>
                                    <option value="心情记录">记录心情</option>
                                </select>
                            </div>
                        </div>


                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1">提交修改</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            <input id="bt" type="text" style="display: none;" value="{{$item->bt}}">

        @endforeach
    </div>
    <div class="rbox">
        <div class="card">
            <h2>我的名片</h2>
            <p>姓名：李明东</p>
            <p>网名：Forrest Lee</p>
            <p>职业：web前端工程师</p>
            <p>现居：广西壮族自治区南宁市西乡塘区大学东路101号</p>
            <p>Email：1638967263@qq.com</p>
        </div>
        <input id="nr" type="text" style="display: none;" value="{{$nr[3]}}">


    </div>
</article>
<script src="../../layui/layui.js"></script>
<script>
    $(function () {
        $(".layui-textarea").val($("#nr").val());
        $("#title").val($("#bt").val());

        $(".layui-btn-primary").click(function () {
            $(".layui-textarea").val("");
            $("#title").val("");

        })
    })
</script>
</body>

</html>
