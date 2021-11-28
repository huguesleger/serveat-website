<?php
/**
 * Template Name: Solution page
 */

$context = Timber::context();
$context['post'] = new Timber\Post();

$timber_post_header         = new Timber\Post();
$context['post_header'] = $timber_post_header;

$timber_post_serveat         = new Timber\Post();
$context['post_serveat'] = $timber_post_serveat;

$timber_post_functioning        = new Timber\Post();
$context['post_functioning'] = $timber_post_functioning;

$timber_post_atout         = new Timber\Post();
$context['post_atout'] = $timber_post_atout;

$timber_post_form         = new Timber\Post();
$context['post_form'] = $timber_post_form;

Timber::render( 'page-solution.twig', $context);