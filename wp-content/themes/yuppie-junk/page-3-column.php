<?php
/*
 Template Name: Column 3
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

            <div class="ypj-column-3">
                <div class="ypj-column-3__cell">
                    <div class="panel panel-default ypj-column-3__panel">
                        <div class="panel-body">
                            <?php the_field('column_1'); ?>
                        </div>
                    </div>
                </div>

                <div class="ypj-column-3__cell">
                    <div class="panel panel-default ypj-column-3__panel">
                        <div class="panel-body">
                            <?php the_field('column_2'); ?>
                        </div>
                    </div>
                </div>

                <div class="ypj-column-3__cell">
                    <div class="panel panel-default ypj-column-3__panel">
                        <div class="panel-body">
                            <?php the_field('column_3'); ?>
                        </div>
                    </div>
                </div>

            </div>


        </main>


    </div>

    <?php get_footer('nav'); ?>

</section>

<?php get_footer(); ?>

