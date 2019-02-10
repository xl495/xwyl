<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<nav class='sidebar' style=''>
    <div class='sidebar_left_top'>
        <button onclick='Sidebarhide()' class='sidebar_hide'><i style='font-size: 1.5rem;color: #fff;' class="mdui-icon material-icons">clear_all</i></button>
    </div>
    <div id='search-box'>
        <form method="post" action="">
        <div class='search-icon'><i class="mdui-icon material-icons">search</i></div>
        <input type="text" class="text" name='s' placeholder="GO 回车搜索"/>
        </form>
    </div>
    <ul class='ul-nav sidebar_main'>
        <li><a href='<?php $this->options->siteUrl(); ?>'onclick='Sidebarhide()'><i class="mdui-icon material-icons">home</i><span>&nbsp&nbsp首页&nbsp&nbsp</span></a></li>
        <li><a onclick='$(".ul-nav-list").slideToggle();'><i class="mdui-icon material-icons">list</i><span>&nbsp&nbsp分类&nbsp&nbsp</span></a>
        <ul class='ul-nav ul-nav-list' style='margin:0;padding: 0'>
            <?php $this->widget('Widget_Metas_Category_List')
            ->parse('<li><a onclick="Sidebarhide()" href="{permalink}">{name}</a></li>'); ?>
        </ul>
        </li>
        <li><a onclick='Sidebarhide()' href='<?php $this->options->themeUrl('links.php'); ?>'><i class="mdui-icon material-icons">account_box</i><span>&nbsp&nbsp关于&nbsp&nbsp</span></a></li>
    </ul>
</nav>
<div style='clear: both;'></div>