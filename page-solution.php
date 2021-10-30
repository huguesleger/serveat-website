<?php
/**
 * Template Name: Solution page
 */

$context = Timber::context();
$context['post'] = new Timber\Post();

Timber::render( 'page-solution.twig', $context);