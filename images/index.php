<?php if (!isset($mc_config)) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php if (mc_is_post() || mc_is_page()) { mc_the_title(); ?> | <?php mc_site_name(); } else { mc_site_name(); ?> | <?php mc_site_desc(); }?></title>
<link href="<?php mc_theme_url('style.css'); ?>" type="text/css" rel="stylesheet"/>
<!--[if IE 6]><script type="text/javascript" src="<?php mc_theme_url('DD_belatedPNG.js'); ?>" ></script><script type="text/javascript">DD_belatedPNG.fix('.angle,.post_date,.post_tag,.post_comm,.post-bot');</script><![endif]-->
</head>
<body>
<div id="main">
  <div class="left">
    <div class="photo"><img src="<?php mc_theme_url('photo.jpg'); ?>"></div>
    <div id="sitename"><a href="<?php mc_site_link(); ?>" title="<?php mc_site_desc(); ?>"><?php mc_site_name(); ?></a></div>
    <div class="about">简短介绍或者联系方式什么的；简短介绍或者联系方式什么的</div>
    <div id="navbar"><a href="<?php mc_site_link(); ?>/" class="home" title="首页">首页</a><a href="<?php mc_site_link(); ?>/?archive/" class="archive" title="文章存档">文章存档</a><a href="<?php mc_site_link(); ?>/?contact/" class="contact" title="联系方式">联系方式</a><a href="<?php mc_site_link(); ?>/?rss/" class="rss" title="RSS订阅" target="_blank">RSS订阅</a></div>
    <div class="clear"></div>
    <div id="footer">Powered by <a href="http://haow.in/blogmi/" target="_blank">BlogMi</a></div>
  </div>
  <div id="content">
    <div class="main">
    <div id="content_box">
      <?php if (mc_is_post()) { ?>
      <div class="post"><div class="mid">
        <div class="post_date"><?php mc_the_date(); ?></div>
        <h1 class="title"><?php mc_the_link(); ?></h1>
        <div class="content">
          <?php mc_the_content(); ?>
        </div>
            <div class="post_meta">
              <div class="post_tag"><?php mc_the_tags('','',''); ?></div>
              <div class="post_comm"><a href="<?php mc_post_link(); ?>#comm">评论</a></div>
            </div>
      </div></div><div class="post-bot"></div>
        <?php if (mc_can_comment()) { ?>
        <div id="comm"><?php mc_comment_code(); ?></div>
        <?php } ?>
      <?php } else if (mc_is_page()) { ?>
      <div class="post"><div class="mid">
        <div class="angle"></div>
        <h1 class="title"><?php mc_page_title(); ?></h1>
        <div class="content">
          <?php mc_the_content(); ?>
        </div>
      </div></div><div class="post-bot"></div>
      <?php if (mc_can_comment()) { ?>
      <div id="comm"><?php mc_comment_code(); ?></div>
      <?php } ?>
      <?php } else if (mc_is_archive()) { ?>
      <div class="post"><div class="mid">
        <div class="angle"></div>
        <h1 class="title">文章存档</h1>
        <div class="content">
<table width="280" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:24px auto;"><tbody><tr><td width="140" style="vertical-align:top;"><h1 class="date_list">月份</h1><ul id="list"><?php mc_date_list(); ?></ul></td><td width="140" style="vertical-align:top;"><h1 class="tag_list">标签</h1><ul id="list"><?php mc_tag_list(); ?></ul></td></tr></tbody></table>
        </div>
      </div></div><div class="post-bot"></div>
      <?php } else { ?>
      <?php if (mc_is_tag()) { ?>
      <div id="page_info"><span><?php mc_tag_name(); ?></span></div>
      <?php } else if (mc_is_date()) { ?>
      <div id="page_info"><span><?php mc_date_name(); ?></span></div>
      <?php } ?>
      <?php while (mc_next_post()) { ?>
      <div class="post"><div class="mid">
        <div class="angle"></div>
        <div class="post_date"><?php mc_the_date(); ?></div>
        <h1 class="title"><?php mc_the_link(); ?></h1>
        <div class="content">
          <?php mc_the_content(); ?>
        </div>
            <div class="post_meta">
              <div class="post_tag"><?php mc_the_tags('','',''); ?></div>
              <div class="post_comm"><a href="<?php mc_post_link(); ?>#comm">评论</a></div>
            </div>
      </div></div><div class="post-bot"></div>
      <?php } ?>
    </div>
      <div class="clear"></div>
      <div id="page_bar">
        <?php if (mc_has_new()) { ?><span style="float:left;"><?php mc_goto_new('«'); ?></span><?php } ?>
        <?php if (mc_has_old()) { ?><span style="float:right;"><?php mc_goto_old('»'); ?></span><?php } ?>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
</body>
</html>
