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
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/comm.js"></script>
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
                    <li class="slide"><img src="../images/1.jpg"></li>
                    <li class="slide"><img src="../images/2.jpg"></li>
                    <li class="slide"><img src="../images/3.jpg"></li>
                    <li class="slide"><img src="../images/4.jpg"></li>
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
                <li><img src="../images/h2.jpg" alt="个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。"></span></a></li>
            </ul>
        </div>
        <!--headline end-->
        <div class="clearblank"></div>
        <div class="tab_box whitebg">
            <div class="tab_buttons">
                <ul>
                    <li class="newscurrent">个人博客</li>
                </ul>
            </div>
            <div class="newstab">
                <div class="newsitem">
                    <div class="newspic">
                        <ul>
                            <li><img src="../images/2.jpg"><span></span></li>
                            <li><img src="../images/4.jpg"><span></span></li>
                        </ul>
                    </div>
                    <ul class="newslist">
                        @foreach($data_riji as $item)

                            <li><i></i><a href="{{url('info/'.$item->id)}}">{{$item->bt}}</a>

                            </li>
                        @endforeach
                    </ul>
                    <button style="margin-left: 200px;margin-top: 20px; width: 150px;width: 50px;"><a
                            href="{{url('boke_list')}}">更多...</a>
                    </button>
                </div>


            </div>
        </div>
        <!--tab_box end-->
        <div class="zhuanti whitebg">
            <h2 class="htitle">学习笔记</h2>
            <ul>
                @foreach($data_note as $item)
                    <li>
                        <b> <a href="{{url('info/'.$item->id)}}">{{$item->bt}}</a></b>
                    </li>
                @endforeach

            </ul>
            <button style="margin-left: 400px;width: 150px;width: 50px;"><a href="{{url('note_list')}}">更多...</a>
            </button>
        </div>

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
        <div class="whitebg notice">
            <h2 class="htitle">心情</h2>
            <ul>
                @foreach($data_xinqing as $item)
                    <li><a href="{{url('info/'.$item->id)}}">{{$item->bt}}</a></li>
                @endforeach
                <button style="margin-left: 100px;width: 150px;width: 50px;"><a href="{{url('xinqing_list')}}">更多...</a>
                </button>

            </ul>
        </div>


    </div>
</article>
</body>

</html>
