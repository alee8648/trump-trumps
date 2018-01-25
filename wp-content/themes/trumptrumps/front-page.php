<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
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

<style>
	blockquote.twitter-tweet {
	  display: inline-block;
	  font-family: "Helvetica Neue", Roboto, "Segoe UI", Calibri, sans-serif;
	  font-size: 12px;
	  font-weight: bold;
	  line-height: 16px;
	  border-color: #eee #ddd #bbb;
	  border-radius: 5px;
	  border-style: solid;
	  border-width: 1px;
	  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
	  margin: 10px 5px;
	  padding: 0 16px 16px 16px;
	  max-width: 468px;
	}

	blockquote.twitter-tweet p {
	  font-size: 16px;
	  font-weight: normal;
	  line-height: 20px;
	}

	blockquote.twitter-tweet a {
	  color: inherit;
	  font-weight: normal;
	  text-decoration: none;
	  outline: 0 none;
	}

	blockquote.twitter-tweet a:hover,
	blockquote.twitter-tweet a:focus {
	  text-decoration: underline;
	}
</style>

<?php get_footer();
