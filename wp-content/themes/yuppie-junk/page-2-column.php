<?php
/*
 Template Name: Column 2
*/
?>

<?php get_header(); ?>

<section class="ypj-content" ng-controller="yuppieJunkCtrl">

    <?php get_header('nav'); ?>

    <div class="ypj-inner-wrapper ypj-inner-content">

        <main>

            <h1 class="page-title"><?php the_title(); ?></h1>

            <div class="ypj-column-intro">
                <?php the_field('intro'); ?>
            </div>

            <div class="ypj-column-2">
                <div class="ypj-column-2__cell">
                    <div class="panel panel-default ypj-column-2__panel">
                        <div class="panel-body">
                            <?php the_field('column_1'); ?>
                        </div>
                    </div>
                </div>

                <div class="ypj-column-2__cell">
                    <div class="panel panel-default ypj-column-2__panel">
                        <div class="panel-body">
                            <?php the_field('column_2'); ?>
                        </div>
                    </div>
                </div>

            </div>


        </main>


    </div>

    <?php get_footer('nav'); ?>

</section>

<?php get_footer(); ?>


<h3>Premium Podcast</h3><p>Listen to exclusive podcasts only available to YuppieJunk Premium Members.</p><p><a class="btn btn-primary" href="/premium-podcast">Listen</a> <a class="btn btn-success" href="/sign-in">Sign In</a></p>

<h3>Membership Options</h3><p>Get exclusive podcasts, content and early access to special events and merchandise</p><p><a class="btn btn-primary" href="/membership-options/">Lean More</a></p>
