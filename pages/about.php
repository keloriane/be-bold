<?php
/*** Template Name: About Page*/

$context = Timber::context();
$context['post'] = Gimy::post();
Timber::render('/about-us.twig', $context);

