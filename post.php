<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main blog-container" id="main" role="main">
    <article class="blog-page-post" aos="zoom-in" itemscope itemtype="http://schema.org/BlogPosting">
        <h3 class="blog-page-post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
        <ul class="blog-page-post-meta">
            <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
            <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
            <li><span><?php _e(getViewsStr($this)); /* $this 是 Widget_Archive 对象 */ ?></span></li>
            <li><p itemprop="keywords" class="tags" style='margin:0' ><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p></li>
        </ul>
        <div class="blog-page-post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>
    <div class='blog-container'>
    <ul class="post-near">
        <li class='pre-next-left' title='上一篇'>
        <a href='#' title='没有了'>
           <i class="mdui-icon material-icons">arrow_back</i>上一篇</a>
           <span class='pre-next-link-left'><?php $this->thePrev('%s','<span>没有更多了</span>'); ?></span>
        </li>
        <li class='pre-next-right' title='下一篇'>
        <a href='#' title='没有了'>
        下一篇<i class="mdui-icon material-icons">arrow_forward</i></a>
            <span class='pre-next-link-right'><?php $this->theNext('%s','<span>没有更多了</span>'); ?></span>
        </li>
    </ul>
    <div style='clear: both;'></div>
    </div>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
