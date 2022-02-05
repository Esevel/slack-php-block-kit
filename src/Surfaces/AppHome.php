<?php

declare(strict_types=1);

namespace SlackPhp\BlockKit\Surfaces;

use SlackPhp\BlockKit\Tools\Validation\RequiresAllOf;

/**
 * The App Home tab is a persistent, yet dynamic interface for apps that lives within the App Home for a user.
 *
 * @see https://api.slack.com/surfaces
 */
#[RequiresAllOf('blocks')]
class AppHome extends View
{
    // No additions to base View and Surface functionality.
}
