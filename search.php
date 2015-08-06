<?php get_header(); ?>
<div id="page">
    <div id="content">
        	<h2>نتایج جستجو:</h2>
	        <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post();?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            	<p class="posted">نوشته شده در <?php the_time('d M Y  G:i'); ?> توسط <?php the_author(); ?></p>
            <div class="entry">
            		<?php the_content('ادامه مطلب...'); ?>
                <div class="meta">
                    <p>
                    <span class="listed">در بخش : <?php the_category(' '); ?></span>
                    <span class="comments"><a href="<?php comments_link(); ?>" title="نظر دادن"><?php comments_number('بدون نظر','یک نظر','% نظر',' | '); ?></a></span></p>
                </div>
            </div>
        </div>
		<?php endwhile; ?>
        <?php else : ?>
        <h2>مطلبی یافت نشد!</h2>
        <?php endif; ?>
        <div id="navPages">

            <?php posts_nav_link('  ','<a href="#">مطلب های قبلی</a>','<a href="#">مطلب های بعدی</a>'); ?>

        </div><!--end navPages-->
        
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>