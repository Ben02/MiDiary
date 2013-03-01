<?php $this->need('header.php'); ?>

     <div id="content_box">
    <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
        <div class="post"><div class="mid">
        <div class="angle"></div>
        <div class="post_date"><?php $this->date('Y-m-d'); ?></div>
        <h1 class="title"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h1>
        <div class="content"><?php $this->content('阅读剩余部分'); ?>
</div>
 <div class="post_meta">

              <div class="post_tag"><?php $this->tags(', ', true, ''); ?>,<?php $this->category(','); ?></div>
              <div class="post_comm"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></div>
            </div>
      </div></div><div class="post-bot"></div>
	<?php endwhile; ?>
    <?php else: ?>
        <div class="post">
            <h2 class="entry_title"><?php _e('没有找到内容'); ?></h2>
        </div>
    <?php endif; ?>

   <div id="page_bar">
                <span style="float:right;">
<?php if (!$this->is('single')): ?>
<?php $this->pageLink('&laquo;  ', 'prev') ?><?php $this->pageLink('&raquo;', 'next') ?>
<?php endif; ?>
</div>
    </div><!-- end #content-->

	<?php $this->need('footer.php'); ?>