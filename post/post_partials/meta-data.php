<div class="meta-data">
    <span class="pub-date">
        <i class="fa fa-calendar"></i><?php echo get_the_date(); ?>
    </span>
    <a href="<?php the_permalink() ?>#comments" class="comments">
        <i class="fa fa-comments"></i><?php comments_number( 'No responses', 'One response', '% responses' ); ?>
    </a>
</div>