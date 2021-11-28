<?php


$context          			= Timber::context();
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

Timber::render( 'front-page.twig', $context);