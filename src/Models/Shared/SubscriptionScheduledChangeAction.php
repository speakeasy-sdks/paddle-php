<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** Kind of change that's scheduled to be applied to this subscription. */
enum SubscriptionScheduledChangeAction: string
{
    case Cancel = 'cancel';
    case Pause = 'pause';
    case Resume = 'resume';
}
