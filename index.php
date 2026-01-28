<?php get_header(); ?>

<main class="container section">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (!is_front_page()) : ?>
                    <h1 class="section-title"><?php the_title(); ?></h1>
                <?php endif; ?>
                
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'cyberpunk-resume' ); ?></p>
        <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>
