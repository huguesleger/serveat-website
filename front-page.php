<?php


$context          			= Timber::context();
$context['posts'] 			= new Timber\Post();

Timber::render( 'front-page.twig', $context);