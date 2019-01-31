<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html lang='zh-cn'>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nprogress.css'); ?>">
    <link href="https://cdn.bootcss.com/aos/3.0.0-beta.6/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
    <link href="https://cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/aos/3.0.0-beta.6/aos.js"></script>
    <script src="https://cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
    <script src="<?php $this->options->themeUrl('js/nprogress.js'); ?>"></script>
    <?php $this->header(); ?>
</head>
<body>
    <!--[if lt IE 10]>
      <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
    <![endif]-->
<div id='loader-wrapper'></div>
<div id='header' class='header' data-aos="fade-down">
    <div class='header-menu-open'>
        <button onclick="Sidebarshow()" title='MENU' class='header-menu-open-nav mdui-color-grey-300' style='background-color: transparent!important;cursor: pointer;' ><i style='font-size: 1.5rem; padding: 0.35rem;border-radius: 2px;transition: all .3s;color: #fff' class="mdui-icon material-icons">menu</i></button>
    </div>
    <div class='header-menu blog-container'>
    <div class='text-home'>
    <a class='' href='<?php $this->options->siteUrl(); ?>' title='返回首页'><h1 class='text-home-title'><?php $this->options->title() ?></h1></a>
    <p class='text-home-subtitle'><?php $this->options->description() ?></p>
    </div>
</div><!-- End .header-menu  -->
</div><!-- End #header  -->
<div style='clear: both;'></div>