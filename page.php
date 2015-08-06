<?php get_header(); ?>
<div id="page">
    <div id="content">
		<?php if( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post();?>    	
        <div class="post" id="post-<?php the_ID(); ?>">
            <h2 class="title"><?php the_title(); ?></h2>
            <p class="posted">نوشته شده در <?php the_time('d M Y  G:i'); ?> توسط <?php the_author(); ?></a></p>
            <div class="entry">
                <?php the_content('ادامه مطلب...'); ?>
		<?php /* ?>
                <div class="meta">
                    <p>
                    <span class="listed">در بخش : <?php the_category(' '); ?></span>
                    <span class="tags">برچسب ها : <?php the_tags('',' ','<br />');?></span>
                    </p>
                </div><!--meta-->
		<?php */ ?>
            </div><!--entry-->
        </div><!--post-->
        <?php endwhile; ?>
		<?php else : ?>
          <h2>مطلبی یافت نشد!</h2>
        <?php endif; ?>
        <div id="navPages">        
          <h3><?php wp_link_pages(array('before'=>'صفحه : ','next_or_number'=>'number')); ?></h3>        
        </div><!--end navPages-->
		<?php /* comments_template(); */ ?>
    </div><!--content-->
    <?php get_sidebar(); ?>
</div><!--page-->
<?php get_footer(); ?>