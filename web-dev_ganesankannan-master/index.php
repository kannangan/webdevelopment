<?php
/**
 * index.php
 *
 * @link https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png
 */
?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <?php
            if ( have_posts() ) : while ( have_posts() ) :
                the_post();
                echo '<article id="post-' . get_the_ID() . '">';
                the_content();
                echo '</article>';
            endwhile; endif;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
