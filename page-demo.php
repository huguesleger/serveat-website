<?php

/**
 * Template Name: Demo page
 */

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

$timber_post_demo            = new Timber\Post();
$context['post_demo'] = $timber_post_demo;

Timber::render( 'page-demo.twig', $context);