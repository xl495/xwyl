// header 
$(window).scroll(function(){
    var $scroll = $(document).scrollTop();
    var $widthmm = $(window).width();
    if($widthmm>768){
    if($scroll > 200){
        $("#header").css("transition","none");
        $(".gettop").addClass("gettop-fixed");
    }
    if($scroll < 100){
        $(".gettop").removeClass("gettop-fixed");
        $("#header").css("transition","all 0.3s");
    }
}
});
// get top
function gettop() {
    $('body,html').animate({scrollTop:0},700);
    return false;
}
// header-menu-open-nav
var menudeg = 180;
function Sidebarshow(){
    $(".sidebar").css({"left":"0"});
    $(".header-menu-open-nav>i").css({"transform":"rotate("+ menudeg +"deg)"});
    menudeg+=180;
}
// Sidebar hide
function Sidebarhide(){
    $(".sidebar").css({"left":"-250px"});
}
$(function(){
    $(window).scroll(function () {
        var scrollTop =$(this).scrollTop();//滚动高度
        var Sidebaropacity = $(".sidebar").css("opacity"); 
        if(scrollTop != 0){
            if (Sidebaropacity = 1){
                Sidebarhide();
            }
        }
    });
});
$(function(){
    $('#main,.blog-container,#footer').click(function(){
        Sidebarhide();
    });
})
// pre-next link
function prenext(){
    var link1 = $(".pre-next-link-left>a").attr("href");
    var title1 = $(".pre-next-link-left>a").attr("title");
    var link2 = $(".pre-next-link-right>a").attr("href");
    var title2 = $(".pre-next-link-right>a").attr("title");
    $(".pre-next-left>a").attr({'href':link1,'title':title1});
    $(".pre-next-right>a").attr({'href':link2,'title':title2});
}
prenext();
// #comments input style 
function comments(){
$(document).ready(function(){
    $("#author").focus(function(){
        $("#author").css({"border-color":"#FF34B3"});
    });
    $("#author").blur(function(){
        $("#author").css({"border-color":"#999"});
    });
    });
$(document).ready(function(){
    $("#mail").focus(function(){
        $("#mail").css({"border-color":"#FF34B3"});
    });
    $("#mail").blur(function(){
        $("#mail").css({"border-color":"#999"});
    });
});
$(document).ready(function(){
    $("#url").focus(function(){
        $("#url").css({"border-color":"#FF34B3"});
    });
    $("#url").blur(function(){
        $("#url").css({"border-color":"#999"});
    });
});
};
comments();
// 评论按钮
function commentssubmit(){
    $("#textarea").focus(function(){
        $(".comments-submit").css("opacity","1")
    });
    $("#textarea").blur(function(){
        $(".comments-submit").css("opacity","0")
    });
};
commentssubmit();
//  手机端顶部按钮
$(document).ready(function(){
    $(".header-menu-item").click(function(){
        $(".header-menu-subnav").slideToggle(300);
    });
    $(".header-menu-item").click(function(){
        $(".header-menu-item").toggleClass("header-menu-item2");
    });
})
$links =$('.post-links').attr('href');
// fancyapps 设置
function fancyapps(){
    var imglink = new Array();
    $(function(){
        $('.blog-page-post [src]').each(function(){
         imglink.push($(this).attr('src'));
        });
    });
    $(function(){
        var Img = $("div [src]");
        console.log(Img.length);
        for(var i =0;i<Img.length;i++){
        $('.blog-page-post [src]').eq(i).wrapAll("<a data-fancybox='gallery' href='"+imglink[i]+"'</a>");
        }
    })
}
fancyapps();
$(function(){
    $("#ip-f").text("欢迎来自"+returnCitySN.cname+"的朋友");
})
/*  平滑滚动
var $window = jQuery(window); //Window object
var scrollTime = 150; //Scroll time
var scrollDistance = 300; //Distance. Use smaller value for shorter scroll and greater value for longer scroll
var mobile_ie = -1 !== navigator.userAgent.indexOf("IEMobile");

function smoothScrollListener(event) {
  event.preventDefault();
  var delta = event.wheelDelta / 120 || -event.detail / 3;
  var scrollTop = $window.scrollTop();
  var finalScroll = scrollTop - parseInt(delta * scrollDistance);
  $('html,body').stop().animate({scrollTop: finalScroll},scrollTime);
}

if (!jQuery('html').hasClass('touch') && !mobile_ie) {
  if (window.addEventListener) {
    window.addEventListener('mousewheel', smoothScrollListener, false);
    window.addEventListener('DOMMouseScroll', smoothScrollListener, false);
  }
}
*/
