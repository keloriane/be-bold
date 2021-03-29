<?php

/*** Template Name: Activity Page*/
global $params;
$context = Timber::context();

$activities = Gimy::customType(['post_type' => 'activity']);

$activity = array_filter($activities, function ($activity) use ($params) {
	if ($activity->slug === $params['activity']) {
		return $activity;
	}
});
$context["activity"] = array_pop($activity);
Timber::render('activity.twig', $context);
