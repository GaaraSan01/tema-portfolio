<?php get_header(); ?>
<main>
    <?php
    if (have_posts()):
        while (have_posts()): the_post();
    ?>
        <?php
            get_template_part('partials/content-page');
        endwhile;
        ?>
    <?php
    else:
    ?>
        <p><?php esc_html_e('Nothing yet to be displayed!', 'vhportfolio') ?></p>
    <?php
    endif;
    ?>
</main>
<?php get_footer(); ?>