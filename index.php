<?php
﻿/**
 * 这是一款移植自BlogMi的主题，由冷轩信移植，Ben做细节优化
 * 
 * @package MiDiary 
 * @author Ben&冷轩信
 * @version 1.0.0
 * @link http://ben-lab.com/
 */
?> 
<?php $this->need('header.php');?>

     <div id="content_box">
	<?php while($this->next()): ?>
        <div class="post"><div class="mid">
        <div class="angle"></div>
        <div class="post_date"><?php $this->date('Y-m-d'); ?></div>
        <h1 class="title"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h1>
        <div class="content"><?php $this->content('阅读剩余部分...'); ?>
</div>
 <div class="post_meta">

              <div class="post_tag"><?php $this->tags(', ', true, ''); ?>,<?php $this->category(','); ?></div>
              <div class="post_comm"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></div>
            </div>
      </div></div><div class="post-bot"></div>
			<?php endwhile; ?>

<div id="page_bar">
                <span style="float:right;">
<?php if (!$this->is('single')): ?>
<?php $this->pageLink('&laquo;  ', 'prev') ?><?php $this->pageLink('&raquo;', 'next') ?>
<?php endif; ?>
</div>
    </div><!-- end #content-->

	<?php $this->need('footer.php'); ?>