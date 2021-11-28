<?php

/**
 * Template Name: Merci page
 */

$context = Timber::context();


$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

$timber_confirm     = new Timber\Post();
$context['post_confirm'] = $timber_confirm;

Timber::render( 'page-merci.twig', $context);