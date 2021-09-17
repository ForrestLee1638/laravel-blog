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
                    <li class="slide"><a href="/" target="_blank"><img src="../../images/1.jpg"></a></li>
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
                <h2 class="htitle">文章详情</h2>
                <h1 class="con_tilte">{{$item->bt}}</h1>
                <p class="bloginfo"><i class="avatar"></i><span>李明东</span><span>{{$item->fbsj}}</span><span>【<a
                            href="/">{{$item->lx}}</a>】</span><span>109990人已围观</span></p>
                <p class="con_info"><b>简介</b>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。
                </p>
                <div class="con_text">
                    <p>{{$item->nr}}</p>


                    <p><span class="diggit">很赞哦！ (74)</span></p>
                    <div class="nextinfo">
                        @foreach($pre as $item)
                            <p>上一篇：<a href="{{url('infoed/'.$item->id)}}">{{$item->bt}}</a></p>
                        @endforeach
                        @foreach($next as $item)
                            <p>下一篇：<a href="{{url('infoed/'.$item->id)}}">{{$item->bt}}</a></p>
                        @endforeach

                    </div>
                </div>
            </div>
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


    </div>
</article>

</body>

</html>
