<?php

/**
 * Topics Loop - Single
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbp-topic-<?php bbp_topic_id(); ?>" <?php bbp_topic_class(); ?>>

  <?php if ( !bbp_is_user_home() ) : ?>

		<?php do_action( 'bbp_theme_before_topic_started_by' ); ?>
    
        <div class="bbp-topic-started-by media-left"><?php bbp_topic_author_link( array( 'size' => '40', 'type' => 'avatar', ) ); ?></div>
    
        <?php do_action( 'bbp_theme_after_topic_started_by' ); ?>

  <?php endif; ?>
  <div class="media-body">
	<div class="bbp-topic-title">
		<?php if ( bbp_is_user_home() ) : ?>

			<?php if ( bbp_is_favorites() ) : ?>

				<span class="bbp-row-actions">

					<?php do_action( 'bbp_theme_before_topic_favorites_action' ); ?>

					<?php bbp_topic_favorite_link( array( 'mid' => '+', 'post' => '' ), array( 'pre' => '', 'mid' => '&times;', 'post' => '' ) ); ?>

					<?php do_action( 'bbp_theme_after_topic_favorites_action' ); ?>

				</span>

			<?php elseif ( bbp_is_subscriptions() ) : ?>

				<span class="bbp-row-actions">

					<?php do_action( 'bbp_theme_before_topic_subscription_action' ); ?>

					<?php bbp_topic_subscription_link( array( 'before' => '', 'subscribe' => '+', 'unsubscribe' => '&times;' ) ); ?>

					<?php do_action( 'bbp_theme_after_topic_subscription_action' ); ?>

				</span>

			<?php endif; ?>

		<?php endif; ?>

		<?php do_action( 'bbp_theme_before_topic_title' ); ?>

		<h4 class="media-heading"><a class="bbp-topic-permalink" href="<?php bbp_topic_permalink(); ?>" title="<?php bbp_topic_title(); ?>"><?php bbp_topic_title(); ?></a></h4>

		<?php do_action( 'bbp_theme_after_topic_title' ); ?>
	</div>
    
    <?php do_action( 'bbp_theme_before_topic_meta' ); ?>

    <ul class="bbp-topic-meta list-inline text-muted pull-right">
    	<?php $reply_count = bbp_get_topic_reply_count(); ?>

        <li class="bbp-topic-reply-count"><span class="badge"><?php echo $reply_count; ?></span> <?php _e( 'Replies', 'firmasite' ); ?></li>
        
        <?php if ( !empty( $reply_count ) ): ?>
            <li class="bbp-topic-freshness">
                 
                <?php do_action( 'bbp_theme_before_topic_freshness_link' ); ?>
        
                <?php bbp_topic_freshness_link(); ?>
        
                <?php do_action( 'bbp_theme_after_topic_freshness_link' ); ?>
        
            </li>
            <li class="bbp-topic-freshness-author">
                <?php do_action( 'bbp_theme_before_topic_freshness_author' ); ?>
        
                <span class="text-muted"><?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'size' => 14 ) ); ?></span>
        
                <?php do_action( 'bbp_theme_after_topic_freshness_author' ); ?>
            </li>
         <?php endif; ?>
       
    </ul>

    <?php do_action( 'bbp_theme_after_topic_meta' ); ?>
    
	<?php echo firmasite_social_bbp_get_topic_pagination(); ?>
    <?php bbp_topic_row_actions(); ?>
	<?php if ( !bbp_is_single_forum() || ( bbp_get_topic_forum_id() !== bbp_get_forum_id() ) ) : ?>

        <?php do_action( 'bbp_theme_before_topic_started_in' ); ?>

        <span class="bbp-topic-started-in"><?php printf( __( 'in: <a href="%1$s">%2$s</a>', 'firmasite' ), bbp_get_forum_permalink( bbp_get_topic_forum_id() ), bbp_get_forum_title( bbp_get_topic_forum_id() ) ); ?></span>

        <?php do_action( 'bbp_theme_after_topic_started_in' ); ?>

    <?php endif; ?>

  </div>

</div><!-- #topic-<?php bbp_topic_id(); ?> -->
