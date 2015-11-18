<?php get_header(); ?>

<section class="ypj-content" ng-controller="yuppieJunkCtrl">

    <?php get_header('nav'); ?>

    <div class="ypj-inner-wrapper ypj-inner-content">

        <article>

            <?php woocommerce_content(); ?>

        </article>

    </div>

    <?php get_footer('nav'); ?>

</section>

<?php get_footer(); ?>
