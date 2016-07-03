<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title>醉清风博客 </title>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="/themes/blog/style.css"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="keywords" content="html5、css3、javascript、jquery、node.js、angular.js、bootstrap、php/thinkphp"/>
    <meta name="description" content="醉清风博客，专注于web开发，偶尔也搞搞java/c/算法..."/>
</head>
<body>

<!-- banner -->
<div class="banner" style="background: url(/themes/blog/images/banner3.jpg);">
    <!-- header -->
    <div class="header container">
        <!--个人信息-->
        <div class="row">
            <div class="col-md-12">
                <div class="personInfo">
                    <div class="logo">
                        <a href="/">
                            <img src="<?php echo $coreConfig->logo; ?>" alt="logo">
                        </a>
                    </div>
                    <div class="logoTheme">
                        <h1><?php echo $coreConfig->name; ?></h1>
                        <h3><?php echo $coreConfig->description; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav id="navigation" class="col-md-12 hidden-xs">
        <?php echo $this->view->r(menuRender('main')); ?>
    </nav>
</div>
<!--文章列表-->
<div class="articleList container">
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->getContent(); ?>
            
    <?php echo $this->view->r($data); ?>
    }

        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row footrow">
                <div class="col-md-3">
                    <div class="widget catebox">
                        <h4 class="title">分类目录</h4>
                        <ul class="box category clearfix">
                            <?php foreach (termList(15, 'cat') as $item) { ?>
                            <li class="cat-item cat-item-2"><a href="<?php echo $this->url->get(array('for' => 'term', 'id' => $item->id, 'page' => 1)); ?>" ><?php echo $item->name; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget tagbox">
                        <h4 class="title">文章标签</h4>
                        <div class="box tags clearfix">
                            <ul class="post_tags">
                                <?php foreach (termList(15, 'tags') as $item) { ?>
                                <li><a href='<?php echo $this->url->get(array('for' => 'term', 'id' => $item->id, 'page' => 1)); ?>' title='<?php echo $item->name; ?>' class='wordpress'><?php echo $item->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget linkbox">
                        <h4 class="title">友情链接</h4>
                        <div class="box friend-links clearfix">
                            <?php echo $this->view->r(menuRender('blogroll')); ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="widget contactbox">
                        <h4 class="title">联系我们</h4>
                        <ul class="contact-us clearfix">
                            <li><a href="tencent://message/?uin=1453767261&amp;Meu=yes">
                                    <i class="fa fa-qq"></i><?php echo $coreConfig->tel; ?></a></li>
                            <li><a href="/"><i class="fa fa-weibo"></i><?php echo $coreConfig->name; ?></a></li>
                            <li>
                                <a href="http://jq.qq.com/?_wv=1027&k=2EkiiEz" title="web技术交流群"><i class="fa fa-users"></i><?php echo $coreConfig->email; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="copyright">
                    <span>Copyright &copy; <a href="http://vinceok.com"><?php echo $coreConfig->name; ?></a>&nbsp;&nbsp;</span>
                    <span><?php echo $coreConfig->icp; ?></span>
                    <!-- <span class="hidden-xs">Theme by <a href="http://www.loobo.me">主题笔记</a> & <a href="http://vinceok.com">醉清风博客</a></span> -->
                    <a href="tencent://message/?uin=1453767261&Site=121ask.com&Meu=yes" class="kefu pull-right hidden-xs"><i class="fa fa-qq"></i>在线联系我</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<a class="to-top">
    <span class="topicon"><i class="fa fa-angle-up"></i></span>
    <span class="toptext">Top</span>
</a>



</body>
<script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="/themes/blog/js/jquery.toTop.min.js"></script>
<script src="/themes/blog/js/menu.js"></script>
<script>
    $('.to-top').toTop({
        position: false,
        offset: 1000,
    });
</script>
</html>