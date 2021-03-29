<?php
/*** Template Name: Home Page*/

$context = Timber::context();
$context['home'] = Gimy::post()->custom;

$context['title'] = Gimy::post()->custom["sous-titre"];
$context['image'] = Gimy::post()->custom["image-background"];


$context['product'] = Gimy::customType(["post_type"=>"activity"]);
$context['testimonials'] = Gimy::customType(['post_type' => 'testimonials']);



Timber::render( '/index.twig',$context);

