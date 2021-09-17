@extends('baseed')
@section('content')

    <div class="tab_box whitebg">
        <div class="tab_buttons">
            <ul>
                <li class="newscurrent">{{$lx}}</li>
            </ul>
        </div>
        <div class="newstab">
            <div class="newsitem">
                <ul class="newslist" style="width: 100%;">
                    @foreach($data_boke as $item)

                        <li>
                            <span style=><a href="{{url('infoed/'.$item->id)}}">{{$item->bt}}</a> </span>
                            <span style="position: absolute;right: 30px">
                            {{$item->fbsj}}
                            </span>
                        </li>

                    @endforeach
                </ul>
                </button>
            </div>
        </div>
    </div>

@stop
@section('footer')
    <div id="pages">
    </div>
    <div id="pages_1" style="margin-top:100px">

    </div>
    <script>
        $(function () {
            $(".newslist li").each(function (index, element) {
                if (index > 30) {
                    $(element).hide();
                }
            })

            $("._home").click(function () {
                $(".newslist li").each(function (index, element) {
                    if (index > 30) {
                        $(element).hide();
                    } else {
                        $(element).show();
                    }
                })
            })

            $("._pages_li_1").click(function () {
                let pages_index = $(this).attr('data-index');
                console.log(pages_index);
                $(".newslist li").each(function (index, element) {
                    if (index > 30 * pages_index || index < 30 * pages_index - 30) {
                        $(element).hide();
                    } else {
                        $(element).show();
                    }
                })
            })

            $("._jumper_input").keypress(function (e) {
                if (e.keyCode == 13) {
                    let pages_index2 = $(this).attr('value');
                    $(".newslist li").each(function (index, element) {
                        if (index > 30 * pages_index2 || index < 30 * pages_index2 - 30) {
                            $(element).hide();
                        } else {
                            $(element).show();
                        }
                    })
                }
            })
        })

        new Pagination({
            element: '#pages',
            type: 1,
            pageIndex: 1,
            pageSize: 30,
            pageCount: 5,
            total: {{$_count}},
            jumper: true,
            singlePageHide: false,
            prevText: '上一页',
            nextText: '下一页',
            disabled: true,
            currentChange: function (index) {
            }
        });

    </script>

@stop
