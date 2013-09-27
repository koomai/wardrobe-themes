<?php

/**
 * Post Excerpt
 *
 * Helper function that returns the first paragraph of a post as an excerpt
 *
 * @param string $content - the post content
 * @return string
 */
function excerpt($content)
{
	return substr($content, 0, stripos($content, '</p>'));
}