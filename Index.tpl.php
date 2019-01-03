<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--        <link rel="stylesheet" href="http://demo1.mycodes.net/daima/hongse_calendar/css/calendar.css">-->
    <style>
        *{
            text-decoration:none;
        }
        a{
            color:black;
        }
        .new{
            width:100%;
        }
        .new-header{
            width:70%;
            height:80px;
            margin:0 auto;

            /*border:1px solid black;*/
            background-color:#FFF;
        }
        .new-header-left{
            width:18%;
            height:100%;
            display:inline-block;
            float:left;
            font-size:38px;
            text-align:center;
            line-height:80px;
        }
        .new-header-right{
            width:20%;
            height:100%;
            /*border:1px solid black;*/
            float:right;
        }
        .new-header-right-p{
            font-size:18px;
            margin-left:60px;
        }
        .new-header-right-p > a{
            color:black;
        }
        /*.new-header-right-p > a:hover{*/
            /*color:#034081;*/
        /*}*/
        .new-neck{
            width:70%;
            height:36px;
            margin:10px auto;
            /*border:1px solid red;*/
        }
        .new-neck-ul{
            margin:0;
            padding:0;
            height:100%;
            border-top:2px solid dimgray;
            list-style-type:none;
            /*background-color:#333;*/
        }
        .new-neck-ul > li:last-child{
            border-right:0px;
        }
        .new-neck-ul > li{
            border-right:1px solid #F2F2F2;
            text-align:center;
            width:60px;
            display:inline-block;
        }
        .new-neck-ul a{
            color:black;
            line-height:40px;
        }
        .new-neck-ul a:hover{
            color:red;
        }
        .new-body{
            border-top:1px;
            display:flex;
            justify-content:space-between;
            /*border:1px solid red;*/
            width:70%;
            margin:auto;
            border-top:1px solid dimgray;
        }
        .new-body-left{
            width:70%;
            border-right:1px solid #F9F9F9;
            /*border:1px solid red;*/
        }
        .new-body-l{
            /*background-color: #F2F2F2;*/
            /*display:inline-block;*/
            float:left;
            margin:20px 10px;
            width:420px;
            height:420px;
            border-bottom:1px dashed #000;
            /*border:1px solid black;*/
        }
        .new-body-l > p{
            background-color:#f9f9f9;
            margin:0;
            padding-left:10px;
            font-size:24px;
            color:black;
        }
        .tt{
            display:inline-block;
            width:4px;
            height:16px;
            border-radius:15px;
            background-color:#0a53a3;
        }
        .new-body-cont > li{
            height:40px;
        }
        .new-body-cont a{
            color:#333;
            font-size:18px;
        }
        .new-body-cont a:hover{
            color:#034081;
            text-decoration:underline;
        }
        .new-body-right{
            width:30%;
            /*border:1px solid red;*/
        }
        .new-body-r{
            background-color: #f9f9f9;
            margin:20px auto;
        }
        .new-body-r > p{
            padding-left:10px;
            height:38px;
            line-height:38px;
            font-size:16px;
            color:black;
            /*background-color:#F9F9F9;*/
        }
        .new-body-r-u{
            height:300px;
        }
        .new-body-r-u li{
            height:40px;
        }
        .new-body-r-u a{
            font-size:16px;
            color:#333;
        }
        .new-body-r-u a:hover{
            color:darkgreen;
        }
    </style>
</head>
<body>
<div class="new">
    <div class="new-header">
        <div class="new-header-left">
            新闻
        </div>
        <div class="new-header-right">
            <p class="new-header-right-p"><a href="">登录注册</a></p>
        </div>
    </div>
    <div class="new-neck">
        <ul class="new-neck-ul">
            <li><a href="">首页</a></li>
            <li><a href="">国内</a></li>
            <li><a href="">国际</a></li>
            <li><a href="">娱乐</a></li>
            <li><a href="">体育</a></li>
            <li><a href="">军事</a></li>
            <li><a href="">游戏</a></li>
            <li><a href="">数码</a></li>
        </ul>
    </div>
    <div class="new-body">
        <div class="new-body-left">
            <div class="new-body-l">
                <p><span class="tt"></span><a href="">国内</a></p>
                <ul class="new-body-cont">
                    <li><a href="">金句来了！习近平这话为发展指明方向</a></li>
                    <li><a href="">国际媒体头条速览：特朗普一炸向退役陆军上将</a></li>
                    <li><a href="">国际媒普新年第一炮，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗役陆军上将</a></li>
                    <li><a href="">国际媒体第一炮，炸向退役陆军</a></li>
                    <li><a href="">国际媒新年第88888888一炮，退役陆军上将</a></li>
                    <li><a href="">国际媒体头年第一炮，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新一炮上将</a></li>
                </ul>
            </div>
            <div class="new-body-l">
                <p><span class="tt"></span><a href="">国内</a></p>
                <ul class="new-body-cont">
                    <li><a href="">金句来了！习近平这14句系发展指明方向</a></li>
                    <li><a href="">国际媒体头条速览：特朗普炮向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗，退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗第一炮炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览年第一炮，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗炮向退役陆军上将</a></li>

                </ul>
            </div>
            <div class="new-body-l">
                <p><span class="tt"></span><a href="">国内</a></p>
                <ul class="new-body-cont">
                    <li><a href="">金句来了！习近平这14句话为两展指明方向</a></li>
                    <li><a href="">国际媒体头条速览：特朗普第一炮，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特炮，炸向役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗第一炮，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗一炮，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗年炮，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗第一炮，炸向退役陆军上将</a></li>
                </ul>
            </div>
            <div class="new-body-l">
                <p><span class="tt"></span><a href="">国内</a></p>
                <ul class="new-body-cont">
                    <li><a href="">金句来了！习近平这14句话为两岸关系发展指明方向</a></li>
                    <li><a href="">国际媒体普新年第</a></li>
                    <li><a href="">国际媒体头条速览：特朗普年第一炮，</a></li>
                    <li><a href="">国际媒体头条速览：特普年第，炸向退役</a></li>
                    <li><a href="">国际媒炮，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新年第一炮，</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新炮，炸</a></li>
                </ul>
            </div>
            <div class="new-body-l">
                <p><span class="tt"></span><a href="">国内</a></p>
                <ul class="new-body-cont">
                    <li><a href="">金句来了！习近平这14句话为两岸展指明</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新年炸向退役陆</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新年第一炮上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新年第一炮陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新年役陆军上将</a></li>
                    <li><a href="">国际媒体头条速，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新年第一陆军上将</a></li>
                </ul>
            </div>
        </div>
        <div class="new-body-right">
            <div class="new-body-r">
                <p><img src="https://img.icons8.com/material/24/000000/asterisk.png"><a href="">我的收藏</a></p>
                <ul class="new-body-r-u">
                    <li><a href="">金句来了！习近平这14句话为两岸关方向</a></li>
                    <li><a href="">国际媒体头条速览：，炸向退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新年退役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新年第一向陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新第役陆军上将</a></li>
                    <li><a href="">国际媒体头条速览：特朗普新炸向退役陆军上将</a></li>
                </ul>
            </div>
            <!--                        <div id="calendar" class="calendar"></div>-->
            <!--                        <script src="http://demo1.mycodes.net/daima/hongse_calendar/js/jquery.min.js"></script>-->
            <!--                        <script src="http://demo1.mycodes.net/daima/hongse_calendar/js/calendar.js"></script>-->
        </div>
</body>
</html>
