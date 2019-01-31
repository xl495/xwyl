<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<nav class='sidebar' style=''>
    <div class='sidebar_left_top'>
        <button onclick='Sidebarhide()' class='sidebar_hide'><i style='font-size: 1.5rem;color: #fff;' class="mdui-icon material-icons">clear_all</i></button>
    </div>
    <ul class='ul-nav sidebar_main'>
        <li><a href='<?php $this->options->siteUrl(); ?>'onclick='Sidebarhide()'><i class="mdui-icon material-icons">home</i><span>&nbsp&nbsp&nbsp&nbsp首页</span></a></li>
        <li><a onclick='$(".ul-nav-list").slideToggle();'><i class="mdui-icon material-icons">list</i><span>&nbsp&nbsp&nbsp&nbsp分类</span></a>
        <ul class='ul-nav ul-nav-list' style='margin:0;padding: 0'>
            <?php $this->widget('Widget_Metas_Category_List')
            ->parse('<li style="background-color: #fff;"><a onclick="Sidebarhide()" href="{permalink}">{name}</a></li>'); ?>
        </ul>
        </li>
        <li><a onclick='Sidebarhide()' href=''><i class="mdui-icon material-icons">account_box</i><span>&nbsp&nbsp&nbsp&nbsp关于</span></a></li>
    </ul>
</nav>
<div style='clear: both;'></div>