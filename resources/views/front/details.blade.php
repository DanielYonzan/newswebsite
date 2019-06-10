@extends('layouts.front')

@section('content')
    <div class="column">
        <ul class="latestnews">
            @foreach( $feature_news as $n)
                <li><img src="{{asset('images/'.$n->feature_image)}}" alt=""width="100" height="100" />
                    <p><strong><a href="#">{{$n->title}}</a></strong>{{$n->short_description}}</p>
                </li>
            @endforeach
        </ul>
    </div>
    <br class="clear" />
    </div>
    </div>
    <!-- ####################################################################################################### -->
    <div class="wrapper">
        <div id="adblock">
            @foreach( $ads as $ad)
                <div class="fl_left"><a href="{{$ad->url}}"><img src="{{asset('images/'.$ad->image)}}" alt="" height="60" width="468"/></a></div>
                {{--        <div class="fl_right"><a href="#"><img src="{{asset('images/5ca0b23d6b5f4_95614jpg')}}" alt="" /></a></div>--}}
            @endforeach
            <br class="clear" />
        </div>
        <div id="hpage_cats">
            <?php
            $class = '';
            $i=1;
            foreach($singleCatgoryNews as $n){
            if($i%2==0){
                $class = 'fl_right';
            }else{
                $class = 'fl_left';
            }
            $i++;
            ?>
            <div class="<?php echo $class; ?>">
                <h2><a href="#">{{$n->categorydata->name}}</a></h2>
                <img src="{{asset('images/'.$n->feature_image)}}" alt="" height="100" width="100" />
                <p><strong><a href="">{{$n->title}}</a></strong></p>
                <p>{{substr($n->short_description,0,95)}}<a href="http://www.os-templates.com/">OS Templates</a>. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan sagittislaorem dolor sum at urna.</p>
            </div>
            <?php } ?>

            <br class="clear" />
        </div>
    </div>
    <!-- ####################################################################################################### -->
    <div class="wrapper">
        <div class="container">
            <div class="content">
                <div id="hpage_latest">
                    <h2>Feugiatrutrum rhoncus semper</h2>
                    <ul>
                        <li><img src="images/demo/190x130.gif" alt="" />
                            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
                            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
                            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                        </li>
                        <li><img src="images/demo/190x130.gif" alt="" />
                            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
                            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
                            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                        </li>
                        <li class="last"><img src="images/demo/190x130.gif" alt="" />
                            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
                            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
                            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                        </li>
                    </ul>
                    <br class="clear" />
                </div>
            </div>
            <div class="column">
                <div class="holder"><a href="#"><img src="images/demo/300x250.gif" alt="" /></a></div>
                <div class="holder"><a href="#"><img src="images/demo/300x80.gif" alt="" /></a></div>
            </div>
            <br class="clear" />
        </div>
    </div>
@endsection
@extends('layouts.front')

@section('content')
    <div class="content">
        <div id="featured_slide">
            <ul id="featurednews">
                @foreach($news as $n)
                    @if($n->slider_key==1)
                        <li><a><img src="{{asset('images/'.$n->feature_image)}}" alt="{{$n->name}}"width="750" height="350"/></a>
                            <div class="panel-overlay">
                                <h2>{{$n->title}}</h2>
                                <p>{{substr($n->short_description,0,95)}}<br />
                                    <a href="{{$n->description}}">Continue Reading &raquo;</a></p>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
{{--    <div class="column">--}}
{{--        <ul class="latestnews">--}}
{{--            @foreach( $feature_news as $n)--}}
{{--                <li><img src="{{asset('images/'.$n->feature_image)}}" alt=""width="100" height="100" />--}}
{{--                    <p><strong><a href="#">{{$n->title}}</a></strong>{{$n->short_description}}</p>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
    <br class="clear" />
    </div>
    </div>
    <!-- ####################################################################################################### -->
    <div class="wrapper">
        <div id="adblock">
            @foreach( $ads as $ad)
                <div class="fl_left"><a href="{{$ad->url}}"><img src="{{asset('images/'.$ad->image)}}" alt="" height="60" width="468"/></a></div>
                {{--        <div class="fl_right"><a href="#"><img src="{{asset('images/5ca0b23d6b5f4_95614jpg')}}" alt="" /></a></div>--}}
            @endforeach
            <br class="clear" />
        </div>
        <div id="hpage_cats">
            <?php
            $class = '';
            $i=1;
            foreach($singleCatgoryNews as $n){
            if($i%2==0){
                $class = 'fl_right';
            }else{
                $class = 'fl_left';
            }
            $i++;
            ?>
            <div class="<?php echo $class; ?>">
                <h2><a href="#">{{$n->categorydata->name}}</a></h2>
                <img src="{{asset('images/'.$n->feature_image)}}" alt="" height="100" width="100" />
                <p><strong><a href="">{{$n->title}}</a></strong></p>
                <p>{{substr($n->short_description,0,95)}}<a href="http://www.os-templates.com/">OS Templates</a>. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan sagittislaorem dolor sum at urna.</p>
            </div>
            <?php } ?>
            <br class="clear" />
        </div>
    </div>
    <!-- ####################################################################################################### -->
    <div class="wrapper">
        <div class="container">
            <div class="content">
                <div id="hpage_latest">
                    <h2>Feugiatrutrum rhoncus semper</h2>
                    <ul>
                        <li><img src="images/demo/190x130.gif" alt="" />
                            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
                            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
                            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                        </li>
                        <li><img src="images/demo/190x130.gif" alt="" />
                            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
                            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
                            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                        </li>
                        <li class="last"><img src="images/demo/190x130.gif" alt="" />
                            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
                            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
                            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                        </li>
                    </ul>
                    <br class="clear" />
                </div>
            </div>
            <div class="column">
                <div class="holder"><a href="#"><img src="images/demo/300x250.gif" alt="" /></a></div>
                <div class="holder"><a href="#"><img src="images/demo/300x80.gif" alt="" /></a></div>
            </div>
            <br class="clear" />
        </div>
    </div>
@endsection
