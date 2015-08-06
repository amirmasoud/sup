<?php get_header(); ?>
<div id="page">
    <div id="content">
		  <?php if(have_posts()):?>

          <?php if(is_category()) { ?>

              <h2 id="archiveTitle">آرشیو دسته ی: <?php single_cat_title(); ?></h2>

          <?php } elseif(is_tag()) { ?>

              <h2 id="archiveTitle">برچسب گذاری شده با : <?php single_tag_title(); ?></h2>

          <?php } elseif(is_day()) { ?>

              <h2 id="archiveTitle">آرشیو <?php the_time('d M Y'); ?></h2>

          <?php } elseif(is_month()){ ?>

              <h2 id="archiveTitle">آرشیو <?php the_time('M'); ?> ماه <?php the_time('Y'); ?></h2>

          <?php } elseif(is_year()) { ?>

              <h2 id="archiveTitle">آرشیو سال <?php the_time('Y'); ?></h2>

          <?php } elseif(is_author()) { ?>

              <h2 id="archiveTitle">آرشیو <?php ?></h2>

          <?php } elseif(isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

              <h2 id="archiveTitle">آرشیو ها</h2>

        <?php } ?>
        <?php while(have_posts()): the_post();?>    
        <div class="post" id="post-<?php the_ID(); ?>">
            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="posted">نوشته شده در <?php the_time('d M Y  G:i'); ?> توسط <?php the_author(); ?></p>
            <div class="entry">
            	<?php the_content('ادامه مطلب...'); ?>
                <div class="meta">
                    <p>
                    <span class="listed">در بخش : <?php the_category(' '); ?></span>
                    <span class="comments"><a href="<?php comments_link(); ?>" title="نظر دادن"><?php comments_number('بدون نظر','یک نظر','% نظر',' | '); ?></a></span>
                    </p>
                </div>
            </div>
        </div>
		<?php endwhile; ?>
        <?php else : ?>
        <h2>مطلبی یافت نشد!</h2>
        <?php endif; ?>
        <div id="navPages">

            <?php posts_nav_link('  ','<div style="float:left;"><p>مطلب های قبلی</p></div>','<div><p>مطلب های بعدی</p></div>'); ?>

        </div><!--end navPages-->
        
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>