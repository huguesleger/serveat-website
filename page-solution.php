<?php
/**
 * Template Name: Solution page
 */


$postListServeat = array(
    'post_type' => 'list-serveat',
	'posts_per_page' => 4,
	'order'		=> 'ASC'
);

$postPackServeat = array(
    'post_type' => 'pack-serveat',
	'posts_per_page' => 3,
	'order'		=> 'ASC'
);

$postCardAtout = array(
    'post_type' => 'atout-serveat',
	'posts_per_page' => 4,
	'order'		=> 'ASC'
);


$context = Timber::context();

$context['post'] = new Timber\Post();

$context['posts_list_serveat'] = new Timber\PostQuery($postListServeat);
$timber_post_list_serveat     = Timber::query_post('list-serveat');
$context['post_list_serveat'] = $timber_post_list_serveat;

$context['posts_pack_serveat'] = new Timber\PostQuery($postPackServeat);
$timber_post_pack_serveat     = Timber::query_post('pack-serveat');
$context['post_pack_serveat'] = $timber_post_pack_serveat;

$context['posts_card_atout'] = new Timber\PostQuery($postCardAtout);
$timber_post_card_atout     = Timber::query_post('atout-serveat');
$context['post_card_atout'] = $timber_post_card_atout;


$timber_post_header         = new Timber\Post();
$context['post_header'] = $timber_post_header;

$timber_post_pack         = new Timber\Post();
$context['post_pack'] = $timber_post_pack;

$timber_post_serveat         = new Timber\Post();
$context['post_serveat'] = $timber_post_serveat;

$timber_post_functioning        = new Timber\Post();
$context['post_functioning'] = $timber_post_functioning;

$timber_post_atout         = new Timber\Post();
$context['post_atout'] = $timber_post_atout;

$timber_post_form         = new Timber\Post();
$context['post_form'] = $timber_post_form;

$timber_post_about         = new Timber\Post();
$context['post_about'] = $timber_post_about;

Timber::render( 'page-solution.twig', $context);