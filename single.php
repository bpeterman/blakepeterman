<?php get_header(); ?>
<div id="main">
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id ="posts">
    <div id="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
    <div id="posts-date">Posted on <?php the_time('F jS, Y') ?></div>
    <div id="posts-text"><?php the_content(__('')); ?></div>
    
    </div>
    <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
<?php comments_template(); ?> 
</div>
</div>

<?php get_footer(); ?>