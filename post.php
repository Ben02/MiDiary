<?php $this->need('header.php'); ?>

    <div id="content_box">
        <div class="post"><div class="mid">
        <div class="angle"></div>
        <div class="post_date"><?php $this->date('Y-m-d'); ?></div>
        <h1 class="title"><a href="<?php $this->permalink() ?>" title="<?php $this->excerpt(100, '...'); ?>"><?php $this->title() ?></a></h1>
        <div class="content"><?php $this->content(); ?>
</div>
 <div class="post_meta">
              <div class="post_tag"><?php $this->tags(', ', true, ''); ?>,<?php $this->category(','); ?></div>  
              <div class="post_comm"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></div>
<br /><br /><span class="float_l" id="pre_post" style="color: rgb(65, 60, 54); font-family: 'Century Gothic', 'Trebuchet MS', 'Hiragino Sans GB',微软雅黑,'Microsoft Yahei',Tahoma, Helvetica, Arial, 'SimSun', sans-serif; line-height: 21px; "><?php $this->thePrev(); ?></span>
<span class="float_r" id="next_post" style="color: rgb(65, 60, 54); font-family: 'Century Gothic', 'Trebuchet MS', 'Hiragino Sans GB',微软雅黑,'Microsoft Yahei',Tahoma, Helvetica, Arial, 'SimSun', sans-serif; line-height: 21px; "><?php $this->theNext(); ?></span>
            </div></div>
      </div>
<div class="post-bot"></div>
		<?php $this->need('comments.php'); ?>
    </div><!-- end #content-->

	<?php $this->need('footer.php'); ?>