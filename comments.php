<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt('comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>">
        <div class="comment-author">
            <?php $comments->gravatar('50', ''); ?>
            <div class="fn">
            <p><?php $comments->author(); ?></p>
            <p><a href="<?php $comments->permalink(); ?>">
            <time style='color: rgba(171,171,171.5)'><?php $comments->date('Y-m-d H:i'); ?></time> · 
            <span class="comment-reply"><?php $comments->reply(); ?></span>
        </div></p>
        </cite>
        </div>
        <div class='comment-author-content'><?php $comments->content(); ?></div>
        <div class="comment-meta">
        
        </div>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class='blog-comments' data-aos='fade-up'>
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h4 id="response"><?php _e('<i style="font-size: 2rem;" class="mdui-icon material-icons">comment</i> 评论卡'); ?></h4>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form" autocomplete="off">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
                <i class="mdui-icon material-icons">account_box</i>
                <label for="author" class="required"><?php _e(''); ?></label>
    			<input type="text" name="author" id="author" class="text"  placeholder=" 昵称 *"  value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
                <i class="mdui-icon material-icons">email</i>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e(''); ?></label>
                <input type="Email" name="mail" id="mail" class="text"  placeholder=" Mail *" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                <div class="mdui-textfield-error">邮箱格式错误</div>
    		</p>
    		<p>
            <i class="mdui-icon material-icons">home</i>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e(''); ?></label>
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://(选填)'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<div>
                <label for="textarea" class="required"><?php _e(''); ?></label>
                <textarea name="text" id="textarea" class="textarea" required placeholder=" 内容 *" ><?php $this->remember('text'); ?></textarea>
            </div>
            <div class='comments-submit'>
                <button type="submit" class="submit" title='发送'>发送</button>
            </div>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
