<?php $this->need('header.php'); ?>

    <div id="content_box">
        <div class="post"><div class="mid">
        <div class="angle"></div>
        <div class="post_date"><?php $this->date('Y-m-d'); ?></div>
        <h1 class="title"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h1>
        <div class="content"><?php $this->content(); ?>
</div>
 <div class="post_meta">
              <div class="post_comm"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></div>
            </div>
      </div></div><div class="post-bot"></div>
		<?php $this->need('comments.php'); ?>
    </div><!-- end #content-->

	<?php $this->need('footer.php'); ?>