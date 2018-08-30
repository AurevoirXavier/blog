window.onload = function () {
    reload();
};
function reload() {
    $('.flexTag').click(function () {
        nowCard = $(this).val();
        $('.fa-map-marker').remove();
        $(this).before('<i class="fa fa-map-marker map-marker"></i>');
        $('.fa-map-marker').animate({
            top : '0',
            opacity : '1'
        });
        allHidden();
        $('.tabCard').eq(nowCard).css({
            display : 'block'
        })
    });

    vMenu = 0;
    $('.vMenu-onBtn').click(function () {
        if (vMenu == 0){
            an_rotate('vMenu-onbtn','','180','400ms');
            an_Move('vMenu','140px','0','400ms');
            an_Move('header','140px','0','600ms');
            an_Move('smallMenu','50px','0','350ms');
            $('header').animate({
                paddingLeft : '80px'
            },function () {
                vMenu = 1;
            });
            $('.blogBody-pos').animate({
                left : '5%'
            })
        }else if (vMenu == 1){
            an_rotate('vMenu-onbtn','','0','400ms');
            an_Move('vMenu','0','0','400ms');
            an_Move('header','0','0','600ms');
            an_Move('smallMenu','0','0','350ms');
            $('header').animate({
                paddingLeft : '220px'
            },function () {
                vMenu = 0;
            });
            $('.blogBody-pos').animate({
                left : '0'
            })
        }
    });
    vMenu_M = 0;
    $('#open-Vmenu').click(function () {
        var h = screen.height;
        if (vMenu_M == 0){
            an_Move('body','-190px','0','350ms');
            an_Move('vMenu','-190px','0','350ms');
            $('body').after("<div class='shading'></div>");
            vMenu_M = 1;
            if (vMenu_M == 1){
                $('.shading').click(function () {
                    an_Move('body','0','0','350ms');
                    an_Move('vMenu','0','0','350ms');
                    $('.shading').remove();
                    vMenu_M = 0;
                });
            }
        }
    });
    PageReload();
    $('.page-navigator > li').click(function () {
            $.pjax({
                url : $(this).find('a').attr('href'),
                container : '#qwq',
                fragment: '#qwq',
                timeout : '50000'
            })
    });
}
function PageReload() {
    $('.comments > ol > .userBB').addClass('mdui-col-offset-md-1');

    $('.comment-children > .comment-list').find('.userBB').removeClass('mdui-col-md-8').addClass('mdui-col-md-11 mdui-col-offset-md-1');
}
function allHidden() {
    $('.tabCard').css({
        display : 'none'
    })
}
function animateFor(event,r,a) {
    $(event).removeClass(r);
    $(event).addClass(a);
} /* 通过添加类名来添加动画*/
function an_Move(obj,x,y,ms) {
    var e = document.getElementById(obj);
    e.style.transition="-webkit-transform "+ms+" ease-out";
    e.style.webkitTransform="translate("+x+","+y+") scale(1)";
}
function an_Scale(obj,x,ms) {
    var e = document.getElementById(obj);
    e.style.transition="-webkit-transform "+ms+" ease-out";
    e.style.webkitTransform="scale("+x+")";
}
function an_rotate(obj,xy,data,ms) {
    var e = document.getElementById(obj);
    e.style.transition="-webkit-transform "+ms+" ease-out";
    e.style.webkitTransform="rotate"+xy+"("+data+"deg) scale(1)";
}
