<?php

/**
 * Template Name: Contact page
 */

$context = Timber::context();


$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

$timber_post_header         = new Timber\Post();
$context['post_header'] = $timber_post_header;

$timber_post_contact        = new Timber\Post();
$context['post_contact'] = $timber_post_contact;

Timber::render( 'page-contact.twig', $context);