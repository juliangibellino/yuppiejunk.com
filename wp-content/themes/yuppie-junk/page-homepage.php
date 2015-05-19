<?php
/*
 Template Name: Homepage
*/
?>

<?php get_header(); ?>

<section class="ypj-homepage" ng-controller="yuppieJunkCtrl">

    <article id="home" class="ypj-home-hero">
        <div class="ypj-inner-wrapper">
            <div class="yjp-hero-content">
                <h1 class="ypj-hero-logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/library/images/yuppie-junk-hero-logo.png" alt="Yuppie Junk" />
                </h1>

                <div class="ypj-hero-lead-in">
                    <p><?php the_field('hero_lead_in'); ?></p>

                    <a scroll-to="" data-href="#episodes" class="ypj-hero-btn btn btn-lg btn-primary">Listen</a>
                </div>
            </div>
        </div>
    </article>
    <article id="episodes" class="ypj-recent-episodes" data-ng-controller="recentEpisodesCtrl">
        <div class="ypj-inner-wrapper">
            <h2 class="ypj-episodes-header">Recent Episodes</h2>

            <?php
            // Get the Pods object and run find()
            $currentEpisodeParams = array(
                'orderby' => 't.post_date DESC',
                'limit' => '1'
            );

            $currentEpisode = pods('podcast', $currentEpisodeParams);

            while ( $currentEpisode->fetch() ) {

                $title = $currentEpisode->display( 'post_title' );
                $summary = $currentEpisode->display( 'post_content' );
                $episodeNumber = $currentEpisode->total_found();

                if( function_exists('powerpress_get_enclosure_data') )
                {

                    $currentEpisodeData = powerpress_get_enclosure_data($currentEpisode->id(), 'yuppie-junk');

                    if( $currentEpisodeData )
                    {
                        $url = $currentEpisodeData['url'];
                    }
                }
            ?>

                <div class="ypj-current-episode" data-ng-controller="currentEpisodeCtrl">
                    <div class="ypj-current-episode-details">
                        <div class="ypj-current-episode-icon">
                            <p class="ypj-episode-number">{{currentEpisodeNumber}} <span>Episode</span></p>
                        </div>
                        <div class="ypj-current-episode-info">
                            <h3 class="ypj-episode-title">{{currentEpisodeTitle}}</h3>

                            <div data-ng-bind-html="currentEpisodeDescription"></div>
                        </div>
                    </div>

                    <div class="ypj-episode-player">
                        <div data-podcast-player="" id="yjpPlayer" data-media="<?php echo $url; ?>"></div>
                    </div>
                </div>

            <?php
            }
            ?>

            <div class="ypj-episodes">
                <?php
                $podcastParams = array(
                    'orderby' => 't.post_date DESC',
                    'limit' => -1
                );

                $podcasts = pods('podcast', $podcastParams);
                $podcastTotal = $podcasts->total();
                $podcastIndex = $podcasts->total();
                $podcastPerPage = 8;
                $podcastPerRow = 2;
                $loopIndex = 0;
                $paginationIndex = 0;

                while ( $podcasts->fetch() ) {

                    $title = $podcasts->display( 'post_title' );
                    $summary = $podcasts->display( 'post_content' );

                    if( function_exists('powerpress_get_enclosure_data') )
                    {

                        $EpisodeData = powerpress_get_enclosure_data($podcasts->id(), 'yuppie-junk');

                        if( $EpisodeData )
                        {
                            $url = $EpisodeData['url'];
                        }
                    }
                    ?>

                    <? //Podcast page start ?>
                    <?php
                    if( ($loopIndex) % $podcastPerPage == 0) {
                        $paginationIndex ++;
                    ?>
                    <div class="yjp-podcast-episode-page" ng-show="currentPage === <?php echo $paginationIndex ?>">
                    <?php } ?>

                        <? //Podcast row start ?>
                        <?php if( $loopIndex % $podcastPerRow == 0) { ?>
                        <div class="yjp-podcast-episode-row">
                        <?php } ?>

                            <? //Podcast episode start ?>
                            <div class="yjp-podcast-episode"
                                 data-podcast-episode="<?php echo $podcastIndex; ?>"
                                 data-podcast-total="<?php echo $podcasts->total(); ?>"
                                 data-podcast-url="<?php echo $url; ?>"
                                 data-ng-click="playEpisode()"
                                 data-ng-class="{'ypj-active-episode': isActive}"
                                >
                                <div class="ypj-episode-icon">
                                    <p class="yjp-episode-number"><?php echo $podcastIndex; ?></p>
                                </div>
                                <div class="ypj-episode-content">
                                    <p class="ypj-episode-title"><?php echo $title; ?></p>
                                    <div class="yjp-episode-summary"><?php echo $summary; ?></div>
                                    <p class="ypj-episode-status">
                                        <span data-ng-show="!isActive">Play</span>
                                        <span data-ng-show="isActive">Currently Playing</span>
                                    </p>
                                </div>
                            </div>
                            <? //Podcast episode end ?>

                        <?php if( (($loopIndex - ($podcastPerRow - 1)) % $podcastPerRow == 0) || ($loopIndex == $podcastTotal - 1) ) { ?>
                        </div>
                        <?php } ?>
                        <? //Podcast row end ?>
                    <?php if( (($loopIndex - ($podcastPerPage - 1)) % $podcastPerPage  == 0) || ($loopIndex == $podcastTotal - 1) ) { ?>
                    </div>
                    <?php } ?>
                    <? //Podcast page end ?>


                    <?php
                    $podcastIndex--;
                    $loopIndex++;
                }
                ?>

                <pagination
                    total-items="<?php echo $podcastTotal ?>"
                    items-per-page="<?php echo $podcastPerPage ?>"
                    ng-model="currentPage"
                    max-size="5"
                    class="yjp-pagination"
                    boundary-links="true"
                    previous-text="‹"
                    next-text="›"
                    first-text="«"
                    last-text="»"
                    ng-show="<?php echo $podcastTotal ?> > <?php echo $podcastPerPage ?>"></pagination>

            </div>

            <div class="yjp-subscribe-bar">

                <h3 class="yjp-subscribe-header">Subscribe</h3>

                <ul class="yjp-subscribe-links">
                    <?php if(get_field('feeds')): ?>

                        <?php while(the_repeater_field('feeds')): ?>
                            <li><a href="<?php the_sub_field('feed_url'); ?>" target="_blank"><?php the_sub_field('feed_name'); ?></a></li>
                        <?php endwhile; ?>

                    <?php endif; ?>
                </ul>

            </div>

        </div>
    </article>

    <article id="about" class="ypj-about">
        <div class="ypj-inner-wrapper">
            <h2 class="ypj-about-header"><?php the_field('about_heading'); ?></h2>

            <div class="ypj-about-summary">
                <?php the_field('about_summary'); ?>
            </div>

            <div class="ypj-hosts">
                <?php if(get_field('hosts')): ?>

                    <?php while(the_repeater_field('hosts')): ?>
                        <div class="ypj-host">
                            <div class="ypj-host-image">
                                <img src="<?php the_sub_field('host_image'); ?>" />
                            </div>
                            <div class="ypj-host-info">
                                <h4 class="ypj-host-name"><?php the_sub_field('host_name'); ?></h4>
                                <p><?php the_sub_field('host_description'); ?></p>

                                <a class="ypj-host-twitter" href="http://twitter.com/<?php the_sub_field('host_twitter_handle'); ?>" target="_blank">Follow @<?php the_sub_field('host_twitter_handle'); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>

        <a class="ypj-twitter-banner" href="http://twitter.com/yuppiejunk" target="_blank">Follow us @YuppieJunk</a>

    </article>

    <article id="submit" class="ypj-submissions">
        <div class="ypj-inner-wrapper">

            <h2 class="ypj-heading"><?php the_field('submissions_heading'); ?></h2>

            <p class="ypj-details"><?php the_field('submissions_details'); ?></p>

            <div class="ypj-submission-form">
                <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?>
            </div>

        </div>
    </article>

    <?php get_footer('nav'); ?>

</section>

<?php get_footer(); ?>
