<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="trump-cards">
	<?php 
	$trumps_query = new WP_Query( array(
		'post_type' 	=>	'trump_card',
		'post_status'	=>	'publish'
	));
	 ?>
	<?php foreach($trumps_query->posts as $post) {
		$tweet_content = $post->post_content;
		$retweet_count = get_field('retweet_count', $post);
		$comment_count = get_field('comment_count', $post);
		$like_count = get_field('like_count', $post);
		$tweet_url = get_field('tweet_url', $post);
		$tweet_date = get_field('tweet_date', $post)

		?>

		<blockquote id="tweet-<?php the_ID(); ?>" class="trump-card twitter-tweet">
			<header class="tweet-header">
			</header>
			<p class="tweet-content">
				<?php echo $tweet_content; ?>
				

			</p>
			<footer class="tweet-footer">
				Retweets: <?php echo $retweet_count; ?>
				Comments: <?php echo $comment_count; ?>
				Likes: <?php echo $like_count; ?>
				Date: <a href="<?php echo $tweet_url; ?>"><?php echo $tweet_date; ?></a>
			</footer>
		</blockquote><!-- #post-## -->
		<?php
	} ?>
</div>


<?php get_footer();
