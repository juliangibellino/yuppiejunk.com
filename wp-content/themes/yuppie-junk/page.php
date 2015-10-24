<?php
/*
 Template Name: Page
*/
?>

<?php get_header(); ?>

<section class="ypj-content" ng-controller="yuppieJunkCtrl">

    <?php get_header('nav'); ?>

    <div class="ypj-inner-wrapper">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <header class="article-header">
                <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
            </header> <?php // end article header ?>

            <section class="entry-content cf" itemprop="articleBody">
                <?php
                // the content (pretty self explanatory huh)
                the_content();
                ?>
            </section> <?php // end article section ?>


        </article>

        <?php endwhile; else : ?>

            <article id="post-not-found" class="hentry cf ypj-inner-wrapper">
                <header class="article-header">
                    <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                </header>
                <section class="entry-content">
                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                </section>
                <footer class="article-footer">
                    <p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
                </footer>
            </article>

        <?php endif; ?>

    </div>

<?php get_footer('nav'); ?>

</section>

<?php get_footer(); ?>
