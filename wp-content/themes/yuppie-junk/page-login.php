<?php
/*
 Template Name: Login
*/
?>

<?php
$loginArgs = array(
    'redirect'       => 'https://yuppiejunk.com/premium-podcast/'
);
?>

<?php get_header(); ?>

<section class="ypj-content" ng-controller="yuppieJunkCtrl">

    <?php get_header('nav'); ?>

    <div class="ypj-inner-wrapper ypj-inner-content">

        <main>

            <h1 class="page-title"><?php the_title(); ?></h1>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Sign In</h3>
                            <?php
                            if ( is_user_logged_in() ) { ?>
                                <p>You are currently logged in.</p>
                                <p><a href="<?php echo wp_logout_url(home_url()); ?> ">Sign Out</a></p>
                            <? } else { ?>
                                <?php login_with_ajax($loginArgs); ?>
                            <? } ?>
                        </div>
                    </div>
                </div>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : ?>

                <?php endif; ?>
            </div>


        </main>


    </div>

    <?php get_footer('nav'); ?>

</section>

<?php get_footer(); ?>

