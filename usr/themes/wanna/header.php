<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/main.css'); ?>" />
    <link rel="icon" href="<?php echo $this->options->icon ?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/css/mdui.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//s.uvwvu.xyz/live2d/waifu.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
    <?php $this->header(); ?>
</head>
<body>
<div class="pjax-load">
    <img src="<?php $this->options->themeUrl('img/load.gif'); ?>">
    <h3 style="margin-top: 15px;color: white;">Loading...</h3>
</div>
<header id="header">
    <ul class="header-tab-1">
        <li class="mdui-ripple">
            <a href="<?php $this->options->siteUrl(); ?>">
                <?php $this->options->title() ?>
            </a>
        </li>
        <li class="mobie-head-search justCenter">
                <form class="m-s-input" action="" method="post">
                    <input type="text" name="s" placeholder="Search..." />
                    <button class="justCenter btnclearDcss">
                        <i class="mdui-icon material-icons" style="font-size: 22px;color: gray;">search</i>
                    </button>
                </form>
        </li>
    </ul>
    <ul class="header-tab-1 header-tab-2" >
        <?php if($this->user->hasLogin()): ?>
                    <li><a href="<?php $this->options->adminUrl(); ?>">Welcome, <?php $this->user->screenName(); ?></a></li>
        <?php else: ?>
            <li class="loginBtn"><a href="<?php $this->options->adminUrl(); ?>">Sign in<i class="mdui-icon material-icons">expand_more</i></a></li>
        <?php endif; ?>
                    <a href="<?php $this->options->siteUrl(); ?>">
                        <li class="mobie-head"><?php $this->options->title() ?></li>
                    </a>
                    <li class="mdui-ripple" id="controlBtn">
                        <button class="mb-btn" id="open-hMenu">
                            <i id="pull_down_btn" class="fa fa-chevron-down fa-lg"></i>
                        </button>
                        <button class="mb-btn mdui-ripple" id="open-Vmenu">
                            <i id="sidebar_btn" class="fa fa-chevron-left fa-lg"></i>
                        </button>
                    </li>
    </ul>
    <script>
        switchNow = 0;
        var mh = $('.mobie-head');
        $('#open-hMenu').click(function () {
            if (switchNow == 0){
                an_Move('header','0','160px','400ms');
                animateFor('#controlBtn','controlBtnSB','controlBtnSS');
                $('#pull_down_btn').attr('class', 'fa fa-chevron-up fa-lg');
                mh.css({display: 'none'});
                $('#open-Vmenu').css({display : 'none'});
                switchNow = 1;
            }else {
                an_Move('header','0','0','400ms');
                animateFor('#controlBtn','controlBtnSS','controlBtnSB');
                $('#pull_down_btn').attr('class', 'fa fa-chevron-down fa-lg');
                mh.css({display: 'block'});
                $('#open-Vmenu').css({display : 'inline-block'});
                switchNow = 0;
            }
        });
    </script>
</header>
<div class="bg-ovo"></div>

<script>
  logo = '<?php echo $this->options->logo ?>';
    bgurl = '<?php echo $this->options->bgUrl ?>';
    if (bgurl == ''){
        bgurl = '/usr/themes/wanna/img/bg.jpg';
    }
    if (logo == ''){
        logo = '/usr/themes/wanna/img/icon.jpg'
    }
  $('.bg-ovo').css({
      backgroundImage : "url("+bgurl+")"
  });
</script>
<div id="body">
