<?php

/**
 * Template Name: Demo page
 */

$context = Timber::context();

$templates = array( 'page-demo.twig', 'index.twig' );

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

Timber::render( $templates, $context, $timber_post);