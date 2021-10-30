<?php

/**
 * Template Name: Merci page
 */

$context = Timber::context();

$templates = array( 'page-merci.twig', 'index.twig' );

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

Timber::render( $templates, $context, $timber_post);