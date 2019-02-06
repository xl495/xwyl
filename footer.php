<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div> <!-- End #main -->
<div class='gettop' onclick="gettop()" title='返回顶部'></div>
<div style='clear:both;height: 150px;'></div>
<footer id="footer" class='footer' role="contentinfo">
  <div class='blog-container' style='font-size:14px;text-align: right;color: #eee'>
  <br ><br >
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
    <p id="hitokoto" style='margin:0'>:D 获取中...</p><!-- 一言 -->
    <p id='ip-f'></p>
</div>
</footer>
 <!-- end #footer  -->
<?php $this->footer(); ?>
<script src='<?php $this->options->themeUrl('js/main.js'); ?>'></script>
<script>
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
container: '#main',
fragment: '#main',
timeout: 8000
});
varoptions={
bg:'#000',
};
$(document).on('pjax:start', function() { NProgress.start(); });
$(document).on('pjax:end',   function() { NProgress.done();});
$(document).on('pjax:complete',
  function(){
    fancyapps(); // 灯箱函数重载
    comments();  // 评论样式
    commentssubmit(); // 评论提交按钮
    prenext(); //上一篇下一篇
});
</script>
<script>
AOS.init({
  offset: 120,
  duration: 500,
  easing: 'ease-in-sine',
  delay: 300,
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bluebird@3/js/browser/bluebird.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/whatwg-fetch@2.0.3/fetch.min.js"></script>
<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script><!-- 搜狐IP -->

<!--End-->
<script>
  fetch('https://v1.hitokoto.cn/?c=b')
    .then(function (res){
      return res.json();
    })
    .then(function (data) {
      var hitokoto = document.getElementById('hitokoto');
      hitokoto.innerText = data.hitokoto; 
    })
    .catch(function (err) {
      console.error(err);
    })
</script>
</body>
</html>
