<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle('', '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')): ?><?php endif; ?></title>

<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />

<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body>
<div id="main">
  <div class="left">
    <div class="photo"><img src="<?php $this->options->themeUrl('images/photo.jpg'); ?>"></div>
 <div id="sitename"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></div>
    <div class="about"><?php $this->options->description() ?></div>
 <div id="navbar">
	<a href="/admin/" class="home" title="登录or注册">登录or注册</a>
	<a href="/archives/"  class="archive" title="文章归档">文章归档</a>
	<a href="/guestbook/" class="contact" title="留言板">留言板</a>
<a href="<?php $this->options->siteUrl(); ?>feed" class="rss" title="RSS订阅" target="_blank">RSS订阅</a></div>
    <div class="clear"></div>
    <div id="footer">Powered by <a href="http://typecho.org" target="_blank">Typecho)))</a><br>Theme by <a href="http://haow.in/blogmi/" target="_blank">BlogMi</a>
</div>

  </div>

  <div id="content">
    <div class="main">