<?php
/**
 * Register custom fields
 */
if (function_exists("register_field_group")) {

    register_field_group(array(
		'key' => 'group_1',
		'title' => 'Top Trumps Card',
		'fields' => array(
			array(
				'key' => 'retweet_count',
				'label' => 'Retweet Count',
				'name' => 'retweet_count',
				'type' => 'number',
				'min' => '0',
				'step' => '1',
				'prefix' => '',
				'instructions' => 'Input the number of retweets received',
				'required' => 1,
				'default_value' => '0',
				'placeholder' => 'Input retweet count here',
				'readonly' => 0,
				'disabled' => 0,
			),
			array(
				'key' => 'comment_count',
				'label' => 'Comment Count',
				'name' => 'comment_count',
				'type' => 'number',
				'min' => '0',
				'step' => '1',
				'prefix' => '',
				'instructions' => 'Input the number of comments received',
				'required' => 1,
				'default_value' => '0',
				'placeholder' => 'Input comment count here',
				'readonly' => 0,
				'disabled' => 0,
			),
			array(
				'key' => 'like_count',
				'label' => 'Like Count',
				'name' => 'like_count',
				'type' => 'number',
				'min' => '0',
				'step' => '1',
				'prefix' => '',
				'instructions' => 'Input the number of likes received',
				'required' => 1,
				'default_value' => '0',
				'placeholder' => 'Input like count here',
				'readonly' => 0,
				'disabled' => 0,
			),
			array(
				'key' => 'tweet_date',
				'label' => 'Date of Tweet',
				'name' => 'tweet_date',
				'type' => 'date_picker',
				'prefix' => '',
				'instructions' => 'Input the time and date the Tweet was published',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array(
				'key' => 'tweet_url',
				'label' => 'Tweet URL',
				'name' => 'tweet_url',
				'type' => 'link',
				'prefix' => '',
				'instructions' => 'Provide the link to the tweet here',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Tweet URL here',
				'readonly' => 0,
				'disabled' => 0,
			)
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'trump_card',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
	));
}