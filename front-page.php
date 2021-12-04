<?php


$context          			= Timber::context();


$postCardAvantage = array(
	'post_type' => 'card-avantage',
	'posts_per_page' => -1,
	'order'		=> 'ASC'
);

$postCardSlider = array(
	'post_type' => 'card-slider',
	'posts_per_page' => 4,
	'order'		=> 'ASC'
);

$postListOffer = array(
	'post_type' => 'list-offer',
	'posts_per_page' => -1,
	'order'		=> 'ASC'
);

$postCardClient = array(
	'post_type' => 'card-client',
	'posts_per_page' => -1,
	'order'		=> 'ASC'
);


$context['posts_card_avantage'] = new Timber\PostQuery($postCardAvantage);
$timber_post_card_avantage     = Timber::query_post('card-avantage');
$context['post_card_avantage'] = $timber_post_card_avantage;

$context['posts_card_slider'] = new Timber\PostQuery($postCardSlider);
$timber_post_card_slider     = Timber::query_post('card-slider');
$context['post_card_slider'] = $timber_post_card_slider;

$context['posts_list_offer'] = new Timber\PostQuery($postListOffer);
$timber_post_list_offer     = Timber::query_post('list-offer');
$context['post_list_offer'] = $timber_post_list_offer;

$context['posts_card_client'] = new Timber\PostQuery($postCardClient);
$timber_post_card_client     = Timber::query_post('card-client');
$context['post_card_client'] = $timber_post_card_client;




$context['posts'] 			= new Timber\Post();

$timber_post_hero             = new Timber\Post();
$context['post_hero'] = $timber_post_hero;

$timber_post_avantage           = new Timber\Post();
$context['post_avantage'] = $timber_post_avantage;

$timber_post_device             = new Timber\Post();
$context['post_device'] = $timber_post_device;

$timber_post_profitability            = new Timber\Post();
$context['post_profitability'] = $timber_post_profitability;

$timber_post_app            = new Timber\Post();
$context['post_app'] = $timber_post_app;

$timber_post_cta          = new Timber\Post();
$context['post_cta'] = $timber_post_cta;

$timber_post_offer          = new Timber\Post();
$context['post_offer'] = $timber_post_offer;

$timber_post_client         = new Timber\Post();
$context['post_client'] = $timber_post_client;

$timber_post_scrolltop            = new Timber\Post();
$context['post_scrolltop'] = $timber_post_scrolltop;

Timber::render( 'front-page.twig', $context);