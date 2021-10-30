<?php

/**
 * Template Name: Contact page
 */

$context = Timber::context();

$templates = array( 'page-contact.twig', 'index.twig' );

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

Timber::render( $templates, $context, $timber_post);