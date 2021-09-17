<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Forrest 的博客</title>
    <meta name="keywords" content="blog"/>
    <meta name="description" content="blog"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/base.css" rel="stylesheet">
    <link href="../css/m.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/pagination.css">
    <script src="../js/pagination.js"></script>
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/comm.js"></script>
    <style>
        ._page_container ._pages {
            margin: 0;
        }

        #pages {
            margin-top: 20px;
            margin-right: 280px;
        }

        ._jumper {
            display: none;
        }
    </style>
</head>

<body>
<header id="header">
    <div class="navbox">
        <h2 id="mnavh"><span class="navicon"></span></h2>
        <div class="logo"><a href="#">Forrest 的博客</a></div>
        <nav>
            <ul id="starlist">
                <li><a href="{{url('index')}}">首页</a></li>
                <li><a href="{{url('boke_list')}}">个人日记</a></li>
                <li><a href="{{url('note_list')}}">学习笔记</a></li>
                <li><a href="{{url('xinqing_list')}}">心情</a></li>
                <li><a href="{{url('login')}}">登录</a></li>
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
                    <li class="slide"><a href="/" target="_blank"><img src="../images/1.jpg"></a></li>
                    <li class="slide"><a href="/" target="_blank"><img src="../images/2.jpg"></a></li>
                    <li class="slide"><a href="/" target="_blank"><img src="../images/3.jpg"></a></li>
                    <li class="slide"><a href="/" target="_blank"><img src="../images/4.jpg"></a></li>
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
                <li><img src="../images/h1.jpg" alt="为什么说10月24日是程序员的节日？"></li>
                <li><img src="../images/h2.jpg" alt="个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。"></span></a></li>
            </ul>
        </div>
        <!--headline end-->
        <div class="clearblank"></div>
    @yield('content')
    <!--tab_box end-->


        <!--bloglist end-->
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
@yield('footer')
</body>

</html>
