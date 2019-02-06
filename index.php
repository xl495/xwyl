<?php
/**
 * 
 * 
 * @package xwyl
 * @author Xliang
 * @version 0.11
 * @link https://xlaiy.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <!-- 引进侧栏部分 -->
<?php $this->need('sidebar.php'); ?>
<div id='main' class='main blog-container' >
<a href="<?php $this->author->permalink(); ?>">
<?php while($this->next()): ?>
    <div class="post" data-aos='fade-up'>
	<a class='post-links' href="<?php $this->permalink() ?>"><?php echo img_postthemb($this)?> </a><!-- 首页缩略图 -->
	<a href="<?php $this->permalink() ?>">
	<h3 class="entry_title"><?php $this->title() ?></h3>
	<div class="entry_data" >
	<span class="entry_data_type"><?php $this->category(','); ?> · <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span><span> · <?php $this->date('m月 d日'); ?></span>
	</div>
	<div onclick="window.open('<?php $this->permalink() ?>','_self')" class="entry_text">
	  <?php $this->content(); ?>
	</div>
	</a>
</div>
<?php endwhile; ?>

 <?php while($this->next()): ?>

	<?php endwhile; ?>

<?php $this->need('footer.php'); ?>
