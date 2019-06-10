
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: News Magazine
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title class="fal fa-newspaper" News Magazine></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="{{asset('frontend/layout/styles/layout.css')}}" type="text/css" />
    <script type="text/javascript" src="{{asset('frontend/layout/scripts/jquery.min.js')}}"></script>
    <!-- Homepage Specific -->
    <script type="text/javascript" src="{{asset('frontend/layout/scripts/galleryviewthemes/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/layout/scripts/galleryviewthemes/jquery.timers.1.2.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/layout/scripts/galleryviewthemes/jquery.galleryview.2.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/layout/scripts/galleryviewthemes/jquery.galleryview.setup.js')}}"></script>
    <!-- / Homepage Specific -->
</head>

<body id="top">
<div class="wrapper col0">
    <div id="topline">
        <p>Tel: +977-9843213030 | Mail: adtamang95@gmail.com</p>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li class="last"><a href="#">Vaccancy</a></li>
        </ul>
        <br class="clear" />
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="header">
        <div class="fl_left">
            <h1><a href="{{route('front.index')}}"><strong>N</strong>ews <strong>M</strong>agazine</a></h1>
            <p>Truely Nepali News</p>
        </div>
        <div class="fl_right"><a href="#"><img src="{{asset('images/5ca0c355e3dc4_10990jpg')}}"height="60" width="468" alt="" /></a></div>
        <br class="clear" />
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
    <div id="topbar">
        <div id="topnav">
            <ul>
                <li class="active"><a href="{{route('front.index')}}">Home</a></li>
                @foreach($category as $cat)
                    @if($cat->status==1)
                <li><a href="">{{$cat->name}}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div id="search">
            <form action="#" method="get">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
                    <input type="submit" name="go" id="go" value="Search" />
                </fieldset>
            </form>
        </div>
        <br class="clear" />
    </div>
</div>
<div class="wrapper">
    <div class="container">
@yield('content')
</div>
</div>

<div class="wrapper">
    <div id="footer">
        <div class="footbox">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <div class="footbox last">
            <h2>Lacus interdum</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <br class="clear" />
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="socialise">
        <ul>
            <li><a href="{{{'\http\Url::www.facebook.com'}}}"><img src="{{asset('frontend/layout/images/facebook.gif')}}" alt="" /><span>Facebook</span></a></li>
            <li><a href="#"><img src="{{asset('frontend/layout/images/rss.gif')}}" alt="" /><span>FeedBurner</span></a></li>
            <li class="last"><a href="#"><img src="{{asset('frontend/layout/images/twitter.gif')}}" alt="" /><span>Twitter</span></a></li>
        </ul>
        <div id="newsletter">
            <h2>NewsLetter Sign Up !</h2>
            <p>Please enter your Email and Name to join.</p>
            <form action="#" method="post">
                <fieldset>
                    <legend>Digital Newsletter</legend>
                    <div class="fl_left">
                        <input type="text" value="Enter name here&hellip;"  onfocus="this.value=(this.value=='Enter name here&hellip;')? '' : this.value ;" />
                        <input type="text" value="Enter email address&hellip;"  onfocus="this.value=(this.value=='Enter email address&hellip;')? '' : this.value ;" />
                    </div>
                    <div class="fl_right">
                        <input type="submit" name="newsletter_go" id="newsletter_go" value="&raquo;" />
                    </div>
                </fieldset>
            </form>
            <p>To unsubsribe please <a href="#">click here &raquo;</a>.</p>
        </div>
        <br class="clear" />
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col8">
    <div id="copyright">
        <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <br class="clear" />
    </div>
</div>
</body>
</html>