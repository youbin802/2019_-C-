<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Todo Blog</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

</head>

<body>
	<header id="header">  

        <!-- topicon -->    
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        
        <!-- navigation -->
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <a class="navbar-brand" href="index.html">
                    	<h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                </div>
                <div class="pull-right">
                    <ul class="navi">
                        <?php if(!user()) :?>
                        <li>
                            <a href="/user/login" title="로그인">
                                로그인
                            </a>
                        </li>
                        <?php else: ?>
                            <li>
                            <a href="/user/logout" title="로그인">
                                로그아웃
                            </a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="/user/join" title="회원가입">
                                회원가입
                            </a>
                        </li>
                        <li>
                            <a href="/blog/myblog" title="내 블로그" target="_blank">
                                내 블로그
                            </a>
                        </li>
                        <li>
                            <a href="/blog/admin" title="블로그관리">
                                블로그관리
                            </a>
                        </li>
                    </ul>
                </div>
           </div> 
        </div>
      
    </header>
    <?php require_once("visual.php"); ?>